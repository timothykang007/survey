<?php
session_start();
if(empty($_SESSION['counter'])){
		$_SESSION['counter'] = 1;
	}else{
		$_SESSION['counter']++;
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Result</title>
	<link rel="stylesheet" type="text/css" href="result.css">
</head>
<body>
	<div id="container">

		<div id="top">
			<p>Thanks for submitting this form!  You have submitted this form <?=$_SESSION['counter']?> times now.</p>
		</div>

		<div id="bottom">
			<h1>Submitted Information</h1>
			<table>
				<tbody>
					<tr>
						<td>Name: </td>
						<td><?=$_SESSION['name']?></td>
					</tr>
					<tr>
						<td>Dojo Location: </td>
						<td><?=$_SESSION['location']?></td>
					</tr>
					<tr>
						<td>Favorite language: </td>
						<td><?=$_SESSION['favorite_language']?></td>
					</tr>
					<tr>
						<td>Comment: </td>
						<td><?=$_SESSION['comment']?></td>
					</tr>
				</tbody>
			</table>
		</div>

	</div>
</body>
</html>