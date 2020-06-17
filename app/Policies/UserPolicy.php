<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
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

    public function before(User $user)
    {
        if($user->isAdmin()) {
            return true;
        }
    }

    public function view(User $user, User $model)
    {
        return ($user->is($model));
    }
}
