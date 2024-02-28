<?php
/////////////////////////////////export to excel ///////////////////////////////////////////
// Here we tell the browser that this is an excel file.
// header("Content-type: application/octet-stream"); 
// header("Content-Disposition: attachment; filename=report.xls"); 
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
 <table width="368%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
  <thead>
    
<tr bgcolor="#CCCCCC">
      <th width="1%" rowspan="3" class="head0 nosort"><div align="center">No</div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Unit Kerja</div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Username</div></th>
	  <th width="4%" rowspan="3" class="head0"><div align="center">Region</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Nama</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">TL/SPV</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Date </div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Observation Date</div></th>
	  <th width="2%" rowspan="3" class="head0"><div align="center">Validation Date</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Week</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Customer Name </div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Type</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Type</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Detail</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Product Detail by Agent</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Call Activity </div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Handling time (duration)</div></th>
      <th rowspan="3" class="head0">Handling Time (second) </th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Call Status </div></th>	  
	  <th colspan="6" class="head0"><div align="center">Opening</div></th>
      <th colspan="3" class="head0"><div align="center">Solution</div></th>
      <th colspan="3" class="head0"><div align="center">Accuracy Data</div></th>
      <th colspan="3" class="head0"><div align="center">Closing Agreement</div></th>
	  <th colspan="6" class="head0"><div align="center">Effective Communication</div></th>
	  <th colspan="3" class="head0"><div align="center">Telephony Manner</div></th>
	  <th rowspan="3" class="head0"><div align="center">Total Score</div></th>
	  <th rowspan="3" class="head0"><div align="center">Skala</div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Observer</div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Validation</div></th>
      <th width="4%"  rowspan="3" class="head0"><div align="center">Validator</div></th>
    </tr>
    
	<tr bgcolor="#CCCCCC">
      <th colspan="3" class="head0"><div align="center">Greeting with enthusiasm</div></th>
      <th colspan="3" class="head0"><div align="center">Purpose to call & Confirmation</div></th>
      <th colspan="3" class="head0"><div align="center">Correct Solution & Information</div></th>
      <th colspan="3" class="head0"><div align="center">Input Accuracy Data</div></th>
	  <th colspan="3" class="head0"><div align="center">Reconfirm the Agreement & Closing Greeting</div></th>	  
	  <th colspan="3" class="head0"><div align="center">Hospitality (relate to Manner)</div></th>
	  <th colspan="3" class="head0"><div align="center">Personalize Communication</div></th>
	  <th colspan="3" class="head0"><div align="center">Hold/Transfer/Routing/Callback Technique</div></th>
    </tr>
	  
	  <!-- edit hendi -->
	  
      
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
    </tr>
	</thead>
    <?
	include "../konek_qm.php";
	
	$itung="[sp_count_kalibrasi_cole]'table_kalibrasi_collection','table_qm_collection','$tgl1','$tgl2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','$select_region','$st_rep'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	//echo $itung;
	//end edit
