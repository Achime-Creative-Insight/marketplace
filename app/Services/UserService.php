<?php


namespace App\Services;

use App\Models\User;

class UserService
{
    public function listUsers()
    {
        return User::paginate();
    }

    public function getTopUsers(int $limit)
    {
        return User::take($limit)->get();
    }
}
