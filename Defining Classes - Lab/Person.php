<?php
class Person{
    /**
     * @var string
     */
    public $name;
    /**
     * @var integer
     */
    public $age;

}
$person = new Person();
echo(count(get_object_vars($person)));
