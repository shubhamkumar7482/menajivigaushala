<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "menajivigaushala";

$conn = mysqli_connect($servername,$username,$password,$database);

if($conn){
    // echo "Successful";
}else{
    echo "No Connection";
}

?>