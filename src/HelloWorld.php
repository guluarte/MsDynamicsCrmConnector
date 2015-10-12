<?php

namespace Guluarte\MsDynamicsCrmConnector;

/**
 * Class HelloWorld
 * @package Guluarte\MsDynamicsCrmConnector
 */
class HelloWorld
{

    /**
     * @var string $name
     */
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function sayHi()
    {
        return 'Hello ' . $this->name . '!';
    }
}
