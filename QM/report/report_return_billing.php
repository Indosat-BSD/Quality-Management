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
      <td width="20%">&nbsp;</td>
      <td width="80%"><div align="center" class="style3"> </div></td>
    </tr>
    <tr class="content">
      <td>Report By </td>
      <td><select name="report_by" id="report_by" class="box" onchange="satu.submit()">
        <option value="0">Select By</option>
        <?php
			$katahh=array('Departement','Unit','Agent','Observer','Skala');
		$counthh = count($katahh);
							  
			for($i=0;$i<$counthh;$i++)
			{
				if($katahh[$i] == $report_by)
				{
					echo "<option value='$katahh[$i]' selected>$katahh[$i]</option>";
				}
				else
				{
					echo "<option value='$katahh[$i]'>$katahh[$i]</option>";
				}
			}
			?> 
      </select></td>
    </tr>
    <tr class="content">
      <td><? if ($report_by=="Unit"){?></td>
      <td>&nbsp;</td>
    </tr>
	<tr class="content">
      <td>Region </td>
      <td><select name="select_region">
			<option value="" <?=($select_region=='')?'Selected':'';?>>ALL</option>
			<option value="JBRO" <?=($select_region=='JBRO')?'Selected':'';?>>JBRO</option>
			<option value="SMG" <?=($select_region=='SMG')?'Selected':'';?>>SMG</option>
		 </select> </td>
    </tr>
    <tr class="content">
      <td width="10%">Divisi</td>
      <td><select name="kd_division" id="select" class="box" onchange="satu.submit()" >
          <option value="0" selected="selected">Divisi Name</option>
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
					echo "<option value='$katadivisi[$i]' selected>$KATAGORIdivisi[$i]</option>";
				}
				else
				{
					echo "<option value='$katadivisi[$i]'>$KATAGORIdivisi[$i]</option>";
				}
			}
			?> 
      </select></td>
    </tr>
    <tr class="content">
      <td>Departemen</td>
      <td><select name="kd_departemen" onchange="satu.submit()" class="box" >
          <option value="0" selected="selected">Departemen Name</option>
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
					echo "<option value='$katadepartemen[$i]' selected>$KATAGORIdepartemen[$i]</option>";
				}
				else
				{
					echo "<option value='$katadepartemen[$i]'>$KATAGORIdepartemen[$i]</option>";
				}
			} 
			?> 
      </select></td>
    </tr>
    <tr class="content">
      <td>Unit Kerja </td>
      <td><select name="kd_unit" class="box" >
          <option value="0" selected="selected">Unit Name</option>
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
					echo "<option selected value='$kata[$i]' >$KATAGORI[$i]</option>";
				}
				else
				{
					echo "<option value='$kata[$i]'>$KATAGORI[$i]</option>";
				}
			}
			?> 
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
			<option value="" <?=($select_region=='')?'Selected':'';?>>ALL</option>
			<option value="JBRO" <?=($select_region=='JBRO')?'Selected':'';?>>JBRO</option>
			<option value="SMG" <?=($select_region=='SMG')?'Selected':'';?>>SMG</option>
		 </select> </td>
    </tr>
    <tr class="content">
      <td>Departemen</td>
      <td><input name="cc_mentari" type="checkbox" id="cc_mentari" value="CCC01" <? if ($cc_mentari=="CCC01") {echo "checked";} else {$cc_mentari=''; echo "";} ?>/>
      Postpaid Collection 
      <input name="cc_im3" type="checkbox" id="cc_im3" value="CCC02" <? if ($cc_im3=="CCC02") {echo "checked";} else {$cc_im3=''; echo "";} ?> />
Credit Control & Collection
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
        <option value="0" selected="selected">Select All</option>
        <?php
		
