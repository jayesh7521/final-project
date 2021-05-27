<?php

$db_host="localhost";
$db_user="root";
$db_pass="";
$db_name="myschool";

// create connetion
$conn=new mysqli($db_host, $db_user, $db_pass, $db_name);
if($conn->connect_error){
    die("connect to db is faild");
}
// else{
//     echo"success to connect";
// }

?>