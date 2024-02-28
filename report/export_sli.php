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
<table width="368%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite" >
  <thead>
<tr bgcolor="#CCCCCC">
      <th width="1%" rowspan="3" class="head0"><div align="center">No</div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Unit Kerja</div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Username</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Nama</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">TL/SPV</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Date </div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Observation Date</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Week</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Customer Name </div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Type</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Type</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Detail</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Detail by Agent</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">FCR atau Not FCR</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Repeat (Y / N)</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Date of previous call</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Previous Agent </div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Handling time (duration)</div></th>
      <th rowspan="3" class="head0">Handling Time (second) </th>
	  
      <th rowspan="3" class="head0"><div align="center">Drop Call</div></th>
	  <th colspan="6" class="head0"><div align="center">Opening</div></th>
      <th colspan="12" class="head0"><div align="center">Penyambungan</div></th>
      <th colspan="6" class="head0"><div align="center">Closing</div></th>
      <th colspan="6" class="head0"><div align="center">Teknis berbicara/ Effective Communication</div></th>
	  <th colspan="3" class="head0"><div align="center">Telephony ( Penggunaan Hold/Mute/Transfer )</div></th>
	  
      <th width="4%" rowspan="3" class="head0"><div align="center">Total Score </div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Skala</div></th>
	  
      <th width="4%" rowspan="3" class="head0">Recommendation</th>
	 <? if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){?>
      <th width="7%" rowspan="3" class="head0"><div align="center">Notes sample recording</div></th>
	  <? } ?>
      <th width="4%" rowspan="3" class="head0"><div align="center">Observer</div></th>
		<th width="4%" rowspan="3" class="head0"><div align="center">FCR Value</div></th>
		<th width="4%" rowspan="3" class="head0"><div align="center">Repeat Value</div></th> 
	  
    </tr>
	<tr bgcolor="#CCCCCC">
	  <th colspan="3" class="head0"><div align="center">Greeting with Entusiasm</div></th>
      <th colspan="3" class="head0"><div align="center">Verify (refer to verification rules)</div></th>
      <th colspan="3" class="head0"><div align="center">Probing</div></th>
      <th colspan="3" class="head0"><div align="center">Correct Solution </div></th>
      <th colspan="3" class="head0"><div align="center">Input Accuracy Data / Information </div></th>
	  <th colspan="3" class="head0"><div align="center">FCR</div></th>
	  <th colspan="3" class="head0"><div align="center">Closing Greeting</div></th>
	  <th colspan="3" class="head0"><div align="center">Reconfirm The Agreement</div></th>
	  <th colspan="3" class="head0"><div align="center">Kesopanan / Hospitality</div></th>
	  <th colspan="3" class="head0"><div align="center">Personalize Communication</div></th>
	  <th colspan="3" class="head0"><div align="center">Hold/Mute/Transfer</div></th>
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
	include "../konek_qm.php";
	
	 $itung="[sp_count3]'table_qm_sli','$date_eva1','$date_eva2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];

					$q_user="[sp_search3]'table_qm_sli','$report_by','%$kd_unit%','$date_eva1','$date_eva2','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala'";
					//echo"$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$date_saved=$d_user["data_saved"];
						$spv_name=$d_user["spv_name"];
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
						$notes13=$d_user["notes13"];
						$notes14=$d_user["notes14"];
						$notes15=$d_user["notes15"];
						$notes16=$d_user["notes16"];
						$notes17=$d_user["notes17"];
						$notes18=$d_user["notes18"];
						$notes19=$d_user["notes19"];
						$notes20=$d_user["notes20"];
						
