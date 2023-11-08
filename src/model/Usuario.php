<?php

class Usuario
{
    private $id;
    private $name;
    private $last_name;
    private $email;
    private $password;

    // Construtor
    public function __construct($id, $name, $last_name, $email, $password)
    {
        $this->id = $id;
        $this->name = $name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->password = $password;
    }

    // Métodos getter e setter
    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getLast_name()
    {
        return $this->last_name;
    }
    public function setLast_name($newlast_name)
    {
        $this->last_name = $newlast_name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}
