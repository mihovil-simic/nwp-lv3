<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'price',
        'start_date',
        'end_date',
        'user_id'
    ];

    public function team()
    {
        return $this->belongsToMany(User::class, 'project_user', 'project_id', 'user_id')
            ->withPivot('job_description')
            ->withTimestamps();
    }
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function leader()
    {
        return $this->belongsTo(User::class, 'leader_id');
    }
}