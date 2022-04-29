<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FootballClubResource extends JsonResource
{
    public function __construct($resource)
    {
        parent::__construct($resource);
    }

    public function toArray($request) : array
    {
        $countries = [];
        foreach ($this->countries as $country) {
            $countries[] = $country->name;
        }

        $awards = [];

        foreach ($this->seasons as $key => $season) {
            if ($season->competition->competition_type_id == 1) {
                $awards['championship']['name'] = 'Domestic championship';
                if ($season->pivot->award_id == 1) {
                    $awards['championship']['gold']['years'][] = $season->year;
                } else if ($season->pivot->award_id == 2) {
                    $awards['championship']['silver']['years'][] = $season->year;
                } else {
                    $awards['championship']['bronze']['years'][] = $season->year;
                }
            } else if ($season->competition->competition_type_id  == 2) {
                $awards['championship']['name'] = 'Domestic championship';
                $awards['championship']['gold']['years'][] = $season->year;
            } else if ($season->competition->competition_type_id  == 3) {
                $awards['cup']['name'] = 'Domestic cup';
                if ($season->pivot->award_id == 4) {
                    $awards['cup']['winner']['years'][] = $season->year;
                } else {
                    $awards['cup']['runner_up']['years'][] = $season->year;
                }
            } else if ($season->competition->competition_type_id  == 4) {
                $awards['cup']['name'] = 'Domestic cup';
                $awards['cup']['winner']['years'][] = $season->year;
            } else if ($season->competition->competition_type_id  == 5) {
                $awards['league_cup']['name'] = 'League cup';
                if ($season->pivot->award_id == 4) {
                    $awards['league_cup']['winner']['years'][] = $season->year;
                } else {
                    $awards['league_cup']['runner_up']['years'][] = $season->year;
                }
            } else {
                $awards['super_cup']['name'] = 'Super cup';
                if ($season->pivot->award_id == 5) {
                    $awards['super_cup']['winner']['years'][] = $season->year;
                } else {
                    $awards['super_cup']['runner_up']['years'][] = $season->year;
                }
            }
        }

        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image,
            'old_names' => $this->old_names,
            'notice' => $this->notice,
            'founded' => $this->founded,
            'destroyed' => $this->destroyed,
            'countries' => $countries,
            'awards' => $awards,
        ];
    }
}
