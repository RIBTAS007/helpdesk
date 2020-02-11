<?php
require 'connectdb.php';
require 'session.php';

if(loggedin())
{
if(isset($_POST['username'])&&!empty($_POST['username'])&&isset($_POST['password'])&&!empty($_POST['password']))
    {
		$username=trim($_POST['username']);
        $password=$_POST['password'];
	  $query1="SELECT * FROM `admin` WHERE `username`='$username' && `password`='$password' ";
      if($result1=mysql_query($query1))
	    {
			$rows=mysql_num_rows($result1);
			$id=mysql_result($result1,0,'id');
			if($rows==0)
			{
				 $_SESSION['error1']="wrongvalues";
				 header('Location: removeadmin.php');
			}//rows
			elseif($id==1)
				{
					$_SESSION['error2']="trying to remove admin";
					header('Location: removeadmin.php');
				}
			
			else
			{    
				
				 $query="DELETE FROM `admin` WHERE `username`='$username'&& `password`='$password' ";
				 if(mysql_query($query))
				  {
					   $_SESSION['true1']="correct";
					   if($username==$_SESSION['username'])
					   {
						   header('Location: logout.php');
					   }
					   else
					   {
					   header('Location: dashboard.php');
					   }
				  }
				 else
				  { 
				    $_SESSION['error']="query problem";
			        header('Location: adminlogin.php');	
				   }
							
				}//rows else
		 }//query
			else
			{
			 $_SESSION['error']="query problem";
			 header('Location: removeadmin.php');
			}//query else
	}
	else//isset
	{ 
	  header('Location: removeadmin.php') ;
	}
}
else{
	 header('Location: adminlogin.php');	
}	
?>