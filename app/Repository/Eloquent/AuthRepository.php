<?php

namespace App\Repository\Eloquent;

use App\Models\User;
use App\Repository\AuthRepositoryInterface;
use Illuminate\Support\Facades\Auth;

class AuthRepository extends BaseRepository implements AuthRepositoryInterface
{

    /**
     * UserRepository constructor.
     *
     * @param User $model
     */
    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    /**
     * @param $data
     * @return array
     */
    public function login($data): array
    {
        if (Auth::attempt($data)) {
            $user = Auth::user();
            return ['token'=>$user->createToken('test-key')->plainTextToken];
        }
        return [];
    }
}
