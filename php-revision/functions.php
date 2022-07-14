<?php

function dd($data){

    echo '<pre>';

    die(var_dump($data));

    echo "</pre>";
}


function isAdult($age){
    return $age;
}

function connectToDb()
{
    try{
        return new PDO('mysql:host=127.0.0.1;dbname=mytodo', 'root','');
    
    }catch (PDOException $e){
        
        die($e->getMessage());
    }
}

function fetchAllTasks($pdo)
{
    $statement = $pdo->prepare('select * from todos');

    $statement->execute();

    // $tasks = $statement->fetchAll(PDO::FETCH_OBJ); We are fetch everthinh on into dummy generic object

    return $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

}