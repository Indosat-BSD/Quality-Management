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
<table width="368%" border="1" align="center" cellspacing="1">
  <tr bgcolor="#CCCCCC">
    <td width="1%" rowspan="3" class="header"><div align="center">No</div></td>
      <td width="4%" rowspan="3" class="header"><div align="center">Unit Kerja</div></td>
      <td width="4%" rowspan="3" class="header"><div align="center">Username</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Nama</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">TL/SPV</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Interaction Date </div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Observation Date</div></td>
	<td width="2%" rowspan="3" class="head0"><div align="center">Validation Date</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Week</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Customer Name </div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Interaction Type</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Product Type</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Product Detail</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Product Detail by Agent</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">FCR atau Not FCR</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Repeat (Y / N)</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Date of previous call</div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Previous Agent </div></td>
      <td width="2%" rowspan="3" class="header"><div align="center">Handling time (duration)</div></td>
      <td rowspan="3" class="header">Handling Time (second) </td>
      <td rowspan="3" class="header"><div align="center">Drop Call</div></td>
      <th colspan="6" class="head0"><div align="center">Opening</div></th>
      <th colspan="12" class="head0"><div align="center">Penyambungan</div></th>
      <th colspan="6" class="head0"><div align="center">Closing</div></th>
      <th colspan="6" class="head0"><div align="center">Teknis berbicara / Effective Communication</div></th>
      <th colspan="3" class="head0"><div align="center">Telephony (Penggunaan Hold/Mute/Transfer)</div></th>

      <td width="4%" rowspan="3" class="header"><div align="center">Total Score </div></td>
      <td width="4%" rowspan="3" class="header"><div align="center">Skala</div></td>
      <td width="4%" rowspan="3" class="header">Recommendation</td>
      <td width="4%" rowspan="3" class="header"><div align="center">Observer</div></td>
      <th width="4%" rowspan="3" class="header"><div align="center">Validation</div></th>
      <td width="4%" rowspan="3"  class="header"><div align="center">Validator</div></td>

		<th width="4%" rowspan="3" class="head0"><div align="center">FCR Value</div></th>
		<th width="4%" rowspan="3" class="head0"><div align="center">Repeat Value</div></th> 	  
    </tr>
	<tr bgcolor="#CCCCCC">
	<th width="4%" colspan="3" class="head0"><div align="center">Greeting with enthusiasm</div></th>
	<th width="4%" colspan="3" class="head0"><div align="center">Verify (refer to verification rules)<div></th>
	<th width="4%" colspan="3" class="head0"><div align="center">Probing</div></th>
	<th width="4%" colspan="3" class="head0"><div align="center">Correct Solution</div></th>
	<th width="4%" colspan="3" class="head0"><div align="center">Input Accuracy Data / Information</div></th>
	<th width="4%" colspan="3" class="head0"><div align="center">FCR</div></th>
	<th width="4%" colspan="3" class="head0"><div align="center">Reconfirm the Agreement</div></th>
	<th width="4%" colspan="3" class="head0"><div align="center">Closing Greeting</div></th>
	<th width="4%" colspan="3" class="head0"><div align="center">Kesopanan / Hospitality</div></th>
	<th width="4%" colspan="3" class="head0"><div align="center">Personalize Communication</div></th>
	<th width="4%" colspan="3" class="head0"><div align="center">Hold/Mute/Transfer</div></th>
	</tr>	
    <tr bgcolor="#CCCCCC">
      <th width="1%" class="head0"><div align="center">Scale</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="1%" class="head0"><div align="center">Scale</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="2%" class="head0"><div align="center">Scale</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Scale</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="5%" class="head0"><div align="center">Scale</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Scale</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Scale</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Scale</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Scale</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Scale</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Scale</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>	  

  </tr>
  <?
	include "../konek_qm.php";
	
	 $itung="[sp_count_kalibrasi]'table_kalibrasi_sli','table_qm_sli','$date_eva1','$date_eva2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];

					$q_user="[sp_search_kalibrasi]'table_kalibrasi_sli','table_qm_sli','$report_by','%$kd_unit%','$date_eva1','$date_eva2','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					//echo"$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
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
						$recommendation=$d_user["recommendation"];
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
						$notes_score=$d_user["notes_score"];
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
						
						if ($score_tot >= 90)
						{
						$skala="A";
						}
						if ($score_tot >= 80 and $score_tot < 90)
						{
						$skala="B";
						}
						if ($score_tot >= 70 and $score_tot < 80)
						{
						$skala="C";
						}
						if ($score_tot >= 60 and $score_tot < 70)
						{
						$skala="D";
						}
						if ($score_tot < 60)
						{
						$skala="E";
						}						
						echo "<tr class='content'>
                      <td>$no</td>";
						 
						 $q ="select nama as observer_name from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer' ";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];

