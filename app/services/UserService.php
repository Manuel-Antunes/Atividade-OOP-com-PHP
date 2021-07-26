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
            $users = $this->mapToUsers($list);
            return $users;
        } catch (Exception $e) {
            echo `<div class="error-message">` . $e->getMessage() . `</div>`;
            return false;
        }
    }
    public function createUser(
        String $username,
        String $password,
        String $fullname,
        String $email
    ) {
        try {
            $this->userRepository->store($username, password_hash($password, PASSWORD_DEFAULT), $fullname, $email);
        } catch (Exception $e) {
            echo '<div class="error-message">' . $e->getMessage() . '</div>';
            return false;
        }
    }
    public function search(String $queryString)
    {
        try {
            $list = $this->userRepository->search($queryString);
            $users = $this->mapToUsers($list);
            return $users;
        } catch (Exception $e) {
            echo `<div class="error-message">` . $e->getMessage() . `</div>`;
            return false;
        }
    }

    public function logIn(String $email, String $password)
    {
        try {
            $fetch = $this->userRepository->findByEmal($email);
            if (is_null($fetch)) {
                throw new Exception("User not found");
            }
            if (!password_verify($password, $fetch['password'])) {
                throw new Exception("Invalid password");
            }
            $user = new User($fetch['id'], $fetch['email'], $fetch['username'], $fetch['fullname']);
            return $user;
        } catch (Exception $e) {
            echo `<div class="error-message">` . $e->getMessage() . `</div>`;
            return false;
        }
    }

    private function mapToUsers($array)
    {
        return array_map(function ($e) {
            return new User($e['id'], $e['email'], $e['username'], $e['fullname'], $e['password']);
        }, $array);
    }
}
