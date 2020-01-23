<html>
<head>
<title>ThaiCreate.Com PHP & MySQL Tutorial</title>
</head>
<body>
<?php
$objConnect = mssql_connect("localhost","sa","Adminchul@book1") or die("Error Connect to Database");
$objDB = mssql_select_db("Attend");
$strSQL = "INSERT INTO customer ";
$strSQL .="(CustomerID,Name,Email,CountryCode,Budget,Used) ";
$strSQL .="VALUES ";
$strSQL .="('1','2','3' ";
$strSQL .=",'4','5','6') ";
$objQuery = sql_query($strSQL);
if($objQuery)
{
	echo "Save Done.";
}
else
{
	echo "Error Save [".$strSQL."]";
}
sqlsrv_close($objConnect);
?>
</body>
</html>