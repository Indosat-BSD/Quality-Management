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
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=1000,height=700,scrollbars=yes');
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
  <table width="100%" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr class="content">
      <td>&nbsp;</td>
      <td width="90%"><div align="center" class="style3"> </div></td>
    </tr>
    <tr class="content">
      <td>Report By </td>
      <td><select name="report_by" id="report_by" class="box" onchange="satu.submit()">
        <option value="0">Select By
        <?php
			$katahh=array('Departement','Unit','Agent','Validator');
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
$query = "select * from hrms.dbo.tb_fungsi where left(id_fungsi,charindex('0',id_fungsi)-1)='$kd_division'";
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
	 
$query = "select * from hrms.dbo.tb_unit where left(id_unit,len(id_unit)-1)='$kd_departemen'";
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
      <td>Departemen</td>
      <td><input name="bali" type="checkbox" id="bali" value="GAL00" <? if ($bali=="GAL00") {echo "checked";} else {$bali='-'; echo "";} ?>/>Balinusra
	  <input name="jateng" type="checkbox" id="jateng" value="GAL01" <? if ($jateng=="GAL01") {echo "checked";} else {$jateng='-'; echo "";} ?>/>Jateng
	  <input name="jakarta" type="checkbox" id="jakarta" value="GAL02" <? if ($jakarta=="GAL02") {echo "checked";} else {$jakarta='-'; echo "";} ?>/>Jakarta
	  <input name="botabek" type="checkbox" id="botabek" value="GAL03" <? if ($botabek=="GAL03") {echo "checked";} else {$botabek='-'; echo "";} ?>/>Botabek
	  <input name="nsro" type="checkbox" id="nsro" value="GAL04" <? if ($nsro=="GAL04") {echo "checked";} else {$nsro='-'; echo "";} ?>/>NSRO
	  <input name="sulam" type="checkbox" id="sulam" value="GAL05" <? if ($sulam=="GAL05") {echo "checked";} else {$sulam='-'; echo "";} ?>/>SulamPapua
	  <input name="kalimantan" type="checkbox" id="kalimantan" value="GAL06" <? if ($kalimantan=="GAL06") {echo "checked";} else {$kalimantan='-'; echo "";} ?>/>Kalimantan
	  <input name="jabar" type="checkbox" id="jabar" value="GAL07" <? if ($jabar=="GAL07") {echo "checked";} else {$jabar='-'; echo "";} ?>/>Jabar
	  <input name="jatim" type="checkbox" id="jatim" value="GAL08" <? if ($jatim=="GAL08") {echo "checked";} else {$jatim='-'; echo "";} ?>/>Jatim
	  <input name="ssro" type="checkbox" id="ssro" value="GAL09" <? if ($ssro=="GAL09") {echo "checked";} else {$ssro='-'; echo "";} ?>/>SSRO</td>
    </tr>
    <tr class="content">
      <td>Date</td>
      <td><input name="date_eva1" type="text" id="datepicker" value="<? echo "$date_eva1"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" />
    Until
      <input name="date_eva2" type="text" id="datepicker1" value="<? echo "$date_eva2"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="box" tabindex="2" /></td>
    </tr>
    <tr class="content">
      <td><? } if ($report_by=="Validator"){?></td>
      <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td>Name</td>
      <td><select name="c_observer" class="box" id="c_observer" onchange="satu.submit()">
        <option value="0" selected="selected">Select All
        <?php
		
include "konek_qm.php";
	$result 	= mssql_query("SET ANSI_NULLS ON") or die(mssql_get_last_message());
	$result2 	= mssql_query("SET ANSI_WARNINGS ON") or die(mssql_get_last_message());

 $q_observerCombo="select distinct a.id_kalibrasi,z.nama,c.qm
from db_qm.dbo.Table_qm_galeri_kasir a inner join
hrms.dbo.tb_data_pribadi z on a.id_kalibrasi=cast(z.id_data_pribadi as varchar)
inner join hrms.dbo.tb_auth c on a.id_kalibrasi=cast(c.id_data_pribadi as varchar)
where c.qm='galeri' or c.qm='admin' order by z.nama";
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
		  
		  echo "<a class='btn btn-warning' href='rep_kalibrasi/export_kalibrasi_galeri_kasir.php?bali=$bali&jateng=$jateng&jakarta=$jakarta&botabek=$botabek&nsro=$nsro&sulam=$sulam&kalimantan=$kalimantan&jabar=$jabar&jatim=$jatim&ssro=$ssro&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&date_eva1=$tgl1&date_eva2=$tgl2&select_region=$select_region'>export_galeri_kasir to excel</a>";
		  ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
 
    <?
	include "konek_qm.php";
	
$result 	= mssql_query("SET ANSI_NULLS ON") or die(mssql_get_last_message());
$result2 	= mssql_query("SET ANSI_WARNINGS ON") or die(mssql_get_last_message());
	
	if($c_observer==""){$obs=0;}else{$obs=$c_observer;}
	if ($date_eva1 != "" && $date_eva2 != "") {

 $itung="[sp_countGal_kalibrasi]'table_kalibrasi_galeri_kasir','table_qm_galeri_kasir','$tgl1','$tgl2','$report_by','%$kd_unit%','%$bali%','%$jateng%','%$jakarta%','%$botabek%','%$nsro%','%$sulam%','%$kalimantan%','%$jabar%','%$jatim%','%$ssro%','$obs','%$nik_agent%' ";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	;
//echo "$q1_yes_jum";
	}  	

	if((isset($searchButton) and $jum_tot<>"0") or ($kd_del=="ok"and $jum_tot<>"0"))
	{ ?>
	 <table width="368%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="1%" rowspan="2" class="head0 nosort"><div align="center">No</div></th>
	  <? if ($SES_KODE_LEVEL<>"mitra"){?>
      <th width="4%" rowspan="2" class="head0">Delete</th>
	  <th width="4%" rowspan="2" class="head0">Edit</th>
	  <? } ?>
      <th width="4%" rowspan="2" class="head0"><div align="center">Area </div></th>
	  <th width="4%" rowspan="2" class="head0"><div align="center">Username</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Nama</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">TL/SPV</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Interaction Date </div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Observation Date</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Validation Date</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Week</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Customer Name </div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Interaction Type</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Product Type</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Product Detail</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Product Detail by Agent</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Handling time (duration)</div></th>
      <th rowspan="2" class="head0">Handling Time (second) </th>
      <th colspan="3" class="head0"><div align="center">Opening</div></th>
      <th colspan="3" class="head0"><div align="center">Identify Customer Need</div></th>
      <th colspan="3" class="head0"><div align="center">Provide Solution</div></th>
      <th colspan="3" class="head0"><div align="center">Proses Compliance</div></th>
      <th colspan="3" class="head0"><div align="center">Input Accuracy Data / Information</div></th>
      <th colspan="3" class="head0"><div align="center">Appearance</div></th>
      <th colspan="3" class="head0"><div align="center">Skillful</div></th>
      <th colspan="3" class="head0"><div align="center">Communicating the Information </div></th>
      <th colspan="3" class="head0"><div align="center">Attitude during Handling</div></th>
      <th colspan="3" class="head0"><div align="center">Closing</div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">FE Accuracy </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">NFE Accuracy </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Total Score </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Skala</div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Observer</div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Validation</div></th>
        <th width="4%" rowspan="2" class="head0"><div align="center">Validator</div></th>
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
      <th width="6%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="6%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="8%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="8%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>

    </tr>
	</thead>
	<? 				
					$q_user="[sp_searchGal_kalibrasi]'table_kalibrasi_galeri_kasir','table_qm_galeri_kasir','$report_by','%$kd_unit%','$tgl1','$tgl2','%$bali%','%$jateng%','%$jakarta%','%$botabek%','%$nsro%','%$sulam%','%$kalimantan%','%$jabar%','%$jatim%','%$ssro%','$c_observer','%$nik_agent%'";
					//echo"$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$id=$d_user["id"];
						$date_saved=$d_user["data_saved"];
						$spv_name=$d_user["spv_name"];
						$interaction_date=$d_user["interaction_date"];
						$observation_date=$d_user["observation_date"];
						$validation_date=$d_user["date_saved"];
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
						$fcr=$d_user["fcr"];
						$repeat=$d_user["repeat"];
						$hh_handling_time=$d_user["hh_handling_time"];
						$mm_handling_time=$d_user["mm_handling_time"];
						$ss_handling_time=$d_user["ss_handling_time"];
						$hh_2=$d_user["hh_handling_time"];
						$mm_2=$d_user["mm_handling_time"];
						$ss_2=$d_user["ss_handling_time"];
						
						$id_qm=$d_user["id_qm"];
						$full_name=$d_user["full_name"];
						$lb=$d_user["lb"];
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
						$status_save=$d_user["status_save"];
						$observer=$d_user["observer"];
						$area=$d_user["nama_unit"];
						$nama_unit=$d_user["nama_unit"];
						$id_kalibrasi=$d_user["id_kalibrasi"];
						$kalibrasi=$d_user["kalibrasi"];
						$agree=$d_user["kalibrasi"];
						$notes_score=$d_user["notes_score"];
						
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
		

	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q3=="yes" or $q3=="na"))
		{
		$sc_fe="3";
		}
		if ($q3=="no" or $q4=="no" or $q5=="no")
		{
		$sc_fe="0";
		}

		if ($q6=="yes" or $q6=="na")
		{
		$sc_q6="1";
		}
		else
		{
		$sc_q6="0";
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



		
$sc_nfe=$sc_q1+$sc_q2+$sc_q6+$sc_q7+$sc_q8+$sc_q9+$sc_q10;
 					 	$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10;
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
	 if ($SES_hendi=="$observer"){				
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
					  					  
					  <a href="<? echo "del_kalibrasi.php?report_by=$report_by&kode_del=detail_galeri_kasir&id_qm=$id_qm&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$tgl1&date_eva2=$tgl2&c_observer=$observer&id=$id"; ?>" onclick="return confirmDelete2();">
					  <?
					  	 echo "delete</a></td>";
	}
						 echo "<td>";
		 if ($SES_hendi=="$observer"){				  
					  $q ="select nama as observer_name 
					from hrms.dbo.tb_data_pribadi 
					where cast(id_data_pribadi as varchar)='$observer' ";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];
						
					  ?>
					  					  
					  <a href="<? echo "edit_kalibrasi/edit_kalibrasi_galeri_kasir.php?kode_edit=edit_inbound&id=$id&report_by=$report_by&date_eva1=$tgl1&date_eva2=$tgl2&id_qm=$id_qm&full_name=$full_name&spv_name=$spv_name&observer_name=$observname&interaction_date=$interaction_date2&hh=$hh&mm=$mm&observation_date=$observ&week_=$week_&customer_name=$customer_name&interaction_type=$interaction_type&product_type=$product_type&product_detail=$product_detail&product_detail_agent=$product_detail_agent&fcr=$fcr&repeat=$repeat&date_prev_call=$date_prev_call2&prev_agent=$prev_agent&hh_2=$hh_2&mm_2=$mm_2&ss_2=$ss_2&drop_call=$drop_call&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&notes6=$notes6&notes7=$notes7&notes8=$notes8&notes9=$notes9&notes10=$notes10&notes11=$notes11&notes12=$notes12&notes13=$notes13&notes14=$notes14&notes15=$notes15&notes16=$notes16&notes17=$notes17&notes18=$notes18&notes19=$notes19&notes20=$notes20&q1=$q1&q2=$q2&q3=$q3&q4=$q4&q5=$q5&q6=$q6&q7=$q7&q8=$q8&q9=$q9&q10=$q10&q11=$q11&q12=$q12&q13=$q13&q14=$q14&q15=$q15&q16=$q16&q17=$q17&q18=$q18&q19=$q19&q20=$q20&save_q1=$save_q1&save_q2=$save_q2&save_q3=$save_q3&save_q4=$save_q4&save_q5=$save_q5&save_q6=$save_q6&save_q7=$save_q7&save_q8=$save_q8&save_q9=$save_q9&save_q10=$save_q10&save_q11=$save_q11&save_q12=$save_q12&save_q13=$save_q13&save_q14=$save_q14&save_q15=$save_q15&save_q16=$save_q16&save_q17=$save_q17&save_q18=$save_q18&save_q19=$save_q19&save_q20=$save_q20&userid=$userid&observer=$SES__NIK&date_saved=$date_saved&fe_acc=$sc_fe&nfe_acc=$sc_nfe&total_score=$total_score&skala=$skala&notes_score=$notes_score&agree=$agree"; ?>" onClick="return popup(this, 'notes');">
					  <?
					  	 echo "Edit</a></td>";
	}					 		
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
		

	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q3=="yes" or $q3=="na"))
		{
		$sc_fe="3";
		}
		if ($q3=="no" or $q4=="no" or $q5=="no" )
		{
		$sc_fe="0";
		}
		
		if ($q6=="yes" or $q6=="na")
		{
		$sc_q6="1";
		}
		else
		{
		$sc_q6="0";
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
					$q_user1="select nama as observer_name 
					from hrms.dbo.tb_data_pribadi 
					where cast(id_data_pribadi as varchar)='$observer' ";
					//echo "$q_user";
					$r_user1=mssql_query($q_user1);
					while($d_user1=mssql_fetch_array($r_user1))
						{
						$observer_name=$d_user1["observer_name"];
						}

//if ($repeat=="yes")
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
			
					$q ="select nama as observer_name 
					from hrms.dbo.tb_data_pribadi 
					where cast(id_data_pribadi as varchar)='$observer' ";
					//echo "$q";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observer_name=$qqq["observer_name"];
					
					$q_kal="select nama as kalibrasi_name
						  	from hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
					$r_kal=mssql_query($q_kal);
					while($d_kal=mssql_fetch_array($r_kal))
						{
						$kalibrasi_name=$d_kal["kalibrasi_name"];
						}

    echo"
                      <td>$area</td>
					  <td>$userid</td>
                      <td>$lb</td>
						<td>$spv_name</td>
						<td>$interaction_date</td>
						<td>$observation_date</td>
						<td>$validation_date</td>
						<td>$week_</td>
						<td>$customer_name</td>
						<td>$interaction_type</td>
						<td>$product_type</td>
						<td>$product_detail</td>
						<td>$product_detail_agent</td>
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
					  <td>$sc_fe</td>
                      <td>$sc_nfe</td>
					  <td>$total_score</td>
                      <td>$skala</td>
					  <td>$observer_name</td>
					  <td>$kalibrasi</td>
					   <td>$kalibrasi_name</td>
                      </tr>";
					  $no++;
					  
						}
						
					

			
					?> </a>
  </table>
  <p>Total data : <? echo"$jum_tot"; ?></p>
  <table width="568" border="1" class="table table-bordered table-infinite">
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
      $queryhendi="[sp_reportqm_kalibrasi]'table_kalibrasi_galeri_kasir','table_qm_galeri_kasir','$tgl1','$tgl2','$report_by','$c_observer','%$nik_agent%','%$bali%','%$jateng%','%$jakarta%','%$botabek%','%$nsro%','%$sulam%','%$kalimantan%','%$jabar%','%$jatim%','%$ssro%','%$kd_unit%','%%',''";
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
      <td> Identify Customer Need</td>
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
      <td>FE</td>
      <td> Provide Solution</td>
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
      <td> Proses Compliance </td>
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
      <td> Input Accuracy Data / Information </td>
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
      <td>NFE</td>
      <td> Appearance</td>
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
      <td>NFE</td>
      <td> Skillful </td>
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
      <td> Communicating the Information </td>
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
      <td> Attitude during Handling </td>
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
      <td> Closing </td>
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
  <table width="264" border="1" class="table table-bordered table-infinite">
    <tr>
      <td width="180">NFE Total </td>
      <td width="68"><? $nfe_total=$q1_tot_y+$q2_tot_y+$q6_tot_y+$q7_tot_y+$q8_tot_y+$q9_tot_y+$q10_tot_y+$q1_tot_na+$q2_tot_na+$q6_tot_na+$q7_tot_na+$q8_tot_na+$q9_tot_na+$q10_tot_na; echo"$nfe_total";?></td>
    </tr>
    <tr>
      <td>NFE Accuracy</td>
      <td><?
	  $nfe_acc=($nfe_total/(7*$jum_tot)*100);
		printf("%1.2f ", $nfe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>FE Total </td>
      <td><?  
      /*
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_fe="select count(*) as jum_fe_tot from db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b ,db_qm.dbo.table_qm_galeri_kasir_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4<>'no' and  a.q5<>'no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_fe="select count(*) as jum_fe_tot from db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b ,db_qm.dbo.table_qm_galeri_kasir_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4<>'no' and  a.q5<>'no' and a.userid=b.username and (a.kd_unit like '%$cc_mentari%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_fe="select count(*) as jum_fe_tot from db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b ,db_qm.dbo.table_qm_galeri_kasir_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4<>'no' and  a.q5<>'no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_fe="select count(*) as jum_fe_tot from db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b ,db_qm.dbo.table_qm_galeri_kasir_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4<>'no' and  a.q5<>'no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}*/
		$stot_fe="[sp_fetotalgalery_kalibrasi]'table_kalibrasi_galeri_kasir','table_qm_galeri_kasir','$report_by','$tgl1','$tgl2','$kd_unit','%$bali%','%$jateng%','%$jakarta%','%$botabek%','%$nsro%','%$sulam%','%$kalimantan%','%$jabar%','%$jatim%','%$ssro%','$c_observer','%$nik_agent%'";
					
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
      <td>FE Accuracy </td>
      <td>
	  <?
	  $fe_acc=($fe_tot/$jum_tot)*100;
		printf("%1.2f ", $fe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>Handling Time  Average</td>
      <td><?  /*
	  			if ($report_by=="Unit")
				  	{				  
					  $stot_hh="select sum(hh_handling_time) as jum_hh from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where  a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
	  			if ($report_by=="Departement")
				  	{				  
					  $stot_hh="select sum(hh_handling_time) as jum_hh from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where  a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.kd_unit like '%$cc_mentari%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Observer")
				  	{				  
					  $stot_hh="select sum(hh_handling_time) as jum_hh from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where  a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Agent")
				  	{				  
					  $stot_hh="select sum(hh_handling_time) as jum_hh from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where  a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	   $r_stot_hh=mssql_query($stot_hh);
	   while($d_stot_hh=mssql_fetch_array($r_stot_hh))
			{
		     	$d_tot_hh=$d_stot_hh["jum_hh"];
			} 
	  			if ($report_by=="Unit")
				  	{				  
					$stot_mm="select sum(mm_handling_time) as jum_mm from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
					$stot_mm="select sum(mm_handling_time) as jum_mm from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.kd_unit like '%$cc_mentari%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
					$stot_mm="select sum(mm_handling_time) as jum_mm from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
					$stot_mm="select sum(mm_handling_time) as jum_mm from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_mm=mssql_query($stot_mm);
	   while($d_stot_mm=mssql_fetch_array($r_stot_mm))
			{
		     	$d_tot_mm=$d_stot_mm["jum_mm"];
			}
	  			if ($report_by=="Unit")
				  	{				  
					$stot_ss="select sum(ss_handling_time) as jum_ss from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
	  			if ($report_by=="Departement")
				  	{				  
					$stot_ss="select sum(ss_handling_time) as jum_ss from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.kd_unit like '%$cc_mentari%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Observer")
				  	{				  
					$stot_ss="select sum(ss_handling_time) as jum_ss from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Agent")
				  	{				  
					$stot_ss="select sum(ss_handling_time) as jum_ss from db_qm.dbo.table_qm_galeri_kasir_detail c,db_qm.dbo.table_qm_galeri_kasir a,assest_galeri.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	   $r_stot_ss=mssql_query($stot_ss);
	   while($d_stot_ss=mssql_fetch_array($r_stot_ss))
			{
		     	$d_tot_ss=$d_stot_ss["jum_ss"];
			} 		
			*/
			$stot_hh="[sp_handlingGal_kalibrasi]'table_kalibrasi_galeri_kasir','table_qm_galeri_kasir','$report_by','$tgl1','$tgl2','$kd_unit','%$bali%','%$jateng%','%$jakarta%','%$botabek%','%$nsro%','%$sulam%','%$kalimantan%','%$jabar%','%$jatim%','%$ssro%','$c_observer','%$nik_agent%'";
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
	  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg+$q9_avg+$q10_avg+$q11_avg+$q12_avg+$q13_avg+$q14_avg+$q15_avg+$q16_avg+$q17_avg+$q18_avg+$q19_avg+$q20_avg;
	  //echo"$score_avg";
	  printf("%1.2f ", $score_avg);
	  ?></td>
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