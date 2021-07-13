<?php

namespace entities;

class User
{
    private Int $id;
    private String $email;
    private String $password;
    private String $fullname;
    private String $username;

    function __construct(Int $id, String $email, String $username, String $fullname, String $password)
    {
        $this->id = $id;
        $this->email = $email;
        $this->username = $username;
        $this->fullname = $fullname;
        $this->password = $password;
    }

    public function hashPassword($encriptation)
    {
        $this->password = password_hash($this->password, $encriptation);
    }
}
