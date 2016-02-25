<?php

class Student extends Person
{
	private $score;
	
	public function __construct($name, $age, $isMale, $score)
	{
		parent::__construct($name, $age, $isMale);
		if($score >= 2 && $score <= 6)
		{
			$this->score = $score;
		}
	}
	
	public function getScore()
	{
		return $this->score;
	}
	
	public function showStudentInfo()
	{
		parent::showPersonInfo();
		
		echo "Score: ", $this->score,PHP_EOL;
	}
}