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
        'end_date' => 'datetime',
    ];

    protected $with = [
        'user',
    ];

    // protected $withCount = [
    //     'user as total_users' => function ($query) {
    //         $query->where('active', true);
    //     },
    // ];

    public function user()
    {
        return $this->belongsTo(User::class);

        // $this->belongsToMany()
    }

    public function scopeFilter($query, $search)
    {
        return $query->where('company_name', 'like', "%{$search}%")
            ->orWhere('position', 'like', "%{$search}%");
    }
}
