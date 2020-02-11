<?php
require 'connectdb.php';
require 'session.php';
if(loggedin())
{
if((isset($_POST['prefix'])&&!empty($_POST['prefix']))&&(isset($_POST['first'])&&!empty($_POST['first']))&&(isset($_POST['last'])&&!empty($_POST['last']))&&(isset($_POST['phone'])&&!empty($_POST['phone']))&&(isset($_POST['email'])&&!empty($_POST['email']))&&(isset($_POST['dop'])&&!empty($_POST['dop']))&&(isset($_POST['address'])&&!empty($_POST['address']))&&(isset($_POST['complaint'])&&!empty($_POST['complaint'])))
{
		$prefix=$_POST['prefix'];
		$first=$_POST['first'];
		$last=$_POST['last'];
		$phone=$_POST['phone'];
		$email=$_POST['email'];
		$dop=$_POST['dop'];
		$address=$_POST['address'];
		$complaint=$_POST['complaint'];
		$dov= date('y-m-d', strtotime(' + 3 days'));
		$dov1= date('y-m-d', strtotime(' + 5 days'));
		$refid=$_POST['refid'];
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
           <h2 class="cen"> YOUR COMPLAINT DETAILS <h2><br><br>
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
									<table>
									<div style="text-align:center;color:red"">**Please note down your reference ID for future reference</div>
								<br>
								
								<p style="text-align:center;">
								<button type="button" style="padding:8px 8px; cursor:pointer;" onClick="window.print()" >PRINT</button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button type="button" style="padding:8px 8px; cursor:pointer;" onClick="location.href='dashboard.php'">GO BACK TO HOME</button>
                             </p>
							
       </body>
    </html>
    <?php
    	
}
else{
	$_SESSION('error1')="fill in values";
	header('Location: admincomp.php');
}
}
else
{
  header('Location: index.html');
}
?>