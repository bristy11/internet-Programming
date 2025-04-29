<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
   include 'dbconnect.php';
    $id=$_POST['id'];
    $fisrtName=$_POST['fn'];
    $lastName=$_POST['ln'];
    $email=$_POST['email'];
    $SQL= "INSERT INTO mytable VALUES('$id','$fisrtName','$lastName','$email')";
    mysqli_query($connection,$SQL);
    if(mysqli_affected_rows($connection)>0){
        echo "new record added";
    }else{
        echo "Error:".mysqli_error($connection);
    }
    mysqli_close($connection);
    ?>
    
</body>
</html>