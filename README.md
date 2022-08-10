# insert intgeer in database using mysql and php
# php,css,php,mysql
html
```
<!DOCTYPE html>
<html>
<head>
      <title>Registration Form</title>
      <link rel="stylesheet"type="text/css"href="test1.css">
</head>
<body>
  <h1>Registration Form<h1>
    <form action="test1.php"method="post">
      <input type="text"placeholder="firstName"id="firstName"name="firstName">
      <input type="text"placeholder="lastName"id="lastName"name="lastName">
      <input type="email"placeholder="Email"id="Email"name="Email">
      <input type="password"placeholder="Password"id="Password"name="Password">
      <input type="password"placeholder="ConfirmPassword "id="ConfirmPassword "name="ConfirmPassword">

      <div>
      <input type="radio" id="male" name="gender"value="m"><label for="male">Male</label>
      <input type="radio" id="female"name="gender"value="f"><label for="female">Female</label>
      <input type="radio" id="other"name="gender"value="o"><label for="other">other</label>
      </div>

      <input type="submit"name="Submit">


    </form>
  </body>
  </html>
 ```
 

  php
 
  ```
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

```

""mysql""
![C](https://user-images.githubusercontent.com/81494917/183962622-0f57e548-d4f6-4968-8b67-10eb1ea90d6b.PNG)

![Ca](https://user-images.githubusercontent.com/81494917/183962810-8e1f5345-72f5-4f8a-ad27-3dbcf61ff5fe.PNG)


#Result

![Capturee](https://user-images.githubusercontent.com/81494917/183962851-38222983-c1c7-41cf-9b10-ac456fcdc196.PNG)
