<?php
require 'connectdb.php';
require 'session.php';
if(loggedin())
{
 if(isset($_POST['username'])&&!empty($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['password']))
    {
	  $username=trim($_POST['username']);
        $password=($_POST['password']);
	  $query1="SELECT * FROM `admin` WHERE `username`='$username' ";
       if($result1=mysql_query($query1))
	    {
			$rows=mysql_num_rows($result1);
			if($rows==0)
			{
			   $query="INSERT INTO `admin`(`id`,`username`, `password`) VALUES ('','$username','$password')";
	                  if(mysql_query($query))
	                     {
				   $_SESSION['true']="admin added";
				   header('Location: dashboard.php');		  
			      }
	                  else
	                     { 
                                $_SESSION['error']="database error";
		              header('Location: addadmin2.php');		  
	                     } 
		        }//rows
		       else 
		       {
			  $_SESSION['error1']="exist username";
				 header('Location: addadmin2.php');
		      }//rowselse
	  }//result1
	else
	{ 
	   $_SESSION['error']="database error";
	    header('Location: addadmin2.php');
			
	}
	}//isset
	 else
	{ 
        $_SESSION['error2']="PLEASE FILL";
       header('Location: addadmin2.php');
	 
	}
}
else
{ 
 header('Location: adminlogin.php');
}
?>