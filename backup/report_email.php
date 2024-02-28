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
      <td width="90%"><div align="center" class="style3"></div></td>
    </tr>
    <tr>
      <td>Status Report</td>
      <td>
		<select name="st_rep" class="box" id="st_rep" onchange="satu.submit()"/>
		  <?php
		  echo "
		  <option value=2",2==$st_rep?" selected":"",">Data Baru</option>
		  <option value=1",1==$st_rep?" selected":"",">Data Lama</option>
		  ";
		  echo"Status Report : $st_rep";
		  ?>
	  </td>
    </tr>
    <tr class="content">
      <td>Report By </td>
      <td><select name="report_by" id="report_by" class="box" onchange="satu.submit()">
        <option value="0">Select By
        <?php
			$katahh=array('Departement','Unit','Agent','Observer','Skala');
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
$query = "SELECT * FROM hrms.dbo.tb_divisi";
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
$query="select * from hrms.dbo.tb_fungsi where left(id_fungsi,charindex('0',id_fungsi)-1)='$kd_division'";
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
					 
$query="select * from hrms.dbo.tb_unit where left(id_unit,len(id_unit)-1)='$kd_departemen'";
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
      <td><input name="cc_mentari" type="checkbox" id="cc_mentari" value="CCO04" <? if ($cc_mentari=="CCO04") {echo "checked";} else {$cc_mentari=''; echo "";} ?>/>
      CRM 2.0
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
      <td><select name="c_observer" class="box" id="c_observer" onchange="satu.submit()">
        <option value="0" selected="selected">Select All
        <?php
		
include "konek_qm.php";

