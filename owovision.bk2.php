<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Owovisión 2025</title>
	<link href="dragula.css" rel="stylesheet" type="text/css" />
	<style>
		@font-face {
			font-family: "Gotham";
			font-style: normal;
			font-weight: 500;
			font-display: swap;
			src: url(gothammedium.woff2) format("woff2");
		}

		@font-face {
			font-family: "Gotham";
			font-style: normal;
			font-weight: 400;
			font-display: swap;
			src: url(gothambook.woff2) format("woff2");
		}

		@font-face {
			font-family: "Gotham";
			font-style: normal;
			font-weight: 300;
			font-display: swap;
			src: url(gothamlight.woff2) format("woff2");
		}

		@font-face {
			font-family: "Gotham";
			font-weight: 700;
			font-style: normal;
			font-display: swap;
			src: url(gothambold.woff2) format("woff2");
		}

		body {
			font-family: "Gotham", sans-serif;
			font-size: 2rem;
			display: flex;
			flex-wrap: nowrap;
			flex-direction: column;
			flex: auto;
			align-content: center;
			align-items: center;
			gap: 2rem;
		}

		.center { text-align: center; }

		.tabla {
			display: flex;
			flex-wrap: nowrap;
			flex-direction: row;
			gap: 0.5rem;
		}

		.tabla > div {
			width: 100%;
			display: flex;
			flex-direction: row;
			gap: 0.5rem;
			flex-basis: 100%;
			flex-wrap: wrap;
			justify-content: center;
		}

		.tabla > div > div,
		.gu-mirror {
			border-radius: 0.5rem;
			background-color: #000066;
			padding: 0.25rem 0.5rem;
			color: white;
			font-weight: bold;
			background-repeat: no-repeat;
			background-position: center left;
			background-size: 5rem 100%;
/* 			margin-left: 5rem; */
			box-sizing: border-box;
			overflow: hidden;
			white-space: nowrap;
			text-overflow: ellipsis;
			display: flex;
			flex: 1 1 20%;
			position: relative;
		}

		.tabla #puntos div {
			text-align: center;
		}

		.tabla #votos div,
		.gu-mirror {
			padding-left: 6rem;
			cursor: pointer;
		}

		.tabla #votos div { padding-right: 4.5rem; }

		.alb { background-image: url("./flags/alb.png"); }
		.arm { background-image: url("./flags/arm.png"); }
		.aus { background-image: url("./flags/aus.png"); }
		.aut { background-image: url("./flags/aut.png"); }
		.aze { background-image: url("./flags/aze.png"); }
		.bel { background-image: url("./flags/bel.png"); }
		.cyp { background-image: url("./flags/cyp.png"); }
		.cze { background-image: url("./flags/cze.png"); }
		.den { background-image: url("./flags/den.png"); }
		.deu { background-image: url("./flags/deu.png"); }
		.esp { background-image: url("./flags/esp.png"); }
		.est { background-image: url("./flags/est.png"); }
		.fin { background-image: url("./flags/fin.png"); }
		.fra { background-image: url("./flags/fra.png"); }
		.geo { background-image: url("./flags/geo.png"); }
		.gre { background-image: url("./flags/gre.png"); }
		.hrv { background-image: url("./flags/hrv.png"); }
		.ire { background-image: url("./flags/ire.png"); }
		.isl { background-image: url("./flags/isl.png"); }
		.ita { background-image: url("./flags/ita.png"); }
		.lat { background-image: url("./flags/lat.png"); }
		.lit { background-image: url("./flags/lit.png"); }
		.lux { background-image: url("./flags/lux.png"); }
		.mlt { background-image: url("./flags/mlt.png"); }
		.mne { background-image: url("./flags/mne.png"); }
		.ned { background-image: url("./flags/ned.png"); }
		.nor { background-image: url("./flags/nor.png"); }
		.pol { background-image: url("./flags/pol.png"); }
		.prt { background-image: url("./flags/prt.png"); }
		.sma { background-image: url("./flags/sma.png"); }
		.srb { background-image: url("./flags/srb.png"); }
		.sve { background-image: url("./flags/sve.png"); }
		.svn { background-image: url("./flags/svn.png"); }
		.swi { background-image: url("./flags/swi.png"); }
		.uki { background-image: url("./flags/uki.png"); }
		.ukr { background-image: url("./flags/ukr.png"); }

		#votos .pais:after {
			content: "-";
			width: 4rem;
			height: 100%;
			position: absolute;
			right: 0;
			top: 0;
			border-radius: 0.5rem;
			background-color: #000066;
			text-align: center;
		}

		#votos .pais:nth-child(1):after { content: "12"; }
		#votos .pais:nth-child(2):after { content: "12"; }
		#votos .pais:nth-child(3):after { content: "10"; }
		#votos .pais:nth-child(4):after { content: "10"; }
		#votos .pais:nth-child(5):after { content: "8"; }
		#votos .pais:nth-child(6):after { content: "8"; }
		#votos .pais:nth-child(7):after { content: "7"; }
		#votos .pais:nth-child(8):after { content: "7"; }
		#votos .pais:nth-child(9):after { content: "6"; }
		#votos .pais:nth-child(10):after { content: "6"; }
		#votos .pais:nth-child(11):after { content: "5"; }
		#votos .pais:nth-child(12):after { content: "5"; }
		#votos .pais:nth-child(13):after { content: "4"; }
		#votos .pais:nth-child(14):after { content: "4"; }
		#votos .pais:nth-child(15):after { content: "3"; }
		#votos .pais:nth-child(16):after { content: "3"; }
		#votos .pais:nth-child(17):after { content: "2"; }
		#votos .pais:nth-child(18):after { content: "2"; }
		#votos .pais:nth-child(19):after { content: "1"; }
		#votos .pais:nth-child(20):after { content: "1"; }
		#votos .pais:nth-child(n + 21):after { background-color: red; }

		.nopoints {
			background-color: red !important;
		}

		#btnsend {
			border-radius: 0.5rem;
			padding: 1.5rem 3rem;
			border: 0.25rem solid #b0b0b0;
			font-weight: bold;
			cursor: pointer;
		}

		pre {
			font-family: monospace;
			text-align: left;
			font-size: 1rem;
			border: 1px solid black;
		}

		form {
			display: none;
		}

		@media (max-width: 1279px) {
			.tabla > div > div,
			.gu-mirror {
				flex: 1 1 48%;
			}
		}
	</style>
