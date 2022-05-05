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
            $awards[$season->competition_id]['name'] = $season->competition->name;
            foreach ($season->awards as $award) {
                if ($award->id == $season->pivot->award_id) {
                    $awards[$season->competition_id]['trophies'][$season->pivot->award_id]['id'] = $season->pivot->award_id;
                    $awards[$season->competition_id]['trophies'][$season->pivot->award_id]['title'] = $award->name;
                }
            }
            $awards[$season->competition_id]['trophies'][$season->pivot->award_id]['years'][] = $season->year;
            uasort($awards[$season->competition_id]['trophies'], [$this, 'cmp_obj']);
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

    private static function cmp_obj($a, $b)
    {
        return $a['id'] <=> $b['id'];
    }
}
