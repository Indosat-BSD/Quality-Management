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
    <td width="1%" rowspan="2" class="header"><div align="center">No</div></td>
    <td width="4%" rowspan="2" class="header"><div align="center">Area</div></td>
	<td width="4%" rowspan="2" class="header"><div align="center">Username</div></td>
	<td width="4%" rowspan="2" class="header"><div align="center">Region</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Nama</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">TL/SPV</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Interaction Date </div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Observation Date</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Week</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Customer Name </div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Interaction Type</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Product Type</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Product Detail</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Product Detail by Agent</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">FCR atau Not FCR</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Repeat (Y / N)</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Date of previous call</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Previous Agent </div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Handling time (duration)</div></td>
    <td rowspan="2" class="header">Handling Time (second) </td>
    <td rowspan="2" class="header"><div align="center">Drop Call</div></td>
      <td colspan="3" class="head0"><div align="center">Opening Greeting, Call Respons &amp; Responsiveness</div></td>
      <td colspan="3" class="head0"><div align="center">Verify or Confirmation</div></td>
      <td colspan="3" class="head0"><div align="center">Probing</div></td>
      <td colspan="3" class="head0"><div align="center">Correct Answer &amp; Solution</div></td>
	  <td colspan="3" class="head0"><div align="center">Correct Handling</div></td>
      <td colspan="3" class="head0"><div align="center">Privacy Policy</div></td>
      <td colspan="3" class="head0"><div align="center">Input Accuracy Data / Information</div></td>
      <td colspan="3" class="head0"><div align="center">Hospitality</div></td>
      <td colspan="3" class="head0"><div align="center">Voice Quality </div></td>
      <td colspan="3" class="head0"><div align="center">Call Management</div></td>
      <td colspan="3" class="head0"><div align="center">Hold/Transfer/Routing/Callback Technique // Hold</div></td>
      <td colspan="3" class="head0"><div align="center">Reconfirm the Agreement</div></td>
      <td colspan="3" class="head0"><div align="center">Campaign / Cross selling/ upselling / survey</div></td>
      <td colspan="3" class="head0"><div align="center">Closing Greeting</div></td>
    <td width="4%" rowspan="2" class="header"><div align="center">CE Accuracy </div></td>
    <td width="4%" rowspan="2" class="header"><div align="center">NCE Accuracy </div></td>
    <td width="4%" rowspan="2" class="header"><div align="center">Total Score </div></td>
    <td width="4%" rowspan="2" class="header"><div align="center">Skala</div></td>
        <td width="1%" rowspan="2" class="head0"><div align="center">Strength Agent</div></td>
        <td width="1%" rowspan="2" class="head0"><div align="center">Area to be Improved</div></td>
        <td width="2%" rowspan="2" class="head0"><div align="center">Recommendation</div></td>
        <td width="6%" rowspan="2" class="head0"><div align="center">Action to be done - QA</div></td>
        <td width="6%" rowspan="2" class="head0"><div align="center">File QA</div></td>
        <td width="7%" rowspan="2" class="head0"><div align="center">Action to be done - Opers</div></thd>
        <td width="7%" rowspan="2" class="head0"><div align="center">File Opers</div></td>
	 <? if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){?>
        <td width="7%" rowspan="2" class="head0"><div align="center">Notes sample recording</div></td>
    <? } ?>
      <td width="4%" rowspan="2" class="head0"><div align="center">Observer</div></td>
	  <td width="4%" rowspan="2" class="head0"><div align="center">Validator</div></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td width="4%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="4%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="4%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="4%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="3%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="3%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="3%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="3%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="4%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="4%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="4%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="4%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="5%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="5%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="6%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="6%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="6%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="6%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="8%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="8%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="4%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="4%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="3%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="3%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="4%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="4%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="4%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="4%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
  </tr>
  <?
	include "../konek_qm.php";
	
	$itung="[sp_count4]'table_qm_newHireIB','$date_eva1','$date_eva2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$depart','$unitSkala'";
	
	//echo $itung;
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
//echo "$q1_yes_jum";
	  	
					$q_user="[sp_search4]'table_qm_newHireIB','$report_by','%$kd_unit%','$date_eva1','$date_eva2','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$depart','$unitSkala'";
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
		
		if ($q3=="yes" or $q3=="na")
		{
		$sc_q3="1";
		}
		else
		{
		$sc_q3="0";
		}
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na"))
		{
		$sc_fe="3";
		}
		if ($q4=="no" or $q5=="no" or $q6=="no")
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

		
$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q7+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12+$sc_q13+$sc_q14;
$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13+$save_q14;


