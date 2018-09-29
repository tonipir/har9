<form action="insertkysely.php" method="POST">
		idOpiskelija=<input type="text" name="idOpiskelija"  /> <br>
		Etunimi=<input type="text" name="en"  /> <br>
		Sukunimi=<input type="text" name="sn"  /> <br>
		<input type="submit" name="abtn" value="Lisää" /> <br>
	</form>
	<?php
	require 'connection.php';
	if(isset($_POST['abtn']))
	{
	$add=array(
		':idOpiskelija'=>$_POST['idOpiskelija'],
		':enimi'=>$_POST['en'],
		':snimi'=>$_POST['sn']
	);

	$stmt=$db->prepare("INSERT INTO Opiskelija (idOpiskelija,Etunimi,Sukunimi) VALUES(:idOpiskelija,:enimi,:snimi)");
	$stmt->execute($add);
	}
	?>
