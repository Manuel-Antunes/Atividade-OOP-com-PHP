<?php

namespace services;

use repositories\UserRepository;

class UserService
{
    private UserRepository $userRepository;

    function __construct(UserRepository $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    public function listUsers()
    {
        try {
            $list = $this->userRepository->index();
            array_map(function ($e) {
            }, $list);
        } catch (\Exception $e) {
        }
    }
    public function createUser()
    {
    }
    public function getUser()
    {
    }
}
