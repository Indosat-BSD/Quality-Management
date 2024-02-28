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
        <option value="0">Select By</option>
        <?php
			$katahh=array('Departement','Unit','Agent','Observer');
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
          </option>
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
      <td><input name="date_eva1" type="text" id="datepicker" value="<? echo "$date_eva1"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2"/>
      Until
        <input name="date_eva2" type="text" id="datepicker1" value="<? echo "$date_eva2"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2"/></td>
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
      <td><input name="cc_mentari" type="checkbox" id="cc_mentari" value="CCO01" <? if ($cc_mentari=="CCO01") {echo "checked";} else {$cc_mentari='-'; echo "";} ?>/>
      Premium Postpaid & Data Service Contact Center 
      <input name="cc_im3" type="checkbox" id="cc_im3" value="CCO02" <? if ($cc_im3=="CCO02") {echo "checked";} else {$cc_im3='-'; echo "";} ?> />
Other Contact Center 
<input name="cc_pp" type="checkbox" id="cc_pp" value="CCO03" <? if ($cc_pp=="CCO03") {echo "checked";} else {$cc_pp='-'; echo "";} ?>/>
Regular Contact Center 
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
        <option value="" selected="selected">Select All</option>
        <?php
		
include "konek_qm.php";
$q_observerCombo="select DISTINCT a.id_pribadi_observer, z.nama,c.qm
from db_qm.dbo.Table_qm a inner join
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
      <td><input name="nik_agent" type="text" id="nik_agent" value="<? echo"$nik_agent"; ?>"  data-autocomplete="on" data-url="autocomplete-karyawan.php" autocomplete="off"/></td>
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
          
           <option value="CCO" <?php if ($departemen_skala=='CCO') echo 'selected=true' ;?> >All </option>   
		  
		   <option value="CCO01" <?php if ($departemen_skala=='CCO01') echo 'selected=true' ;?> >Premium Postpaid & Data Service Contact Center </option>   
		    <option value="CCO02" <?php if ($departemen_skala=='CCO02') echo 'selected=true' ;?> >Other Contact Center </option>   
		     <option value="CCO03" <?php if ($departemen_skala=='CCO03') echo 'selected=true' ;?>>Regular Contact Center </option>   
		    
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
		  
		  echo "<a class='btn btn-warning' href='report/export_pl.php?cc_mentari=$cc_mentari&cc_im3=$cc_im3&cc_pp=$cc_pp&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&date_eva1=$tgl1&date_eva2=$tgl2&select_region=$select_region&skala=$skala&depart=$departemen_skala&unitSkala=$unit_skala'>export to excel</a>";
		  ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="100%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
    <thead>
      <tr bgcolor="#CCCCCC">
        <th width="1%" rowspan="3" class="head0 nosort"><div align="center">No</div></th>
        <? if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"inbound"){?>
        <th width="1%" rowspan="3" class="head0">Delete</th>
        <th width="1%" rowspan="3" class="head0">Edit</th>
        <? } ?>
		<th width="4%" rowspan="3" class="head0"><div align="center">Validator</div></th>
		<th width="4%" rowspan="3" class="head0"><div align="center">Validation</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Area</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Username</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Region</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Nama</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">TL Name</div></th>
        
		<th width="2%" rowspan="3" class="head0"><div align="center">MSISDN</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Customer Name </div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Date</div></th>
		<th width="2%" rowspan="3" class="head0"><div align="center">Interaction Time</div></th>
		<th width="2%" rowspan="3" class="head0"><div align="center">Observation Date</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Duration</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Week</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Interaction Type</div></th>
        <th width="1%" colspan="2" class="head0"><div align="center">Product Knowledge</div></th>
        <th width="1%" colspan="2" class="head0"><div align="center">Activity Code</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Handling Process </div></th>
        <th width="1%" colspan="2" class="head0"><div align="center">FCR</div></th>
        <th width="1%" colspan="2" class="head0"><div align="center">Repetitive Call</div> </th>
		
        <th colspan="6" class="head0"><div align="center">Personalize Communication after Reborn</div></th>
	 <? if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){?>
        <!-- <th width="7%" rowspan="3" class="head0"><div align="center">Notes sample recording</div></th> -->
	  <? } ?>
        <th width="2%" rowspan="3" class="head0"><div align="center">Observer</div></th>
      </tr>
	  <tr bgcolor="#CCCCCC">
      	  <th rowspan="2" class="head0"><div align="center">Y/N </div></th>
          <th rowspan="2" class="head0"><div align="center">Notes </div></th>
		  
      	  <th rowspan="2" class="head0"><div align="center">Y/N </div></th>
          <th rowspan="2" class="head0"><div align="center">Notes </div></th>		  

		  <th rowspan="2" class="head0"><div align="center">Y/N </div></th>
          <th rowspan="2" class="head0"><div align="center">Notes </div></th>
          
		  <th rowspan="2" class="head0"><div align="center">Y/N </div></th>
          <th rowspan="2" class="head0"><div align="center">Notes </div></th>
		  
          <th colspan="2" class="head0"><div align="center">Antusiasm </div></th>
          <th colspan="2" class="head0"><div align="center">Manner </div></th>
		  <th colspan="2" class="head0"><div align="center">Effective Handling</div></th>
	  </tr>
	  	  <tr bgcolor="#CCCCCC">
      	  <th width="1%" class="head0"><div align="center">Y/N </div></th>
          <th width="3%" class="head0"><div align="center">Notes </div></th>

		  <th width="1%" class="head0"><div align="center">Y/N </div></th>
          <th width="3%" class="head0"><div align="center">Notes </div></th>
          
		  <th width="1%" class="head0"><div align="center">Y/N </div></th>
          <th width="3%" class="head0"><div align="center">Notes </div></th>
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
	if($kd_division!='0' and $kd_departemen=='0' and $report_by=='Unit'){
		$kd_unit = $kd_division;
	}else if($kd_departemen!='0' and $kd_unit=='0' and $report_by=='Unit'){
		$kd_unit = $kd_departemen;
	}
	if($c_observer==""){$obs=0;}else{$obs=$c_observer;}
	//$itung="[sp_count3]'table_qm','$tgl1','$tgl2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$obs','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala'";
	$itung="[sp_count_pl]'$tgl1','$tgl2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$obs','%$nik_agent%','$select_region'";
	// echo $itung;
	 $queryitung=@mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	
	//var_dump($jum_tot);
	//end edit
