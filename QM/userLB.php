<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<SCRIPT TYPE='text/javascript'>
function confirmDelete2()
{
    return confirm('Are you sure?');
}

<!--
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=300,height=300,scrollbars=yes');
return false;
}
function popupBig(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=600,height=550,scrollbars=yes');
return false;
}

//-->
</SCRIPT>
</head>

<body>
<form method="POST" name="form" action="<? $PHP_SELF; ?>" enctype="multipart/form-data">
<table width="44%">
	<tr>
      <td width="23%">Nama LB </td>
	  <td width="2%">:</td>
	  <td width="75%"><input type="text" name="lb" value=<? echo $lb;?> >
	   <? if ($edit == "edit") { echo "<input type='submit' name='edit'  value='Save' class='btn btn-primary'>"; }
	   	  else { echo "<input type='submit' name='input'  value='Save' class='btn btn-primary'>"; } ?></td>
	</tr>
	
</table>

<?
include "koneksi_hrms.php";
if ($lb != "" && $input != "") 
$input = mssql_query("insert into tb_lb (lb) values ('$lb')");
if ($lb != "" && $edit != "")
$edit = mssql_query("update tb_lb set lb ='$lb' where nu = '$nu'");

?>
<p>&nbsp;</p>
<table width="25%" border="1" class="table table-bordered table-infinite">
<thead>
  <tr bgcolor="#CCCCCC">
    <th width="4%" align="center">No.</th>
    <th width="10%" align="center">LB</th>
    <th width="19%" align="center">Action</th>
  </tr>
  </thead>
  <? 
	include "koneksi_hrms.php";
	
	$sql = mssql_query("select * from tb_LB order by nu asc");

	$no=1;
	while ($qry = mssql_fetch_array($sql))
	{
	?>
  <tr>
    <td width="4%"><? echo $no; ?></td>
    <td width="10%"><? echo $qry['lb']; ?></td>
    <td width="19%"><a href="?index=userLB&edit=edit&nu=<? echo $qry['nu']; ?>&lb=<? echo $qry['lb']; ?>">Edit</a> | <a href="deleteLB.php?nu=<? echo $qry['nu']; ?>" onclick="return confirmDelete2();">Delete</a></td>
  </tr>
  <? $no++; } ?>
</table>
</form>
</body>
</html>
