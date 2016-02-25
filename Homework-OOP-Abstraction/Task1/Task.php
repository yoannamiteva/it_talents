<?php

class Task
{
	private $name;
	
	private $workingHours;
	
	public function __construct($name, $workingHours)
	{
		$this->name = $name;
		$this->workingHours = $workingHours;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	public function getWorkingHours()
	{
		return $this->workingHours;
	}
	
	public function setWorkingHours($workingHours)
	{
		$this->workingHours = $workingHours;
	}
}