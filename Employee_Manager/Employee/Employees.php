<?php

namespace Employee;
class Employees
{
    private $firstName;
    private $lastName;
    private $DOB;
    private $add;
    private $position;

    public function __construct($firstName, $lastName, $DOB, $add, $position)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->DOB = $DOB;
        $this->add = $add;
        $this->position = $position;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): void
    {
        $this->firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): void
    {
        $this->lastName = $lastName;
    }

    public function getDOB()
    {
        return $this->DOB;
    }

    public function setDOB(int $DOB): void
    {
        $this->DOB = $DOB;
    }

    public function getAdd()
    {
        return $this->add;
    }

    public function setAdd($add): void
    {
        $this->add = $add;
    }

    public function getPosition()
    {
        return $this->position;
    }

    public function setPosition($position): void
    {
        $this->position = $position;
    }

}