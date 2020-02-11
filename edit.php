<?php
require 'connectdb.php';
require 'session.php';
if (loggedin())
{
if((isset($_POST['prefix'])&&!empty($_POST['prefix']))&&(isset($_POST['first'])&&!empty($_POST['first']))&&(isset($_POST['last'])&&!empty($_POST['last']))&&(isset($_POST['phone'])&&!empty($_POST['phone']))&&(isset($_POST['email'])&&!empty($_POST['email']))&&(isset($_POST['dop'])&&!empty($_POST['dop']))&&(isset($_POST['address'])&&!empty($_POST['address']))&&(isset($_POST['complaint'])&&!empty($_POST['complaint']))&&(isset($_POST['dov'])&&!empty($_POST['dov']))&&(isset($_POST['dov1'])&&!empty($_POST['dov1']))&&(isset($_POST['refid'])&&!empty($_POST['refid'])))

	{
		$prefix=$_POST['prefix'];
		$first=$_POST['first'];
		$last=$_POST['last'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$dop=$_POST['dop'];
		$address=$_POST['address'];
		$complaint=$_POST['complaint'];
		$dov=$_POST['dov'];
		$dov1=$_POST['dov1'];
		$refid=$_POST['refid'];
		$status=0;
		$query = "UPDATE `custcomp` SET `prefix`='$prefix',`first`='$first',`last`='$last',`phone`='$phone',`email`='$email',`dop`='$dop',`address`='$address',`complaint`='$complaint' WHERE `refid`='$refid'";
		if($result = mysql_query($query))
		{
			?>
            <html>
						<head>
							<style>
							    .cen{
                                   display: flex; 
                                   justify-content: center;	
                                 }
								#comfirm_complain{
									margin-left: 35%;
									margin-top: 5%;
								}
								
								table {
                                    border-collapse: collapse;
									text-align:center;
                                }

                                 td {
                                    border: 1px solid black;
                                }
								tr {
                                    height: 30px;
                                   }


							</style>
						</head>
						<body>
							
								<h2 class="cen"> UPDATED SUCCESFULLY. <h2>
								
								<div class="cen"><img  src="tick.png" alt="tick"  height="150px" width="150px" id="img"/></div>
								<h3 class="cen">YOUR COMPLAINT DETAILS<h3>
								<table style="font-size:20px;" class="cen">
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
							
							<p style="text-align:center;">
								<button type="button" style="padding:8px 8px; cursor:pointer" onClick="window.print()">PRINT</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="button" style="padding:8px 8px; cursor:crosshair" onClick="location.href='dashboard.php'">GO BACK TO DASHBOARD</button>
                             </p>
						</body>
					</html>
            <?php
			$to= $email;
			$subject = 'problem details';
	$message = 'we will be there for door service for your problem at the given time. Thank you. YOUR PROBLEM HAS BEEN UPDATEDs';
	$headers = 'From: ankdreamboy@gmail.com' . "\r\n" .
		'Reply-To: $email '. "\r\n" .
		'X-Mailer: PHP/' . phpversion();
		
	mail($to, $subject, $message, $headers);
	
             echo"<script type='text/javascript'>alert('Your complaint has been updated succesfully.');</script>	";
		
					}
		else
		{
			$_SESSION['error1']="db prob";
		header('Location: updatedetails.php');			
		}
	}
	else
	{
		$_SESSION['error2']="fill";
		header('Location: updatedetails.php');
	}
}
else
{
	header('Location: adminlogin.php');
}
?>