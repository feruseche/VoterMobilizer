<?php

namespace App\Policies;

use App\Models\Mobilizer;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class MobilizerPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, Mobilizer $mobilizer)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, Mobilizer $mobilizer)
    {
        //
    }

    public function delete(User $user, Mobilizer $mobilizer)
    {
        //
    }

    public function restore(User $user, Mobilizer $mobilizer)
    {
        //
    }

    public function forceDelete(User $user, Mobilizer $mobilizer)
    {
        //
    }
}