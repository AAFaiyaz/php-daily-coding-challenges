<?php

require 'functions.php';

require 'Task.php';



$pdo = connectToDb();

$tasks = fetchAllTasks($pdo);





// dd($results[0]->description);

require 'index.view.php';







































// $names = [
//     'Jeff',
//     'John',
//     'Mary'
// ];

// $animals = [
//     'Cow',
//     'Dog',
//     'Chicken',
//     'Cat'
// ];

// $person = [
//     'age' => 31,
//     'hair-color' => 'Brown',
//     'career' => 'Web Devloper'
// ];

// $person['name'] = 'Jeffrey';

// unset($person['age']);

// echo "<pre>";
// die(var_dump ($person));
// echo "</pre>";

// $tasks = [
//     'title' => 'Watch PHP Practitioner',
//     'due' => 'Today',
//     'assignd_to' => 'Faiyaz',
//     'completed' => true
// ];



// dd($tasks);

// if (isAdult(15) <= 21){
//     echo "You are not old enough";
// }else {
//     echo "Welcome abroad";
// }


// class Task {

//     public $description;

//     public $completed = false;
    
//     public function __construct($description)
//     {
//         // Automatically triggered on instantiation
//         $this->description = $description;
//     }

//     public function complete()
//     {
//         $this->completed = true;
//     }

//     public function isComplete()
//     {
//        return $this->completed;
//     }

// }

// $task = new Task ('Go to the store');

// $task->complete();

// var_dump($task->isComplete());

// $tasks = [
//     new Task('Go to the store'),
//     new Task('Finish up th escreencast'),
//     new Task('Take a good night sleep')
// ];



// $tasks[1]->complete();

