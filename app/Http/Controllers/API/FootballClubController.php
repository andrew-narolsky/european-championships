<?php

namespace App\Http\Controllers\API;

use App\Models\Country;
use App\Models\FootballClub;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FootballClubController extends ApiController
{
    protected object $country;
    protected object $footballClub;
    protected object $request;

    public function __construct(
        Country $country,
        FootballClub $footballClub,
        Request $request)
    {
        $this->country = $country;
        $this->footballClub = $footballClub;
        $this->request = $request;
    }

    public function getModel($slug) : Response
    {
        $footballClub = $this->footballClub::where('slug', $slug)->firstOrFail();
        return response($footballClub, Response::HTTP_OK);
    }

    public function getModels() : Response
    {
        if ($this->request->input('country')) {
            $footballClubs = $this->country::with('footballClubs')
                ->findorfail($this->request->input('country'))->footballClubs;
        } else {
            $footballClubs = $this->footballClub::all();
        }
        return response($footballClubs, Response::HTTP_OK);
    }
}
