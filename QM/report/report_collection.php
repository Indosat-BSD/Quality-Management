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
   return false;}
   function popup2(mylink, windowname)
{

newwindow=window.open(mylink,name,'width=1200,height=600,toolbar=0,menubar=0,location=0,scrollbars=yes');  
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
	<!--<tr>
      <td>Status Report</td>
      <td>
		<select name="st_rep" class="box" id="st_rep" onchange="satu.submit()"/>
		  <?php
		  // echo "
		  // <option value=3",3==$st_rep?" selected":"",">Data Baru</option>
		  // <option value=2",2==$st_rep?" selected":"",">Data Lama</option>
		  // ";
		  // echo"Status Report : $st_rep";
		  ?>
	  </td>
    </tr>-->
	<? $st_rep=4; ?>
    <tr class="content">
      <td>Report By </td>
      <td><select name="report_by" id="report_by" class="box" onchange="satu.submit()">
        <option value="0">Select By</option>
        <?php
			$katahh=array('New Report','Departement','Unit','Agent','Observer','Skala');
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
      <td><? if ($report_by=="New Report"){?></td>
      <td>&nbsp;</td>
    </tr>
	<tr class="content">
      <td></td>
      <td>
		  <label><input type="radio" name="tipe_report" value="summary" class="box" <?=($tipe_report=='summary')?'checked':''?>> Summary</label><br>
		  <label><input type="radio" name="tipe_report" value="detail" class="box" <?=($tipe_report=='detail')?'checked':''?>> Detail</label><br>
	  </td>
    </tr>
    <tr class="content">
      <td>Date</td>
      <td><input name="date_eva1" type="text" id="datepicker" value="<? echo "$date_eva1"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" />
      Until
        <input name="date_eva2" type="text" id="datepicker1" value="<? echo "$date_eva2"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" /></td>
    </tr>
    <tr class="content">
      <td><? } else if ($report_by=="Unit"){?></td>
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
          <option value="" selected="selected">Unit Name</option>
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
        <option value="" selected="selected">Select All</option>
        <?php
		
include "konek_qm.php";
$q_observerCombo="select DISTINCT a.id_pribadi_observer, z.nama,c.qm
from db_qm.dbo.Table_qm_collection a inner join
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
      <td><? } if ($report_by=="Agent"){?></td>
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
      <td><? }?></td>
      <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td>&nbsp;</td>
      
       <?  if ($report_by=="Skala"){?>
      	
      </td>
      <td>&nbsp;</td>
    </tr>
     <tr class="content">
      <td width="10%">Department</td>
      <td><select name="departemen_skala" id="select" class="box" onchange="satu.submit()"  >
           <option value="CCC" <?php if ($departemen_skala=='CCC') echo 'selected=true' ;?> >All </option> 
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
      <td><input name="searchButton" type="submit" id="searchButton" value="Search"  class="btn btn-primary"/>
          <?
		  $tgl1 = date('Ymd',strtotime($date_eva1));
		  $tgl2 = date('Ymd',strtotime($date_eva2));
		  
		  $rtgl1 = date('d/m/Y',strtotime($date_eva1));
		  $rtgl2 = date('d/m/Y',strtotime($date_eva2));			  
		  
		  echo "<a class='btn btn-warning' href='report/export_collection.php?st_rep=$st_rep&cc_mentari=$cc_mentari&cc_im3=$cc_im3&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&date_eva1=$tgl1&date_eva2=$tgl2&select_region=$select_regionn&skala=$skala&depart=$departemen_skala&unitSkala=$unit_skala&tipe_report=$tipe_report'>export to excel</a>";
		  ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <?
	include "konek_qm.php";
	if($c_observer==""){$obs=0;}else{$obs=$c_observer;}
	if ($date_eva1 != "" && $date_eva2 != "") {
	 if($kd_division!='0' and $kd_departemen=='0' and $report_by=='Unit'){
		$kd_unit = $kd_division;
	 }else if($kd_departemen!='0' and $kd_unit=='0' and $report_by=='Unit'){
		$kd_unit = $kd_departemen;
	 }
	$itung="[sp_count_colection]'table_qm_collection','$tgl1','$tgl2','$report_by','%$kd_unit%','$cc_mentari','$cc_im3','$obs','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	//echo $itung;
	//end edit
//echo "$q1_yes_jum";
	 } 
  if((isset($searchButton) and $jum_tot<>"0") or ($kd_del=="ok"and $jum_tot<>"0")){
if($report_by!='New Report'){	  ?>
  
  <table width="368%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="1%" rowspan="3" class="head0 nosort"><div align="center">No</div></th>
	  <? if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"collection"){?> 
			<th width="4%" rowspan="3" class="head0">Delete</th>
			<th width="4%" rowspan="3" class="head0">Edit</th>
		<? }?>
	  <th width="4%" rowspan="3" class="head0"><div align="center">Validator</div></th>
	  <th width="4%" rowspan="3" class="head0"><div align="center">Validation</div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Unit Kerja</div></th>
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
      <th rowspan="3" class="head0">Handling Time (second) </th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Call Status </div></th>
	  <th colspan="6" class="head0"><div align="center">Opening</div></th>
      <th colspan="3" class="head0"><div align="center">Solution</div></th>
      <th colspan="3" class="head0"><div align="center">Accuracy Data</div></th>
      <th colspan="3" class="head0"><div align="center">Closing Agreement</div></th>
	  <th colspan="6" class="head0"><div align="center">Effective Communication</div></th>
	  <th colspan="3" class="head0"><div align="center">Telephony Manner</div></th>
	  <th rowspan="3" class="head0"><div align="center">Total Score</div></th>
	  <th rowspan="3" class="head0"><div align="center">Skala</div></th>
	  <!-- end edit -->
	 <? if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){?>
      <th width="7%" rowspan="3" class="head0"><div align="center">Notes sample recording</div></th>
	  <? } ?>	  
	  <th rowspan="3" class="head0"><div align="center">Observer</div></th>
    </tr>
	<tr bgcolor="#CCCCCC">
      <th colspan="3" class="head0"><div align="center">Greeting with enthusiasm</div></th>
      <th colspan="3" class="head0"><div align="center">Purpose to call & Confirmation</div></th>
      <th colspan="3" class="head0"><div align="center">Correct Solution & Information</div></th>
      <th colspan="3" class="head0"><div align="center">Input Accuracy Data</div></th>
	  <th colspan="3" class="head0"><div align="center">Reconfirm the Agreement & Closing Greeting</div></th>	  
	  <th colspan="3" class="head0"><div align="center">Hospitality (relate to Manner)</div></th>
	  <th colspan="3" class="head0"><div align="center">Personalize Communication</div></th>
	  <th colspan="3" class="head0"><div align="center">Hold/Transfer/Routing/Callback Technique</div></th>
    </tr>
	  
	  <!-- edit hendi -->
	  
      
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
					
					$q_user="[sp_search_colection]'table_qm_collection','$report_by','%$kd_unit%','$tgl1','$tgl2','$cc_mentari','$cc_im3','%$c_observer%','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
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
						$status_save=$d_user["status_save"];
						$observer=$d_user["observer"];
						
						$nama_unit=$d_user["nama_unit"];
						$id_kalibrasi=$d_user["id_kalibrasi"];
						$kalibrasi=$d_user["kalibrasi"];
						$agree=$d_user["kalibrasi"];
						$notes_recording=$d_user["notes_recording"];
						$nama_unit=$d_user["nama_unit"];
						
						$notes1=$d_user["notes1"];
						$notes2=$d_user["notes2"];
						$notes3=$d_user["notes3"];
						$notes4=$d_user["notes4"];
						$notes5=$d_user["notes5"];
						$notes6=$d_user["notes6"];
						$notes7=$d_user["notes7"];
						$notes8=$d_user["notes8"];
						

 					 	$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8;
						if ($total_score >= 90)
						{
						$skala="A";
						}
						if ($total_score >= 80 and $total_score < 90)
						{
						$skala="B";
						}
						if ($total_score >= 70 and $total_score < 80)
						{
						$skala="C";
						}
						if ($total_score >= 60 and $total_score < 70)
						{
						$skala="D";
						}
						if ($total_score < 60)
						{
						$skala="E";
						}                     
					 echo "<tr class='content'>
                      <td>$no</td>";
					  if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"collection"){
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
					  <a href="<? echo "del_group.php?report_by=$report_by&kode_del=detail_collection&id_qm=$id_qm&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&c_observer=$observer&st_rep=$st_rep"; ?>" onclick="return confirmDelete2();">
					  <?
					  	 echo "delete</a></td>";
						 echo "<td>";
						  $q="select nama as observer_name
						  	from cco.hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer'";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];
					  ?>
					  <a href="<? echo "edit_newcollection.php?id_qm=$id_qm&full_name=$full_name&observer_name=$observname&observation_date=$observ&total_score=$total_score&skala=$skala"; ?>"onClick="return popup(this, 'notes');">
					  <?
					  	 echo "Edit</a></td>";
						 		
						 }		  						 
//
					$q_user1="select nama as observer_name
						  	from cco.hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer' ";
					//echo "$q_user";
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

   		  
					<td><a href="showKalibrasi/show_collection.php?id=<? echo "$id";?>&id_qm=<? echo "$id_qm";?>&agree=<? echo "$agree";?>" onClick="return popup(this, 'notes');">
					<? if ($id_kalibrasi != ""){
					$q_kal="select nama as kalibrasi_name from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
					$r_kal=mssql_query($q_kal);
					while($d_kal=mssql_fetch_array($r_kal))
						{
						$kalibrasi_name=$d_kal["kalibrasi_name"];
					}
						echo $kalibrasi_name; 
						
					}?> </td>
					  
         <? 
  
        echo"         <td>$kalibrasi</td>
					  <td>$nama_unit</td>
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
					  <td>$total_score</td>
                      <td>$skala</td>";
                      if ($SES_KODE_LEVEL!="mitra"){
					  echo"<td>$notes_recording</td>";
					  }
					  echo"<td>$observer_name</td>					  
                      </tr>";
					  $no++;
					  
						}
						
					

			
					?> </a>
  </table>
  <p>Total data : <? echo"$jum_tot"; ?></p>
  
  <table width="568" border="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th rowspan="2" width="17" class="head0"><div align="center">No</div></th>
      <th rowspan="2" width="36" class="head0"><div align="center">Category</div></th>
      <th rowspan="2" width="205" class="head0"><div align="center">Attributes</div></th>
	  <th rowspan="2" width="17" class="head0"><div align="center">Bobot</div></th>
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
      <td rowspan="2">Opening</td>
      <td>Greeting with enthusiasm</td>
	  <td>5</td>
      <td>
		<?
			//echo"daniel : $c_observer";		
		  $queryhendi="[sp_reportqm_newcolection]'table_qm_collection','$tgl1','$tgl2','$report_by','%$c_observer%','%$nik_agent%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala','4'";
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
	 <td></td>
      <td>Purpose to call & Confirmation</td>
	  <td>5</td>
	  <td>
		<?  
		  	$q2_tot_y=$result["q2_yes"];
			echo"$q2_tot_y";
			
			$q2_avg=$result["avg2"];
		?>
		</td>
	  <td><?
			$prosen_q2_y =($q2_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q2_y);
		?> </td>
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
      <td>2</td>
      <td>Solution</td>
      <td>Correct Solution & Information</td>
	  <td>30</td>
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
      <td>3</td>
      <td >Accuracy Data</td>
      <td>Input Accuracy Data</td>
	  <td>10</td>
	 <td>
		<?  
		  	$q4_tot_y=$result["q4_yes"];
			echo"$q4_tot_y";
			
			$q4_avg=$result["avg4"];
		?>
		</td>
	  <td><?
			$prosen_q4_y =($q4_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q4_y);
		?> </td>
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
      <td>4</td>
      <td>Closing Agreement</td>
      <td>Reconfirm the Agreement & Closing Greeting</td>
	  <td>15</td>
	  <td>
		<?  
		  	$q5_tot_y=$result["q5_yes"];
			echo"$q5_tot_y";
			
			$q5_avg=$result["avg5"];
		?>
		</td>
	  <td><?
			$prosen_q5_y =($q5_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q5_y);
		?> </td>
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
    <tr>
	 <td>5</td>
      <td rowspan="2">Effective Communication</td>
	  <td>Hospitality (relate to Manner)</td>
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
    </tr> 