/*if ($q1 !="")
		{
		$save_q1=$q1;
		}
		else
		{
		$save_q1="0";
		}
		
	if ($q2 !="")
		{
		$save_q2=$q2;
		}
		else
		{
		$save_q2="0";
		}
		
	if ($q4 !="" )
		{
		$save_q4=$q4;
		}else{
		$save_q4="0";
		}
	if ($q5 !="" )
		{
		$save_q5=$q5;
		}else{
		$save_q5="0";
		}
	
	if ($q6 !="" )
		{
		$save_q6=$q6;
		}else{
		$save_q6="0";
		}		

	if ($q7 !="")
		{
		$save_q7=$q7;
		}
		else
		{
		$save_q7="0";
		}

	if ($q8 !="")
		{
		$save_q8=$q8;
		}
		else
		{
		$save_q8="0";
		}

	if ($q9 !="")
		{
		$save_q9=$q9;
		}
		else
		{
		$save_q9="0";
		}

	if ($q10 !="")
		{
		$save_q10=$q10;
		}
		else
		{
		$save_q10="0";
		}

	if ($q11 !="")
		{
		$save_q11=$q11;
		}
		else
		{
		$save_q11="0";
		}
	if ($q20 !="")
		{
		$save_q20=$q20;
		}
		else
		{
		$save_q20="0";
		}

$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q7+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12+$sc_q13+$sc_q14+$sc_q15+$sc_q16+$sc_q17+$sc_q18+$sc_q19;*/
 					 	$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13+$save_q14+$save_q15+$save_q16+$save_q17+$save_q18+$save_q19+$save_q20;
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
						 
						 $q ="select nama as observer_name from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer' ";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];


/*if ($q1 !="")
		{
		$save_q1=$q1;
		}
		else
		{
		$save_q1="0";
		}
		
	if ($q2 !="")
		{
		$save_q2=$q2;
		}
		else
		{
		$save_q2="0";
		}
		
	if ($q4 !="" )
		{
		$save_q4=$q4;
		}else{
		$save_q4="0";
		}
	if ($q5 !="" )
		{
		$save_q5=$q5;
		}else{
		$save_q5="0";
		}
	
	if ($q6 !="" )
		{
		$save_q6=$q6;
		}else{
		$save_q6="0";
		}		

	if ($q7 !="")
		{
		$save_q7=$q7;
		}
		else
		{
		$save_q7="0";
		}

	if ($q8 !="")
		{
		$save_q8=$q8;
		}
		else
		{
		$save_q8="0";
		}

	if ($q9 !="")
		{
		$save_q9=$q9;
		}
		else
		{
		$save_q9="0";
		}

	if ($q10 !="")
		{
		$save_q10=$q10;
		}
		else
		{
		$save_q10="0";
		}

	if ($q11 !="")
		{
		$save_q11=$q11;
		}
		else
		{
		$save_q11="0";
		}
	if ($q20 !="")
		{
		$save_q20=$q20;
		}
		else
		{
		$save_q20="0";
		}
		
$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q7+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12+$sc_q13+$sc_q14+$sc_q15+$sc_q16+$sc_q17+$sc_q18+$sc_q19;*/
 					 	$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13+$save_q14+$save_q15+$save_q16+$save_q17+$save_q18+$save_q19+$save_q20;
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
					$q_user1="select nama as observer_name from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$observer' ";
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
					  <td>$total_score</td>
                      <td>$skala</td>
					  <td>$recommendation</td>";
                      if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){
					  echo"<td>$notes_recording</td>";
					  }
					  echo"<td>$observer_name</td>";
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
<table width="568" border="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th rowspan="2" width="17" class="head0"><div align="center">No</div></th>
      <th rowspan="2" width="36" class="head0"><div align="center">Category</div></th>
      <th rowspan="2" width="205" class="head0"><div align="center">Attributes</div></th>
	  <th rowspan="2" width="17" class="head0"><div align="center">Bobot</div></th>
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
      <th width="30" class="head0"><div align="center">%</div></th>--->
    </tr>
	</thead>
  <tr>
      <td>1</td>
      <td rowspan="2">Opening</td>
      <td>Gretting With Enthusiasm</td>
	  <td>5</td>
      <td><?  
	 //edit hendi
     $queryhendi="[sp_reportqm3]'table_qm_sli','$date_eva1','$date_eva2','$report_by','$c_observer','%$nik_agent%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala'";
	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
      //end edit
	  //echo"$queryhendi";
			$q1_tot_y=$result["q1_yes"];
			echo"$q1_tot_y"; 
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
	$prosen_q1_y =($q1_tot_n/$jum_tot)*100 ;
	printf("%1.2f ", $prosen_q1_y);	 
	?>
	</td>
		
	<!-- <td>< php  
	$q1_tot_na=$result["q1_na"];
	echo"$q1_tot_na";

	?></td>

	<td>< php
	$prosen_q1_na =($q1_tot_na/$jum_tot)*100 ;
	printf("%1.2f ", $prosen_q1_na);
	?></td>
	<td>< php
	$q1_avg=$result["avg1"];
	printf("%1.2f ", $q1_avg);

	?></td>-->
	<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>2</td>
      <td>Verify or Confirmation</td>
	  <td>5</td>
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
     <td>
	  <?php
