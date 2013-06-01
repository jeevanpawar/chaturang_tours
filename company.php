<?php
session_start();

include("include/database.php");

$a=$_SESSION['user'];


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Chaturang</title>

<link href="login-box.css" rel="stylesheet" type="text/css" />
</head>

<body>


<div style="padding: 130px 0 0 0;" align="center">
<form action="home.php" method="post">

<div id="login-box">

<H2 align="left"><span class="main">CHATURANG</span><br /><span class="tour">TOURS PVT LTD</span></H2>
<div class="welcome">
<?php
echo "Welcome:$a";
?>
</div>
<br />
<br />

<div id="login-box-field" style="margin-top:20px;"><label id="select">Select Company</label></div>
<div id="login-box-field-select">
<select name="t1">
<option>Chaturang Tours</option>
<option>Chaturang Tours Pvt Ltd</option>
<option>Chaturang Holidays</option>
</select>
</div>
<br />
<span class="login-box-options"></span>
<br />
<br />
<div  ><input class="logcom" name="go" type="submit" value="Go" /></div>



</form>


</div>

</div>













</body>
</html>