<tr>	
      <td></td>
      <td>Personalize Communication</td>
	  <td>15</td>
      <td>
		<?  
		  	$q7_tot_y=$result["q7_yes"];
			echo"$q7_tot_y";
			
			$q7_avg=$result["avg7"];
		?>
		</td>
	  <td><?
			$prosen_q7_y =($q7_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q7_y);
		?> </td>
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
    </tr> 
<tr>	
      <td></td>
      <td>Telephony Manner</td>
	  <td>Hold/Transfer/Routing/Callback Technique</td>
	  <td>5</td>
      <td>
		<?  
		  	$q8_tot_y=$result["q8_yes"];
			echo"$q8_tot_y";
			
			$q8_avg=$result["avg8"];
		?>
		</td>
	  <td><?
			$prosen_q8_y =($q8_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q8_y);
		?> </td>
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
</tr>   
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1" class="table table-bordered table-infinite">
	<tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
	<tr>
      <td width="180">Handling Time Average</td>
      <td width="68">
		<?  
			$stot_hh="[sp_handling_collection]'table_qm_collection','$report_by','$tgl1','$tgl2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','4'";
			//echo"$stot_hh";
				
		    $r_stot_hh=mssql_query($stot_hh);
		    while($d_stot_hh=mssql_fetch_array($r_stot_hh))
			{
				$d_tot_hh=$d_stot_hh["jum_hh"];
				$d_tot_mm=$d_stot_hh["jum_mm"];
				$d_tot_ss=$d_stot_hh["jum_ss"];
			} 
			$hhtomm=(($d_tot_hh*3600)+($d_tot_mm*60)+$d_tot_ss)/$jum_tot;
			$dc=$d_tot_mm /$jum_tot;
			//echo"danil :$jum_tot | $d_tot_mm|$dc|$hhtomm|";
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
	<tr>
      <td width="180">Average Score</td>
      <td width="68">
		<?
		  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg;
		  //echo"$score_avg";
		  //echo"$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg";
		  printf("%1.2f ", $score_avg);
	  ?>
	  </td>
    </tr>
	<tr>
      <td width="180">Evaluation Scale</td>
      <td width="68">
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
		?>
	  </td>
    </tr>
  </table>
  	<?
 }else if($report_by=='New Report' and $tipe_report!=''){

  if($tipe_report=='summary'){ 
	//edit hendi
	$queryhendi="[sp_reportqm_email]'table_qm_collection','$tgl1','$tgl2','$report_by','$c_observer','%$nik_agent%','$cc_mentari','$cc_im3','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";

	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
	  //echo $queryhendi;
      //end edit
	
			$q1_tot_y=$result["q1_yes"];
	  		$q2_tot_y=$result["q2_yes"];
	  		$q3_tot_y=$result["q3_yes"];
		  	$q4_tot_y=$result["q4_yes"];
		  	$q5_tot_y=$result["q5_yes"];
		  	$q6_tot_y=$result["q6_yes"];
		  	$q7_tot_y=$result["q7_yes"];
		  	$q8_tot_y=$result["q8_yes"];
			
		  	$q1_tot_n=$result["q1_no"];
		  	$q2_tot_n=$result["q2_no"];
		  	$q3_tot_n=$result["q3_no"];
		  	$q4_tot_n=$result["q4_no"];
		  	$q5_tot_n=$result["q5_no"];
		  	$q6_tot_n=$result["q6_no"];
		  	$q7_tot_n=$result["q7_no"];
		  	$q8_tot_n=$result["q8_no"];
			
			$q1_avg=$result["avg1"];
			$q2_avg=$result["avg2"];
			$q3_avg=$result["avg3"];
			$q4_avg=$result["avg4"];
			$q5_avg=$result["avg5"];
			$q6_avg=$result["avg6"];
			$q7_avg=$result["avg7"];
			$q8_avg=$result["avg8"];
			
			$prosen_q1_y =($q1_tot_y/$jum_tot)*100 ;
			$prosen_q2_y =($q2_tot_y/$jum_tot)*100 ;
			$prosen_q3_y =($q3_tot_y/$jum_tot)*100 ;
			$prosen_q4_y =($q4_tot_y/$jum_tot)*100 ;
			$prosen_q5_y =($q5_tot_y/$jum_tot)*100 ;
			$prosen_q6_y =($q6_tot_y/$jum_tot)*100 ;
			$prosen_q7_y =($q7_tot_y/$jum_tot)*100 ;
			$prosen_q8_y =($q8_tot_y/$jum_tot)*100 ;
			
			$prosen_q1_n =($q1_tot_n/$jum_tot)*100 ;
			$prosen_q2_n =($q2_tot_n/$jum_tot)*100 ;
			$prosen_q3_n =($q3_tot_n/$jum_tot)*100 ;
			$prosen_q4_n =($q4_tot_n/$jum_tot)*100 ;
			$prosen_q5_n =($q5_tot_n/$jum_tot)*100 ;
			$prosen_q6_n =($q6_tot_n/$jum_tot)*100 ;
			$prosen_q7_n =($q7_tot_n/$jum_tot)*100 ;
			$prosen_q8_n =($q8_tot_n/$jum_tot)*100 ;				
	?>
	
<h4 class="widgettitle">Chart Collection</h4>
<div class="widgetcontent">
<?php
$chartdatay = round($prosen_q1_y).','.round($prosen_q2_y).','.round($prosen_q3_y).','.round($prosen_q4_y).','.round($prosen_q5_y).','.round($prosen_q6_y).','.round($prosen_q7_y).','.round($prosen_q8_y);
$chartdatan = round($prosen_q1_n).','.round($prosen_q2_n).','.round($prosen_q3_n).','.round($prosen_q4_n).','.round($prosen_q5_n).','.round($prosen_q6_n).','.round($prosen_q7_n).','.round($prosen_q8_n);
//echo"$chartdatay<br>$chartdatan";
?>

<div id="containerdc" style="min-width: 310px; height: 600px; margin: 0 auto;"></div>
<script type="text/javascript">
    Highcharts.chart('containerdc', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'REPORT COLLECTION'
        },
        subtitle: {
            text: 'Periode <b><?=$rtgl1;?></b> To <b><?=$rtgl2;?></b>'
        },
        xAxis: {
            categories: [
                'Greeting with enthusiasm',
                'Purpose to call & Confirmation',
                'Correct Solution & Information',
                'Input Accuracy Data',
                'Reconfirm the Agreement & Closing Greeting',
                'Hospitality (relate to Manner)',
                'Personalize Communication',
                'Hold/Transfer/Routing/Callback Technique'
            ],
            crosshair: true,
			title: {
                enabled: true,
                text: 'ATTRIBUTES',
				align:'middle',
                style: {
                    fontWeight: 'Bold',
					color:'black'
                }
			}
        },
        yAxis: {
            min: 0,
            title: {
                text: 'PERCENTAGE (%)',
				style: {
                    fontWeight: 'Bold',
					color:'black'
                }
            },
			stackLabels: {
                enabled: true
            }
        },
		 legend: {
            layout: 'horizontal',
            align: 'right',
            verticalAlign: 'top',
            y: 50,
            padding: 3,
            itemMarginTop: 5,
            itemMarginBottom: 5,
            itemStyle: {
                lineHeight: '14px'
            }
        },
        tooltip: {
            headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
            pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                '<td style="padding:0"><b>{point.y:.1f} %</b></td></tr>',
            footerFormat: '</table>',
            shared: true,
            useHTML: true
        },
        plotOptions: {
            column: {
                pointPadding: 0.2,
                borderWidth: 0,
				dataLabels: {
                    enabled: true,
					formatter:function() {
                    var pcnt = (this.y );
                    return pcnt + '%';
                }
                }
            }
        },
        series: [{
			color:'green',
            name: 'Yes',
            data: [<?=$chartdatay;?>]

        }, {
			color:'#dd0000',
            name: 'No',
            data: [<?=$chartdatan;?>]
		}]
    });
