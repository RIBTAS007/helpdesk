<?php
require 'connectdb.php';
require 'session.php';
if (loggedin())
{
	if(isset($_POST['refid'])&&!empty($_POST['refid']))
	{
		$refid=$_POST['refid'];
        $query="SELECT * FROM `custcomp` WHERE `refid`='$refid'";
		if($result=mysql_query($query))
	    {
			$rows=mysql_num_rows($result);
			if($rows==0)
			{
				$_SESSION['error']="wrong values";
				header('Location: updatedetails.php');
			}//rows
			else
			{   $prefix = mysql_result($result, 0, 'prefix');
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
                          <meta charset="UTF-8">
                          <title>update details</title>
                          <meta name="viewport" content="width=device-width, initial-scale=1">
                          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
                          <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
                          <link rel='stylesheet prefetch' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css'>
                          <link rel="stylesheet" href="css/styleComp.css">
                          
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
                                                 <li data-toggle="collapse" data-target=".navbar-collapse.in"><a href="changepassword.php" target="_self" ><i class="fa fa-key" aria-hidden="true"></i><b>Change Password</b></a></li>   
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
                        </font>
                       
					   <!--Complaint Form-->
                       
					   <div id="form-main">
                         <div id="form-div">
                             <form class="form" id="form1" name="registration" onSubmit="return formValidation();" action= "edit.php" method="POST">
                                 <p class="name"><h3> Prefix:
	                                 <select name="prefix">
	                                     <option value="Mr">Mr</option>
		                                 <option value="Mrs">Mrs</option>
										 <option value="Ms">Ms</option>
		                             </select>
		                         </h3></p><br>
     
                            	 <p class="name">
                                     <input name="first" type="text" class="validate[required,custom[onlyLetter],length[0,30]] feedback-input"  size="30" value="<?=$first;?>" placeholder="First Name" id="name" required/>
                                 </p>
                                 <p class="name">
                                     <input name="last" type="text" class="validate[required,custom[onlyLetter],length[0,30]] feedback-input"  size="30" value="<?=$last;?>" placeholder="Last Name" id="name" required/>
                                 </p>
                                 <p class="email">
                                     <input name="email" type="email" size="30" class="validate[required,custom[email]] feedback-input" id="email" placeholder="Email"  value="<?=$email;?>" required />
                                 </p>
								 <p><h3> Date Of Problem:</h3></p>
                                 <p class="text">
                                     <input type="tel" name="phone" size="30" class="validate[required] feedback-input" maxlength="10" placeholder="Phone Number" size="30" value="<?=$phone;?>" id="comment" required/>
                                 </p>
                                 <p class="text">
                                     <input name="dop"  type="date" class="validate[required,custom[date]] feedback-input" placeholder="Date of Problem" id="comment"   value="<?=$dop;?>" required/>
                                 </p>
                                 <p class="text">
                                     <textarea name="address" class="validate[required,length[6,500]] feedback-input" id="comment" placeholder="Address" required></textarea>
                                 </p>
                                 <p class="text">
                                      <textarea name="complaint" class="validate[required,length[6,500]] feedback-input" id="comment" placeholder="Complaint" required></textarea>
                                 </p>
       
	                             <input type="text" name="refid" value="<?=$refid;?>" style="display:none;" >
                                 <input type="text" name="dov" value="<?=$dov;?>"  style="display:none;" >
                                 <input type="text" name="dov1" value="<?=$dov1;?>" style="display:none;" >
		                         
								 <p class="name">
				                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				                     <b style="font-size:15px;"> <input type="checkbox" name="checkbox" value="check" style=" width: 20px;  height: 20px;"/> 
				                          &nbsp; &nbsp;&nbsp;&nbsp;<a href="TERMS.html" target="_blank">I AGREE TO THE TERMS AND CONDITIONS </a> 
					                 </b> 
								  </p><br>
                                 <div class="submit">
                                      <input type="submit" value="SUBMIT" name="ok" id="button-blue" onClick="if(!this.form.checkbox.checked){alert('You must agree to the terms first.');return false}"/>
                                      <div class="ease"></div>
                                 </div><br>
                                 <div class="submit">
                                     <input type="reset" value="RESET" id="button-blue"/>
                                     <div class="ease"></div>
                                  </div>
      
                             </form>
                         </div>
                      </div> 
                     
					 <!--FOOTER -->
		             
					 <font face ="Times New Roman">
		                 <div style="  right: 0; bottom: 0; left: 0; padding: 1rem;  text-align: center; color:#7822a5; font-size:20px;">
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
			 header('Location: updatedetails.php');
	    }//query else
	}//isset
	else
	{

		 $_SESSION['error2']="fill";
		 header('Location: updatedetails.php');
	}//else isset
}
else
	{
		header('Location: adminlogin.php');
	}

?>