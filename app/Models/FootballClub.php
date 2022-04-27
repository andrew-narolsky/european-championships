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
}
