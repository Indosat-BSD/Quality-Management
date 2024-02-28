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
  <table width="100%" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr class="content">
      <td>&nbsp;</td>
      <td width="90%"><div align="center" class="style3"></div></td>
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
      <td>
	  <input name="cc1" type="checkbox" id="cc1" value="CCO01" <? if ($cc1=="CCO01") {echo "checked";} else {$cc1='-'; echo "";} ?>/>Premium Postpaid & Data Service Contact Center
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
//echo"$q_observerCombo";
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
      <td>&nbsp;</td>
      <td>&nbsp;</td>
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
		  
		  
		  ?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  
    <?
	include "konek_qm.php";
	
	if ($date_eva1 != "" && $date_eva2 != "") {
	
	 $itung="[sp_countAdd_kalibrasiVoce]'table_qm_voce','$tgl1','$tgl2','$report_by','%$kd_unit%','%$cc1%','%$cc2%','%$cc3%','%$cr1%','%$cr2%','%$dc1%','%$dc2%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 //echo $itung;
	  }	

	if((isset($searchButton) and $jum_tot<>"0") or ($kd_del=="ok"and $jum_tot<>"0"))
	{ ?>
	<table border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
    <thead>
	<tr bgcolor="#CCCCCC">
    <th width="1%" rowspan="2" class="head0 nosort"><div align="center">No</div></th>
	<th width="4%" rowspan="2" class="head0"><div align="center">Username</div></th>
	<th width="4%" rowspan="2" class="head0"><div align="center">Region</div></th>
    <th width="2%" rowspan="2" class="head0"><div align="center">Nama</div></th>
    <th width="2%" rowspan="2" class="head0">Unit</th>
    <th width="2%" rowspan="2" class="head0">TL/SPV</th>
    <th width="2%" rowspan="2" class="head0">Customer Name</th>
    <th width="2%" rowspan="2" class="head0">MSISDN</th>	
    <th width="2%" rowspan="2" class="head0">Survey Date </th>
    <th width="2%" rowspan="2" class="head0">Observation Date</th>
    <th width="2%" rowspan="2" class="head0">Survey Methode</th>
	<th width="2%" rowspan="2" class="head0">Activity Code</th>
    <th width="4%" colspan="2" rowspan="2" class="head0"><div align="center">Observer</div></th>
    </tr>
	</thead>					
	<? 
					$q_user="[sp_searchAdd_kalibrasiVoce]'table_qm_voce','$report_by','%$kd_unit%','$tgl1','$tgl2','$cc1','$cc2','$cc3','$cc4','$cc5','$cc6','$cc7','$c_observer','%$nik_agent%','$select_region'";
					//echo"$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$nama_unit=$d_user["nama_unit"];
						$userid=$d_user["nik_karyawan"];
						$lb=$d_user["lb"];
						$region=$d_user["region"];
						$customer_name=$d_user["customer_name"];
						$spv_name=$d_user["spv_name"];
						$msisdn=$d_user["msisdn"];
						$survey_date = $d_user['survey_date'];
						$observation_date=$d_user["observation_date"];
						$survey_methode=$d_user["survey_methode"];
						$activity_code=$d_user["activity_code"];
						$observer=$d_user["observer"];
						$id_qm=$d_user["id_qm"];
						$date_saved=$d_user["date_saved"];
						$kd_unit=$d_user["id_unit"];
						$id_pribadi_user=$d_user["id_pribadi_user"];						
						
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
						
						$notes1=htmlentities($d_user["notes1"]);
						$notes2=htmlentities($d_user["notes2"]);
						$notes3=htmlentities($d_user["notes3"]);
						$notes4=htmlentities($d_user["notes4"]);
						$notes5=htmlentities($d_user["notes5"]);
						$notes6=htmlentities($d_user["notes6"]);
						$notes7=htmlentities($d_user["notes7"]);
						$notes8=htmlentities($d_user["notes8"]);
						$notes9=htmlentities($d_user["notes9"]);
						$notes10=htmlentities($d_user["notes10"]);
					$q_user="select nama as observer_name from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer'";
					//echo "$q_user";
					$r_user1=mssql_query($q_user);
					while($d_user1=mssql_fetch_array($r_user1))
						{
						$observer_name=$d_user1["observer_name"];
						}
						$hhtomm1=($hh_handling_time*3600)+($mm_handling_time*60)+($ss_handling_time);
?>


<tr onMouseOver="this.style.cursor='hand'; this.style.backgroundColor='#E8E6FF';" onMouseOut="this.style.backgroundColor='#FFFFFF';">	
			<td><a href="<? echo "kalibrasi/add_kalibrasi_voce.php?kode_edit=edit_voce&report_by=$report_by&date_eva1=$date_eva1&date_eva2=$date_eva2&id_qm=$id_qm&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&notes6=$notes6&notes7=$notes7&notes8=$notes8&notes9=$notes9&notes10=$notes10&sc1=$q1&sc2=$q2&sc3=$q3&sc4=$q4&sc5=$q5&sc6=$q6&sc7=$q7&sc8=$q8&sc9=$q9&sc10=$q10&userid=$userid&observer=$observer&date_saved=$date_saved&kd_unit=$kd_unit&id_pribadi_user=$id_pribadi_user"; ?>" onClick="return popup(this, 'notes');"><? echo $no;?></a></td>	
	<?		    echo"
					  <td>$userid</td>
					  <td>$region</td>
                      <td>$lb</td>
                      <td>$nama_unit</td>
					  <td>$spv_name</td>
					  <td>$customer_name</td>
					  <td>$msisdn</td>
					  <td>$survey_date</td>
					  <td>$observation_date</td>	
					  <td>$survey_methode</td>
					  <td>$activity_code</td>
					  <td>$observer_name</td>
                      </tr>";
					  $no++;
					  
						}
			
					?> </a>
  </table>
  <p>Total data : <? echo"$jum_tot"; ?></p>
  
  <p><? }?></p>
</form>

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