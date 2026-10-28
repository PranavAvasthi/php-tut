<?php

# Classes, objects and constructors
// class Task {
//     # 1st way of writing constructors
//     // public string $title;
//     // public bool $isCompleted;

//     // public function __construct(string $title) {
//     //     $this->title = $title;
//     //     $this->isCompleted = false;
//     // }

//     # Modern way of writing constructors
//     public function __construct(
//         public string $title,
//         public bool $isCompleted = false
//     ){}

//     public function complete() : void {
//         $this->isCompleted = true;
//     }
// }

// $task = new Task("Learn Laravel");
// $task->complete();

// var_dump($task);

# Inheritance
// class User {
//     public function __construct(
//         public string $name
//     ) {}

//     public function greet() : string {
//         return "Hello, {$this->name}";
//     }
// }

// class Admin extends User {
//     public function deleteUser() : void {
//         echo "User deleted";
//     }
// }

// $admin = new Admin("Pranav");
// echo $admin->greet();
// $admin->deleteUser();

# Interfaces and dependency injection
interface NotificationService {
    public function send(string $message): void;
}

class EmailNotification implements NotificationService {
    public function send(string $message) : void {
        echo "Email: " . $message;
    }
}

class TaskManager {
    public function __construct(
        private NotificationService $notification
    ){}

    public function completeTask() : void {
        $this->notification->send("Task Completed");
    }
}

$manager = new TaskManager(
    new EmailNotification()
);

$manager->completeTask();