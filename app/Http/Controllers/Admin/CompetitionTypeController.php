<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompetitionType;
use Illuminate\Contracts\View\View;

class CompetitionTypeController extends Controller
{
    protected object $competitionType;

    public function __construct(
        CompetitionType $competitionType)
    {
        $this->competitionType = $competitionType;
    }

    public function index() : View
    {
        $competitionTypes = $this->competitionType->all();
        return view('admin.competition-types.list',
            compact('competitionTypes'));
    }
}
