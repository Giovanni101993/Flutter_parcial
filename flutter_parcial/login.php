<?php

$db = mysqli_connect('localhost', 'root', '', 'flutter');
$name = $_POST['name'];
$password = $_POST['password'];

$sql = "SELECT * FROM usuarios WHERE name = '".$name."' AND
password = '".$password."'";

$result = mysqli_query($db, $sql);
$count = mysqli_num_rows($result);
if ($count == 1) {
    echo json_encode("Success");
}else{
    echo json_encode("Error");
}
?>

