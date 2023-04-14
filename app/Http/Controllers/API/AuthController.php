<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\AuthResource;
use App\Repository\AuthRepositoryInterface;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private $authRepo;

    public function __construct(AuthRepositoryInterface $authRepo)
    {
        $this->authRepo = $authRepo;
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');
        $data = $this->authRepo->login($credentials);
        return new AuthResource($data);
    }
}
