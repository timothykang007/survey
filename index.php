<!DOCTYPE html>
<html>
<head>
	<title>Survey</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<div id="container">
		<form action="process.php" method="post">
			<div>
				<label for="name">Your Name:</label>
				<input type="text" name="name">
			</div>
			<div>
				<label for="location">Dojo Location:</label>
				<select name="location">
					<option value="bellevue">Bellevue</option>
					<option value="silicon valley">Silicon Valley</option>
				</select>
			</div>
			<label for="favorite language">Favorite Language:</label>
			<select name="favorite language">
				<option value="php">PHP</option>
				<option value="javascript">Javascript</option>
			</select>
			<div>
				<label for="comment" id="comment-label">Comment(optional):</label>
				<input type="text" name="comment" id="comments">
			</div>
			<div id="submit-button">
				<input type="submit" value="submit">
			</div>
		</form>
	</div>
</body>
</html>