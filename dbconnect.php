<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php   
    $serverName="localhost:3307";
    $userName="root";
    $password="";
    $dbname="mydatabase";
    //create connection
    $connection=mysqli_connect($serverName,$userName,$password,$dbname);
    if(!$connection){
        die("Failed to connect to the DB Server".mysqli_connect_error());
    }
    else {
        echo "Success";
    }
    ?>
</body>
</html>