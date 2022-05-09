<?php

namespace App\Http\Controllers\Admin;

use App\Classes\SaveImage;
use App\Models\Country;
use App\Models\FootballClub;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class FootballClubController extends BaseController
{
    protected object $request;
    protected object $footballClub;
    protected object $country;
    protected object $saveImage;
    protected object $str;

    public function __construct(
        Request $request,
        FootballClub $footballClub,
        Country $country,
        SaveImage $saveImage,
        Str $str)
    {
        parent::__construct();
        $this->request = $request;
        $this->footballClub = $footballClub;
        $this->country = $country;
        $this->saveImage = $saveImage;
        $this->str = $str;
    }

    public function index() : View
    {
        $country_id = $this->request->get('country_id') ?? null;
        if ($country_id) {
            $footballClubs = $this->country->with('footballClubs')->findOrFail($country_id)->footballClubs;
        } else {
            $footballClubs = $this->footballClub->paginate(20);
        }
        $countries = $this->country->all();
        return view('admin.football-clubs.list',
            compact('footballClubs', 'countries', 'country_id'));
    }

    public function create($country_id = false) : View
    {
        $countries = $this->country->all();
        return view('admin.football-clubs.create',
            compact('countries', 'country_id'));
    }

    public function store() : RedirectResponse
    {
        $this->request->validate([
            'name' => ['required', 'string', 'max:255'],
            'founded' => ['required', 'numeric', 'max:' . date('Y')],
            'countries' => ['required', 'array']
        ]);

        $image_url = $this->saveImage->save(
            $this->request->file('image'),
            $this->str->slug($this->request->input('name')),
            'football-clubs');

        $footballClub = $this->footballClub->create([
            'name' => $this->request->input('name'),
            'old_names' => $this->request->input('old_names'),
            'founded' => $this->request->input('founded'),
            'destroyed' => $this->request->input('destroyed'),
            'notice' => $this->request->input('notice'),
            'image' => $image_url,
        ]);

        $this->saveIds($footballClub, $this->request->input('countries'));

        session()->flash('success', 'Football Club was successfully created!');
        return redirect()->route('football-clubs.edit', $footballClub->id);
    }

    public function edit($id) : View
    {
        $countries = $this->country->all();
        $footballClub = $this->footballClub->with('countries')->findorfail($id);
        $ids = $footballClub->countries->pluck('id');
        return view('admin.football-clubs.update',
            compact('footballClub', 'countries', 'ids'));
    }

    public function update($id) : RedirectResponse
    {
        $this->request->validate([
            'name' => ['required', 'string', 'max:255'],
            'founded' => ['required', 'numeric', 'max:' . date('Y')],
            'countries' => ['required', 'array']
        ]);

        $footballClub = $this->footballClub->findorfail($id);

        $footballClub->update([
            'name' => $this->request->input('name'),
            'old_names' => $this->request->input('old_names'),
            'founded' => $this->request->input('founded'),
            'destroyed' => $this->request->input('destroyed'),
            'notice' => $this->request->input('notice')
        ]);

        $image_url = $this->saveImage->save(
            $this->request->file('image'),
            $this->str->slug($this->request->input('name')),
            'football-clubs');

        if ($image_url) {
            $footballClub->update([
                'image' => $image_url
            ]);
        }

        $this->saveIds($footballClub, $this->request->input('countries'));

        session()->flash('success', 'Football Club was successfully updated!');
        return redirect()->route('football-clubs.edit', $footballClub->id);
    }

    public function destroy($id) : RedirectResponse
    {
        $footballClub = $this->footballClub->findorfail($id);

        if ($footballClub->image) {
            unlink(public_path($footballClub->image));
        }
        $footballClub->destroy($id);

        session()->flash('success', 'Football Club was successfully deleted!');
        return redirect()->route('football-clubs.index');
    }

    private function saveIds($footballClub, $countries) : void
    {
        $ids = [];
        foreach ($countries as $item) {
            $ids[] = $item;
        }
        $footballClub->countries()->sync($ids);
    }
}
