<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>

	<style>

		input{
			display: block;
			padding: 5px;
			margin: 5px;
		}

		form{
			padding: 10px;

		}
		textarea {

			height: 150px;

		}


	</style>
</head>
<body>

	<form action="controllers/indexController.php" method="post" enctype="multipart/form-data">
		<input type="text" name="title">
		<textarea name="content"></textarea>
		<input type="file" name="image">
		<input type="submit" name="btn">

	</form>
	
</body>
</html>


