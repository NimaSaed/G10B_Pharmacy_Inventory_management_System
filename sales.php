<?php 
ob_start();
require_once("connect_db.php"); ?>

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
       <table width="60%" border="0" cellpadding="10">
            <tr>
              <td height="20" bgcolor="#666666" style="border-top-left-radius:10px; border-top-right-radius:10px"><font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#FFF; font-weight:bold">Daily Sales</font></td>
              </tr>
            <tr>
              <td height="100" align="center" valign="top" bgcolor="#CCCCCC" style="border-bottom-left-radius:10px">
  <?php
	$sql = "select * from stock where sales='dailysales'";
	$result = mysql_query($sql) or die(mysql_error());
	
while($row = mysql_fetch_array($result))
  {
	  $stockid = $row['stock_id'];
	  $dname = $row['drug_name'];
	  $status =  $row['status'];
	  $cost =  $row['cost'];
	  
  echo "
  <table width=\"150\" border=\"0\" align=\"left\">
      <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">$stockid</td>
        </tr>
      <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">$dname</td>
        </tr>
	  <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">RM$cost</td>
        </tr>
      <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">$status</td>
        </tr>
      
    </table> ";
  }
?>
               <table width="230" border="0" align="center">
                  <tr>
                    
                    </tr>
                  </table>
                  <table width="230" border="0" align="center">
                    <tr>
                        
                    </tr>
                  </table>
                  <table width="230" border="0" align="center">
                    <tr>
                      
                    </tr>
                  </table>
                <table width="230" border="0" align="center">
                  <tr>
                    
                    </tr>
                </table>
              </td>
              </tr>
          </table>
 <table width="60%" border="0" align="center" cellpadding="10">
            <tr>
              <td height="20" align="left" valign="middle" bgcolor="#666666" style="border-top-left-radius:10px; border-top-right-radius:10px"><font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#FFF; font-weight:bold">Monthly Sales</font></td>
              </tr>
            <tr>
              <td height="100" align="center" valign="top" bgcolor="#CCCCCC" style="border-bottom-left-radius:10px; border-bottom-right-radius:10px">
 <?php
	$sql = "select * from stock where sales='monthlysales'";
	$result = mysql_query($sql) or die(mysql_error());
	
while($row = mysql_fetch_array($result))
  {
	  $stockid = $row['stock_id'];
	  $dname = $row['drug_name'];
	  $status =  $row['status'];
	  $cost =  $row['cost'];
	  
	  
  echo "
   <table width=\"150\" border=\"0\" align=\"left\">
      <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">$stockid</td>
        </tr>
      <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">$dname</td>
        </tr>
	  <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">RM$cost</td>
        </tr>
      <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">$status</td>
        </tr>
      
    </table> ";
  }
?><table width="230" border="0" align="center">
                  <tr>
                    
                    </tr>
                  </table>
                  <table width="230" border="0" align="center">
                    <tr>
                        
                    </tr>
                  </table>
                  <table width="230" border="0" align="center">
                    <tr>
                      
                    </tr>
                  </table>
                <table width="230" border="0" align="center">
                  <tr>
                    
                    </tr>
                </table>
              </td>
              </tr>
          </table>
          
<table width="60%" border="0" align="center" cellpadding="10">
            <tr>
              <td height="20" align="left" valign="middle" bgcolor="#666666" style="border-top-left-radius:10px; border-top-right-radius:10px"><font style="font-family:Verdana, Geneva, sans-serif; font-size:12px; color:#FFF; font-weight:bold">Frequently Sold</font></td>
              </tr>
            <tr>
              <td height="100" align="center" valign="top" bgcolor="#CCCCCC" style="border-bottom-left-radius:10px; border-bottom-right-radius:10px">
                <table width="230" border="0" align="center">
                  <tr>
                    
                    </tr>
                  </table>
                  <table width="230" border="0" align="center">
                    <tr>
                        
                    </tr>
                  </table>
                  <table width="230" border="0" align="center">
                    <tr>
                      
                    </tr>
                  </table>
 <?php
	$sql = "select * from stock where frequentlysold='yes'";
	$result = mysql_query($sql) or die(mysql_error());
	
while($row = mysql_fetch_array($result))
  {
	  $stockid = $row['stock_id'];
	  $dname = $row['drug_name'];
	  $status =  $row['status'];
	  $cost =  $row['cost'];
	  
	  
  echo "
  <table width=\"150\" border=\"0\" align=\"left\">
      <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">$stockid</td>
        </tr>
      <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">$dname</td>
        </tr>
	  <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">RM$cost</td>
        </tr>
      <tr>
        <td height=\"20\" align=\"center\" valign=\"middle\" bgcolor=\"#FFFFFF\">$status</td>
        </tr>
      
    </table> ";
  }
?>
  

</html>