//echo "$q1_yes_jum";
	  }
	if((isset($searchButton) and $jum_tot<>"0") or ($kd_del=="ok"and $jum_tot<>"0"))
		{
					if($date_eva1 == "" && $date_eva2 == ""){
						echo"<script type='text/javascript'>
						window.alert('Please Insert Date!')
						</script>";
					}else{
					include "konek_qm.php";
					
					//var_dump($skala);
					//$q_user="[sp_search3]'table_qm','$report_by','%$kd_unit%','$tgl1','$tgl2','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala' ";
					$q_user="[sp_search_pl]'$report_by','%$kd_unit%','$tgl1','$tgl2','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$select_region','%$c_observer%','%$nik_agent%'";
					// echo $q_user;
					//echo "456456";
					
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						//$date_saved=$d_user["data_saved"];
						//$spv_name=$d_user["spv_name"];
						$nik_karyawan=$d_user["nik_karyawan"];
						$nama_unit=$d_user["nama_unit"];
						$nama=$d_user["nama"];
						$spv=$d_user["tl_name"];
						$customer_name=$d_user["customer_name"];
						$msisdn=$d_user["msisdn"];
						$interaction_date=$d_user["interaction_date"];
						$interaction_time=$d_user["interaction_time"];
						$int_time=explode(":",$interaction_time);
						$hh_time="$int_time[0]";
						$mm_time="$int_time[1]";
						$observation_date=$d_user["observation_date"];
						//$observ=$d_user["observ"];
						$hh_dur = $d_user["hh_duration"];
						$mm_dur = $d_user["mm_duration"];
						$ss_dur = $d_user["ss_duration"];
						$week_=$d_user["week_"];
						//$jamm = explode (":", $jam);
						//$hh = $jamm[0];
						//$mm = $jamm[1];
						$interaction_type=$d_user["interaction_type"];
						 //$interaction_date2 = $d_user['date'];
						$product_knowledge=$d_user["product_knowledge"];
						$notes_pk=$d_user["notes_pk"];
						$activity_code=$d_user["activity_code"];
						$notes_ac=$d_user["notes_ac"];
						$handling_process=$d_user["handling_process"];
						$fcr=$d_user["fcr"];
						$notes_fcr=$d_user["notes_fcr"];
						$repeat=$d_user["repeat"];
						$notes_repeat=$d_user["notes_repeat"];
						$antusiasm=$d_user["antusiasm"];
						$notes_antusiasm=$d_user["notes_antusiasm"];
						$manner=$d_user["manner"];
						$notes_manner=$d_user["notes_manner"];
						$effective_handling=$d_user["effective_handling"];
						$notes_eh=$d_user["notes_eh"];
						$region=$d_user["region"];
						$id_pribadi_user=$d_user["id_pribadi_user"];
						$id_unit=$d_user["id_unit"];
						$observer=$d_user["id_pribadi_observer"];
						$tl_name=$d_user["tl_name"];
						$id_qm=$d_user["id_qm"];
						$id_kalibrasi=$d_user["id_kalibrasi"];
						$kalibrasi=$d_user["kalibrasi"];
						$agree=$d_user["kalibrasi"];

	
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
    <a href="<? echo "del_group.php?report_by=$report_by&kode_del=detail_pl&id_qm=$id_qm&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&c_observer=$observer"; ?>" onclick="return confirmDelete2();">
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
					</a><a href="<? echo "edit_pl.php?kode_edit=edit_pl&report_by=$report_by&date_eva1=$tgl1
					&date_eva2=$tgl2&id_qm=$id_qm&msisdn=$msisdn&customer_name=$customer_name
					&interaction_date=$interaction_date&hh_2=$hh_dur&mm_2=$mm_dur
					&ss_2=$ss_dur&hh_it=$hh_time&mm_it=$mm_time&week_=$week_&interaction_type=$interaction_type
					&product_knowledge=$product_knowledge&notes_pk=$notes_pk
					&activity_code=$activity_code&notes_ac=$notes_ac&handling_process=$handling_process
					&fcr=$fcr&notes_fcr=$notes_fcr&repetitive_call=$repeat
					&notes_repeat=$notes_repeat&anthusiasm=$antusiasm
					&notes_anthusiasm=$notes_antusiasm&manner=$manner
					&notes_manner=$notes_manner&effective_handling=$effective_handling
					&notes_eh=$notes_eh"; ?>" onclick="return popup(this, 'notes');">
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
			
			<td><!--<a href="showKalibrasi/show_inbound.php?id=<? echo "$id";?>&id_qm=<? echo "$id_qm";?>&agree=<? echo "$agree";?>" onClick="return popup(this, 'notes');">-->	
			<? if ($id_kalibrasi != ""){
					$q_kal="select nama as kalibrasi_name
						  	from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
					$r_kal=mssql_query($q_kal);
					while($d_kal=mssql_fetch_array($r_kal))
						{
						$kalibrasi_name=$d_kal["kalibrasi_name"];
					}
						echo $kalibrasi_name; 
						
				}?></td>
					  
         <? 	  
        /*echo"       <td>$kalibrasi</td>  
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
						<td>$repeat</td>
						<td>$s_date_prev_call</td>
						<td>$s_prev_agent</td>
						<td>$hh_handling_time:$mm_handling_time:$ss_handling_time</td>
						<td>$hhtomm1</td>
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
                      <td>$q9</td>
					  <td>$save_q9</td>
					  <td>$notes9</td>
                      <td>$q10</td>
					  <td>$save_q10</td>
					  <td>$notes10</td>
                      <td>$q11</td>
					  <td>$save_q11</td>
					  <td>$notes11</td>
                      <td>$q12</td>
					  <td>$save_q12</td>
					  <td>$notes12</td>
					  <td>$score_tot</td>
					  <td>$skala</td>
					  <td>$strength_agent</td>
                      <td>$improved</td>
                      <td>$recommendation</td>
                      <td>$action_done_qa</br></br><a href='upload_path/$file_action_done_qa'>$file_action_done_qa</a></td>
                      <td>$action_done_ops</br></br><a href='upload_path/$file_action_done_ops'>$file_action_done_ops</a></td>";*/
					 echo"
						<td>$kalibrasi</td>  
						<td>$nama_unit</td>
						<td>$nik_karyawan</td>
						<td>$region</td>
						<td>$nama</td>
						<td>$spv</td>
						<td>$msisdn</td>
						<td>$customer_name</td>
					 	<td>$interaction_date</td>
						<td>$interaction_time</td>
						<td>$observation_date</td>
						<td>$hh_dur:$mm_dur:$ss_dur</td>
						<td>$week_</td>
						<td>$interaction_type</td>
						<td>$product_knowledge</td>	
						<td>$notes_pk</td>	
						<td>$activity_code</td>	
						<td>$notes_ac</td>	
						<td>$handling_process</td>	
						<td>$fcr</td>	
						<td>$notes_fcr</td>	
						<td>$repeat</td>
						<td>$notes_repeat</td>
						<td>$antusiasm</td>	
						<td>$notes_antusiasm</td>
						<td>$manner</td>	
						<td>$notes_manner</td>
						<td>$effective_handling</td>
						<td>$notes_eh</td>";
                      /*if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){
					  echo"<td>$notes_recording</td>";
					  }*/
					  echo"<td>$observer_name</td>
                      </tr>";
					  $no++;
					  
					}
						
					?>
    </a>
  </table>
  <p>Total Data : <? echo"$jum_tot"; ?></p>
<table width="436" border="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="5" class="head0"><div align="center">No</div></th>
      <th width="242" class="head0"><div align="center">Attributes</div></th>
      <th width="30" class="head0"><div align="center">Y</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
      <th width="30" class="head0"><div align="center">N</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
    </tr>
	</thead>
    <tr>
      <td>1</td>
      <td>Product Knowledge</td>

      <td>
		<?  
		  //$queryhendi="[sp_reportqm_inbound]'table_qm','$tgl1','$tgl2','$report_by','$c_observer','%$nik_agent%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala',''";
		  $query_rpt="[sp_reportqm_pl]'$tgl1','$tgl2','$report_by','%$c_observer%','%$nik_agent%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','%$kd_unit%','%%','$select_region'";
		  $proses=mssql_query($query_rpt);
		  $result=mssql_fetch_array($proses);
		  
		//echo $query_rpt;

			$pk_tot_y=$result["pk_yes"];
			echo"$pk_tot_y";
			
			//$q1_avg=$result["avg1"];
			
		?>
	  </td>
	  <td>
		<?
			$prosen_pk_y =($pk_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_pk_y);
		?>
	  </td>
	  <td>
		<?  
		  	$pk_tot_n=$result["pk_no"];
			echo"$pk_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_pk_n =($pk_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_pk_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Activity Code</td>
      <td>
		<?  
		  	$ac_tot_y=$result["ac_yes"];
			echo"$ac_tot_y";
			
			//$q3_avg=$result["avg3"];
		?>
	  </td>
	  <td>
		<?
			$prosen_ac_y =($ac_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_ac_y);
		?>
	  </td>
	  <td>
		<?  
		  	$ac_tot_n=$result["ac_no"];
			echo"$ac_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_ac_n =($ac_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_ac_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>3</td>
      <td>FCR </td>
      <td>
		<?  
		  	$fcr_tot_y=$result["fcr_yes"];
			echo"$fcr_tot_y";
			
			//$q3_avg=$result["avg3"];
		?>
	  </td>
	  <td>
		<?
			$prosen_fcr_y =($fcr_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_fcr_y);
		?>
	  </td>
	  <td>
		<?  
		  	$fcr_tot_n=$result["fcr_no"];
			echo"$fcr_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_fcr_n =($fcr_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_fcr_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>4</td>
      <td>Repetitive Call</td>

      <td>
		<?  
		  	$rpt_tot_y=$result["repeat_yes"];
			echo"$rpt_tot_y";
			
			//$q7_avg=$result["avg7"];
		?>
	  </td>
	  <td>
		<?
			$prosen_rpt_y =($rpt_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_rpt_y);
		?>
	  </td>
	  <td>
		<?  
		  	$rpt_tot_n=$result["repeat_no"];
			echo"$rpt_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_rpt_n =($rpt_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_rpt_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>5</td>
      <td>Antusiasm</td>

      <td>
		<?  
		  	$antusiasm_tot_y=$result["antusiasm_yes"];
			echo"$antusiasm_tot_y";
			
			//$q8_avg=$result["avg8"];
		?>
	  </td>
	  <td>
		<?
			$prosen_antusiasm_y=($antusiasm_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_antusiasm_y);
		?>
	  </td>
	  <td>
		<?  
		  	$antusiasm_tot_n=$result["antusiasm_no"];
			echo"$antusiasm_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_antusiasm_n =($antusiasm_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_antusiasm_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>6</td>
      <td>Manner</td>
      <td>
		<?  
		  	$manner_tot_y=$result["manner_yes"];
			echo"$manner_tot_y";
			
			//$q10_avg=$result["avg10"];
		?>
	  </td>
	  <td>
		<?
			$prosen_manner_y =($manner_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_manner_y);
		?>
	  </td>
	  <td>
		<?  
		  	$manner_tot_n=$result["manner_no"];
			echo"$manner_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_manner_n =($manner_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_manner_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>7</td>
      <td>Effective Handling</td>

      <td>
		<?  
		  	$eh_tot_y=$result["eh_yes"];
			echo"$eh_tot_y";
			
			//$q11_avg=$result["avg11"];
		?>
	  </td>
	  <td>
		<?
			$prosen_eh_y =($eh_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_eh_y);
		?>
	  </td>
	  <td>
		<?  
		  	$eh_tot_n=$result["eh_no"];
			echo"$eh_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_eh_n =($eh_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_eh_n);
		?>
	  </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1" class="table table-bordered table-infinite">
  <?  
	  		if ($select_region !="") {
	  			if ($report_by=="Unit")
				  	{
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_pl a
					   inner join cco.hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					   where b.region ='$select_region' and repeat='yes' 
					   and a.id_unit like '%$kd_unit%' and  convert(varchar,a.observation_date,112) between '$tgl1' and '$tgl2'";
	   				}
	  			if ($report_by=="Departement")
				  	{	
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_pl a 
					  inner join cco.hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					  where b.region ='$select_region' and repeat='yes'
					  and (a.id_unit like '%$cc_mentari%' or a.id_unit like '%$cc_im3%' or a.id_unit like '%$cc_pp%')
					  and  convert(varchar,a.observation_date,112) between '$tgl1' and'$tgl2'"; 
					}
			}
			else {
	  			if ($report_by=="Unit")
				  	{
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_pl a 
					   inner join cco.hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					   where repeat='yes' 
					   and a.id_unit like '%$kd_unit%' and  convert(varchar,a.observation_date,112) between '$tgl1' and '$tgl2'";
	   				}
	  			if ($report_by=="Departement")
				  	{	
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_pl a 
					  inner join cco.hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					  where repeat='yes'
					  and (a.id_unit like '%$cc_mentari%' or a.id_unit like '%$cc_im3%' or a.id_unit like '%$cc_pp%')
					  and  convert(varchar,a.observation_date,112) between '$tgl1' and'$tgl2'"; 
					}
			}		
	  			if ($report_by=="Observer")
				  	{
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_pl a
					  			inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
					  			where repeat='yes' and  cast(id_data_pribadi as varchar)='$c_observer'
					  			and  convert(varchar,a.observation_date,112) between '$tgl1' and '$tgl2'";  
					}
					
	  			if ($report_by=="Agent")
				  	{	
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_pl a
					  			 inner join cco.hrms.dbo.tb_data_pribadi z on a.id_pribadi_user=cast(id_data_pribadi as varchar)
					  			where repeat='yes' and  (z.nik_karyawan like '%$nik_agent%' or z.nama like '%$nik_agent%')
					  			and  convert(varchar,a.observation_date,112) between '$tgl1' and '$tgl2'";   
					}
					if ($report_by=="Skala")
				  	{	
					  /*$stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm a with(nolock) inner join db_qm.dbo.table_qm_detail b 
with(nolock) on a.id_qm=b.id_qm where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112) 
between '$tgl1' and '$tgl2' and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%' AND a.id_qm in( select id_qm from 
( select a.id_qm,b.repeat, 
case when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 90 then 'A' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 80 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 90 then 'B' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 70 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 80 then 'C' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 60 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 70 then 'D' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14) 
< 60 then 'E' end 'Skala' from db_qm.dbo.table_qm a with(nolock) 
inner join db_qm.dbo.table_qm_detail b with(nolock) on a.id_qm=b.id_qm
 where a.status_save='complete' and convert(varchar,a.date_saved,112) 
  between '$tgl1' and '$tgl2' and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%'
   and b.repeat='yes' group by a.id_qm,b.repeat ) AA where Skala like '%$skala' )
";   */
					}
				//echo $stot_fcr;
				//echo $stot_rep;
	   
		    $r_stot_rep=mssql_query($stot_rep);
		    while($d_stot_rep=mssql_fetch_array($r_stot_rep))
			{
				$rep_tot_y=$d_stot_rep["jum_s_rep"];
			} 			
		?>
	<tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
	<tr>
      <td width="180">Total FCR</td>
      <td width="68">
		<? $fcr_tot_y=$result["fcr_yes"];
		   echo"$fcr_tot_y";
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">%FCR</td>
      <td width="68">
		<?  
			$fcr_tot_n=$result["fcr_yes"];
			//$prosen_q6_n =($q6_tot_n/$jum_tot)*100 ;
			//$prosen_end=100-$prosen_q6_n;
			$has=($fcr_tot_n/$jum_tot)*100;
			//echo "jum : $jum_tot rep : $rep_tot_y fcr : $fcr_tot_n $has";
			printf("%1.2f ", $has);
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">Total Repetitive Call</td>
      <td width="68">
		<?  
	  				
				echo"$rep_tot_y";
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">% Repetitive Call</td>
      <td width="68">
		<?  		
			$rpt_tot_n=$result["repeat_yes"];
			//$prosen_q6_n =($q6_tot_n/$jum_tot)*100 ;
			//$prosen_end=100-$prosen_q6_n;
			$has=($rpt_tot_n/$jum_tot)*100;
			//echo "jum : $jum_tot rep : $rep_tot_y fcr : $fcr_tot_n $has";
			printf("%1.2f ", $has);
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">% Product Knowledge Accuration</td>
      <td width="68">
		<?  
	  		$pk_tot_y=$result["pk_yes"];
			//$prosen_q6_n =($q6_tot_n/$jum_tot)*100 ;
			//$prosen_end=100-$prosen_q6_n;
			$has=($pk_tot_y/$jum_tot)*100;
			//echo "jum : $jum_tot rep : $rep_tot_y fcr : $fcr_tot_n $has";
			printf("%1.2f ", $has);
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">Average Handling Time</td>
      <td width="68">
		<?  
			//$stot_hh="[sp_handling3]'table_qm','$report_by','$tgl1','$tgl2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala'";
			$stot_hh="[sp_handling_pl]'$report_by','$tgl1','$tgl2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
			//echo "$stot_hh";	
		    $r_stot_hh=mssql_query($stot_hh);
		    while($d_stot_hh=mssql_fetch_array($r_stot_hh))
			{
				$d_tot_hh=$d_stot_hh["jum_hh"];
				$d_tot_mm=$d_stot_hh["jum_mm"];
				$d_tot_ss=$d_stot_hh["jum_ss"];
			} 
			$hhtomm=(($d_tot_hh*3600)+($d_tot_mm*60)+$d_tot_ss)/$jum_tot;
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
			
		?>
	  </td>
    </tr>
  </table>
  <?
  		//echo "jum : $jum_tot rep : $rep_tot_y fcr : $fcr_tot_n has $has";?>
					<p><?} }?></p>
</form>
</body>
</html>
<? 
}
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