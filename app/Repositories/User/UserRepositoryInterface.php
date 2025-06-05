<?php

namespace App\Repositories\User;

interface UserRepositoryInterface
{
    public function index();
    public function store(array $user);
    public function edit($id);
}
