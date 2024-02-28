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
      <td>&nbsp;</td>
      <td width="90%"><div align="center" class="style3"> </div></td>
    </tr>
    <tr class="content">
      <td>Report By </td>
      <td><select name="report_by" id="report_by" class="box" onchange="satu.submit()">
        <option value="0">Select By
        <?php
			$katahh=array('Departement','Unit','Agent','Observer');
		$counthh = count($katahh);
							  
			for($i=0;$i<$counthh;$i++)
			{
				if($katahh[$i] == $report_by)
				{
					echo "<option value='$katahh[$i]' selected>$katahh[$i]";
				}
				else
				{
					echo "<option value='$katahh[$i]'>$katahh[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr class="content">
      <td><? if ($report_by=="Unit"){?></td>
      <td>&nbsp;</td>
    </tr>
	<tr class="content">
      <td>Region </td>
      <td><select name="select_region">
			<option value="<? echo $select_region; ?>"><? echo $select_region; ?></option>
			<option value="">ALL</option>
			<option value="JBRO">JBRO</option>
			<option value="SMG">SMG</option>
		 </select> </td>
    </tr>
    <tr class="content">
      <td width="10%">Divisi</td>
      <td><select name="kd_division" id="select" class="box" onchange="satu.submit()" >
          <option value="0" selected="selected">Divisi Name
          <?php
$query = "SELECT * FROM cco.hrms.dbo.tb_divisi";
$result_divisi = mssql_query( $query );
		$KATAGORIdivisi = array();
		while($data = mssql_fetch_row($result_divisi))
		{
			$KATAGORIdivisi[] = $data["1"];
			$katadivisi[] = $data["0"];
		}
		$countdivisi = count($KATAGORIdivisi);

					  
			for($i=0;$i<$countdivisi;$i++)
			{
				if($katadivisi[$i] == $kd_division)
				{
					echo "<option value='$katadivisi[$i]' selected>$KATAGORIdivisi[$i]";
				}
				else
				{
					echo "<option value='$katadivisi[$i]'>$KATAGORIdivisi[$i]";
				}
			}
			?>
          </option>
      </select></td>
    </tr>
    <tr class="content">
      <td>Departemen</td>
      <td><select name="kd_departemen" onchange="satu.submit()" class="box" >
          <option value="0" selected="selected">Departemen Name
          <?php
$query="select * from cco.hrms.dbo.tb_fungsi where left(id_fungsi,charindex('0',id_fungsi)-1)='$kd_division'";
$result_departemen = mssql_query( $query );
		$KATAGORIdepartemen = array();
		while($data = mssql_fetch_row($result_departemen))
		{
			$KATAGORIdepartemen[] = $data["1"];
			$katadepartemen[] = $data["0"];
		}
		$countdepartemen = count($KATAGORIdepartemen);
					  
		for($i=0;$i<$countdepartemen;$i++)
			{
				if($katadepartemen[$i]  == $kd_departemen)
				{
					echo "<option value='$katadepartemen[$i]' selected>$KATAGORIdepartemen[$i]";
				}
				else
				{
					echo "<option value='$katadepartemen[$i]'>$KATAGORIdepartemen[$i]";
				}
			}

	 
	 
			?>
          </option>
      </select></td>
    </tr>
    <tr class="content">
      <td>Unit Kerja </td>
      <td><select name="kd_unit" class="box" >
          <option value="0" selected="selected">Unit Name
          <?php
					
$query="select * from cco.hrms.dbo.tb_unit where left(id_unit,len(id_unit)-1)='$kd_departemen'";
$result = mssql_query( $query );
		$KATAGORI = array();
		while($data = mssql_fetch_row($result))
		{
			$KATAGORI[] = $data["1"];
			$kata[] = $data["0"];
		}
		$count = count($KATAGORI);

					  //
			for($i=0;$i<$count;$i++)
			{
				if($kata[$i] == $kd_unit)
				{
					echo "<option selected value='$kata[$i]' >$KATAGORI[$i]";
				}
				else
				{
					echo "<option value='$kata[$i]'>$KATAGORI[$i]";
				}
			}
			?>
          </option>
      </select></td>
    </tr>
    <tr class="content">
      <td>Date</td>
      <td><input name="date_eva1" type="text" id="datepicker" value="<? echo "$date_eva1"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" />
      Until
        <input name="date_eva2" type="text" id="datepicker1" value="<? echo "$date_eva2"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" /></td>
    </tr>
    <tr class="content">
      <td><? } if ($report_by=="Departement"){?></td>
      <td>&nbsp;</td>
    </tr>
	<tr class="content">
      <td>Region </td>
      <td><select name="select_region">
			<option value="<? echo $select_region; ?>"><? echo $select_region; ?></option>
			<option value="">ALL</option>
			<option value="JBRO">JBRO</option>
			<option value="SMG">SMG</option>
		 </select> </td>
    </tr>
    <tr class="content">
      <td>Departemen</td>
      <td><input name="cc1" type="checkbox" id="cc1" value="CCO01" <? if ($cc1=="CCO01") {echo "checked";} else {$cc1='-'; echo "";} ?>/>Premium Postpaid & Data Service Contact Center
      <input name="cc2" type="checkbox" id="cc2" value="CCO02" <? if ($cc2=="CCO02") {echo "checked";} else {$cc2='-'; echo "";} ?> />Other Contact Center
	  <input name="cc3" type="checkbox" id="cc3" value="CCO03" <? if ($cc3=="CCO03") {echo "checked";} else {$cc3='-'; echo "";} ?> />Regular Contact Center 
	  
	  <input name="cr1" type="checkbox" id="cr1" value="CR01" <? if ($cr1=="CR01") {echo "checked";} else {$cr1='-'; echo "";} ?>/>CR Premium
      <input name="cr2" type="checkbox" id="cr2" value="CR02" <? if ($cr2=="CR02") {echo "checked";} else {$cr2='-'; echo "";} ?> />CR Reguler
	  
	  <input name="dc1" type="checkbox" id="dc1" value="CCO04A" <? if ($dc1=="CCO04A") {echo "checked";} else {$dc1='-'; echo "";} ?>/>E-mail
      <input name="dc2" type="checkbox" id="dc2" value="CCO04B" <? if ($dc2=="CCO04B") {echo "checked";} else {$dc2='-'; echo "";} ?> />Socmed

</td>
    </tr>
    <tr class="content">
      <td>Date</td>
      <td><input name="date_eva1" type="text" id="datepicker" value="<? echo "$date_eva1"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" />
    Until
      <input name="date_eva2" type="text" id="datepicker1" value="<? echo "$date_eva2"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" /></td>
    </tr>
    <tr class="content">
      <td><? } if ($report_by=="Observer"){?></td>
      <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td>Name</td>
      <td><select name="c_observer" class="box" id="c_observer" >
        <option value="0" selected="selected">Select All
        <?php
		
include "konek_qm.php";
$q_observerCombo="select DISTINCT a.id_pribadi_observer, z.nama,c.qm
from db_qm.dbo.Table_qm a inner join
cco.hrms.dbo.tb_data_pribadi z on a.id_pribadi_observer=cast(z.id_data_pribadi as varchar)
inner join cco.hrms.dbo.tb_auth c on a.id_pribadi_observer=cast(c.id_data_pribadi as varchar)
--where c.qm='admin' 
order by z.nama";
//echo"$q_quizCombo";
$r_observerCombo = mssql_query( $q_observerCombo );
		$kata_quizCombo = array();
		while($data_observerCombo = mssql_fetch_row($r_observerCombo))
		{
			$kata_observerCombo[] = $data_observerCombo["0"];
			$katagory_observerCombo[] = $data_observerCombo["1"];
		}
		$count_observerCombo = count($kata_observerCombo);

					  //
			for($i=0;$i<$count_observerCombo;$i++)
			{
				if($kata_observerCombo[$i] == $c_observer)
				{
					echo "<option selected value='$kata_observerCombo[$i]' >$katagory_observerCombo[$i]";
				}
				else
				{
					echo "<option value='$kata_observerCombo[$i]'>$katagory_observerCombo[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr class="content">
      <td>Date</td>
      <td><input name="date_eva1" type="text" id="datepicker" value="<? echo "$date_eva1"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" />
    Until
      <input name="date_eva2" type="text" id="datepicker1" value="<? echo "$date_eva2"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" /></td>
    </tr>
    <tr class="content">
      <td>
      <? } if ($report_by=="Agent"){?>
      	
      </td>
      <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td>NIK/Name</td>
      <td><input name="nik_agent" type="text" id="nik_agent" value="<? echo"$nik_agent"; ?>" /></td>
    </tr>
    <tr class="content">
      <td>Date</td>
      <td><input name="date_eva1" type="text" id="datepicker" value="<? echo "$date_eva1"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" />
    Until
      <input name="date_eva2" type="text" id="datepicker1" value="<? echo "$date_eva2"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" /></td>
    </tr>
    <tr class="content">
      <td><? }?>
      	<?  if ($report_by=="Skala"){?>
      	
      </td>
      <td>&nbsp;</td>
    </tr>
     <tr class="content">
      <td width="10%">Department</td>
      <td><select name="departemen_skala" id="select" class="box" onchange="satu.submit()">
           <option value="0" <?php if ($departemen_skala=='0') echo 'selected=true' ;?> >All </option>   
		   <option value="CCO01" <?php if ($departemen_skala=='CCO01') echo 'selected=true' ;?> >Premium Postpaid & Data Service Contact Center </option>   
		   <option value="CCO02" <?php if ($departemen_skala=='CCO02') echo 'selected=true' ;?> >Other Contact Center </option>   
		   <option value="CCO03" <?php if ($departemen_skala=='CCO03') echo 'selected=true' ;?>>Regular Contact Center </option> 
		   <option value="CR01" <?php if ($departemen_skala=='CR01') echo 'selected=true' ;?>>CR Premium </option> 
           <option value="CR02" <?php if ($departemen_skala=='CR02') echo 'selected=true' ;?>>CR Regular </option>  
		   <option value="CCO04A" <?php if ($departemen_skala=='CCO04A') echo 'selected=true' ;?>>E-mail </option> 
		   <option value="CCO04B" <?php if ($departemen_skala=='CCO04B') echo 'selected=true' ;?>>Socmed </option>		   
      </select></td>
    </tr>
      
       <tr class="content">
      <td>Unit Kerja </td>
      <td><select name="unit_skala" class="box"  >
          <option value="" selected="selected" >Unit Name
          <?php
					
$query11="select * from cco.hrms.dbo.tb_unit where left(id_unit,len(id_unit)-1)='$departemen_skala'";
$result11 = mssql_query( $query11 );
		$KATAGORI11 = array();
		while($data11 = mssql_fetch_row($result11))
		{
			$KATAGORI11[] = $data11["1"];
			$kata11[] = $data11["0"];
		}
		$count11 = count($KATAGORI11);

					  //
			for($i=0;$i<$count11;$i++)
			{
				if($kata11[$i] == $unit_skala)
				{
					echo "<option  value='$kata11[$i]' selected>$KATAGORI11[$i]";
				}
				else
				{
					echo "<option value='$kata11[$i]'>$KATAGORI11[$i]";
				}
			}
			?>
          </option>
      </select></td>
    </tr>
    
       <tr class="content">
        <td width="10%">Skala</td>
      <td><select name="skala" id="select" class="box"   >
          <option value="0" selected="true" >selected </option>   
           <option value="" <?php if ($skala=='') echo 'selected=true' ;?> >All </option>   
		  
		   <option value="A" <?php if ($skala=='A') echo 'selected=true' ;?> >A </option>   
		    <option value="B" <?php if ($skala=='B') echo 'selected=true' ;?> >B </option>   
		     <option value="C" <?php if ($skala=='C') echo 'selected=true' ;?>>C </option>   
		      <option value="D"<?php if ($skala=='D') echo 'selected=true' ;?> >D </option>   
		       <option value="E" <?php if ($skala=='E') echo 'selected=true' ;?>>E </option>   	
      </select></td>
    </tr>
    <tr class="content">
      <td>Date</td>
      <td><input name="date_eva1" type="text" id="datepicker" value="<? echo "$date_eva1"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" />
    Until
      <input name="date_eva2" type="text" id="datepicker1" value="<? echo "$date_eva2"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" /></td>
    </tr>
    <tr class="content">
      <td><? }?>
      </td>
      <td>&nbsp;</td>
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
		  
		  echo "<a class='btn btn-warning' href='report/export_voce.php?cc1=$cc1&cc2=$cc2&cc3=$cc3&cr1=$cr1&cr2=$cr2&dc1=$dc1&dc2=$dc2&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&date_eva1=$tgl1&date_eva2=$tgl2&select_region=$select_region'>export to excel</a>";
		  ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <? 
  if(isset($searchButton)){?>
  <table width="536%" border="1" align="center" cellspacing="1" id="dyntable" class="table table-bordered table-infinite">
    <thead>
      <tr bgcolor="#CCCCCC">
        <th width="0%" rowspan="3" class="head0 nosort"><div align="center">No</div></th>
        <? if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){?>
        <th width="1%" rowspan="3" class="head0">Delete</th>
        <th width="1%" rowspan="3" class="head0">Edit</th>
        <? } ?>
		<th width="4%" rowspan="3" class="head0"><div align="center">Validator</div></th>
		<th width="4%" rowspan="3" class="head0"><div align="center">Validation</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Area</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Username</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Region</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Nama</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">TL/SPV</div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Survey Date </div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Observation Date</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Survey Methode</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Customer Name </div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">MSISDN</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Activity Code</div></th>
		
        <th colspan="2" class="head0"><div align="center">Process Call</div></th>
		<th colspan="2" class="head0"><div align="center">Solution </div></th>
		<th colspan="16" class="head0"><div align="center">Reason Dessatisfaction Customer </div></th>
		
        <th width="2%" rowspan="3" class="head0"><div align="center">Observer</div></th>
      </tr>
      <tr bgcolor="#CCCCCC">
      <th colspan="2" class="head0"><div align="center">Telephone Skill</div></th>
      <th colspan="2" class="head0"><div align="center">Solution/Providing Assistance</div></th>
      <th colspan="2" class="head0"><div align="center">CEC</div></th>
      <th colspan="2" class="head0"><div align="center">Network</div></th>
      <th colspan="2" class="head0"><div align="center">Process & Procedure</div></th>
	  <th colspan="2" class="head0"><div align="center">Billing Issue</div></th>
	  <th colspan="2" class="head0"><div align="center">Pricing & Package</div></th>
	  <th colspan="2" class="head0"><div align="center">Wrong Input Reason</div></th>
	  <th colspan="2" class="head0"><div align="center">Program Promo</div></th>
	  <th colspan="2" class="head0"><div align="center">Access to Contact Center</div></th>
    </tr>
	<tr bgcolor="#CCCCCC">
      <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
      <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
    </tr>
    </thead>
    <?
	include "konek_qm.php";
	
	if ($date_eva1 != "" && $date_eva2 != "") {

	if($c_observer==""){$obs=0;}else{$obs=$c_observer;}
	$itung="[sp_countVoce]'table_qm_voce','$tgl1','$tgl2','$report_by','%$kd_unit%','%$cc1%','%$cc2%','%$cc3%','%$cr1%','%$cr2%','%$dc1%','%$dc2%','$obs','%$nik_agent%','$select_region'";
		
	 //echo $itung;
	 $queryitung=@mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	  }	

	if((isset($searchButton) and $jum_tot<>"0") or ($kd_del=="ok"and $jum_tot<>"0"))
					{
					include "konek_qm.php";

					$q_user="[sp_searchVoce]'table_qm_voce','$report_by','%$kd_unit%','$tgl1','$tgl2','%$cc1%','%$cc2%','%$cc3%','%$cr1%','%$cr2%','%$dc1%','%$dc2%','$c_observer','%$nik_agent%','$select_region'";
					 //echo $q_user;
					//echo "456456";
					
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$id_kalibrasi=$d_user["id_kalibrasi"];
					    $kalibrasi=$d_user["kalibrasi"];
						$area=$d_user["nama_unit"];
						$userid=$d_user["nik_karyawan"];
						$region=$d_user["region"];
						$lb=$d_user["lb"];
						$spv_name=$d_user["spv_name"];
						$survey_date=$d_user["survey_date"];
						$survey_date2 = $d_user['date'];
						$jam = $d_user['jam'];
						$jamm = explode (":", $jam);
						$hh = $jamm[0];
						$mm = $jamm[1];						
						$observation_date=$d_user["observation_date"];
						$survey_methode=$d_user["survey_methode"];
						$customer_name=$d_user["customer_name"];
						$msisdn=$d_user["msisdn"];
						$activity_code=$d_user["activity_code"];
						$id_qm=$d_user["id_qm"];
						$observer=$d_user["observer"];
						$date_saved=$d_user["date_saved"];
						$q1=$d_user["q1"];
						$q2=$d_user["q2"];
						$q3=$d_user["q3"];
						$q4=$d_user["q4"];
						$q5=$d_user["q5"];
						$q6=$d_user["q6"];
						$q7=$d_user["q7"];
						$q8=$d_user["q8"];
						$q9=$d_user["q9"];
						$q10=$d_user["q10"];
						$save_q1=$d_user["save_q1"];
						$save_q2=$d_user["save_q2"];
						$save_q3=$d_user["save_q3"];
						$save_q4=$d_user["save_q4"];
						$save_q5=$d_user["save_q5"];
						$save_q6=$d_user["save_q6"];
						$save_q7=$d_user["save_q7"];
						$save_q8=$d_user["save_q8"];
						$save_q9=$d_user["save_q9"];
						$save_q10=$d_user["save_q10"];						
						$notes1=$d_user["notes1"];
						$notes2=$d_user["notes2"];
						$notes3=$d_user["notes3"];
						$notes4=$d_user["notes4"];
						$notes5=$d_user["notes5"];
						$notes6=$d_user["notes6"];
						$notes7=$d_user["notes7"];
						$notes8=$d_user["notes8"];
						$notes9=$d_user["notes9"];
						$notes10=$d_user["notes10"];
	
					echo "<tr class='content'>
                      <td>$no</td>";
					  if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){
					  					  echo "</td>";
					  

echo "<td>";
					  echo"<SCRIPT TYPE='text/javascript'>
function confirmDelete()
{
    return confirm('Are you sure you wish to save this entry?');
}
</script>";
echo"<SCRIPT TYPE='text/javascript'>
function confirmDelete2()
{
    return confirm('Are you sure you wish to delete this entry?');
}
</script>";
					  ?>
    <a href="<? echo "del_group.php?report_by=$report_by&kode_del=detail_voce&id_qm=$id_qm&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&c_observer=$observer"; ?>" onclick="return confirmDelete2();">
    <?
					  	 echo "delete</a></td>";
						 
						 echo "<td>";
						  $q="select nama as observer_name
						  	from cco.hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer'";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];
					
					  ?>
    </a><a href="<? echo "edit_voce.php?kode_edit=edit_voce&report_by=$report_by&date_eva1=$tgl1&date_eva2=$tgl2&id_qm=$id_qm&full_name=$lb&spv_name=$spv_name&observer_name=$observname&cus_name=$customer_name&msisdn=$msisdn&survey_date=$survey_date2&hh=$hh&mm=$mm&survey_methode=$survey_methode&activity_code=$activity_code&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&notes6=$notes6&notes7=$notes7&notes8=$notes8&notes9=$notes9&notes10=$notes10&sc1=$q1&sc2=$q2&sc3=$q3&sc4=$q4&sc5=$q5&sc6=$q6&sc7=$q7&sc8=$q8&sc9=$q9&sc10=$q10&tot1=$save_q1&tot2=$save_q2&tot3=$save_q3&tot4=$save_q4&tot5=$save_q5&tot6=$save_q6&tot7=$save_q7&tot8=$save_q8&tot9=$save_q9&tot10=$save_q10&userid=$userid&observer=$SES__NIK&date_saved=$date_saved"; ?>" onclick="return popup(this, 'notes');">
    <?
					  	 echo "Edit</a></td>";
						 		
						 }		
					$q_user1="select nama as observer_name
						  	from cco.hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer' ";
					$r_user1=mssql_query($q_user1);
					while($d_user1=mssql_fetch_array($r_user1))
						{
						$observer_name=$d_user1["observer_name"];
						}		
			?>	
			
			<td><a href="showKalibrasi/show_inbound.php?id=<? echo "$id";?>&id_qm=<? echo "$id_qm";?>&agree=<? echo "$agree";?>" onClick="return popup(this, 'notes');">	
			<? if ($id_kalibrasi != ""){
					$q_kal="select nama as kalibrasi_name
						  	from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
					$r_kal=mssql_query($q_kal);
					while($d_kal=mssql_fetch_array($r_kal))
						{
						$kalibrasi_name=$d_kal["kalibrasi_name"];
					}
						echo $kalibrasi_name; 					
				}?></td></a>					  
         <? 	  
        echo"       <td>$kalibrasi</td>  
					<td>$area</td>
					  <td>$userid</td>
                      <td>$region</td>
					  <td>$lb</td>
					  <td>$spv_name</td> 
					  <td>$survey_date</td>
					  <td>$observation_date</td>
					  <td>$survey_methode</td>
					  <td>$customer_name</td>
					  <td>$msisdn</td>
					  <td>$activity_code</td>
                      <td>$q1</td>
					  <td>$notes1</td>
                      <td>$q2</td>
					  <td>$notes2</td>
                      <td>$q3</td>
					  <td>$notes3</td>
                      <td>$q4</td>
					  <td>$notes4</td>
                      <td>$q5</td>
					  <td>$notes5</td>
                      <td>$q6</td>
					  <td>$notes6</td>
					  <td>$q7</td>
					  <td>$notes7</td>
                      <td>$q8</td>
					  <td>$notes8</td>
                      <td>$q9</td>
					  <td>$notes9</td>
                      <td>$q10</td>
					  <td>$notes10</td>
					  <td>$observer_name</td>
                      </tr>";
					  $no++;
					  
					}
						
					?>
    </a>
  </table>
  <p>Total data : <? echo"$jum_tot"; ?></p>
  <table width="700" border="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th rowspan="2" width="17" class="head0"><div align="center">No</div></th>
      <th rowspan="2" width="36" class="head0"><div align="center">Category</div></th>
      <th rowspan="2" width="205" class="head0"><div align="center">Attributes</div></th>
	  <th colspan="4" class="head0"><div align="center">Absolute Score</div></th>
	</tr>
	<tr>
      <th width="25" class="head0"><div align="center">Y</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
      <th width="25" class="head0"><div align="center">N</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
    </tr>
	</thead>
    <tr>
      <td>1</td>
      <td>Process Call</td>
      <td>Telephone Skill</td>
      <td>
		<?  
		  $queryhendi="[sp_reportqm_voce]'table_qm_voce','$tgl1','$tgl2','$report_by','$c_observer','%$nik_agent%','%$cc1%','%$cc2%','%$cc3%','%$cr1%','%$cr2%','%$dc1%','%$dc2%','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala'";
		  $proses=mssql_query($queryhendi);
		  $result=mssql_fetch_array($proses);
		  
		 //echo $queryhendi;
		
			$q1_tot_y=$result["q1_yes"];
			echo"$q1_tot_y";
			
			$q1_avg=$result["avg1"];
			
		?>
	  </td>
	  <td>
		<?
			$prosen_q1_y =($q1_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q1_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q1_tot_n=$result["q1_no"];
			echo"$q1_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q1_n =($q1_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q1_n);
		?>
	  </td>
    </tr>	
    <tr>
      <td>2</td>
      <td>Solution</td>
      <td>Solution/Providing Assistance</td>
      <td>
		<?  
		  	$q2_tot_y=$result["q2_yes"];
			echo"$q2_tot_y";
			
			$q2_avg=$result["avg2"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q2_y =($q2_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q2_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q2_tot_n=$result["q2_no"];
			echo"$q2_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q2_n =($q2_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q2_n);
		?>
	  </td>
    </tr>
    <tr>
	<td>3</td>
      <td rowspan="8">Reason Dessatisfaction Customer</td>
	  <td>CEC</td>
      <td>
		<?  
		  	$q3_tot_y=$result["q3_yes"];
			echo"$q3_tot_y";
			
			$q3_avg=$result["avg3"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q3_y =($q3_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q3_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q3_tot_n=$result["q3_no"];
			echo"$q3_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q3_n =($q3_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q3_n);
		?>
	  </td>
	  </tr>
    <tr>
	<td>4</td>
      <td>Network</td>
      <td>
		<?  
		  	$q4_tot_y=$result["q4_yes"];
			echo"$q4_tot_y";
			
			$q4_avg=$result["avg4"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q4_y =($q4_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q4_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q4_tot_n=$result["q4_no"];
			echo"$q4_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q4_n =($q4_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q4_n);
		?>
	  </td>
    </tr>
    <tr>
	  <td>5</td>
      <td>Process & Procedure</td>
      <td>
		<?  
		  	$q5_tot_y=$result["q5_yes"];
			echo"$q5_tot_y";
			
			$q5_avg=$result["avg5"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q5_y =($q5_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q5_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q5_tot_n=$result["q5_no"];
			echo"$q5_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q5_n =($q5_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q5_n);
		?>
	  </td>
    </tr>
	  <td>6</td>
      <td>Billing Issue</td>
      <td>
		<?  
		  	$q6_tot_y=$result["q6_yes"];
			echo"$q6_tot_y";
			
			$q6_avg=$result["avg6"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q6_y =($q6_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q6_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q6_tot_n=$result["q6_no"];
			echo"$q6_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q6_n =($q6_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q6_n);
		?>
	  </td>
    </tr>    
    <tr>
      <td>7</td>
      <td>Pricing & Package</td>
      <td>
		<?  
		  	$q7_tot_y=$result["q7_yes"];
			echo"$q7_tot_y";
			
			$q7_avg=$result["avg7"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q7_y =($q7_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q7_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q7_tot_n=$result["q7_no"];
			echo"$q7_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q7_n =($q7_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q7_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>8</td>
      <td>Wrong Input Reason</td>
      <td>
		<?  
		  	$q8_tot_y=$result["q8_yes"];
			echo"$q8_tot_y";
			
			$q8_avg=$result["avg8"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q8_y =($q8_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q8_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q8_tot_n=$result["q9_no"];
			echo"$q8_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q8_n =($q8_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q8_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>9</td>
      <td>Program Promo</td>
      <td>
		<?  
		  	$q9_tot_y=$result["q9_yes"];
			echo"$q9_tot_y";
			
			$q9_avg=$result["avg9"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q9_y =($q9_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q9_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q9_tot_n=$result["q9_no"];
			echo"$q9_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q9_n =($q9_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q9_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>10</td>
      <td>Access to Contact Center</td>
      <td>
		<?  
		  	$q10_tot_y=$result["q10_yes"];
			echo"$q10_tot_y";
			
			$q10_avg=$result["avg10"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q10_y =($q10_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q10_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q10_tot_n=$result["q10_no"];
			echo"$q10_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q10_n =($q10_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q10_n);
		?>
	  </td>
    </tr>
    
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1" class="table table-bordered table-infinite">
	<tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
  </table> 
  <p><? } }?></p>
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