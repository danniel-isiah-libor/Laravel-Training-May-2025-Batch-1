<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;
    protected $table = 'work_experience';
    protected $fillable = ['company_name', 'start_date', 'end_date', 'tenure', 'role', 'location', 'user_id'];
    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date'
    ];

    public function user(){
        // $this->belongsToMany(User::class);
        return $this->belongsTo(User::class);
    }
}
