<?php
require 'session.php';
if (loggedin())
{
	$username=$_SESSION['username'];
		?>
		<html>
		<head>
    <title>change password</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 <link rel="stylesheet" href="css/styleAdmin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    
    
          <script>
			
			function formValidation()  
			 { 
				 var newpassword= document.change.newpassword;
				 var password = document.change.password; 
				 var cnpassword= document.change.cnpassword;
					 if(password_validation1(password,7,14))  
					{  
						if(password_validation2(newpassword,7,14))  
							{  
							  if(password_validation3(cnpassword,7,14))  
									{  
						 			 	return true;
									}
							}
					}
				return false;
			 }
			 function password_validation1(password,mx,my)  
				{  
				var password_len = password.value.length;  
				if (password_len == 0 ||password_len >= my || password_len < mx)  
				{  
				alert("Password should not be empty / length be between "+mx+" to "+my);  
				password.focus();  
				return false;  
				}  
				return true;  
				}
				function password_validation2(newpassword,mx,my)  
				{  
				var newpassword_len = newpassword.value.length;  
				if (newpassword_len == 0 ||newpassword_len >= my || newpassword_len < mx)  
				{  
				alert("New Password should not be empty / length be between "+mx+" to "+my);  
				newpassword.focus();  
				return false;  
				}  
				return true;  
				}
				function password_validation3(cnpassword,mx,my)  
				{  
				var cnpassword_len = cnpassword.value.length;  
				if (cnpassword_len == 0 ||cnpassword_len >= my || cnpassword_len < mx)  
				{  
				alert("Password for confirmation should not be empty / length be between "+mx+" to "+my);  
				cnpassword.focus();  
				return false;  
				}  
				return true;  
				}
			 
			 </script>
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
                             
			                 <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="#" target="_self" ><span class="glyphicon glyphicon-list-alt"></span> <b>TackRefID</b></a></li>
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


<div class="container">
    <div class="btnpad">
	 <h1 style="color:#7822a5;">WELCOME! TO THE CHANGE PASSWORD SECTION</h1>
	</div>

    <!-- data-toggle lets you display modal without any JavaScript -->
	<div class="btnpad">
    <button style="align:middle;" type="button" class="loginbutton" data-toggle="modal" data-target="#popUpWindow"><h1>CLICK HERE TO CHANGE YOUR PASSWORD</h1></button>
     </div>

    <div class="modal fade" id="popUpWindow">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title">Change Password</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form  name="change" onSubmit="return formValidation()"  action="changepasswordprocess.php" method="POST">
                        <div class="form-group">
                            <input type="text" value="<?=$username;?>" style="display:none" name="username" class="form-control"  required>
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Password" name="password" class="form-control" required>
                        </div>
						 <div class="form-group">
                            <input type="password" placeholder="New Password" name="newpassword" class="form-control" required>
                        </div>
						 <div class="form-group">
                            <input type="password" placeholder="Confirm New Password" name="cnpassword" class="form-control" required>
                        </div>
                    
                </div>

                <!-- button -->
                <div class="modal-footer">
                    
					<input class="btn  btn-block" style="background-color:purple; color:white; border:none;" type="submit" value="GO">
					<input class="btn  btn-block" style="background-color:purple; color:white; border:none;" type="reset" value="RESET">
                </div>
              </form>
            </div>
        </div>
    </div>

</div>

 <!--FOOTER -->
		    
		    <div style=" position: fixed; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#7822a5; font-size:20px;">
                <b> &copy; 2017 INNOVATIVE WEB SOLUTIONS</b>
            </div>
</font>

		</body>
		</html>
		<?php
		if (isset($_SESSION['error'])&&!empty($_SESSION['error']))
		{
			echo"<script type='text/javascript'>alert('password mismatch during confirmation');</script>";
			$_SESSION['error']="";	
		}
		if(isset($_SESSION['error1'])&&!empty($_SESSION['error1']))
		{
			echo"<script type='text/javascript'>alert('Either of username or password is incorrect');</script>";
			$_SESSION['error1']="";
		}
		if(isset($_SESSION['error2'])&&!empty($_SESSION['error2']))
		{
			echo"<script type='text/javascript'>alert('Query problem. Could not connect database');</script>";
			$_SESSION['error2']="";
		}
		if(isset($_SESSION['error3'])&&!empty($_SESSION['error3']))
		{
			echo"<script type='text/javascript'>alert('Please fill to proceed');</script>";
			$_SESSION['error3']="";
		}

}
else
{
	header('Location: adminlogin.php');
}
?>