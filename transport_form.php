<html>
<head>
<title>Transport_Form</title>
</head>
<body>
<form action="Transport_Save.php" name="frmAdd" method="post">
<table width="600" border="1">
  <tr>
    <th width="91"> <div align="center">Phone</div></th>
    <th width="160"> <div align="center">Order</div></th>
    <th width="198"> <div align="center">Status</div></th>
    <th width="97"> <div align="center">Date</div></th>
    <th width="70"> <div align="center">Time</div></th>
  </tr>
  <tr>
    <td><div align="center"><input type="text" name="txtPhone" size="20"></div></td>
    <td><input type="text" name="txtOrder" size="20"></td>
    <td><input type="text" name="txtStatus" size="20"></td>
    <td><div align="center"><input type="text" name="txtDate" size="20"></div></td>
    <td align="right"><input type="text" name="txtTime" size="20"></td>
  </tr>
  </table>
  <input type="submit" name="submit" value="submit">
  </form>
</body>
</html>