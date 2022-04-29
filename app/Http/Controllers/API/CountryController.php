<?php

namespace App\Http\Controllers\API;

use App\Http\Resources\CountryResource;
use App\Models\Country;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CountryController extends ApiController
{
    protected object $country;
    protected object $request;

    public function __construct(
        Country $country,
        Request $request)
    {
        $this->country = $country;
        $this->request = $request;
    }

    public function getModel($slug) : Response
    {
        $country = $this->country::where('slug', $slug)->firstOrFail();
        return response(new CountryResource($country), Response::HTTP_OK);
    }

    public function getModels() : Response
    {
        $countries = $this->country::all();
        return response($countries, Response::HTTP_OK);
    }
}
