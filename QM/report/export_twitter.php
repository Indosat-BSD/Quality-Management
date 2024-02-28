<?php
/////////////////////////////////export to excel ///////////////////////////////////////////
// Here we tell the browser that this is an excel file.
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=report.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 

include "../konek_qm.php";
?>

<p>&nbsp;</p>
<p>&nbsp;</p>
  <table width="290%" border="1" align="center" cellspacing="1">
	<!--======================================================================================-->
	<!--================================ Update Januaari 2017 ================================-->
	<!--======================================================================================-->
	
<?php
if($report_by!='New Report'){
?> 
	 <tr bgcolor="#CCCCCC">
      <td width="1%" rowspan="3" class="header"><div align="center">No</div></td>
      <td width="4%" rowspan="3" class="header"><div align="center">Unit Kerja</div></td>
      <td width="4%" rowspan="3" class="header"><div align="center">Username</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Nama</div></td>
      <td width="2%" rowspan="3" class="header">Tenure</td>
      <td width="2%" rowspan="3" class="header"><div align="center">TL/SPV</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Interaction Date </div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Observation Date</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Week</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Customer Name </div></td>
	  <td width="2%" rowspan="3" class="header"><div align="center">MSISDN </div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Interaction Type</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Product Type</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Product Detail</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Product Detail by Agent</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Repeat (Y / N)</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Date of previous call</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Previous Agent </div></td> 
	  
      <th colspan="3" class="head0"><div align="center">Response SLA</div></th>
      <th colspan="3" class="head0"><div align="center">Standar Response</div></th>
      <th colspan="3" class="head0"><div align="center">Probing</div></th>
      <th colspan="15" class="head0"><div align="center">Solution & Akurasi Data</div></th>
      <th colspan="3" class="head0"><div align="center">Type Accuracy</div></th>
      <th colspan="3" class="head0"><div align="center">Closing greeting</div></th>
      <th colspan="3" class="head0"><div align="center">Additional Program</div></th>
	  
	  <td width="4%" rowspan="3" class="header"><div align="center">Total Score </div></td>
      <td width="4%" rowspan="3" class="header"><div align="center">Skala</div></td>
	  <td width="4%" rowspan="3" class="header"><div align="center">Recommendation</div></td>
	  <th width="6%" rowspan="3" class="head0"><div align="center">Action to be done - QA</div></th>
      <th width="7%" rowspan="3" class="head0"><div align="center">Action to be done - Opers</div></th>
	 <? if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){?>
        <td width="7%" rowspan="3" class="head0"><div align="center">Notes sample recording</div></td>
    <? } ?>
      <td width="4%" rowspan="3" class="header"><div align="center">Observer</div></td>
      <td width="4%" rowspan="3" class="header"><div align="center">Validator</div></td>
	  <td width="4%" rowspan="3" class="header"><div align="center">Repeat Value</div></td>
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
	
	<?
	include "../konek_qm.php";
	  $itung="[sp_count_colection]'table_qm_twitter','$date_eva1','$date_eva2','$report_by','%$kd_unit%','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
	//echo $itung;
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];

	$q_user="[sp_search_colection]'table_qm_twitter','$report_by','%$kd_unit%','$date_eva1','$date_eva2','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
					//echo"$q_user";
					
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$date_saved=$d_user["data_saved"];
						$tenure=$d_user["tenure"];
						$spv_name=$d_user["spv_name"];
						$interaction_date=$d_user["interaction_date"];
						$observation_date=$d_user["observation_date"];
						$week_=$d_user["week_"];
						$customer_name=$d_user["customer_name"];
						$msisdn=$d_user["msisdn"];
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
						$status_save=$d_user["status_save"];
						$nik=$d_user["nik"];
						$recommendation=$d_user["recommendation"];
						$observer=$d_user["observer"];
						$id_kalibrasi=$d_user["id_kalibrasi"];
						$kalibrasi=$d_user["kalibrasi"];
						$agree=$d_user["kalibrasi"];
						$notes_recording=$d_user["notes_recording"];
						$score_tot=$d_user["tot_score"];
						$skala2=$d_user["Skala"];
						$nama_unit=$d_user["nama_unit"];
						
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
		
						echo "<tr class='content'>
                      <td>$no</td>";
					
					$q_user1="select nama as observer_name from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer' ";
					//echo "$q_user";
					$r_user1=mssql_query($q_user1);
					while($d_user1=mssql_fetch_array($r_user1))
						{
						$observer_name=$d_user1["observer_name"];
						}

					if ($repeat=="yes")
					{
						$repeat_val="1";
					$s_date_prev_call="$date_prev_call"; 
					$s_prev_agent="$prev_agent";
					}
					if ($repeat=="no")
					{
						$repeat_val="0";
					$s_date_prev_call="-"; 
					$s_prev_agent="-";
					}
			
					$hhtomm1=($hh_handling_time*3600)+($mm_handling_time*60)+($ss_handling_time);
			
    echo"
                      <td>$nama_unit</td>
                      <td>$userid</td>
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
                      if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){
					  echo"<td>$notes_recording</td>";
					  }
					  echo"<td>$observer_name</td> <td>";
					  
					if ($id_kalibrasi != ""){
					  $q_kal="select nama as kalibrasi_name from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
					  $r_kal=mssql_query($q_kal);
					  while($d_kal=mssql_fetch_array($r_kal))
					  {
						$kalibrasi_name=$d_kal["kalibrasi_name"];
					  }
					
					echo "$kalibrasi_name</td>";
					} 
                    echo "<td>$repeat_val</td></tr>";
					  
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
      $queryhendi="[sp_reportqm_email]'table_qm_twitter','$date_eva1','$date_eva2','$report_by','$c_observer','%$nik_agent%','$cc_mentari','$cc_im3','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";

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
	
	
	<p>&nbsp </p>
	<table width="264" border="1" class="table table-bordered table-infinite">
  <?  
	  		if ($report_by=="Unit")
				  	{				  
					  
					   $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c
					   			inner join db_qm.dbo.table_qm_twitter a on a.id_qm=c.id_qm
					   			where a.status_save='complete' and c.repeat='yes' and a.id_unit like '%$kd_unit%'
					   			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status='$st_rep'";
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
	  			if ($report_by=="Departement")
				  	{				  
					  
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm where a.status_save='complete' and repeat='yes'  and (a.id_unit like '%$cc_mentari%')
					  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status='$st_rep'";
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
					
	  			if ($report_by=="Observer")
				  	{
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  cast(id_data_pribadi as varchar) like case when '$c_observer'<>'0' then '$c_observer' else '%' end
					  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status='$st_rep'"; 
					 /*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
					  
					  $stot_r="select count(*) as jum_s_r from db_qm.dbo.table_qm_twitter_detail c inner join db_qm.dbo.table_qm_twitter a
					  			on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_user=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  (z.nik_karyawan like '%$nik_agent%' or z.nama like '%$nik_agent%')
					  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status='$st_rep'"; 
						/*$stot_r="[sp_repeat_tot_twitter]'table_qm_twitter','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%','$st_rep'";*/
	  				}
	  				
					if ($report_by=="Skala")
				  	{	
				 	 $stot_r="select count(*) as jum_s_r
	from db_qm.dbo.table_qm_twitter a with(nolock) 
   inner join db_qm.dbo.table_qm_twitter_detail b with(nolock) on a.id_qm=b.id_qm
where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'
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
					 between '$date_eva1' and '$date_eva2' and a.id_unit like '%$departemen_skala%' 
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
	<!-- ====================================================================================================================== -->
	<!-- ================================================ Update Detail Report ================================================ -->
	<!-- ====================================================================================================================== -->
	
	
	<table width="290%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
		<thead>
		<tr bgcolor="#CCCCCC">
		  <th width="10%" rowspan="3" class="head0"><div align="center">No</div></th>
		  <th width="10%" rowspan="3" class="head0"><div align="center">NIK</div></th>
		  <th width="10%" rowspan="3" class="head0"><div align="center">Nama</div></th>
		  <th width="10%" rowspan="3" class="head0"><div align="center">Unit Kerja</div></th>
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
		  
		  <th width="4%" rowspan="2" colspan="4" class="head0"><div align="center">Total</div></th>
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

		$a_user="[sp_search_colection]'table_qm_twitter','$report_by','%$kd_unit%','$date_eva1','$date_eva2','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skalacmb','$departemen_skala','$unit_skala','$st_rep','summary','socmed' ";
		
		// echo"$a_user";
		
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
				<td>".$c_user['noe']."</td>
				</tr>
			";
			$no++;
			$sample+=$c_user['noe'];
		}
	}else{

		$a_user="[sp_search_colection]'table_qm_twitter','$report_by','%$kd_unit%','$date_eva1','$date_eva2','$cc_mentari','$cc_im3','$c_observer','%$nik_agent%','$select_region','$skalacmb','$departemen_skala','$unit_skala','$st_rep','detail'";
		
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
				<td>$prosen_yes</td>
				<td>".$c_user['tot_score']."</td>
				";
			if($c_user['noe']>1 and $tmp!=$c_user['id_pribadi_user']){
				echo "<td rowspan='".$c_user['noe']."'>".$c_user['noe']."</td>";
			}else if($c_user['noe']==1){
				echo "<td>".$c_user['noe']."</td>";
			}
			echo "</tr>";
			$tmp=$c_user['id_pribadi_user'];
			$sample++;
		}
	}
	?>
		</tbody>
	</table>
	<br>
	
	<?php echo 'Total Sample : '.$sample; ?>
	
	<!-- ====================================================================================================================== -->
	<!-- ============================================== End Update Detail Report ============================================== -->
	<!-- ====================================================================================================================== -->
<?php } ?>
	<!--======================================================================================-->
	<!--============================== End Update Januaari 2017 ==============================-->
	<!--======================================================================================-->
