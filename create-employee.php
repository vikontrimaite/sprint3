<?php

use Models\Employee;

require_once "bootstrap.php";

$newEmployeeName = $argv[1];
var_dump($newEmployeeName);
$employee = new Employee();
var_dump($employee);
$employee->setName($newEmployeeName);

$entityManager->persist($employee);
$entityManager->flush();

echo "Created Employee with ID " . $employee->getId() . "\n";
