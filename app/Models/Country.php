<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory, Sluggable;

    protected $fillable = ['name', 'slug', 'notice', 'flag'];

    public function sluggable() : array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function competitionTypes() : object
    {
        return $this->belongsToMany(CompetitionType::class);
    }
}
