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
        <title>HOME</title>

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

            .title {
                font-size: 80px;
				color: coral;
            }
        </style>
    </head>
    <body>
<div class="container">
	<div class="content">
		<?php include"nav.php" ?>
		
		<div class="title" title="OAHAN">OHAN RECORDS</div>

		
<div class="opt">

</div>
</div>


</div>
    </body>
</html>