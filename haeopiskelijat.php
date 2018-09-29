<?php
	require "connection.php";
	$sql = "SELECT Etunimi, Sukunimi FROM opiskelija";

	$resultObject = $db->query($sql);

	foreach ($resultObject as $row) {
		echo $row['Etunimi'].'  '.$row['Sukunimi'].'<br/>';
	}
	?>
