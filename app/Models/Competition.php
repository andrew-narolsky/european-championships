<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'country_id', 'competition_type_id'];

    public function competitionType() : object
    {
        return $this->hasOne(CompetitionType::class, 'id', 'competition_type_id');
    }

    public function seasons() : object
    {
        return $this->hasMany(Season::class)->with('competition');
    }
}
