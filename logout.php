<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
	<?php
        session_start();
        session_unset();
        session_destroy();
        ob_start();
        header("location:diakfelulet.php");
        ob_end_flush(); 
        include 'diakfelulet.php';
        exit();
    ?>
<body>
</body>
</html>