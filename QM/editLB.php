<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form method="POST" name="form" action="<? $PHP_SELF; ?>" enctype="multipart/form-data">
<table width="44%">
	<tr>
      <td width="23%">LB</td>
	  <td width="2%">:</td>
	  <td width="75%"><input type="text" name="lb" id="userfile" value="<? echo $lb; ?>"></td>
	</tr>
	
	<tr>
      <td width="23%">&nbsp;</td>
	  <td width="2%"></td>
	  <td width="75%"><input type="submit" value="Save" name="save"/></td>
	</tr>
</table>
</form>


<?
if ($save != "" && $lb != "") {
include "koneksi_hrms.php";
$sql = mssql_query("update tb_LB set lb = '$lb' , nik ='$nik', unit='$unit' where nu ='$nu'");
?>
<script type="text/javascript">
	  window.close();
	  window.location="userLB.php";
</script>";
<? 
}
elseif ($lb == "" ) {
echo "<script type='text/javascript'>
	  window.alert('Field ada yang kosong');
	  </script>";
}
?>

</body>
</html>
