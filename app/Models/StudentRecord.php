<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StudentRecord extends Model
{

    
  protected $fillable = [
        'name',
        'email',
        'class',
        'roll_number',
        'marks',
        'gender',
        'dob',
    ];
}
