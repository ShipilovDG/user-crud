<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Service\UserService;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @OA\Info(title="Search API", version="3.0.0")
     *
     */
    public function qwe()
    {

    }
    /**
     * @OA\Get(
     *     path="/api/data.json",
     *     @OA\Response(
     *         response="200",
     *         description="The data"
     *     )
     * )
     */
    private UserService $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function get(Request $request, int $id): JsonResponse
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
