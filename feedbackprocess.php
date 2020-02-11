<?php
require 'connectdb.php';
require 'session.php';
if(isset($_POST['refid'])&&!empty($_POST['refid'])&&isset($_POST['feed'])&&!empty($_POST['feed']))
	{
		$refid=$_POST['refid'];
		$feed=$_POST['feed'];
		$query="INSERT INTO `feedback`(`id`, `refid`, `feed`) VALUES ('','$refid','$feed')";
		if(mysql_query($query))
		{
			header('Location: index.html');
		}
		else
		{
			$_SESSION['error1']="query";
		 	header('Location: customertrack.php');

		}
	}
	else
	{
			header('Location: index.html');
	}
	?>
		
