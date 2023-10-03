<?php
    if(isset($_POST['save'])){
       include("conn.php");
       $value=$_POST['name'] ;
     $x= setcookie('name', $value, time() + (86400 * 30), "/");
     echo $x;
      if(isset($_COOKIE['name'])){
        header('Location:cookies.php');
      }
else{
    echo "cookie is not set";
}
    }
    ?>
  