<!-- Connection to database -->
<?php 
$mysqli = new mysqli("localhost", "root", "root", "takemycardb");
if(mysqli_connect_errno())
{
    echo "Error connection database " . $mysqli->connect_error;
}
else
{
    echo 'Connection successful';
}
// $sql = "INSERT INTO cars(model,brand,description) VALUES ('".$POST['model']."','".$POST['brand'] ."','".$POST['description']."')";
$sql = "INSERT INTO cars(model,brand,description) VALUES ('".$_POST['model']."','".$_POST['brand'] ."','".$_POST['description']."')";


if(mysqli_query($mysqli, $sql))
{
    echo 'Adding successful\n';
    var_dump($_POST);
}
else
{
    echo "Error " . $sql . "" . mysqli_error($mysqli);
}

$mysqli->close();