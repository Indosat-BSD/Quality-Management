<?php
/////////////////////////////////export to excel ///////////////////////////////////////////
// Here we tell the browser that this is an excel file.
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=report_newHireIB.xls"); 
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
    <th width="1%" rowspan="3" class="header"><div align="center">No</div></th>
    <th width="1%" rowspan="3" class="head0"><div align="center">Area</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Username</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Region</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Nama</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">TL/SPV</div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Date </div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Observation Date</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Week</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Customer Name </div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Type</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Product Type</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Product Detail</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Product Detail by Agent</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Repeat (Y / N)</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Date of previous call</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Previous Agent </div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Handling time (duration)</div></th>
        <th width="1%" rowspan="3" class="head0">Handling Time (second) </th>
		
		<th colspan="6" class="head0"><div align="center">Opening</div></th>
		<th colspan="12" class="head0"><div align="center">Interaksi, Konfirmasi & Solusi </div></th>
		<th colspan="3" class="head0"><div align="center">Additional program </div></th>
		<th colspan="6" class="head0"><div align="center">Teknis berbicara/Effective Communication</div></th>
		<th colspan="3" class="head0"><div align="center">Teknis Telephony</div></th>
		<th colspan="6" class="head0"><div align="center">Closing</div></th>
		
        <th width="1%" rowspan="3" class="head0"><div align="center">Total Score </div></th>
		<th width="1%" rowspan="3" class="head0"><div align="center">Skala</div></th>
		<th width="1%" rowspan="3" class="head0"><div align="center">Strength Agent</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Area to be Improved</div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Recommendation</div></th>
        <th width="6%" rowspan="3" class="head0"><div align="center">Action to be done - QA</div></th>
        <th width="6%" rowspan="3" class="head0"><div align="center">File QA</div></th>
        <th width="7%" rowspan="3" class="head0"><div align="center">Action to be done - Opers</div></th>
        <th width="7%" rowspan="3" class="head0"><div align="center">File Opers</div></th>
	 <? if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){?>
        <th width="7%" rowspan="3" class="head0"><div align="center">Notes sample recording</div></th>
    <? } ?>
        <th width="2%" rowspan="3" class="head0"><div align="center">Observer</div></th>
		<th width="4%" rowspan="3" class="head0"><div align="center">Validator</div></th>
		<th width="4%" rowspan="3" class="head0"><div align="center">Validation</div></th>
  </tr>
  <tr bgcolor="#CCCCCC">
      <th colspan="3" class="head0"><div align="center">Greeting with Antusiasm</div></th>
      <th colspan="3" class="head0"><div align="center">Verify (refer to verification rules) </div></th>
      <th colspan="3" class="head0"><div align="center">Probing</div></th>
      <th colspan="3" class="head0"><div align="center">Correct Solution </div></th>
      <th colspan="3" class="head0"><div align="center">Input Accuracy Data / Information </div></th>
	  <th colspan="3" class="head0"><div align="center">FCR</div></th>
	  <th colspan="3" class="head0"><div align="center">Campaign/Cross selling/upselling/survey</div></th>
	  <th colspan="3" class="head0"><div align="center">Hospitality/kesopanan (relate to Manner)</div></th>
	  <th colspan="3" class="head0"><div align="center">Personalize Communication</div></th>
	  <th colspan="3" class="head0"><div align="center">Hold/Transfer/Routing/Callback Technique/Hold/Proses pencarian jawaban </div></th>
	  <th colspan="3" class="head0"><div align="center">Reconfirm the Agreement</div></th>
	  <th colspan="3" class="head0"><div align="center">Closing Greeting</div></th>
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
	  <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
    </tr>
  <?
	include "../konek_qm.php";
	if($c_observer==""){$obs="%%";}else{$obs=$c_observer;}
	$itung="[sp_count4]'table_qm_newHireIB','$date_eva1','$date_eva2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$obs','%$nik_agent%','$select_region','$skala','$depart','$unitSkala'";
	
	//echo $itung;
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
//echo "$q1_yes_jum";
	  		if($c_observer==""){$obs="%%";}else{$obs=$c_observer;}
					$q_user="[sp_search4]'table_qm_newHireIB','$report_by','%$kd_unit%','$date_eva1','$date_eva2','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$obs','%$nik_agent%','$select_region','$skala','$depart','$unitSkala'";
					//echo"$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$date_saved=$d_user["data_saved"];
						$spv_name=$d_user["spv_name"];
						$region=$d_user["region"];
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
						$fcr=$d_user["fcr"];
						$repeat=$d_user["repeat"];
						$date_prev_call2 = $d_user['prev'];
						$date_prev_call=$d_user["date_prev_call"];
						$prev_agent=$d_user["prev_agent"];
						$hh_handling_time=$d_user["hh_handling_time"];
						$mm_handling_time=$d_user["mm_handling_time"];
						$ss_handling_time=$d_user["ss_handling_time"];
						$hh_2=$d_user["hh_handling_time"];
						$mm_2=$d_user["mm_handling_time"];
						$ss_2=$d_user["ss_handling_time"];
						$drop_call=$d_user["drop_call"];
						$strength_agent=$d_user["strength_agent"];
						$improved=$d_user["improved"];
						$recommendation=$d_user["recommendation"];
						$action_done_qa=$d_user["action_done_qa"];
						$action_done_ops=$d_user["action_done_ops"];
						$file_action_done_qa=$d_user["file_action_done_qa"];
						$file_action_done_ops=$d_user["file_action_done_ops"];
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
						$status_save=$d_user["status_save"];
						$observer=$d_user["observer"];
						$area=$d_user["nama_unit"];
						$id_kalibrasi=$d_user["id_kalibrasi"];
						$kalibrasi=$d_user["kalibrasi"];
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
						$skala=$d_user["Skala"];
						
						
		
						echo "<tr class='content'>
                      <td>$no</td>";
						 
						 $q ="select nama as observer_name
						  	from hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer' ";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];

					$q_user1="select nama as observer_name
						  	from hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer' ";
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
			
			

	//untuk mengisi data tabel
    echo"
                      <td>$area</td>
					  <td>$userid</td>
                      <td>$region</td>
                      <td>$full_name</td>
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
                      <td>$q11</td>
					  <td>$save_q11</td>
					  <td>$notes11</td>
                      <td>$q12</td>
					  <td>$save_q12</td>
					  <td>$notes12</td>

					  <td>$score_tot</td>
                      <td>$skala</td>
					  <td>$strength_agent</td>
                      <td>$improved</td>
                      <td>$recommendation</td>
                      <td>$action_done_qa</td>
                      <td>$file_action_done_qa</td>
                      <td>$action_done_ops</td>
                      <td>$file_action_done_ops</td>";
                      if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){
					  echo"<td>$notes_recording</td>";
					  }
					  echo"<td>$observer_name</td>
					  <td>";
					  
					if ($id_kalibrasi != ""){
					  $q_kal="select nama as kalibrasi_name from hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
					  $r_kal=mssql_query($q_kal);
					  while($d_kal=mssql_fetch_array($r_kal))
					  {
						$kalibrasi_name=$d_kal["kalibrasi_name"];
					  }
					
					echo "$kalibrasi_name</td>";
					} 
					echo "<td>$kalibrasi</td>";
                    echo "</tr>";
					
					$no++; 
					}
						
					
					?>
  </a>
