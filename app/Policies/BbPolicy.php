<?php

namespace App\Policies;

use App\Models\Bb;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
use Illuminate\Auth\Access\Response;

class BbPolicy
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
    public function update(User $user, Bb $bb)
    {
        return $bb->user->id === $user->id
            ? Response::allow()
            : Response::deny('Вы не можете обновить или удалить чужое объявление');
    }

    public function destroy(User $user, Bb $bb)
    {
        return $this->update($user, $bb);
    }
}
