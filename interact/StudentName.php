<!DOCTYPE html>
<html>
<head>
	<title>表单数据</title>
</head>
<body>
	<form action="StudentName.php" method="POST">

		<input type="text" name="StudentName" size="20" maxlength="40" value="">
		<br/>

		<input type="submit" name="submit" value="show data on website">

	</form>
</body>

</html>

<?php

if(isset($_POST['submit']))
{
	$name = $_POST['StudentName'];
	echo $name;
}

?>