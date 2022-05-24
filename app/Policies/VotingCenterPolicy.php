<?php

namespace App\Policies;

use App\Models\User;
use App\Models\VotingCenter;
use Illuminate\Auth\Access\HandlesAuthorization;

class VotingCenterPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        //
    }

    public function view(User $user, VotingCenter $votingCenter)
    {
        //
    }

    public function create(User $user)
    {
        //
    }

    public function update(User $user, VotingCenter $votingCenter)
    {
        //
    }

    public function delete(User $user, VotingCenter $votingCenter)
    {
        //
    }

    public function restore(User $user, VotingCenter $votingCenter)
    {
        //
    }

    public function forceDelete(User $user, VotingCenter $votingCenter)
    {
        //
    }
}