$total_score = round($total_score,2);
/*						if ($total_score >= 90)
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
						}*/
//
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
                      <td>$q13</td>
					  <td>$save_q13</td>
					  <td>$notes13</td>
                      <td>$q14</td>
					  <td>$save_q14</td>
					  <td>$notes14</td>

					  
					  <td>$sc_fe</td>
                      <td>$sc_nfe</td>
					  <td>$total_score</td>
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
                    echo "</tr>";
					
					$no++; 
					}
						
					
					?>
  </a>
</table>
<p>Total data : <? echo"$jum_tot"; ?></p>
<table width="568" border="1">
  <tr bgcolor="#CCCCCC">
    <td width="17"><div align="center">No</div></td>
    <td width="36"><div align="center">Value</div></td>
    <td width="205"><div align="center">Attributes</div></td>
    <td width="33"><div align="center">Yes</div></td>
    <td width="28"><div align="center">%</div></td>
    <td width="27"><div align="center">No</div></td>
    <td width="26"><div align="center">%</div></td>
    <td width="44"><div align="center">NA</div></td>
    <td width="44"><div align="center">%</div></td>
    <td width="44"><div align="center">AVG Score </div></td>
  </tr>
 <tr>
      <td>1</td>
      <td>NCE</td>
      <td>Opening Greeting, Call Respons &amp; Responsiveness</td>
      <td><?  
	  //edit hendi
      $queryhendi="[sp_reportqm4]'table_qm_newHireIB','$date_eva1','$date_eva2','$report_by','$c_observer','%$nik_agent%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','%$kd_unit%','%%','$select_region','$skala','$depart','$unitSkala'";
	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
	  //echo $queryhendi;
      //end edit
      
			$q1_tot_y=$result["q1_yes"];
			echo"$q1_tot_y";
			
		?></td>
      <td><?
$prosen_q1_y =($q1_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_y);
			?></td>
      <td><?  
		  	$q1_tot_n=$result["q1_no"];
			echo"$q1_tot_n";
			
		?></td>
      <td><?
$prosen_q1_y =($q1_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_y);
			?></td>
      <td><?  
			$q1_tot_na=$result["q1_na"];  
			echo"$q1_tot_na";
			
		?></td>
      <td><?
$prosen_q1_na =($q1_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_na);
			?></td>
      <td><?  
	  			
					
	   
	     	$q1_avg=$result["avg1"];
			 		
			
			printf("%1.2f ", $q1_avg);
			
		?></td>
    </tr>
    <tr>
      <td>2</td>
      <td>NCE</td>
      <td>Verify or Confirmation</td>
      <td><?  
	  			
		     	$q2_tot_y=$result["q2_yes"];
			 		
			echo "$q2_tot_y";
			
		?></td>
      <td><?
$prosen_q2_y =($q2_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_y);
			?></td>
      <td><?  
	  			
		     	$q2_tot_n=$result["q2_no"];
			 		
			echo"$q2_tot_n";
			
		?></td>
      <td><?
$prosen_q2_y =($q2_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_y);
			?></td>
      <td><?  
	  			
		     	$q2_tot_na=$result["q2_na"];
			 		
			echo"$q2_tot_na";
			
		?></td>
      <td><?
