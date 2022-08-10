<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$Password = $_POST['Password'];
//database connection

$conn = mysqli_connect('localhost','root','Aa123456','tes');


if(!$conn){
die('Connection Faild : '.$conn->connect_error);
}


else{
echo '.....successfully registeration..... ';


echo $Password;
$stmt = mysqli_prepare($conn, "insert into Registr(Password)values(?)");
mysqli_stmt_bind_param($stmt,"s",$Password);
 


$result = mysqli_stmt_execute($stmt);
echo "<h2>Your Input:</h2>";
echo $Password;
echo "<br>";
echo $result;
mysqli_close($conn);

}

?>