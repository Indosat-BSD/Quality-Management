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
      <td>Report By </td>
      <td><select name="report_by" id="report_by" class="box" onchange="satu.submit()">
        <option value="0">Select By
        <?php
			$katahh=array('Departement','Unit');
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
	   <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td><? if ($report_by=="Unit"){?></td>
      <td>&nbsp;</td>
	   <td>&nbsp;</td>
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
		  <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td width="10%">Divisi</td>
      <td><select name="kd_division" id="select" class="box" onchange="satu.submit()" >
          <option value="0" selected="selected">Divisi Name
          <?php
include "konek.php";

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
	   <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td>Departemen</td>
      <td><select name="kd_departemen" onchange="satu.submit()" class="box" >
          <option value="0" selected="selected">Departemen Name
          <?php
include "konek.php";

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
	   <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td>Unit Kerja </td>
      <td><select name="kd_unit" class="box" >
          <option value="0" selected="selected">Unit Name
          <?php
include "konek.php";
					
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
	   <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
	<tr class="content">
      <td><? } if ($report_by=="Departement"){?></td>
      <td>&nbsp;</td>
	   <td>&nbsp;</td>
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
	   <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td>Departemen</td>
      <td><p>
        <input name="cc_mentari" type="checkbox" id="cc_mentari" value="CCO01" <? if ($cc_mentari=="CCO01") {echo "checked";} else {$cc_mentari='-'; echo "";} ?>/>
      Premium Postpaid & Data Service CC
        </p>
        <p>
          <input name="cc_im3" type="checkbox" id="cc_im3" value="CCO02" <? if ($cc_im3=="CCO02") {echo "checked";} else {$cc_im3='-'; echo "";} ?> />
          Other CC </p>
        <p>
          <input name="cc_pp" type="checkbox" id="cc_pp" value="CCO03" <? if ($cc_pp=="CCO03") {echo "checked";} else {$cc_pp='-'; echo "";} ?>/>
      Regular CC </p></td>
      <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
	<? } ?>
    <tr>
		<td width="13%" class="t">Month</td>
		<td width="28%" class="t">
		<select name="pilih_bulan">
		 	<option value="<? echo $pilih_bulan; ?>"><? echo $pilih_bulan; ?></option>
			<option value="Januari">Januari</option>
			<option value="Februari">Februari</option>
			<option value="Maret">Maret</option>
			<option value="April">April</option>
			<option value="Mei">Mei</option>
			<option value="Juni">Juni</option>
			<option value="Juli">Juli</option>
			<option value="Agustus">Agustus</option>
			<option value="September">September</option>
			<option value="Oktober">Oktober</option>
			<option value="November">November</option>
			<option value="Desember">Desember</option>
	  </select>	  </td>
		<td width="5%" class="t">Year</td>
		<td width="54%" class="t">
		<select name="pilih_tahun" onChange="document.fm_daily.submit()">
			<option value="<? echo $pilih_tahun; ?>"><? echo $pilih_tahun; ?></option>
			<option value="2011">2011</option>
			<option value="2012">2012</option>
			<option value="2013">2013</option>
			<option value="2014">2014</option>
			<option value="2015">2015</option>
			<option value="2016">2016</option>
			<option value="2017">2017</option>
			<option value="2018">2018</option>
			<option value="2019">2019</option>
			<option value="2020">2020</option>
			<option value="2021">2021</option>
			<option value="2022">2022</option>
	  </select>	  </td>
	</tr>
	<tr class="content">
     
      <td></td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
	  <td>&nbsp;</td>
    </tr>
    <tr class="content">
      <td><input name="searchButton" type="submit" id="searchButton" value="Search"  class="btn btn-primary"/></td>
		  <td><?
		  $tgl1 = date('Ymd',strtotime($date_eva1));
		  $tgl2 = date('Ymd',strtotime($date_eva2));
		  
		  echo "<a class='btn btn-warning' href='Report_SumCENCEsim.php?cc_mentari=$cc_mentari&cc_im3=$cc_im3&cc_pp=$cc_pp&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&date_eva1=$tgl1&date_eva2=$tgl2&select_region=$select_region&pilih_bulan=$pilih_bulan&pilih_tahun=$pilih_tahun	'>export to excel</a>";
		  echo "<a class='btn btn-warning' href='Report_SumCENCEword.php?cc_mentari=$cc_mentari&cc_im3=$cc_im3&cc_pp=$cc_pp&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&date_eva1=$tgl1&date_eva2=$tgl2&select_region=$select_region&pilih_bulan=$pilih_bulan&pilih_tahun=$pilih_tahun	'>export to word</a>";
		  echo "<a class='btn btn-warning' href='Report_SumCENCEppt.php?cc_mentari=$cc_mentari&cc_im3=$cc_im3&cc_pp=$cc_pp&report_by=$report_by&nik_agent=$nik_agent&c_observer=$c_observer&kd_unit=$kd_unit&date_eva1=$tgl1&date_eva2=$tgl2&select_region=$select_region&pilih_bulan=$pilih_bulan&pilih_tahun=$pilih_tahun	'>export to ppt</a>";
		  ?></td>
		  </td>
		   <td>&nbsp;</td>
		    <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>


