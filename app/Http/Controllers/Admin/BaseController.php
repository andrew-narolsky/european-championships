<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\App;

class BaseController extends Controller
{
    protected $locale;

    public function __construct()
    {
        $this->middleware(function($request, $next) {
            $this->locale = App::getLocale();
            return $next($request);
        });
    }
}
