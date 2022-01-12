<?php

class Users
{
    private $name;
    private $role;
    private $email;

    public function __construct($name, $role, $email)
    {
        $this->name = $name;
        $this->role = $role;
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName( string $name): void
    {
        $this->name = $name;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole( int $role): void
    {
        $this->role = $role;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setEmail(string $email){
        $this->email = $email;
    }

    public  function getInfo(){
        return " Ten cua nguoi dung la : " . $this->name . " <br> " . "Email cua nguoi dung la : " . $this->email. "<br>" . " Role cua nguoi dung la : " . $this->role;  ;
    }

    public function isUser(){
        if ($this->role == 1) {
            echo " Day la Admin ";
        }
        else if ($this->role == 2 ){
            echo " Day la User";
        }
        else {
            echo " Moi ban nhap lai so role ";
        }
    }
}