	<?php 
ini_set('error_reporting', 0);
ini_set('display_errors', 0);
//	ini_set('session.save_path', 'tmp');
	session_start();
	require_once("functions.php");
	

		if ($_SESSION['username'] != null){
		
			
			echo 'Welcome ';
		echo  $_SESSION['username'];
		echo '<br>';
				echo "<a href = 'myAccount.php'>Update my Account</a>" ;
		echo '<br>';
		echo "<a href = 'logout.php'>Logout</a>" ;
		}
		echo '<br>';
		if ($_SESSION['username'] == "aamir_i") {
			
		echo "<a href = 'admin.php'>Admin Page</a>" ;
		}
//echo  $_SESSION['username'];
//echo "<br>";
else{
}
		
	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title> Module Assessment | My Account</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2062 Clothing 
http://www.tooplate.com/view/2062-clothing
-->
<link href="main_style.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css" />

<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/ddsmoothmenu.js">

/***********************************************
* Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* This notice MUST stay intact for legal use
* Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
***********************************************/

</script>

<script type="text/javascript">

ddsmoothmenu.init({
	mainmenuid: "tooplate_menu", //menu DIV id
	orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
	classname: 'ddsmoothmenu', //class added to menu's outer DIV
	//customtheme: ["#1c5a80", "#18374a"],
	contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
})

</script>

<link rel="stylesheet" type="text/css" media="all" href="css/jquery.dualSlider.0.2.css" />

<script src="js/jquery-1.3.2.min.js" type="text/javascript"></script>
<script src="js/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="js/jquery.timers-1.2.js" type="text/javascript"></script>
<script src="js/jquery.dualSlider.0.3.min.js" type="text/javascript"></script>


<script type="text/javascript">
    
    $(document).ready(function() {
        
        $("#carousel").dualSlider({
            auto:false,
            autoDelay: 6000,
            easingCarousel: "swing",
            easingDetails: "easeOutBack",
            durationCarousel: 1000,
            durationDetails: 600
        });
        
    });
	
    
    
</script>

<link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen" /> 
<script type="text/JavaScript" src="js/slimbox2.js"></script> 

</head>
<body>


        
        <div class="col col_1">
        	<div id="contact_form">
                <h2>Student Register</h2>
                <form method="post" name="register" action="process2.php" onsubmit="return validateForm()">
				
                    <label for="moduleCode">Module Code:</label> <input type="varchar" id="mcode" name="moduleCode" required class="input_field" />
                    <label for="studentID">Student ID:</label> <input type="int" id="sID" name="studentID" required class="input_field" />
                    <label for="firstName">First Name:</label> <input type="varchar" id="fName" name="firstName" required class="input_field" />
					<label for="lastName">Last Name:</label> <input type="varchar" id="lName" name="lastName" required class="input_field" />
					<label for="overallMark">Overall Mark:</label> <input type="int" id="oMark" name="overallMark" required class="input_field" />
					
                    
					<input type="submit" name="Submit" value="Submit" class="submit_btn" />
                </form>
            </div>
        </div>
    	
		<div class="clear"></div>
            
        <div class="clear"></div>
    </div> <!-- END of main -->
    
</div> <!-- END of wrapper -->

<div id="tooplate_bottom_wrapper">
	    </div> <!-- END of bottom -->
</div> <!-- END of bottom wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">
    	<b> Copyright © 2017  
        
        - Module Assessment</b>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->

</body>
</html>