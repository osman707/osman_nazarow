<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    use HasFactory;
    public function lesson() {
        return $this->belongsTo(Lesson::class);
    }

    public function student() {
        return $this->belongsTo(Student::class);
    }

}
