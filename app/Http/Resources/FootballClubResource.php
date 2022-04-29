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

        return [
            'id' => $this->id,
            'name' => $this->name,
            'image' => $this->image,
            'old_names' => $this->old_names,
            'notice' => $this->notice,
            'founded' => $this->founded,
            'destroyed' => $this->destroyed,
            'countries' => $countries,
            'awards' => '',
        ];
    }
}
