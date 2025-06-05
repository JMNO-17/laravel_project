<?php

namespace App\Repositories\User;

use App\Models\User;


class UserRepository implements UserRepositoryInterface
{
    public function index()
    {
        $users = User::all();

        return $users;
    }

    public function store(array $user): User
    {
        return User::create($user);
    }

    public function edit($id) {
        $user = User::find($id);
        return $user;
    }



}
