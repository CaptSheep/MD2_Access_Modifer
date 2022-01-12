<?php

class Application
{
    private string $name;
    public static int $count = 0;

    public function __construct($name)
    {
        $this->name = $name;
        self::$count++;
    }

    public function __toString()
    {
        return "Application name : " . $this->name;
    }
}