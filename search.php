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
        <title>SEARCH RECORDS</title>

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
			
			input[type="search"]
			{
				font-size:36px;
			}
			
			
			input[type="submit"]
			{
				background-color: gray;
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
			
			#customers {
			  font-family: Arial, Helvetica, sans-serif;
			  border-collapse: collapse;
			  width: 100%;
			}

			#customers td, #customers th {
			  font-size:26px;
			  border: 1px solid #ddd;
			  padding: 8px;
			}

			#customers tr:nth-child(even){background-color: #f2f2f2;}

			#customers tr:hover {background-color: #ddd;}

			#customers th {
			  padding-top: 12px;
			  padding-bottom: 12px;
			  text-align: left;
			  background-color: #04AA6D;
			  color: white;
			}
        </style>
    </head>
    <body>
<div class="container">
	<div class="content">
		<?php include"nav.php"; ?>

		<div class="info"><br />
		<h2>SEARCH RECORDS</h2>
			<form action=""  method="post">
				<label for="osearch"> MyKAD: </label><br>
				<input type="search" id="osearch" name="osearch" ><br><br><br>
				<input type="submit" name="sercbtn" value="SEARCH">
			</form>
			
		</div>
		
<div class="opt">

<table id="customers">

<?php

if(isset($_POST['sercbtn'])){
	
	$serc = $_POST['osearch'];

	$sql = "SELECT * FROM profil WHERE prof_ic=$serc";
	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
	  // output data of each row
	  while($row = $result->fetch_assoc()) {
		  echo "<tr><th>NAME: " . $row["prof_name"]. "<br>JOB: " . $row["prof_job"]."<br>CHECKLIST: <br>|"
		  . $row["prof_c1"]."|```|". $row["prof_c2"]."|```|". $row["prof_c3"]."|```|". $row["prof_c4"]."|```|". $row["prof_c5"]."|```|". $row["prof_c6"]."|```|". $row["prof_c7"]."|
		  <br><a target='_blank' href='edprof.php?ic=$serc' style='text-decoration:none; color:yellow;'>EDIT PROFILE</a></th></tr>";		  
		  
		  	$path = "profile/$ic";
			chdir($path);
			exec("start .");
		
	  }
	} else {
	  echo "0 results";
	}

}
$conn->close();

?>

</table>

</div>
</div>


</div>
    </body>
</html>