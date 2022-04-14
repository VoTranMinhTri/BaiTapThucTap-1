<?php

namespace App\Policies;

use App\Models\HinhAnhSuKien;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class HinhAnhSuKienPolicy
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
     * @param  \App\Models\HinhAnhSuKien  $hinhAnhSuKien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, HinhAnhSuKien $hinhAnhSuKien)
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
     * @param  \App\Models\HinhAnhSuKien  $hinhAnhSuKien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, HinhAnhSuKien $hinhAnhSuKien)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HinhAnhSuKien  $hinhAnhSuKien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, HinhAnhSuKien $hinhAnhSuKien)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HinhAnhSuKien  $hinhAnhSuKien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, HinhAnhSuKien $hinhAnhSuKien)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\HinhAnhSuKien  $hinhAnhSuKien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, HinhAnhSuKien $hinhAnhSuKien)
    {
        //
    }
}