</table>
<p>Total data : <? echo"$jum_tot"; ?></p>
<table width="568" border="1">
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
      <td rowspan="2">1</td>
      <td rowspan="2">Opening</td>
      <td>Greeting with Antusiasm</td>
	  <td>3</td>
      <td><? 
	  //edit hendi
	  
	  if($c_observer==""){$obs="%%";}else{$obs=$c_observer;}
      $queryhendi="[sp_reportqm_newhire]'table_qm_newHireIB','$date_eva1','$date_eva2','$report_by','$obs','%$nik_agent%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','%$kd_unit%','%%','$select_region','$skala','$depart','$unitSkala','0'";
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
	  <td colspan="6"></td>
    </tr>
    <tr>
      <td>Verify (refer to verification rules)</td>
	  <td>5</td>
      <td>
		<?  
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
			printf("%1.2f ", $prosen_q1_n);
		?>
	  </td>
	  <td colspan="6"></td>
	  </tr>
	
    <tr>
      <td rowspan="4">2</td>
      <td rowspan="4">Interaksi, Konfirmasi & Solusi</td>
      <td>Probing</td>
	  <td>5</td>
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
	  <td colspan="6"></td>
    </tr>
    <tr>
      <td>Correct Answer / Solution & Process Complience</td>
	  <td>45</td>
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
	  <td colspan="6"></td>
	  </tr>
    <tr>
      <td><div style="background-color:#E0E0D1">Input Accuracy Data / Information</div></td>
	  <td>8</td>
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
      <td>FCR</td>
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
	  <td colspan="6"></td>
    </tr>
    
    <tr>
      <td>3</td>
      <td>Additional program </td>
      <td>Campaign/Cross selling/upselling/survey</td>
	  <td>4</td>
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
      <td rowspan="2">4</td>
      <td rowspan="2">Teknis berbicara/Effective Communication</td>
      <td><div style="background-color:#E0E0D1">Hospitality/kesopanan (relate to Manner)</div></td>
	  <td>3</td>
      <td colspan="4"></td>
      <td>
		<?  
		  	$q8_tot_s1=$result["q8_s1"];
			echo"$q8_tot_s1";
			
			$q8_avg=$result["avg8"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q8_s1 =($q8_tot_s1/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q8_s1);
		?>
	  </td>
	  <td>
		<?  
		  	$q8_tot_s2=$result["q8_s2"];
			echo"$q8_tot_s2";
		?>
	  </td>
	  <td>
		<?
			$prosen_q8_s2 =($q8_tot_s2/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q8_s2);
		?>
	  </td>
	  <td>
		<?  
		  	$q8_tot_s3=$result["q8_s3"];
			echo"$q8_tot_s3";
		?>
	  </td>
	  <td>
		<?
			$prosen_q8_s3 =($q8_tot_s3/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q8_s3);
		?>
	  </td>
    </tr>
    <tr>
      <td><div style="background-color:#E0E0D1">Personalize Communication</div></td>
	  <td>5</td>
      <td colspan="4"></td>
      <td>
		<?  
		  	$q9_tot_s1=$result["q9_s1"];
			echo"$q9_tot_s1";
			
			$q9_avg=$result["avg9"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q9_s1 =($q9_tot_s1/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q9_s1);
		?>
	  </td>
	  <td>
		<?  
		  	$q9_tot_s2=$result["q9_s2"];
			echo"$q9_tot_s2";
		?>
	  </td>
	  <td>
		<?
			$prosen_q9_s2 =($q9_tot_s2/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q9_s2);
		?>
	  </td>
	  <td>
		<?  
		  	$q9_tot_s3=$result["q9_s3"];
			echo"$q9_tot_s3";
		?>
	  </td>
	  <td>
		<?
			$prosen_q9_s3 =($q9_tot_s3/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q9_s3);
		?>
	  </td>
    </tr>
    <tr>
      <td>5</td>
      <td>Teknis Telephony</td>
      <td>Hold/Transfer/Routing/Callback Technique/Hold/Proses pencarian jawaban </td>
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
	  <td colspan="6"></td>
    </tr>
    <tr>
      <td rowspan="2">6</td>
      <td rowspan="2">Closing</td>
      <td>Reconfirm the Agreement</td>
	  <td>2</td>
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
	  <td colspan="6"></td>
    </tr>
    <tr>
      <td>Closing Greeting</td>
	  <td>2</td>
      <td>
		<?  
		  	$q12_tot_y=$result["q12_yes"];
			echo"$q12_tot_y";
			
			$q12_avg=$result["avg12"];
		?>
	  </td>
	  <td>
		<?
			$prosen_q12_y =($q12_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q12_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q12_tot_n=$result["q12_no"];
			echo"$q12_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q12_n =($q12_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q12_n);
		?>
	  </td>
	  <td colspan="6"></td>
    </tr>
    
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1" class="table table-bordered table-infinite">
  <?  
	  		if ($select_region !="") {
	  			if ($report_by=="Unit")
				  	{
				 	  $stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_newHireIB_detail c 
					  inner join db_qm.dbo.table_qm_newHireIB a on a.id_qm=c.id_qm
					  inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					  where b.region ='$select_region' and fcr='fcr' and a.status_save='complete' and a.id_unit like '%$kd_unit%' 
				 	  and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";
					  
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_newHireIB_detail c
					   inner join db_qm.dbo.table_qm_newHireIB a on a.id_qm=c.id_qm 
					   inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					   where b.region ='$select_region' and a.status_save='complete' and repeat='yes' 
					   and a.id_unit like '%$kd_unit%' and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status=0";
	   				}
	  			if ($report_by=="Departement")
				  	{	
				 	 $stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_newHireIB_detail c 
					 inner join db_qm.dbo.table_qm_newHireIB a on a.id_qm=c.id_qm
					 inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					 where b.region ='$select_region' and  fcr='fcr' and a.status_save='complete'
					 and (a.id_unit like '%$cc_mentari%' or a.id_unit like '%$cc_im3%' or a.id_unit like '%$cc_pp%') 
				 	 and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";
					 
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_newHireIB_detail c 
					  inner join db_qm.dbo.table_qm_newHireIB a on a.id_qm=c.id_qm 
					  inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					  where b.region ='$select_region' and  a.status_save='complete' and repeat='yes'
					  and (a.id_unit like '%$cc_mentari%' or a.id_unit like '%$cc_im3%' or a.id_unit like '%$cc_pp%')
					  and  convert(varchar,a.date_saved,112) between '$date_eva1' and'$date_eva2' and a.flag_status=0"; 
					}
			}
			else {
	  			if ($report_by=="Unit")
				  	{
				 	  $stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_newHireIB_detail c 
					  inner join db_qm.dbo.table_qm_newHireIB a on a.id_qm=c.id_qm
					  inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					  where fcr='fcr' and a.status_save='complete' and a.id_unit like '%$kd_unit%' 
				 	  and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";
					  
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_newHireIB_detail c
					   inner join db_qm.dbo.table_qm_newHireIB a on a.id_qm=c.id_qm 
					   inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					   where a.status_save='complete' and repeat='yes' 
					   and a.id_unit like '%$kd_unit%' and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status=0";
	   				}
	  			if ($report_by=="Departement")
				  	{	
				 	 $stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_newHireIB_detail c 
					 inner join db_qm.dbo.table_qm_newHireIB a on a.id_qm=c.id_qm
					 inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					 where fcr='fcr' and a.status_save='complete'
					 and (a.id_unit like '%$cc_mentari%' or a.id_unit like '%$cc_im3%' or a.id_unit like '%$cc_pp%') 
				 	 and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";
					 
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_newHireIB_detail c 
					  inner join db_qm.dbo.table_qm_newHireIB a on a.id_qm=c.id_qm 
					  inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					  where a.status_save='complete' and repeat='yes'
					  and (a.id_unit like '%$cc_mentari%' or a.id_unit like '%$cc_im3%' or a.id_unit like '%$cc_pp%')
					  and  convert(varchar,a.date_saved,112) between '$date_eva1' and'$date_eva2' and a.flag_status=0"; 
					}
			}		
	  			if ($report_by=="Observer")
				  	{
				 	 $stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_newHireIB_detail c inner join db_qm.dbo.table_qm_newHireIB a
				 	  			on a.id_qm=c.id_qm inner join hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
				 	  			where fcr='fcr' and a.status_save='complete' and  cast(id_data_pribadi as varchar)='$c_observer'
				 	  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status=0";
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_newHireIB_detail c inner join db_qm.dbo.table_qm_newHireIB a
					  			on a.id_qm=c.id_qm inner join hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  cast(id_data_pribadi as varchar) like '$c_observer'
					  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status=0";  
					}
					
	  			if ($report_by=="Agent")
				  	{	
				 	 $stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_newHireIB_detail c inner join db_qm.dbo.table_qm_newHireIB a
				 	  			on a.id_qm=c.id_qm
				 	  			where fcr='fcr' and a.status_save='complete' 
				 	  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status=0";
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_newHireIB_detail c inner join db_qm.dbo.table_qm_newHireIB a
					  			on a.id_qm=c.id_qm
					  			where a.status_save='complete' and repeat='yes' and  (a.nik like '%$nik_agent%' or a.nama like '%$nik_agent%')
					  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status=0";   
					}
					if ($report_by=="Skala")
				  	{	
				 	 $stot_fcr="select count(*) as jum_s_fcr
	from db_qm.dbo.table_qm_newHireIB a with(nolock) 
   inner join db_qm.dbo.table_qm_newHireIB_detail b with(nolock) on a.id_qm=b.id_qm
where a.status_save='complete' and b.fcr='fcr' and convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' 
and a.flag_status=0 AND
a.id_qm in(
select id_qm from (
					select a.id_qm,
					case when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 90 then 'A'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 80 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  < 90 then 'B'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 70 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  < 80 then 'C'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 60 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  < 70 then 'D'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)   < 60 then 'E' end 'Skala'
					from db_qm.dbo.table_qm_newHireIB a with(nolock) 
					inner join db_qm.dbo.table_qm_newHireIB_detail b with(nolock) on a.id_qm=b.id_qm 
					where a.status_save='complete' and b.fcr='fcr' and convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status=0
				    group by a.id_qm 
				) AA where Skala like '%$skala' )";
				 	  			
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_newHireIB a with(nolock) inner join db_qm.dbo.table_qm_newHireIB_detail b 
with(nolock) on a.id_qm=b.id_qm where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112) 
between '$tgl1' and '$tgl2' and a.flag_status=0 AND a.id_qm in( select id_qm from 
( select a.id_qm,b.repeat, 
case when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 90 then 'A' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 80 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 90 then 'B' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 70 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 80 then 'C' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 60 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 70 then 'D' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14) 
< 60 then 'E' end 'Skala' from db_qm.dbo.table_qm_newHireIB a with(nolock) 
inner join db_qm.dbo.table_qm_newHireIB_detail b with(nolock) on a.id_qm=b.id_qm
 where a.status_save='complete' and convert(varchar,a.date_saved,112) 
  between '$date_eva1' and '$date_eva2' and a.flag_status=0
   and b.repeat='yes' group by a.id_qm,b.repeat ) AA where Skala like '%$skala' )
";   
					}
				//echo $stot_fcr;
				//echo $stot_rep;
			$r_stot_rep=mssql_query($stot_rep);
		    while($d_stot_rep=mssql_fetch_array($r_stot_rep))
			{
				$rep_tot_y=$d_stot_rep["jum_s_rep"];
			} 			
				//echo"$rep_tot_y";
		?>
    <tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
	<tr>
      <td width="180">Total FCR</td>
      <td width="68">
		<? $q6_tot_y=$result["q6_yes"];
		   echo"$q6_tot_y";
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">%FCR</td>
      <td width="68">
		<?  $q6_tot_n=$result["q6_no"];
			//$prosen_q6_n =($q6_tot_n/$jum_tot)*100 ;
			//$prosen_end=100-$prosen_q6_n;
			$has=(($jum_tot-$rep_tot_y-$q6_tot_n)/$jum_tot)*100;
			printf("%1.2f ", $has);
		?>
	  </td>
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
      <td width="180">Handling Time Average</td>
      <td width="68">
		<?  
		if($c_observer==""){$obs="%%";}else{$obs=$c_observer;}
	
					$stot_hh="[sp_handling_newhire]'table_qm_newHireIB','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$obs','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','0'";
				
			$r_stot_hh=mssql_query($stot_hh);
			while($d_stot_hh=mssql_fetch_array($r_stot_hh))
			{
		     	$d_tot_hh=$d_stot_hh["jum_hh"];
		     	$d_tot_mm=$d_stot_hh["jum_mm"];
		     	$d_tot_ss=$d_stot_hh["jum_ss"];
			} 
			$hhtomm=@((($d_tot_hh*3600)+($d_tot_mm*60)+$d_tot_ss)/$jum_tot);
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
			
		?></td>
    </tr>
    <tr>
      <td width="180">Average Score</td>
      <td width="68">
		<?
		  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg+$q9_avg+$q10_avg+$q11_avg+$q12_avg;
		  //echo"$score_avg";
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
</table>
<p>
  
</p>
