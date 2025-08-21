<?php

namespace App\Models;

use App\Models\Job;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Employer extends Model
{
    /** @use HasFactory<\Database\Factories\EmployerFactory> */
    use HasFactory;

    // Define the fillable attributes if needed
    protected $fillable = ['name'];

    /**
     * Get the jobs for the employer.
     */
    public function jobs()
    {
        return $this->hasMany(Job::class);
    }
}
