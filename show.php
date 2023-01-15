<!DOCTYPE html>
<html>
<body>
<?php 
    $prefix = $_POST["prefix"];
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $status = $_POST["status"];
 
    
    echo "Name:".$prefix.$name."<br>";
    echo "Age:".$age."<br>";
    echo "Gender:".$gender."<br>";
    echo "Status:".$status."<br>";

?>

</body>

</html>