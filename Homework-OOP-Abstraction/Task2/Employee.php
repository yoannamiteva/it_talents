<?php


class Employee extends Person
{
	private $daySalary;
	
	public function __construct($name, $age, $isMale, $daySalary)
	{
		parent::__construct($name, $age, $isMale);
		
		$this->daySalary = $daySalary;
	}
	
	public function getDaySalary()
	{
		return $this->daySalary;
	}
	
	public function calculateOvetime($hours)
	{
		if($this->getAge() < 18) {
			$overtime = 0;
		} else  {
			$overtime = $this->daySalary * $hours * 1.5;
		}
		return $overtime;
	}
	
	public function showEmployeeInfo()
	{
		parent::showPersonInfo();
		
		echo "Day salary: ", $this->daySalary, PHP_EOL;
	}
}