//
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
						
//if ($repeat=="yes")
			{
			$s_date_prev_call="$date_prev_call"; 
			$s_prev_agent="$prev_agent";
			$repeat_val="1";
			}
			if ($repeat=="no")
			{
			$s_date_prev_call="-"; 
			$s_prev_agent="-";
			$repeat_val="0";
			}
			
						$hhtomm1=($hh_handling_time*3600)+($mm_handling_time*60)+($ss_handling_time);
			


    echo"
                      <td>$nama_unit</td>
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
						<td>$fcr</td>
						<td>$repeat</td>
						<td>$s_date_prev_call</td>
						<td>$s_prev_agent</td>
						<td>$hh_handling_time:$mm_handling_time:$ss_handling_time</td>
						<td>$hhtomm1</td>
						<td>$drop_call</td>
                      <td>$q1</td>
					  <td>$save_q1</td>
					  <td>$notes1</td>
                      <td>$q2</td>
					  <td>$save_q2</td>
					  <td>$notes2</td>
                      <td>$q4</td>
					  <td>$save_q4</td>
					  <td>$notes4</td>
                      <td>$q5</td>
					  <td>$save_q5</td>
					  <td>$notes5</td>
                      <td>$q6</td>
					  <td>$save_q6</td>
					  <td>$notes6</td>
                      <td>$q20</td>
					  <td>$save_q20</td>
					  <td>$notes20</td>
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
                      <td>$skala</td>
					  <td>$recommendation</td>
					  <td>$observer_name</td>
					  <td>$kalibrasi</td>
					   <td>$kalibrasi_name</td>";
					if($save_q20=="10")
					{
						$fcr=0;
					}
					else
					{
						$fcr=1;
					}
					echo "<td>$fcr</td>
						  <td>$repeat_val</td>	
                      </tr>";
					  $no++;
					  
						}
						
					

			
					?>
  </a>
