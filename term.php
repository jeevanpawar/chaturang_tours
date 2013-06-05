<?php
	
	include("include/database.php");
	
	$e_qry_f="select * from terms";
	$e_res_f=mysql_query($e_qry_f);
		
?>
<?php
	if(isset($_REQUEST['e_id1']))
	{
		$e_d=$_REQUEST['e_id1'];
		$e_del="delete from terms where t_id=".$e_d;
		$e_dres=mysql_query($e_del);
		if($e_dres)
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
		<div class="quotation"><center>Terms and Conditions</center></div>
        <div>
        <table class="emp_tab">
        <tr class="emp_header">
        <td width="50">Term No.</td>
        <td width="250">Terms & Conditions</td>
        <td width="70">Action</td>        
        </tr>
        <table class="emp_tab">
        <?php
		while($e_row=mysql_fetch_array($e_res_f))
		{
        echo "<tr class='emp_header'>";
        echo "<td width='50'>";
		echo $e_row[0];
		echo "</td>";
        echo "<td width='250'>";
		echo $e_row[1];
		echo "</td>";
        echo "<td width='70'>";
		echo "<a href='?e_id1=$e_row[0]'><img src='images/delete.png' height='20' width='20' /></a>&nbsp;<a href='updateterm.php?e_id2=$e_row[0]'><img src='images/update.png' height='20' width='20' /></a>";
		echo "</td>";
		echo "</tr>";
		}
		?>
        </table>
        </table>
        
        </div>
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
