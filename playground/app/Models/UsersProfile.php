<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersProfile extends Model
{
    use HasFactory;
    protected $table = 'users_profile';
    protected $fillable = ['birthdate', 'address', 'phone', 'gender', 'user_id'];
}
