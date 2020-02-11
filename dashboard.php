<?php
require'connectdb.php';
require 'session.php';
if (loggedin())
{
	?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>

      <link rel="stylesheet" href="css/styleAdmin.css">

  
</head>

<body>
<font face ="Times New Roman">
  <!--navigation bar-->
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
            <a href="#" class="navbar-brand "> <img class=" logos " src="logo1.png"alt="logo"></a>
            <a href="#" class="navbar-brand pad1">    
             <h3><b>INNOVATIVE</h3>
             <p><h4><b> Web Solutions</h4></p></a>
         </div>
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav navbar-right ">
			  <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="#" target="_self" ><i class="fa fa-home" aria-hidden="true"></i> <b>Dashboard</b></a></li>
              
                
              
             
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
              
                         <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="changepassword.php" target="_self" ><i class="fa fa-key" aria-hidden="true"></i>
               <b>Change Password</b></a></li>   
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

    </div></div></div>
</nav>


<div class="btnpad">
	 <h1 style="color:#7822a5;">WELCOME! TO THE ADMIN DASHBOARD</h1>
	</div>
 
 <div class="btnpad"><a style="text-decoration:none;" class="loginbutton" href="trackref.php" target="_self">TRACK REFERENCE ID</a></div>
 <div class="btnpad"><a style="text-decoration:none;" class="loginbutton" href="updatedetails.php" target="_self">UPDATE COMPLAINT DETAILS</a></div>
 <div class="btnpad"><a style="text-decoration:none;" class="loginbutton" href="admincomp.php" target="_self">REGISTER COMPLAINT</a></div>
 <div class="btnpad"><a style="text-decoration:none;" class="loginbutton" href="addadmin2.php" target="_self">ADD ADMIN USER</a></div>
 <div class="btnpad"><a style="text-decoration:none;" class="loginbutton" href="removeadmin.php" target="_self">REMOVE ADMIN USER</a></div>
 <div class="btnpad"><a style="text-decoration:none;" class="loginbutton" href="compdate.php" target="_self">COMPLAINT ON A PARTICULAR DATE</a></div>
 <div class="btnpad"><a style="text-decoration:none;" class="loginbutton" href="changepassword.php" target="_self">CHANGE PASSWORD</a></div>
 <div class="btnpad"><a style="text-decoration:none;" class="loginbutton" href="workstatus.php" target="_self">WORK STATUS</a></div>
 <div class="btnpad"><a style="text-decoration:none;" class="loginbutton" href="seefeedback.php" target="_self">SEE FEEDBACK</a></div>
 <div class="btnpad"><a style="text-decoration:none;" class="loginbutton" href="logout.php" target="_self">LOGOUT</a></div>





 <!--FOOTER -->
		    
		    <div style=" right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#7822a5; font-size:20px;">
                <b> &copy; 2017 INNOVATIVE WEB SOLUTIONS</b>
            </div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

    <script src="js/index.js"></script>
</font>
</body>
</html>
<?php
if(isset($_SESSION['true'])&&!empty($_SESSION['true']))
{    
	echo"<script type='text/javascript'>alert('Admin Added');</script>";
	$_SESSION['true']="";
}
if(isset($_SESSION['true1'])&&!empty($_SESSION['true1']))
{   	
    echo"<script type='text/javascript'>alert('admin removed');</script>";
	 $_SESSION['true1']="";
}
if(isset($_SESSION['true2'])&&!empty($_SESSION['true2']))
{   	
    echo"<script type='text/javascript'>alert('Password changed successfully');</script>";
	 $_SESSION['true2']="";
}
if(isset($_SESSION['true3'])&&!empty($_SESSION['true3']))
{   	
    echo"<script type='text/javascript'>alert('work status changed successfully');</script>";
	 $_SESSION['true3']="";
}
}
else 
{ 
 header('Location: adminlogin.php');
}
?>
