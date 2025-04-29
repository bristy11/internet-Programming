<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>
<body>
    <h2>User Defined Function example</h2>
    <?php
    //user function defined
      function addNumber($num1,$num2){
        $total=$num1+$num2;
        echo "Total is:".$total;
      }
      function findlargest($n1,$n2){
        if($n1>$n2){
            echo " The largest number is".$n1;
        }
        else{
            echo "The largest number is " .$n2;
        }
      }
      function myfunction($myname){
        echo "My name is " .$myname;
      }
      //call function
      addNumber(100,200);
      echo "<br>";
      myfunction("AAA");
      echo "<br>";
      findlargest(200,20);

    ?>
</body>
</html>