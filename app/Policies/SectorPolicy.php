<?php

namespace App\Policies;

use App\Models\Sector;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SectorPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Sector $sector)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Sector $sector)
    {
        //
    }

    public function delete(User $user, Sector $sector)
    {
        //
    }

    public function restore(User $user, Sector $sector)
    {
        //
    }

    public function forceDelete(User $user, Sector $sector)
    {
        //
    }
}
