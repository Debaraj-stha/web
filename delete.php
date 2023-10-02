<?php
include('conn.php');
if(isset($_GET['id'])){
    $id=$_GET['id'];
    if($id!="" || $id==null){
        $sql="DELETE FROM crud WHERE id = $id";
        $res=mysqli_query($conn,$sql);
        if($res){
            header("Location: students.php");
        }
    }
    else{
        echo "id is required";
    }
}
?>