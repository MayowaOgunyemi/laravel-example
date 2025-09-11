<?php

namespace App\Policies;

use App\Models\Job;
use App\Models\User;

class JobPolicy
{    
    /**
     * Method edit
     * Determine whether the user can edit the job.
     *
     * @param User $user [explicite description]
     * @param Job $job [explicite description]
     *
     * @return bool
     */
    public function edit(User $user, Job $job): bool
    {
        return $job->employer->user->is($user);
    }
}
