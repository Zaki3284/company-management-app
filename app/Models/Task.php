<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /** @use HasFactory<\Database\Factories\TaskFactory> */
    use HasFactory;
        protected $fillable = [
        'title',
        'project_id',
        'employer_id',
        'Start_Date',
        'End_Date',
        'status',
    ];

    public function project() {
    return $this->belongsTo(Project::class);
}


public function employer() {
    return $this->belongsTo(User::class, 'employer_id');
}
}
