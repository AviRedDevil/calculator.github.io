<?php
 $cookie_name1="num";
 $cookie_value1="";
 $cookie_name2="op";
 $cookie_value2="";

 if (isset($_POST['num'])) {
    # code...
    $num=$_POST['input'].$_POST['num'];
 } else {
    # code...
    $num="";
 }
 if ($_POST['op']) {
    # code...
    $cookie_value1=$_POST['input'];
    setcookie($cookie_name1, $cookie_value1, time()+(86400*30), "/");

    $cookie_value2=$_POST['op'];
    setcookie($cookie_name2, $cookie_value2, time()+(86400*30), "/");
    $num="";
 }
 if(isset($_POST['equal'])){
    $num=$_POST['input'];
    switch ($_COOKIE['op']) {
        case "+":
            # code...
            $result=$_COOKIE['num']+$num;
            break;
        case "-":
                # code...
                $result=$_COOKIE['num']-$num;
                break;
        case "*":
                # code...
                $result=$_COOKIE['num']*$num;
                break;
        case "/":
                # code...
                $result=$_COOKIE['num']/$num;
                break;
    }
    $num=$result;
 }
 
 


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <form action="calc.php" method="post">
            <div class="maininput">
            <input type="text" class="main" name="input" value="<?php echo @$num; ?>">
            </div><br>
            <div class="buttons">
            <input type="submit" class="num" name="num" value="7">
            <input type="submit" class="num" name="num" value="8">
            <input type="submit" class="num" name="num" value="9">
            <input type="submit" class="calbtn" name="op" value="/"><br>
            <input type="submit" class="num" name="num" value="4">
            <input type="submit" class="num" name="num" value="5">
            <input type="submit" class="num" name="num" value="6">
            <input type="submit" class="calbtn" name="op" value="*"><br>
            <input type="submit" class="num" name="num" value="1">
            <input type="submit" class="num" name="num" value="2">
            <input type="submit" class="num" name="num" value="3">
            <input type="submit" class="calbtn" name="op" value="+"><br>
            <input type="submit" class="c" name="num" value="C">
            <input type="submit" class="num" name="num" value="0">
            <input type="submit" class="equal" name="equal" value="=">
            <input type="submit" class="calbtn" name="op" value="-">
            </div>

        </form>
    </div>
</body>
</html>