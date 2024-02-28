<?php
/////////////////////////////////export to excel ///////////////////////////////////////////
// Here we tell the browser that this is an excel file.
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=report.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 

//$user = "sa";		//MySQL Username
//$password = "hasuuuuut";		// MySQL Username's Password
//$dbname= "db_qm";		//Database Name

// localhost is the default database hosf for most servers, you might need to change yours if it doesnt work
//$global_dbh = mssql_connect("crmgateway", $user, $password); // This establishes the database connection

//mssql_select_db($dbname, $global_dbh);// Select what database to use
include "../konek_qm.php";
?>

<p>&nbsp;</p>
<table width="368%" border="1" align="center" cellspacing="1">
	<tr bgcolor="#CCCCCC">
		<td width="1%" rowspan="3" class="header"><div align="center">No</div></td>
		<td width="4%" rowspan="3" class="header"><div align="center">Area</div></td>
		<td width="4%" rowspan="3" class="header"><div align="center">Username</div></td>
		<td width="4%" rowspan="3" class="header"><div align="center">Region</div></td>
		<td width="2%" rowspan="3" class="header"><div align="center">Nama</div></td>
		<td width="2%" rowspan="3" class="header">Unit</td>
		<td width="2%" rowspan="3" class="header">TL/SPV</td>
		<td width="2%" rowspan="3" class="header">Nomor SR</td>
		<td width="2%" rowspan="3" class="header">Interaction Date </td>
		<td width="2%" rowspan="3" class="header">Observation Date</td>
		<td width="2%" rowspan="3" class="head0">Validation Date</td>
		<td width="2%" rowspan="3" class="header">Week</td>
		<td width="2%" rowspan="3" class="header">Customer Name </td>
		<td width="2%" rowspan="3" class="header">Interaction Type</td>
		<td width="2%" rowspan="3" class="header">Product Type</td>
		<td width="2%" rowspan="3" class="header">Product Detail</td>
		<td width="2%" rowspan="3" class="header">Product Detail by Agent</td>
		<td width="2%" rowspan="3" class="header">Call Activity </td>
		<td width="2%" rowspan="3" class="header">Handling time (duration)</td>
		<td rowspan="3" class="header">Handling Time (second) </td>
		<td rowspan="3" class="header">Call Status </td>
		<td rowspan="3" class="header">Reason</td>
		
		<th colspan="3" class="head0"><div align="center">Activity Plan</div></th>
		<th colspan="3" class="head0"><div align="center">Probing</div></th>
		<th colspan="3" class="head0"><div align="center">Solution</div></th>
		<th colspan="3" class="head0"><div align="center">Notes</div></th>
		<th colspan="3" class="head0"><div align="center">Closing</div></th>
		
		<td width="4%" rowspan="3" class="head0"><div align="center">Total Score </div></td>
		<td width="4%" rowspan="3" class="head0"><div align="center">Skala</div></td>
		<td width="4%" rowspan="3" class="head0">Recommendation</td>
		<? if ($SES_KODE_LEVEL<>"mitra"){?>
			<th width="7%" rowspan="3" class="head0"><div align="center">Notes sample recording</div></th>
		<? } ?>
		<td width="4%" rowspan="3" class="head0"><div align="center">Observer</div></td>
		<td width="4%" rowspan="3" class="head0"><div align="center">Validation</div></td>
		<td width="4%" rowspan="3" class="head0"><div align="center">Validator</div></td>
		<td width="4%" rowspan="3" class="head0"><div align="center">Notes Score</div></td>
    </tr>
	
	<tr bgcolor="#CCCCCC">
      <th colspan="3" class="head0"><div align="center">Activity Plan</div></th>
      <th colspan="3" class="head0"><div align="center">Probing & Analisa</div></th>
      <th colspan="3" class="head0"><div align="center">Correct Solution</div></th>
      <th colspan="3" class="head0"><div align="center">Notes</div></th>
      <th colspan="3" class="head0"><div align="center">Courtesy & Closing</div></th>
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
    </tr>
	
	<?
	include "../konek_qm.php";
	
	  $itung="[sp_count_kalibrasi_cole]'table_kalibrasi_cr','table_qm_cr','$date_eva1','$date_eva2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','$select_region','$st_rep'";
	  //echo $itung;
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
					$q_user="[sp_search_kalibrasi_cole]'table_kalibrasi_cr','table_qm_cr','$report_by','%$kd_unit%','$date_eva1','$date_eva2','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','$select_region','$st_rep'";
					//echo"$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$id=$d_user["id"];
						$spv_name=$d_user["spv_name"];
						$interaction_date=$d_user["interaction_date"];
						$interaction_date2 = $d_user['date'];
						$validation_date=$d_user["date_saved"];
						 $jam = $d_user['jam'];
						 $jamm = explode (":", $jam);
						 $hh = $jamm[0];
						 $mm = $jamm[1];
						$observation_date=$d_user["observation_date"];
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
						$reason=$d_user["reason"];
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
						$status_save=$d_user["status_save"];
						$observer=$d_user["observer"];
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
						$sr=$d_user["sr"];
						$area=$d_user["nama_unit"];
						
						$notes_recording=$d_user["notes_recording"];
						$score_tot=$d_user["tot_score"];
						
						if ($score_tot >= 90)
						{
						$skala2="A";
						}
						if ($score_tot >= 80 and $score_tot < 90)
						{
						$skala2="B";
						}
						if ($score_tot >= 70 and $score_tot < 80)
						{
						$skala2="C";
						}
						if ($score_tot >= 60 and $score_tot < 70)
						{
						$skala2="D";
						}
						if ($score_tot < 60)
						{
						$skala2="E";
						}
		
						echo "<tr class='content'>
                      <td>$no</td>";
		
					$q_user1="select nama as observer_name from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer' ";
					//echo "$q_user";
					$r_user1=mssql_query($q_user1);
					while($d_user1=mssql_fetch_array($r_user1))
						{
						$observer_name=$d_user1["observer_name"];
						}
					
					$q_kal="select nama as kalibrasi_name
						  	from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
					$r_kal=mssql_query($q_kal);
					while($d_kal=mssql_fetch_array($r_kal))
						{
						$kalibrasi_name=$d_kal["kalibrasi_name"];
						}
					
					
					$hhtomm1=($hh_handling_time*3600)+($mm_handling_time*60)+($ss_handling_time);

