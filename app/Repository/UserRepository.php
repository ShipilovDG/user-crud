<?php

namespace App\Repository;

use App\Models\User;

class UserRepository
{
    public function getById(int $id): null|User
    {
        return User::all()->where('id', $id)->first();
    }
}
