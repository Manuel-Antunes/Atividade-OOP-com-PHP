<?php

namespace entities;

class User
{
    private Int $id;
    private String $email;
    private String $password;
    private String $fullname;
    private String $username;
    public function hashPassword($encriptation)
    {
        $this->password = password_hash($this->password,$encriptation);
    }
}
