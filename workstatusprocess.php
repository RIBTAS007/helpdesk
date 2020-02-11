<?php
require 'connectdb.php';
require 'session.php';
if(loggedin())
{
	if(isset($_POST['refid'])&&!empty($_POST['refid'])&& isset($_POST['status'])&&!empty($_POST['status']))
	{	    
            $refid=$_POST['refid'];
			$status=$_POST['status'];
			if($status=='n')
			$status=0;
			else if($status=='y')
			$status=1;
		  $query="UPDATE `custcomp` SET `status`='$status' WHERE `refid`='$refid'";
		if($result=mysql_query($query))
	    {    
		     if($status==1)
			{
				$to= $email;
				$subject = 'COMPLAINT DETAILS';
				$message = 'WE HAVE SOLVED YOUR PROBLEM. PLEASE GIVE YOUR USEFUL FEEDBACK';
				$headers = 'From: ankdreamboy@gmail.com' . "\r\n" .
				'Reply-To: $email '. "\r\n" .
				'X-Mailer: PHP/' . phpversion();
				mail($to, $subject, $message, $headers);
				$_SESSION['true3']="changed";
				 header('Location: dashboard.php');
			}
			else if($status==0)
			{
				$_SESSION['true3']="changed";
				 header('Location: dashboard.php');
			}
		}//if
		else
		{
			 $_SESSION['error1']="query problem";
			 header('Location: workstatus.php');
	     }//query else
	}//isset
	else
	{
		 $_SESSION['error2']="PLEASE FILL IN THE VALUES TO PROCEED FURTHER";
		 header('Location: workstatus.php');
	}
}
else
{ 
 header('Location: adminlogin.php');
}
?>