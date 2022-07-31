<?php
session_start();
?>
<html>
 
<head>
<meta charset="utf-8"> 
</head>
<body>
<?php
$_SESSION = array();
session_destroy();
echo "<script type='text/javascript'>window.top.location='index.php';</script>";
?>
</body>
</html>