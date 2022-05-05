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
        $countryCompetitions = $this->competition->with('competitionType.awards')
            ->with('seasons.footballClubs')
            ->where('country_id', $this->id)->get();

        $countryCompetitions = $countryCompetitions->toArray();
        $competitions = array_map([$this, 'getCompetitions'], $countryCompetitions);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'slug' => $this->slug,
            'flag' => $this->flag,
            'notice' => $this->notice,
            'competitions' => $competitions,
        ];
    }

    private function getCompetitions($countryCompetition) : array
    {
        return [
            'name' => $countryCompetition['name'],
            'is_result' => in_array($countryCompetition['competition_type']['id'], $this->result),
            'awards' => array_map([$this, 'getAwards'], $countryCompetition['competition_type']['awards']),
            'seasons' => array_map([$this, 'getSeasons'], $countryCompetition['seasons'])
        ];
    }

    private function getAwards($award) : array
    {
        return [
            'award_id' => $award['id'],
            'name' => $award['name'],
        ];
    }

    private function getSeasons($season) : array
    {
        return [
            'year' => $season['year'],
            'footballClubs' => $this->getFootballClubs($season['football_clubs']),
            'result' => $season['result'],
        ];
    }

    private function getFootballClubs($footballClubs) : array
    {
        $arr = [];

        foreach ($footballClubs as $footballClub) {
            $award_id = $footballClub['pivot']['award_id'];
            $arr[$award_id]['award_id'] = $award_id;
            $arr[$award_id]['winners'][] = [
                'name' => $footballClub['name'],
                'slug' => $footballClub['slug'],
            ];
        }

        return $arr;
    }
}
