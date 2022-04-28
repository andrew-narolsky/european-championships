<?php

namespace App\Http\Controllers\API;

use App\Models\FootballClub;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class FootballClubController extends ApiController
{
    protected object $footballClub;
    protected object $request;

    public function __construct(
        FootballClub $footballClub,
        Request $request)
    {
        $this->footballClub = $footballClub;
        $this->request = $request;
    }

    public function getModel($id) : Response
    {
        $footballClub = $this->footballClub::findorfail($id);
        return response($footballClub, Response::HTTP_OK);
    }

    public function getModels() : Response
    {
        $footballClubs = $this->footballClub::all();
        return response($footballClubs, Response::HTTP_OK);
    }
}
