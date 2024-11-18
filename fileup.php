<?php
include 'conet.php';

$ic = $_GET['ic'];
$name = $_GET['name'];


?>
<!DOCTYPE html>
<html>
    <head>
        <title>FILE UPLOAD</title>

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
        </style>
    </head>
    <body>
<div class="container">
	<div class="content">
		<?php include"nav.php"; ?>
		
		<div class="title" title="OAHAN">OHAN RECORDS</div>

		<div class="info"><br />
		<h2>UPLOAD DOCUMENT</h2>
			<form action=""  method="post" enctype="multipart/form-data">
			  <label style="font-weight:bold; background-color:lightgrey;" height="100" for="mykad">MyKAD</label>
			  <input type="file" id="myFile" name="filename1" required><br><br>
			  
			  <label style="font-weight:bold; background-color:lightgrey;" height="100" for="mykadwaris">MyKAD WARIS</label>
			  <input type="file" id="myFile" name="filename2" required><br><br>
			  
			  <label style="font-weight:bold; background-color:lightgrey;" height="100" for="smati">SURAT MATI</label>
			  <input type="file" id="myFile" name="filename3" required><br><br>
			  
			  <label style="font-weight:bold; background-color:lightgrey;" height="100" for="sberanak">SURAT BERANAK</label>
			  <input type="file" id="myFile" name="filename4" required><br><br>
			  
			  <label style="font-weight:bold; background-color:lightgrey;" height="100" for="snikah">SIJIL NIKAH</label>
			  <input type="file" id="myFile" name="filename5" required><br><br>
			  
			  <label style="font-weight:bold; background-color:lightgrey;" height="100" for="halih">HARTA ALIH</label>
			  <input type="file" id="myFile" name="filename6" required><br><br>
			  
			  <label style="font-weight:bold; background-color:lightgrey;" height="100" for="htakalih">HARTA TAK ALIH</label>
			  <input type="file" id="myFile" name="filename7" required><br><br><br><br>
			  
			  <input type="submit" name="upbtn" value="UPLOAD">
			</form>
			
		</div>
<?php
if(isset($_FILES['filename1'])){
	
	$name_file1 = $_FILES['filename1']['name'];
	$tmp_name1 = $_FILES['filename1']['tmp_name'];
	$local_image1 = "profile/$ic/";
	move_uploaded_file($tmp_name1, $local_image1.$name_file1);
	$extension1 = pathinfo($name_file1,PATHINFO_EXTENSION);
	rename($local_image1.$name_file1, $local_image1."client_mykad.$extension1");
}

if(isset($_FILES['filename2'])){
	
	$name_file2 = $_FILES['filename2']['name'];
	$tmp_name2 = $_FILES['filename2']['tmp_name'];
	$local_image2 = "profile/$ic/";
	move_uploaded_file($tmp_name2, $local_image2.$name_file2);
	$extension2 = pathinfo($name_file2,PATHINFO_EXTENSION);
	rename($local_image2.$name_file2, $local_image2."waris_mykad.$extension2");
}

if(isset($_FILES['filename3'])){
	
	$name_file3 = $_FILES['filename3']['name'];
	$tmp_name3 = $_FILES['filename3']['tmp_name'];
	$local_image3 = "profile/$ic/";
	move_uploaded_file($tmp_name3, $local_image3.$name_file3);
	$extension3 = pathinfo($name_file3,PATHINFO_EXTENSION);
	rename($local_image3.$name_file3, $local_image3."surat_mati.$extension3");
}

if(isset($_FILES['filename4'])){
	
	$name_file4 = $_FILES['filename4']['name'];
	$tmp_name4 = $_FILES['filename4']['tmp_name'];
	$local_image4 = "profile/$ic/";
	move_uploaded_file($tmp_name4, $local_image4.$name_file4);
	$extension4 = pathinfo($name_file4,PATHINFO_EXTENSION);
	rename($local_image4.$name_file4, $local_image4."surat_beranak.$extension4");
}


if(isset($_FILES['filename5'])){
	
	$name_file5 = $_FILES['filename5']['name'];
	$tmp_name5 = $_FILES['filename5']['tmp_name'];
	$local_image5 = "profile/$ic/";
	move_uploaded_file($tmp_name5, $local_image5.$name_file5);
	$extension5 = pathinfo($name_file5,PATHINFO_EXTENSION);
	rename($local_image5.$name_file5, $local_image5."sijil_nikah.$extension5");
}


if(isset($_FILES['filename6'])){
	
	$name_file6 = $_FILES['filename6']['name'];
	$tmp_name6 = $_FILES['filename6']['tmp_name'];
	$local_image6 = "profile/$ic/";
	move_uploaded_file($tmp_name6, $local_image6.$name_file6);
	$extension6 = pathinfo($name_file6,PATHINFO_EXTENSION);
	rename($local_image6.$name_file6, $local_image6."harta_alih.$extension6");
}


if(isset($_FILES['filename7'])){
	
	$name_file7 = $_FILES['filename7']['name'];
	$tmp_name7 = $_FILES['filename7']['tmp_name'];
	$local_image7 = "profile/$ic/";
	move_uploaded_file($tmp_name7, $local_image7.$name_file7);
	$extension7 = pathinfo($name_file7,PATHINFO_EXTENSION);
	rename($local_image7.$name_file7, $local_image7."harta_x_alih.$extension7");
}

$path = "profile/$ic";
chdir($path);
exec("start .");

?>		
		
		
		
<div class="opt">
	
	<form action=""  method="post">

			  
<!--			  <input type="submit" name="upbtn" value="UPLOAD">
-->	</form>

</div>
</div>


</div>
    </body>
</html>