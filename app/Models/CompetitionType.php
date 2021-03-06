<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CompetitionType extends Model
{
    use HasFactory;

    public function awards() : object
    {
        return $this->belongsToMany(Award::class);
    }
}
