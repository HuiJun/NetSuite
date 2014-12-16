<?php

class Person
{
    public $name = 'testing';
}

if (!class_exists('Person2')) {
    class Person2
    {
        public $name2;

        public function __construct($name)
        {
            $this->name2 = $name;
        }
    }
}
