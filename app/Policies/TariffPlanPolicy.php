<?php

namespace App\Policies;

use App\Models\TariffPlan;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class TariffPlanPolicy {
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
     * @param TariffPlan $tariffPlan
     * @return Response|bool
     */
    public function view(User $user, TariffPlan $tariffPlan) {
        return false;
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
     * @param TariffPlan $tariffPlan
     * @return Response|bool
     */
    public function update(User $user, TariffPlan $tariffPlan) {
        return true;
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param User $user
     * @param TariffPlan $tariffPlan
     * @return Response|bool
     */
    public function delete(User $user, TariffPlan $tariffPlan) {
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param User $user
     * @param TariffPlan $tariffPlan
     * @return Response|bool
     */
    public function restore(User $user, TariffPlan $tariffPlan) {
        return true;
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param User $user
     * @param TariffPlan $tariffPlan
     * @return Response|bool
     */
    public function forceDelete(User $user, TariffPlan $tariffPlan) {
        return false;
    }

    public function addGenre(User $user, TariffPlan $tariffPlan): bool {
        return false;
    }
}
