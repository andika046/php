<!DOCTYPE html>
<html>
<head>
	<title>post</title>
</head>
<style type="text/css">
	img{
		width: 500px;
		height: 200px;
		padding-bottom: 0;
	}

	.container{
	display: flex;
    justify-content: center;
    margin:auto;
    padding-top: 0;


	}

	.inputan{
		background-color: #f1f1f1;
		color: black;
		box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
		width: 400px;
		height: 300px;
		padding-bottom: 12px;


	}
	.inputan input[type='text']{
		border-radius: 5%;
		width: 300px;
		height: 100px;
		margin: 3rem;
		text-align: center;
		border: 0.3px;

	}

	.inputan input[type='submit']{
		width: 150px;
		height: 50px;
		background-color: pink;
		color: white;
		border: none;
		border-radius: 5%;

	}
	.inputan input[type='submit']:hover{
		opacity: 0.6;

	}


	.outputan{
	background-color: pink;
	color: white;
	box-shadow: 1px 2px 8px rgba(0, 0, 0, 0.65);
	width: 400px;
	padding-left: 10px;
	text-align: left;
	padding-top: 20px;
	padding-right: 20px;
	}

</style>
<body>
	<center>
		<form method="post" action="<?php print $_SERVER['PHP_SELF']?>">
	<div class="container">
		<div class="inputan">
			<input type="text" name="kalimat" placeholder="masukan kalimat">
			<input type="submit" name="submit" value="PROSES">
		</div>
	</form>
		<div class="outputan">
			 <?php 
					if (!empty ($_POST['kalimat'])){
                    $kalimat1 = $_POST['kalimat'];
                    echo "Kalimat yang diinputkan : <br>";
					echo "<h2>".$kalimat1."</h2>";
                    echo "Banyak Karakter : ".strlen($kalimat1)." Karakter <br><br><br>";
                    echo "Tanggal dibuat : ".date('l,d-m-Y,h:i:s,A')." Waktu setempat";
					}
				?>
		</div>
		
	</div>
</center>


</body>
</html>