</head>
<body>
	<?php
		error_reporting(E_ERROR | E_WARNING | E_PARSE);
		$db = new SQLite3("owovision.db");
		if ($_POST)
		{
			// var_dump($_POST);
			$statement = $db->prepare("SELECT * FROM USERS WHERE idUser = :idUser AND hasVoted = 0");
			$statement->bindValue(":idUser", $_POST["idUser"]);

			$result = $statement->execute();
			$row = $result->fetchArray();

			if ($row == false)
			{
				die("<p>¡Ya has votado!</p>");
			}

			$puntos = [12, 12, 10, 10, 8, 8, 7, 7, 6, 6, 5, 5, 4, 4, 3, 3, 2, 2, 1, 1];
			$votos = explode(",", $_POST["countries"]);
			// var_dump($votos);
			if (count($votos) != 20)
			{
				die("<p>¡Algo fue mal al procesar los votos! Comunícaselo a @stage7@owo.cafe, gracias.</p>");
			}

			for ($i = 0; $i < 20; $i++)
			{
				$statement = $db->prepare("INSERT INTO POINTS VALUES(:idUser, :points, :country)");
				$statement->bindValue(":idUser", $_POST["idUser"]);
				$statement->bindValue(":points", $puntos[$i]);
				$statement->bindValue(":country", $votos[$i]);
				$result = $statement->execute() or die("<p>¡Algo fue mal al procesar los votos! Comunícaselo a @stage7@owo.cafe, gracias.</p>");
			}

			$statement = $db->prepare("UPDATE USERS SET hasVoted = 1 WHERE idUser = :idUser");
			$statement->bindValue(":idUser", $_POST["idUser"]);
			$result = $statement->execute();

			echo("<p>¡Gracias por votar!</p>");
		}
		else if ($_GET['newUser'])
		{
			$newId = uniqid();
			$newUser = $_GET['newUser'];

			$statement = $db->prepare("SELECT idUser FROM USERS WHERE handleUser = :handleUser");
			$statement->bindValue(":handleUser", $newUser);
			$result = $statement->execute();
			$row = $result->fetchArray();

			if ($row == false)
			{
				$statement = $db->prepare("INSERT INTO USERS VALUES (:idUser, :handleUser, :hasVoted)");
				$statement->bindValue(":idUser", $newId);
				$statement->bindValue(":handleUser", $newUser);
				$statement->bindValue(":hasVoted", 0);
				$result = $statement->execute();

				return $newId;
			}
			else
			{
				return $row["idUser"];
			}

		}
		else if ($_GET['idUser'])
		{
			$idUser = $_GET['idUser'];

			$statement = $db->prepare("SELECT * FROM USERS WHERE idUser = :idUser");
			$statement->bindValue(":idUser", $idUser);

			$result = $statement->execute();
			$row = $result->fetchArray();

			if ($row == false)
			{
				die("<p>¡Este usuario no existe!</p>");
			}

			if($row["hasVoted"] == 1)
			{
				die("<p>¡Ya has votado, " . $row["handleUser"] . "!</p>");
			}

			// echo("<pre>");
		    // var_dump($row);
			// echo("</pre>");

			?>
	<p class="center">¡Hola, <?php echo($row["handleUser"]); ?>! Por favor, elige tus votos arrastrando los nombres de los países:</p>
	<div class="tabla">
		<div id="votos" class="container">
			<div class="pais bel">Bélgica</div>
			<div class="pais cze">Chequia</div>
			<div class="pais est">Estonia</div>
			<div class="pais lat">Letonia</div>
			<div class="pais lit">Lituania</div>
			<div class="pais lux">Luxemburgo</div>
			<div class="pais ned">Países Bajos</div>
			<div class="pais arm">Armenia</div>
			<div class="pais aze">Azerbaiyán</div>
			<div class="pais geo">Georgia</div>
			<div class="pais pol">Polonia</div>
			<div class="pais ukr">Ucrania</div>
			<div class="pais alb">Albania</div>
			<div class="pais aut">Austria</div>
			<div class="pais hrv">Croacia</div>
			<div class="pais mne">Montenegro</div>
			<div class="pais srb">Serbia</div>
			<div class="pais svn">Eslovenia</div>
			<div class="pais cyp">Chipre</div>
			<div class="pais gre">Grecia</div>
			<div class="pais ire">Irlanda</div>
			<div class="pais mlt">Malta</div>
			<div class="pais prt">Portugal</div>
			<div class="pais sma">San Marino</div>
			<div class="pais aus">Australia</div>
			<div class="pais den">Dinamarca</div>
			<div class="pais fin">Finlandia</div>
			<div class="pais isl">Islandia</div>
			<div class="pais nor">Noruega</div>
			<div class="pais sve">Suecia</div>
			<div class="pais deu">Alemania</div>
			<div class="pais esp">España</div>
			<div class="pais fra">Francia</div>
			<div class="pais ita">Italia</div>
			<div class="pais uki">Reino Unido</div>
			<div class="pais swi">Suiza</div>
		</div>
	</div>
	<div id="btnsend">Enviar</div>
	<form action="owovision.php" method="POST" id="form">
		<input type="text" name="idUser" value="<?php echo($row["idUser"]); ?>">
		<input type="text" name="handleUser" value="<?php echo($row["handleUser"]); ?>">
		<input type="text" name="countries" id="formCountries">
	</form>
	<script src="dragula.js"></script>
	<script>
		dragula([document.getElementById("votos")]);

		var btnsend = document.getElementById("btnsend");
		btnsend.addEventListener("click",
			function() {
				const votos = document.getElementsByClassName("pais");
				var votosInput = [];
				// for (var i = 0; i < votos.length; i++) {
				for (var i = 0; i < 20; i++) {
					votosInput.push(votos[i].className.split(" ")[1]);
				}
				votosInput = votosInput.join(",");
				const formCountries = document.getElementById("formCountries");
				formCountries.value = votosInput;

				const form = document.getElementById("form");
				form.requestSubmit();
			},
			false);
	</script>
			<?php
		}
		else
		{
			die("<p>¡Falta el parámetro del usuario!</p>");
		}
	?>
</body>
</html>