$prosen_q2_na =($q2_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_na);
			?></td>
      <td><?  
	  			
		     	$q2_avg=$result["avg2"];
			 		
			printf("%1.2f ", $q2_avg);
		?></td>
    </tr>
    <tr>
      <td>3</td>
      <td>NCE</td>
      <td>Probing</td>
      <td><?  
	  			
		     	$q3_tot_y=$result["q3_yes"];
			 		
			echo"$q3_tot_y";
			
		?></td>
      <td><?
$prosen_q3_y =($q3_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_y);
			?></td>
      <td><?  
	  			
		     	$q3_tot_n=$result["q3_no"];
			 		
			echo"$q3_tot_n";
			
		?></td>
      <td><?
$prosen_q3_y =($q3_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_y);
			?></td>
      <td><?  
	  			
		     	$q3_tot_na=$result["q3_na"];
					
			echo"$q3_tot_na";
			
		?></td>
      <td><?
$prosen_q3_na =($q3_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_na);
			?></td>
      <td><?  
	  			
		     	$q3_avg=$result["avg3"];
			 		
			printf("%1.2f ", $q3_avg);
			
		?></td>
    </tr>
    <tr>
      <td>4</td>
      <td>CE</td>
      <td>Correct Answer &amp; Solution</td>
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
      <td><?  
	  			
		     	$q4_tot_na=$result["q4_na"];
			 		
			echo"$q4_tot_na";
			
		?></td>
      <td><?
$prosen_q4_na =($q4_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_na);
			?></td>
      <td><?  
	  			
		     	$q4_avg=$result["avg4"];
					
		printf("%1.2f ", $q4_avg);
		?></td>
    </tr>
    <tr>
      <td>5</td>
      <td>CE</td>
      <td>Correct Handling </td>
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
      <td><?  
	  			
		     	$q5_tot_na=$result["q5_na"];
			 		
			echo"$q5_tot_na";
			
		?></td>
      <td><?
$prosen_q5_na =($q5_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_na);
			?></td>
      <td><?  
	  			
		     	$q5_avg=$result["avg5"];
			 		
		printf("%1.2f ", $q5_avg);
			
		?></td>
    </tr>
    <tr>
      <td>6</td>
      <td>CE</td>
      <td>Privacy Policy </td>
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
      <td><?  
	  			
		     	$q6_tot_na=$result["q6_na"];
			 		
			echo"$q6_tot_na";
			
		?></td>
      <td><?
$prosen_q6_na =($q6_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q6_na);
			?></td>
      <td><?  
	  			
		     	$q6_avg=$result["avg6"];
			 		
		printf("%1.2f ", $q6_avg);
			
		?></td>
    </tr>
    
    <tr>
      <td>7</td>
      <td>NCE</td>
      <td>Input Accuracy Data / Information</td>
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
      <td><?  
	  			
		     	$q7_tot_na=$result["q7_na"];
			
			echo"$q7_tot_na";
			
		?></td>
      <td><?
$prosen_q7_na =($q7_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_na);
			?></td>
      <td><?  
	  			
		     	$q7_avg=$result["avg7"];
			 		
		printf("%1.2f ", $q7_avg);
			
		?></td>
    </tr>
    <tr>
      <td>8</td>
      <td>NCE</td>
      <td>Hospitality</td>
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
      <td><?  
	  			
		     	$q8_tot_na=$result["q8_na"];
			 		
			echo"$q8_tot_na";
			
		?></td>
      <td><?
$prosen_q8_na =($q8_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_na);
			?></td>
      <td><?  
	  			
		     	$q8_avg=$result["avg8"];
			 		
		printf("%1.2f ", $q8_avg);
			
		?></td>
    </tr>
    <tr>
      <td>9</td>
      <td>NCE</td>
      <td>Voice Quality</td>
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
      <td><?  
	  			
		     	$q9_tot_na=$result["q9_na"];
			 		
			echo"$q9_tot_na";
			
		?></td>
      <td><?