$q_observerCombo="select distinct a.id_pribadi_observer, z.nama,c.qm
from db_qm.dbo.Table_qm_email a inner join
hrms.dbo.tb_data_pribadi z on a.id_pribadi_observer=cast(z.id_data_pribadi as varchar)
inner join hrms.dbo.tb_auth c on a.id_pribadi_observer=cast(c.id_data_pribadi as varchar)
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
      <td><? } if ($report_by=="Agent"){?></td>
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
      <td><? }?></td>
      	<?  if ($report_by=="Skala"){?>
      	
      </td>
      <td>&nbsp;</td>
    </tr>
     <tr class="content">
      <td width="10%">Department</td>
      <td><select name="departemen_skala" id="select" class="box" onchange="satu.submit()"  >
           <option value="" <?php if ($departemen_skala=='0') echo 'selected=true' ;?> >All </option>   
           <option value="CCO04" <?php if ($departemen_skala=='CCO04') echo 'selected=true' ;?> >CRM 2.0 </option>   
		  
		
		    
      </select></td>
      </tr>
      
       <tr class="content">
      <td>Unit Kerja </td>
      <td><select name="unit_skala" class="box"  >
          <option value="" selected="selected" >Unit Name
          <?php
					
$query11="select * from hrms.dbo.tb_unit where left(id_unit,len(id_unit)-1)='$departemen_skala'";
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
	
	
		  echo "<a class='btn btn-warning' href='report/export_email.php?st_rep=$st_rep&cc_mentari=$cc_mentari&cc_im3=$cc_im3&cc_pp=$cc_pp&cc_matrix=$cc_matrix&cc_m2=$cc_m2&cc_ftm=$cc_ftm&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&date_eva1=$tgl1&date_eva2=$tgl2&select_region=$select_region&skala=$skala&depart=$departemen_skala&unitSkala=$unit_skala'>export to excel</a>";
		  ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
    <?
    
    
    $skala=$_POST['skala'];
   
    
	include "konek_qm.php";
	if($c_observer==""){$obs=0;}else{$obs=$c_observer;}
	if ($date_eva1 != "" && $date_eva2 != "") {
	
	  $itung="[sp_count_colection]'table_qm_email','$tgl1','$tgl2','$report_by','%$kd_unit%','$cc_mentari','$cc_im3','$obs','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
//echo "$itung";
	 } 	

	if((isset($searchButton) and $jum_tot<>"0") or ($kd_del=="ok"and $jum_tot<>"0"))
	{ ?>
<table width="368%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
    <th width="1%" rowspan="2"  class="head0 nosort"><div align="center">No</div></th>
	<? if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"corres"){?>
    <th width="4%" rowspan="2" class="head0">Delete</th>
	<th width="4%" rowspan="2" class="head0">Edit</th>
	<? }?>
	<th width="4%" rowspan="2" class="head0"><div align="center">Validator</div></th>
	<th width="4%" rowspan="2" class="head0"><div align="center">Validation</div></th>
	<th width="4%" rowspan="2" class="head0"><div align="center">Username</div></th>
	<th width="4%" rowspan="2" class="head0"><div align="center">Region</div></th>
    <th width="2%" rowspan="2" class="head0"><div align="center">Nama</div></th>
	<th width="2%" rowspan="2" class="head0">Tenure</th>
    <th width="2%" rowspan="2" class="head0">TL/SPV</th>
    <th width="2%" rowspan="2" class="head0">Interaction Date </th>
    <th width="2%" rowspan="2" class="head0">Observation Date</th>
    <th width="2%" rowspan="2" class="head0">Week</th>
    <th width="2%" rowspan="2" class="head0">Customer Name </th>
    <th width="2%" rowspan="2" class="head0">Activity Number</th>
    <th width="2%" rowspan="2" class="head0">Interaction Type</th>
    <th width="2%" rowspan="2" class="head0">Product Type</th>
    <th width="2%" rowspan="2" class="head0">Product Detail</th>
    <th width="2%" rowspan="2" class="head0">Product Detail by Agent</th>
    <th width="2%" rowspan="2" class="head0"><div align="center">Repeat (Y / N)</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Date of previous call</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Previous Agent </div></th>
<? if ($st_rep =='1'){ //menampilkan data lama?>  
	  <th colspan="3" class="head0"><div align="center">Opening</div></th>
      <th colspan="3" class="head0"><div align="center">Verify Customer Data</div></th>
      <th colspan="3" class="head0"><div align="center">Identify Customer Needs</div></th>
      <th colspan="3" class="head0"><div align="center">Correct Answer </div></th>
      <th colspan="3" class="head0"><div align="center">Provide Solution</div></th>
      <th colspan="3" class="head0"><div align="center">Proses Compliance </div></th>
      <th colspan="3" class="head0"><div align="center">Efectivity and creativity in writing email</div></th>
      <th colspan="3" class="head0"><div align="center">Words composition, phrases and punctuation</div></th>
      <th colspan="3" class="head0"><div align="center">Proactive and educative information</div></th>
      <th colspan="3" class="head0"><div align="center">Human touch and manner</div></th>
      <th colspan="3" class="head0"><div align="center">Email Handling Procedure</div></th>
      <th colspan="3" class="head0"><div align="center">Closing</div></th>
      <th colspan="3" class="head0"><div align="center">Input Accuracy Data / Information</div></th>
	  <th colspan="3" class="head0"><div align="center">Campaign / Cross selling/ upselling / survey</div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">FE Accuracy </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">NFE Accuracy </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Total Score </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Skala</div></th>
	  <th width="4%" rowspan="2" class="head0"><div align="center">Recommendation</div></th>
	 <? if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){?>
      <th width="7%" rowspan="2" class="head0"><div align="center">Notes sample recording</div></th>
	  <? } ?>
      <th width="4%" colspan="2" rowspan="2" class="head0"><div align="center">Observer</div></th>
    </tr>
    <tr bgcolor="#CCCCCC">
      <th width="1%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="1%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="1%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="2%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="5%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="5%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
	  <th width="5%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
    </tr>
	</thead>
	<? 				
					$q_user="[sp_search_colection]'table_qm_email','$report_by','%$kd_unit%','$tgl1','$tgl2','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
				//	echo"$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$date_saved=$d_user["data_saved"];
						$tenure=$d_user["tenure"];
						$activity_code=$d_user["activity_code"];
						$spv_name=$d_user["spv_name"];
						$interaction_date=$d_user["interaction_date"];
						$observation_date=$d_user["observation_date"];
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
						$repeat=$d_user["repeat"];
						$date_prev_call=$d_user["date_prev_call"];
						$prev_agent=$d_user["prev_agent"];
						
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
						$q9=$d_user["q9"];
						$save_q9=$d_user["save_q9"];
						$q10=$d_user["q10"];
						$save_q10=$d_user["save_q10"];
						$q11=$d_user["q11"];
						$save_q11=$d_user["save_q11"];
						$q12=$d_user["q12"];
						$save_q12=$d_user["save_q12"];
						$q13=$d_user["q13"];
						$save_q13=$d_user["save_q13"];
						$q14=$d_user["q14"];
						$save_q14=$d_user["save_q14"];
						$status_save=$d_user["status_save"];
						$nik=$d_user["nik"];
						$recommendation=$d_user["recommendation"];
						$observer=$d_user["observer"];
						$id_kalibrasi=$d_user["id_kalibrasi"];
						$kalibrasi=$d_user["kalibrasi"];
						$agree=$d_user["kalibrasi"];
						$notes_recording=$d_user["notes_recording"];
						
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
						$notes11=$d_user["notes11"];
						$notes12=$d_user["notes12"];
						$notes13=$d_user["notes13"];
						$notes14=$d_user["notes14"];
						$skala2=$d_user["Skala"];
						
						
					  		if ($q1=="yes" or $q1=="na")
		{
		$sc_q1="1";
		}
		else
		{
		$sc_q1="0";
		}
		
		if ($q2=="yes" or $q2=="na")
		{
		$sc_q2="1";
		}
		else
		{
		$sc_q2="0";
		}
		
		if ($q3=="yes" or $q3=="na")
		{
		$sc_q3="1";
		}
		else
		{
		$sc_q3="0";
		}
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na") and ($q7=="yes" or $q7=="na"))
		{
		$sc_fe="4";
		}
		if ($q4=="no" or $q5=="no" or $q6=="no" or $q7=="no")
		{
		$sc_fe="0";
		}

		

		if ($q8=="yes" or $q8=="na")
		{
		$sc_q8="1";
		}
		else
		{
		$sc_q8="0";
		}

		if ($q9=="yes" or $q9=="na")
		{
		$sc_q9="1";
		}
		else
		{
		$sc_q9="0";
		}

		if ($q10=="yes" or $q10=="na")
		{
		$sc_q10="1";
		}
		else
		{
		$sc_q10="0";
		}

		if ($q11=="yes" or $q11=="na")
		{
		$sc_q11="1";
		}
		else
		{
		$sc_q11="0";
		}

		if ($q12=="yes" or $q7=="na")
		{
		$sc_q12="1";
		}
		else
		{
		$sc_q12="0";
		}

		if ($q13=="yes" or $q13=="na")
		{
		$sc_q13="1";
		}
		else
		{
		$sc_q13="0";
		}

		if ($q14=="yes" or $q14=="na")
		{
		$sc_q14="1";
		}
		else
		{
		$sc_q14="0";
		}
		
$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12+$sc_q13+$sc_q14;
$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13+$save_q14;
					/*	
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
						*/
						
						echo "<tr class='content'>
                      <td>$no</td>";
					 if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"corres"){
					  

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
					  					  
					  <a href="<? echo "del_group.php?report_by=$report_by&kode_del=detail_email&id_qm=$id_qm&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&c_observer=$observer&st_rep=$st_rep"; ?>" onclick="return confirmDelete2();">
					  <?
					  	 echo "delete</a></td>";
						 echo "<td>";
						 $q ="select nama as observer_name from hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer' ";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];
					  ?>
					  					  
					  <a href="<? echo "edit_email.php?st_rep=$st_rep&kode_edit=edit_email&activity_code=$activity_code&id_qm=$id_qm&tenure=$tenure&full_name=$full_name&call_activity=$call_activity&call_status=$call_status&spv_name=$spv_name&observer_name=$observname&interaction_date=$interaction_date2&hh=$hh&mm=$mm&observation_date=$observ&week_=$week_&customer_name=$customer_name&interaction_type=$interaction_type&product_type=$product_type&product_detail=$product_detail&product_detail_agent=$product_detail_agent&fcr=$fcr&repeat=$repeat&date_prev_call=$date_prev_call&prev_agent=$prev_agent&recommendation=$recommendation&hh_2=$hh_2&mm_2=$mm_2&ss_2=$ss_2&drop_call=$drop_call&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&notes6=$notes6&notes7=$notes7&notes8=$notes8&notes9=$notes9&notes10=$notes10&notes11=$notes11&notes12=$notes12&notes13=$notes13&notes14=$notes14&notes15=$notes15&notes16=$notes16&notes17=$notes17&notes18=$notes18&notes19=$notes19&notes20=$notes20&q1=$q1&q2=$q2&q3=$q3&q4=$q4&q5=$q5&q6=$q6&q7=$q7&q8=$q8&q9=$q9&q10=$q10&q11=$q11&q12=$q12&q13=$q13&q14=$q14&userid=$userid&observer=$SES__NIK&date_saved=$date_saved&fe_acc=$sc_fe&nfe_acc=$sc_nfe&total_score=$total_score&skala=$skala&notes_recording=$notes_recording"; ?>" onClick="return popup(this, 'notes');">	
					  
					  <?
					  	 echo "Edit</a></td>";
						 }			  
					  		if ($q1=="yes" or $q1=="na")
		{
		$sc_q1="1";
		}
		else
		{
		$sc_q1="0";
		}
		
		if ($q2=="yes" or $q2=="na")
		{
		$sc_q2="1";
		}
		else
		{
		$sc_q2="0";
		}
		
		if ($q3=="yes" or $q3=="na")
		{
		$sc_q3="1";
		}
		else
		{
		$sc_q3="0";
		}
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na") and ($q7=="yes" or $q7=="na"))
		{
		$sc_fe="4";
		}
		if ($q4=="no" or $q5=="no" or $q6=="no" or $q7=="no")
		{
		$sc_fe="0";
		}

		

		if ($q8=="yes" or $q8=="na")
		{
		$sc_q8="1";
		}
		else
		{
		$sc_q8="0";
		}

		if ($q9=="yes" or $q9=="na")
		{
		$sc_q9="1";
		}
		else
		{
		$sc_q9="0";
		}

		if ($q10=="yes" or $q10=="na")
		{
		$sc_q10="1";
		}
		else
		{
		$sc_q10="0";
		}

		if ($q11=="yes" or $q11=="na")
		{
		$sc_q11="1";
		}
		else
		{
		$sc_q11="0";
		}

		if ($q12=="yes" or $q7=="na")
		{
		$sc_q12="1";
		}
		else
		{
		$sc_q12="0";
		}

		if ($q13=="yes" or $q13=="na")
		{
		$sc_q13="1";
		}
		else
		{
		$sc_q13="0";
		}
		
		if ($q14=="yes" or $q14=="na")
		{
		$sc_q14="1";
		}
		else
		{
		$sc_q14="0";
		}
		
