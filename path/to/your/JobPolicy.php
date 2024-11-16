<?php
namespace App\Policies;

use App\Models\Job;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class JobPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        // Add logic to determine if the user can view any jobs
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Job $job): bool
    {
        // Add logic to determine if the user can view the specific job
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        // Add logic to determine if the user can create a job
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Job $job): bool
    {
        // Add logic to determine if the user can update the specific job
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Job $job): bool
    {
        // Add logic to determine if the user can delete the specific job
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Job $job): bool
    {
        // Add logic to determine if the user can restore the specific job
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Job $job): bool
    {
        // Add logic to determine if the user can permanently delete the specific job
    }
} 