$prosen_q2_y =($q2_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_y);
			?></td>
     <!--  <td>< php
	  			$q2_tot_na=$result["q2_na"];
	   			echo"$q2_tot_na";
			
		?></td>
      <td>< php
$prosen_q2_na =($q2_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_na);
			?></td>
      <td>< php
	  			$q2_avg=$result["avg2"];	
			printf("%1.2f ", $q2_avg);
		?></td> -->
		<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>3</td>
      <td rowspan="4">Penyambungan</td>
      <td>Probing</td>
	  <td>5</td>
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
      <!--<td>< php  
	  			$q4_tot_na=$result["q4_na"];
			echo"$q4_tot_na";
			
		?></td>
      <td>< php
$prosen_q4_na =($q4_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_na);
			?></td>
      <td>< php
	  			$q4_avg=$result["avg4"];
		printf("%1.2f ", $q4_avg);
		?></td>-->
	<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td>4</td>
      <td>Correct Solution</td>
	  <td>40</td>
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
      <!--<td>< php  
	  			$q5_tot_na=$result["q5_na"];
			echo"$q5_tot_na";
			
		?></td>
      <td>< php
$prosen_q5_na =($q5_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_na);
			?></td>
      <td>< php
	  			$q5_avg=$result["avg5"];
		printf("%1.2f ", $q5_avg);
			
		?></td> -->
	<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td></td>
      <td>Input Accuracy Data/Information</td>
	  <td>5</td>
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
      <!--<td><?  
	  			$q6_tot_na=$result["q6_na"];
			echo"$q6_tot_na";
			
		?></td>
      <td>< php
$prosen_q6_na =($q6_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q6_na);
			?></td>
      <td>< php
	  			$q6_avg=$result["avg6"];
		printf("%1.2f ", $q6_avg);
			
		?></td>-->
	<!--<td colspan="6"></td>-->
    </tr>
    <tr>
      <td></td>
      <td>FCR</td>
	  <td>10</td>
      <td><?  
	  			 $q20_tot_y=$result["q20_yes"];
			echo"$q20_tot_y";
			
		?></td>
      <td><?
$prosen_q20_y =($q20_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q20_y);
			?></td>
      <td><?  
	  				$q20_tot_n=$result["q20_no"];
			echo"$q20_tot_n";
			
		?></td>
      <td><?
$prosen_q20_y =($q20_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q20_y);
			?></td>
      <!-- <td>< php  
	  			$q20_tot_na=$result["q20_na"];
			echo"$q20_tot_na";
			
		?></td>
      <td>< php
$prosen_q20_na =($q20_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q20_na);
			?></td>
      <td>< php
	  			$q20_avg=$result["avg20"];
		printf("%1.2f ", $q20_avg);
			
		?></td>-->
			<!--<td colspan="6"></td>-->

    </tr>
    <tr>
      <td>5</td>
      <td rowspan="2">Closing</td>
      <td> Closing Greeting</td>
	  <td>5</td>
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
      <!-- <td>< php 
	  			$q7_tot_na=$result["q7_na"];
			echo"$q7_tot_na";
			
		?></td>
      <td>< php
