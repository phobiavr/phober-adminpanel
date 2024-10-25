<?php

namespace App\Policies;

use App\Models\Hostname;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class HostnamePolicy {
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function viewAny(User $user) {
        return true;
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param User $user
     * @param Hostname $hostname
     * @return Response|bool
     */
    public function view(User $user, Hostname $hostname) {
        return true;
    }

    /**
     * Determine whether the user can create models.
     *
     * @param User $user
     * @return Response|bool
     */
    public function create(User $user) {
        return false;
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param User $user
     * @param Hostname $hostname
     * @return Response|bool
     */
    public function update(User $user, Hostname $hostname) {
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Hostname $hostname
     * @return Response|bool
     */
    public function delete(User $user, Hostname $hostname) {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Hostname $hostname
     * @return Response|bool
     */
    public function restore(User $user, Hostname $hostname) {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Hostname $hostname
     * @return Response|bool
     */
    public function forceDelete(User $user, Hostname $hostname) {
        return false;
    }
}
