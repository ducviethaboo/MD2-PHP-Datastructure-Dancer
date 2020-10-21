<?php


class Dancer extends SplDoublyLinkedList implements Iterator, ArrayAccess, Countable
{
    public $name;
    public $gender;

    public function __construct($name, $gender)
    {
        $this->name = $name;
        $this->gender = $gender;
    }
}