<?php

function check_capacity($capacity, $attendees=0){
    if($capacity<$attendees){
        return "This event is sold out ";
    }

    return "There are still seats on ";
}

$vanues = array (
    'Cantina' => [100,20],
    'Dorsia' => [98,100],
    'The Max' => [53,127],
);

foreach($vanues as $name => $numbers){
    echo $name . ' - ' . check_capacity($numbers[0], $numbers[1]) . '</br>';
}