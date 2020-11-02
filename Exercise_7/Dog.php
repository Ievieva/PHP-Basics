<?php

class Dog
{
    private string $name;
    private string $sex;
    private string $mother;
    private string $father;

    public function __construct(
        string $name,
        string $sex,
        string $mother = 'Unknown',
        string $father = 'Unknown'
    )
    {
        $this->name = $name;
        $this->sex = $sex;
        $this->mother = $mother;
        $this->father = $father;
    }

    public function fathersName(): string
    {
        return $this->father;
    }

    public static function hasSameMotherAs(Dog $dog, Dog $anotherDog): bool
    {
        return $dog->fathersName() === $anotherDog->fathersName();
    }
}
