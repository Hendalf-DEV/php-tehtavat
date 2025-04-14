<!DOCTYPE html>
<html>
<head>
	<title>Autolomake</title>
</head>
<body>
	<h4>Syötä auton tiedot:</h4>
	<form action="autolomake.php" method="post">
		<input type="text" name="rekisteri" placeholder="Rekisterinro"/><br><br>
		<input type="text" name="vari" placeholder="Väri"/><br><br>
		<input type="text" name="vuosimalli" placeholder="Vuosimalli"/><br><br>
		<select name="omistaja" >
		<!-- lisää tähän vaihtoehdot tietokannasta
		esim. <option value="281182-070W">Anne Autoilija</option>
		-->
		</select><br><br>
		<input type="submit" name="lisays" value="Lisää auto"><br><br>
	</form>
	</body>
</html>