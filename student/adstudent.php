<?php

include_once("../dbconnection.php");
if(isset($_POST["stsignup"]) && isset($_POST["stname"]) && isset($_POST["stemail"]) && isset($_POST["stpass"]))
{

    $stuname =$_POST["stname"];
    $stuemail =$_POST["stemail"];
    $stupass =$_POST["stpass"];

    $sql="INSERT INTO signupdetails VALUES('$stuname','$stuemail','$stupass')";
    

     if($conn->query($sql)==TRUE){
         echo json_encode("ok"); 
    }
    else{
        echo json_encode("fail");
     }
}
 
?>