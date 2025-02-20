<?php

namespace App\Policies;

use App\Models\User;

class CommentPolicy
{
    public function comment(User $user)
    {
        return $user->role === 'comment';
    }
}
