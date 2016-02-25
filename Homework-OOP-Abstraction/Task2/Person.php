<?php

class Person
{
	protected $name;
	
	protected $age;
	
	protected $isMale;
	
	public function __construct($name, $age, $isMale)
	{
		$this->name = $name;
		$this->age = $age;
		$this->isMale = $isMale;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getAge()
	{
		return $this->age;
	}
	
	public function getIsMale()
	{
		return $this->isMale;
	}
	
	public function showPersonInfo()
	{
		echo "Name: " , $this->name , PHP_EOL,
			  "Age: ",$this->age, PHP_EOL,
			  "Gender: ", ($this->isMale ? "Male" : "Female"),PHP_EOL;
	}
}