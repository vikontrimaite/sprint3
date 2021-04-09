<?php

use Models\Project;

require_once "bootstrap.php";

$newProjectName = $argv[1];
var_dump($newProjectName);

$project = new Project();
var_dump($project);

$project->setName($newProjectName);

$entityManager->persist($project);
$entityManager->flush();

echo "Created Project with ID " . $project->getId() . "\n";
