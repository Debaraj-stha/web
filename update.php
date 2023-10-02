<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/crudstyle.css" />
</head>

<body>
    <?php 
    include("conn.php");
    if(isset($_GET['id'])){
        $sql = "SELECT * FROM crud WHERE id = " . $_GET['id'];
$result=mysqli_query($conn,$sql);
$values;
while($row=mysqli_fetch_assoc($result)){
    $values=$row;

    }
    print_r($values);
}
    if(isset($_POST['save'])){
        $names=$_POST['username'];
        $roll=$_POST['roll'];
        $addresss=$_POST['address'];
        $section=$_POST['section'];
        $marks=$_POST['marks'];
        $id=$_POST['id'];
        if($names=="" || $addresss=="" || $roll=="" || $addresss=="" || $section=="" || $marks=="" ){
    echo "all fields are required";
        }
        else{
        $sql="UPDATE crud SET name='$names' ,address='$addresss', roll=$roll,marks=$marks,section='$section' where id =$id";
        $res=mysqli_query($conn,$sql);
        if($res){
            header("Location:students.php");
        }
        else{
            echo "error occured";
        }
        }
    }
    ?>
	<div class="container">
		<h1>update</h1>
		<div>
			<form action="update.php" method="POST">
                <input type="hidden" name="id" value="<?php echo $values['id']; ?>" />
				<div class="form-group">
					<div>
						<label for="username">Username:</label>
					</div>
					<div>
						<input type="text" name="username" placeholder="Username" value="<?php echo $values['name']?>"/>
					</div>
				</div>
				<div class="form-group">
					<div>
						<label for="username">Roll no:</label>
					</div>
					<div>
						<input type="text" name="roll" placeholder="Roll no"value="<?php echo $values['roll']?>" />
					</div>
				</div>
				<div class="form-group">
					<div>
						<label for="username">Address:</label>
					</div>
					<div>
						<input type="text" name="address" placeholder="Address"value="<?php echo $values['address']?>" />
					</div>
				</div>
				<div class="form-group">
					<div>
						<label for="username">Marks:</label>
					</div>
					<div>
						<input type="text" name="marks" placeholder="Marks"value="<?php echo $values['marks']?>" />
					</div>
				</div>
				<div class="form-group">
					<div>
						<label for="username">Section:</label>
					</div>
					<div>
						<input type="text" name="section" placeholder="Section"value="<?php echo $values['section']?>" />
					</div>
				</div>
				<div class="btn-group">
					<input type="submit" value="submit" name="save" />
				</div>
			</form>
		</div>
	</div>
</body>

</html>