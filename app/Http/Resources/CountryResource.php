<?php

namespace App\Http\Resources;

use App\Models\Competition;
use Illuminate\Http\Resources\Json\JsonResource;

class CountryResource extends JsonResource
{
    public object $competition;
    protected array $result = [3, 5, 6];

    public function __construct($resource)
    {
        parent::__construct($resource);
        $this->competition = new Competition();
    }

    public function toArray($request) : array
    {
        $countryCompetitions = $this->competition::with('seasons.footballClubs')
            ->with('seasons.awards')
            ->where('country_id', $this->id)->get();
        $competitions = [];

        foreach ($countryCompetitions as $key => $competition) {
            $competitions[$key]['id'] = $competition->id;
            $competitions[$key]['name'] = $competition->name;

            foreach ($competition->seasons as $k => $season) {
                $awards = $season->awards->toArray();
                $winners = $this->getWinners($season, $awards, $competition->competition_type_id);
                $competitions[$key]['awards'] = array_map([$this, 'awards'], $awards);
                if ($competition->competition_type_id == 1 && count($awards) == 2) {
                    $competitions[$key]['awards']['Bronze'] = 'Bronze';
                }
                $competitions[$key]['result'] = in_array($competition->competition_type_id, $this->result);
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

    private function getWinners($season, $awards, $competition_type_id) : array
    {
        $arr = [];
        foreach ($awards as $award) {
            foreach ($season->footballClubs as $key => $footballClub) {
                if ($footballClub->pivot->award_id == $award['id']) {
                    $arr[$award['id']][$key]['award_id'] = $footballClub->pivot->award_id;
                    $arr[$award['id']][$key]['name'] = $footballClub->name;
                    $arr[$award['id']][$key]['slug'] = $footballClub->slug;
                }
            }
        }
        if ($competition_type_id == 1 && count($season->footballClubs) == 2) {
            $arr[3][2]['award_id'] = 3;
            $arr[3][2]['name'] = [];
        }
        return $arr;
    }

    private static function awards($award)
    {
        return $award['name'];
    }
}
