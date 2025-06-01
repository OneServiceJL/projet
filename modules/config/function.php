<?php 
session_start();

$connection = mysqli_connect("localhost","root","","top5sai_management");

 if(isset($_POST['save_btn']))
 {
    $name = $_post['name'];
    $post_name = $_post['post_nam'];
    $email = $_post['email'];
    $phone = $_post['phone'];

    $insert_query = "INSERT INTO andminpanel(name,post_name,email,phone) VALUES (' $name','$post_name','$email','$phone')";
    $insert_query_run = mysqli_query($connection, $insert_query);

    if($insert_query_run)
    {
      $_SESSION['status'] = "DATA INSERTED SUCCESSFULLY";
      header('location: index.php');
    }
    else
    {
      $_SESSION['status'] = "DATA NOT INSERTED SUCCESSFULLY";
      header('location: index.php');
    }

    
 }

 ?>
