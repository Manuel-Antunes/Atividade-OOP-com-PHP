<?php

namespace services;

use entities\User;
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
                new User($e['id'], $e['email'], $e['username'], $e['fullname'], $e['password']);
            }, $list);
            return $list;
        } catch (\Exception $e) {
            echo "Error";
        }
    }
    public function createUser(
        String $username,
        String $password,
        String $fullname,
        String $email
    ) {
        try {
            $this->userRepository->store($username, $password, $fullname, $email);
        } catch (\Exception $e) {
            echo "Error";
        }
    }
    public function logIn(String $email, String $password)
    {
        try {
            $fetch = $this->userRepository->auth($email, $password);
            return new User($fetch['id'], $fetch['email'], $fetch['username'], $fetch['fullname'], $fetch['password']);
        } catch (\Exception $e) {
        }
    }
}
