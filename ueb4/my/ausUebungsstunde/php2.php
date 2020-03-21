<?php
interface iGroup05{
	public function setVariable($var);
	public function getVariable();
}

class Person implements iGroup05{
	public $firstname;
	public $lastname;
	function getVariable(){
		return $this->firstname; //rückgabe ist der inhalt von firstname der instanz
	}
	function setVariable($var){
		$this->firstname=$var;
	}
}

$person = new Person();
$person->setVariable('Florian');

echo $person->getVariable();
?>