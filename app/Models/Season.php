<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Season extends Model
{
    use HasFactory;

    protected $fillable = ['year', 'result', 'competition_id'];

    public function footballClubs() : object
    {
        return $this->belongsToMany(FootballClub::class)->withPivot('award_id');
    }

    public function awards() : object
    {
        return $this->belongsToMany(Award::class, 'football_club_season');
    }

    public function competition() : object
    {
        return $this->hasOne(Competition::class, 'id', 'competition_id');
    }
}
