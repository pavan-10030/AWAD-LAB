<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password);

if(!$conn){
    die("Sorry we failed to connect: ". mysqli_connect_error());
}else{
    echo "Connection was successful<br>";
}

$sql="CREATE DATABASE pavan";
$result=mysqli_query($conn,$sql);

if($result){
    echo "The database was created sucessfully<br>";
}else{
    echo "The database was not created successfully because of this error--->" .mysqli_error($conn);
}


?>

