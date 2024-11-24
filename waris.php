<?php
	include 'conet.php';

$ic = $_GET['ic'];
$name = $_GET['name'];
#echo $wprof;

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
			
			table {
			  font-family: arial, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}
			
			td, th {
			  border: 4px solid black;
			  text-align: left;
			  padding: 10px;
			}

        </style>
    </head>
    <body>
<div class="container">
	<div class="content">
		<?php include"nav.php"; ?>
		
		
		<div class="info">
		<h2><u>MAKLUMAT WARIS</u>: <?php echo $name; ?></h2>
			<form action="" method="post">
				<input type="hidden" id="profileic" name="profileic" value="<?php echo $ic; ?>">
				
				<label for="wname">NAMA : </label><br>
				<input type="text" id="wname" name="wname" oninput="this.value = this.value.toUpperCase()"><br><br>

				<label for="wic">NO.IC : </label><br>
				<input type="text" id="wic" name="wic"><br><br>

				<label for="whub">HUBUNGAN : </label><br>
				<select name="whub" id="whub" required>
					<option value="ANAK" selected> ANAK </option>
					<option value="AYAH" > AYAH </option>
					<option value="IBU"> IBU </option>
					<option value="ADIK-BERADIK"> ADIK-BERADIK </option>
					<option value="ISTERI" > ISTERI </option>
					<option value="SUAMI" > SUAMI </option>
				</select><br><br>

				<label for="wcon">NO.HP:</label><br>
				<input type="text" id="wcon" name="wcon"><br><br>
				
				<label for="wadd">ALAMAT : </label><br>
				<textarea name="walamat" rows="4" cols="30" placeholder="ISI ALAMAT SEMASA" oninput="this.value = this.value.toUpperCase()"></textarea>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" name="wabtn" value="SAVE">
			</form>
			
<?php
if(isset($_POST['wabtn'])){

	$wname = $_POST['wname'];
	$wic = $_POST['wic'];
	$whub = $_POST['whub'];
	$wcon = $_POST['wcon'];
	$walam = $_POST['walamat'];

	$sql = "INSERT INTO waris (w_prof, w_name, w_ic, w_hub, w_con, w_alamat)
	VALUES ('$ic', '$wname', '$wic', '$whub', '$wcon', '$walam')";

	if ($conn->query($sql) === TRUE) {
	  #echo $name.' record created successfully';
	  echo "<a id='nxt' href='fileup.php?ic=$ic&name=$name'>NEXT : FILE UPLOAD</a>";
	} else {
	  echo "Error: " . $sql . "<br>" . $conn->error;
	}

}
?>		
			
			
			
			
		</div>
		
<div class="opt">

<table>
<tr>
<?php

$sql = "SELECT * FROM waris WHERE w_prof=$ic";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
	  echo "<th>NAME: " . $row["w_name"]. "<br>HUBUNGAN: " . $row["w_hub"]."</th>";
	
  }
} else {
  echo "0 results";
}
$conn->close();

?>
</tr>
</table>




</div>
</div>


</div>
    </body>
</html>