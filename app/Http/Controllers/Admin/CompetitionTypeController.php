<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CompetitionType;
use Illuminate\Contracts\View\View;

class CompetitionTypeController extends BaseController
{
    protected object $competitionType;

    public function __construct(
        CompetitionType $competitionType)
    {
        parent::__construct();
        $this->competitionType = $competitionType;
    }

    public function index() : View
    {
        $competitionTypes = $this->competitionType->all();
        return view('admin.competition-types.list',
            compact('competitionTypes'));
    }
}
