<?php
require 'session.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

	 <link rel="stylesheet" href="css/styleAdmin.css">
	 <link rel="stylesheet" href="css/styleAbout.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</head>
<body>
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
            <a href="#" class="navbar-brand "> <img class=" logos " src="logo1.png"alt="logo"></a>
            <a href="#" class="navbar-brand pad1">    
             <h3><b>INNOVATIVE</h3>
             <p><h4><b> Web Solutions</h4></p></a>
         </div>
        </div>

        <!-- Menu Items -->
        <div class="collapse navbar-collapse" id="mainNavBar">
            <ul class="nav navbar-nav navbar-right ">
              <li class="" data-toggle="collapse" data-target=".navbar-collapse.in"><a href="index.html"  ><span class="glyphicon glyphicon-home"></span> <b>Home</b></a></li>
              <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="about.html"><b><span class="glyphicon glyphicon-info-sign"></span> About</b></a></li>
              <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="FAQ.html"><span class="glyphicon  glyphicon-question-sign"></span><b> FAQ</b></a></li>
              <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="comp.php"><span class="glyphicon glyphicon-list-alt"></span> <b>Complaints</b></a></li>
                
              <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="#cncl" onclick="myFunction()"><span class="glyphicon glyphicon-earphone"></span> <b>Contact</b></a></li>
              <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="#"><span class="glyphicon glyphicon-user"></span> <b>Admin</b></a></li>
               
			     
                    </li>
			    
			  
			  
			  
			  </ul>
        </div>

    </div></div></div>
</nav>


<div class="container">



    <!-- data-toggle lets you display modal without any JavaScript -->
	<div class="btnpad">
	 <h1 style="color:#7822a5;">WELCOME! TO THE ADMIN LOGIN SECTION</h1>
	</div>
	<div class="btnpad">
    <button type="button" class="loginbutton" data-toggle="modal" data-target="#popUpWindow"><h1>PLEASE CLICK HERE TO LOGIN</h1></button>
     </div>
    <div class="modal fade" id="popUpWindow">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- header -->
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h3 class="modal-title" style="color:#7822a5;">Admin Login</h3>
                </div>

                <!-- body (form) -->
                <div class="modal-body">
                    <form role="form" action="loginprocess.php" method="POST">
                        <div class="form-group">
                            <input type="text"  placeholder="Admin Name" name="username" class="form-control" required>
						</div>
                        <div  class="form-group">
                            <input type="password"  placeholder="Password"  name="password" class="form-control" required>
                        </div>
                    
                </div>

                  <!-- button -->
                <div class="modal-footer">
                   <div class="form-group">
					<input  class="btn btn-block" style="background-color:purple;color:white;border:none;" type="submit" value="LOGIN">
					</div>
                </form>
            </div>
        </div>
    </div>

</div>
</font>





<!--CONTACT DETAILS -->
<font face ="Times New Roman">
<div class="conblock" >
 
  <button id="cncl" onclick="cancelbtn()"style="float:right;">
    <i class="fa fa-times" aria-hidden="true"></i>
  </button>
  
  <h2 id="C" style="color:#30d5f2;;"class=" fontu">
    <b>ContactUs</b><hr>
  </h2>
   
  <h5 style="">
    <b>
      <p> Want to get in touch with us?</p>
      <div class="center">
      <p class="g">Email Us :- <em >abc@gmail.com</em></p>
      <p class="g"> Contact Us :-<em >9658968895</em></p>
      <p class="g">Address:-<em > Friends colony,Jamshedpur-831007</em></p>
        </div>
      <p>For further queries visit our<a href="#"><em><u> FAQ Page</em></u></a></p>
    </b>
  </h5> 
      
  <h4 style="color:#30d5f2;">
     <b>We promise to reply A.S.A.P.</b>
  </h4>

</div>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>

    <script src="js/index.js"></script>
	 <!--FOOTER -->
		    
		    <div style=" position: fixed; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#7822a5; font-size:20px;">
                <b> &copy; 2017 INNOVATIVE WEB SOLUTIONS</b>
            </div>
</font>
</body>
</html>
<?php
if(isset($_SESSION['error3'])&&!empty($_SESSION['error3']))
{
	echo"<script type='text/javascript'>alert('Please fill all values');</script>";
	$_SESSION['error3']="";
	
}
if(isset($_SESSION['error1'])&&!empty($_SESSION['error1']))
{
	echo"<script type='text/javascript'>alert('wrong values inserted');</script>";
	$_SESSION['error1']="";
}
if(isset($_SESSION['error2'])&&!empty($_SESSION['error2']))
{
	echo"<script type='text/javascript'>alert('query problem');</script>";
	$_SESSION['error2']="";
}
?>
