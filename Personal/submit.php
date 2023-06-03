<?php 
include "connect.php";
    $name =$_POST['name'];
    $email =$_POST['email'];
    $subject =$_POST['subject'];
    $message =$_POST['message'];
   $select_personal ="INSERT INTO `personal`(`id`, `name`, `email`, `subject`, `message`) VALUES ('','$name','$email','$subject','$message')";
    $result = mysqli_query($con,$select_personal);

    if($result){
        header('location:view.php');
    }
    
   
// }

?>