$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12+$sc_q13+$sc_q14;
$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13+$save_q14;
						/* if ($total_score >= 90)
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
//						*/
/*
					$q_user1="select full_name as observer_name 
					from dev_asst.dbo.table_usr 
					where username='$observer' ";*/
					$q_user1="select nama as observer_name from hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer'";
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
			
					
?>

   		  
					<td><a href="showKalibrasi/show_email.php?id=<? echo "$id";?>&id_qm=<? echo "$id_qm";?>&agree=<? echo "$agree";?>" onClick="return popup(this, 'notes');">	
					<? if ($id_kalibrasi != ""){
					$q_kal="select nama as kalibrasi_name
						  	from hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
					$r_kal=mssql_query($q_kal);
					while($d_kal=mssql_fetch_array($r_kal))
						{
						$kalibrasi_name=$d_kal["kalibrasi_name"];
					}
						echo $kalibrasi_name; 
						
					}?> </td>
					  
         <? 	

    echo"         <td>$kalibrasi</td>
					  <td>$userid</td>
					  <td>$region</td>
					  <td>$lb</td>
					  <td>$tenure</td>
						<td>$spv_name</td>
						<td>$interaction_date</td>
						<td>$observation_date</td>
						<td>$week_</td>
						<td>$customer_name</td>
						<td>$activity_code</td>
						<td>$interaction_type</td>
						<td>$product_type</td>
						<td>$product_detail</td>
						<td>$product_detail_agent</td>
						<td>$repeat</td>
						<td>$s_date_prev_call</td>
						<td>$s_prev_agent</td>
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
                      <td>$q13</td>
					  <td>$save_q13</td>
					  <td>$notes13</td>
					  <td>$q14</td>
					  <td>$save_q14</td>
					  <td>$notes14</td>
					  
					  <td>$sc_fe</td>
                      <td>$sc_nfe</td>
					  <td>$total_score</td>
                      <td>$skala2</td>
					  <td>$recommendation</td>";
                      if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){
					  echo"<td>$notes_recording</td>";
					  }
					  echo"<td>$observer_name</td>
					  
                      </tr>";
					  $no++;
					  
						}
						
					

			
					?> </a>
  </table>
  <p>Total data : <? echo"$jum_tot"; ?></p>
  <table class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="17" class="head0"><div align="center">No</div></th>
      <th width="36" class="head0"><div align="center">Value</div></th>
      <th width="205" class="head0"><div align="center">Attributes</div></th>
      <th width="33" class="head0"><div align="center">Yes</div></th>
      <th width="28" class="head0"><div align="center">%</div></th>
      <th width="27" class="head0"><div align="center">No</div></th>
      <th width="26" class="head0"><div align="center">%</div></th>
      <th width="44" class="head0"><div align="center">NA</div></th>
      <th width="44" class="head0"><div align="center">%</div></th>
      <th width="44" class="head0"><div align="center">AVG Score </div></th>
    </tr>
	</thead>
    <tr>
      <td>1</td>
      <td>NFE</td>
      <td>Opening</td>
      <td><?  
				  //edit hendi
      $queryhendi="[sp_reportqm_colection]'table_qm_email','$tgl1','$tgl2','$report_by','$c_observer','%$nik_agent%','$cc_mentari','$cc_im3','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
	 
	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
	  //echo $queryhendi;
      //end edit
      
			$q1_tot_y=$result["q1_yes"];
			echo"$q1_tot_y";
			
		?></td>
      <td><?
$prosen_q1_y =($q1_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_y);
			?></td>
      <td><?  
				  $q1_tot_n=$result["q1_no"];
			echo"$q1_tot_n";

	   
			
		?></td>
      <td><?
$prosen_q1_y =($q1_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_y);
			?></td>
      <td><?  
				  $q1_tot_na=$result["q1_na"];
			echo"$q1_tot_na";
			
		?></td>
      <td><?
$prosen_q1_na =($q1_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_na);
			?></td>
      <td><?  
	  			$q1_avg=$result["avg1"];
			printf("%1.2f ", $q1_avg);
			
		?></td>
    </tr>
    <tr>
      <td>2</td>
      <td>NFE</td>
      <td> Verify Customer Data</td>
      <td><?  
	  			$q2_tot_y=$result["q2_yes"];
			echo"$q2_tot_y";
			
		?></td>
      <td><?
$prosen_q2_y =($q2_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_y);
			?></td>
      <td><?  
	  			$q2_tot_n=$result["q2_no"];
			echo"$q2_tot_n";
			
		?></td>
      <td><?
$prosen_q2_y =($q2_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_y);
			?></td>
      <td><?  
	  			$q2_tot_na=$result["q2_na"];
	   			echo"$q2_tot_na";
			
		?></td>
      <td><?
$prosen_q2_na =($q2_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_na);
			?></td>
      <td><?  
	  			$q2_avg=$result["avg2"];	
			printf("%1.2f ", $q2_avg);
		?></td>
    </tr>
    <tr>
      <td>3</td>
      <td>NFE</td>
      <td> Identify Customer Needs</td>
      <td><?  
	  			$q3_tot_y=$result["q3_yes"];
			echo"$q3_tot_y";
			
		?></td>
      <td><?
