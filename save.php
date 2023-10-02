<?php
if (isset($_POST['save'])){
include('conn.php');
    $names=$_POST['username'];
    $roll=$_POST['roll'];
    $addresss=$_POST['address'];
    $section=$_POST['section'];
    $marks=$_POST['marks'];
    if($names=="" || $addresss=="" || $roll=="" || $addresss=="" || $section=="" || $marks=="" ){
echo "all fields are required";
    }
    else{
        $sql="INSERT INTO  crud(name,address,roll,marks,section) VALUES('$names','$addresss',$roll,$marks,'$section')";
        $result=mysqli_query($conn,$sql);
        if($result){
            header('Location:index.php');
        }
        else{
            echo "error has occurred";
        }
    }
}
?>