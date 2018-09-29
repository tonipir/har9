<html>
	<form method="POST" action="haeopiskelija.php">
	Anna henkilötunnus
	<input type="text" name="tunnus" size="20">
	<input type="submit" name="btn"  value="Etsi">
	</form>
	</html>

	<?php
	require 'connection.php';
	$selection=$_POST['tunnus'];

	$stmt = $db->prepare("SELECT * FROM opiskelija WHERE idOpiskelija = :tunnus");
	$stmt->bindParam(':tunnus',$selection);
	$stmt->execute();
	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
	if (isset($_POST['btn']))
	{
		foreach ($results as $row) {
		echo $row['Etunimi'].' '.$row['Sukunimi'].'<br/>';
	}
	}
	?>
