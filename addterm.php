<?php

	include("include/database.php");
	
	if(isset($_REQUEST['e_can']))
	{
		header("location:term.php");
	}
	
	if(isset($_REQUEST['e_up']))
	{	

		$t_no=$_POST['t_no'];
		$t_term=$_POST['term'];
		
		$qry_up="insert into terms(t_id,t_term) values('".$t_no."','".$t_term."')";
	
		$res_up=mysql_query($qry_up);
		if($res_up)
		{
			header("location:term.php");
		}
		else
		{
			echo "error";
		}
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Anmol Water Tank Cleaners</title>
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
		<div class="quotation"><center>Add Terms & Conditions</center></div>
        <div>
        <form action="" method="post">
        <table class="addemp_tab">
        <tr>
        <td class="l_form">Title:</td>
        <td><input type="text" class="q_in" name="t_no"></td>
        </tr>
        <tr>
        <td class="l_form">Terms & Conditions:</td>
        <td><textarea class="q_term" name="term"></textarea></td>
        </tr>
        
        </div>
        </table>
        <div class="addemp_b">
         <input name="e_up" class="formbutton" value=" ADD " type="submit" />
         <input name="e_can" class="formbutton" value="Cancel" type="submit" />
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
