<?php
session_start();
require_once "connection.php";
if(isset($_POST['username']) && $_POST['username']!=""
     
        && isset($_POST['password']) && $_POST['password']!=""
       
        )

    $username=$_POST['username'];
   
    $password=$_POST['password'];
    


    $query= "SELECT * FROM user WHERE username = '$username' AND password = '$password'";

$result=mysqli_query($con, $query);
$_SESSION['IsLoggedIn'] == 0;
if (mysqli_num_rows($result) ==1 ) {
    // Username and password exist in the database
    $_SESSION['IsLoggedIn']==1;
    
} else {
    // Username and password do not match or do not exist in the database
    echo "Invalid username or password.";
}

// Free the result set
mysqli_free_result($result);

// Close the database connection
mysqli_close($con);
// bel database lezim ykoun 3ndk bel table user column esma type by default betkoun user w enta
// eza bdk tzid admin 7otta admin
?>