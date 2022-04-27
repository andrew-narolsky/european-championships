<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\CompetitionType;
use App\Models\Country;
use App\Models\Season;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;

class SeasonController extends Controller
{
    protected object $request;
    protected object $season;
    protected object $competition;
    protected object $competitionType;
    protected object $country;
    protected array $result = [3, 5, 6];

    public bool $isResult;

    public function __construct(
        Request $request,
        Season $season,
        Competition $competition,
        CompetitionType $competitionType,
        Country $country)
    {
        $this->request = $request;
        $this->season = $season;
        $this->competition = $competition;
        $this->competitionType = $competitionType;
        $this->country = $country;
    }

    public function create($competition_id) : View
    {
        $competition = $this->competition::with('competitionType')->findorfail($competition_id);
        $competitionType = $this->competitionType::with('awards')->findorfail($competition->competition_type_id);
        $country = $this->country::with('footballClubs')->findorfail($competition->country_id);

        $isResult = in_array($competition->competition_type_id, $this->result);

        $awards = $competitionType->awards;
        $footballClubs = $country->footballClubs;
        return view('admin.seasons.create',
            compact('awards', 'footballClubs', 'competition', 'isResult'));
    }

    public function store() : RedirectResponse
    {
        $this->request->validate([
            'year' => ['required', 'string', 'max:255']
        ]);

        $season = $this->season::create([
            'year' => $this->request->input('year'),
            'result' => $this->request->input('result'),
            'competition_id' => $this->request->input('competition_id'),
        ]);

        $this->saveIds($season, $this->request->input('award'));

        session()->flash('success', 'Season was successfully created!');
        return redirect()->route('competition.edit', $this->request->input('competition_id'));
    }

    public function edit($id) : View
    {
        $season = $this->season::with('footballClubs')->findorfail($id);

        $competition = $this->competition::with('competitionType')->findorfail($season->competition_id);
        $competitionType = $this->competitionType::with('awards')->findorfail($competition->competition_type_id);
        $country = $this->country::with('footballClubs')->findorfail($competition->country_id);

        $isResult = in_array($competition->competition_type_id, $this->result);

        $awards = $competitionType->awards;
        $footballClubs = $country->footballClubs;
        $winners = $this->getWinners($season, $awards);

//        dd(collect($winners));

        return view('admin.seasons.update',
            compact('season', 'awards', 'footballClubs', 'isResult', 'winners'));
    }


    public function update($id) : RedirectResponse
    {
        $this->request->validate([
            'year' => ['required', 'string', 'max:255']
        ]);

        $season = $this->season::with('footballClubs')->findorfail($id);
        $season->update([
            'year' => $this->request->input('year'),
            'result' => $this->request->input('result'),
            'competition_id' => $this->request->input('competition_id'),
        ]);

        $this->saveIds($season, $this->request->input('award'));

        session()->flash('success', 'Season was successfully updated!');
        return redirect()->route('competition.edit', $this->request->input('competition_id'));
    }

    public function destroy($id) : RedirectResponse
    {
        $season = $this->season::findorfail($id);
        $season->destroy($id);

        session()->flash('success', 'Season was successfully deleted!');
        return redirect()->back();
    }

    private function saveIds($season, $awards) : void
    {
        $pivot = [];
        foreach ($awards as $group) {
            if (count($group['football_club_id']) == 1) {
                $pivot[$group['football_club_id'][0]] = ['award_id' => $group['award_id']];
            } else {
                foreach ($group['football_club_id'] as $key => $item) {
                    $pivot[$group['football_club_id'][$key]] = ['award_id' => $group['award_id']];
                }
            }
        }
        $season->footballClubs()->sync($pivot);
    }

    private function getWinners($season, $awards) : array
    {
        $arr = [];
        foreach ($awards as $award) {
            foreach ($season->footballClubs as $footballClub) {
                if ($footballClub->pivot->award_id == $award->id) {
                    $arr[$award->id][] = $footballClub;
                }
            }
        }
        return $arr;
    }
}
