<?php
require 'session.php';
require 'connectdb.php';
if (loggedin())
{
		?>
		<html>
		<head>
		
  <meta charset="UTF-8">
  <title> Complaint on a particular date</title>
  
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
  
  <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
  
  
      <link rel="stylesheet" href="css/styleComp.css">

  


		</head>
		<body>
		
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
			                 <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="#" target="_self" ><span class="glyphicon glyphicon-list-alt"></span> <b>CompOnDate</b></a></li>
                 
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

		
		  <!--Complaint Form-->
  <div id="form-main">
  <div id="form-div">
    <form class="form" id="form1" action= "compdateprocess.php" method="POST">
       <p class="text">
        <input name="date"  type="date" class="validate[required,custom[date]] feedback-input" placeholder="dd/mm/yyyy" id="comment" required />
      </p>
      <div class="submit">
        <input type="submit" value="SUBMIT" name="ok" id="button-blue"/>
        <div class="ease"></div>
      </div>
        
      
      
    </form>
  </div>
 </div> 
   <!--FOOTER -->
		    
		    <div style=" position: absolute; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#7822a5; font-size:20px;">
                <b> &copy; 2017 INNOVATIVE WEB SOLUTIONS</b>
            </div>
		</body>
		</html>
		<?php
}
else
{
	header('Location: adminlogin.php');
}
if(isset($_SESSION['error'])&&!empty($_SESSION['error']))
		{
			echo "<script type = 'text/javascript'> alert('NO complaint to solve for this date');</script>";
			$_SESSION['error']="";
			
		}
		if(isset($_SESSION['error1'])&&!empty($_SESSION['error1']))
		{
			echo "<script type = 'text/javascript'> alert('PLEASE FILL IN VALUES');</script>";
			$_SESSION['error1']="";
			
		}
?>