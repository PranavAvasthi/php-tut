<?php

# Variables
// $name="Pranav Avasthi";
// $age=23;
// $isDeveloper=true;
// echo $name;
// echo $age;
// var_dump($isDeveloper);

# Strings
// $name="Pranav";
// echo "Hello $name";
// echo "Hello {$name}";

# Concatenation
// $firstName = "Pranav";
// $lastName = "Avasthi";
// echo $firstName . " " . $lastName;

# Arrays
// $skills = ["React", "PHP", "Laravel"];
// echo $skills[0];

# Associative Arrays
// $user = [
//   "name" => "Pranav Avasthi",
//   "age" => 23,
//   "skills" => ["React Native", "PHP"]
// ];
// echo $user["name"];
// echo $user["skills"][0];

# If Statements
// $age = 23;
// if($age>=18) {
//   echo "Adult";
// } else {
//   echo "Minor";
// }

# For Loops
// $skills = ["React", "PHP"];
// foreach ($skills as $skill) {
//   echo $skill . "\n";
// }

# Foreach Loops
// $user = [
//   "name" => "Pranav Avasthi",
//   "role" => "Developer"
// ];
// foreach($user as $key => $value) {
//   echo "$key: $value\n";
// }

# Functions
// function add(int $a, int $b) : int {
//   return $a + $b;
// }
// echo add(10, 20);

# Anonymous Functions
// $double = fn($number) => $number * 2;
// echo $double(5);

# Classes and Objects
// class TaskService {
//   private array $tasks = [];

//   public function addTask(string $title) : void {
//     $this->tasks[] = [
//       "id" => count($this->tasks) + 1,
//       "title" => $title,
//       "completed" => false
//     ];
//   }

//   public function getTasks() : array {
//     return $this->tasks;
//   }
// }

// $service = new TaskService();
// $service->addTask("Learn PHP");
// $service->addTask("Learn Laravel");

// print_r($service->getTasks());

# Arrays and Functions
$tasks = [
    [
        "id" => 1,
        "title" => "Learn PHP",
        "completed" => true
    ],
    [
        "id" => 2,
        "title" => "Learn Laravel",
        "completed" => false
    ],
    [
        "id" => 3,
        "title" => "Build REST API",
        "completed" => false
    ]
];

function getPendingTasks(array $tasks) : array {
  $pendingTasks = [];

  foreach($tasks as $task) {
    if($task["completed"] === false) {
      $pendingTasks[] = $task;
    }
  }

  return $pendingTasks;
}

print_r(getPendingTasks($tasks));