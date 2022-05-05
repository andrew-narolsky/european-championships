<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\CompetitionType;
use App\Models\Country;
use App\Models\Season;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CompetitionController extends Controller
{
    protected object $request;
    protected object $competition;
    protected object $country;
    protected object $season;
    protected object $competitionType;
    protected array $result = [3, 5, 6];

    public bool $isResult;

    public function __construct(
        Request $request,
        Competition $competition,
        Country $country,
        Season $season,
        CompetitionType $competitionType)
    {
        $this->request = $request;
        $this->competition = $competition;
        $this->country = $country;
        $this->season = $season;
        $this->competitionType = $competitionType;
    }

    public function create($country_id = false) : View
    {
        $competitionTypes = $this->competitionType->all();
        $countries = $this->country->all();
        return view('admin.competitions.create',
            compact('countries', 'competitionTypes', 'country_id'));
    }

    public function store() : RedirectResponse
    {
        $this->request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $this->competition->create([
            'name' => $this->request->input('name'),
            'country_id' => $this->request->input('country_id'),
            'competition_type_id' => $this->request->input('competition_type_id'),
        ]);

        session()->flash('success', 'Competition was successfully created!');
        return redirect()->route('countries.edit', $this->request->input('country_id'));
    }

    public function edit($id) : View
    {
        $competition = $this->competition->with('competitionType')->findorfail($id);
        $competitionTypes = $this->competitionType->all();
        $countries = $this->country->all();
        $country = $this->country->findorfail($competition->country_id);
        $seasons = $this->season->with('footballClubs')->where('competition_id', $id)->get();
        $awards = $competition->competitionType->awards;
        $seasons = $this->getSeasons($seasons, $awards, $competition->competition_type_id);

        $isResult = in_array($competition->competition_type_id, $this->result);

        return view('admin.competitions.update',
            compact('competition', 'countries', 'seasons', 'competitionTypes', 'awards', 'country', 'isResult'));
    }

    public function update($id) : RedirectResponse
    {
        $this->request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $competition = $this->competition->findorfail($id);
        $competition->update([
            'name' => $this->request->input('name'),
            'country_id' => $this->request->input('country_id'),
            'competition_type_id' => $this->request->input('competition_type_id'),
        ]);

        session()->flash('success', 'Competition was successfully updated!');
        return redirect()->route('countries.edit', $this->request->input('country_id'));
    }

    public function destroy($id) : RedirectResponse
    {
        $competition = $this->competition->findorfail($id);
        $competition->destroy($id);

        session()->flash('success', 'Competition was successfully deleted!');
        return redirect()->back();
    }

    private function getSeasons($seasons, $awards, $competition_type_id) : array
    {
        $arr = [];
        foreach ($seasons as $key => $season) {
            $arr[$key]['id'] = $season->id;
            $arr[$key]['year'] = $season->year;
            $arr[$key]['result'] = $season->result;
            foreach ($awards as $award) {
                foreach ($season->footballClubs as $footballClub) {
                    if ($footballClub->pivot->award_id == $award->id) {
                        $arr[$key]['winners'][$award->name][] = $footballClub;
                    }
                }
            }
            if ($competition_type_id == 1 && count($season->footballClubs) == 2) {
                $arr[$key]['winners']['Bronze'] = false;
            }
        }
        return $arr;
    }
}
