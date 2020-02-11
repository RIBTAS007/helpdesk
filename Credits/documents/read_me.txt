
********** PROJECT TITLE **********
	
   >> HELPDESK WEBSITE CENTRE



********** GETTING STARTED **********

   >> These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.
   >> See deployment for notes on how to deploy the project on a live system.



********** CASE STUDY **********

   >> A Help Desk for all problems and queries related to laptops including hardware and software solutions and queries regarding warranty.
   >> The customer if has any complaint registers the complaint on our site. 
   >> These complaints are stored in the database of the system. 
   >> The admin log and record the complaints of the customers through our complaint page by seeing to the new notifications that contains the complaints and problems of the customers. 
   >> And then complaints are diverted to experts who work on them accordingly and notify the users by sending an email to them. 
   >> Warranty users get free software help while non-warranty users are charged for any service they avail. 
   >> Hardware problems are charged on their severity.



********** PREREQUISITES **********

   >> What are the softwares you need to install to run this site.		
   >> Please ensure that you have Google Chrome web browser as well as internet connection.
   >> Install Xampp on your system.
   >> " https://www.apachefriends.org/download.html "
   >> Visit the above link to download required Xampp for your system.
   >> Import the database helpdesk.sql in phpMyadmin.



********** CUSTOMER PURPOSE **********

   >> Open Xampp Control Panel that you installed before and press start to start Apache & MySQL.
   >> Now open Google Chrome and browse for " localhost/helpdesk/index.html ".
   >> For registration of a complaint...
	1. Go to " Complaints " and a form will be opened.
	2. Give your required details according to the space provided in the form.
	3. After filling up press " SUBMIT ".
	4. In case you made any faults you can reset your details by pressing " RESET ".
	5. Finally you will get a receipt of your complaint by the site which you can print.
	6. A confirmation e-mail will be sent on your given e-mail id.
   >> You can also give your feedback after your work is done.
   >> For further details and enquiry you can go to our " About Us " page, " FAQ " page and " Contact Us " page.



********** ADMIN PURPOSE **********

   >> Open Google Chrome and browse for two links :
	1. localhost/xampp/ ( It access the database of your website ).
	2. localhost/helpdesk/index.html
   >> Admin has various functions...
	ADMIN LOGIN :
        1. Select " Admin " from the menu bar of the homepage.
	2. Select " Please Click Here To Login ".
	3. Admin Name : admin   &   Password : 123
	4. After you login you will enter to admin dashboard & will have following settings :
	    >> FORM SETTINGS : Select " FormSettings " from the menu bar 
	       a. REGISTER COMPLAINT : Select " RegComp " from the dropdown and fill up the details required and selcet " SUBMIT ". Your complaint will be registered.
               b. UPDATE COMPLAINT DETAILS : Select " UpdateComp " and give your Track Reference Id to update your complaints.
	       c. TRACK REFERENCE ID : Select " TrackRefId " to track your complaint details.

	    >> ADMIN SETTINGS : Select " AdminSettings " from the menu bar.
	       a. ADD ADMIN : Select " AddAdmin " from the dropdown and select " Please click here to add admin ". Enter new admin name and password. 
	       b. REMOVE ADMIN : Select " RemoveAdmin " from the dropdown and select " please click here to remove admin " and enter the name of the admin and password to be removed.
	       c. CHANGE PASSWORD : Select " ChangePassword " from the dropdown and select " click here to change password ". Enetr the required details to update your password.

	    >> MORE OPTIONS : Select "MoreOptions " from the menu bar.
	       a. SEE FEEDBACK : Select " SeeFeedback " from the dropdown and enter the track reference id to see his feedback. 
               b. WORK STATUS : Select " WorkStatus " from the dropdown and enter the track reference id to see update his work status from 0->1 and vice-versa.
       ADMIN LOGOUT :
       To logout from the admin section select " Logout" from the menu bar.


							******************************************************
