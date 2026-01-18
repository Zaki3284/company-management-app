<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    /** @use HasFactory<\Database\Factories\CompanyFactory> */
    use HasFactory;

    protected $fillable = [
        'Name',
        'Employees',
        'ProjectS',
        'NameEmployees_id',
        'Project_id',
    ];

    
    
    
}
