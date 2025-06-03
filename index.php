<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1= $_POST["num1"];
        $num2= $_POST["num2"];
        $Operation=$_POST["Operation"];
        if ($Operation == "Add") {
            $answer = $num1 + $num2 ;
            $Operation =" + ";
        }elseif ($Operation == "subtarct") {
            $answer = $num1 - $num2 ;
            $Operation = " - ";
        }elseif ($Operation == "multipy") {
            $answer = $num1 * $num2 ;
            $Operation = " * ";
        }elseif ($Operation == "dividing")  {
            $answer = $num1 / $num2 ;
            $Operation = " / ";
        }
        echo "$num1  $Operation $num2 = $answer ";
    }
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=, initial-scale=1.0">
        <title>Calculator</title>
        <link rel="stylesheet" href="style2.css">
    </head>
    <body>
        <form action='#' method='POST'>
            <input type="number" name="num1">
            <select name="Operation" >
                <option value="Add">+</option>
                <option value="subtarct">_</option>
                <option value="multipy">*</option>
                <option value="dividing">/</option>
            </select>
            <input type="number" name="num2">
            <button name="submit">=</button>
        </form>     
    </body>
</html> 