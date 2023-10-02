<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/crudstyle.css"/>
</head>

<body>
    <div class="container-fluid">
        
            <button class="top-btn"><a href="index.php"> Back</a></button>

        <h1>Students</h1>
        <table>
            <thead>
                <tr>
                    <th>SN</th>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Roll NO</th>
                    <th>Marks</th>
                    <th>Section</th>
                    <th>Action</th>

                </tr>
            </thead>
            <tbody>
<?php
include("conn.php");
$sql="SELECT * from crud";
$result=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($result)){
    echo "
                        <tr>
                            <td>".$row['id']."</td>
                            <td>".$row['name']."</td>
                            <td>".$row['address']."</td>
                            <td>".$row['roll']."</td>
                            <td>".$row['marks']."</td>
                            <td>".$row['section']."</td>
                            <td><a href='update.php?id=".$row['id']."'><button>update</a></button><a href='delete.php?id=".$row['id']."'><button>delete</button></a></td>
                        </tr>
                        ";
}
?>
            </tbody>
        </table>
    </div>
</body>

</html>