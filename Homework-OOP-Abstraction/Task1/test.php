<?php

require_once 'Employee.php';
require_once 'AllWork.php';
require_once 'Task.php';

$allwork = new AllWork();

$task1 = new Task("Task1", 6);
$allwork->addTask($task1);

$task2 = new Task("Task2", 5);
$allwork->addTask($task2);

$task3 = new Task("Task3", 3);
$allwork->addTask($task3);

$task4 = new Task("Task4", 5);
$allwork->addTask($task4);

$task5 = new Task("Task5", 8);
$allwork->addTask($task5);

$task6 = new Task("Task6", 4);
$allwork->addTask($task6);

$task7 = new Task("Task7", 4);
$allwork->addTask($task7);

$task8 = new Task("Task8", 6);
$allwork->addTask($task8);

$task9 = new Task("Task9", 7);
$allwork->addTask($task9);

$task10 = new Task("Task10", 2);
$allwork->addTask($task10);

$employee1 = new Employee("Ivan Dimitrov");
$employee2 = new Employee("Marina Krasimirova");
$employee3 = new Employee("Stoqn Krystev");



