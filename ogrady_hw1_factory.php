/*
	David O'Grady
	is218 HW 1
	Factory Pattern
	
	*/
<?php
class Pets
{
    private $petSpecies;
    private $petName;

    public function __construct($petSpecies, $petName)
    {
        $this->petSpecies = $species;
        $this->petName = $name;
    }

    public function getAnimal()
    {
        return $this->petName. ' is a ' . $this->petSpecies;
    }
}

class petsFactory
{
    public static function create($species, $name)
    {
        return new Pets($species, $name);
    }
}

$pet = petsFactory::create('Dog', 'Sylvia');

print_r($pet->getAnimal()); 