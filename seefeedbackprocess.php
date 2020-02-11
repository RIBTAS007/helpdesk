<?php
require'connectdb.php';
require 'session.php';
if(loggedin())
{
  if(isset($_POST['refid'])&&!empty($_POST['refid']))
	{
		$refid=$_POST['refid'];
        $query="SELECT * FROM `feedback` WHERE `refid`='$refid'";
		if($result=mysql_query($query))
	    {
			$rows=mysql_num_rows($result);
			if($rows==0)
			{
				 $_SESSION['error']="wrong values";
				 header('Location: seefeedback.php');
			}//rows
			else
			{   
			    $i=$rows-1;
				$refid = mysql_result($result, $i, 'refid');
				$feed= mysql_result($result,$i, 'feed');
				?>
				<html>
                     <head>
                         <title>see feedback</title>
				          <meta charset="UTF-8">
                          <meta name="viewport" content="width=device-width, initial-scale=1">
                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                          <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
                          <link rel="stylesheet" href="css/styleAdmin.css">
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

                                td ,th{
                                    border: 1px solid black; padding:10px; font-size:20px;
                                }
								tr {
                                    height: 30px;
                                }
						  </style>
                      </head>
                     
					 <body>
               
             			 <!--navigation bar-->
                           
						 <font face ="Times New Roman">
                             <nav class="navbar">
                                 <div class="container-fluid " >

                                     <!-- Logo -->
                                     <div class="navbar-header">
                                         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#mainNavBar">
                                             <span class="icon-bar" ></span>
                                             <span class="icon-bar"></span>
                                             <span class="icon-bar"></span>
                                         </button>
                                         <div id="heads">
                                             <a href="index.html" class="navbar-brand "> <img class=" logos " src="logo1.png"alt="logo"></a>
                                             <a href="index.html" class="navbar-brand pad1">    
                                             <h3><b>INNOVATIVE</h3>
                                             <p><h4><b> Web Solutions</h4></p></a>
                                         </div>
                                     </div>

                                     <!-- Menu Items -->
                                     
									 <div class="collapse navbar-collapse" id="mainNavBar">
                                         <ul class="nav navbar-nav navbar-right ">
			                                 <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="dashboard.php" target="_self" ><i class="fa fa-home" aria-hidden="true"></i> <b>Dashboard</b></a></li>
                                              
											 <!-- drop down for form -->
                                             <li class="dropdown" >
                                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog" aria-hidden="true"></i> FormSettings <span class="caret"></span></a>
                                                  <ul class="dropdown-menu" style="background-color:#7822a5;">
                                                      <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="trackref.php" target="_self" ><span class="glyphicon glyphicon-list-alt"></span> <b>TackRefID</b></a></li>
                                                      <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="updatedetails.php" target="_self" ><span class="glyphicon glyphicon-list-alt"></span> <b>UpdateComp</b></a></li>
                                                      <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="admincomp.php" target="_self" ><span class="glyphicon glyphicon-list-alt"></span> <b>RegComp</b></a></li>
			                                          <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="compdate.php" target="_self" ><span class="glyphicon glyphicon-list-alt"></span> <b>CompOnDate</b></a></li>
                                                 </ul>
			                                 </li>
			      
				                             <!-- drop down for admin -->
                                             <li class="dropdown">
                                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cog" aria-hidden="true"></i> AdminSettings <span class="caret"></span></a>
                                                 <ul class="dropdown-menu" style="background-color:#7822a5;">
						                             <li class="" data-toggle="collapse" data-target=".navbar-collapse.in"><a href="addadmin2.php"  ><span class="glyphicon glyphicon-user"></span> <b>AddAdmin</b></a></li>
                                                     <li data-toggle="collapse" data-target=".navbar-collapse.in"><a  href="removeadmin.php" target="_self" ><span class="glyphicon  glyphicon-user"></span><b>RemoveAdmin</b></a></li>
                                                     <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="changepassword.php" target="_self" ><i class="fa fa-key" aria-hidden="true"></i> <b>Change Password</b></a></li>   
                                                 </ul>
                                              </li>
			  
			                                 <!-- drop down menu -->
                                             <li class="dropdown">
                                                 <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-list-alt">MoreOptions<span class="caret"></span></a>
                                                 <ul class="dropdown-menu" style="background-color:#7822a5;">
                                                        <li><a href="seefeedback.php"><span class="glyphicon glyphicon-list-alt">SeeFeedback</span></a></li>
                                                        <li><a href="workstatus.php"><span class="glyphicon glyphicon-list-alt">WorkStatus</span></a></li>
                                                 </ul>
                                             </li>
					
					                         <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="logout.php" target="_self"><span class="glyphicon glyphicon-user"></span> <b>LogOut</b></a></li>
			  
			                              </ul>
                                      </div>
                                 </div>
                             </nav>
                              
							  <!--feedback form-->
                 
				             <div class="cen" style="color:purple; font-size:50px;"> FEEDBACK </div></font><br><br><br>
			                 <table class="cen">
                                  <tr>
									    <th><b>REFERENCE ID</b></th>
                                        <th><b>FEEDBACK</b></th>
                                   </tr>
                                   <tr>
                                        <td><?=$refid;?></td>
				                        <td><?=$feed;?></td>
                                    </tr>
                             </table>
				                 
							 <p><div class="btnpad">
                                 <button type="button" class="loginbutton"  onClick="location.href='dashboard.php'"><h1>GO BACK TO DASHBOARD</h1></button>
                             </div></p>
	  
	                         <!--FOOTER -->
		    
		                     <div style=" position: fixed; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#7822a5; font-size:20px;">
                                 <b> &copy; 2017 INNOVATIVE WEB SOLUTIONS</b>
                             </div>
							 
						 </font>
                     </body>
                 </html>
             <?php
			}
		}
		else
		{
				$_SESSION['error1']="QUERY PROBLEM";
				 header('Location: seefeedback.php');

		}
	}
			else
		{
				$_SESSION['error2']="please fill";
				 header('Location: seefeedback.php');

		}
	}
	
	else//loggedin
	{ 
	  header('Location: adminlogin.php') ;
	}
?>