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
    $sql= "SELECT * FROM mytable";
    $result= mysqli_query($connection,$sql);
    if(mysqli_num_rows($result)>0){
    $row= mysqli_fetch_array($result);
    while($row){
        echo "Id is:".$row[0];
        echo "<br>";
        echo "First Name is:".$row[1];
        echo "<br>";
        echo "Last Name is:".$row[2];
        echo "<br>";
        echo "Email is:".$row[3];
        echo "<br>";
    }}
    else
    mysqli_close($connection);
    ?>

</body>
</html>