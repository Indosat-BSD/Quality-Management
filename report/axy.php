<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<script language="javascript" src="../js/jam.js"></script>
<script language="javascript" src="../js/menit.js"></script>
<script type="text/javascript" src="../js/datepickercontrol.js"></script>
<link rel="SHORTCUT ICON" href="../images/m.png">
<link type="text/css" rel="stylesheet" href="../css/datepickercontrol.css">
</head>

<body>
<form>
<table>
 <tr class="content">
      <td>Date</td>
      <td>
 <input name="date_eva12" type="text" id="date_eva12" value="<? echo "$date_eva1"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" />       
 Until
      <input name="date_eva2" type="text" id="date_eva24" value="<? echo "$date_eva2"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" /></td></tr>
    <tr class="content">
    </tr>
	<tr>
	<td><input name="a" type="submit" id="searchButton" value="Search" /></td>
	</tr>
	</table>
	</form>
	
	<?
	
	if ($a){
	$tanggal = explode ("/", $date_eva12);
						 $bl= $tanggal[0];
						 $tg = $tanggal[1];
						 $th = $tanggal[2];
						 
						 $join = $th.$bl.$tg;
	echo "jjjjjjjjjj$join";
	}
	?>
</body>
</html>
