/*
	David O'Grady
	is218 HW 1 
	Decorator Pattern
	Intldate - International Date, sets a class called Intldate that is then Decorated to display different formats that are found internationally.
	*/
<?php

class Intldate {
		private $month;
		private $date;
		private $year;
		
		function __construct($month_in, $date_in, $year_in){
			$this->month = $month_in;
			$this->date = $date_in;
			$this->year = $year_in;
		}
		
		function getMonth(){
			return $this-> month;
		}
		
		function getDate(){
			return $this-> date;
		}
	
		function getYear() {
			return $this-> year;
		}
		
		function getFulldate() {
			return $this->getMonth().' '.$this->getDate().', '.$this->getYear();
		}
}

class IntldateDecorator {
	protected $month;
	protected $date;
	protected $year;
	public function __construct(Intldate $intl_date_in) {
		$this->idate = $intl_date_in;
		$this->resetDate();
	}
	
	function resetDate() {
		$this->month = $this->Intldate->getMonth;
		$this->date = $this->Intldate->getDate;
		$this->year = $this->Intldate->getYear;
	}
	
	function showDate(){
		return $this->month.date.year;
	}
}

class IntldateEuropean extends IntldateDecorator {
	private $euro;
	public function __construct(IntldateDecorator $euro_in){
		$this->euro =  $euro_in;
	}
	
	function euroSwap() {
		$this->euro->idate = Str_replace(' '$this->euro->idate);
	}
}

$date1 = new Intldate('3','9','15');

$edate1 = new IntldateDecorator($date1);

$edate2 = new IntldateEuropean($edate1);
?>	