include "konek_qm.php";
$q_observerCombo="select DISTINCT a.id_pribadi_observer, z.nama,c.qm
from db_qm.dbo.table_qm_rb a inner join
hrms.dbo.tb_data_pribadi z on a.id_pribadi_observer=cast(z.id_data_pribadi as varchar)
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
					echo "<option selected value='$kata_observerCombo[$i]' >$katagory_observerCombo[$i]</option>";
				}
				else
				{
					echo "<option value='$kata_observerCombo[$i]'>$katagory_observerCombo[$i]</option>";
				}
			}
			?> 
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
      <td><input name="nik_agent" type="text" id="nik_agent" value="<? echo"$nik_agent"; ?>" data-autocomplete="on" data-url="autocomplete-karyawan.php" autocomplete="off"/></td>
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
       <td><select name="departemen_skala" id="select" class="box" onchange="satu.submit()"  >
	   		 <option value="" <?php if ($departemen_skala=='0') echo 'selected=true' ;?> >All </option> 
		    <option value="CCC01" <?php if ($departemen_skala=='CCC01') echo 'selected=true' ;?> >Postpaid Collection </option>   
		    <option value="CCC02" <?php if ($departemen_skala=='CCC02') echo 'selected=true' ;?> >Credit Control & Collection </option>   
      </select></td>
    </tr>
      
       <tr class="content">
      <td>Unit Kerja </td>
      <td><select name="unit_skala" class="box"  >
          <option value="" selected="selected" >Unit Name</option>
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
					echo "<option  value='$kata11[$i]' selected>$KATAGORI11[$i]</option>";
				}
				else
				{
					echo "<option value='$kata11[$i]'>$KATAGORI11[$i]</option>";
				}
			}
			?> 
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
		  
		  echo "<a class='btn btn-warning' href='report/export_return_billing.php?cc_mentari=$cc_mentari&cc_im3=$cc_im3&cc_pp=$cc_pp&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&date_eva1=$tgl1&date_eva2=$tgl2&select_region=$select_region&skala=$skala&departemen_skala=$departemen_skala&unit_skala=$unit_skala'>export to excel</a>";
		  ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="536%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
    <thead>
      <tr bgcolor="#CCCCCC">
        <th width="0%" rowspan="3" class="head0 nosort"><div align="center">No</div></th>
        <? if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"inbound"){?>
        <th width="1%" rowspan="3" class="head0">Delete</th>
        <th width="1%" rowspan="3" class="head0">Edit</th>
        <? } ?>
		<th width="4%" rowspan="3" class="head0"><div align="center">Validator</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">Validation</div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Area</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">Username</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">Region</div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Nama</div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">TL/SPV</div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Date </div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Observation Date</div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Week</div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Customer Name </div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Type</div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Product Type</div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Product Detail</div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Product Detail by Agent</div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Call Activity </div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Handling time (duration)</div></th>
		  <th rowspan="3" class="head0"><div align="center">Handling Time (second)</div></th>
		  <th width="2%" rowspan="3" class="head0"><div align="center">Call Status </div></th>
		
		<!-- nilai NCE-->
        <th colspan="6" class="head0"><div align="center">Opening</div></th>
        <th colspan="6" class="head0"><div align="center">Solution</div></th>
		<!-- nilai CE-->
        <th colspan="3" class="head0"><div align="center">Closing</div></th>
        <th colspan="9" class="head0"><div align="center">Teknis berbicara / Effective Communication </div></th>
		<!-- nilai NCE-->
      <th width="4%" rowspan="3" class="head0"><div align="center">Total Score </div></th>
	  <!-- end edit -->
      <th width="2%" rowspan="3" class="head0"><div align="center">Skala</div></th>
        <th width="6%" rowspan="3" class="head0"><div align="center">Action to be done - QA</div></th>
        <th width="7%" rowspan="3" class="head0"><div align="center">Action to be done - Opers</div></th>
	 <? if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){?>
      <th width="7%" rowspan="3" class="head0"><div align="center">Notes sample recording</div></th>
	  <? } ?>
      <th width="4%" colspan="2" rowspan="3" class="head0"><div align="center">Observer</div></th>
      </tr>
      <tr bgcolor="#CCCCCC">
        <th colspan="3" class="head0"><div align="center">Greeting with enthusiam</div></th>
        <th colspan="3" class="head0"><div align="center">Purpose to call & Confirmation</div></th>
        <th colspan="3" class="head0"><div align="center">Input Accuracy Data & Verification Address Customer</div></th>
        <th colspan="3" class="head0"><div align="center">Process Compliance/Privacy Policy</div></th>
        <th colspan="3" class="head0"><div align="center">Closing Greeting</div></th>
        <th colspan="3" class="head0"><div align="center">Hospitality / kesopanan (relate to Manner)</div></th>
		<th colspan="3" class="head0"><div align="center">Personalize Communication</div></th>
        <th colspan="3" class="head0"><div align="center">Not Use jargon</div></th>
      </tr>
	<tr bgcolor="#CCCCCC">
      <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
      <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
	  </tr>	  
    </thead>
    <?
	include "konek_qm.php";
	
	if ($date_eva1 != "" && $date_eva2 != "") {
	
	/* if ($report_by=="Skala")
	{
		$itung="select count(*) as jum_s
	from db_qm.dbo.table_qm a with(nolock) inner join db_qm.dbo.table_qm_detail b with(nolock) on a.id_qm=b.id_qm
where a.status_save='complete' and convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' AND
a.id_qm in(
select id_qm from (
					select a.id_qm,
					case when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 90 then 'A'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 80 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  < 90 then 'B'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 70 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  < 80 then 'C'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 60 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  < 70 then 'D'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)   < 60 then 'E' end 'Skala'
					from db_qm.dbo.table_qm a with(nolock) 
					inner join db_qm.dbo.table_qm_detail b with(nolock) on a.id_qm=b.id_qm 
					where a.status_save='complete' and convert(varchar,a.date_saved,112)
					 between '$tgl1' and '$tgl2'
				    group by a.id_qm 
				) AA
			 where Skala like '%$skala' 
)";
	}
	else
	{
		
		
	} */
	if($c_observer==""){$obs=0;}else{$obs=$c_observer;}	
	 if($kd_division!='0' and $kd_departemen=='0' and $report_by=='Unit'){
		$kd_unit = $kd_division;
	 }else if($kd_departemen!='0' and $kd_unit=='0' and $report_by=='Unit'){
		$kd_unit = $kd_departemen;
	 }
$itung="[sp_count_credit]'table_qm_rb','$tgl1','$tgl2','$report_by','%$kd_unit%','$cc_mentari','$cc_im3','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala'";
		
	 //echo $itung;
	 $queryitung=@mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	
	//var_dump($jum_tot);
	//end edit
//echo "$q1_yes_jum";
	  }	

	if((isset($searchButton) and $jum_tot<>"0") or ($kd_del=="ok"and $jum_tot<>"0"))
					{
					include "konek_qm.php";
					
					//var_dump($skala);
					$q_user="[sp_search_rb]'table_qm_rb','$report_by','%$kd_unit%','$tgl1','$tgl2','$cc_mentari','$cc_im3','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala' ";
					// echo $q_user;
					//echo "456456";
					
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$date_saved=$d_user["data_saved"];
						$spv_name=$d_user["spv_name"];
						$interaction_date=$d_user["interaction_date"];
						$observation_date=$d_user["observation_date"];
						$observ=$d_user["observ"];
						$week_=$d_user["week_"];
						$customer_name=$d_user["customer_name"];
						$interaction_type=$d_user["interaction_type"];
						 $interaction_date2 = $d_user['date'];
						 $jam = $d_user['jam'];
						 $jamm = explode (":", $jam);
						 $hh = $jamm[0];
						 $mm = $jamm[1];
						$product_type=$d_user["product_type"];
						$product_detail=$d_user["product_detail"];
						$product_detail_agent=$d_user["product_detail_agent"];
						$call_activity=$d_user["call_activity"];
						$hh_handling_time=$d_user["hh_handling_time"];
						$mm_handling_time=$d_user["mm_handling_time"];
						$ss_handling_time=$d_user["ss_handling_time"];
						$hh_2=$d_user["hh_handling_time"];
						$mm_2=$d_user["mm_handling_time"];
						$ss_2=$d_user["ss_handling_time"];
						$call_status=$d_user["call_status"];
						$id_qm=$d_user["id_qm"];
						$full_name=$d_user["full_name"];
						$lb=$d_user["lb"];
						$region=$d_user["region"];
						$userid=$d_user["nik_karyawan"];
						$q1=$d_user["q1"];
						$save_q1=$d_user["save_q1"]; 
						$q2=$d_user["q2"];
						$save_q2=$d_user["save_q2"];
						$q3=$d_user["q3"];
						$save_q3=$d_user["save_q3"];
						$q4=$d_user["q4"];
						$save_q4=$d_user["save_q4"];
						$q5=$d_user["q5"];
						$save_q5=$d_user["save_q5"];
						$q6=$d_user["q6"];
						$save_q6=$d_user["save_q6"];
						$q7=$d_user["q7"];
						$save_q7=$d_user["save_q7"];
						$q8=$d_user["q8"];
						$save_q8=$d_user["save_q8"];
						$action_done_qa=$d_user["action_done_qa"];
						$action_done_ops=$d_user["action_done_ops"];
						$file_action_done_qa=$d_user["file_action_done_qa"];
						$file_action_done_ops=$d_user["file_action_done_ops"];
						$status_save=$d_user["status_save"];
						$observer=$d_user["observer"];
						$area=$d_user["nama_unit"];
						$nama_unit=$d_user["nama_unit"];
						$id_kalibrasi=$d_user["id_kalibrasi"];
						$kalibrasi=$d_user["kalibrasi"];
						$agree=$d_user["kalibrasi"];
						$notes_recording=$d_user["notes_recording"];
						$score_tot=$d_user["tot_score"];
						
						$notes1=$d_user["notes1"];
						$notes2=$d_user["notes2"];
						$notes3=$d_user["notes3"];
						$notes4=$d_user["notes4"];
						$notes5=$d_user["notes5"];
						$notes6=$d_user["notes6"];
						$notes7=$d_user["notes7"];
						$notes8=$d_user["notes8"];
						$skala=$d_user["Skala"];
						
						echo "<tr class='content'>
                      <td>$no</td>";
					  if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"inbound"){
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
    <a href="<? echo "del_group.php?report_by=$report_by&kode_del=detail_rb&id_qm=$id_qm&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&c_observer=$observer"; ?>" onclick="return confirmDelete2();">
    <?
					  	 echo "delete</a></td>";
						 
						 echo "<td>";
						 /*
						 $q ="select full_name as observer_name 
					from dev_asst.dbo.table_usr 
					where username='$observer' ";
						  */
						  $q="select nama as observer_name
						  	from cco.hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer'";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];
					
					  ?>
<!-- UNTUK EDIT-->
    </a><a href="<? echo "edit_rb.php?kode_edit=edit_inbound&report_by=$report_by&date_eva1=$tgl1&date_eva2=$tgl2&id_qm=$id_qm&full_name=$full_name&spv_name=$spv_name&observer_name=$observname&interaction_date=$interaction_date2&hh=$hh&mm=$mm&observation_date=$observ&week_=$week_&customer_name=$customer_name&interaction_type=$interaction_type&product_type=$product_type&product_detail=$product_detail&product_detail_agent=$product_detail_agent&fcr=$fcr&repeat=$repeat&date_prev_call=$date_prev_call2&prev_agent=$prev_agent&hh_2=$hh_2&mm_2=$mm_2&ss_2=$ss_2&call_activity=$call_activity&call_status=$call_status&drop_call=$drop_call&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&notes6=$notes6&notes7=$notes7&notes8=$notes8&notes9=$notes9&sc1=$q1&sc2=$q2&sc3=$q3&sc4=$q4&sc5=$q5&sc6=$q6&sc7=$q7&sc8=$q8&sc9=$q9&tot1=$save_q1&tot2=$save_q2&tot3=$save_q3&tot4=$save_q4&tot5=$save_q5&tot6=$save_q6&tot7=$save_q7&save_q8=$save_q8&save_q9=$save_q9&userid=$userid&observer=$SES__NIK&date_saved=$date_saved&fe_acc=$sc_fe&sc_nfe=$sc_nfe&total_score=$score_tot&skala=$skala&recommendation=$recommendation&strength_agent=$strength_agent&improved=$improved&action_done_qa=$action_done_qa&action_done_ops=$action_done_ops&file_action_done_qa=$file_action_done_qa&file_action_done_opers=$file_action_done_opers&notes_recording=$notes_recording"; ?>" onclick="return popup(this, 'notes');">
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
					
			if ($repeat=="yes")
			{
			$s_date_prev_call="$date_prev_call"; 
			$s_prev_agent="$prev_agent";
			}
			if ($repeat=="no")
			{
			$s_date_prev_call="-"; 
			$s_prev_agent="-";
			}
			
			$hhtomm1=($hh_handling_time*3600)+($mm_handling_time*60)+($ss_handling_time);
			
		
			?>	
			
			<td><a href="showKalibrasi/show_credit.php?id=<? echo "$id";?>&id_qm=<? echo "$id_qm";?>&agree=<? echo "$agree";?>" onClick="return popup(this, 'notes');">	
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
        echo"      <td>$kalibrasi</td>
					<td>$area</td>
					  <td>$userid</td>
                      <td>$region</td>
					  <td>$lb</td>
						<td>$spv_name</td> 
						<td>$interaction_date</td>
						<td>$observation_date</td>
						<td>$week_</td>
						<td>$customer_name</td>
						<td>$interaction_type</td>
						<td>$product_type</td>
						<td>$product_detail</td>
						<td>$product_detail_agent</td>
						<td>$call_activity</td>
						<td>$hh_handling_time:$mm_handling_time:$ss_handling_time</td>
						<td>$hhtomm1</td>
						<td>$call_status</td>
                      <td>$q1</td>
					  <td>$save_q1</td>
					  <td>$notes1</td>
                      <td>$q2</td>
					  <td>$save_q2</td>
					  <td>$notes2</td>
                      <td>$q3</td>
					  <td>$save_q3</td>
					  <td>$notes3</td>
                      <td>$q4</td>
					  <td>$save_q4</td>
					  <td>$notes4</td>
                      <td>$q5</td>
					  <td>$save_q5</td>
					  <td>$notes5</td>
                      <td>$q6</td>
					  <td>$save_q6</td>
					  <td>$notes6</td>
					  <td>$q7</td>
					  <td>$save_q7</td>
					  <td>$notes7</td>
                      <td>$q8</td>
					  <td>$save_q8</td>
					  <td>$notes8</td>
					  
					  <td>$score_tot</td>
                      <td>$skala</td>
					  <td>$action_done_qa</br></br><a href='upload_path/$file_action_done_qa'>$file_action_done_qa</a></td>
                      <td>$action_done_ops</br></br><a href='upload_path/$file_action_done_ops'>$file_action_done_ops</a></td>";
                      if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){
					  echo"<td>$notes_recording</td>";
					  }
					  echo"<td>$observer_name</td>
                      </tr>";
					  $no++;
					  
						}
						
					

			
					?>
    </a>
  </table>
  <p>Total data : <? echo"$jum_tot"; ?></p>
  <table width="900" border="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th rowspan="2" width="17" class="head0"><div align="center">No</div></th>
      <th rowspan="2" width="36" class="head0"><div align="center">Category</div></th>
      <th rowspan="2" width="205" class="head0"><div align="center">Attributes</div></th>
      <th rowspan="2" width="17" class="head0"><div align="center">Bobot</div></th>
      <th colspan="4" class="head0"><div align="center">Absolute Score</div></th>
      <th colspan="6" class="head0"><div align="center">Scale</div></th>
    </tr>
	<tr>
      <th width="25" class="head0"><div align="center">Y</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
      <th width="25" class="head0"><div align="center">N</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
	  <th width="25" class="head0"><div align="center">1</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
      <th width="25" class="head0"><div align="center">2</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
	  <th width="25" class="head0"><div align="center">3</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
    </tr>	
	</thead>
    <tr>
      <td>1</td>
      <td rowspan="2">Opening</td>
      <td>Greeting with enthusiasm</td>
	  <td>7.5</td>
      <td>
	  <?  
	  //edit hendi
      $queryhendi="[sp_reportqm_email]'table_qm_rb','$tgl1','$tgl2','$report_by','$c_observer','%$nik_agent%','$cc_mentari','$cc_im3','%$kd_unit%','%-%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
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
	  <td colspan="6"></td>
    </tr>
    <tr>
	<td>2</td>
      <td>Purpose to call & Confirmation</td>
      <td>5</td>
	 <td>	
		<?php
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
	  </td>      <td colspan="6"></td>
    </tr>
    <tr>
      <td>3</td>
      <td rowspan="2">Solution</td>
      <td><div style="background-color:#E0E0D1">Input Accuracy Data & Verification Address Customer</div></td>
	  <td>30</td>
      <td colspan="4"></td>
      <td>
		<?  
		  	$q3_tot_s1=$result["q3_s1"];
			echo"$q3_tot_s1";
			
			$q3_avg=$result["avg3"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q3_s1 =($q3_tot_s1/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q3_s1);
		?>
	  </td>
	  <td>
		<?  
		  	$q3_tot_s2=$result["q3_s2"];
			echo"$q3_tot_s2";
		?>
	  </td>
	  <td>
		<?
			$prosen_q3_s2 =($q3_tot_s2/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q3_s2);
		?>
	  </td>
	  <td>
		<?  
		  	$q3_tot_s3=$result["q3_s3"];
			echo"$q3_tot_s3";
		?>
	  </td>
	  <td>
		<?
			$prosen_q3_s3 =($q3_tot_s3/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q3_s3);
		?>
	  </td>
	  </tr>
    <tr>
	<td>4</td>
      <td>Process Compliance/Privacy Policy</td>
      <td>15</td>
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
    <td colspan="6"></td>
	</tr>
    <tr>
      <td>5</td>
      <td>Closing</td>
      <td>Closing Greeting</td>
	  <td>7.5</td>
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
      <td colspan="6"></td>
    </tr>
    <tr>
      <td>6</td>
      <td rowspan="3">Teknis berbicara / Effective Communication</td>
      <td><div style="background-color:#E0E0D1">Hospitality / kesopanan (relate to Manner)</td></td>
	  <td>15</td>
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
      <td colspan="6"></td>
    </tr>
    
    <tr>
	<td>7</td>
      <td>Personalize Communication</td>
      <td>15</td>
	  <td colspan="4"></td>
	      <td>
		<?  
		  	$q7_tot_s1=$result["q7_s1"];
			echo"$q7_tot_s1";
			
			$q7_avg=$result["avg7"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q7_s1 =($q7_tot_s1/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q7_s1);
		?>
	  </td>
	  <td>
		<?  
		  	$q7_tot_s2=$result["q7_s2"];
			echo"$q7_tot_s2";
		?>
	  </td>
	  <td>
		<?
			$prosen_q7_s2 =($q7_tot_s2/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q7_s2);
		?>
	  </td>
	  <td>
		<?  
		  	$q7_tot_s3=$result["q7_s3"];
			echo"$q7_tot_s3";
		?>
	  </td>
	  <td>
		<?
			$prosen_q7_s3 =($q7_tot_s3/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q7_s3);
		?>
	  </td>  
    </tr>
    <tr>
	<td>8</td>
      <td>Not Use jargon</td>
      <td>5</td>
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
		  	$q8_tot_n=$result["q8_no"];
			echo"$q8_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q8_n =($q8_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q8_n);
		?>
	  </td>
	  <td colspan="6"></td>
    </tr>
        
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1" class="table table-bordered table-infinite">
  <tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
  
   
    <tr>
      <td>Handling Time  Average</td>
      <td><?  
					$stot_hh="[sp_handling_credit]'table_qm_rb','$report_by','$tgl1','$tgl2','$kd_unit','$cc_mentari','$cc_im3','%$cc_pp%','%%','%%','%%','%%','%%','%%','%%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala'";
				
	   $r_stot_hh=mssql_query($stot_hh);
	   while($d_stot_hh=mssql_fetch_array($r_stot_hh))
			{
		     	$d_tot_hh=$d_stot_hh["jum_hh"];
		     	$d_tot_mm=$d_stot_hh["jum_mm"];
		     	$d_tot_ss=$d_stot_hh["jum_ss"];
			} 
			$hhtomm=@((($d_tot_hh*3600)+($d_tot_mm*60)+$d_tot_ss)/$jum_tot);
			//echo $hhtomm;
			//echo $d_tot_hh; echo $d_tot_mm; echo $d_tot_ss; 
			//echo $jum_tot;
			
			$iHours1 = Floor($hhtomm / 3600);
					//echo"vvv$iHours1";
					$Minutes1 = Floor(($hhtomm - ($iHours1 * 3600))/ 60) ;
					//echo"dddd$Minutes1";
					$Seconds1 =  ($hhtomm - (($iHours1 * 3600)+($Minutes1 * 60))) ;
					
					echo"$iHours1:$Minutes1:";printf("%1.0f ", $Seconds1);  
			
			//echo"$hms1";
			
		?></td>
    </tr>
    
    <tr>
      <td>Score Average</td>
      <td>
		<?
		  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg;
		  //echo"$score_avg";
		  printf("%1.2f ", $score_avg);
	  ?>
	  </td>
    </tr>
    <tr>
      <td>Evaluation Scale </td>
      <td>
	  <?
	  					if ($score_avg >= 90)
						{
						$skala="A";
						}
						if ($score_avg >= 80 and $score_avg < 90)
						{
						$skala="B";
						}
						if ($score_avg >= 70 and $score_avg < 80)
						{
						$skala="C";
						}
						if ($score_avg >= 60 and $score_avg < 70)
						{
						$skala="D";
						}
						if ($score_avg < 60)
						{
						$skala="E";
						}
echo"$skala";
	  ?></td>
    </tr>
  </table>
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