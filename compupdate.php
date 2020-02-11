<?php
require'connectdb.php';
require 'session.php';
?>
	<html>
    <head>
     <head>
     <title>Update Details </title>
	 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	 <link rel="stylesheet" href="css/styleComp.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </head>
    </head>
<body>
   <!--navigation bar-->
 <font face ="Times New Roman">
<nav class="navbar" >
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
              <li class="" data-toggle="collapse" data-target=".navbar-collapse.in"><a href="dashboard.php"  ><span class="glyphicon glyphicon-home"></span> <b>Home</b></a></li>
  
              <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="FAQ.html"><span class="glyphicon  glyphicon-question-sign"></span><b> FAQ</b></a></li>
              <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="#"><span class="glyphicon glyphicon-list-alt"></span> <b>Complaints</b></a></li>
                
              <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="#cncl" onClick="myFunction()"><span class="glyphicon glyphicon-earphone"></span> <b>Contact</b></a></li>
              <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="adminlogin.php"><span class="glyphicon glyphicon-user"></span> <b>Admin</b></a></li>
              </ul>
        </div>

    </div></div></div>
</nav>


</font>
  
    <div id=complaint>
        <div id="form-main">
    <div id="form-div">
      <form class="form" id="form1" action= "compupdateprocess.php" method="post">
      
        <p class="name">
          <input name="refid" type="text" size="30" class="validate[required,length[0,30]] feedback-input" placeholder="Track Ref ID" id="name" required />
        </p>
     
        <div class="submit">
          <input type="submit" value="SUBMIT" name="ok" id="button-blue" style="cursor:pointer"/>
        <div class="ease"></div>
      
      </form>
  </div>
    </div> 
  </div>
         <?php
		 
         if (isset($_SESSION['error'])&&!empty($_SESSION['error']))
             {   echo"<script type='text/javascript'>alert('You seemed to have entered a wrong value');</script>	";
				 $_SESSION['error']="";
				
              }
			  if(isset($_SESSION['error1'])&&!empty($_SESSION['error1']))
             {   
			  	 echo"<script type='text/javascript'>alert('query problem. Sorry database couldnot be connected.');</script>	";
				 $_SESSION['error']="";
				
              }
			if(isset($_SESSION['error2'])&&!empty($_SESSION['error2']))
             {   
			  	 echo"<script type='text/javascript'>alert('please fill in values');</script>	";
				 $_SESSION['error2']="";
				
              }
   ?>
         </div>
		 
						<!--CONTACT DETAILS -->
                        <font face ="Times New Roman">
                          <div class="conblock" >
 
                            <button id="cncl" onClick="cancelbtn()"style="float:right;">
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
                          </font>
	  </body>
         </html>