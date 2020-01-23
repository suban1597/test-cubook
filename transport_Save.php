<html>
<head>
<title>Transport_Save</title>
</head>
<body>
<?php
$objConnect = mssql_connect("localhost","sa","Adminchul@book1") or die("Error Connect to Database");
$objDB = mssql_select_db("Line_Project");
$strSQL = "INSERT INTO transport ";
$strSQL .="(Phone,Order,Status,Date,Time) ";
$strSQL .="VALUES ";
$strSQL .="('".$_POST["txtPhone"]."','".$_POST["txtOrder"]."','".$_POST["txtStatus"]."' ";
$strSQL .=",'".$_POST["txtDate"]."','".$_POST["txtTime"]."') ";
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