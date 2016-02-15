<?php 
ob_start();
include_once("connect_db.php"); ?>

<!DOCTYPE html>
<html>
<head>
<title><?php echo $user;?> - Pharmaceutical Inventory System</title>
<link rel="stylesheet" type="text/css" href="style/mystyle.css">
<link rel="stylesheet" href="style/style.css" type="text/css" media="screen" /> 
<link rel="stylesheet" type="text/css" href="style/dashboard_styles.css"  media="screen" />
<script src="js/function.js" type="text/javascript"></script>
<style>
#left_column{
height: 470px;
}
</style>
</head>
<body>
<div id="content">
<div id="header">
<h1><a href="#"><img src="images/hd_logo.jpg"></a> Pharmaceutical Inventory System</h1></div>
<div id="left_column">
<div id="button">
<ul>
			<li><a href="pharmacist.php">Dashboard</a></li>
			<li><a href="sales.php">Sales</a></li>
			<li><a href="stock_pharmacist.php">Stock</a></li>
			<li><a href="logout.php">Logout</a></li>
</ul>	
   </div>
</div>

<td height="41" bgcolor="#CCCCCC"><form name="search" method="post" action="search2.php">
<input type="text"  maxlength="40" name="find" style="border-bottom-left-radius:10; border-bottom-right-radius:10; border-top-left-radius:10; border-top-right-radius:10" />
<input name="search" type="submit" id="search" style="background-color:#09F; font-family:Verdana, Geneva, sans-serif; font-weight:bold; border-bottom-left-radius:10px; border-bottom-right-radius:10px; border-top-left-radius:10px; border-bottom-right-radius:10px" value="Go" />
</form>
</td>

<table align= "center">
  <tr>
    <td height="100" colspan="3" align="center" valign="top"><table width="100%" height="541" border="0">
      <tr>
      
        <td width="50%" align="left" valign="top"><br />
          <br />
          <table width="50%" border="0" align="center">
            <tr>
              <td height="30" align="left" valign="middle" bgcolor="#0066FF" style="border-top-left-radius:10px; border-top-right-radius:10px"><font style="font-family:Verdana, Geneva, sans-serif; font-size:14px; font-weight:bold; color:#FFFFFF">Search Result</font></td>
            </tr>
            <tr>
              <td height="214" align="left" valign="top" bgcolor="#CCCCCC" style="border-bottom-left-radius:10px; border-bottom-right-radius:10px"><br />
                <form id="form1" name="form1" method="post" action="">
                <table width="600" border="0" align="center" cellpadding="5" cellspacing="0">
  <tr>
    <td width="280" height="30" align="center" valign="middle" bgcolor="#333333" style="border-top-left-radius:10px; font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF">Medicine Sold</td>
    <td width="280" height="30" align="center" valign="middle" bgcolor="#333333" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF">Medicine ID</td>
    <td width="280" height="30" align="center" valign="middle" bgcolor="#333333" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF">Medicine Name</td>    
    <td width="280" height="30" align="center" valign="middle" bgcolor="#333333" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF">Description</td>
    <td width="280" height="30" align="center" valign="middle" bgcolor="#333333" style="font-family:Verdana, Geneva, sans-serif; font-size:12px; font-weight:bold; color:#FFFFFF">Quantity</td>
</tr>
</table>
                       
<?php
	//declaring my input text box
	$input = $_POST['find'];
	if($input=="")
	{
		echo"<p><h3>You forgot to enter your search term!</h3>";
		exit;
	}
		

	$sql2 = "select * from stock where stock_id LIKE '%$input%' OR drug_name LIKE '%$input%'";
	$result2 = mysql_query($sql2) or die(mysql_error());
	

while($row = mysql_fetch_array($result2))
  {
	  $stockid = $row['stock_id'];
	  $drugname = $row['drug_name'];
	  $description = $row['description'];
	  $quantity = $row['quantity'];
	  $sold = $row['sold'];
	  
echo "
 
  <table width=\"600\" align=\"center\">
   
<tr>
     <td><input type='sold' style='width:40px;'></td>
     <td><input type='button' class='button' value='Sold' onclick='$sold;' style='width:45px;'></td>

<td width=\"270\" align=\"center\" height=\"30\" style=\"font-family:Verdana, Geneva, sans-serif; 
font-size:12px; font-weight:bold; 
bgcolor=\"#E0E0E0\"><a href=\"search1.php?stockid=$stockid\" class=\"style1\">$stockid</td>
     
<td width=\"270\" align=\"center\" height=\"30\" style=\"font-family:Verdana, Geneva, sans-serif; 
font-size:12px; font-weight:bold; 
bgcolor=\"#E0E0E0\">$drugname</td>

<td width=\"270\" align=\"center\" height=\"30\" style=\"font-family:Verdana, Geneva, sans-serif; 
font-size:12px; font-weight:bold; 
bgcolor=\"#E0E0E0\">$description</td>

<td width=\"270\" align=\"center\" height=\"30\" style=\"font-family:Verdana, Geneva, sans-serif; 
font-size:12px; font-weight:bold; 
bgcolor=\"#E0E0E0\">$quantity</td>


    </table> ";
  }
?>
