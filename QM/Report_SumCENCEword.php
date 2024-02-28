<?
header("Content-type: application/vnd.ms-word"); 
header("Content-Disposition: attachment; filename=report_summaryCE-NCE.doc"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 

include "konek_qm.php";
date_default_timezone_set('Asia/Jakarta');

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
   
	// Time now 
	// Add script ini tgl 10 Juli 2012 08:28 ++
	$timezone = "Asia/Bangkok";
	if(function_exists('date_default_timezone_set')) date_default_timezone_set($timezone);

	$created_date	= date('m/d/Y');
	
	
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
			
		?>
			   <td width="6%"class="head0 nosort"><strong>
				<?
				echo round(($jum_tot!=0)?($nfe_tot/11*$jum_tot)*100:0 , 2);
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
			
		?>
			   
				<?
				echo round(($jum_tot!=0)?($nfe_tot/11*$jum_tot)*100:0 , 2);
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
			
		?>
			   <td width="6%"class="head0 nosort"><strong>
				<?
				echo round(($jum_tot!=0)?($nfe_tot/11*$jum_tot)*100:0 , 2);
		    	?>%</strong></td>
			<?
		}
  }
  ?>
  </tr>
</form>
 </table>