<?php

namespace App\Policies;

use App\Models\Banner;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class BannerPolicy
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
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Banner $banner)
    {
        //
    }

    

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Banner  $banner
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Banner $banner)
    {
        return $user->name == "Admin";
    }

}