<?
include "konek_qm.php";

$pilih_tahun	= $_POST['pilih_tahun'];
if ($pilih_tahun)
{
  $hasil_kabisat	= $pilih_tahun % 4; 
  // 31 hari
  if 
  (($pilih_bulan == "Januari") ||
  ($pilih_bulan == "Maret") ||
  ($pilih_bulan == "Mei") ||
  ($pilih_bulan == "Juli") ||
  ($pilih_bulan == "Agustus") ||
  ($pilih_bulan == "Oktober") ||
  ($pilih_bulan == "Desember") )
  {
  	$jumlah_hari	= 31;
  }

  // 30 hari
  else if
  (($pilih_bulan == "April") ||
  ($pilih_bulan == "Juni") ||
  ($pilih_bulan == "September") ||
  ($pilih_bulan == "November") )
  {
	$jumlah_hari	= 30;
  }
  
  // 29 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat == 0))
  {
  	$jumlah_hari	= 29;
  }

  // 28 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat != 0))
  {
  	$jumlah_hari	= 28;
  } 
  
  if ($pilih_bulan == "Januari")
  {
  	$angka_bulan = '01';
  }
  else if ($pilih_bulan == "Februari")
  {
  	$angka_bulan = '02';
  } 
  else if ($pilih_bulan == "Maret")
  {
  	$angka_bulan = '03';
  } 
  else if ($pilih_bulan == "April")
  {
  	$angka_bulan = '04';
  } 
  else if ($pilih_bulan == "Mei")
  {
  	$angka_bulan = '05';
  } 
  else if ($pilih_bulan == "Juni")
  {
  	$angka_bulan = '06';
  } 
  else if ($pilih_bulan == "Juli")
  {
  	$angka_bulan = '07';
  } 
  else if ($pilih_bulan == "Agustus")
  {
  	$angka_bulan = '08';
  } 
  else if ($pilih_bulan == "September")
  {
  	$angka_bulan = '09';
  } 
  else if ($pilih_bulan == "Oktober")
  {
  	$angka_bulan = '10';
  } 
  else if ($pilih_bulan == "November")
  {
  	$angka_bulan = '11';
  } 
  else if ($pilih_bulan == "Desember")
  {
  	$angka_bulan = '12';
  } 
   
  
	$pilih_bulan	= $_POST['pilih_bulan'];
	
	// Time now 
	// Add script ini tgl 10 Juli 2012 08:28 ++
	$timezone = "Asia/Bangkok";
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);

	$created_date	= date('m/d/Y');
	
	}
