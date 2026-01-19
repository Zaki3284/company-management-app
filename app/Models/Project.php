<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Company;
class Project extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectFactory> */
    use HasFactory;
    protected $fillable = [
        'Name',
        'company_id',
        'description',
        'deadline',
    ];

    public function company() {
    return $this->belongsTo(Company::class);
}

public function tasks() {
    return $this->hasMany(Task::class);
}
}
