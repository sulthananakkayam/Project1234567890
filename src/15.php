<?php

$my_array = array(
    'apple',
    'banana',
    'orange'
);

$random_index = rand(0, count($my_array) - 1);

echo $my_array[$random_index];

?>