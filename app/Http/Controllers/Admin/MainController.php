<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Contracts\View\View;

class MainController extends BaseController
{
    public function index() : View
    {
        return view('admin.index');
    }
}
