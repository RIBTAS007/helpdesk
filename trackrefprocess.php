<?php
require 'connectdb.php';
require 'session.php';
if ( loggedin())
{
	if(isset($_POST['refid'])&&!empty($_POST['refid']))
	{
		$refid=$_POST['refid'];
        $query="SELECT * FROM `custcomp` WHERE `refid`='$refid'";
		if($result=mysql_query($query))
	    {
			$rows=mysql_num_rows($result);
			if($rows==0)
			{
				 $_SESSION['error']="You seemed to have entered a wrong value";
				 header('Location: trackref.php');
			}//rows
			else
			{   $prefix = mysql_result($result, 0, 'prefix');
				$first= mysql_result($result, 0, 'first');
				$last = mysql_result($result, 0, 'last');
				$phone = mysql_result($result, 0, 'phone');
				$email = mysql_result($result, 0, 'email');
				$dop = mysql_result($result, 0, 'dop');
				$dov1 = mysql_result($result, 0, 'dov1');
				$dov = mysql_result($result, 0, 'dov');
				$address = mysql_result($result, 0, 'address');
				$complaint= mysql_result($result, 0, 'complaint');
				$status=mysql_result($result, 0, 'status');
				?>
				<html>
						<head>
							<style>
								#comfirm_complain{
									margin-left: 35%;
									margin-top: 15%;
								}
								#img{
									margin-left: 12%;
								}
								#print
								{
									margin-left: 15%;
								}
								#go
								{
								margin-left: 3%;
								}
							</style>
						</head>
						<body>
							<div id=comfirm_complain>
								
								<h3>YOUR ORDER DETAILS<h3>
								<table border=2>
									<tr>
										<td> Reference Id:</td>
										<td> <?=$refid;?> </td>	
									</tr>
									<tr>
										<td> Name:</td>
										<td> <?=$prefix;?> <?=$first;?> <?=$last;?> </td>
									</tr>
									<tr>
										<td> Phone number:</td>
										<td> <?=$phone;?> </td>
									</tr>
									<tr>
										<td> Email:</td>
										<td> <?=$email;?> </td>
									</tr>
									<tr>
										<td> Date of problem:</td>
										<td> <?=$dop;?> </td>
									</tr>
									<tr>
										<td> Date of visit:</td>
										<td> <?=$dov;?> to <?=$dov1;?></td>
									</tr>
									<tr>
										<td> Address:</td>
										<td> <?=$address;?> </td>
									</tr>
									<tr>
										<td> Complaint:</td>
										<td> <?=$complaint;?> </td>
									</tr>
									<tr>
										<td> Work Status:</td>
										<td> <?=$status;?> </td>
									</tr>
								<table>
								<br><br>
							</div>
                            <form id=print action="">
                                  <button  style="cursor:pointer;" type="button" onClick="window.print()">PRINT</button>
						          <button style="cursor:pointer;" type="button" id="go" onClick="location.href='dashboard.php'">GO BACK TO DASHBOARD</button>
							</form>
					 </body>
				 </html>
			 <?php	
			}//rows else
	     }//query
	    else
	    {
			 $_SESSION['error1']="query problem";
			 header('Location: trackref.php');
	     }//query else
	   }//isset
	else
	{

		 $_SESSION['error2']="PLEASE FILL IN THE VALUES TO PROCEED FURTHER";
		 header('Location: trackref.php');
	}//else isset
}
    else
	{
       header('Location: adminlogin.php');
	}

?>