$prosen_q9_na =($q9_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_na);
			?></td>
      <td><?  
	  			
		     	$q9_avg=$result["avg9"];
			 		
		printf("%1.2f ", $q9_avg);
			
		?></td>
    </tr>
    <tr>
      <td>10</td>
      <td>NCE</td>
      <td>Call Management</td>
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
      <td><?  
	  			
		     	$q10_tot_na=$result["q10_na"];
			 		
			echo"$q10_tot_na";
			
		?></td>
      <td><?
$prosen_q10_na =($q10_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_na);
			?></td>
      <td><?  
	  			
		     	$q10_avg=$result["avg10"];
			 		
		printf("%1.2f ", $q10_avg);
			
		?></td>
    </tr>
    <tr>
      <td>11</td>
      <td>NCE</td>
      <td>Hold/Transfer/Routing/Callback Technique // Hold</td>
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
      <td><?  
	  			
		     	$q11_tot_na=$result["q11_na"];
			 		
			echo"$q11_tot_na";
			
		?></td>
      <td><?
$prosen_q11_na =($q11_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_na);
			?></td>
      <td><?  
	  			
		     	$q11_avg=$result["avg11"];
			 		
		printf("%1.2f ", $q11_avg);
			
		?></td>
    </tr>
    <tr>
      <td>12</td>
      <td>NCE</td>
      <td>Reconfirm the Agreement</td>
      <td><?  
	  			
		     	$q12_tot_y=$result["q12_yes"];
			 		
			echo"$q12_tot_y";
			
		?></td>
      <td><?
$prosen_q12_y =($q12_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_y);
			?></td>
      <td><?  
	  			
		     	$q12_tot_n=$result["q12_no"];
			 		
			echo"$q12_tot_n";
			
		?></td>
      <td><?
$prosen_q12_y =($q12_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_y);
			?></td>
      <td><?  
	  			
		     	$q12_tot_na=$result["q12_na"];
			 		
			echo"$q12_tot_na";
			
		?></td>
      <td><?
$prosen_q12_na =($q12_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_na);
			?></td>
      <td><?  
	  			
		     	$q12_avg=$result["avg12"];
			 		
		printf("%1.2f ", $q12_avg);
			
		?></td>
    </tr>
    <tr>
      <td>13</td>
      <td>NCE</td>
      <td>Campaign / Cross selling/ upselling / survey</td>
      <td><?  
	  			
		     	$q13_tot_y=$result["q13_yes"];
			 		
			echo"$q13_tot_y";
			
		?></td>
      <td><?
$prosen_q13_y =($q13_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q13_y);
			?></td>
      <td><?  
	  			
		     	$q13_tot_n=$result["q13_no"];
			 		
			echo"$q13_tot_n";
			
		?></td>
      <td><?
$prosen_q13_y =($q13_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q13_y);
			?></td>
      <td><?  
	  			
		     	$q13_tot_na=$result["q13_na"];
			 		
			echo"$q13_tot_na";
			
		?></td>
      <td><?
$prosen_q13_na =($q13_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q13_na);
			?></td>
      <td><?  
	  			
		     	$q13_avg=$result["avg13"];
			 		
		printf("%1.2f ", $q13_avg);
			
		?></td>
    </tr>
    <tr>
      <td>14</td>
      <td>NCE</td>
      <td>Closing Greeting</td>
      <td><?  
	  			
		     	$q14_tot_y=$result["q14_yes"];
			 		
			echo"$q14_tot_y";
			
		?></td>
      <td><?
$prosen_q14_y =($q14_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q14_y);
			?></td>
      <td><?  
	  			
		     	$q14_tot_n=$result["q14_no"];
			 		
			echo"$q14_tot_n";
			
		?></td>
      <td><?
$prosen_q14_y =($q14_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q14_y);
			?></td>
      <td><?  
	  			
		     	$q14_tot_na=$result["q14_na"];
			 		
			echo"$q14_tot_na";
			
		?></td>
      <td><?
