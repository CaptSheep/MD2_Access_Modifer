<?php

namespace Manager;
class Manager
{
    private array $employees;

    public function __construct()
    {
        $this->employees = [];
    }

    public function addEmployee($employee)
    {
        $this->employees[] = $employee;
    }
    public function getEmployee() : array{
       return $this->employees;
    }
}