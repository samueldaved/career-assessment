<?php

namespace App\Policies;

use App\Models\TestResult;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TestResultPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TestResult  $testResult
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, TestResult $testResult)
    {
        return $user->role == 'HRD' || $user->role == 'Admin' || $user->id == $testResult->user_id;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        return $user->role == 'User';
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TestResult  $testResult
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, TestResult $testResult)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TestResult  $testResult
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, TestResult $testResult)
    {
        return $user->role == 'Admin';
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TestResult  $testResult
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, TestResult $testResult)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\TestResult  $testResult
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, TestResult $testResult)
    {
        //
    }

    //authorize admin to download user test result
    public function download(User $user) {
        return $user->role == 'HRD';
    }
}