?>
<table width="100%" class="table table-bordered table-infinite">
<form method="post" action="<? $PHP_SELF;?>">
  <tr>
     <th width="10%" rowspan="2" valign="middle" class="head0 nosort"><strong>Description</strong></th>
     <th colspan="31" align="center" class="head0 nosort"><strong><? echo "$pilih_bulan&nbsp;&nbsp;&nbsp;$pilih_tahun"; ?></strong></th>
  </tr>
  <tr>
  <?
  $hasil_kabisat	= $pilih_tahun % 4; 
  // 31 hari
  if 
  (($pilih_bulan == "Januari") ||
  ($pilih_bulan == "Maret") ||
  ($pilih_bulan == "Mei") ||
  ($pilih_bulan == "Juli") ||
  ($pilih_bulan == "Agustus") ||
  ($pilih_bulan == "Oktober") ||
  ($pilih_bulan == "Desember") )
  {
		for ($i	= 1;$i<=31;$i++)
		{
			?>
			   <th width="6%"class="head0 nosort"><strong><? echo $i; ?></strong></th>
			<?
		}
  }

  // 30 hari
  else if
  (($pilih_bulan == "April") ||
  ($pilih_bulan == "Juni") ||
  ($pilih_bulan == "September") ||
  ($pilih_bulan == "November") )
  {
		for ($i	= 1;$i<=30;$i++)
		{
			?>
			 <th width="6%" class="head0 nosort"><strong><? echo $i; ?></strong></th>
			<?
		}
  }
  
  // 29 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat == 0))
  {
		for ($i	= 1;$i<=29;$i++)
		{
			?>
			 <th width="6%" class="head0 nosort"><strong><? echo $i; ?></strong></th>
			<?
		}
  }
  
  // 28 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat != 0))
  {
		for ($i	= 1;$i<=28;$i++)
		{
			?>
			 <th width="6%" class="head0 nosort"><strong><? echo $i; ?></strong></th>
			<?
		}
  }
  ?>
  </tr>
  <tr>
     <td width="10%" class="head0 nosort"><strong>CE</strong></td>
      <?
  $hasil_kabisat	= $pilih_tahun % 4; 
  // 31 hari
  if 
  (($pilih_bulan == "Januari") ||
  ($pilih_bulan == "Maret") ||
  ($pilih_bulan == "Mei") ||
  ($pilih_bulan == "Juli") ||
  ($pilih_bulan == "Agustus") ||
  ($pilih_bulan == "Oktober") ||
  ($pilih_bulan == "Desember") )
  {
		for ($i	= 1;$i<=31;$i++)
		{
		 $bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		
		$stot_fe="[sp_fetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
			$fe_total=$fe_tot*3;
			?>
			   <td width="6%"class="head0 nosort"><strong><? echo $fe_total; ?></strong></td>
			<?
		}
  }

  // 30 hari
  else if
  (($pilih_bulan == "April") ||
  ($pilih_bulan == "Juni") ||
  ($pilih_bulan == "September") ||
  ($pilih_bulan == "November") )
  {
		for ($i	= 1;$i<=30;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		
		$stot_fe="[sp_fetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
				//	echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
			$fe_total=$fe_tot*3;
		?>
			 <td width="6%" class="head0 nosort"><strong><? echo $fe_total; ?></strong></td>
			<?
		}
  }
  
  // 29 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat == 0))
  {
		for ($i	= 1;$i<=29;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		
		$stot_fe="[sp_fetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
			$fe_total=$fe_tot*3;
		?>
			 <td width="6%" class="head0 nosort"><strong><? echo $fe_total; ?></strong></td>
			<?
		}
  }
  
  // 28 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat != 0))
  {
		for ($i	= 1;$i<=28;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		
		$stot_fe="[sp_fetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
			$fe_total=$fe_tot*3;
		?>
			 <td width="6%" class="head0 nosort"><strong><? echo $fe_total; ?></strong></td>
			<?
		}
  }
  ?>
  </tr>
  
  <tr>
     <td width="10%" class="head0 nosort"><strong>Total CE</strong></td>
      <?
  $hasil_kabisat	= $pilih_tahun % 4; 
  // 31 hari
  if 
  (($pilih_bulan == "Januari") ||
  ($pilih_bulan == "Maret") ||
  ($pilih_bulan == "Mei") ||
  ($pilih_bulan == "Juli") ||
  ($pilih_bulan == "Agustus") ||
  ($pilih_bulan == "Oktober") ||
  ($pilih_bulan == "Desember") )
  {
		for ($i	= 1;$i<=31;$i++)
		{
		 $bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
	$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
			?>
			   <td width="6%"class="head0 nosort"><strong>
				<?
				$total = 3*$jum_tot;
				echo $total;
		    	?></strong></td>
			
	<?	}
  }

  // 30 hari
  else if
  (($pilih_bulan == "April") ||
  ($pilih_bulan == "Juni") ||
  ($pilih_bulan == "September") ||
  ($pilih_bulan == "November") )
  {
		for ($i	= 1;$i<=30;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
	
		?>
			 <td width="6%" class="head0 nosort"><strong>
				<?
	 			$total = 3*$jum_tot;
				echo $total;
		    	?></strong></td>
			<?
		}
  }
  
  // 29 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat == 0))
  {
		for ($i	= 1;$i<=29;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		
		?>
			 <td width="6%" class="head0 nosort"><strong>
				<?
	 			$total = 3*$jum_tot;
				echo $total;
		    	?>%</strong></td>
			<?
		}
  }
  
  // 28 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat != 0))
  {
		for ($i	= 1;$i<=28;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		?>
			 <td width="6%" class="head0 nosort"><strong>
				<?
	 			$total = 3*$jum_tot;
				echo $total;
		    	?>%</strong></td>
			<?
		}
  }
  ?>
  </tr>
  
  <tr>
     <td width="10%" class="head0 nosort"><strong>Accuracy CE</strong></td>
      <?
  $hasil_kabisat	= $pilih_tahun % 4; 
  // 31 hari
  if 
  (($pilih_bulan == "Januari") ||
  ($pilih_bulan == "Maret") ||
  ($pilih_bulan == "Mei") ||
  ($pilih_bulan == "Juli") ||
  ($pilih_bulan == "Agustus") ||
  ($pilih_bulan == "Oktober") ||
  ($pilih_bulan == "Desember") )
  {
		for ($i	= 1;$i<=31;$i++)
		{
		 $bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
	$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		$stot_fe="[sp_fetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
			$fe_total=$fe_tot*3;
			?>
			   <td width="6%"class="head0 nosort"><strong>
				<?
				echo round(($jum_tot!=0)?($fe_tot/$jum_tot)*100:0 , 2);
		    	?>%</strong></td>
			
	<?	}
  }

  // 30 hari
  else if
  (($pilih_bulan == "April") ||
  ($pilih_bulan == "Juni") ||
  ($pilih_bulan == "September") ||
  ($pilih_bulan == "November") )
  {
		for ($i	= 1;$i<=30;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		$stot_fe="[sp_fetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
				//	echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
			$fe_total=$fe_tot*3;
		?>
			 <td width="6%" class="head0 nosort"><strong>
				<?
	 			echo round(($jum_tot!=0)?($fe_tot/$jum_tot)*100:0 , 2);
		    	?>%</strong></td>
			<?
		}
  }
  
  // 29 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat == 0))
  {
		for ($i	= 1;$i<=29;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		
		$stot_fe="[sp_fetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
			$fe_total=$fe_tot*3;
		?>
			 <td width="6%" class="head0 nosort"><strong>
				<?
	 			echo round(($jum_tot!=0)?($fe_tot/$jum_tot)*100:0 , 2);
		    	?>%</strong></td>
			<?
		}
  }
  
  // 28 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat != 0))
  {
		for ($i	= 1;$i<=28;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		
		$stot_fe="[sp_fetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
			$fe_total=$fe_tot*3;
		?>
			 <td width="6%" class="head0 nosort"><strong>
				<?
	 			echo round(($jum_tot!=0)?($fe_tot/$jum_tot)*100:0 , 2);
		    	?>%</strong></td>
			<?
		}
  }
  ?>
  </tr>
  
  
  <tr>
     <td width="10%"class="head0 nosort"><strong>NCE</strong></td>
      <?
  $hasil_kabisat	= $pilih_tahun % 4; 
  // 31 hari
  if 
  (($pilih_bulan == "Januari") ||
  ($pilih_bulan == "Maret") ||
  ($pilih_bulan == "Mei") ||
  ($pilih_bulan == "Juli") ||
  ($pilih_bulan == "Agustus") ||
  ($pilih_bulan == "Oktober") ||
  ($pilih_bulan == "Desember") )
  {
		for ($i	= 1;$i<=31;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		
		$stot_fe="[sp_nfetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$nfe_tot=$d_stot_fe["jum_nfe_tot"];
			} 		
		if ($nfe_tot == NULL) {$nfe_tot=0;}	
		?>
			   <td width="6%"class="head0 nosort"><strong><? echo $nfe_tot; ?></strong></td>
			<?
		}
  }

  // 30 hari
  else if
  (($pilih_bulan == "April") ||
  ($pilih_bulan == "Juni") ||
  ($pilih_bulan == "September") ||
  ($pilih_bulan == "November") )
  {
		for ($i	= 1;$i<=30;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		
		$stot_fe="[sp_nfetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$nfe_tot=$d_stot_fe["jum_nfe_tot"];
			} 		
			
		?>
			   <td width="6%"class="head0 nosort"><strong><? echo $nfe_tot; ?></strong></td>
			<?
		}
  }
  
  // 29 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat == 0))
  {
		for ($i	= 1;$i<=29;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		
		$stot_fe="[sp_nfetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$nfe_tot=$d_stot_fe["jum_nfe_tot"];
			} 		
			
		?>
			   <td width="6%"class="head0 nosort"><strong><? echo $nfe_tot; ?></strong></td>
			<?
		}
  }
  
  // 28 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat != 0))
  {
		for ($i	= 1;$i<=28;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		
		$stot_fe="[sp_nfetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$nfe_tot=$d_stot_fe["jum_nfe_tot"];
			} 		
			
		?>
			   <td width="6%"class="head0 nosort"><strong><? echo $nfe_tot; ?></strong></td>
			<?
		}
  }
  ?></tr>
  
  <tr>
     <td width="10%" class="head0 nosort"><strong>Total NCE</strong></td>
      <?
  $hasil_kabisat	= $pilih_tahun % 4; 
  // 31 hari
  if 
  (($pilih_bulan == "Januari") ||
  ($pilih_bulan == "Maret") ||
  ($pilih_bulan == "Mei") ||
  ($pilih_bulan == "Juli") ||
  ($pilih_bulan == "Agustus") ||
  ($pilih_bulan == "Oktober") ||
  ($pilih_bulan == "Desember") )
  {
		for ($i	= 1;$i<=31;$i++)
		{
		 $bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
	$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
			?>
			   <td width="6%"class="head0 nosort"><strong>
				<?
				$total = 11*$jum_tot;
				echo $total;
		    	?></strong></td>
			
	<?	}
  }

  // 30 hari
  else if
  (($pilih_bulan == "April") ||
  ($pilih_bulan == "Juni") ||
  ($pilih_bulan == "September") ||
  ($pilih_bulan == "November") )
  {
		for ($i	= 1;$i<=30;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
	
		?>
			 <td width="6%" class="head0 nosort"><strong>
				<?
	 			$total = 11*$jum_tot;
				echo $total;
		    	?></strong></td>
			<?
		}
  }
  
  // 29 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat == 0))
  {
		for ($i	= 1;$i<=29;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		
		?>
			 <td width="6%" class="head0 nosort"><strong>
				<?
	 			$total = 11*$jum_tot;
				echo $total;
		    	?>%</strong></td>
			<?
		}
  }
  
  // 28 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat != 0))
  {
		for ($i	= 1;$i<=28;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		?>
			 <td width="6%" class="head0 nosort"><strong>
				<?
	 			$total = 11*$jum_tot;
				echo $total;
		    	?>%</strong></td>
			<?
		}
  }
  ?>
  </tr>
  <tr>
     <td width="10%"class="head0 nosort"><strong>Accuracy NCE</strong></td>
      <?
  $hasil_kabisat	= $pilih_tahun % 4; 
  // 31 hari
  if 
  (($pilih_bulan == "Januari") ||
  ($pilih_bulan == "Maret") ||
  ($pilih_bulan == "Mei") ||
  ($pilih_bulan == "Juli") ||
  ($pilih_bulan == "Agustus") ||
  ($pilih_bulan == "Oktober") ||
  ($pilih_bulan == "Desember") )
  {
		for ($i	= 1;$i<=31;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		$stot_fe="[sp_nfetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$nfe_tot=$d_stot_fe["jum_nfe_tot"];
			} 		
		if ($nfe_tot == NULL) {$nfe_tot=0;}	
		?>
			   <td width="6%"class="head0 nosort"><strong>
				<?
				echo round(($jum_tot!=0)?($nfe_tot/(11*$jum_tot))*100:0 , 2);
		    	?>%</strong></td>
			<?
		}
  }

  // 30 hari
  else if
  (($pilih_bulan == "April") ||
  ($pilih_bulan == "Juni") ||
  ($pilih_bulan == "September") ||
  ($pilih_bulan == "November") )
  {
		for ($i	= 1;$i<=30;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		$stot_fe="[sp_nfetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$nfe_tot=$d_stot_fe["jum_nfe_tot"];
			} 		
			if ($nfe_tot == NULL) {$nfe_tot=0;}	
		?>
			   <td width="6%"class="head0 nosort"><strong>
				<?
				
				echo round(($jum_tot!=0)?($nfe_tot/(11*$jum_tot))*100:0 , 2);
		    	?>%</strong></td>
			<?
		}
  }
  
  // 29 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat == 0))
  {
		for ($i	= 1;$i<=29;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		$stot_fe="[sp_nfetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$nfe_tot=$d_stot_fe["jum_nfe_tot"];
			} 		
			if ($nfe_tot == NULL) {$nfe_tot=0;}	
		?>
			   
				<?
				echo round(($jum_tot!=0)?($nfe_tot/(11*$jum_tot))*100:0 , 2);
		    	?>%</strong></td>
			<?
		}
  }
  
  // 28 hari
  else if (($pilih_bulan == "Februari") && ($hasil_kabisat != 0))
  {
		for ($i	= 1;$i<=28;$i++)
		{
		$bb=strlen($i);
		
		 if ($bb==1)
		 	{
				$i='0'.$i;
			}
			else
			{
				$i;	
			}
		$itung="[sp_count2]'table_qm','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	 
		$stot_fe="[sp_nfetotal_ib]'table_qm','$report_by','$pilih_tahun$angka_bulan$i','$pilih_tahun$angka_bulan$i','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$nfe_tot=$d_stot_fe["jum_nfe_tot"];
			} 		
		if ($nfe_tot == NULL) {$nfe_tot=0;}		
		?>
			   <td width="6%"class="head0 nosort"><strong>
				<?
				echo round(($jum_tot!=0)?($nfe_tot/(11*$jum_tot))*100:0 , 2);
		    	?>%</strong></td>
			<?
		}
  }
  ?>
  </tr>
</form>
 </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p></p>

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