$prosen_q3_y =($q3_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_y);
			?></td>
      <td><?  
	  			$q3_tot_n=$result["q3_no"];
			echo"$q3_tot_n";
			
		?></td>
      <td><?
$prosen_q3_y =($q3_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_y);
			?></td>
      <td><?  
	  			$q3_tot_na=$result["q3_na"];
			echo"$q3_tot_na";
			
		?></td>
      <td><?
$prosen_q3_na =($q3_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_na);
			?></td>
      <td><?  
	  			$q3_avg=$result["avg3"];
			printf("%1.2f ", $q3_avg);
			
		?></td>
    </tr>
    <tr>
      <td>4</td>
      <td>FE</td>
      <td>Correct Answer </td>
      <td><?  
	  			$q4_tot_y=$result["q4_yes"];
			echo"$q4_tot_y";
			
		?></td>
      <td><?
$prosen_q4_y =($q4_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_y);
			?></td>
      <td><?  
	  			$q4_tot_n=$result["q4_no"];
			echo"$q4_tot_n";
			
		?></td>
      <td><?
$prosen_q4_y =($q4_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_y);
			?></td>
      <td><?  
	  			$q4_tot_na=$result["q4_na"];
			echo"$q4_tot_na";
			
		?></td>
      <td><?
$prosen_q4_na =($q4_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_na);
			?></td>
      <td><?  
	  			$q4_avg=$result["avg4"];
		printf("%1.2f ", $q4_avg);
		?></td>
    </tr>
    <tr>
      <td>5</td>
      <td>FE</td>
      <td>Provide Solution</td>
      <td><?  
	  			$q5_tot_y=$result["q5_yes"];
			echo"$q5_tot_y";
			
		?></td>
      <td><?
$prosen_q5_y =($q5_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_y);
			?></td>
      <td><?  
	  			$q5_tot_n=$result["q5_no"];
			echo"$q5_tot_n";
			
		?></td>
      <td><?
$prosen_q5_y =($q5_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_y);
			?></td>
      <td><?  
	  			$q5_tot_na=$result["q5_na"];
			echo"$q5_tot_na";
			
		?></td>
      <td><?
$prosen_q5_na =($q5_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_na);
			?></td>
      <td><?  
	  			$q5_avg=$result["avg5"];
		printf("%1.2f ", $q5_avg);
			
		?></td>
    </tr>
    <tr>
      <td>6</td>
      <td>FE</td>
      <td>Proses Compliance </td>
      <td><?  
	  			$q6_tot_y=$result["q6_yes"];
			echo"$q6_tot_y";
			
		?></td>
      <td><?
$prosen_q6_y =($q6_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q6_y);
			?></td>
      <td><?  
	  			$q6_tot_n=$result["q6_no"];
			echo"$q6_tot_n";
			
		?></td>
      <td><?
$prosen_q6_y =($q6_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q6_y);
			?></td>
      <td><?  
	  			$q6_tot_na=$result["q6_na"];
			echo"$q6_tot_na";
			
		?></td>
      <td><?
$prosen_q6_na =($q6_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q6_na);
			?></td>
      <td><?  
	  			$q6_avg=$result["avg6"];
		printf("%1.2f ", $q6_avg);
			
		?></td>
    </tr>
    <tr>
      <td>7</td>
      <td>FE</td>
      <td>Efectivity and creativity in writing email</td>
      <td><?  
	  			$q7_tot_y=$result["q7_yes"];
			echo"$q7_tot_y";
			
		?></td>
      <td><?
$prosen_q7_y =($q7_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_y);
			?></td>
      <td><?  
	  			$q7_tot_n=$result["q7_no"];
			echo"$q7_tot_n";
			
		?></td>
      <td><?
$prosen_q7_y =($q7_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_y);
			?></td>
      <td><?  
	  			$q7_tot_na=$result["q7_na"];
			echo"$q7_tot_na";
			
		?></td>
      <td><?
$prosen_q7_na =($q7_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_na);
			?></td>
      <td><?  
	  			$q7_avg=$result["avg7"];
		printf("%1.2f ", $q7_avg);
			
		?></td>
    </tr>
    <tr>
      <td>8</td>
      <td>NFE</td>
      <td>Words composition, phrases and punctuation</td>
      <td><?  
	  			$q8_tot_y=$result["q8_yes"];
			echo"$q8_tot_y";
			
		?></td>
      <td><?
$prosen_q8_y =($q8_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_y);
			?></td>
      <td><?  
	  			$q8_tot_n=$result["q8_no"];
			echo"$q8_tot_n";
			
		?></td>
      <td><?
$prosen_q8_y =($q8_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_y);
			?></td>
      <td><?  
	  			$q8_tot_na=$result["q8_na"];
			echo"$q8_tot_na";
			
		?></td>
      <td><?
$prosen_q8_na =($q8_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_na);
			?></td>
      <td><?  
	  			$q8_avg=$result["avg8"];
		printf("%1.2f ", $q8_avg);
			
		?></td>
    </tr>
    <tr>
      <td>9</td>
      <td>NFE</td>
      <td>Proactive and educative information</td>
      <td><?  
	  			$q9_tot_y=$result["q9_yes"];
			echo"$q9_tot_y";
			
		?></td>
      <td><?
$prosen_q9_y =($q9_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_y);
			?></td>
      <td><?  
	  			$q9_tot_n=$result["q9_no"];
			echo"$q9_tot_n";
			
		?></td>
      <td><?
$prosen_q9_y =($q9_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_y);
			?></td>
      <td><?  
	  			$q9_tot_na=$result["q9_na"];
			echo"$q9_tot_na";
			
		?></td>
      <td><?
$prosen_q9_na =($q9_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_na);
			?></td>
      <td><?  
	  			$q9_avg=$result["avg9"];
		printf("%1.2f ", $q9_avg);
			
		?></td>
    </tr>
    <tr>
      <td>10</td>
      <td>NFE</td>
      <td>Human touch and manner</td>
      <td><?  
	  			$q10_tot_y=$result["q10_yes"];
			echo"$q10_tot_y";
			
		?></td>
      <td><?
$prosen_q10_y =($q10_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_y);
			?></td>
      <td><?  
	  			$q10_tot_n=$result["q10_no"];
			echo"$q10_tot_n";
			
		?></td>
      <td><?
$prosen_q10_y =($q10_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_y);
			?></td>
      <td><?  
	  			$q10_tot_na=$result["q10_na"];
			echo"$q10_tot_na";
			
		?></td>
      <td><?
