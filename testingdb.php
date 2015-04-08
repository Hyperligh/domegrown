<<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<p>Testing database</p>
</body>
</html>

<?php
require_once'Rconnect.php';

										$sql = "INSERT INTO csa (name, address, city, state, zip, phone, email, csaShare) VALUES ('hello', '1234', 'bend', 'or', '97701', '123', '145', 'csa-share')";
										$result = mysqli_query($dbh, $sql) or die ("Already submitted once");


?>