<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>


<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?
$a="asu";
echo"<SCRIPT TYPE='text/javascript'>
function confirmDelete()
{
    return confirm('a:$a   b:$a   Are you sure you wish to delete this entry?');
}
</script>";
?>
<input type="submit" name="Submit" value="Submit" onclick="return confirmDelete();">
</body>
</html>

