<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FootballClub extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['name', 'slug', 'image', 'old_names', 'notice', 'founded', 'destroyed'];

    public function sluggable() : array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function countries() : object
    {
        return $this->belongsToMany(Country::class);
    }

    public function awards() : object
    {
        return $this->belongsToMany(Award::class, 'football_club_season');
    }

    public function seasons() : object
    {
        return $this->belongsToMany(Season::class, 'football_club_season')->withPivot('award_id');
    }
}
