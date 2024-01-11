
<html>

<?php

$db_hostname='localhost';
$db_database='project';
$db_username='root';
$db_password='ralph78901921';
$con = mysqli_connect("localhost", "root", "ralph78901921", "project");
if($con){
    echo"Connected successfully to DB.";

}
else{
    echo"Connection failed." ;
}

    ?>

</html>