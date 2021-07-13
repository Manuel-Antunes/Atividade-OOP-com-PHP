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
    
    /**
     * Get the value of fullname
     *
     * @return  String
     */
    public function getFullname()
    {
        return $this->fullname;
    }

    /**
     * Set the value of fullname
     *
     * @param  String  $fullname
     *
     * @return  self
     */
    public function setFullname(String $fullname)
    {
        $this->fullname = $fullname;

        return $this;
    }

    /**
     * Get the value of id
     *
     * @return  Int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param  Int  $id
     *
     * @return  self
     */
    public function setId(Int $id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of username
     *
     * @return  String
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set the value of username
     *
     * @param  String  $username
     *
     * @return  self
     */
    public function setUsername(String $username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  String
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  String  $email
     *
     * @return  self
     */
    public function setEmail(String $email)
    {
        $this->email = $email;

        return $this;
    }
}
