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
			
			input[type="search"]
			{
				font-size:36px;
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
		<?php include"nav.php" ?>
		
		<div class="title" title="OAHAN">OHAN RECORDS</div>

		<div class="info"><br />
		<h2>SEARCH RECORDS</h2>
			<form action=""  method="post">
				<label for="osearch"> MyKAD: </label><br>
				<input type="search" id="osearch" name="osearch"><br><br><br>
				<input type="submit" name="sercbtn" value="SEARCH">
			</form>
			
		</div>
		
<div class="opt">

</div>
</div>


</div>
    </body>
</html>