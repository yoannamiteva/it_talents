<?php

$people = [
				[
						'name' => 'Maria Kuncheva',
						'image' => 'images/Mariq.jpg',
						'post' => 'sanitary',
						'birth' => '12.03.1994',
						'gender' => 'female'
				],
				[
						'name' => 'Simona Trifonova',
						'image' => 'images/Simona.jpg',
						'post' => 'PR agent',
						'birth' => '18.10.1994',
						'gender' => 'female'
				],
				[
						'name' => 'Polya Karlovska',
						'image' => 'images/Polq.jpg',
						'post' => 'architect',
						'birth' => '24.06.1994',
						'gender' => 'female'
				],
				[
						'name' => 'Marian Kurtov',
						'image' => 'images/Marian.jpg',
						'post' => 'bartender',
						'birth' => '05.09.1993',
						'gender' => 'male'
				],
				[
						'name' => 'Dilyan Kanchev',
						'image' => 'images/Dilyan.jpg',
						'post' => 'Political scientist',
						'birth' => '06.03.1994',
						'gender' => 'male',
				],
				[
						'name' => 'Martin Arsov',
						'image' => 'images/Martin.jpg',
						'post' => 'lawyer',
						'birth' => '02.07.1990',
						'gender' => 'male'
				],
				[
						'name' => 'Hristina Petkova',
						'image' => 'images/Hristina.jpg',
						'post' => 'QA engineer',
						'birth' => '21.09.1994',
						'gender' => 'female'
				],
				[
						'name' => 'Desislava Zlatkova',
						'image' => 'images/Desislava.jpg',
						'post' => 'Java programmer',
						'birth' => '24.04.1994',
						'gender' => 'female'
				],
				[
						'name' => 'Petyo Pashev',
						'image' => 'images/Petyo.jpg',
						'post' => 'manager',
						'birth' => '20.07.1994',
						'gender' => 'male',
				],
		
		]; 

 if (isset($_POST['getPeople']) && isset($_POST['personName'])){
	
	$requestedPerson = [];
	foreach ($people as $person) 
	{
		if(($_POST['personName']) == $person['name'])
		{
			$requestedPerson = $person;
		}
	}
	
	echo json_encode($requestedPerson);
	
} else if (isset($_POST['getPeople'])){
	
		echo json_encode($people);
		
} 




