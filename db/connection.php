<!-- Connection to database -->
<?php 
$mysqli = new mysqli("localhost", "root", "root", "takemycardb");
if($mysqli->errno)
{
    echo "Error connection database " . $mysqli->errno;
}
else
{
    echo 'Connection successful';
}