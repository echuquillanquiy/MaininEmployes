<?php

namespace App\Policies;

use App\Models\Trabajo;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TrabajoPolicy
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

    public function postulado(User $user, Trabajo $trabajo)
    {
        return $trabajo->postulantes->contains($user->id);
    }
}
