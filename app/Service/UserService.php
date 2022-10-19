<?php

namespace App\Service;

use App\Http\Requests\UserRequest;
use App\Models\User;
use App\Repository\UserRepository;
use Illuminate\Database\Eloquent\Collection;

class UserService
{
    private UserRepository $repository;

    public function __construct(UserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function create(UserRequest $request): User
    {
        $user = new User;

        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password = $request->get('password');
        $user->save();

        return $user;
    }

    public function getById(int $id): ?User
    {
        return $this->repository->getById($id);
    }
}
