<?php
  $a="f";
  $b="c";
  $c="d";
  $result1="";
  $result2="";
  if(isset($_GET['equal'])){
    $a=$_GET['num1'];
    $b=$_GET['num2'];
    $c=$_GET['num3'];
    $op1=$_GET['operator1'];
    $op2=$_GET['operator2'];

    switch($op1){
        case '+':$result1=$a+$b;
        break;
        case '-':$result1=$a-$b;
        break;
        case '*':$result1=$a*$b;
        break;
        case '/':$result1=$a/$b;
        break;
    }
    switch($op2){
        case '+':$result2=$result1+$c;
        break;
        case '-':$result2=$result1-$c;
        break;
        case '*':$result2=$result1*$c;
        break;
        case '/':$result2=$result1/$c;
        break;
    }
    if(isset($_GET['resetBtn'])){
      $a=" ";
      $b="";
      $c="";
      $result1="";
      $result2="";
    }
  }
  ?>
  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calculate.css">
</head>
<body>
   <form action="index.php" method="get">
     
     <input type="number" name="num1" id="num1" value="<?=$a?>">
     <select name= "operator1">
      <option name = "plus" >+</option>
      <option name = "minus" >-</option>
      <option name = "multiple" >*</option>
      <option name = "division">/</option>
    </select>
    <input type="number" name="num2" id="num2" value="<?=$b?>">
     <select name= "operator2">
      <option name = "plus">+</option>
      <option name = "minus">-</option>
      <option name = "multiple">*</option>
      <option name = "division">/</option>
    </select>
    <input type="number" name="num3" id="num3" value="<?=$c?>"> 
    <button type="submit" name="equal">=</button>
    <input type="text" value="<?=$result2?>">
    <input type="submit" name="resetBtn" id="reset" value="Reset">
    
   </form>
   
</body>



</html>
