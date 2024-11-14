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
        <title>WARIS REG</title>

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
				font-size:36px;
			}
			
			input[type="text"]
			{
				font-size:30px;
				line-height: 2em;
			}
			
			input[type="file"]
			{
				font-size:32px;
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
			
			textarea { font-size: 30px; }
			
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

		<div class="info">
		<h2>MAKLUMAT WARIS</h2>
			<form action="" method="post">
				<label for="wname">NAMA : </label><br>
				<input type="text" id="wname" name="wname"><br><br>

				<label for="wic">NO.IC : </label><br>
				<input type="text" id="wic" name="wic"><br><br>

				<label for="whub">HUBUNGAN : </label><br>
				<select name="whub" id="whub" required>
					<option value="ANAK" selected> ANAK </option>
					<option value="AYAH" > AYAH </option>
					<option value="IBU"> IBU </option>
					<option value="ADIK-BERADIK"> ADIK-BERADIK </option>
				</select><br><br>

				<label for="wcon">NO.HP:</label><br>
				<input type="text" id="wcon" name="wcon"><br><br>
				
				<label for="wadd">ALAMAT : </label><br>
				<textarea name="walamat" rows="4" cols="30" placeholder="ISI ALAMAT SEMASA"></textarea>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" value="DAFTAR">
			</form>
			
		</div>
		
<div class="opt">

</div>
</div>


</div>
    </body>
</html>