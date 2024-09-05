<?php

namespace App\Policies;

use App\Models\User;
use App\Models\aboutMe;
use Illuminate\Auth\Access\HandlesAuthorization;

class AboutMePolicy
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
     * @param  \App\Models\aboutMe  $aboutMe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, aboutMe $aboutMe)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\aboutMe  $aboutMe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, aboutMe $aboutMe)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\aboutMe  $aboutMe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, aboutMe $aboutMe)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\aboutMe  $aboutMe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, aboutMe $aboutMe)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\aboutMe  $aboutMe
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, aboutMe $aboutMe)
    {
        //
    }
}