</script>
</div>
<?php }?>
<!--HEADER-->
	<table id="dyntable" width="290%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
		<thead>
		<!--baris ke 1-->
		<tr bgcolor="#CCCCCC">
		  <th width="10%" rowspan="3" class="head0"><div align="center">No</div></th>
		  <th width="10%" rowspan="3" class="head0"><div align="center">NIK</div></th>
		  <th width="10%" rowspan="3" class="head0"><div align="center">Nama</div></th>
		  <th width="10%" rowspan="3" class="head0"><div align="center">Unit Kerja</div></th>
		  <?php if($tipe_report=='detail'){ ?>
		  <th width="10%" rowspan="3" class="head0"><div align="center">Periode</div></th>
		  <?php }?>
		  
		  <th colspan="4" class="head0"><div align="center">Opening</div></th>
		  <th colspan="2" class="head0"><div align="center">Solution</div></th>
		  <th colspan="2" class="head0"><div align="center">Accuracy Data</div></th>
		  <th colspan="2" class="head0"><div align="center">Closing Agreement</div></th>
		  <th colspan="4" class="head0"><div align="center">Effective Communication</div></th>
		  <th colspan="2" class="head0"><div align="center">Telephony Manner</div></th>
		  
		  <th width="4%" colspan="4" rowspan="2" class="head0"><div align="center">Total</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">Score</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">NOE</div></th>
		</tr>
		<!--baris ke 2-->
		
		<tr bgcolor="#CCCCCC">
		  <th colspan="2" class="head0"><div align="center">Greeting with enthusiasm</div></th>
		  <th colspan="2" class="head0"><div align="center">Purpose to call & Confirmation</div></th>
		  <th colspan="2" class="head0"><div align="center">Correct Solution & Information</div></th>
		  <th colspan="2" class="head0"><div align="center">Input Accuracy Data</div></th>
		  <th colspan="2" class="head0"><div align="center">Reconfirm the Agreement & Closing Greeting</div></th>
		  <th colspan="2" class="head0"><div align="center">Hospitality (relate to Manner)</div></th>
		  <th colspan="2" class="head0"><div align="center">Personalize Communication</div></th>
		  <th colspan="2" class="head0"><div align="center">Hold/Transfer/Routing/Callback Technique</div></th>
		</tr>
		<!--baris ke 3-->
		<tr bgcolor="#CCCCCC">
		  <th class="head0"><div align="center">Y</div></th>
		  <th class="head0"><div align="center">N</div></th>
		  
		  <th class="head0"><div align="center">Y</div></th>
		  <th class="head0"><div align="center">N</div></th>
		  
		  <th class="head0"><div align="center">Y</div></th>
		  <th class="head0"><div align="center">N</div></th>
		  
		  <th class="head0"><div align="center">Y</div></th>
		  <th class="head0"><div align="center">N</div></th>
		  
		  <th class="head0"><div align="center">Y</div></th>
		  <th class="head0"><div align="center">N</div></th>
		  
		  <th class="head0"><div align="center">Y</div></th>
		  <th class="head0"><div align="center">N</div></th>
		  
		  <th class="head0"><div align="center">Y</div></th>
		  <th class="head0"><div align="center">N</div></th>
		  
		  <th class="head0"><div align="center">Y</div></th>
		  <th class="head0"><div align="center">N</div></th>
		  
		  <th class="head0"><div align="center">Y</div></th>
		  <th class="head0"><div align="center">%</div></th>
		  <th class="head0"><div align="center">N</div></th>
		  <th class="head0"><div align="center">%</div></th>
		</tr>
		</thead>		
		<tbody> 
	 <?php
	if($tipe_report=='summary'){

		$a_user="[new_report_email]'table_qm_collection','$report_by','$tgl1','$tgl2','$select_region','$st_rep','summary' ";
		
		//echo"$a_user";
		
		$b_user=mssql_query($a_user);
		$no=1;
		$sample=0;
		while($c_user=mssql_fetch_array($b_user)){
			echo "<tr class='content'>
				<td>$no</td>
				<td>".$c_user['nik_karyawan']."</td>
				<td>".$c_user['full_name']."</td>
				<td>".$c_user['nama_unit']."</td>
				<td>".$c_user['q1_yes']."</td>
				<td>".$c_user['q1_no']."</td>
				<td>".$c_user['q2_yes']."</td>
				<td>".$c_user['q2_no']."</td>
				<td>".$c_user['q3_yes']."</td>
				<td>".$c_user['q3_no']."</td>
				<td>".$c_user['q4_yes']."</td>
				<td>".$c_user['q4_no']."</td>
				<td>".$c_user['q5_yes']."</td>
				<td>".$c_user['q5_no']."</td>
				<td>".$c_user['q6_yes']."</td>
				<td>".$c_user['q6_no']."</td>
				<td>".$c_user['q7_yes']."</td>
				<td>".$c_user['q7_no']."</td>
				<td>".$c_user['q8_yes']."</td>
				<td>".$c_user['q8_no']."</td>";
				$prosen_yes = ($c_user['noe']!=0)?round((($c_user['tot_yes']/($c_user['tot_yes']+$c_user['tot_no']))*100),2):0;
				$prosen_no = ($c_user['noe']!=0)?round((($c_user['tot_no']/($c_user['tot_yes']+$c_user['tot_no']))*100),2):0;
				echo "
				<td>".$c_user['tot_yes']."</td>
				<td>$prosen_yes</td>
				<td>".$c_user['tot_no']."</td>
				<td>$prosen_no</td>
				<td>".round($c_user['avg_score'],2)."</td>
				"?>
				<td>
				<?php if($c_user['noe']!=0){ ?>
					<a href="report/report_collection_show.php?id_pribadi_user=<?=$c_user['id_pribadi_user']?>&report_by=<?=$report_by?>&kd_unit=<?=$kd_unit?>&tgl1=<?=$tgl1?>&tgl2=<?=$tgl2?>&c_observer=<?=$c_observer?>&nik_agent=<?=$nik_agent?>&select_region=<?=$select_region?>&skalacmb=<?=$skalacmb?>&departemen_skala=<?=$departemen_skala?>&unit_skala=<?=$unit_skala?>&st_rep=<?=$st_rep?>" onClick="return popup2(this, 'notes');"><?=(string)$c_user['noe']?></a>
				<?php }else{
						echo $c_user['noe'];
					}
				?>
				
				</td>
				<?"</tr>
			";
			$no++;
			$sample+=$c_user['noe'];
		}
	}else{

		$a_user="[new_report_email]'table_qm_collection','$report_by','$tgl1','$tgl2','$select_region','$st_rep','detail'";
		
		//echo"$a_user";
		
		$b_user=mssql_query($a_user);
		$no=1;
		$tmp='';
		$sample=0;
		while($c_user=mssql_fetch_array($b_user)){
			
			echo "<tr class='content'>";
			if($c_user['noe']>1 and $tmp!=$c_user['id_pribadi_user']){
				echo "<td rowspan='".$c_user['noe']."'>$no</td>
					  <td rowspan='".$c_user['noe']."'>".$c_user['nik_karyawan']."</td>
					  <td rowspan='".$c_user['noe']."'>".$c_user['full_name']."</td>
					  <td rowspan='".$c_user['noe']."'>".$c_user['nama_unit']."</td>";
				$no++;
			}else if($c_user['noe']>1 and $tmp==$c_user['id_pribadi_user']){
				echo "<td style='display:none'>$no</td>
					  <td style='display:none'>".$c_user['nik_karyawan']."</td>
					  <td style='display:none'>".$c_user['full_name']."</td>
					  <td style='display:none'>".$c_user['nama_unit']."</td>";
			}else if($c_user['noe']==1){
				echo "<td>$no</td>
					  <td>".$c_user['nik_karyawan']."</td>
					  <td>".$c_user['full_name']."</td>
					  <td>".$c_user['nama_unit']."</td>";
				$no++;
			}
				echo "
				<td>".$c_user['observation_date']."</td>
				<td>".$c_user['q1_yes']."</td>
				<td>".$c_user['q1_no']."</td>
				<td>".$c_user['q2_yes']."</td>
				<td>".$c_user['q2_no']."</td>
				<td>".$c_user['q3_yes']."</td>
				<td>".$c_user['q3_no']."</td>
				<td>".$c_user['q4_yes']."</td>
				<td>".$c_user['q4_no']."</td>
				<td>".$c_user['q5_yes']."</td>
				<td>".$c_user['q5_no']."</td>
				<td>".$c_user['q6_yes']."</td>
				<td>".$c_user['q6_no']."</td>
				<td>".$c_user['q7_yes']."</td>
				<td>".$c_user['q7_no']."</td>
				<td>".$c_user['q8_yes']."</td>
				<td>".$c_user['q8_no']."</td>";
				$prosen_yes = round((($c_user['tot_yes']/($c_user['tot_yes']+$c_user['tot_no']))*100),2);
				$prosen_no = round((($c_user['tot_no']/($c_user['tot_yes']+$c_user['tot_no']))*100),2);
				echo "
				<td>".$c_user['tot_yes']."</td>
				<td>$prosen_yes</td>
				<td>".$c_user['tot_no']."</td>
				<td>$prosen_no</td>
				<td>".$c_user['tot_score']."</td>
				";
			if($c_user['noe']>1 and $tmp!=$c_user['id_pribadi_user']){?>
				<td rowspan="<?php echo $c_user['noe']; ?>"><a href="report/report_collection_show.php?id_pribadi_user=<?=$c_user['id_pribadi_user']?>&report_by=<?=$report_by?>&kd_unit=<?=$kd_unit?>&tgl1=<?=$tgl1?>&tgl2=<?=$tgl2?>&c_observer=<?=$c_observer?>&nik_agent=<?=$nik_agent?>&select_region=<?=$select_region?>&skalacmb=<?=$skalacmb?>&departemen_skala=<?=$departemen_skala?>&unit_skala=<?=$unit_skala?>&st_rep=<?=$st_rep?>" onClick="return popup2(this, 'notes');"><?=(string)$c_user['noe']?></a></td>
				<?
			}else if($c_user['noe']>1 and $tmp==$c_user['id_pribadi_user']){?>
				<td style='display:none'></td>
				<?
			}else if($c_user['noe']==1){?>
				<td><a href="report/report_collection_show.php?id_pribadi_user=<?=$c_user['id_pribadi_user']?>&report_by=<?=$report_by?>&kd_unit=<?=$kd_unit?>&tgl1=<?=$tgl1?>&tgl2=<?=$tgl2?>&c_observer=<?=$c_observer?>&nik_agent=<?=$nik_agent?>&select_region=<?=$select_region?>&skalacmb=<?=$skalacmb?>&departemen_skala=<?=$departemen_skala?>&unit_skala=<?=$unit_skala?>&st_rep=<?=$st_rep?>" onClick="return popup2(this, 'notes');"><?=(string)$c_user['noe']?></a>
				<?
			}
			echo "</tr>";
			$tmp=$c_user['id_pribadi_user'];
			$sample++;
		}
	}
	?>
<?	 
 }//END OF DATA BARU WITH CHART SUMMARY OR DETAIL IF
 ?>
		</tbody>
	</table><br>
	<? if($report_by=='New Report'){ ?>
	<p>Total Sample : <?php echo $sample; ?></p>
  
	<p><? }}?></p> 
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