$prosen_q14_na =($q14_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q14_na);
			?></td>
      <td><?  
	  			
		     	$q14_avg=$result["avg14"];
			 		
		printf("%1.2f ", $q14_avg);
			
		?></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1">
    <tr>
      <td width="180">NCE Total </td>
      <td width="68"><? $nfe_total=$q1_tot_y+$q2_tot_y+$q3_tot_y+$q7_tot_y+$q8_tot_y+$q9_tot_y+$q10_tot_y+$q11_tot_y+$q12_tot_y+$q13_tot_y+$q14_tot_y+$q1_tot_na+$q2_tot_na+$q3_tot_na+$q7_tot_na+$q8_tot_na+$q9_tot_na+$q10_tot_na+$q11_tot_na+$q12_tot_na+$q13_tot_na+$q14_tot_na; echo"$nfe_total";?></td>
    </tr>
    <tr>
      <td>NCE Accuracy</td>
      <td><?
	  $nfe_acc=($nfe_total/(11*$jum_tot)*100);
		printf("%1.2f ", $nfe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>CE Total </td>
      <td><?  
					$stot_fe="[sp_fetotal_ib4]'table_qm_newHireIB','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%$-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$depart','$unitSkala'";
					//echo $stot_fe;
	  
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
			$fe_total=$fe_tot*3;
			echo"$fe_total";
			
		?></td>
    </tr>
    <tr>
      <td>CE Accuracy </td>
      <td>
	  <?
	  $fe_acc=($fe_tot/$jum_tot)*100;
		printf("%1.2f ", $fe_acc);
		
	  ?>%</td>
    </tr>
    <tr>
      <td>FCR</td>
      <td><?  
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
					   and a.id_unit like '%$kd_unit%' and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";
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
					  and  convert(varchar,a.date_saved,112) between '$date_eva1' and'$date_eva2'"; 
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
					   and a.id_unit like '%$kd_unit%' and  convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2'";
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
					  and  convert(varchar,a.date_saved,112) between '$date_eva1' and'$date_eva2'"; 
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
					  			where a.status_save='complete' and repeat='yes' and  cast(id_data_pribadi as varchar)='$c_observer'
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
where a.status_save='complete' and b.fcr='fcr' and convert(varchar,a.date_saved,112) between '$date_eva1' and '$date_eva2' and a.flag_status=0 AND
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
					where a.status_save='complete' and b.fcr='fcr' and convert(varchar,a.date_saved,112)
					 between '$date_eva1' and '$date_eva2'
				    group by a.id_qm 
				) AA
			 where Skala like '%$skala' )";
				 	  			
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_newHireIB a with(nolock) inner join db_qm.dbo.table_qm_newHireIB_detail b 
with(nolock) on a.id_qm=b.id_qm where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112) 
between '$date_eva1' and '$date_eva2' and a.flag_status=0 AND a.id_qm in( select id_qm from 
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
 between '$date_eva1' and '$date_eva2'  
  and b.repeat='yes' group by a.id_qm,b.repeat ) AA where Skala like '%$skala' )
";   
					}
					//echo $stot_fcr;
					//echo $stot_rep;
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
			$fcr=(($fcr_tot_y-$rep_tot_y)/$jum_tot)*100;
		printf("%1.2f ", $fcr);
		?>% </td>
    </tr>
    <tr>
      <td>Repeat (Y) </td>
      <td><? echo"$rep_tot_y"; ?></td>
    </tr>
    <tr>
      <td>Handling Time  Average</td>
      <td><?  
					$stot_hh="[sp_handling4]'table_qm_newHireIB','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%$-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$depart','$unitSkala'";
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
			//echo $hhtomm;
			//echo $d_stot_hh; echo $d_tot_mm; echo $d_tot_ss; echo $jum_tot;
			
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
	   $stot_d="[sp_dropcall4]'table_qm_newHireIB','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%$-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$depart','$unitSkala'";
	   //echo $stot_d;
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
	  $score_avg=$q1_avg+$q2_avg+$q3_avg+$q4_avg+$q5_avg+$q6_avg+$q7_avg+$q8_avg+$q9_avg+$q10_avg+$q11_avg+$q12_avg+$q13_avg+$q14_avg;
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
</table>
<p>
  
</p>
