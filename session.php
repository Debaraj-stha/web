<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <?php
   session_start();
   if(isset($_SESSION['name'])){
   $name=$_SESSION['name'];
   echo "<p>SESSION name:$name</p>";
   }
   ?>
    <div class="container">
        <form action="setSession.php" method="POST">
            <input type="text" name="name" />
            <input type="submit" value="set session"name="save" />
        </form>
    </div>
</body>

</html>