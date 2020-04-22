<?php

// Connect to a database
// db variables
    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpassword = '';
    $dbname = 'ajaxtest';
 $conn = new mysqli( $dbhost, $dbuser, $dbpassword,  $dbname) or die("Unable to connect");

 echo "DB Connected";
 
// Check for POST variable
if(isset($_POST['name'])){
    $name = ($conn, $_POST['name']);
    // echo 'POST: Your name is '.$_POST['name'];

    $query = "INSERT INTO users(name) VALUES('$name')";

    if(mysqli_query($conn, $query)){
        echo 'User added succesfully...';
    } else {
        echo 'ERROR: '. mysqli_error($conn);
    }
}

// Check for GET variable
// if(isset($_POST['name'])){
//     echo 'POST: Your name is '.$_POST['name'];
// }

?>