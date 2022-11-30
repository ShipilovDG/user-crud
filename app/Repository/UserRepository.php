<?php

namespace App\Repository;

use App\Models\User;
use OpenApi\Annotations as OA;

class UserRepository
{
    /**
     * @var User[]
     */
    public array $users;

    public function getById(int $id): null|User
    {
        return User::all()->where('id', $id)->first();
    }
}
