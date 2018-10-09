<?php

session_start();

if (!isset($_SESSION["count"])) {
	count = 0;
} else {
	count++;
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>


<?php 

echo "hello world";
echo "You have accesed this page :" $_SESSION["count"] . "<br>";

?>

</body>
</html>