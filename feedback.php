<?php
require 'connectdb.php';
require 'session.php';
if(isset($_POST['refid'])&&!empty($_POST['refid']))
	{
		$refid=$_POST['refid'];
		?>
         <html>
             <head>
                 <title>feedback page </title>
	             <meta charset="utf-8">
                 <meta name="viewport" content="width=device-width, initial-scale=1">
                 <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	             <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	             <link rel="stylesheet" href="css/styleComp.css">
                 <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                 <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
             </head>
        
             <body>
              
			     <font face ="Times New Roman">
	   
                     <!--navigation bar-->
	   
                     <nav class="navbar ">
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
                                     <li class="" data-toggle="collapse" data-target=".navbar-collapse.in"><a href="index.html"  ><span class="glyphicon glyphicon-home"></span> <b>Home</b></a></li>
                                     <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="about.html"><b><span class="glyphicon glyphicon-info-sign"></span> About</b></a></li>
                                     <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="FAQ.html"><span class="glyphicon  glyphicon-question-sign"></span><b> FAQ</b></a></li>
                                     <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="comp.php"><span class="glyphicon glyphicon-list-alt"></span> <b>Complaints</b></a></li>
                                     <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="#cncl" onClick="myFunction()"><span class="glyphicon glyphicon-earphone"></span> <b>Contact</b></a></li>
                                     <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="adminlogin.php"><span class="glyphicon glyphicon-user"></span> <b>Admin</b></a></li>
                                 </ul>
                             </div>

                         </div>
                      </nav>
		 
		             <div id="form-main">
                         <div id="form-div">
                             <form class="form" id="form1" action= "feedbackprocess.php" method="POST">
      
                                 <p class="name">
                                      <input name="refid" type="text" value="<?=$refid;?>"  style="display:none" class="validate[required,length[0,30]] feedback-input" placeholder="Track Ref ID" id="name" />
                                 </p>
                                 <p class="text">
                                      <textarea name="feed" class="validate[required,length[6,500]] feedback-input" id="comment" placeholder="Feedback" required></textarea>
                                 </p>
                                 <div class="submit">
                                     <input type="submit" value="SUBMIT FEEDBACK" name="ok" id="button-blue" style="cursor:pointer"/>
                                     <div class="ease"></div>
                                 </div>
                             </form>
                         </div>
                      </div> 
                  
                      <!--CONTACT DETAILS -->
		   
                     <div class="conblock" >
              
			             <button id="cncl" onClick="cancelbtn()"style="float:right;">
                                <i class="fa fa-times" aria-hidden="true"></i>
                         </button>
  
                         <h2 id="C" style="color:#30d5f2;;"class=" fontu">
                             <b>ContactUs</b><hr>
                         </h2>
   
                         <h5><b>
                               <p> Want to get in touch with us?</p>
                             <div class="center">
                                 <p class="g">Email Us :- <em >abc@gmail.com</em></p>
                                 <p class="g"> Contact Us :-<em >9658968895</em></p>
                                 <p class="g">Address:-<em > Friends colony,Jamshedpur-831007</em></p>
                             </div>
                             <p>For further queries visit our<a href="FAQ.html" style="color:#30d5f2;"><em><u> FAQ Page</em></u></a></p>
                         </b></h5> 
      
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
	             </body>
             </html>
         <?php
	}
	else
	{
		header('Location: customertrack.php');
	}
	?>
	
	