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
<script type="text/javascript">
    jQuery(document).ready(function(){
        // dynamic table
        jQuery('#dyntable').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'asc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        
        jQuery('#dyntable2').dataTable( {
            "bScrollInfinite": true,
            "bScrollCollapse": true,
            "sScrollY": "300px"
        });
        
    });
</script>
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
        <option value="0" selected="selected">Select All
        <?php
		
include "konek_qm.php";
$q_observerCombo="select DISTINCT a.id_pribadi_observer, z.nama,c.qm
from db_qm.dbo.Table_qm a inner join
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
  <table  class="table table-bordered table-infinite" border="1" align="center">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="1%" rowspan="2" class="head0 nosort"><div align="center">No</div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Area</div></th>
	  <th width="4%" rowspan="2" class="head0"><div align="center">Username</div></th>
	  <th width="4%" rowspan="2" class="head0"><div align="center">Region</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Nama</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">TL/SPV</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Interaction Date </div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Observation Date</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Week</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Customer Name </div></th>
	  <!--<th width="2%" rowspan="2" class="head0"><div align="center">Notes Sample Recording </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Total Score </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Skala</div></th>
	  <th width="4%" rowspan="2" class="head0">Recommendation</th>-->
      <th width="4%" colspan="2" rowspan="2" class="head0"><div align="center">Observer</div></th>
    </tr>
	</thead>
    <?
	include "konek_qm.php";
	
	if ($date_eva1 != "" && $date_eva2 != "") {
	
	$itung="[sp_countAdd_kalibrasipl]'table_qm_pl','$tgl1','$tgl2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	//echo $itung;
	//end edit
//echo "$q1_yes_jum";
	  }	

	if((isset($searchButton) and $jum_tot<>"0") or ($kd_del=="ok"and $jum_tot<>"0"))
					{
					include "konek_qm.php";
					
					$q_user="[sp_searchAdd_kalibrasipl]'table_qm_pl','$report_by','%$kd_unit%','$tgl1','$tgl2','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $q_user;
					//echo "456456";
					
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
					{
						$date_saved=$d_user["date_saved"];
						$id_qm=$d_user["id_qm"];
						$full_name=$d_user["full_name"];
						$tl_name=$d_user["tl_name"];
						$lb=$d_user["lb"];
						$region=$d_user["region"];
						$userid=$d_user["nik_karyawan"];
						$status_save=$d_user["status_save"];
						$msisdn=$d_user["msisdn"];
						$customer_name=$d_user["customer_name"];
						$interaction_date=$d_user["interaction_date"];
						$interaction_time=$d_user["interaction_time"];
						$int_time=explode(":",$interaction_time);
						$hh_time="$int_time[0]";
						$mm_time="$int_time[1]";
						$observation_date=$d_user["observation_date"];
						$hh_duration=$d_user["hh_duration"];
						$mm_duration=$d_user["mm_duration"];
						$ss_duration=$d_user["ss_duration"];
						$week_=$d_user["week_"];
						$interaction_type=$d_user["interaction_type"];
						$product_knowledge=$d_user["product_knowledge"];
						$notes_pk=$d_user["notes_pk"];
						$activity_code=$d_user["activity_code"];
						$notes_ac=$d_user["notes_ac"];
						$handling_process=$d_user["handling_process"];
						$fcr=$d_user["fcr"];
						$notes_fcr=$d_user["notes_fcr"];
						$repeat=$d_user["repeat"];
						$notes_repeat=$d_user["notes_repeat"];
						$anthusiasm=$d_user["antusiasm"];
						$notes_anthusiasm=$d_user["notes_antusiasm"];
						$manner=$d_user["manner"];
						$notes_manner=$d_user["notes_manner"];
						$effective_handling=$d_user["effective_handling"];
						$notes_eh=$d_user["notes_eh"];
						$observer=$d_user["observer"];
						$area=$d_user["nama_unit"];
						$kd_unit=$d_user["id_unit"];
						$id_pribadi_user=$d_user["id_pribadi_user"];
						//$notes_recording=$d_user["notes_recording"];						
		
					$q_user1="select nama as observer_name
						  	from hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer' ";
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
			?>

<tr onMouseOver="this.style.cursor='hand'; this.style.backgroundColor='#E8E6FF';" onMouseOut="this.style.backgroundColor='#FFFFFF';">	
		<td><a href="<? echo "kalibrasi/add_kalibrasi_pl.php?report_by=$report_by&date_eva1=$date_eva1&date_eva2=$date_eva2&id_qm=$id_qm&msisdn=$msisdn&customer_name=$customer_name&observer_name=$observname&interaction_date=$interaction_date&hh_it=$hh_time&mm_it=$mm_time&hh_duration=$hh_duration&mm_duration=$mm_duration&ss_duration=$ss_duration&observation_date=$observation_date&week_=$week_&interaction_type=$interaction_type&product_knowledge=$product_knowledge&notes_pk=$notes_pk&activity_code=$activity_code&notes_ac=$notes_ac&handling_process=$handling_process&fcr=$fcr&notes_fcr=$notes_fcr&repeat=$repeat&notes_repeat=$notes_repeat&anthusiasm=$anthusiasm&notes_anthusiasm=$notes_anthusiasm&manner=$manner&notes_manner=$notes_manner&effective_handling=$effective_handling&notes_eh=$notes_eh&observer=$observer&kd_unit=$kd_unit&id_pribadi_user=$id_pribadi_user"; ?>" onClick="return popup(this, 'notes');"><? echo $no;?></a></td>
	<?		    echo"<td>$area</td>
					  <td>$userid</td>
                      <td>$region</td>
					  <td>$lb</td>
					  <td>$tl_name</td> 
					  <td>$interaction_date</td>
					  <td>$observation_date</td>
					  <td>$week_</td>
					  <td>$customer_name</td>
					  <td>$observer_name</td>
					  
                      </tr>";
					  $no++;
					} ?>
  </table>
  <p>Total data : <? echo"$jum_tot"; ?></p>
 
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