<?php
include 'conet.php';

if(!empty($_GET['ic'])){
	$ic = $_GET['ic'];
}else{
	$ic = '';
}

if(!empty($_GET['name'])){
	$name = $_GET['name'];
}else{
	$name = '';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $name; ?> PROFILE</title>

        <link href="https://fonts.googleapis.com/css?family=Karla:400" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Karla';
				background-color: bisque;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: top;
            }

            .content {
                text-align: left;
                display: inline-block;
            }
			
			.info{
				font-size:30px;
			}
			
			input[type="text"]
			{
				font-size:30px;
				line-height: 2em;
			}
			
			input[type="date"]
			{
				font-size:36px;
			}
			
			input[type="checkbox"]
			{
				height: 25px;
				width: 25px;
			}			
			
			
			input[type="submit"]
			{
				background-color: #04AA6D; /* Green */
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 30px;
			}
			
			input[type="button"]
			{
				background-color: red;
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 30px;
			}
			
			#nxt{
				background-color: brown;
				border: none;
				color: white;
				padding: 15px 32px;
				text-align: center;
				text-decoration: none;
				display: inline-block;
				font-size: 38px;
			}
			
			select {
				width: 18rem;
				height: 3rem;
				font-size: 30px;
			}


            .title {
                font-size: 80px;
				color: coral;
            }

            .opt {
                margin-top: 30px;
            }

            .opt a {
              text-decoration: none;
              font-size: 150%;
            }
            
            a:hover {
              color: red;
            }
			
			label{
				font-weight:bold;
				background-color:lightgrey;
			}
        </style>
    </head>
    <body>
<div class="container">
	<div class="content">
		<?php include"nav.php"; ?>	
		
		

		<div class="info">
		<h2>EDIT PROFIL : <?php echo $name; ?></h2>
			<form action="" method="post">
			<?php
			
				$sql = "SELECT * FROM profil WHERE prof_ic=$ic";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				  // output data of each row
				  while($row = $result->fetch_assoc()) {
					  ?>				
			
				<label height="100" for="name">NAMA PENUH:</label><br>
				<input type="text" id="name" name="name" value="<?php echo $row["prof_name"]; ?>" autocomplete="off" autofocus readonly><br><br>

				<label for="ic">NO. (IC):</label><br>
				<input type="text" id="ic" name="ic" value="<?php echo $row["prof_ic"]; ?>" autocomplete="off" readonly><br><br>

				<label  for="bdate">TARIKH LAHIR:</label><br>
				<input type="date" id="bdate" name="bdate" value="<?php echo $row["prof_dob"]; ?>" autocomplete="off" readonly><br><br>

				<label for="job">CHOOSE JOB: <i style="color:red;">edit</i></label><br>
				<select name="job" id="job" required>
					<option value="HIBAH" > HIBAH </option>
					<option value="PUSAKA" > PUSAKA </option>
					<option value="AMANAH RAYA"> AMANAH RAYA </option>
					<option value="PINDAH MILIK TANAH/RUMAH"> PINDAH MILIK TANAH/RUMAH </option>
					<option value="U.PUSAKA KECIL"> U.PUSAKA KECIL </option>
					<option value="DLL" selected> DLL </option>
				</select><br><br>

				<label for="job">CHECKLIST JOB: <i  style="color:red;">edit</i></label><br><br>
				<input type="checkbox" id="cjob1" name="cjob1" value="SEMAK DOCUMENT">
				<label for="cjob1"> SEMAK DOCUMENT </label><br>

				<input type="checkbox" id="cjob2" name="cjob2" value="ISI BORANG">
				<label for="cjob2"> ISI BORANG </label><br>

				<input type="checkbox" id="cjob3" name="cjob3" value="PERMOHONAN">
				<label for="cjob3"> PERMOHONAN </label><br>

				<input type="checkbox" id="cjob4" name="cjob4" value="TARIKH BICARA">
				<label for="cjob4"> TARIKH BICARA </label><br>
				
				<input type="checkbox" id="cjob5" name="cjob5" value="PERINTAH">
				<label for="cjob5"> PERINTAH </label><br>
				
				<input type="checkbox" id="cjob6" name="cjob6" value="DAFTAR">
				<label for="cjob6"> DAFTAR </label><br>
				
				<input type="checkbox" id="cjob7" name="cjob7" value="SELESAI PULANG DOCUMEN">
				<label for="cjob7"> SELESAI PULANG DOCUMEN </label><br>

				
				<input type="submit" name="probtn" value="SAVE">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="button" name="exit" value="CLOSE EDIT" onclick="window.open('', '_self', ''); window.close();"">

<?php
  }
} else {
  echo "0 results";
}
?>			
			</form>
			
		</div>

<?php
if(isset($_POST['probtn'])){

   $name = $_POST['name'];
   $ic = $_POST['ic'];
   $bdate = $_POST['bdate'];
   $job = $_POST['job'];

   if (empty($_POST['cjob1'])) {
	   $cjob1 = "";		
	} else {
		$cjob1 = $_POST['cjob1'];
	}
	
	if (empty($_POST['cjob2'])) {
	   $cjob2 = "";		
	} else {
		$cjob2 = $_POST['cjob2'];
	}
	
	if (empty($_POST['cjob3'])) {
	   $cjob3 = "";		
	} else {
		$cjob3 = $_POST['cjob3'];
	}
	
	if (empty($_POST['cjob4'])) {
	   $cjob4 = "";		
	} else {
		$cjob4 = $_POST['cjob4'];
	}
	
	if (empty($_POST['cjob5'])) {
	   $cjob5 = "";		
	} else {
		$cjob5 = $_POST['cjob5'];
	}
	
	
	if (empty($_POST['cjob6'])) {
	   $cjob6 = "";		
	} else {
		$cjob6 = $_POST['cjob6'];
	}
	
	
	if (empty($_POST['cjob7'])) {
	   $cjob7 = "";		
	} else {
		$cjob7 = $_POST['cjob7'];
	}
	
	
	
	$sql = "UPDATE profil SET prof_job='$job', prof_c1='$cjob1', prof_c2='$cjob2', prof_c3='$cjob3', prof_c4='$cjob4', prof_c5='$cjob5', prof_c6='$cjob6', prof_c7='$cjob7' WHERE prof_ic='$ic'";

	if ($conn->query($sql) === TRUE) {
	  echo $ic." Record updated ";
	  date_default_timezone_set("Asia/Kuala_Lumpur");
	  echo "<br>TIME :  " . date("h:i:sa");
	} else {
	  echo "Error updating record: " . $conn->error;
	}

	#$conn->close();
   
   
}


?>
		
<div class="opt">

</div>
</div>


</div>
    </body>
</html>