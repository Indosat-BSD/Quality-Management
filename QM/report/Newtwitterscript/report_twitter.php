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
      <td width="90%"><div align="center" class="style3"></div></td>
    </tr>
    <!--<tr>
      <td>Status Report</td>
      <td>
		<select name="st_rep" class="box" id="st_rep" onchange="satu.submit()"/>
		  <?php
		  /*echo "
		  <option value=4",4==$st_rep?" selected":"",">Data Baru (2017)</option>
		  <option value=3",3==$st_rep?" selected":"",">Data Baru</option>
		  <!--<option value=2"==$st_rep?" selected":"",">Data Lama</option>-->
		  ";
		  echo"Status Report : $st_rep";*/
		  ?>
	  </td>
    </tr>-->
	<?php $st_rep=4; //hapus ini jika status report uncomment ?>
	
    <tr class="content">
      <td>Report By </td>
      <td><select name="report_by" id="report_by" class="box" onchange="satu.submit()">
        <option value="0">Select By
        <?php
			$katahh=array('New Report','Departement','Unit','Agent','Observer','Skala');
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
      <td><? }else if ($report_by=="Unit"){?></td>
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
			<option value="" <?=($select_region=='')?'Selected':'';?>>ALL</option>
			<option value="JBRO" <?=($select_region=='JBRO')?'Selected':'';?>>JBRO</option>
			<option value="SMG" <?=($select_region=='SMG')?'Selected':'';?>>SMG</option>
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
from db_qm.dbo.Table_qm_twitter a inner join
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
      <td><select name="skalacmb" id="select" class="box"   >
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
		  $rtgl1 = date('d/m/Y',strtotime($date_eva1));
		  $rtgl2 = date('d/m/Y',strtotime($date_eva2));
		  
		if($jum_tot<>"0" and $report_by<>"0" and ($date_eva1<>"" and $date_eva2<>"")){
			echo "<a class='btn btn-warning' href='report/export_twitter.php?st_rep=$st_rep&cc_mentari=$cc_mentari&cc_im3=$cc_im3&cc_pp=$cc_pp&cc_matrix=$cc_matrix&cc_m2=$cc_m2&cc_ftm=$cc_ftm&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&date_eva1=$tgl1&date_eva2=$tgl2&select_region=$select_region&skala=$skalacmb&depart=$departemen_skala&unitSkala=$unit_skala&tipe_report=$tipe_report'>export to excel</a>";
		}else{
			echo "<a class='btn btn-warning'>export to excel</a>";
		}
		?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
    <?
	include "konek_qm.php";
	if($c_observer==""){$obs=0;}else{$obs=$c_observer;}
	if ($date_eva1 != "" && $date_eva2 != "") {
	
	 $itung="[sp_count_colection]'table_qm_twitter','$tgl1','$tgl2','$report_by','%$kd_unit%','$cc_mentari','$cc_im3','$obs','%$nik_agent%','$select_region','$skalacmb','$departemen_skala','$unit_skala','$st_rep'";
	 //echo $itung;
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
//echo "$q1_yes_jum";
	 }
	  	
	if((isset($searchButton) and $jum_tot<>"0" and $report_by<>"0" and ($date_eva1<>"" and $date_eva2<>"")) or ($kd_del=="ok"and $jum_tot<>"0"))
	{	 ?>
<table width="290%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
<? if ($st_rep =='2'){ //menampilkan data lama?>
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="1%" rowspan="2" class="head0"><div align="center">No</div></th>
	  <? if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"corres"){?>
      <th width="4%" rowspan="2" class="head0">Delete</th>
	  <th width="4%" rowspan="2" class="head0">Edit</th>
	  <? } ?>
      <th width="4%" rowspan="2" class="head0"><div align="center">Validator</div></th>
	  <th width="4%" rowspan="2" class="head0"><div align="center">Validation</div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Username</div></th>
	   <th width="4%" rowspan="2" class="head0"><div align="center">Region</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Nama</div></th>
      <th width="2%" rowspan="2" class="head0">Tenure</th>
      <th width="2%" rowspan="2" class="head0"><div align="center">TL/SPV</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Interaction Date </div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Observation Date</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Week</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Customer Name </div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Interaction Type</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Product Type</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Product Detail</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Product Detail by Agent</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Repeat (Y / N)</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Date of previous call</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Previous Agent </div></th>
       
      <th colspan="3" class="head0"><div align="center">Respon ( SLA ) 5 menit</div></th>
      <th colspan="3" class="head0"><div align="center">Greeting user account name, Care and Friendly</div></th>
      <th colspan="3" class="head0"><div align="center">Verify and Identify customer needs </div></th>
      <th colspan="3" class="head0"><div align="center">Correct Answer & Provide Solution</div></th>
      <th colspan="3" class="head0"><div align="center">Proses Compliance  </div></th>
      <th colspan="3" class="head0"><div align="center">Ethics  and twitter handling </div></th>
      <th colspan="3" class="head0"><div align="center">Approriate words, acronym and punctuation/ Grammar </div></th>
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
    </tr>
	</thead>	
	<?
					$q_user="[sp_search_colection]'table_qm_twitter','$report_by','%$kd_unit%','$tgl1','$tgl2','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skalacmb','$departemen_skala','$unit_skala','$st_rep'";
					
					//echo"$q_user";
					
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$spv_name=$d_user["spv_name"];
						$interaction_date=$d_user["interaction_date"];
						$interaction_date2 = $d_user['date'];
						 $jam = $d_user['jam'];
						 $jamm = explode (":", $jam);
						 $hh = $jamm[0];
						 $mm = $jamm[1];
						$observation_date=$d_user["observation_date"];
						$tenure=$d_user["tenure"];
						$observ=$d_user["observ"];
						$week_=$d_user["week_"];
						$customer_name=$d_user["customer_name"];
						$interaction_type=$d_user["interaction_type"];
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
						$recommendation=$d_user["recommendation"];
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
						$q15=$d_user["q15"];
						$save_q15=$d_user["save_q15"];
						$q16=$d_user["q16"];
						$save_q16=$d_user["save_q16"];
						$q17=$d_user["q17"];
						$save_q17=$d_user["save_q17"];
						$q18=$d_user["q18"];
						$save_q18=$d_user["save_q18"];
						$q19=$d_user["q19"];
						$save_q19=$d_user["save_q19"];
						$q20=$d_user["q20"];
						$save_q20=$d_user["save_q20"];
						$status_save=$d_user["status_save"];
						$observer=$d_user["observer"];
						$nama_unit=$d_user["nama_unit"];
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
						$notes15=$d_user["notes15"];
						$notes16=$d_user["notes16"];
						$notes17=$d_user["notes17"];
						$notes18=$d_user["notes18"];
						$notes19=$d_user["notes19"];
						$notes20=$d_user["notes20"];
						$repeat=$d_user["repeat"];
						//$userid=$d_user["userid"];
						$sr=$d_user["sr"];
		if ($q1=="yes" or $q1=="na" )
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
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na") and ($q6=="yes" or $q6=="na") )
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
		
				$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q7+$sc_q8+$sc_q9;
 				$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9;
				
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
					  if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"corres"){
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
					  					  
					  <a href="<? echo "del_group.php?report_by=$report_by&kode_del=detail_twitter&id_qm=$id_qm&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&c_observer=$observer&st_rep=$st_rep"; ?>" onclick="return confirmDelete2();">
					  <?
					  	 echo "delete</a></td>";	
						echo "<td>";
						
						$q ="select nama as observer_name from hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer' ";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];
					  ?>
					  					  
					  <a href="<? echo "edit_twitter.php?st_rep=$st_rep&kode_edit=edit_twitter&id_qm=$id_qm&full_name=$full_name&tenure=$tenure&spv_name=$spv_name&observer_name=$observname&interaction_date=$interaction_date2&hh=$hh&mm=$mm&observation_date=$observ&week_=$week_&customer_name=$customer_name&interaction_type=$interaction_type&product_type=$product_type&product_detail=$product_detail&product_detail_agent=$product_detail_agent&fcr=$fcr&repeat=$repeat&date_prev_call=$date_prev_call2&prev_agent=$prev_agent&recommendation=$recommendation&hh_2=$hh_2&mm_2=$mm_2&ss_2=$ss_2&drop_call=$drop_call&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&notes6=$notes6&notes7=$notes7&notes8=$notes8&notes9=$notes9&notes10=$notes10&notes11=$notes11&notes12=$notes12&notes13=$notes13&notes14=$notes14&notes15=$notes15&notes16=$notes16&notes17=$notes17&notes18=$notes18&notes19=$notes19&notes20=$notes20&q1=$q1&q2=$q2&q3=$q3&q4=$q4&q5=$q5&q6=$q6&q7=$q7&q8=$q8&q9=$q9&q10=$q10&q11=$q11&q12=$q12&userid=$userid&observer=$SES__NIK&date_saved=$date_saved&fe_acc=$sc_fe&nfe_acc=$sc_nfe&total_score=$total_score&skala=$skala&notes_recording=$notes_recording"; ?>" onClick="return popup(this, 'notes');">	
					  
					  <?
					  	 echo "Edit</a></td>";
						 }		  
		if ($q1=="yes" or $q1=="na" )
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
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na") and ($q6=="yes" or $q6=="na"))
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

		
			$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q7+$sc_q8+$sc_q9;
 			$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9;
			
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
//
/*
					$q ="select full_name as observer_name 
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
			
					$hhtomm1=($hh_handling_time*3600)+($mm_handling_time*60)+($ss_handling_time);
			

?>

   		  
					<td><a href="showKalibrasi/show_twitter.php?id=<? echo "$id";?>&id_qm=<? echo "$id_qm";?>&agree=<? echo "$agree";?>" onClick="return popup(this, 'notes');">
					<? if ($id_kalibrasi != ""){
					$q_kal="select nama as kalibrasi_name from hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
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
                      
					  <td>$sc_fe</td>
                      <td>$sc_nfe</td>
					  <td>$total_score</td>
                      <td>$skala</td>
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
  <table width="568" border="1"  class="table table-bordered table-infinite">
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
      <td>Respon ( SLA ) 5 menit</td>
      <td><?  
				  //edit hendi
	   $queryhendi="[sp_reportqm_colection]'table_qm_twitter','$tgl1','$tgl2','$report_by','$c_observer','%$nik_agent%','$cc_mentari','$cc_im3','%$kd_unit%','%%','$select_region','$skalacmb','$departemen_skala','$unit_skala','$st_rep'";
     //echo $queryhendi;
	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
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
      <td>Greeting user account name, Care and Friendly</td>
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
      <td>Verify and Identify customer needs</td>
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
      <td>Correct Answer & Provide Solution</td>
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
      <td>Ethics  and twitter handling </td>
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
      <td>Approriate words, acronym and punctuation/ Grammar</td>
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
      <td>Input Accuracy Data / Information </td>
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
      <td>Campaign / Cross selling/ upselling / survey</td>
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
    
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1" class="table table-bordered table-infinite">
    <tr>
      <td width="180">NCE Total </td>
	   <td width="68"><? $nfe_total=$q1_tot_y+$q2_tot_y+$q3_tot_y+$q7_tot_y+$q8_tot_y+$q9_tot_y+$q1_tot_na+$q2_tot_na+$q3_tot_na+$q7_tot_na+$q8_tot_na+$q9_tot_na; echo"$nfe_total";?></td>
    </tr>
    <tr>
      <td>NCE Accuracy</td>
      <td><?
	  $nfe_acc=($nfe_total/(6*$jum_tot)*100);
		printf("%1.2f ", $nfe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>NCE Total </td>
      <td><?  
     
		$stot_fe="[sp_fetotal_colection]'table_qm_twitter','$report_by','$tgl1','$tgl2','$kd_unit','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skalacmb','$departemen_skala','$unit_skala','$st_rep'";
		//echo $stot_fe;
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
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
      <td>Repeat (Y) </td>
      <td><?  
	  			if ($report_by=="Unit")
				  	{				  
					  
					   $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c
					   			inner join db_qm.dbo.table_qm_twitter a on a.id_qm=c.id_qm
					   			where   a.status_save='complete' and a.id_unit like '%$kd_unit%'
					   			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'";
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
	  			if ($report_by=="Departement")
				  	{				  
					  
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm where a.status_save='complete' and repeat='yes'  and (a.id_unit like '%$cc_mentari%')
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'";
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
					
	  			if ($report_by=="Observer")
				  	{
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm inner join hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  cast(id_data_pribadi as varchar)='$c_observer'
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'"; 
					 /*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
					  
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm inner join hrms.dbo.tb_data_pribadi z  on a.id_pribadi_user=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  (z.nik_karyawan like '%$nik_agent%' or z.nama like '%$nik_agent%')
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'"; 
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
	  				
						if ($report_by=="Skala")
				  	{	
				 	 $stot_r="select count(*) as jum_s_r
	from db_qm.dbo.table_qm_twitter a with(nolock) 
   inner join db_qm.dbo.table_qm_twitter_detail b with(nolock) on a.id_qm=b.id_qm
where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'
and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%' and a.flag_status='$st_rep'  AND
a.id_qm in(
select id_qm from (
					select a.id_qm,
					case when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 90 then 'A'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 80 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  < 90 then 'B'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 70 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  < 80 then 'C'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 60 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  < 70 then 'D'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)   < 60 then 'E' end 'Skala'
					from db_qm.dbo.table_qm_twitter a with(nolock) 
					inner join db_qm.dbo.table_qm_twitter_detail b with(nolock) on a.id_qm=b.id_qm 
					where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112)
					 between '$tgl1' and '$tgl2' and a.id_unit like '%$departemen_skala%' 
					 and a.id_unit like '%$unit_skala%' 
				    group by a.id_qm 
				) AA
			 where Skala like '%$skalacmb' )";
			 	/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
					}
					//echo "$stot_r";
	   $r_stot_r=mssql_query($stot_r);
	   while($d_stot_r=mssql_fetch_array($r_stot_r))
			{
		     	$r_tot_y=$d_stot_r["jum_s_r"];
			} 		
			echo"$r_tot_y";
		?></td>
    </tr>
    <tr>
      <td>Score Average</td>
      <td><?
	  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg+$q9_avg;
	  //echo"$score_avg";
	  printf("%1.2f ", $score_avg);
	  ?></td>
    </tr>
<? 
}else if($st_rep=='4'){ ?>
<!--====================================== Update Jan 2017 ===================================-->
<?php
if($report_by!='New Report'){
?>
<thead>
    <tr bgcolor="#CCCCCC">
      <th width="1%" rowspan="3" class="head0"><div align="center">No</div></th>
	  <? if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"corres"){?>
      <th width="4%" rowspan="3" class="head0">Delete</th>
	  <th width="4%" rowspan="3" class="head0">Edit</th>
	  <? } ?>
      <th width="4%" rowspan="3" class="head0"><div align="center">Validator</div></th>
	  <th width="4%" rowspan="3" class="head0"><div align="center">Validation</div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Username</div></th>
	   <th width="4%" rowspan="3" class="head0"><div align="center">Region</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Nama</div></th>
      <th width="2%" rowspan="3" class="head0">Tenure</th>
      <th width="2%" rowspan="3" class="head0"><div align="center">TL/SPV</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Date </div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Observation Date</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Week</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Customer Name </div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Type</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Type</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Detail</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Detail by Agent</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Repeat (Y / N)</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Date of previous call</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Previous Agent </div></th>
	  
      <th colspan="3" class="head0"><div align="center">Response SLA</div></th>
      <th colspan="3" class="head0"><div align="center">Standar Response</div></th>
      <th colspan="3" class="head0"><div align="center">Probing</div></th>
      <th colspan="15" class="head0"><div align="center">Solution & Akurasi Data</div></th>
      <th colspan="3" class="head0"><div align="center">Type Accuracy</div></th>
      <th colspan="3" class="head0"><div align="center">Closing greeting</div></th>
      <th colspan="3" class="head0"><div align="center">Additional Program</div></th>
	  
	  <th width="4%" rowspan="3" class="head0"><div align="center">Total Score </div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Skala</div></th>
	  <th width="4%" rowspan="3" class="head0"><div align="center">Recommendation</div></th>
	  <th width="6%" rowspan="3" class="head0"><div align="center">Action to be done - QA</div></th>
      <th width="7%" rowspan="3" class="head0"><div align="center">Action to be done - Opers</div></th>
	 <? if ($SES_KODE_LEVEL <>"mitra"){?>
      <th width="7%" rowspan="3" class="head0"><div align="center">Notes sample recording</div></th>
	  <? } ?>
      <th width="4%" rowspan="3" class="head0"><div align="center">Observer</div></th>
    </tr>
	<tr bgcolor="#CCCCCC">
      <th colspan="3" class="head0"><div align="center">Response ( SLA ) 5 minutes</div></th>
      <th colspan="3" class="head0"><div align="center">Greeting user account name, Care and Friendly</div></th>
      <th colspan="3" class="head0"><div align="center">Verify and Identify customer needs</div></th>
      <th colspan="3" class="head0"><div align="center">Correct Solution</div></th>
	  <th colspan="3" class="head0"><div align="center">Ethics and twitter handling</div></th>
      <th colspan="3" class="head0"><div align="center">Input Akurasi Data</div></th>
      <th colspan="3" class="head0"><div align="center">Notes & Information</div></th>
      <th colspan="3" class="head0"><div align="center">FCR</div></th>
      <th colspan="3" class="head0"><div align="center">Words composition, phrases and punctuation ( Grammar)</div></th>
	  <th colspan="3" class="head0"><div align="center">Closing</div></th>
	  <th colspan="3" class="head0"><div align="center">Campaign / Cross selling/ upselling / survey</div></th>
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
					$q_user="[sp_search_colection]'table_qm_twitter','$report_by','%$kd_unit%','$tgl1','$tgl2','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skalacmb','$departemen_skala','$unit_skala','$st_rep' ";
					
					// echo"$q_user";
					
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$spv_name=$d_user["spv_name"];
						$interaction_date=$d_user["interaction_date"];
						$interaction_date2 = $d_user['date'];
						 $jam = $d_user['jam'];
						 $jamm = explode (":", $jam);
						 $hh = $jamm[0];
						 $mm = $jamm[1];
						$observation_date=$d_user["observation_date"];
						$tenure=$d_user["tenure"];
						$observ=$d_user["observ"];
						$week_=$d_user["week_"];
						$customer_name=$d_user["customer_name"];
						$interaction_type=$d_user["interaction_type"];
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
						$recommendation=$d_user["recommendation"];
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
						$q15=$d_user["q15"];
						$save_q15=$d_user["save_q15"];
						$q16=$d_user["q16"];
						$save_q16=$d_user["save_q16"];
						$q17=$d_user["q17"];
						$save_q17=$d_user["save_q17"];
						$q18=$d_user["q18"];
						$save_q18=$d_user["save_q18"];
						$q19=$d_user["q19"];
						$save_q19=$d_user["save_q19"];
						$q20=$d_user["q20"];
						$save_q20=$d_user["save_q20"];
						$status_save=$d_user["status_save"];
						$observer=$d_user["observer"];
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
						$notes9=$d_user["notes9"];
						$notes10=$d_user["notes10"];
						$notes11=$d_user["notes11"];
						$notes12=$d_user["notes12"];
						$notes13=$d_user["notes13"];
						$notes14=$d_user["notes14"];
						$notes15=$d_user["notes15"];
						$notes16=$d_user["notes16"];
						$notes17=$d_user["notes17"];
						$notes18=$d_user["notes18"];
						$notes19=$d_user["notes19"];
						$notes20=$d_user["notes20"];
						$repeat=$d_user["repeat"];
						//$userid=$d_user["userid"];
						$sr=$d_user["sr"];
						$skala2=$d_user["Skala"];
		
						echo "<tr class='content'>
                      <td>$no</td>";
					  if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"corres"){
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
					  					  
					  <a href="<? echo "del_group.php?st_del=report_twitter&report_by=$report_by&kode_del=detail_twitter&id_qm=$id_qm&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&c_observer=$c_observer&st_rep=$st_rep&select_region=$select_region&nik_agent=$nik_agent&cc_mentari=$cc_mentari"; ?>" onclick="return confirmDelete2();">
					  <?
					  	 echo "delete</a></td>";	
						echo "<td>";
						
						$q ="select nama as observer_name from hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer' ";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];
					  ?>
					  					  
					  <a href="<? echo "edit_twitter.php?st_rep=$st_rep&kode_edit=edit_twitter&id_qm=$id_qm&full_name=$full_name&tenure=$tenure&spv_name=$spv_name&observer_name=$observname&interaction_date=$interaction_date2&hh=$hh&mm=$mm&observation_date=$observ&week_=$week_&customer_name=$customer_name&interaction_type=$interaction_type&product_type=$product_type&product_detail=$product_detail&product_detail_agent=$product_detail_agent&fcr=$fcr&repeat=$repeat&date_prev_call=$date_prev_call2&prev_agent=$prev_agent&recommendation=$recommendation&hh_2=$hh_2&mm_2=$mm_2&ss_2=$ss_2&drop_call=$drop_call&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&notes6=$notes6&notes7=$notes7&notes8=$notes8&notes9=$notes9&notes10=$notes10&notes11=$notes11&notes12=$notes12&notes13=$notes13&notes14=$notes14&notes15=$notes15&notes16=$notes16&notes17=$notes17&notes18=$notes18&notes19=$notes19&notes20=$notes20&sc1=$q1&sc2=$q2&sc3=$q3&sc4=$q4&sc5=$q5&sc6=$q6&sc7=$q7&sc8=$q8&sc9=$q9&sc10=$q10&sc11=$q11&userid=$userid&observer=$SES__NIK&date_saved=$date_saved&fe_acc=$sc_fe&nfe_acc=$sc_nfe&total_score=$score_tot&skala=$skala2&notes_recording=$notes_recording"; ?>" onClick="return popup(this, 'notes');">	
					  
					  <?
					  	 echo "Edit</a></td>";
						 }		  
		
/*
					$q ="select full_name as observer_name 
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
			
					$hhtomm1=($hh_handling_time*3600)+($mm_handling_time*60)+($ss_handling_time);
			

?>

					<td><a href="showKalibrasi/show_twitter.php?id=<? echo "$id";?>&id_qm=<? echo "$id_qm";?>&agree=<? echo "$agree";?>" onClick="return popup(this, 'notes');">
					<? if ($id_kalibrasi != ""){
					$q_kal="select nama as kalibrasi_name from hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
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
                      
					  <td>$score_tot</td>
                      <td>$skala2</td>
					  <td>$recommendation</td>
					  <td>$action_done_qa</br></br><a href='upload_path/$file_action_done_qa'>$file_action_done_qa</a></td>
                      <td>$action_done_ops</br></br><a href='upload_path/$file_action_done_ops'>$file_action_done_ops</a></td>";
                      if ($SES_KODE_LEVEL<>"mitra"){
					  echo"<td>$notes_recording</td>";
					  }
					  echo"<td>$observer_name</td>
					  
                      </tr>";
					  $no++;
					  
						}
				
					?> </a>
  </table>
  <p>&nbsp;</p>
  <p>Total data : <? echo"$jum_tot"; ?></p>
  
  <table width="700" border="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th rowspan="2" width="17" class="head0"><div align="center">No</div></th>
      <th rowspan="2" width="36" class="head0"><div align="center">Category</div></th>
      <th rowspan="2" width="205" class="head0"><div align="center">Attributes</div></th>
	  <th rowspan="2" width="17" class="head0"><div align="center">Bobot</div></th>
	  <th colspan="4" class="head0"><div align="center">Scale</div></th>
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
      <td>Response SLA</td>
	  <td>Response ( SLA ) 5 minutes</td>
      <td>5</td>
      <td><?  
				  //edit hendi
      $queryhendi="[sp_reportqm_email]'table_qm_twitter','$tgl1','$tgl2','$report_by','$c_observer','%$nik_agent%','$cc_mentari','$cc_im3','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";

	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
	  //echo $queryhendi;
      //end edit
      
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
      <td>Standar Response</td>
	  <td>Greeting user account name, Care and Friendly</td>
      <td>4</td>
      <td><?  
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
      <td>Probing</td>
	  <td>Verify and Identify customer needs</td>
      <td>5</td>
	  <td><?  
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
	  <td rowspan="5">4</td>
	  <td rowspan="5">Solution & Akurasi data</td>
      <td>Correct Solution</td>
      <td>35</td>
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
	  <td>Ethics and twitter handling</td>
      <td>10</td>
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
    <tr>
	  <td>Input Akurasi Data</td>
      <td>8</td>
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
	  <td>Notes & Information</td>
      <td>5</td>
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
	  <td>FCR</td>
      <td>12</td>
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
	   
    </tr>
    <tr>
      <td>5</td>
      <td>Type Accuracy</td>
	  <td>Words composition, phrases and punctuation ( Grammar)</td>
      <td>8</td>
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
	  <td>6</td>
      <td>Closing</td>
	  <td>Closing</td>
      <td>3</td>
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
    <tr>
      <td>7</td>
      <td>Additional Program</td>
	  <td>Campaign / Cross selling/ upselling / survey</td>
      <td>5</td>
      <td>
	    <?  
		  	$q11_tot_y=$result["q11_yes"];
			echo"$q11_tot_y";
			
			$q11_avg=$result["avg11"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q11_y =($q11_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q11_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q11_tot_n=$result["q11_no"];
			echo"$q11_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q11_n =($q11_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q11_n);
		?>
	  </td>
	   
    </tr>
	
	</table>	
	
	
	<p>&nbsp </p>
	<table width="264" border="1" class="table table-bordered table-infinite">
  <?  
	  		if ($report_by=="Unit")
				  	{				  
					  
					   $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c
					   			inner join db_qm.dbo.table_qm_twitter a on a.id_qm=c.id_qm
					   			where a.status_save='complete' and c.repeat='yes' and a.id_unit like '%$kd_unit%'
					   			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'";
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
	  			if ($report_by=="Departement")
				  	{				  
					  
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm where a.status_save='complete' and repeat='yes'  and (a.id_unit like '%$cc_mentari%')
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'";
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
					
	  			if ($report_by=="Observer")
				  	{
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm inner join hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  cast(id_data_pribadi as varchar) like case when '$c_observer'<>'0' then '$c_observer' else '%' end
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'"; 
					 /*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
					  
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm inner join hrms.dbo.tb_data_pribadi z  on a.id_pribadi_user=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  (z.nik_karyawan like '%$nik_agent%' or z.nama like '%$nik_agent%')
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'"; 
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
	  				
					if ($report_by=="Skala")
				  	{	
				 	 $stot_r="select count(*) as jum_s_r
	from db_qm.dbo.table_qm_twitter a with(nolock) 
   inner join db_qm.dbo.table_qm_twitter_detail b with(nolock) on a.id_qm=b.id_qm
where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'
and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%' and a.flag_status='$st_rep'  AND
a.id_qm in(
select id_qm from (
					select a.id_qm,
					case when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 90 then 'A'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 80 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  < 90 then 'B'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 70 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  < 80 then 'C'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 60 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  < 70 then 'D'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)   < 60 then 'E' end 'Skala'
					from db_qm.dbo.table_qm_twitter a with(nolock) 
					inner join db_qm.dbo.table_qm_twitter_detail b with(nolock) on a.id_qm=b.id_qm 
					where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112)
					 between '$tgl1' and '$tgl2' and a.id_unit like '%$departemen_skala%' 
					 and a.id_unit like '%$unit_skala%' 
				    group by a.id_qm 
				) AA
			 where Skala like '%$skalacmb' )";  
					}
				//echo $stot_fcr;
				//echo $stot_r;
	   
		    $r_stot_r=mssql_query($stot_r);
	   while($d_stot_r=mssql_fetch_array($r_stot_r))
			{
		     	$rep_tot_y=$d_stot_r["jum_s_r"];
			} 				
		?>
	<tr>
      <td width="180">Total Sample."</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
	
	<tr>
      <td width="180">Repetitive Call</td>
      <td width="68">
		<?  
	  				
				echo"$rep_tot_y";
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">Average Score</td>
      <td width="68">
		<?
		  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg+$q9_avg+$q10_avg+$q11_avg;
		  //echo"$score_avg";
		  printf("%1.2f ", $score_avg);
		  //echo $q1_avg.",".$q2_avg.",".$q3_avg.",".$q4_avg.",".$q5_avg.",".$q6_avg.",".$q7_avg.",".$q8_avg;
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
<?php
}else if($report_by=='New Report' and $tipe_report!=''){
?>
	<!--==================================== End Update Jan 2017 =================================-->
	
	<!-- ====================================================================================================================== -->
	<!-- ================================================ Update Detail Report ================================================ -->
	<!-- ====================================================================================================================== -->
	<?  
	
	//edit hendi
      $queryhendi="[sp_reportqm_email]'table_qm_twitter','$tgl1','$tgl2','$report_by','$c_observer','%$nik_agent%','$cc_mentari','$cc_im3','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";

	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
	  //echo $queryhendi;
      //end edit
      
	if($tipe_report=='summary'){ 
	
			$q1_tot_y=$result["q1_yes"];
	  		$q2_tot_y=$result["q2_yes"];
	  		$q3_tot_y=$result["q3_yes"];
		  	$q4_tot_y=$result["q4_yes"];
		  	$q5_tot_y=$result["q5_yes"];
		  	$q6_tot_y=$result["q6_yes"];
		  	$q7_tot_y=$result["q7_yes"];
		  	$q8_tot_y=$result["q8_yes"];
		  	$q9_tot_y=$result["q9_yes"];
		  	$q10_tot_y=$result["q10_yes"];
		  	$q11_tot_y=$result["q11_yes"];
			
		  	$q1_tot_n=$result["q1_no"];
		  	$q2_tot_n=$result["q2_no"];
		  	$q3_tot_n=$result["q3_no"];
		  	$q4_tot_n=$result["q4_no"];
		  	$q5_tot_n=$result["q5_no"];
		  	$q6_tot_n=$result["q6_no"];
		  	$q7_tot_n=$result["q7_no"];
		  	$q8_tot_n=$result["q8_no"];
		  	$q9_tot_n=$result["q9_no"];
		  	$q10_tot_n=$result["q10_no"];
		  	$q11_tot_n=$result["q11_no"];
			
			$q1_avg=$result["avg1"];
			$q2_avg=$result["avg2"];
			$q3_avg=$result["avg3"];
			$q4_avg=$result["avg4"];
			$q5_avg=$result["avg5"];
			$q6_avg=$result["avg6"];
			$q7_avg=$result["avg7"];
			$q8_avg=$result["avg8"];
			$q9_avg=$result["avg9"];
			$q10_avg=$result["avg10"];
			$q11_avg=$result["avg11"];
			
			$prosen_q1_y =($q1_tot_y/$jum_tot)*100 ;
			$prosen_q2_y =($q2_tot_y/$jum_tot)*100 ;
			$prosen_q3_y =($q3_tot_y/$jum_tot)*100 ;
			$prosen_q4_y =($q4_tot_y/$jum_tot)*100 ;
			$prosen_q5_y =($q5_tot_y/$jum_tot)*100 ;
			$prosen_q6_y =($q6_tot_y/$jum_tot)*100 ;
			$prosen_q7_y =($q7_tot_y/$jum_tot)*100 ;
			$prosen_q8_y =($q8_tot_y/$jum_tot)*100 ;
			$prosen_q9_y =($q9_tot_y/$jum_tot)*100 ;
			$prosen_q10_y =($q10_tot_y/$jum_tot)*100 ;
			$prosen_q11_y =($q11_tot_y/$jum_tot)*100 ;
			
			$prosen_q1_n =($q1_tot_n/$jum_tot)*100 ;
			$prosen_q2_n =($q2_tot_n/$jum_tot)*100 ;
			$prosen_q3_n =($q3_tot_n/$jum_tot)*100 ;
			$prosen_q4_n =($q4_tot_n/$jum_tot)*100 ;
			$prosen_q5_n =($q5_tot_n/$jum_tot)*100 ;
			$prosen_q6_n =($q6_tot_n/$jum_tot)*100 ;
			$prosen_q7_n =($q7_tot_n/$jum_tot)*100 ;
			$prosen_q8_n =($q8_tot_n/$jum_tot)*100 ;
			$prosen_q9_n =($q9_tot_n/$jum_tot)*100 ;
			$prosen_q10_n =($q10_tot_n/$jum_tot)*100 ;
			$prosen_q11_n =($q11_tot_n/$jum_tot)*100 ;
	?>
	
<h4 class="widgettitle">Chart Twitter</h4>
<div class="widgetcontent">
<?php
$chartdatay = round($prosen_q1_y).','.round($prosen_q2_y).','.round($prosen_q3_y).','.round($prosen_q4_y).','.round($prosen_q5_y).','.round($prosen_q6_y).','.round($prosen_q7_y).','.round($prosen_q8_y).','.round($prosen_q9_y).','.round($prosen_q10_y).','.round($prosen_q11_y);
$chartdatan = round($prosen_q1_n).','.round($prosen_q2_n).','.round($prosen_q3_n).','.round($prosen_q4_n).','.round($prosen_q5_n).','.round($prosen_q6_n).','.round($prosen_q7_n).','.round($prosen_q8_n).','.round($prosen_q9_n).','.round($prosen_q10_n).','.round($prosen_q11_n);
//echo"$chartdatay<br>$chartdatan";
?>

<div id="containerdc" style="min-width: 310px; height: 600px; margin: 0 auto"></div>
<script type="text/javascript">
	$(function () {
    Highcharts.chart('containerdc', {
        chart: {
            type: 'column'
        },
        title: {
            text: 'REPORT TWITTER'
        },
        subtitle: {
            text: 'Periode <b><?=$rtgl1;?></b> To <b><?=$rtgl2;?></b>'
        },
        xAxis: {
            categories: [
                'Response 5 minutes',
                'Greeting',
                'Verify Customer',
                'Correct Solution',
                'Ethics Handling',
                'Akurasi Data ',
                'Notes',
                'FCR',
                'Words Composition',
                'Closing',
                'Campaign / Cross selling/ upselling / survey'
            ],
            crosshair: true,
			title: {
                enabled: true,
                text: '<h1>ATTRIBUTES</h1>',
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
});
</script>
	<?php } ?>
</div>
	
	<table width="290%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
		<thead>
		<tr bgcolor="#CCCCCC">
		  <th width="10%" rowspan="3" class="head0"><div align="center">No</div></th>
		  <th width="10%" rowspan="3" class="head0"><div align="center">NIK</div></th>
		  <th width="10%" rowspan="3" class="head0"><div align="center">Nama</div></th>
		  <?php if($tipe_report=='detail'){ ?>
		  <th width="10%" rowspan="3" class="head0"><div align="center">Periode</div></th>
		  <?php }?>
		  
		  <th colspan="2" class="head0"><div align="center">Response SLA</div></th>
		  <th colspan="2" class="head0"><div align="center">Standar Response</div></th>
		  <th colspan="2" class="head0"><div align="center">Probing</div></th>
		  <th colspan="10" class="head0"><div align="center">Solution & Akurasi Data</div></th>
		  <th colspan="2" class="head0"><div align="center">Type Accuracy</div></th>
		  <th colspan="2" class="head0"><div align="center">Closing greeting</div></th>
		  <th colspan="2" class="head0"><div align="center">Additional Program</div></th>
		  
		  <th width="4%" colspan="4" rowspan="2" class="head0"><div align="center">Total</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">Score</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">NOE</div></th>
		</tr>
		<tr bgcolor="#CCCCCC">
		  <th colspan="2" class="head0"><div align="center">Response ( SLA ) 5 minutes</div></th>
		  <th colspan="2" class="head0"><div align="center">Greeting user account name, Care and Friendly</div></th>
		  <th colspan="2" class="head0"><div align="center">Verify and Identify customer needs</div></th>
		  <th colspan="2" class="head0"><div align="center">Correct Solution</div></th>
		  <th colspan="2" class="head0"><div align="center">Ethics and twitter handling</div></th>
		  <th colspan="2" class="head0"><div align="center">Input Akurasi Data</div></th>
		  <th colspan="2" class="head0"><div align="center">Notes & Information</div></th>
		  <th colspan="2" class="head0"><div align="center">FCR</div></th>
		  <th colspan="2" class="head0"><div align="center">Words composition, phrases and punctuation ( Grammar)</div></th>
		  <th colspan="2" class="head0"><div align="center">Closing</div></th>
		  <th colspan="2" class="head0"><div align="center">Campaign / Cross selling/ upselling / survey</div></th>
		</tr>
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

		$a_user="[sp_search_colection]'table_qm_twitter','$report_by','%$kd_unit%','$tgl1','$tgl2','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skalacmb','$departemen_skala','$unit_skala','$st_rep','summary','socmed' ";
		
		// echo"$a_user";
		
		$b_user=mssql_query($a_user);
		$no=1;
		$sample=0;
		while($c_user=mssql_fetch_array($b_user)){
			echo "<tr class='content'>
				<td>$no</td>
				<td>".$c_user['nik_karyawan']."</td>
				<td>".$c_user['full_name']."</td>
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
				<td>".$c_user['q8_no']."</td>
				<td>".$c_user['q9_yes']."</td>
				<td>".$c_user['q9_no']."</td>
				<td>".$c_user['q10_yes']."</td>
				<td>".$c_user['q10_no']."</td>
				<td>".$c_user['q11_yes']."</td>
				<td>".$c_user['q11_no']."</td>";
				$prosen_yes = ($c_user['noe']!=0)?round((($c_user['tot_yes']/($c_user['tot_yes']+$c_user['tot_no']))*100),2):0;
				$prosen_no = ($c_user['noe']!=0)?round((($c_user['tot_no']/($c_user['tot_yes']+$c_user['tot_no']))*100),2):0;
				echo "
				<td>".$c_user['tot_yes']."</td>
				<td>$prosen_yes</td>
				<td>".$c_user['tot_no']."</td>
				<td>$prosen_no</td>
				<td>".round($c_user['avg_score'],2)."</td>
				."?>
				<td>
				<?php if($c_user['noe']!=0){ ?>
					<a href="report/report_twitter_show.php?id_pribadi_user=<?=$c_user['id_pribadi_user']?>&report_by=<?=$report_by?>&kd_unit=<?=$kd_unit?>&tgl1=<?=$tgl1?>&tgl2=<?=$tgl2?>&cc_mentari=<?=$cc_mentari?>&cc_im3=<?=$cc_im3?>&c_observer=<?=$c_observer?>&nik_agent=<?=$nik_agent?>&select_region=<?=$select_region?>&skalacmb=<?=$skalacmb?>&departemen_skala=<?=$departemen_skala?>&unit_skala=<?=$unit_skala?>&st_rep=<?=$st_rep?>" onClick="return popup2(this, 'notes');"><?=(string)$c_user['noe']?></a>
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

		$a_user="[sp_search_colection]'table_qm_twitter','$report_by','%$kd_unit%','$tgl1','$tgl2','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skalacmb','$departemen_skala','$unit_skala','$st_rep','detail'";
		
		//echo"$a_user";
		
		$b_user=mssql_query($a_user);
		$no=1;
		$tmp='';
		$sample=0;
		while($c_user=mssql_fetch_array($b_user)){
			
			echo "<tr class='content'>";
			if($c_user['noe']>1 and $tmp!=$c_user['id_pribadi_user']){
				echo "<td rowspan='".$c_user['noe']."'>$no</td>";
				echo "<td rowspan='".$c_user['noe']."'>".$c_user['nik_karyawan']."</td>";
				echo "<td rowspan='".$c_user['noe']."'>".$c_user['full_name']."</td>";
				$no++;
			}else if($c_user['noe']==1){
				echo "<td>$no</td>";
				echo "<td>".$c_user['nik_karyawan']."</td>";
				echo "<td>".$c_user['full_name']."</td>";
				$no++;
			}
			if($tipe_report=='detail'){ 
				echo "<td>".$c_user['observation_date']."</td>";
		    }
				echo "
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
				<td>".$c_user['q8_no']."</td>
				<td>".$c_user['q9_yes']."</td>
				<td>".$c_user['q9_no']."</td>
				<td>".$c_user['q10_yes']."</td>
				<td>".$c_user['q10_no']."</td>
				<td>".$c_user['q11_yes']."</td>
				<td>".$c_user['q11_no']."</td>";
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
				<td rowspan="<?php echo $c_user['noe']; ?>"><a href="report/report_twitter_show.php?id_pribadi_user=<?=$c_user['id_pribadi_user']?>&report_by=<?=$report_by?>&kd_unit=<?=$kd_unit?>&tgl1=<?=$tgl1?>&tgl2=<?=$tgl2?>&cc_mentari=<?=$cc_mentari?>&cc_im3=<?=$cc_im3?>&c_observer=<?=$c_observer?>&nik_agent=<?=$nik_agent?>&select_region=<?=$select_region?>&skalacmb=<?=$skalacmb?>&departemen_skala=<?=$departemen_skala?>&unit_skala=<?=$unit_skala?>&st_rep=<?=$st_rep?>" onClick="return popup2(this, 'notes');"><?=(string)$c_user['noe']?></a>
				<?
			}else if($c_user['noe']==1){?>
				<td><a href="report/report_twitter_show.php?id_pribadi_user=<?=$c_user['id_pribadi_user']?>&report_by=<?=$report_by?>&kd_unit=<?=$kd_unit?>&tgl1=<?=$tgl1?>&tgl2=<?=$tgl2?>&cc_mentari=<?=$cc_mentari?>&cc_im3=<?=$cc_im3?>&c_observer=<?=$c_observer?>&nik_agent=<?=$nik_agent?>&select_region=<?=$select_region?>&skalacmb=<?=$skalacmb?>&departemen_skala=<?=$departemen_skala?>&unit_skala=<?=$unit_skala?>&st_rep=<?=$st_rep?>" onClick="return popup2(this, 'notes');"><?=(string)$c_user['noe']?></a>
				<?
			}
			echo "</tr>";
			$tmp=$c_user['id_pribadi_user'];
			$sample++;
		}
	}
	?>
		</tbody>
	</table>
	<p>Total Sample : <?php echo $sample; ?></p>
	<!-- ====================================================================================================================== -->
	<!-- ============================================== End Update Detail Report ============================================== -->
	<!-- ====================================================================================================================== -->
<?php } ?>
	
	
<? }else if($st_rep=='3'){//data baru?>
	<thead>
    <tr bgcolor="#CCCCCC">
      <th width="1%" rowspan="3" class="head0"><div align="center">No</div></th>
	  <? if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"corres"){?>
      <th width="4%" rowspan="3" class="head0">Delete</th>
	  <th width="4%" rowspan="3" class="head0">Edit</th>
	  <? } ?>
      <th width="4%" rowspan="3" class="head0"><div align="center">Validator</div></th>
	  <th width="4%" rowspan="3" class="head0"><div align="center">Validation</div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Username</div></th>
	   <th width="4%" rowspan="3" class="head0"><div align="center">Region</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Nama</div></th>
      <th width="2%" rowspan="3" class="head0">Tenure</th>
      <th width="2%" rowspan="3" class="head0"><div align="center">TL/SPV</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Date </div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Observation Date</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Week</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Customer Name </div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Type</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Type</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Detail</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Detail by Agent</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Repeat (Y / N)</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Date of previous call</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Previous Agent </div></th>
	  
	  <th colspan="3" class="head0"><div align="center">Response SLA</div></th>
      <th colspan="3" class="head0"><div align="center">Standar Response</div></th>
      <th colspan="3" class="head0"><div align="center">Probing</div></th>
      <th colspan="3" class="head0"><div align="center">Solution</div></th>
      <th colspan="6" class="head0"><div align="center">Type Accuracy</div></th>
      <th colspan="3" class="head0"><div align="center">Closing greeting</div></th>
      <th colspan="3" class="head0"><div align="center">Additional Program</div></th>
	  
	  <th width="4%" rowspan="3" class="head0"><div align="center">Total Score </div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Skala</div></th>
	  <th width="4%" rowspan="3" class="head0"><div align="center">Recommendation</div></th>
	  <th width="6%" rowspan="3" class="head0"><div align="center">Action to be done - QA</div></th>
      <th width="7%" rowspan="3" class="head0"><div align="center">Action to be done - Opers</div></th>
	 <? if ($SES_KODE_LEVEL <>"mitra"){?>
      <th width="7%" rowspan="3" class="head0"><div align="center">Notes sample recording</div></th>
	  <? } ?>
      <th width="4%" rowspan="3" class="head0"><div align="center">Observer</div></th>
    </tr>
	<tr bgcolor="#CCCCCC">
      <th colspan="3" class="head0"><div align="center">Response ( SLA ) 5 minutes</div></th>
      <th colspan="3" class="head0"><div align="center">Greeting user account name, Care and Friendly</div></th>
      <th colspan="3" class="head0"><div align="center">Verify and Identify customer needs</div></th>
      <th colspan="3" class="head0"><div align="center">Correct Solution</div></th>
      <th colspan="3" class="head0"><div align="center">Words composition, phrases and punctuation ( Grammar)</div></th>
	  <th colspan="3" class="head0"><div align="center">Ethics  and twitter handling </div></th>
	  <th colspan="3" class="head0"><div align="center">Closing</div></th>
	  <th colspan="3" class="head0"><div align="center">Campaign / Cross selling/ upselling / survey</div></th>
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
					$q_user="[sp_search_colection]'table_qm_twitter','$report_by','%$kd_unit%','$tgl1','$tgl2','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skalacmb','$departemen_skala','$unit_skala','$st_rep' ";
					
					//echo"$q_user";
					
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$spv_name=$d_user["spv_name"];
						$interaction_date=$d_user["interaction_date"];
						$interaction_date2 = $d_user['date'];
						 $jam = $d_user['jam'];
						 $jamm = explode (":", $jam);
						 $hh = $jamm[0];
						 $mm = $jamm[1];
						$observation_date=$d_user["observation_date"];
						$tenure=$d_user["tenure"];
						$observ=$d_user["observ"];
						$week_=$d_user["week_"];
						$customer_name=$d_user["customer_name"];
						$interaction_type=$d_user["interaction_type"];
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
						$recommendation=$d_user["recommendation"];
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
						$q15=$d_user["q15"];
						$save_q15=$d_user["save_q15"];
						$q16=$d_user["q16"];
						$save_q16=$d_user["save_q16"];
						$q17=$d_user["q17"];
						$save_q17=$d_user["save_q17"];
						$q18=$d_user["q18"];
						$save_q18=$d_user["save_q18"];
						$q19=$d_user["q19"];
						$save_q19=$d_user["save_q19"];
						$q20=$d_user["q20"];
						$save_q20=$d_user["save_q20"];
						$status_save=$d_user["status_save"];
						$observer=$d_user["observer"];
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
						$notes9=$d_user["notes9"];
						$notes10=$d_user["notes10"];
						$notes11=$d_user["notes11"];
						$notes12=$d_user["notes12"];
						$notes13=$d_user["notes13"];
						$notes14=$d_user["notes14"];
						$notes15=$d_user["notes15"];
						$notes16=$d_user["notes16"];
						$notes17=$d_user["notes17"];
						$notes18=$d_user["notes18"];
						$notes19=$d_user["notes19"];
						$notes20=$d_user["notes20"];
						$repeat=$d_user["repeat"];
						//$userid=$d_user["userid"];
						$sr=$d_user["sr"];
						$skala2=$d_user["Skala"];
		
						echo "<tr class='content'>
                      <td>$no</td>";
					  if ($SES_KODE_LEVEL<>"mitra" and $SES_KODE_LEVEL<>"corres"){
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
					  					  
					  <a href="<? echo "del_group.php?report_by=$report_by&kode_del=detail_twitter&id_qm=$id_qm&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&c_observer=$observer&st_rep=$st_rep"; ?>" onclick="return confirmDelete2();">
					  <?
					  	 echo "delete</a></td>";	
						echo "<td>";
						
						$q ="select nama as observer_name from hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer' ";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];
					  ?>
					  					  
					  <a href="<? echo "edit_twitter.php?st_rep=$st_rep&kode_edit=edit_twitter&id_qm=$id_qm&full_name=$full_name&tenure=$tenure&spv_name=$spv_name&observer_name=$observname&interaction_date=$interaction_date2&hh=$hh&mm=$mm&observation_date=$observ&week_=$week_&customer_name=$customer_name&interaction_type=$interaction_type&product_type=$product_type&product_detail=$product_detail&product_detail_agent=$product_detail_agent&fcr=$fcr&repeat=$repeat&date_prev_call=$date_prev_call2&prev_agent=$prev_agent&recommendation=$recommendation&hh_2=$hh_2&mm_2=$mm_2&ss_2=$ss_2&drop_call=$drop_call&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&notes6=$notes6&notes7=$notes7&notes8=$notes8&notes9=$notes9&notes10=$notes10&notes11=$notes11&notes12=$notes12&notes13=$notes13&notes14=$notes14&notes15=$notes15&notes16=$notes16&notes17=$notes17&notes18=$notes18&notes19=$notes19&notes20=$notes20&sc1=$q1&sc2=$q2&sc3=$q3&sc4=$q4&sc5=$q5&sc6=$q6&sc7=$q7&sc8=$q8&userid=$userid&observer=$SES__NIK&date_saved=$date_saved&fe_acc=$sc_fe&nfe_acc=$sc_nfe&total_score=$score_tot&skala=$skala2&notes_recording=$notes_recording"; ?>" onClick="return popup(this, 'notes');">	
					  
					  <?
					  	 echo "Edit</a></td>";
						 }		  
		
/*
					$q ="select full_name as observer_name 
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
			
					$hhtomm1=($hh_handling_time*3600)+($mm_handling_time*60)+($ss_handling_time);
			

?>

					<td><a href="showKalibrasi/show_twitter.php?id=<? echo "$id";?>&id_qm=<? echo "$id_qm";?>&agree=<? echo "$agree";?>" onClick="return popup(this, 'notes');">
					<? if ($id_kalibrasi != ""){
					$q_kal="select nama as kalibrasi_name from hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
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
                      
					  <td>$score_tot</td>
                      <td>$skala2</td>
					  <td>$recommendation</td>
					  <td>$action_done_qa</br></br><a href='upload_path/$file_action_done_qa'>$file_action_done_qa</a></td>
                      <td>$action_done_ops</br></br><a href='upload_path/$file_action_done_ops'>$file_action_done_ops</a></td>";
                      if ($SES_KODE_LEVEL<>"mitra"){
					  echo"<td>$notes_recording</td>";
					  }
					  echo"<td>$observer_name</td>
					  
                      </tr>";
					  $no++;
					  
						}
				
					?> </a>
  </table>
  <p>&nbsp;</p>
  <p>Total data : <? echo"$jum_tot"; ?></p>
  <table width="700" border="1" class="table table-bordered table-infinite">
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
      <td>Response SLA</td>
	  <td>Response ( SLA ) 5 minutes</td>
      <td>5</td>
      <td><?  
				  //edit hendi
      $queryhendi="[sp_reportqm_email]'table_qm_twitter','$tgl1','$tgl2','$report_by','$c_observer','%$nik_agent%','$cc_mentari','$cc_im3','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";

	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
	  //echo $queryhendi;
      //end edit
      
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
      <td>Standar Response</td>
	  <td>Greeting user account name, Care and Friendly</td>
      <td>10</td>
      <td><?  
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
	  <td colspan="6"></td>
    </tr>
	
    <tr>
	  <td>3</td>
      <td>Probing</td>
	  <td>Verify and Identify customer needs</td>
      <td>5</td>
	  <td><?  
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
	  <td colspan="6"></td>
    </tr>
    <tr>
	  <td>4</td>
	  <td>Solution</td>
      <td><div style="background-color:#E0E0D1">Correct Solution</div></td>
      <td>30</td>
      <td colspan="4"></td>
      <td>
		<?  
		  	$q4_tot_s1=$result["q4_s1"];
			echo"$q4_tot_s1";
			
			$q4_avg=$result["avg4"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q4_s1 =($q4_tot_s1/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q4_s1);
		?>
	  </td>
	  <td>
		<?  
		  	$q4_tot_s2=$result["q4_s2"];
			echo"$q4_tot_s2";
		?>
	  </td>
	  <td>
		<?
			$prosen_q4_s2 =($q4_tot_s2/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q4_s2);
		?>
	  </td>
	  <td>
		<?  
		  	$q4_tot_s3=$result["q4_s3"];
			echo"$q4_tot_s3";
		?>
	  </td>
	  <td>
		<?
			$prosen_q4_s3 =($q4_tot_s3/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q4_s3);
		?>
	  </td>
    </tr>
    <tr>
      <td>5</td>
      <td rowspan="2">Type Accuracy</td>
	  <td><div style="background-color:#E0E0D1">Words composition, phrases and punctuation ( Grammar)</div></td>
      <td>20</td>
      <td colspan="4"></td>
      <td>
		<?  
		  	$q5_tot_s1=$result["q5_s1"];
			echo"$q5_tot_s1";
			
			$q5_avg=$result["avg5"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q5_s1 =($q5_tot_s1/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q5_s1);
		?>
	  </td>
	  <td>
		<?  
		  	$q5_tot_s2=$result["q5_s2"];
			echo"$q5_tot_s2";
		?>
	  </td>
	  <td>
		<?
			$prosen_q5_s2 =($q5_tot_s2/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q5_s2);
		?>
	  </td>
	  <td>
		<?  
		  	$q5_tot_s3=$result["q5_s3"];
			echo"$q5_tot_s3";
		?>
	  </td>
	  <td>
		<?
			$prosen_q5_s3 =($q5_tot_s3/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q5_s3);
		?>
	  </td>
    </tr>
    <tr>
	  <td>6</td>
	  <td>Ethics  and twitter handling </td>
      <td>20</td>
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
      <td>Closing greeting</td>
	  <td>Closing</td>
      <td>5</td>
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
	  <td colspan="6"></td>
    </tr>
    <tr>
      <td>8</td>
      <td>Additional Program</td>
	  <td>Campaign / Cross selling/ upselling / survey</td>
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
	<p>&nbsp </p>
	<table width="264" border="1" class="table table-bordered table-infinite">
  <?  
	  		if ($report_by=="Unit")
				  	{				  
					  
					   $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c
					   			inner join db_qm.dbo.table_qm_twitter a on a.id_qm=c.id_qm
					   			where   a.status_save='complete' and a.id_unit like '%$kd_unit%'
					   			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'";
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
	  			if ($report_by=="Departement")
				  	{				  
					  
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm where a.status_save='complete' and repeat='yes'  and (a.id_unit like '%$cc_mentari%')
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'";
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
					
	  			if ($report_by=="Observer")
				  	{
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm inner join hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  cast(id_data_pribadi as varchar)='$c_observer'
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'"; 
					 /*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
					  
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm inner join hrms.dbo.tb_data_pribadi z  on a.id_pribadi_user=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  (z.nik_karyawan like '%$nik_agent%' or z.nama like '%$nik_agent%')
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status='$st_rep'"; 
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$tgl1','$tgl2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
	  				
					if ($report_by=="Skala")
				  	{	
				 	 $stot_r="select count(*) as jum_s_r
	from db_qm.dbo.table_qm_twitter a with(nolock) 
   inner join db_qm.dbo.table_qm_twitter_detail b with(nolock) on a.id_qm=b.id_qm
where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'
and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%' and a.flag_status='$st_rep'  AND
a.id_qm in(
select id_qm from (
					select a.id_qm,
					case when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 90 then 'A'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 80 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  < 90 then 'B'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 70 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  < 80 then 'C'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  >= 60 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)  < 70 then 'D'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12)   < 60 then 'E' end 'Skala'
					from db_qm.dbo.table_qm_twitter a with(nolock) 
					inner join db_qm.dbo.table_qm_twitter_detail b with(nolock) on a.id_qm=b.id_qm 
					where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112)
					 between '$tgl1' and '$tgl2' and a.id_unit like '%$departemen_skala%' 
					 and a.id_unit like '%$unit_skala%' 
				    group by a.id_qm 
				) AA
			 where Skala like '%$skalacmb' )";  
					}
				//echo $stot_fcr;
				//echo $stot_rep;
	   
		    $r_stot_r=mssql_query($stot_r);
	   while($d_stot_r=mssql_fetch_array($r_stot_r))
			{
		     	$rep_tot_y=$d_stot_r["jum_s_r"];
			} 				
		?>
	<tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
	
	<tr>
      <td width="180">Repetitive Call</td>
      <td width="68">
		<?  
	  				
				echo"$rep_tot_y";
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">Average Score</td>
      <td width="68">
		<?
		  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg;
		  //echo"$score_avg";
		  printf("%1.2f ", $score_avg);
		  //echo $q1_avg.",".$q2_avg.",".$q3_avg.",".$q4_avg.",".$q5_avg.",".$q6_avg.",".$q7_avg.",".$q8_avg;
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
<? }?>
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