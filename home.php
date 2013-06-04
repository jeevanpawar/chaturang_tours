<?php
session_start(0);
$a=$_SESSION['user'];
error_reporting(0);

if(isset($_REQUEST['id']))
{
	session_destroy();
	header("location:index.php");
}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Chaturang</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/slider.js"></script>
<script type="text/javascript" src="js/superfish.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</head>

<body>
<div id="container">
	
    <div id="nav">
    	<ul class="sf-menu dropdown">
        	
        	<li class="selected"><a href="index.php">Home</a></li>
            <li ><a href="site.php">Booking Form</a>
            
            </li>
            
            <li><a class="has_submenu" href="clients.php">Hotels</a>
            	<ul>
                	<li><a href="addhotels.php">Add New Hotels</a></li>
                </ul>
            
            
            <li><a class="has_submenu"  href="term.php">Terms & Conditions</a>
            <ul>
              	<li><a href="addterm.php">Add Terms</a></li>
            </ul>
           </li>
           <li><a href="?id">LogOut</a>
                </li>
        </ul>
    </div>
    
    <div id="sub-header">
		<div class="quo">
    	<br />
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="150">Date</td>
        <td width="250">Employee Name</td>
        <td width="250">Client Name</td>
        <td>Client Address</td>
        <td width="150">Actual Date</td>
        </tr>
        </table>
        <table class="emp_tab">
    </div>
    </div>
        
    
    	<div class="clear"></div>
    </div>
</div>
 <div id="footer">
     <div class="clear"></div> 
    </div>
    </div>
</body>
</html>
