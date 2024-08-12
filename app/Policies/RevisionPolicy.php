<?php

namespace App\Policies;

use App\Models\Revision;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class RevisionPolicy {
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
     * @param Revision $revision
     * @return Response|bool
     */
    public function view(User $user, Revision $revision) {
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
     * @param Revision $revision
     * @return Response|bool
     */
    public function update(User $user, Revision $revision) {
        // This condition because Nova authorize update policy method when run the action
        if (request()->has('action')) {
            return true;
        }

        return false;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param Revision $revision
     * @return Response|bool
     */
    public function delete(User $user, Revision $revision) {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param Revision $revision
     * @return Response|bool
     */
    public function restore(User $user, Revision $revision) {
        return false;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param Revision $revision
     * @return Response|bool
     */
    public function forceDelete(User $user, Revision $revision) {
        return false;
    }
}
