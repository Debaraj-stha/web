<?php
    if(isset($_POST['save'])){
       session_start();
       $value=$_POST['name'] ;
     $_SESSION['name']=$value;
     header('Location:session.php');
    }
    ?>
  