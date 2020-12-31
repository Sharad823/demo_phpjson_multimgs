<?php
//print_r($_POST);
//echo '<br><br>';
//print_r($_FILES);
//echo '<br><br>';

$i1= 'img/'.$_FILES['pic1']['name'];
$i2= 'img/'.$_FILES['pic2']['name'];

move_uploaded_file( $_FILES['pic1']['tmp_name'], $i1);
move_uploaded_file( $_FILES['pic2']['tmp_name'], $i2);

$a = $_POST;

$a['pic1'] = $i1;
$a['pic2'] = $i2;

//print_r($a);
//echo '<br><br>';

$d = file_get_contents('data.json');
$d = json_decode($d, true);

array_unshift($d, $a);

//print_r($d);
//echo '<br><br>';

$d = json_encode($d);
file_put_contents('data.json', $d);

header('location:listing.php');




?>