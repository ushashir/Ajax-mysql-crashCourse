<?php

echo 'Processing';

// Check fir a GET variable
if(isset($_POST['name'])){
    echo 'GET: Your name is '.$_POST['name'];
}

// Check fir a GET variable
if(isset($_GET['name'])){
    echo 'GET: Your name is '.$_GET['name'];
}