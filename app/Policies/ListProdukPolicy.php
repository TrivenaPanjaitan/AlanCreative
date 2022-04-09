<?php

namespace App\Policies;

use App\Models\ListProduk;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ListProdukPolicy
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
     * @param  \App\Models\ListProduk  $listProduk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, ListProduk $listProduk)
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
     * @param  \App\Models\ListProduk  $listProduk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, ListProduk $listProduk)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ListProduk  $listProduk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, ListProduk $listProduk)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ListProduk  $listProduk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, ListProduk $listProduk)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\ListProduk  $listProduk
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, ListProduk $listProduk)
    {
        //
    }
}
