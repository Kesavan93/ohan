<!DOCTYPE html>
<html>
<head></head>
<body>
<a style="font-size:30px;" href="index.php">HOME</a>&nbsp;&nbsp;&nbsp;
<a style="font-size:30px;" href="profile.php">PROFILE</a>&nbsp;&nbsp;&nbsp;
<a style="font-size:30px;" href="search.php">SEARCH</a>&nbsp;&nbsp;&nbsp;
<!-- <a style="font-size:30px;" href="data.php">DATA</a>
-->
<br><br><br>
</body>
</html>
<?php

#if(date("Y-m-d")=="2024-11-19"){
#	copy("profile.php","copy.php");
#	unlink("profile.php");
#}

?>