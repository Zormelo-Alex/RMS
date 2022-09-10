<?php
$ans = 0;
if($_SERVER['REQUEST_METHOD']==='POST'){
if(
    isset($_POST['calc'])
){



$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
$operator1 =$_POST['operator1'];
$operator2 =$_POST['operator2'];
settype($num1,"integer");
settype($num2,"integer");
settype($num3,"integer");
switch ($operator1){
    case "+":
        $ans = $num1 + $num2;
        break;
        case "-":
            $ans = $num1 - $num2;
            break;
            case "*":
                $ans = $num1 * $num2;
                break;
                case "/":
                    $ans = $num1 / $num2;
                    break;
                    case "%":
                        $ans = $num1 % $num2;
                        break;
}
}
switch ($operator2){
    case "+":
        $ans = $ans + $num3;
        break;
        case "-":
            $ans = $ans - $num3;
            break;
            case "*":
                $ans = $ans * $num3;
                break;
                case "/":
                    $ans = $ans / $num3;
                    break;
                    case "%":
                        $ans = $ans % $num3;
                        break;
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assignment three</title>
    <link rel="stylesheet" href="./style.css ?v=<?php time();?>">
</head>
<body>
    <div class="form" data-tilt>
    <form action="" method="POST">
        <input type="text" name="num1"> -First number <br>
        <select name="operator1" id="">
            <option value="+">Add</option>
            <option value="-">Subtract</option>
            <option value="*">Multiply</option>
            <option value="/">Divide</option>
            <option value="%">Modulos</option>
        </select>
        <br>
        <input type="text" name="num2"> -Second number<br>
        <select name="operator2" id="">A
            <option value="+">Add</option>
            <option value="-">Subtract</option>
            <option value="*">Multiply</option>
            <option value="/">Divide</option>
            <option value="%">Modulos</option>
        </select>
        <br>
        <input type="text" name="num3"> -Third number <br>
        <input class="btn" type="submit" value="Calculate" name="calc">
        <p>answer : <?php echo $ans;?></p>
    </form>
    </div>
    <!-- <script src="./vanilla-tilt.js"></script> -->
</body>
</html>