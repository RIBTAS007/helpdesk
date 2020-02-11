<?php
require 'connectdb.php';
require 'session.php';
if (loggedin())
{
	if(isset($_POST['username'])&&!empty($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['password'])&&isset($_POST['newpassword'])&&!empty($_POST['newpassword'])&&isset($_POST['cnpassword'])&&!empty($_POST['cnpassword']))
    { 
		$username=trim($_POST['username']);
		$password=$_POST['password'];
		$newpassword=$_POST['newpassword'];
		$cnpassword=$_POST['cnpassword']; 
	  $query1="SELECT * FROM `admin` WHERE `username`='$username' && `password`='$password' ";
      if($result1=mysql_query($query1))
	    {
			$rows=mysql_num_rows($result1);
			if($rows==0)
			{
				 $_SESSION['error1']="incorrectparentdata";
				 header('Location: changepassword.php');
			}//rows
			else
			{    if($newpassword!=$cnpassword)
		  			{
						 $_SESSION['error']="mismatch";
						 header('Location: changepassword.php');
					}
					else
					 {
						 $query="UPDATE `admin` SET `password`='$newpassword' WHERE `username`='$username'";
						 if(mysql_query($query))
						  {
							   $_SESSION['true2']="change";
							   header('Location: dashboard.php');		  
						  }
						 else
						  { 
							$_SESSION['error2']="query problem";
							header('Location: changepassword.php');
						  }
					 }
			}//rows else
		 }//query
			else
			{
			 $_SESSION['error2']="query problem";
			 header('Location: changepassword.php');
			}//query else
	}
	else
	{
		$_SESSION['error2']="fill";
		header('Location: changepassword.php');
	}
}
else
	{ 
	  header('Location: adminlogin.php') ;
	}
?>