</table>
<p>Total data : <? echo"$jum_tot"; ?></p>
<table width="568" border="1">
    <tr bgcolor="#CCCCCC">
      <th rowspan="2"width="17" class="head0"><div align="center">No</div></th>
      <th rowspan="2"width="36" class="head0"><div align="center">Category</div></th>
      <th rowspan="2"width="205" class="head0"><div align="center">Attributes</div></th>
      <th rowspan="2"width="17" class="head0"><div align="center">Bobot</div></th>
      <th colspan="4" class="head0"><div align="center">Absolute Score</div></th>
	  <!--<th colspan="6" class="head0"><div align="center">Scale</div></th>-->
	  </tr>
	  <tr bgcolor="#CCCCCC">
      <th width="25" class="head0"><div align="center">Y</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
      <th width="25" class="head0"><div align="center">N</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
	  <!--<th width="25" class="head0"><div align="center">1</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
      <th width="25" class="head0"><div align="center">2</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
	  <th width="25" class="head0"><div align="center">3</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>-->
    </tr>
  <tr>
      <td>1</td>
      <td rowspan="2">Opening</td>
      <td>Greeting with enthusiasm</td>
	  <td>5</td>
      <td><?  
				 			  //edit hendi
      $queryhendi="[sp_reportqm_kalibrasi]'table_kalibrasi_sli','table_qm_sli','$date_eva1','$date_eva2','$report_by','$c_observer','%$nik_agent%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','%$kd_unit%','%%','$select_region'";
	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
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
			<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>2</td>
      <td>Verify (refer to verification rules)</td>
      <td>5</td>
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
			<!--<td colspan="6"></td>-->

    </tr>
    <tr>
      <td>3</td>
      <td rowspan="4">Penyambungan</td>
      <td>Porbing</td>
	  <td>5</td>
      <td><?  
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
			<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>4</td>
      <td>Correct Solution</td>
      <td>40</td>
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
			<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>5</td>
      <td>Input Accuracy Data / Information</td>
      <td>5</td>
      <td><?  
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
			<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>6</td>
      <td>FCR</td>
      <td>10</td>
      <td><?  
			$q20_tot_y=$result["q20_yes"];
			echo"$q20_tot_y";
			
			$q20_avg=$result["avg20"];
			
		?>
	  </td>
	  <td>
		<?
			$prosen_q20_y =($q20_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q20_y);
		?>
	  </td>
	  <td>
		<?  
		  	$q20_tot_n=$result["q20_no"];
			echo"$q20_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_q20_n =($q20_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q20_n);
		?>
	  </td>
			<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>7</td>
      <td rowspan="2">Closing</td>
      <td>Closing Greeting</td>
	  <td>5</td>
      <td><?  
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
			<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>8</td>
      <td>Reconfirm the Agreement</td>
      <td>5</td>
      <td><?  
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
			<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>9</td>
      <td rowspan="2">Teknis berbicara / Effective Communication</td>
      <td>Kesopanan / Hospitality</td>
	  <td>10</td>
      <td><?  
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
			<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>10</td>
      <td>Personalize Communication</td>
      <td>5</td>
      <td><?  
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
			<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>11</td>
      <td>Telephony (Penggunaan Hold/Mute/Transfer)</td>
      <td>Hold/Mute/Transfer</td>
	  <td>5</td>
      <td><?  
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
			<!--<td colspan="6"></td>-->
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1">
    <tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
    <tr>
      <td>Total FCR</td>
      <td>
	  <? $q20_tot_y=$result["q20_yes"];
		   echo"$q20_tot_y";
		?></td>
    </tr>
    <tr>
      <td>%FCR</td>
      <td>
		<?  $q20_tot_n=$result["q20_no"];
			$prosen_q20_n =($q20_tot_n/$jum_tot)*100 ;
			$prosen_end=100-$prosen_q20_n;
			printf("%1.2f ", $prosen_end);
		?>
		</td>	
    <!--<tr>
      <td>FE Accuracy </td>
      <td>
	  ?
	  $fe_acc=($fe_tot/$jum_tot)*100;
		printf("%1.2f ", $fe_acc);
		
	  ?>%-->
	  <?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 
				 	  $stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_kalibrasi_sli a
				 	  			on a.id_qm=c.id_qm where fcr='fcr' and a.status_save='complete' and a.id_unit like '%$kd_unit%' 
				 	  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_qm_sli a
					  			on a.id_qm=c.id_qm where a.status_save='complete' and repeat='yes' and a.id_unit like '%$kd_unit%'
					  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				 	
				 	  $stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_kalibrasi_sli a
				 	  			on a.id_qm=c.id_qm where fcr='fcr' and a.status_save='complete' and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%') 
				 	  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_kalibrasi_sli a
					  			on a.id_qm=c.id_qm where a.status_save='complete' and repeat='yes'  and (a.id_unit like '%$cc_mentari%' or a.id_unit like '%$cc_im3%' or a.id_unit like '%$cc_pp%')
					  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'"; 
					}
					
	  			if ($report_by=="Validator")
				  	{				  
				 	
					  $stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_kalibrasi_sli a
				 	  			on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
				 	  			where fcr='fcr' and a.status_save='complete' and  cast(id_data_pribadi as varchar)='$c_observer'
				 	  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_kalibrasi_sli a
					  			on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  cast(id_data_pribadi as varchar)='$c_observer'
					  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";  
					}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	
					  $stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_kalibrasi_sli a
				 	  			on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_user=cast(id_data_pribadi as varchar)
				 	  			where fcr='fcr' and a.status_save='complete' and  cast(id_data_pribadi as varchar)='$c_observer'
				 	  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_kalibrasi_sli a
					  			on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_user=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  (z.nik_karyawan like '%$nik_agent%' or z.nama like '%$nik_agent%')
					  			and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";   
					}
					
	   $r_stot_fcr=mssql_query($stot_fcr);
	   while($d_stot_fcr=mssql_fetch_array($r_stot_fcr))
			{
		     	$fcr_tot_y=$d_stot_fcr["jum_s_fcr"];
			} 
	   $r_stot_rep=mssql_query($stot_rep);
	   while($d_stot_rep=mssql_fetch_array($r_stot_rep))
			{
		     	$rep_tot_y=$d_stot_rep["jum_s_rep"];
			} 			
					
			//echo"$fcr_tot_y";

		?></td>
    </tr>
    <tr>
      <td>Repeat (Y) </td>
      <td><? echo"$rep_tot_y"; ?></td>
    </tr>
    <tr>
      <td>Handling Time  Average</td>
      <td><?  
			$stot_hh="[sp_handling_kalibrasi]'table_kalibrasi_sli','table_qm_sli','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
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
      <td>Drop Call (Y) </td>
      <td><?  
		$stot_d="[sp_dropcall_kalibrasi]'table_kalibrasi_sli','table_qm_sli','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	   $r_stot_d=mssql_query($stot_d);
	   while($d_stot_d=mssql_fetch_array($r_stot_d))
			{
		     	$d_tot_y=$d_stot_d["jum_s_d"];
			} 		
			echo"$d_tot_y";
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
<p>
  
</p>
