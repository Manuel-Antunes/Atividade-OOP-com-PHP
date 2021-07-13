<?php

require_once "app/entities/User.php";
require_once "app/data/repositories/UserRepository.php";

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
            $users = array_map(function ($e) {
                return new User($e['id'], $e['email'], $e['username'], $e['fullname'], $e['password']);
            }, $list);
            return $users;
        } catch (Exception $e) {
            echo $e->getMessage();
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
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    public function logIn(String $email, String $password)
    {
        try {
            $fetch = $this->userRepository->auth($email, $password);
            if (is_null($fetch)) {
                return false;
            }
            $user = new User($fetch['id'], $fetch['email'], $fetch['username'], $fetch['fullname'], $fetch['password']);
            return $user;
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
}