//echo "$q1_yes_jum";
	  	

	
					include "../konek_qm.php";
					
					$q_user="[sp_search_kalibrasi_cole]'table_kalibrasi_collection','table_qm_collection','$report_by','%$kd_unit%','$tgl1','$tgl2','%$cc_mentari%','%$cc_im3%','$c_observer','%$nik_agent%','$select_region','$st_rep'";
					//echo $q_user;
					//echo "456456";
					
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
						$call_activity=$d_user["call_activity"];
						$hh_handling_time=$d_user["hh_handling_time"];
						$mm_handling_time=$d_user["mm_handling_time"];
						$ss_handling_time=$d_user["ss_handling_time"];
						$hh_2=$d_user["hh_handling_time"];
						$mm_2=$d_user["mm_handling_time"];
						$ss_2=$d_user["ss_handling_time"];
						$call_status=$d_user["call_status"];
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
						
		/*if ($q1=="yes" or $q1=="na" )
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
		
	
		if (($q3=="yes" or $q3=="na") and ($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na"))
		{
		$sc_fe="4";
		}
		if ($q4=="no" or $q5=="no" or $q6=="no" or $q20=="no")
		{
		$sc_fe="0";
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

		if ($q11=="yes" or $q11=="na")
		{
		$sc_q11="1";
		}
		else
		{
		$sc_q11="0";
		}

		if ($q12=="yes" or $q12=="na")
		{
		$sc_q12="1";
		}
		else
		{
		$sc_q12="0";
		}

		if ($q13=="yes" or $q13=="na")
		{
		$sc_q13="1";
		}
		else
		{
		$sc_q13="0";
		}

		if ($q14=="yes" or $q14=="na")
		{
		$sc_q14="1";
		}
		else
		{
		$sc_q14="0";
		}

		if ($q15=="yes" or $q15=="na")
		{
		$sc_q15="1";
		}
		else
		{
		$sc_q15="0";
		}

		if ($q16=="yes" or $q16=="na")
		{
		$sc_q16="1";
		}
		else
		{
		$sc_q16="0";
		}
		
		if ($q17=="yes" or $q17=="na")
		{
		$sc_q17="1";
		}
		else
		{
		$sc_q17="0";
		}

		
		

		
$sc_nfe=$sc_q1+$sc_q2+$sc_q7+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12+$sc_q13+$sc_q14+$sc_q15+$sc_q16+$sc_q17;*/
 					 	$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7;
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
		
	
		if (($q3=="yes" or $q3=="na") and ($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na"))
		{
		$sc_fe="4";
		}
		if ($q4=="no" or $q5=="no" or $q6=="no" or $q20=="no")
		{
		$sc_fe="0";
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

		if ($q11=="yes" or $q11=="na")
		{
		$sc_q11="1";
		}
		else
		{
		$sc_q11="0";
		}

		if ($q12=="yes" or $q12=="na")
		{
		$sc_q12="1";
		}
		else
		{
		$sc_q12="0";
		}

		if ($q13=="yes" or $q13=="na")
		{
		$sc_q13="1";
		}
		else
		{
		$sc_q13="0";
		}

		if ($q14=="yes" or $q14=="na")
		{
		$sc_q14="1";
		}
		else
		{
		$sc_q14="0";
		}

		if ($q15=="yes" or $q15=="na")
		{
		$sc_q15="1";
		}
		else
		{
		$sc_q15="0";
		}

		if ($q16=="yes" or $q16=="na")
		{
		$sc_q16="1";
		}
		else
		{
		$sc_q16="0";
		}
		
		if ($q17=="yes" or $q17=="na")
		{
		$sc_q17="1";
		}
		else
		{
		$sc_q17="0";
		}

		
$sc_nfe=$sc_q1+$sc_q2+$sc_q7+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12+$sc_q13+$sc_q14+$sc_q15+$sc_q16+$sc_q17;
 					 	$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13+$save_q14+$save_q15+$save_q16+$save_q17;
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
			}
			if ($repeat=="no")
			{
			$s_date_prev_call="-"; 
			$s_prev_agent="-";
			}
			
						$hhtomm1=($hh_handling_time*3600)+($mm_handling_time*60)+($ss_handling_time);
			


  
        echo"         <td>$nama_unit</td>
					  <td>$userid</td>
                      <td>$region</td>
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
						<td>$call_activity</td>
						<td>$hh_handling_time:$mm_handling_time:$ss_handling_time</td>
						<td>$hhtomm1</td>
						<td>$call_status</td>
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
      <td rowspan="2">1</td>
      <td rowspan="2">Opening</td>
      <td>Greeting with enthusiasm</td>
	  <td>5</td>
      <td>
		<?
			//echo"daniel : $c_observer";		
		  $queryhendi="[sp_reportqm_newcolection]'table_kalibrasi_collection','$tgl1','$tgl2','$report_by','%$c_observer%','%$nik_agent%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','%$kd_unit%','%%','$select_region','$skala','$departemen_skala','$unit_skala','$st_rep'";
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
    </tr>
    <tr>
      <td>Purpose to call & Confirmation</td>
	  <td>5</td>
	  <td>
		<?  
		  	$q2_tot_y=$result["q2_yes"];
			echo"$q2_tot_y";
			
			$q2_avg=$result["avg2"];
		?>
		</td>
	  <td><?
			$prosen_q2_y =($q2_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q2_y);
		?> </td>
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
      <td>2</td>
      <td>Solution</td>
      <td>Correct Solution & Information</td>
	  <td>30</td>
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
    </tr>
	
	<tr>
      <td>3</td>
      <td >Accuracy Data</td>
      <td>Input Accuracy Data</td>
	  <td>10</td>
	 <td>
		<?  
		  	$q4_tot_y=$result["q4_yes"];
			echo"$q4_tot_y";
			
			$q4_avg=$result["avg4"];
		?>
		</td>
	  <td><?
			$prosen_q4_y =($q4_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q4_y);
		?> </td>
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
      <td>4</td>
      <td>Closing Agreement</td>
      <td>Reconfirm the Agreement & Closing Greeting</td>
	  <td>15</td>
	  <td>
		<?  
		  	$q5_tot_y=$result["q5_yes"];
			echo"$q5_tot_y";
			
			$q5_avg=$result["avg5"];
		?>
		</td>
	  <td><?
			$prosen_q5_y =($q5_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q5_y);
		?> </td>
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
	 <td rowspan="2">5</td>
      <td rowspan="2">Effective Communication</td>
	  <td>Hospitality (relate to Manner)</td>
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
    </tr> 
<tr>	
      <td>Personalize Communication</td>
	  <td>15</td>
      <td>
		<?  
		  	$q7_tot_y=$result["q7_yes"];
			echo"$q7_tot_y";
			
			$q7_avg=$result["avg7"];
		?>
		</td>
	  <td><?
			$prosen_q7_y =($q7_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q7_y);
		?> </td>
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
    </tr> 
<tr>	
      <td>6</td>
      <td>Telephony Manner</td>
	  <td>Hold/Transfer/Routing/Callback Technique</td>
	  <td>5</td>
      <td>
		<?  
		  	$q8_tot_y=$result["q8_yes"];
			echo"$q8_tot_y";
			
			$q8_avg=$result["avg8"];
		?>
		</td>
	  <td><?
			$prosen_q8_y =($q8_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q8_y);
		?> </td>
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
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1" class="table table-bordered table-infinite">
  <?  
	  		// if ($select_region !="") {
	  			// if ($report_by=="Unit")
				  	// {
					  // $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_collection_detail c
					   // inner join db_qm.dbo.table_qm_collection a on a.id_qm=c.id_qm 
					   // inner join cco.hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					   // where b.region ='$select_region' and a.status_save='complete' and repeat='yes' 
					   // and a.id_unit like '%$kd_unit%' and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'and a.flag_status=$st_rep";
	   				// }
	  			// if ($report_by=="Departement")
				  	// {	
					  // $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_collection_detail c 
					  // inner join db_qm.dbo.table_qm_collection a on a.id_qm=c.id_qm 
					  // inner join cco.hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					  // where b.region ='$select_region' and  a.status_save='complete' and repeat='yes'
					  // and (a.id_unit like '%$cc_mentari%' or a.id_unit like '%$cc_im3%' or a.id_unit like '%$cc_pp%')
					  // and  convert(varchar,a.date_saved,112) between '$tgl1' and'$tgl2' and a.flag_status=$st_rep"; 
					// }
			// }
			// else {
	  			// if ($report_by=="Unit")
				  	// {
					  // $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_collection_detail c
					   // inner join db_qm.dbo.table_qm_collection a on a.id_qm=c.id_qm 
					   // inner join cco.hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					   // where a.status_save='complete' and repeat='yes' 
					   // and a.id_unit like '%$kd_unit%' and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status=$st_rep";
	   				// }
	  			// if ($report_by=="Departement")
				  	// {	
					  // $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_collection_detail c 
					  // inner join db_qm.dbo.table_qm_collection a on a.id_qm=c.id_qm 
					  // inner join cco.hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					  // where a.status_save='complete' and repeat='yes'
					  // and (a.id_unit like '%$cc_mentari%' or a.id_unit like '%$cc_im3%' or a.id_unit like '%$cc_pp%')
					  // and  convert(varchar,a.date_saved,112) between '$tgl1' and'$tgl2'"; 
					// }
			// }		
	  			// if ($report_by=="Observer")
				  	// {
					  // $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_collection_detail c inner join db_qm.dbo.table_qm a
					  			// on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
					  			// where a.status_save='complete' and repeat='yes' and  cast(id_data_pribadi as varchar)='$c_observer'
					  			// and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status=$st_rep";  
					// }
				// if ($report_by=="Validator")
				  	// {
					  // $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_collection_detail c
								// inner join db_qm.dbo.table_qm_collection a on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
					  			// where a.status_save='complete' and repeat='yes' and  id_kalibrasi like'%$c_observer%'
					  			// and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and a.flag_status=$st_rep";  
					// }
	  			// if ($report_by=="Agent")
				  	// {	
					  // $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_collection_detail c inner join db_qm.dbo.table_qm_collection a
					  			// on a.id_qm=c.id_qm inner join cco.hrms.dbo.tb_data_pribadi z  on a.id_pribadi_user=cast(id_data_pribadi as varchar)
					  			// where a.status_save='complete' and repeat='yes' and  (z.nik_karyawan like '%$nik_agent%' or z.nama like '%$nik_agent%')
					  			// and  convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2'and a.flag_status=$st_rep";   
								// echo"$stot_rep";
					// }
					// if ($report_by=="Skala")
				  	// {	
					  // $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_collection a with(nolock) inner join db_qm.dbo.table_qm_collection_detail b 
// with(nolock) on a.id_qm=b.id_qm where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112) 
// between '$tgl1' and '$tgl2' and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%' AND a.id_qm in( select id_qm from 
// ( select a.id_qm,b.repeat, 
// case when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7)
 // >= 90 then 'A' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7)
 // >= 80 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7)
 // < 90 then 'B' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7)
 // >= 70 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7)
 // < 80 then 'C' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7)
 // >= 60 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7)
 // < 70 then 'D' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7) 
// < 60 then 'E' end 'Skala' from db_qm.dbo.table_qm_collection a with(nolock) 
// inner join db_qm.dbo.table_qm_detail b with(nolock) on a.id_qm=b.id_qm
 // where a.status_save='complete' and convert(varchar,a.date_saved,112) 
  // between '$tgl1' and '$tgl2' and a.flag_status=$st_rep and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%'
   // and b.repeat='yes' group by a.id_qm,b.repeat ) AA where Skala like '%$skala' )
// ";   
					// }
				// echo $stot_fcr;
				// echo $stot_rep;
	   
		    // $r_stot_rep=mssql_query($stot_rep);
		    // while($d_stot_rep=mssql_fetch_array($r_stot_rep))
			// {
				// $rep_tot_y=$d_stot_rep["jum_s_rep"];
			// } 			
		?>
	<tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
	<!--<tr>
      <td width="180">Repetitive Call</td>
      <td width="68">
		<?  
	  				
				// echo"$rep_tot_y";
		?>
	  </td>
    </tr>-->
	<tr>
      <td width="180">Handling Time Average</td>
      <td width="68">
		<?   
			$stot_hh="[sp_handling_kalibrasi_collection]'table_kalibrasi_collection','$report_by','$tgl1','$tgl2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala','3'";
			//echo"$stot_hh";
				
		    $r_stot_hh=mssql_query($stot_hh);
		    while($d_stot_hh=mssql_fetch_array($r_stot_hh))
			{
				$d_tot_hh=$d_stot_hh["jum_hh"];
				$d_tot_mm=$d_stot_hh["jum_mm"];
				$d_tot_ss=$d_stot_hh["jum_ss"];
			} 
			$hhtomm=(($d_tot_hh*3600)+($d_tot_mm*60)+$d_tot_ss)/$jum_tot;
			$dc=$d_tot_mm /$jum_tot;
			//echo"danil :$jum_tot | $d_tot_mm|$dc|$hhtomm|";
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
			
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">Average Score</td>
      <td width="68">
		<?
		  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg;
		  //echo"$score_avg";
		  //echo"$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg";
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