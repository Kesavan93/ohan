<?php
  if (!empty($_GET['q'])) {
    switch ($_GET['q']) {
      case 'info':
        phpinfo(); 
        exit;
      break;
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>PROFILE REG</title>

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
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
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
				height: 35px;
				width: 35px;
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
				font-size: 36px;
			}
			
			#nxt{
				background-color: #04AA6D; /* Green */
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
		<?php include"nav.php" ?>
		
		<div class="title" title="OAHAN">OHAN RECORDS</div>

		<div class="info"><br />
		<h2>PROFIL FORM</h2>
			<form action="" method="post">
				<label height="100" for="name">NAMA (IC):</label><br>
				<input type="text" id="name" name="name" autocomplete="off" autofocus required oninput="this.value = this.value.toUpperCase()"><br><br>

				<label for="ic">NO. (IC):</label><br>
				<input type="text" id="ic" name="ic" autocomplete="off" required><br><br>

				<label  for="bdate">TARIKH LAHIR:</label><br>
				<input type="date" id="bdate" name="bdate" autocomplete="off" required><br><br>

				<label for="job">CHOOSE JOB:</label><br>
				<select name="job" id="job" required>
					<option value="HIBAH" > HIBAH </option>
					<option value="PUSAKA" > PUSAKA </option>
					<option value="AMANAH RAYA"> AMANAH RAYA </option>
					<option value="PINDAH MILIK TANAH/RUMAH"> PINDAH MILIK TANAH/RUMAH </option>
					<option value="U.PUSAKA KECIL"> U.PUSAKA KECIL </option>
					<option value="DLL" selected> DLL </option>
				</select><br><br>
<div id="cbox" style="font-size:36px; text-align:left;" >
				<label for="job">CHECKLIST JOB:</label><br><br>
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
				<label for="cjob7"> SELESAI PULANG DOCUMEN </label><br><br><br><br>
</div>				
				<input type="submit" name="probtn" value="SUBMIT">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a id="nxt" href="waris.php">NEXT</a>
			</form>
			
			
<?php

if(isset($_POST['probtn']))
{
   $name = $_POST['name'];
   $ic = $_POST['ic'];
   $bdate = $_POST['bdate'];
   $job = $_POST['job'];
   
   #echo "NEW CLIENT ",$name," ADDED. CLICK NEXT!";
} 



?>
		
		</div>
		
<div class="opt">

</div>
</div>


</div>
    </body>
</html>