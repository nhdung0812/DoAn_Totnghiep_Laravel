<?php

namespace App\Policies;

use App\CheckPermission;
use App\Post;
use App\TaiKhoan;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\User  $user
     * @param  \App\CheckPermission  $checkPermission
     * @return mixed
     */
    public function view(TaiKhoan $user, Post $checkPermission)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\User  $user
     * @param  \App\CheckPermission  $checkPermission
     * @return mixed
     */
    public function update(User $user, CheckPermission $checkPermission)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\CheckPermission  $checkPermission
     * @return mixed
     */
    public function delete(User $user, CheckPermission $checkPermission)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\User  $user
     * @param  \App\CheckPermission  $checkPermission
     * @return mixed
     */
    public function restore(User $user, CheckPermission $checkPermission)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\User  $user
     * @param  \App\CheckPermission  $checkPermission
     * @return mixed
     */
    public function forceDelete(User $user, CheckPermission $checkPermission)
    {
        //
    }
}
