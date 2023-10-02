<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
	<link rel="stylesheet" href="./css/crudstyle.css" />
</head>

<body>
	<div class="container">
	<button class="top-btn"><a href="students.php"> Students</a></button>
		<h1>CRUD operation in php</h1>
		<div>
			<form action="save.php" method="POST">
				<div class="form-group">
					<div>
						<label for="username">Username:</label>
					</div>
					<div>
						<input type="text" name="username" placeholder="Username" />
					</div>
				</div>
				<div class="form-group">
					<div>
						<label for="username">Roll no:</label>
					</div>
					<div>
						<input type="text" name="roll" placeholder="Roll no" />
					</div>
				</div>
				<div class="form-group">
					<div>
						<label for="username">Address:</label>
					</div>
					<div>
						<input type="text" name="address" placeholder="Address" />
					</div>
				</div>
				<div class="form-group">
					<div>
						<label for="username">Marks:</label>
					</div>
					<div>
						<input type="text" name="marks" placeholder="Marks" />
					</div>
				</div>
				<div class="form-group">
					<div>
						<label for="username">Section:</label>
					</div>
					<div>
						<input type="text" name="section" placeholder="Section" />
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