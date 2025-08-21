<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    // This handles when the table name does not follow Laravel's naming convention.
    // If the table name is not 'jobs', specify it here.
    protected $table = 'jobs_listings';

    protected $fillable = ['title', 'salary'];
}