$prosen_q10_na =($q10_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_na);
			?></td>
      <td><?  
	  			$q10_avg=$result["avg10"];
		printf("%1.2f ", $q10_avg);
			
		?></td>
    </tr>
    <tr>
      <td>11</td>
      <td>NFE</td>
      <td>Email Handling Procedure</td>
      <td><?  
	  			$q11_tot_y=$result["q11_yes"];	
			echo"$q11_tot_y";
			
		?></td>
      <td><?
$prosen_q11_y =($q11_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_y);
			?></td>
      <td><?  
	  			$q11_tot_n=$result["q11_no"];
			echo"$q11_tot_n";
			
		?></td>
      <td><?
$prosen_q11_y =($q11_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_y);
			?></td>
      <td><?  
	  			$q11_tot_na=$result["q11_na"];
			echo"$q11_tot_na";
			
		?></td>
      <td><?
$prosen_q11_na =($q11_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_na);
			?></td>
      <td><?  
	  			$q11_avg=$result["avg11"];
		printf("%1.2f ", $q11_avg);
			
		?></td>
    </tr>
    <tr>
      <td>12</td>
      <td>NFE</td>
      <td>Closing</td>
      <td><?  
	  			$q12_tot_y=$result["q12_yes"];
			echo"$q12_tot_y";
			
		?></td>
      <td><?
$prosen_q12_y =($q12_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_y);
			?></td>
      <td><?  
	  			$q12_tot_n=$result["q12_no"];
			echo"$q12_tot_n";
			
		?></td>
      <td><?
$prosen_q12_y =($q12_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_y);
			?></td>
      <td><?  
	  			$q12_tot_na=$result["q12_na"];
			echo"$q12_tot_na";
			
		?></td>
      <td><?
$prosen_q12_na =($q12_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_na);
			?></td>
      <td><?  
	  			$q12_avg=$result["avg12"];
		printf("%1.2f ", $q12_avg);
			
		?></td>
    </tr>
    <tr>
      <td>13</td>
      <td>NFE</td>
      <td>Input Accuracy Data / Information</td>
      <td><?  
	  			$q13_tot_y=$result["q13_yes"];
			echo"$q13_tot_y";
			
		?></td>
      <td><?
$prosen_q13_y =($q13_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q13_y);
			?></td>
      <td><?  
	  			$q13_tot_n=$result["q13_no"];
			echo"$q13_tot_n";
			
		?></td>
      <td><?
$prosen_q13_y =($q13_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q13_y);
			?></td>
      <td><?  
	  			$q13_tot_na=$result["q13_na"];
			echo"$q13_tot_na";
					
	   
			
		?></td>
      <td><?
$prosen_q13_na =($q13_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q13_na);
			?></td>
      <td><?  
	  			$q13_avg=$result["avg13"];
		printf("%1.2f ", $q13_avg);
			
		?></td>
    </tr>
	<tr>
      <td>14</td>
      <td>NFE</td>
      <td>Campaign / Cross selling/ upselling / survey</td>
      <td><?  
	  			$q14_tot_y=$result["q14_yes"];
			echo"$q14_tot_y";
			
		?></td>
      <td><?
$prosen_q14_y =($q14_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q14_y);
			?></td>
      <td><?  
	  			$q14_tot_n=$result["q14_no"];
			echo"$q14_tot_n";
			
		?></td>
      <td><?
$prosen_q14_y =($q14_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q14_y);
			?></td>
      <td><?  
	  			$q14_tot_na=$result["q14_na"];
			echo"$q14_tot_na";
					
	   
			
		?></td>
      <td><?
