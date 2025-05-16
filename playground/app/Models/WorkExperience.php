<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkExperience extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'company_name',
        'position',
        'start_date',
        'end_date',
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function index()
    {
        // Fetch all work experiences with the related user info
        $workExperiences = WorkExperience::with('user')->get();

        // Pass it to the Blade view
        return view('work-experience.index', compact('workExperiences'));
    }
}
