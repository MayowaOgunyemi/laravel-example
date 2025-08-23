<?php

namespace App\Models;

use App\Models\Tag;
use App\Models\Employer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
    
    /**
     * Method tags
     * Get the tags associated with the job. This defines a many-to-many relationship
     * where a job can have multiple tags and a tag can belong to multiple jobs.
     *
     * @return BelongsToMany
     */
    public function tags()
    {
        return $this->belongsToMany(Tag::class, foreignPivotKey: 'job_listing_id');
    }
}
