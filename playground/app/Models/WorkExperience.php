<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

   public $fillable = [
        'company',
        'start_date',
        'end_date',
        'role',
    ];
}
