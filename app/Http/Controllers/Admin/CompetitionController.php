<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\CompetitionType;
use App\Models\Country;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;

class CompetitionController extends Controller
{
    protected object $request;
    protected object $competition;
    protected object $country;
    protected object $competitionType;

    public function __construct(
        Request $request,
        Competition $competition,
        Country $country,
        CompetitionType $competitionType)
    {
        $this->request = $request;
        $this->competition = $competition;
        $this->country = $country;
        $this->competitionType = $competitionType;
    }

    public function create() : View
    {
        $competitionTypes = $this->competitionType::all();
        $countries = $this->country->all();
        return view('admin.competitions.create',
            compact('countries', 'competitionTypes'));
    }

    public function store() : RedirectResponse
    {
        $this->request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $this->competition::create([
            'name' => $this->request->input('name'),
            'country_id' => $this->request->input('country_id'),
            'competition_type_id' => $this->request->input('competition_type_id'),
        ]);

        session()->flash('success', 'Competition was successfully created!');
        return redirect()->route('countries.edit', $this->request->input('country_id'));
    }

    public function edit($id) : View
    {
        $competition = $this->competition::findorfail($id);
        $competitionTypes = $this->competitionType::all();
        $countries = $this->country->all();
        return view('admin.competitions.update',
            compact('competition', 'countries', 'competitionTypes'));
    }

    public function update($id) : RedirectResponse
    {
        $this->request->validate([
            'name' => ['required', 'string', 'max:255']
        ]);

        $competition = $this->competition::findorfail($id);
        $competition->update([
            'name' => $this->request->input('name'),
            'country_id' => $this->request->input('country_id'),
            'competition_type_id' => $this->request->input('competition_type_id'),
        ]);

        session()->flash('success', 'Competition was successfully updated!');
        return redirect()->route('countries.edit', $this->request->input('country_id'));
    }

    public function destroy($id) : RedirectResponse
    {
        $competition = $this->competition::findorfail($id);
        $competition->destroy($id);

        session()->flash('success', 'Competition was successfully deleted!');
        return redirect()->back();
    }
}