//

    echo"			  <td>$area</td>
					  <td>$userid</td>
					  <td>$region</td>
                      <td>$lb</td>
                      <td>$nama_unit</td>
						<td>$spv_name</td>
						<td>$sr</td>
						<td>$interaction_date</td>
						<td>$observation_date</td>
						<td>$validation_date</td>
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
						<td>$reason</td>
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
					  <td>$score_tot</td>
                      <td>$skala2</td>
                      <td>$recommendation</td>";
					if ($SES_KODE_LEVEL<>"mitra"){
						echo"<td>$notes_recording</td>";
					}
					echo "<td>$observer_name</td>
					  <td>$kalibrasi</td>
					  <td>$kalibrasi_name</td>
					  <td>$notes_score</td>
                      </tr>";
					  $no++;
					  
						}
		
					?>
  </a>
</table>
<p>Total data : <? echo"$jum_tot"; ?></p>

  <table width="700" border="1" class="table table-bordered table-infinite">
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
      <td>Activity Plan</td>
	  <td>Activity Plan</td>
      <td>5</td>
      <td><?   
	  //edit hendi
                   // $queryhendi="[sp_reportqm_kalibrasi_email]'table_kalibrasi_cr','$tgl1','$tgl2','$report_by','%$c_observer%','%$nik_agent%','$cc_mentari','$cc_im3','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
      $queryhendi="[sp_reportqm_kalibrasi_email]'table_kalibrasi_cr','table_qm_cr','$date_eva1','$date_eva2','$report_by','$c_observer','%$nik_agent%','%$cc_mentari%','%$cc_im3%','%$kd_unit%','%%','$select_region','$st_rep'";

	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
	  // echo $queryhendi;
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
	  <td>Probing</td>
      <td>Probing & Analisa</td>
	  <td>15</td>
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
      <td>Solution</td>
	  <td>Correct Solution</td>
      <td>40</td>
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
	  <td>4</td>
	  <td>Notes</td>
      <td>Notes</td>
      <td>20</td>
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
      <td>5</td>
      <td>Closing</td>
	  <td>Courtesy & Closing</td>
      <td>20</td>
      <td><?  
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
	
	</table>
	<p>&nbsp </p>
	<table width="264" border="1" class="table table-bordered table-infinite">
  
	<tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
    <tr>
      <td>Handling Time  Average</td>
      <td><?  
      
			$stot_hh="[sp_handling_kalibrasi_cole]'table_kalibrasi_cr','table_qm_cr','$report_by','$date_eva1','$date_eva2','$kd_unit','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$st_rep'";
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