$prosen_q14_na =($q14_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q14_na);
			?></td>
      <td><?  
	  			$q14_avg=$result["avg14"];
		printf("%1.2f ", $q14_avg);
			
		?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table border="1"  class="table table-bordered table-infinite">
    <tr>
      <td >NFE Total </td>
      <td><? $nfe_total=$q1_tot_y+$q2_tot_y+$q3_tot_y+$q8_tot_y+$q9_tot_y+$q10_tot_y+$q11_tot_y+$q12_tot_y+$q13_tot_y+$q14_tot_y+$q1_tot_na+$q2_tot_na+$q3_tot_na+$q8_tot_na+$q9_tot_na+$q10_tot_na+$q11_tot_na+$q12_tot_na+$q13_tot_na+$q14_tot_na; echo"$nfe_total";?></td>
    </tr>
    <tr>
      <td>NFE Accuracy</td>
      <td><?
	  $nfe_acc=($nfe_total/(10*$jum_tot)*100);
		printf("%1.2f ", $nfe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>FE Total </td>
      <td><?  
		$stot_fe="[sp_fetotal_colection]'table_qm_email','$report_by','$tgl1','$tgl2','$kd_unit','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$stot_fe";
			$fe_total=$fe_tot*4;
			echo"$fe_total";
			
		?></td>
    </tr>
    <tr>
      <td>FE Accuracy </td>
      <td>
	  <?
	  $fe_acc=($fe_tot/$jum_tot)*100;
		printf("%1.2f ", $fe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>Handling Time  Average</td>
      <td><?  
			$stot_hh="[sp_handling_colection]'table_qm_email','$report_by','$tgl1','$tgl2','$kd_unit','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
			//echo $stot_hh;
			$r_stot_hh=mssql_query($stot_hh);
	   while($d_stot_hh=mssql_fetch_array($r_stot_hh))
			{
		     	$d_tot_hh=$d_stot_hh["jum_hh"];
		     	$d_tot_mm=$d_stot_hh["jum_mm"];
		     	$d_tot_ss=$d_stot_hh["jum_ss"];
			} 
			
			//echo"$d_tot_hh";
			$hhtomm=(($d_tot_hh*3600)+($d_tot_mm*60)+$d_tot_ss)/$jum_tot;
			
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
	  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg+$q9_avg+$q10_avg+$q11_avg+$q12_avg+$q13_avg+$q14_avg;
	  //echo"$score_avg";
	  printf("%1.2f ", $score_avg);
	  ?></td>
    </tr>
<? }else{?>    
      <th colspan="3" class="head0"><div align="center">Opening</div></th>
      <th colspan="3" class="head0"><div align="center">Verify Customer Data</div></th>
      <th colspan="3" class="head0"><div align="center">Identify Customer Needs</div></th>
      <th colspan="3" class="head0"><div align="center">Correct Answer & Solution / Consultative handling</div></th>
      <th colspan="3" class="head0"><div align="center">Proses Compliance </div></th>
      <th colspan="3" class="head0"><div align="center">Email Handling Procedure</div></th>
      <th colspan="3" class="head0"><div align="center">Words composition, phrases and punctuation (Grammar)</div></th>
      <th colspan="3" class="head0"><div align="center">Closing</div></th>
      <th colspan="3" class="head0"><div align="center">Input Accuracy Data / Information</div></th>
	  <th colspan="3" class="head0"><div align="center">Campaign / Cross selling/ upselling / survey</div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">CE Accuracy </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">NCE Accuracy </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Total Score </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Skala</div></th>
	  <th width="4%" rowspan="2" class="head0"><div align="center">Recommendation</div></th>
	 <? if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){?>
      <th width="7%" rowspan="2" class="head0"><div align="center">Notes sample recording</div></th>
	  <? } ?>
      <th width="4%" colspan="2" rowspan="2" class="head0"><div align="center">Observer</div></th>
    </tr>
    <tr bgcolor="#CCCCCC">
      <th width="1%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="1%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="1%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="2%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="5%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
    </tr>
	</thead>
	<? 				
					$q_user="[sp_search_colection]'table_qm_email','$report_by','%$kd_unit%','$tgl1','$tgl2','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
				//	echo"$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$date_saved=$d_user["data_saved"];
						$tenure=$d_user["tenure"];
						$activity_code=$d_user["activity_code"];
						$spv_name=$d_user["spv_name"];
						$interaction_date=$d_user["interaction_date"];
						$observation_date=$d_user["observation_date"];
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
						$repeat=$d_user["repeat"];
						$date_prev_call=$d_user["date_prev_call"];
						$prev_agent=$d_user["prev_agent"];
						
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
						$q9=$d_user["q9"];
						$save_q9=$d_user["save_q9"];
						$q10=$d_user["q10"];
						$save_q10=$d_user["save_q10"];
						$status_save=$d_user["status_save"];
						$nik=$d_user["nik"];
						$recommendation=$d_user["recommendation"];
						$observer=$d_user["observer"];
						$id_kalibrasi=$d_user["id_kalibrasi"];
						$kalibrasi=$d_user["kalibrasi"];
						$agree=$d_user["kalibrasi"];
						$notes_recording=$d_user["notes_recording"];
						
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
						$skala2=$d_user["Skala"];
						
						
		if ($q1=="yes" or $q1=="na")
		{
		$sc_q1="1";
		}
		else
		{
		$sc_q1="0";
		}
		
		if ($q2=="yes" or $q2=="na")
		{
		$sc_q2="1";
		}
		else
		{
		$sc_q2="0";
		}
		
		if ($q3=="yes" or $q3=="na")
		{
		$sc_q3="1";
		}
		else
		{
		$sc_q3="0";
		}
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na"))
		{
		$sc_fe="3";
		}
		if ($q4=="no" or $q5=="no" or $q6=="no")
		{
		$sc_fe="0";
		}

		if ($q7=="yes" or $q7=="na")
		{
		$sc_q7="1";
		}
		else
		{
		$sc_q7="0";
		}

		if ($q8=="yes" or $q8=="na")
		{
		$sc_q8="1";
		}
		else
		{
		$sc_q8="0";
		}

		if ($q9=="yes" or $q9=="na")
		{
		$sc_q9="1";
		}
		else
		{
		$sc_q9="0";
		}

		if ($q10=="yes" or $q10=="na")
		{
		$sc_q10="1";
		}
		else
		{
		$sc_q10="0";
		}
		
$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q7+$sc_q8+$sc_q9+$sc_q10;
$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10;
					/*	
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
						*/
						
						echo "<tr class='content'>
                      <td>$no</td>";
					 if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"corres"){
					  

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
					  					  
					  <a href="<? echo "del_group.php?report_by=$report_by&kode_del=detail_email&id_qm=$id_qm&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&c_observer=$observer&st_rep=$st_rep"; ?>" onclick="return confirmDelete2();">
					  <?
					  	 echo "delete</a></td>";
						 echo "<td>";
						 $q ="select nama as observer_name from hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer' ";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];
					  ?>
					  					  
					  <a href="<? echo "edit_email.php?st_rep=$st_rep&kode_edit=edit_email&activity_code=$activity_code&id_qm=$id_qm&tenure=$tenure&full_name=$full_name&call_activity=$call_activity&call_status=$call_status&spv_name=$spv_name&observer_name=$observname&interaction_date=$interaction_date2&hh=$hh&mm=$mm&observation_date=$observ&week_=$week_&customer_name=$customer_name&interaction_type=$interaction_type&product_type=$product_type&product_detail=$product_detail&product_detail_agent=$product_detail_agent&fcr=$fcr&repeat=$repeat&date_prev_call=$date_prev_call&prev_agent=$prev_agent&recommendation=$recommendation&hh_2=$hh_2&mm_2=$mm_2&ss_2=$ss_2&drop_call=$drop_call&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&notes6=$notes6&notes7=$notes7&notes8=$notes8&notes9=$notes9&notes10=$notes10&q1=$q1&q2=$q2&q3=$q3&q4=$q4&q5=$q5&q6=$q6&q7=$q7&q8=$q8&q9=$q9&q10=$q10&userid=$userid&observer=$SES__NIK&date_saved=$date_saved&fe_acc=$sc_fe&nfe_acc=$sc_nfe&total_score=$total_score&skala=$skala&notes_recording=$notes_recording"; ?>" onClick="return popup(this, 'notes');">	
					  
					  <?
					  	 echo "Edit</a></td>";
						 }			  
		if ($q1=="yes" or $q1=="na")
		{
		$sc_q1="1";
		}
		else
		{
		$sc_q1="0";
		}
		
		if ($q2=="yes" or $q2=="na")
		{
		$sc_q2="1";
		}
		else
		{
		$sc_q2="0";
		}
		
		if ($q3=="yes" or $q3=="na")
		{
		$sc_q3="1";
		}
		else
		{
		$sc_q3="0";
		}
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na"))
		{
		$sc_fe="3";
		}
		if ($q4=="no" or $q5=="no" or $q6=="no")
		{
		$sc_fe="0";
		}

		if ($q7=="yes" or $q7=="na")
		{
		$sc_q7="1";
		}
		else
		{
		$sc_q7="0";
		}

		if ($q8=="yes" or $q8=="na")
		{
		$sc_q8="1";
		}
		else
		{
		$sc_q8="0";
		}

		if ($q9=="yes" or $q9=="na")
		{
		$sc_q9="1";
		}
		else
		{
		$sc_q9="0";
		}

		if ($q10=="yes" or $q10=="na")
		{
		$sc_q10="1";
		}
		else
		{
		$sc_q10="0";
		}
		
