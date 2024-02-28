<?
session_name("AUTHEN");
session_start();
//echo"$SES_USERNAME";
if ($SES_hendi<>"")
{
include "konek_qm.php";
date_default_timezone_set('Asia/Jakarta');

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<script language="javascript" src="../js/jam.js"></script>
<script language="javascript" src="../js/menit.js"></script>
<script type="text/javascript" src="../js/datepickercontrol.js"></script>

<SCRIPT TYPE="text/javascript">

<!--
function popup(mylink, windowname)
{

newwindow=window.open(mylink,name,'width=1000,height=700,toolbar=0,menubar=0,location=0,scrollbars=yes');  
   if (window.focus) {newwindow.focus()}
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
<link rel="SHORTCUT ICON" href="../images/m.png">
<link type="text/css" rel="stylesheet" href="../css/datepickercontrol.css">

<style type="text/css">
<!--
.style3 {font-size: 18px}
-->
</style>
</head>
<body>

<form action="<? $PHP_SELF ?>" method="post" name="satu" enctype="multipart/form-data" onKeyPress="return noenter()">
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
  	<tr class="content">
      <td>Report By </td>
      <td><select name="report_by" id="report_by" class="box" onchange="satu.submit()">
        <option value="0">Select By
        <?php
		$katahh=array('All','Info','Request','Dispute','Complain','Campaign');
		$katah=array('','11','12','13','14','15');
		$counthh = count($katahh);
							  
			for($i=0;$i<$counthh;$i++)
			{
				if($katah[$i] == $report_by)
				{
					echo "<option value='$katah[$i]' selected>$katahh[$i]";
				}
				else
				{
					echo "<option value='$katah[$i]'>$katahh[$i]";
				}
			}
			?>
        </option>
      </select></td>
	   <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
  
    <tr>
		<td width="13%" class="t">Date</td>
		<td width="47%" class="t"><input name="date_eva1" type="text" id="datepicker" value="<? echo "$date_eva1"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" />
    Until
      <input name="date_eva2" type="text" id="datepicker1" value="<? echo "$date_eva2"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" /></td>
		<td width="7%" class="t">&nbsp;</td>
	  <td width="33%" class="t">&nbsp;</td>
	</tr>
	<tr class="content">
     
      <td></td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td><input name="searchButton" type="submit" id="searchButton" value="Search"  class="btn btn-primary"/></td>
		  <td><?
		  $tgl1 = date('Ymd',strtotime($date_eva1));
		  $tgl2 = date('Ymd',strtotime($date_eva2));
		  
		  echo "<a class='btn btn-warning' href='hotIssue/hotIssueIBSim.php?cc_mentari=$cc_mentari&cc_im3=$cc_im3&cc_pp=$cc_pp&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&tgl1=$tgl1&tgl2=$tgl2&select_region=$select_region&pilih_bulan=$pilih_bulan&pilih_tahun=$pilih_tahun	'>export to excel</a>";
		  echo "<a class='btn btn-warning' href='hotIssue/hotIssueIBword.php?cc_mentari=$cc_mentari&cc_im3=$cc_im3&cc_pp=$cc_pp&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&tgl1=$tgl1&tgl2=$tgl2&select_region=$select_region&pilih_bulan=$pilih_bulan&pilih_tahun=$pilih_tahun	'>export to word</a>";
		  echo "<a class='btn btn-warning' href='hotIssue/hotIssueIBppt.php?cc_mentari=$cc_mentari&cc_im3=$cc_im3&cc_pp=$cc_pp&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&tgl1=$tgl1&tgl2=$tgl2&select_region=$select_region&pilih_bulan=$pilih_bulan&pilih_tahun=$pilih_tahun	'>export to ppt</a>";
		  ?></td>
		  </td>
		   <td>&nbsp;</td>
		    <td width="0%">&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>


<table id="dyntable2" class="table table-bordered table-infinite">
			<thead>
			  <tr>
				<th width="5%" align="center" class="a7_biru">Nu.</th>
				<th width="28%" align="center" class="a7_biru">Activity Code</th>
				<th width="51%" align="center" class="a7_biru">Description</th>
				<th width="16%" align="center" class="a7_biru">Total</th>
			  </tr></thead><tbody>
			<?
			include "konek_qm.php";
			
			$sql_a		= "select top 10 product_type,product_detail,count(product_type) as jumlah
			from table_qm a
			inner join table_qm_detail b on b.id_qm=a.id_qm 
			where convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and product_type like '$report_by%'										
			group by product_detail,product_type
			order by jumlah desc";
			//echo $sql_a;
			$qry_a		= mssql_query($sql_a);

				$no	= 1;
				while ($data_a	= mssql_fetch_array($qry_a))
				  		{
				  		$product_type = $data_a['product_type']; 
						$product_detail  = $data_a['product_detail'];
						$jumlah  = $data_a['jumlah'];
							 
							 ?>
							  <tr>
								<td><? echo $no; ?></td>
								<td align="center"><? echo "$product_type"; ?></td>
								<td><? echo "$product_detail"; ?></td>
								<td align="center"><? echo $jumlah;	?></td>
							  </tr>
							<?
							$no++;				
					
						
						
						}//end for
						?>
	</tbody></table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p></p>

</body>
</html>
<? }
elseif ($SES_hendi=="")
{
	
?>
	<script type="text/javascript">
	window.alert("Anda belum login")
	window.location="login.php"
	</script>
<?
}
?>
