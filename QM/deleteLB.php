<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?
include "koneksi_hrms.php";
$sql =mssql_query("delete from tb_LB where nu = '$nu'");
?>
<script type="text/javascript">
	window.location="page.php?index=userLB"
	</script>

</body>
</html>
