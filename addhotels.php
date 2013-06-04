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
<?php
include("include/database.php");
	if(isset($_REQUEST['c_add']))
	{
	
	$c_t1=$_POST['c_fname'];
	$c_t2=$_POST['c_lname'];
	$c_t3=$_POST['c_address'];
	$c_t4=$_POST['c_city'];
	$c_t6=$_POST['c_pin'];
	$c_t7=$_POST['c_ph'];
	$c_t8=$_POST['c_mo'];
	$c_t9=$_POST['c_email'];
	$c_t10=$_POST['c_site'];
		
	$c_qry="insert into clients(c_first,c_last,c_add,c_city,c_pin,c_ph,c_mo,c_email,c_site) values('".$c_t1."','".$c_t2."','".$c_t3."','".$c_t4."','".$c_t6."','".$c_t7."','".$c_t8."','".$c_t9."','".$c_t10."')";
	$c_res=mysql_query($c_qry);
	if($c_res)
	{
		header("location:checklist.php");
	}
	else
	{
		echo "error";
	}
	}
	if(isset($_REQUEST['can']))
	{
		header("location:clients.php");
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anmol Water Tank Cleaners</title>
<link rel="stylesheet" href="styles.css" type="text/css" />
			
            
<script type="text/javascript" src="jquery.date_input.js"></script>
<link rel="stylesheet" href="date_input.css" type="text/css">
<script type="text/javascript">$(function() {
  $("#datefield").date_input();
   $("#due").date_input();
});</script>
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
		<div class="quotation"><center>Add New Hotels</center></div>
        <div>
        <form action="" method="post">
  		      <table class="q_clients" align="center">
                <tr><td class="l_form">Hotel Name:</td><td><input class="q_in" type="text" name="c_fname" /></td></tr>
                <tr><td class="l_form">Date:</td><td><input class="q_in" id="datefield" type="text" name="c_state" value="<?php  echo date("d-m-Y"); ?>"/></td></tr>
 	            <tr><td class="l_form">Address:</td><td><textarea class="q_add" name="c_address"></textarea></td></tr>
                <tr><td class="l_form">Mobile No:</td><td><input class="q_in" type="text" name="c_mo"/></td></tr>
                </table>
        <div class="addclients_b">
         <input name="c_add" class="formbutton" value=" Add " type="submit" />
         <input name="can" class="formbutton" value="Cancel" type="submit" />
        </div>
        
        </form>
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
