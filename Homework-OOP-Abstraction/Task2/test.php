<?php

require_once 'Person.php';
require_once 'Student.php';
require_once 'Employee.php';

$person1 = new Person("Ivan Ivanov", 35, true);
$person2 = new Person("Martina Petrova", 27, false);

$student1 = new Student("Daniela Petrova", 17, false, 5);
$student2 = new Student("Martin Ivanov", 15, true, 4);

$employee1 = new Employee("Krasimir Draganov", 34, true, 30);
$employee2 = new Employee("Vesela Trifonova", 17, false, 20);

$people = array(
		$person1 , $person2 , $student1 , $student2 , $employee1,  $employee2
);

foreach ($people as $person)
{
	if(get_class($person) == "Person"){
		$person->showPersonInfo();
	} elseif(get_class($person) == "Student") {
		$person->showStudentInfo();
	} else {
		$person->showEmployeeInfo();
	}
}