<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    public function personal()
    {
        return $this->belongsTo(Personal::class);
    }

    public function director()
    {
        return $this->belongsTo(Director::class);
    }

    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
}
