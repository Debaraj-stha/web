<?php

if(isset($_POST['submit'])){
    $names=$_POST['name'];
    $email=$_POST['email'];
    
    $country= $_POST['country'];
    if($names!=null && $country!=null && $email!=null){
        include("conn.php");
    $sql="INSERT INTO  form_2076(name,email,country) VALUES('$names','$email','$country')";
    $query=mysqli_query($conn,$sql);
    if($query){
        Header('Location:old_question_2076_3.php');
    }
    }
}
 ?>