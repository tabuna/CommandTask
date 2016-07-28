<?php

namespace App\Policies;

use App\Models\Organization;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class OrganizationPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * @param User $user
     * @param Organization $organization
     * @return bool
     */
    public function edit(User $user, Organization $organization)
    {
        return $user->id === $organization->user_id;
    }


    /**
     * @param User $user
     * @param Organization $organization
     * @return bool
     */
    public function update(User $user, Organization $organization)
    {
        return $user->id === $organization->user_id;
    }


}
