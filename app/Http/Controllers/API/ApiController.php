<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Symfony\Component\HttpFoundation\Response;

abstract class ApiController extends Controller
{
    abstract public function getModel($id) : Response;

    abstract public function getModels() : Response;
}
