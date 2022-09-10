<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "examples";

$con = mysqli_connect($hostname,$username,$password,$dbname);
if(!$con){
    echo "not connected";
}else{
    echo "connected";
}
if(isset($_POST['submit'])){


$name = $_POST['name'];
$age = $_POST['age'];
$gender = $_POST['sex'];
$sql = mysqli_query($con,"INSERT INTO student (name,age,gender) VALUES ('$name','$age','$gender')");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="shortcut icon" href="./715631.jpg" type="image/x-icon">
</head>
<body>
    <form action="" method="POST">
        <input type="text" placeholder="name" name="name">name <br>
        <input type="text" placeholder="age" name="age">age <br>
        Gender: <input type="radio" name="sex" value="male">Male
        <input type="radio" name="sex" value="female">Female <br>
        <input type="submit" value="submit" name="submit">
    </form>
</body>
</html>