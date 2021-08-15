<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    public function director()
    {
        return $this->hasOne(Director::class);
    }

    public function personals()
    {
        return $this->hasMany(Personal::class);
    }
}