$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q7+$sc_q8+$sc_q9+$sc_q10;
$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10;
						/* if ($total_score >= 90)
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
//						*/
/*
					$q_user1="select full_name as observer_name 
					from dev_asst.dbo.table_usr 
					where username='$observer' ";*/
					$q_user1="select nama as observer_name from hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer'";
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
			
					
?>

   		  
					<td><a href="showKalibrasi/show_email.php?id=<? echo "$id";?>&id_qm=<? echo "$id_qm";?>&agree=<? echo "$agree";?>" onClick="return popup(this, 'notes');">	
					<? if ($id_kalibrasi != ""){
					$q_kal="select nama as kalibrasi_name
						  	from hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
					$r_kal=mssql_query($q_kal);
					while($d_kal=mssql_fetch_array($r_kal))
						{
						$kalibrasi_name=$d_kal["kalibrasi_name"];
					}
						echo $kalibrasi_name; 
						
					}?> </a></td>
					  
         <? 	

    echo"         <td>$kalibrasi</td>
					  <td>$userid</td>
					  <td>$region</td>
					  <td>$lb</td>
					  <td>$tenure</td>
						<td>$spv_name</td>
						<td>$interaction_date</td>
						<td>$observation_date</td>
						<td>$week_</td>
						<td>$customer_name</td>
						<td>$activity_code</td>
						<td>$interaction_type</td>
						<td>$product_type</td>
						<td>$product_detail</td>
						<td>$product_detail_agent</td>
						<td>$repeat</td>
						<td>$s_date_prev_call</td>
						<td>$s_prev_agent</td>
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
					  
					  <td>$sc_fe</td>
                      <td>$sc_nfe</td>
					  <td>$total_score</td>
                      <td>$skala2</td>
					  <td>$recommendation</td>";
                      if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){
					  echo"<td>$notes_recording</td>";
					  }
					  echo"<td>$observer_name</td>
					  
                      </tr>";
					  $no++;
					  
						}
						
					

			
					?> </a>
  </table>
  <p>Total data : <? echo"$jum_tot"; ?></p>
  <table class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="17" class="head0"><div align="center">No</div></th>
      <th width="36" class="head0"><div align="center">Value</div></th>
      <th width="205" class="head0"><div align="center">Attributes</div></th>
      <th width="33" class="head0"><div align="center">Yes</div></th>
      <th width="28" class="head0"><div align="center">%</div></th>
      <th width="27" class="head0"><div align="center">No</div></th>
      <th width="26" class="head0"><div align="center">%</div></th>
      <th width="44" class="head0"><div align="center">NA</div></th>
      <th width="44" class="head0"><div align="center">%</div></th>
      <th width="44" class="head0"><div align="center">AVG Score </div></th>
    </tr>
	</thead>
    <tr>
      <td>1</td>
      <td>NCE</td>
      <td>Opening</td>
      <td><?  
				  //edit hendi
      $queryhendi="[sp_reportqm_colection]'table_qm_email','$tgl1','$tgl2','$report_by','$c_observer','%$nik_agent%','$cc_mentari','$cc_im3','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
	 
	  
	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
	  //echo $queryhendi;
      //end edit
      
			$q1_tot_y=$result["q1_yes"];
			echo"$q1_tot_y";
			
		?></td>
      <td><?
$prosen_q1_y =($q1_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_y);
			?></td>
      <td><?  
				  $q1_tot_n=$result["q1_no"];
			echo"$q1_tot_n";

	   
			
		?></td>
      <td><?
$prosen_q1_y =($q1_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_y);
			?></td>
      <td><?  
				  $q1_tot_na=$result["q1_na"];
			echo"$q1_tot_na";
			
		?></td>
      <td><?
$prosen_q1_na =($q1_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_na);
			?></td>
      <td><?  
	  			$q1_avg=$result["avg1"];
			printf("%1.2f ", $q1_avg);
			
		?></td>
    </tr>
    <tr>
      <td>2</td>
      <td>NCE</td>
      <td> Verify Customer Data</td>
      <td><?  
	  			$q2_tot_y=$result["q2_yes"];
			echo"$q2_tot_y";
			
		?></td>
      <td><?
$prosen_q2_y =($q2_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_y);
			?></td>
      <td><?  
	  			$q2_tot_n=$result["q2_no"];
			echo"$q2_tot_n";
			
		?></td>
      <td><?
$prosen_q2_y =($q2_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_y);
			?></td>
      <td><?  
	  			$q2_tot_na=$result["q2_na"];
	   			echo"$q2_tot_na";
			
		?></td>
      <td><?
$prosen_q2_na =($q2_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_na);
			?></td>
      <td><?  
	  			$q2_avg=$result["avg2"];	
			printf("%1.2f ", $q2_avg);
		?></td>
    </tr>
    <tr>
      <td>3</td>
      <td>NCE</td>
      <td> Identify Customer Needs</td>
      <td><?  
	  			$q3_tot_y=$result["q3_yes"];
			echo"$q3_tot_y";
			
		?></td>
      <td><?
$prosen_q3_y =($q3_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_y);
			?></td>
      <td><?  
	  			$q3_tot_n=$result["q3_no"];
			echo"$q3_tot_n";
			
		?></td>
      <td><?
$prosen_q3_y =($q3_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_y);
			?></td>
      <td><?  
	  			$q3_tot_na=$result["q3_na"];
			echo"$q3_tot_na";
			
		?></td>
      <td><?
$prosen_q3_na =($q3_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_na);
			?></td>
      <td><?  
	  			$q3_avg=$result["avg3"];
			printf("%1.2f ", $q3_avg);
			
		?></td>
    </tr>
    <tr>
      <td>4</td>
      <td>CE</td>
      <td>Correct Answer & Solution / Consultative handling </td>
      <td><?  
	  			$q4_tot_y=$result["q4_yes"];
			echo"$q4_tot_y";
			
		?></td>
      <td><?
$prosen_q4_y =($q4_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_y);
			?></td>
      <td><?  
	  			$q4_tot_n=$result["q4_no"];
			echo"$q4_tot_n";
			
		?></td>
      <td><?
$prosen_q4_y =($q4_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_y);
			?></td>
      <td><?  
	  			$q4_tot_na=$result["q4_na"];
			echo"$q4_tot_na";
			
		?></td>
      <td><?
$prosen_q4_na =($q4_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_na);
			?></td>
      <td><?  
	  			$q4_avg=$result["avg4"];
		printf("%1.2f ", $q4_avg);
		?></td>
    </tr>
    <tr>
      <td>5</td>
      <td>CE</td>
      <td>Proses Compliance</td>
      <td><?  
	  			$q5_tot_y=$result["q5_yes"];
			echo"$q5_tot_y";
			
		?></td>
      <td><?
$prosen_q5_y =($q5_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_y);
			?></td>
      <td><?  
	  			$q5_tot_n=$result["q5_no"];
			echo"$q5_tot_n";
			
		?></td>
      <td><?
$prosen_q5_y =($q5_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_y);
			?></td>
      <td><?  
	  			$q5_tot_na=$result["q5_na"];
			echo"$q5_tot_na";
			
		?></td>
      <td><?
