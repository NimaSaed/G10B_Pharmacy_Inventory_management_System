<?php
mysql_connect("localhost","root","password") or die("failed to connect");
mysql_select_db("pharmacy") or die ("could not find db");

$output = '';

//collect
if(isset($_POST['search'])) {
	$searchq = $_POST['search'];
//filtering
	$searchq = preg_replace("#[^0-9a-z]#i","",$searchq);

	$query = mysql_query("SELECT * FROM stock WHERE drug_name LIKE '%$searchq%' OR stock_id LIKE '%$searchq%'") or die("could not search");
	$count = mysql_num_rows($query);
	if($count == 0){
		$output = 'There was no search results!';
}       else{
		while($row = mysql_fetch_array($query)) {
			$dname = $row['drug_name'];
			$id = $row['stock_id'];
			
			$output .= '<div> '.$dname.' '.$id.' </div>';
	}
}

?>

<html>
<head>
<title>Search</title>
</head>
<body>

<form action="search.php" method="post">
	<input type="text" name="search" placeholder="Search for Medicines.." />

	<input type="submit" value="Go" />

</form>
<?php print("$output");?>
</body>
</html>