<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Service\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Whoops\Handler\JsonResponseHandler;

class UserController extends Controller
{
    private UserService $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function get(Request $request, int $id): JsonResponseHandler
    {
        $user = $this->service->getById($id);
        return new JsonResponse($user, $user ? 200 : 404);
    }

    public function create(UserRequest $request): JsonResponse
    {
        $this->service->create($request);

        return new JsonResponse();
    }

}
