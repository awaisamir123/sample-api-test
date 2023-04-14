<?php
namespace App\Repository;


interface AuthRepositoryInterface
{
    public function login($data): array ;
}
