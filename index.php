<?php
    $cookie_name1="num";
    $cookie_value1="";
    $cookie_name2="op";
    $cookie_value2="";

    if(isset($_POST["num"])){
        $num=$_POST["input"].$_POST["num"];
    }else{
        $num="";
    }
    if(isset($_POST["op"])){
        $cookie_value1=$_POST["input"];
        setcookie($cookie_name1, $cookie_value1, time()+(86400*30),"/");

        $cookie_value2=$_POST["op"];
        setcookie($cookie_name2, $cookie_value2, time()+(86400*30),"/");
        $num="";
    }
    if(isset($_POST["equal"])){
        $num=$_POST["input"];
        switch($_COOKIE["op"])
        {
            case "+":
                $result=$_COOKIE["num"]+$num;
                break;
            case "-":
                $result=$_COOKIE["num"]-$num;
                break;
            case "*":
                $result=$_COOKIE["num"]*$num;
                break;
            case "/":
                $result=$_COOKIE["num"]/$num;
                break;
            case "^":
                $result=$_COOKIE["num"]**$num;
                break;
            case "%":
                $result=$_COOKIE["num"]*($num/100);
                break;
            case "√":
                $result=$_COOKIE["num"]**(1/$num);
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
    <style>
    .container{
    margin: auto;
    background-color: black;
    border:  2.5px solid whitesmoke;
    width: 350px;
    height: 530px;
    border-radius: 15px;
    box-shadow: 10px 10px 40px;
    }

    .botones{
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr;
    }

    .maininput{
        background-color: black;
        border: 1px solid gray;
        border-radius: 15px;
        height: 90px;
        width: 98.2%;
        color: white;
        font-size:xx-large;
    }

    .numbtn{
        padding: 30px 35px;
        border-radius: 50px;
        background-color: rgba(128, 128, 128, 0.678);
        font-size: larger;
    }
    .numbtn:hover{
        background-color: gray;
        color: whitesmoke;
    }

    .c{
        padding: 30px 35px;
        border-radius: 50px;
        background-color: rgba(24, 172, 240, 0.836);
        font-size: larger;
    }
    .c:hover{
        background-color: rgb(0, 174, 255);
        color: whitesmoke;
    }
    .equal{
        padding: 30px 35px;
        border-radius: 50px;
        font-size: larger;
    }
    .equal:hover{
        background-color: rgba(255, 255, 255, 0.795);
    }
    .calbtn{
        padding: 30px 35px;
        border-radius: 50px;
        font-size: larger;
    }
    .calbtn:hover{
        background-color: rgba(255, 255, 255, 0.795);
    }
    </style>
</head>
<body>
    <div class="container">
        <form method="POST" action="">
        <input type="text" class="maininput" name="input" value="<?php echo @$num; ?>">
        <div class="botones">
            <input type="submit" value="/" name="op" class="calbtn">
            <input type="submit" value="^" name="op" class="calbtn">
            <input type="submit" value="√" name="op" class="calbtn">
            <input type="submit" value="%" name="op" class="calbtn">
            <input type="submit" value="7" name="num" class="numbtn">
            <input type="submit" value="8" name="num" class="numbtn">
            <input type="submit" value="9" name="num" class="numbtn">
            <input type="submit" value="+" name="op" class="calbtn">
            <input type="submit" value="4" name="num" class="numbtn">
            <input type="submit" value="5" name="num" class="numbtn">
            <input type="submit" value="6" name="num" class="numbtn">
            <input type="submit" value="-" name="op" class="calbtn">
            <input type="submit" value="1" name="num" class="numbtn">
            <input type="submit" value="2" name="num" class="numbtn">
            <input type="submit" value="3" name="num" class="numbtn">
            <input type="submit" value="*" name="op" class="calbtn">
            <input type="submit" value="c" class="c">
            <input type="submit" value="0" class="numbtn" name="num">
            <input type="submit" value="." class="numbtn" name="num">
            <input type="submit" value="=" class="equal" name="equal">
        </div>
        </form>
    </div>
</body>
</html>