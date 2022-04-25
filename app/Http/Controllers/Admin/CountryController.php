<?php

namespace App\Http\Controllers\Admin;

use App\Classes\SaveImage;
use App\Http\Controllers\Controller;
use App\Models\CompetitionType;
use App\Models\Country;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CountryController extends Controller
{
    protected object $request;
    protected object $country;
    protected object $competitionType;
    protected object $saveImage;
    protected object $str;

    public function __construct(Request $request, Country $country, CompetitionType $competitionType, SaveImage $saveImage, Str $str)
    {
        $this->request = $request;
        $this->country = $country;
        $this->competitionType = $competitionType;
        $this->saveImage = $saveImage;
        $this->str = $str;
    }

    public function index() : View
    {
        $countries = $this->country->paginate(20);
        return view('admin.countries.list', compact('countries'));
    }

    public function create() : View
    {
        $competitionTypes = $this->competitionType::all();
        return view('admin.countries.create', compact('competitionTypes'));
    }

    public function store() : RedirectResponse
    {
        $this->request->validate([
            'name' => ['required', 'unique:countries', 'string', 'max:255']
        ]);

        $image_url = $this->saveImage->save(
            $this->request->file('flag'),
            $this->str::slug($this->request->input('name')),
                'countries');

        $country = $this->country::create([
            'name' => $this->request->input('name'),
            'notice' => $this->request->input('notice'),
            'flag' => $image_url,
        ]);

        $this->saveIds($country, $this->request->input('competition_types'));

        session()->flash('success', 'Country was successfully created!');
        return redirect()->route('countries.edit', $country->id);
    }

    public function edit($id) : View
    {
        $country = $this->country::with('competitionTypes')->findorfail($id);
        $competitionTypes = $this->competitionType::all();
        $ids = $country->competitionTypes->pluck('id');
        return view('admin.countries.update', compact('country', 'competitionTypes', 'ids'));
    }

    public function update($id) : RedirectResponse
    {
        $this->request->validate([
            'name' => ['required', 'unique:countries,name,' . $id, 'string', 'max:255']
        ]);

        $country = $this->country::find($id);

        $image_url = $this->saveImage->save(
                $this->request->file('new_flag'),
                $this->str::slug($this->request->input('name')),
                'countries') ?? $country->flag;

        $country->update([
            'name' => $this->request->input('name'),
            'notice' => $this->request->input('notice'),
            'flag' => $image_url,
        ]);

        $this->saveIds($country, $this->request->input('competition_types'));

        session()->flash('success', 'Country was successfully updated!');
        return redirect()->route('countries.edit', $country->id);
    }

    public function destroy($id) : RedirectResponse
    {
        $country = $this->country::find($id);

        if ($country->flag) {
            unlink(public_path($country->flag));
        }
        $country->destroy($id);

        session()->flash('success', 'Country was successfully deleted!');
        return redirect()->route('countries.index');
    }

    private function saveIds($country, $competition_types)
    {
        $ids = [];
        foreach ($competition_types as $item) {
            $ids[] = $item;
        }
        $country->competitionTypes()->sync($ids);
    }
}
