<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
   <?php
   if(isset($_COOKIE['name'])){
   $name=$_COOKIE['name'];
   echo "<p>Cookie name:$name</p>";
   }
   ?>
    <div class="container">
        <form action="setCookie.php" method="POST">
            <input type="text" name="name" />
            <input type="submit" value="set cookie"name="save" />
        </form>
    </div>
</body>

</html>