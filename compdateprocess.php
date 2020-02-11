<?php
require 'session.php';
require 'connectdb.php';
if(loggedin())
{
   if(isset($_POST['date'])&&!empty($_POST['date']))
    {
		$i=$_POST['date'];
		$mysqldate=date('Y-m-d',strtotime(str_replace('-','/',$i)));
	    $query="SELECT * FROM `custcomp` WHERE `dov`='$mysqldate' ";
		$res=mysql_query($query);
		if($result=mysql_query($query))
		{
			$rows=mysql_num_rows($result);
			if($rows==0)
			{
				 $_SESSION['error']="noquery";
				 header('Location: compdate.php');
			}
		}
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

                                 td,th {
                                    border: 1px solid black;
                                }
								tr {
                                    height: 30px;
                                   }
								   </style>
                    </head>
                    <body>
					  <h1 class="cen"> ORDER DETAILS ON THIS DATE ARE :-</h1>
                    <table  style="font-size:20px;" class="cen">
						<tr>
                        <th>NAME</th>
                        <th>ADDRESS</th>
                        <th>REFID</th>
                        <th>PHONE</th>
                        <th>COMPLAINT</th>
						 <th>WORK STATUS</th>
                        </tr>
                        <?php
               			 while($row1=mysql_fetch_array($res))
						{
							 ?>
                    <tr>
                    <td><?php echo $row1['prefix'],' ',$row1['first'],' ',$row1['last']; ?></td>
                    <td><?php echo $row1['address']; ?></td>
                    <td><?php echo $row1['refid']; ?></td>
                     <td><?php echo $row1['phone']; ?></td>
                      <td><?php echo $row1['complaint'];?></td>
					   <td>
					   <?php 
					   if($row1['status']=='0')
					   echo "Incomplete";
					   else
					   echo "Complete";
					   ?>
                       </td>
                    </tr><?php
						}
						?>
                     
                     </table>
					<p style="text-align:center;">
                            <button type="button" style="padding:8px 8px; cursor:pointer" onClick="window.print()">PRINT</button>
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	                        <button type="button" id="go" style="padding:8px 8px; cursor:pointer" onClick="location.href='dashboard.php'">GO BACK TO HOME PAGE</button>
                   </p>
             </body>
         </html>
      <?php
	}
	else
    {
		 $_SESSION['error']="fill";
		 header('Location: compdate.php');

	}
}
else
{
	  header('Location: adminlogin.php');
}
	?>