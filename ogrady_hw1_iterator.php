/*
	David O'Grady
	is218 HW 1 
	Iterator
	*/
	
<?php

class Pet {
	private $species;
	private $name;
	
	function __construct($species_in, $name_in){
		$this->species = $species_in;
		$this->name = $name_in;
	}

	function getSpecies(){
		return $this->species;
	}
	function getName(){
		return $this->name;
	}
	function getAnimal(){
		return $this->getName().' is a '.$this->getSpecies();
	}
}

class PetList{
	private $pets = array();
	private $petsCount = 0;
	public function __construct(){
	}
	public function getPetCount(){
		return $this->petsCount;
	}
	private function setPetCount($newCount){
		$this->petsCount = $newCount;
	}
	public function getPet($petID){
		if((is_numeric($petID)) &&
			($petID <= $this->getPetCount())){
				return $this->$pets[$petID];
			} else {
				return Null;
			}
	}
	public function addPet(Pet $pet_in){
		$this->setPetCount($this->getPetCount()+1);
		$this->pets[$this->getPetCount()] = $pet_in;
		return $this->getPetCount;
	}
}

class PetListIterator {
    protected $petList;
    protected $currentPet = 0;

    public function __construct(PetList $petList_in) {
      $this->petList = $petList_in;
    }
    public function getCurrentPet() {
      if (($this->currentPet > 0) && 
          ($this->petList->getPetCount() >= $this->currentPet)) {
        return $this->petList->getPet($this->currentPet);
      }
    }
    public function getNextPet() {
      if ($this->hasNextPet()) {
        return $this->petList->getPet(++$this->currentPet);
      } else {
        return NULL;
      }
    }
    public function hasNextPet() {
      if ($this->petList->getPetCount() > $this->currentPet) {
        return TRUE;
      } else {
        return FALSE;
      }
    }
}

  $firstPet = new Pet('dog','ralph');
  $secondPet = new Pet('bird','polly');
  $thirdPet = new Pet('cat','rico');

  $Pets = new petList();
  $Pets->addPet($firstPet);
  $Pets->addPet($secondPet);
  $Pets->addPet($thirdPet);
 
 
  $petsIterator = new petListIterator($Pets);

?>