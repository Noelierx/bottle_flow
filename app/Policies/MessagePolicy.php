<?php

namespace App\Policies;

use Auth;
use App\User;
use App\Message;
use Illuminate\Auth\Access\HandlesAuthorization;

class MessagePolicy
{
    use HandlesAuthorization;

    public function index(User $user)
    {
        return Auth::id() == $user->id;
    }

    public function view(User $user, Message $message)
    {
        return $user->id == $message->receiver->id;
    }

    public function create(User $user)
    {
        return Auth::id() == $user->id;
    }
}
