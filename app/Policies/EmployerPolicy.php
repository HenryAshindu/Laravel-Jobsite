<?php

namespace App\Policies;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class EmployerPolicy
{
    public function edit(User $user, Employer $employer): bool
    {
        return $employer->user->is($user);
    }

}
