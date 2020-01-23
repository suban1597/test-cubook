<html>
<head>
<title>ThaiCreate.Com PHP & SQL Server Tutorial</title>
</head>
<body>
<?php
$objConnect = mssql_connect("localhost","sa","Adminchul@book1") or die("Error Connect to Database");
$objDB = mssql_select_db("Attend");
$strSQL = "INSERT INTO customer ";
$strSQL .="(CustomerID,Name,Email,CountryCode,Budget,Used) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["$new_date"]."','".$_POST["$new_date"]."','".$_POST["$new_date"]."' ";
$strSQL .=",'".$_POST["$new_time"]."','".$_POST["$new_time"]."','".$_POST["$new_time"]."') ";
$objQuery = mssql_query($strSQL);
if($objQuery)
{
	echo "Save Done.";
}
else
{
	echo "Error Save [".$strSQL."]";
}
mssql_close($objConnect);
?>
</body>
</html>