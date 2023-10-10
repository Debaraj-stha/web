<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/crudstyle.css">
</head>

<body>
    <div class="container">
        <h2>2076 question no 3</h2>
        <form method="POST" action="submit_2073_form.php">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" placeholder="name...">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" placeholder="email...">
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <select name="country">
                    <option  value="Nepal" selected>Nepal</option>
                    <option  value="USA" selected>USA</option>
                    <option  value="India" selected>India</option>
                    <option  value="China" selected>Nepal</option>
                </select>
            </div>
            <div class="btn-group">
                <input type="submit" value="Submit"name="submit">
            </div>
        </form>
    </div>
</body>

</html>