<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Location extends Model
{

    public function classrooms()
    {
        return $this->hasMany(Classroom::class);
    }



}
