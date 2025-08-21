<?php

namespace App\Models;

use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Job extends Model
{
    use HasFactory;
    // This handles when the table name does not follow Laravel's naming convention.
    // If the table name is not 'jobs', specify it here.
    protected $table = 'jobs_listings';

    protected $fillable = ['title', 'salary'];

    /**
     * Get the employer that owns the job.
     */
    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