$prosen_q7_na =($q7_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_na);
			?></td>
      <td>< php
	  			$q7_avg=$result["avg7"];
		printf("%1.2f ", $q7_avg);
			
		?></td>-->
			<!--<td colspan="6"></td>-->

    </tr>
    <tr>
      <td></td>
      <td>Reconfirm The Agreement</td>
	  <td>5</td>
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
     <!--  <td>< php 
	  			$q8_tot_na=$result["q8_na"];
			echo"$q8_tot_na";
			
		?></td>
      <td>< php
$prosen_q8_na =($q8_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_na);
			?></td>
      <td>< php
	  			
				$q8_avg=$result["avg8"];
		printf("%1.2f ", $q8_avg);
			
		?></td> -->
			<!--<td colspan="6"></td>-->

    </tr>
    <tr>
      <td>6</td>
      <td rowspan="2">Teknis Berbicara / Effective Communication</td>
      <td>Kesopanan / Hospitality</td>
	  <td>10</td>
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
      <!--<td>< php
	  			$q9_tot_na=$result["q9_na"];
			echo"$q9_tot_na";
			
		?></td>
      <td>< php
$prosen_q9_na =($q9_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_na);
			?></td>
      <td>< php
	  			$q9_avg=$result["avg9"];
		printf("%1.2f ", $q9_avg);
			
		?></td> -->
			<!--<td colspan="6"></td>-->

    </tr>
    <tr>
      <td>7</td>
	  
      <td>Personalize Communication</td>
	  <td>5</td>
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
      <!-- <td>< php
	  			$q10_tot_na=$result["q10_na"];
			echo"$q10_tot_na";
			
		?></td>
      <td>< php
$prosen_q10_na =($q10_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_na);
			?></td>
      <td>< php
	  			$q10_avg=$result["avg10"];
		printf("%1.2f ", $q10_avg);
			
		?></td>-->
			<!--<td colspan="6"></td>-->

    </tr>
    <tr>
      <td></td>
      <td>Telephony</td>
      <td>Hold/Mute/Transfer</td>
	  <td>5</td>
      <td><?  
	  			$q11_tot_y=$result["q11_yes"];	
			echo"$q11_tot_y";
			
		?></td>
      <td><?
$prosen_q11_y =($q11_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_y);
			?></td>
      <td><?  
	  			$q11_tot_n=$result["q11_no"];
			echo"$q11_tot_n";
			
		?></td>
      <td><?
$prosen_q11_y =($q11_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_y);
			?></td>
      <!-- <td>< php
	  			$q11_tot_na=$result["q11_na"];
			echo"$q11_tot_na";
			
		?></td>
      <td>< php
$prosen_q11_na =($q11_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_na);
			?></td>
      <td>< php
	  			$q11_avg=$result["avg11"];
		printf("%1.2f ", $q11_avg);
			
		?></td> -->
			<!--<td colspan="6"></td>-->

    </tr>
   <!--<tr>
      <td>12</td>
      <td>NFE</td>
      <td>Controlling After Connection</td>
      <td><  
	  			$q12_tot_y=$result["q12_yes"];
			echo"$q12_tot_y";
			
		?></td>
      <td><
$prosen_q12_y =($q12_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_y);
			?></td>
      <td><  
	  			$q12_tot_n=$result["q12_no"];
			echo"$q12_tot_n";
			
		?></td>
      <td><
$prosen_q12_y =($q12_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_y);
			?></td>
      <td>< 
	  			$q12_tot_na=$result["q12_na"];
			echo"$q12_tot_na";
			
		?></td>
      <td><
