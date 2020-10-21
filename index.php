<?php
include 'Dancer.php';

$queueMale = new SplQueue();
$queueFemale = new SplQueue();

$dancer1 = new Dancer("John", 'Male');
$dancer2 = new Dancer("James", 'Male');
$dancer3 = new Dancer("Kane", 'Male');
$dancer4 = new Dancer("Son", 'Male');

$dancer5 = new Dancer("Sarah", 'Female');
$dancer6 = new Dancer("Linda", 'Female');
$dancer7 = new Dancer("Kimmy", 'Female');


$queueMale->enqueue($dancer1);
$queueMale->enqueue($dancer2);
$queueMale->enqueue($dancer3);
$queueMale->enqueue($dancer4);

$queueFemale->enqueue($dancer5);
$queueFemale->enqueue($dancer6);
$queueFemale->enqueue($dancer7);

function getDancer($_man, $_woman)
{
    if ($_man->count() === 0 || $_woman->count() === 0) {
        echo "No one dance";
    } else {
        echo "<pre>";
        print_r($_man->dequeue()->name . '-');
        print_r($_woman->dequeue()->name);
    }
}
getDancer($queueMale, $queueFemale);


