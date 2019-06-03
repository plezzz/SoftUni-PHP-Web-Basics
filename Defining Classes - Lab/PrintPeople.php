<?php

class Person
{
    /**
     * @var string
     */
    public $name;
    /**
     * @var integer
     */
    public $age;
    /**
     * @var string
     */
    public $occupation;

    public function __construct(string $name, int $age, string $occupation)
    {
        $this->name = $name;
        $this->age = $age;
        $this->occupation = $occupation;
    }

    /**
     * @return int
     */
    public function getAge(): int
    {
        return $this->age;
    }

    public function __toString()
    {
        return $this->name . ' - age: ' . $this->age . ', occupation: ' . $this->occupation . "\n";
    }
}

$persons = [];
while (true) {
    $input = readline();
    if ($input === "END")
        break;
    list($name, $age, $occupation) = explode(" ", $input);
    $person = new Person($name, $age, $occupation);
    $persons[] = $person;
}

usort($persons, function (Person $personOne, Person $personTwo) {
    return $personOne->getAge() > $personTwo->getAge();
});


foreach ($persons as $person){
    echo $person;
}