$prosen_q5_na =($q5_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_na);
			?></td>
      <td><?  
	  			$q5_avg=$result["avg5"];
		printf("%1.2f ", $q5_avg);
			
		?></td>
    </tr>
    <tr>
      <td>6</td>
      <td>CE</td>
      <td>Email Handling Procedure </td>
      <td><?  
	  			$q6_tot_y=$result["q6_yes"];
			echo"$q6_tot_y";
			
		?></td>
      <td><?
$prosen_q6_y =($q6_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q6_y);
			?></td>
      <td><?  
	  			$q6_tot_n=$result["q6_no"];
			echo"$q6_tot_n";
			
		?></td>
      <td><?
$prosen_q6_y =($q6_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q6_y);
			?></td>
      <td><?  
	  			$q6_tot_na=$result["q6_na"];
			echo"$q6_tot_na";
			
		?></td>
      <td><?
$prosen_q6_na =($q6_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q6_na);
			?></td>
      <td><?  
	  			$q6_avg=$result["avg6"];
		printf("%1.2f ", $q6_avg);
			
		?></td>
    </tr>
    <tr>
      <td>7</td>
      <td>NCE</td>
      <td>Words composition, phrases and punctuation ( Grammar)</td>
      <td><?  
	  			$q7_tot_y=$result["q7_yes"];
			echo"$q7_tot_y";
			
		?></td>
      <td><?
$prosen_q7_y =($q7_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_y);
			?></td>
      <td><?  
	  			$q7_tot_n=$result["q7_no"];
			echo"$q7_tot_n";
			
		?></td>
      <td><?
$prosen_q7_y =($q7_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_y);
			?></td>
      <td><?  
	  			$q7_tot_na=$result["q7_na"];
			echo"$q7_tot_na";
			
		?></td>
      <td><?
$prosen_q7_na =($q7_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_na);
			?></td>
      <td><?  
	  			$q7_avg=$result["avg7"];
		printf("%1.2f ", $q7_avg);
			
		?></td>
    </tr>
    <tr>
      <td>8</td>
      <td>NCE</td>
      <td>Closing</td>
      <td><?  
	  			$q8_tot_y=$result["q8_yes"];
			echo"$q8_tot_y";
			
		?></td>
      <td><?
$prosen_q8_y =($q8_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_y);
			?></td>
      <td><?  
	  			$q8_tot_n=$result["q8_no"];
			echo"$q8_tot_n";
			
		?></td>
      <td><?
$prosen_q8_y =($q8_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_y);
			?></td>
      <td><?  
	  			$q8_tot_na=$result["q8_na"];
			echo"$q8_tot_na";
			
		?></td>
      <td><?
$prosen_q8_na =($q8_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_na);
			?></td>
      <td><?  
	  			$q8_avg=$result["avg8"];
		printf("%1.2f ", $q8_avg);
			
		?></td>
    </tr>
    <tr>
      <td>9</td>
      <td>NCE</td>
      <td>Input Accuracy Data / Information</td>
      <td><?  
	  			$q9_tot_y=$result["q9_yes"];
			echo"$q9_tot_y";
			
		?></td>
      <td><?
$prosen_q9_y =($q9_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_y);
			?></td>
      <td><?  
	  			$q9_tot_n=$result["q9_no"];
			echo"$q9_tot_n";
			
		?></td>
      <td><?
$prosen_q9_y =($q9_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_y);
			?></td>
      <td><?  
	  			$q9_tot_na=$result["q9_na"];
			echo"$q9_tot_na";
			
		?></td>
      <td><?
$prosen_q9_na =($q9_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_na);
			?></td>
      <td><?  
	  			$q9_avg=$result["avg9"];
		printf("%1.2f ", $q9_avg);
			
		?></td>
    </tr>
    <tr>
      <td>10</td>
      <td>NCE</td>
      <td>Campaign / Cross selling/ upselling / survey</td>
      <td><?  
	  			$q10_tot_y=$result["q10_yes"];
			echo"$q10_tot_y";
			
		?></td>
      <td><?
$prosen_q10_y =($q10_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_y);
			?></td>
      <td><?  
	  			$q10_tot_n=$result["q10_no"];
			echo"$q10_tot_n";
			
		?></td>
      <td><?
$prosen_q10_y =($q10_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_y);
			?></td>
      <td><?  
	  			$q10_tot_na=$result["q10_na"];
			echo"$q10_tot_na";
			
		?></td>
      <td><?
$prosen_q10_na =($q10_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_na);
			?></td>
      <td><?  
	  			$q10_avg=$result["avg10"];
		printf("%1.2f ", $q10_avg);
			
		?></td>
    </tr>
    
  </table>
  <p>&nbsp;</p>
  <table border="1"  class="table table-bordered table-infinite">
    <tr>
      <td >NCE Total </td>
      <td><? $nfe_total=$q1_tot_y+$q2_tot_y+$q3_tot_y+$q7_tot_y+$q8_tot_y+$q9_tot_y+$q10_tot_y+$q1_tot_na+$q2_tot_na+$q3_tot_na+$q7_tot_na+$q8_tot_na+$q9_tot_na+$q10_tot_na; echo"$nfe_total";?></td>
    </tr>
    <tr>
      <td>NCE Accuracy</td>
      <td><?
	  $nfe_acc=($nfe_total/(7*$jum_tot)*100);
		printf("%1.2f ", $nfe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>CE Total </td>
      <td><?  
		$stot_fe="[sp_fetotal_colection]'table_qm_email','$report_by','$tgl1','$tgl2','$kd_unit','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$stot_fe";
			$fe_total=$fe_tot*3;
			echo"$fe_total";
			
		?></td>
    </tr>
    <tr>
      <td>CE Accuracy </td>
      <td>
	  <?
	  $fe_acc=($fe_tot/$jum_tot)*100;
		printf("%1.2f ", $fe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>Handling Time  Average</td>
      <td><?  
			$stot_hh="[sp_handling_colection]'table_qm_email','$report_by','$tgl1','$tgl2','$kd_unit','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
			//echo $stot_hh;
			$r_stot_hh=mssql_query($stot_hh);
	   while($d_stot_hh=mssql_fetch_array($r_stot_hh))
			{
		     	$d_tot_hh=$d_stot_hh["jum_hh"];
		     	$d_tot_mm=$d_stot_hh["jum_mm"];
		     	$d_tot_ss=$d_stot_hh["jum_ss"];
			} 
			
			//echo"$d_tot_hh";
			$hhtomm=(($d_tot_hh*3600)+($d_tot_mm*60)+$d_tot_ss)/$jum_tot;
			
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
	  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg+$q9_avg+$q10_avg;
	  //echo"$score_avg";
	  printf("%1.2f ", $score_avg);
	  ?></td>
    </tr>
    
<? }?>
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