<?php

namespace App\Http\Resources;

use App\Models\Competition;
use App\Models\Season;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    public object $competition;
    public object $season;

    public function __construct($resource)
    {
        parent::__construct($resource);
        $this->competition = new Competition();
        $this->season = new Season();
    }

    public function toArray($request) : array
    {
        $countryCompetitions = $this->competition::where('country_id', $this->id)->get();
        $competitions = [];

        foreach ($countryCompetitions as $key => $item) {
            $competitions[$key]['id'] = $item->id;
            $competitions[$key]['name'] = $item->name;
            $competitions[$key]['competition_type_id'] = $item->competition_type_id;
            $seasons = $this->season::with('footballClubs')->where('competition_id', $item->id)->get();

            foreach ($seasons as $k => $season) {
                $awards = $this->season::with('awards')->findorfail($season->id)->awards;
                $winners = $this->getWinners($season, $awards);
                $competitions[$key]['seasons'][$k]['year'] = $season->year;
                $competitions[$key]['seasons'][$k]['winners'] = $winners;
                $competitions[$key]['seasons'][$k]['result'] = $season->result;
            }
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'flag' => $this->flag,
            'notice' => $this->notice,
            'competitions' => $competitions,
        ];
    }

    private function getWinners($season, $awards) : array
    {
        $arr = [];
        foreach ($awards as $award) {
            foreach ($season->footballClubs as $footballClub) {
                if ($footballClub->pivot->award_id == $award['id']) {
                    $arr[$award['id']][] = $footballClub;
                }
            }
        }
        return $arr;
    }
}