$prosen_q12_na =($q12_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_na);
			?></td>
      <td><  
	  			$q12_avg=$result["avg12"];
		printf("%1.2f ", $q12_avg);
			
		?></td>
    </tr> -->
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1" class="table table-bordered table-infinite">
    <!-- <tr>
      <td width="180">NFE Total </td>
      <td width="68">< $nfe_total=$q1_tot_y+$q2_tot_y+$q3_tot_y+$q7_tot_y+$q8_tot_y+$q9_tot_y+$q10_tot_y+$q11_tot_y+$q12_tot_y+$q13_tot_y+$q14_tot_y+$q15_tot_y+$q16_tot_y+$q17_tot_y+$q18_tot_y+$q19_tot_y+$q1_tot_na+$q2_tot_na+$q3_tot_na+$q7_tot_na+$q8_tot_na+$q9_tot_na+$q10_tot_na+$q11_tot_na+$q12_tot_na+$q13_tot_na+$q14_tot_na+$q15_tot_na+$q16_tot_na+$q17_tot_na+$q18_tot_na+$q19_tot_na; echo"$nfe_total";?></td>
    </tr>
    <tr>
      <td>NFE Accuracy</td>
      <td><
	  $nfe_acc=($nfe_total/(8*$jum_tot)*100);
		printf("%1.2f ", $nfe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>FE Total </td>
      <td><
		$stot_fe="[sp_fetotal3]'table_qm_sli','$report_by','$tgl1','$tgl2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala_cmb','$departemen_skala','$unit_skala'";
					
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
			$fe_total=$fe_tot*4;
			echo"$fe_total";
			
		?></td>
    </tr>
    <tr>
      <td>FE Accuracy </td>
      <td>
	  <?
	  /*$fe_acc=($fe_tot/$jum_tot)*100;
		printf("%1.2f ", $fe_acc);*/
		
	  ?>%
	  <? 
	  			if ($report_by=="Unit")
				  	{
				 	  /*$stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_qm_sli a
				 	  			on a.id_qm=c.id_qm where fcr='fcr' and a.status_save='complete' and a.id_unit like '%$kd_unit%' 
				 	  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'";*/
					  $stot_fcr="[sp_fcr_tot]'table_qm_sli','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%'";

					 /* $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_qm_sli a
					  			on a.id_qm=c.id_qm where a.status_save='complete' and repeat='yes' and a.id_unit like '%$kd_unit%'
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'";*/
						$stot_rep="[sp_repeat_tot]'table_qm_sli','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%'";
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				 	
				 	  /*$stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_qm_sli a
				 	  			on a.id_qm=c.id_qm where fcr='fcr' and a.status_save='complete' and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%') 
				 	  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'";*/
					  $stot_fcr="[sp_fcr_tot]'table_qm_sli','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%'";
					  
					  /*$stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_qm_sli a
					  			on a.id_qm=c.id_qm where a.status_save='complete' and repeat='yes'  and (a.id_unit like '%$cc_mentari%' or a.id_unit like '%$cc_im3%' or a.id_unit like '%$cc_pp%')
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'"; */
						$stot_rep="[sp_repeat_tot]'table_qm_sli','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%'";
					}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 
					  /*$stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_qm_sli a
				 	  			on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
				 	  			where fcr='fcr' and a.status_save='complete' and  cast(id_data_pribadi as varchar)='$c_observer'
				 	  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'";*/
					  $stot_fcr="[sp_fcr_tot]'table_qm_sli','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%'";		
					
					  /*$stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_qm_sli a
					  			on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  cast(id_data_pribadi as varchar)='$c_observer'
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'";  */
						$stot_rep="[sp_repeat_tot]'table_qm_sli','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%'";
					}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	
					  /*$stot_fcr="select count(*) as jum_s_fcr from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_qm_sli a
				 	  			on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_user=cast(id_data_pribadi as varchar)
				 	  			where fcr='fcr' and a.status_save='complete' and  cast(id_data_pribadi as varchar)='$c_observer'
				 	  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'";*/
					  $stot_fcr="[sp_fcr_tot]'table_qm_sli','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%'";
					  
					  /*$stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_sli_detail c inner join db_qm.dbo.table_qm_sli a
					  			on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_user=cast(id_data_pribadi as varchar)
					  			where a.status_save='complete' and repeat='yes' and  (z.nik_karyawan like '%$nik_agent%' or z.nama like '%$nik_agent%')
					  			and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'";   */
						$stot_rep="[sp_repeat_tot]'table_qm_sli','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%'";
					}
					
						if ($report_by=="Skala")
				  	{	
				 	 /*$stot_fcr="select count(*) as jum_s_fcr
	from db_qm.dbo.table_qm_sli a with(nolock) 
   inner join db_qm.dbo.table_qm_sli_detail b with(nolock) on a.id_qm=b.id_qm
where a.status_save='complete' and b.fcr='fcr' and convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'
and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%'  AND
a.id_qm in(
select id_qm from (
					select a.id_qm,
					case when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 90 then 'A'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 80 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  < 90 then 'B'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 70 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  < 80 then 'C'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  >= 60 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)  < 70 then 'D'
					when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)   < 60 then 'E' end 'Skala'
					from db_qm.dbo.table_qm_sli a with(nolock) 
					inner join db_qm.dbo.table_qm_sli_detail b with(nolock) on a.id_qm=b.id_qm 
					where a.status_save='complete' and b.fcr='fcr' and convert(varchar,a.date_saved,112)
					 between '$tgl1' and '$tgl2' and a.id_unit like '%$departemen_skala%' 
					 and a.id_unit like '%$unit_skala%' 
				    group by a.id_qm 
				) AA
			 where Skala like '%$skala_cmb' )";*/
			 
			 $stot_fcr="[sp_fcr_tot]'table_qm_sli','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%'";
				 	  			
					  /*$stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_sli a with(nolock) inner join db_qm.dbo.table_qm_sli_detail b 
with(nolock) on a.id_qm=b.id_qm where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112) 
between '$tgl1' and '$tgl2' and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%' AND a.id_qm in( select id_qm from 
( select a.id_qm,b.repeat, 
case when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 90 then 'A' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 80 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 90 then 'B' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 70 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 80 then 'C' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 60 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 70 then 'D' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14) 
< 60 then 'E' end 'Skala' from db_qm.dbo.table_qm_sli a with(nolock) 
inner join db_qm.dbo.table_qm_sli_detail b with(nolock) on a.id_qm=b.id_qm
 where a.status_save='complete' and convert(varchar,a.date_saved,112) 
  between '$tgl1' and '$tgl2' and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%'
   and b.repeat='yes' group by a.id_qm,b.repeat ) AA where Skala like '%$skala_cmb' )
";   */
			$stot_rep="[sp_repeat_tot]'table_qm_sli','$report_by','$date_eva1','$date_eva2','%$kd_unit%','$select_region','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','%$skala%','%$departemen_skala%','%$unit_skala%'";
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
    </tr>-->
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
		<?  
			$q6_tot_n=$result["q6_no"];
			//$prosen_q6_n =($q6_tot_n/$jum_tot)*100 ;
			//$prosen_end=100-$prosen_q6_n;
			$has=(($jum_tot-$rep_tot_y-$q6_tot_n)/$jum_tot)*100;
			//echo "rep : $rep_tot_y";
			printf("%1.2f ", $has);
		?>
	  </td>
    </tr>
    <tr>
      <td>Repeat (Y) </td>
      <td><? echo"$rep_tot_y"; ?></td>
    </tr>
    <tr>
      <td>Handling Time  Average</td>
      <td><?  
			$stot_hh="[sp_handling3]'table_qm_sli','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala'";
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
		$stot_d="[sp_dropcall3]'table_qm_sli','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala'";
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
		$q1_avg=$result["avg1"];
		$q2_avg=$result["avg2"];
		$q4_avg=$result["avg4"];
		$q5_avg=$result["avg5"];
		$q6_avg=$result["avg6"];
		$q20_avg=$result["avg20"];
		$q7_avg=$result["avg7"];
		$q8_avg=$result["avg8"];
		$q9_avg=$result["avg9"];
		$q10_avg=$result["avg10"];
		$q11_avg=$result["avg11"];
	  
	  
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
