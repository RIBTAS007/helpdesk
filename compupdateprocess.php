<?php
require 'connectdb.php';
if(isset($_POST['refid'])&&!empty($_POST['refid']))
	{
		$refid=$_POST['refid'];
        $query="SELECT * FROM `custcomp` WHERE `refid`='$refid'";
		if($result=mysql_query($query))
	    {
			$rows=mysql_num_rows($result);
			if($rows==0)
			{
				 $_SESSION['error']="wrong values please reinsert";
				 header('Location: customertrack.php');
			}//rows
			else
			{  
				$prefix = mysql_result($result, 0, 'prefix');
				$first= mysql_result($result, 0, 'first');
				$last = mysql_result($result, 0, 'last');
				$phone = mysql_result($result, 0, 'phone');
				$email = mysql_result($result, 0, 'email');
				$dop = mysql_result($result, 0, 'dop');
				$dov1 = mysql_result($result, 0, 'dov1');
				$dov = mysql_result($result, 0, 'dov');
				$address = mysql_result($result, 0, 'address');
				$complaint= mysql_result($result, 0, 'complaint');
				?>
				         <html>
						
                             <head>
                                 <title>Update Details </title>
	                              <meta charset="utf-8">
                                  <meta name="viewport" content="width=device-width, initial-scale=1">
                                  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
	                              <link rel="stylesheet" href="css/styleComp.css">
                                  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                                  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                                  
                                                            <script>
        
function formValidation()  
{  
var first = document.registration.first;  
var last = document.registration.last;
var email= document.registration.email; 
var phone= document.registration.phone;
var dop= document.registration.dop;
var address=document.registration.address;
var complaint= document.registration.complaint;
    if(allLetter(first))  
    {  
        if(allLetter1(last))  
    {  
        if(ValidateEmail(email))
        {
            if(allnumeric(phone)) 
            {
                if(Validatedate(dop))
                {
                if(alphanumeric(address))
                {
                    if(alphanumeric(complaint))
                    {                   
 						return true;
                   }
                }
            }
            }
        }

}  
}
return false;  
  
}

function allLetter(first)  
{   
var letters = /^[A-Za-z]+$/;  
if(first.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('First name must have alphabet characters only');  
first.focus();  
return false;  
}  
}  
function allLetter1(last)  
{   
var letters = /^[A-Za-z]+$/;  
if(last.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('Last name must have alphabet characters only');  
last.focus();  
return false;  
}  
} 
function ValidateEmail(email)  
{  
var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;  
if(email.value.match(mailformat))  
{  
return true;  
}  
else  
{  
alert("You have entered an invalid email address!");  
email.focus();  
return false;  
}  
}
function allnumeric(phone)  
{   
var numbers = /^\d{10}$/;;  
if(phone.value.match(numbers))  
{  
return true;  
}  
else  
{  
alert('Phone must have numeric characters only with 10 digits. Dont include any + or 0');  
phone.focus();  
return false;  
}  
}  
function Validatedate(dop)
 {
  
  var dtDate= document.getElementById("dop").value; // dop = name of text box
  var currentDate= getCalendarDate()
	if (dtDate > currentDate ) 
  {
   alert('Enter valid date');  
	dop.focus();  
	return false;
   //intFlag++;
  }
  else
  {
   return true;
}
 }
function alphanumeric(address)  
{   
var letters = /^[0-9a-zA-Z]+$/;  
if(address.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('User address must have alphanumeric characters only');  
address.focus();  
return false;  
}  
} 
function alphanumeric(complaint)  
{   
var letters = /^[0-9a-zA-Z]+$/;  
if(complaint.value.match(letters))  
{  
return true;  
}  
else  
{  
alert('User complaint must have alphanumeric characters only');  
complaint.focus();  
return false;  
}  
}  
   
     </script>

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
                                                     <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="FAQ.html"><span class="glyphicon  glyphicon-question-sign"></span><b> FAQ</b></a></li>
                                                     <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="comp.php"><span class="glyphicon glyphicon-list-alt"></span> <b>Complaints</b></a></li>
                                                     <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="#cncl" onClick="myFunction()"><span class="glyphicon glyphicon-earphone"></span> <b>Contact</b></a></li>
                                                     <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="adminlogin.php"><span class="glyphicon glyphicon-user"></span> <b>Admin</b></a></li>
                                                 </ul>
                                             </div>

                                          </div>
                                      </nav>
								 </font>
						
						         <!--Updation form-->
								 
						         <div id="form-main">
                                     <div id="form-div">
						
		<form name="registration" onSubmit="return formValidation();" action="edit1.php" method="post">
        				                 <p class="name"><h3> Prefix:
                    	                 <select name="prefix">
                                             <option value="Mr" selected>Mr</option>
                                             <option value="Mrs">Mrs</option>
											 <option value="Ms">Ms</option>
                   		                 </select></h3></p>
                    	                 <br>
						
           				                 <p class="name">
               			                      <input type="text" name="first" class="feedback-input" size="30" value="<?=$first;?>" id="name" required>
               		                     </p>
						                 <br>
            			                 <p class="name">
               			                     <input type="text" name="last" size="30" class="feedback-input" value="<?=$last;?>" id="name" required>
               			                 </p>
						                 <br>	
           			                     <p class="text">
                			                 <input type="tel" name="phone" size="30" class="feedback-input" value="<?=$phone;?>" maxlength="10" id="comment" required>
               			                 </p>
						                 <br>
           			                     <p class="email">
               	                             <input type="email" name="email" size="30" class="feedback-input" id="email" value="<?=$email;?>" required>
						                 </p>
						                 
										 <p><h3> Date Of Problem:</h3></p>
                	                     <p class="text">
                   		                     <input type="date"  value="<?=$dop;?>" class="feedback-input" id="comment" name="dop">
                   		                 </p>
										 <br>
                                         <p class="text">
                                              <textarea  name="address" placeholder="ADDRESS" class="feedback-input" id="comment" required></textarea>
                                         </p>
										 <br>
						                 <p class="text">
                                             <textarea   name="complaint" placeholder="WRITE COMPLAINT HERE" class="feedback-input" id="comment" required></textarea>
						                 </p><br>                    
						                 <input type="text" name="refid" value="<?=$refid;?>" style="display:none;" >
                                         <input type="text" name="dov" value="<?=$dov;?>"  style="display:none;" >
                                         <input type="text" name="dov1" value="<?=$dov1;?>" style="display:none;" >
                                          
										  <p class="name">
				                           &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				                           <b style="font-size:15px;"> <input type="checkbox" name="checkbox" value="check" style=" width: 20px;  height: 20px;"/> 
				                           &nbsp; &nbsp;&nbsp;&nbsp;<a href="TERMS.html" target="_blank">I AGREE TO THE TERMS AND CONDITIONS </a>
					                       </b>
				                          </p>
				                          <br> 
										  
						                 <div class="submit">
                                             <input type="submit" value="UPDATE"  id="button-blue" style="cursor:pointer" onClick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}"/>
                                             <div class="ease"></div>
                                         </div>
                                         <br>
                                         <div class="submit">
                                             <input type="reset" value="RESET" id="button-blue" style="cursor:pointer"/>
                                         <div class="ease"></div>
                                         </div>
                                         <br>
                     
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
                                             <p>For further queries visit our<a href="FAQ.html"><em><u> FAQ Page</em></u></a></p>
                                         </b></h5> 
      
                                         <h4 style="color:#30d5f2;">
                                             <b>We promise to reply A.S.A.P.</b>
                                         </h4>

                                     </div>
                                     <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
                                     <script src="js/index.js"></script>
									 
									  <!--FOOTER -->
		    
                                     <div style="right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#7822a5; font-size:20px;">
                                         <b> &copy; 2017 INNOVATIVE WEB SOLUTIONS</b>
                                     </div>
                                 </font>
                              </body>
					     </html>
			 <?php	
			}//rows else
	     }//query
	    else
	    {
			 $_SESSION['error1']="query problem";
			 header('Location: customertrack.php');
	    }//query else
    }//isset
		else
	{
	 header('Location: index.html');
	}
?>