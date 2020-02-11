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
     	$refid=uniqid();
		$query= "INSERT INTO `custcomp`(`id`,`prefix`,`first`,`last`,`phone`,`email`,`dop`,`dov`,`dov1`,`address`,`complaint`,`refid`) values ('','$prefix','$first','$last','$phone','$email','$dop','$dov','$dov1','$address','$complaint','$refid')";
		if(mysql_query($query))
		 {	    
						?>
						 <html>
						<head>
				          <meta charset="UTF-8">
                               <title>IWS Complaint</title>
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
                         <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="#"><span class="glyphicon glyphicon-list-alt"></span> <b>Complaints</b></a></li>
                         <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="#cncl" onClick="myFunction()"><span class="glyphicon glyphicon-earphone"></span> <b>Contact</b></a></li>
                         <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="adminlogin.php"><span class="glyphicon glyphicon-user"></span> <b>Admin</b></a></li>
                     </ul>
                 </div>

              </div>
         </nav>
     </font>
						<!--proceed button-->
						      <div id="form-main">
                                 <div id="form-div">
                                     <form class="form" id="form1"   action= "cprocess.php" method="POST">
							
                             
									
									<input type="text" name="refid" value= "<?=$refid;?>" style="display:none;" >	
								 <input type="text" name="prefix"value="<?=$prefix;?>   "style="display:none;">
								<input type="text" value="<?=$first;?>" name="first" style="display:none;">
                                <input type="text" value="<?=$last;?>" name="last" style="display:none;">
									<input type="tel" value="<?=$phone;?>" name="phone" style="display:none;">
                                    <input type="email" value= "<?=$email;?>" name="email" style="display:none;">	
									<input type="date" value="<?=$dop;?>" name="dop" style="display:none;">	
									<input type="text" value="<?=$address;?>" name="address" style="display:none;">	
									<input type="text" value="<?=$complaint;?>" name="complaint" style="display:none;">	
										
                                       <div class="submit">
                                          <input type="submit" value="CLICK HERE TO PROCEED" name="ok" id="button-blue"/>
                                          <div class="ease"></div>
                                       </div><br>
									</form>  
									</div>
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
		    
		    <div style="position:fixed; right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#7822a5; font-size:20px;">
                <b> &copy; 2017 INNOVATIVE WEB SOLUTIONS</b>
            </div>
			
     </font>
						</body>
					</html>   
    		<?php
			$to= $email;
			$subject = 'problem';
			$message = 'We will be there for door service for your problem at the given time. Thank you';
			$headers = 'From: ankdreamboy@gmail.com' . "\r\n" .
				'Reply-To: $email '. "\r\n" .
				'X-Mailer: PHP/' . phpversion();
	         mail($to, $subject, $message, $headers);
			}
		else
		{
			$_SESSION['error']="noquery";
			 header('Location: admincomp.php');
		}
	   }
	else//for isset
	{
		 $_SESSION['error1']="fillin";
		 header('Location: admincomp.php');
	}
}
else
{
	header('Location: adminlogin.php');
}
?>