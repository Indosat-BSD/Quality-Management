<?
session_name("AUTHEN");
session_start();
//echo"$SES_USERNAME";
if ($SES_hendi<>"")
{

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
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=550,height=700,scrollbars=yes');
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
      <td>&nbsp;</td>
      <td width="90%"><div align="center" class="style3"> </div></td>
    </tr>
    <tr class="content">
      <td>Date</td>
      <td><input name="date_eva1" type="text" id="datepicker" value="<? echo "$date_eva1"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" />
    Until
      <input name="date_eva2" type="text" id="datepicker1" value="<? echo "$date_eva2"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" /></td>
    </tr>

    <tr class="content">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td>&nbsp;</td>
      <td><input name="searchButton" type="submit" id="searchButton" value="Search"  class="btn btn-primary"/>
          <?
		  $tgl1 = date('Ymd',strtotime($date_eva1));
		  $tgl2 = date('Ymd',strtotime($date_eva2));
		  
		  
		  echo "<a class='btn btn-warning' href='report/export_summaryIBOther.php?date_eva1=$tgl1&date_eva2=$tgl2'>export to excel</a>";
		  ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="100%" border="1" align="center" cellspacing="1" id="dyntable" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="1%" class="head0"><div align="center">No</div></th>
      <th width="4%" class="head0"><div align="center">Agent Name</div></th>
      <th width="2%" class="head0"><div align="center">Brand</div></th>
      <th width="2%" class="head0"><div align="center">Tenure</div></th>
      <th width="2%" class="head0"><div align="center">NOE</div></th>
      <th width="2%" class="head0"><div align="center">Observasi</div></th>
      <th width="2%" class="head0"><div align="center">AHT</div></th>
      <th width="2%" class="head0"><div align="center">FE Score</div></th>
	</tr>
	</thead>
    <?
	include "konek_qm.php";
	
	
	//edit hendi
	$itung1="[sp_count]'table_qm','$tgl1','$tgl2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%'";
	//echo $itung1;
	 $queryitung1=mssql_query($itung1);
	 $hasilitung1=mssql_fetch_array($queryitung1);
	 $jum_tot1=$hasilitung1["jum_s"];
	 
	 $itung2="[sp_count]'table_qm_iic','$tgl1','$tgl2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%'";
	 //echo $itung2;
	 $queryitung2=mssql_query($itung2);
	 $hasilitung2=mssql_fetch_array($queryitung2);
	 $jum_tot2=$hasilitung2["jum_s"];
	 
	 $itung3="[sp_count]'table_qm_sli','$tgl1','$tgl2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%'";
	// echo $itung3;
	 $queryitung3=mssql_query($itung3);
	 $hasilitung3=mssql_fetch_array($queryitung3);
	 $jum_tot3=$hasilitung3["jum_s"];
	  
	  $jum_tot = $jum_tot1+$jum_tot2+$jum_tot3;

	if((isset($searchButton) and $jum_tot<>"0") or ($kd_del=="ok"and $jum_tot<>"0"))
					{
					include "konek_qm.php";
		
		$q_user= "
select brand,id_pribadi_user, nama ,nama_unit, tenure, sum(NOE)as NOE, avg(observasi) as observasi,
 sum(jum_hh) as hh, sum(jum_mm) as mm, sum(jum_ss) as ss, fe  from (

	select 'Inbound' as brand,id_pribadi_user, nama, nama_unit, c.tenure,count(a.id_qm) as NOE, avg(tot_score) as observasi, 
sum(hh_handling_time) as jum_hh,sum(mm_handling_time) as jum_mm ,sum(ss_handling_time) as jum_ss,
sum(case when q4 ='no' or q5 ='no' or q6 ='no'or q20 ='no' then 0 else 1 end)as fe
from table_qm a
inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user = b.id_data_pribadi
inner join hrms.dbo.tb_unit d on a.id_unit = d.id_unit
inner join table_qm_detail c on a.id_qm = c.id_qm
where date_saved between '$date_eva1' and '$date_eva2'
group by id_pribadi_user, nama, nama_unit, tenure
	union

	select 'IIC' as brand,id_pribadi_user, nama, nama_unit, c.tenure,count(a.id_qm) as NOE, avg(tot_score) as observasi, 
sum(hh_handling_time) as jum_hh,sum(mm_handling_time) as jum_mm ,sum(ss_handling_time) as jum_ss, 
sum(case when q4 ='no' or q5 ='no' then 0 else 1 end)as fe
from table_qm_iic a
inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user = b.id_data_pribadi
inner join hrms.dbo.tb_unit d on a.id_unit = d.id_unit
inner join table_qm_iic_detail c on a.id_qm = c.id_qm
where date_saved between '$tgl1' and '$tgl2'
group by id_pribadi_user, nama, nama_unit, tenure

	union 

select 'SLI' as brand,id_pribadi_user, nama, nama_unit, c.tenure,count(a.id_qm) as NOE, avg(tot_score) as observasi, 
sum(hh_handling_time) as jum_hh,sum(mm_handling_time) as jum_mm ,sum(ss_handling_time) as jum_ss,

sum(case when q4 ='no' or q5 ='no' or q6 ='no'or q20 ='no' then 0 else 1 end)as fe

from table_qm_sli a
inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user = b.id_data_pribadi
inner join hrms.dbo.tb_unit d on a.id_unit = d.id_unit
inner join table_qm_sli_detail c on a.id_qm = c.id_qm
where date_saved between '$tgl1' and '$tgl2'
group by id_pribadi_user, nama, nama_unit, tenure
) t  group by id_pribadi_user, nama ,nama_unit, tenure,noe,fe,brand";

	$qry = mssql_query($q_user);
	$no = 1;
	while ($array = mssql_fetch_Array ($qry))
	{
	$nama = $array ['nama'];
	$brand = $array['brand'];
	$tenure = $array['tenure'];
	$noe = $array ['NOE'];
	$observasi = $array['observasi'];
	$hh = $array['hh'];
	$mm = $array ['mm'];
	$ss = $array['ss'];
	$fe = $array['fe'];
	
	$hhtomm=(($hh*3600)+($mm*60)+$ss)/$noe;
			//echo $hhtomm;
			//echo "jumtot$noe";
			//echo $d_stot_hh; echo $d_tot_mm; echo $d_tot_ss; echo $jum_tot;
			
			$iHours1 = Floor($hhtomm / 3600);
					//echo"vvv$iHours1";
			$Minutes1 = Floor(($hhtomm - ($iHours1 * 3600))/ 60) ;
					//echo"dddd$Minutes1";
			$Seconds1 =  ($hhtomm - (($iHours1 * 3600)+($Minutes1 * 60))) ;
	
	$fe_score = $fe/$noe*100;				
			  
	?>
	
	<tr>
      <td><? echo $no; ?></td>
	  <td><? echo $nama; ?></td>
      <td><? echo $brand; ?></td>
      <td><? echo $tenure; ?></td>
      <td><? echo $noe; ?></td>
      <td><? printf("%1.2f", $observasi); ?></td>
      <td><? echo"$iHours1:$Minutes1:";printf("%1.0f ", $Seconds1); ?></td>
      <td><? printf("%1.2f", $fe_score); ?> %</td>
     
    </tr>
	<? $no++;
	}
	$noo = $no-1;
?>
  </table>
  <p>Total data : <? echo"$noo"; ?></p>
  
  <p><? }?></p>
</form>
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