<?php
/////////////////////////////////export to excel ///////////////////////////////////////////
// Here we tell the browser that this is an excel file.
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=report_validasi_voce.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 

include "../konek_qm.php";
?>
<style> .str{ mso-number-format:\@; } </style>
<p>&nbsp;</p>
<table width="368%" border="1" align="center" cellspacing="1">
  <tr bgcolor="#CCCCCC">
    <th width="1%" rowspan="3" class="header"><div align="center">No</div></th>
    <th width="1%" rowspan="3" class="head0"><div align="center">Area</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Username</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Region</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Nama</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">TL/SPV</div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Survey Date </div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Observation Date</div></th>
		<th width="2%" rowspan="3" class="head0"><div align="center">Validation Date </div></th>		
        <th width="1%" rowspan="3" class="head0"><div align="center">Survey Methode</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Customer Name </div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">MSISDN</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Activity Code</div></th>
		
        <th colspan="2" class="head0"><div align="center">Process Call</div></th>
		<th colspan="2" class="head0"><div align="center">Solution </div></th>
		<th colspan="16" class="head0"><div align="center">Reason Dessatisfaction Customer </div></th>
		
		<th width="4%" rowspan="3" class="header"><div align="center">Observer</div></th>
		<th width="4%" rowspan="3" class="header"><div align="center">Validation</div></th>
		<th width="4%" rowspan="3" class="header"><div align="center">Validator</div></th>
  </tr>
  <tr bgcolor="#CCCCCC">
      <th colspan="2" class="head0"><div align="center">Telephone Skill</div></th>
      <th colspan="2" class="head0"><div align="center">Solution/Providing Assistance</div></th>
      <th colspan="2" class="head0"><div align="center">CEC</div></th>
      <th colspan="2" class="head0"><div align="center">Network</div></th>
      <th colspan="2" class="head0"><div align="center">Process & Procedure</div></th>
	  <th colspan="2" class="head0"><div align="center">Billing Issue</div></th>
	  <th colspan="2" class="head0"><div align="center">Pricing & Package</div></th>
	  <th colspan="2" class="head0"><div align="center">Wrong Input Reason</div></th>
	  <th colspan="2" class="head0"><div align="center">Program Promo</div></th>
	  <th colspan="2" class="head0"><div align="center">Access to Contact Center</div></th>
    </tr>
  <tr bgcolor="#CCCCCC">
      <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
      <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
    </tr>
  <?
	include "../konek_qm.php";
	
	$itung="[sp_count_kalibrasi_voce]'table_kalibrasi_voce','table_qm_voce','$date_eva1','$date_eva2','$report_by','%$kd_unit%','%$cc1%','%$cc2%','%$cc3%','%$cr1%','%$cr2%','%$dc1%','%$dc2%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
//echo "$q1_yes_jum";
	  	
					$q_user="[sp_search_kalibrasi_voce]'table_kalibrasi_voce','table_qm_voce','$report_by','%$kd_unit%','$date_eva1','$date_eva2','%$cc1%','%$cc2%','%$cc3%','%$cr1%','%$cr2%','%$dc1%','%$dc2%','$c_observer','%$nik_agent%','$select_region'";
					//echo"$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$id=$d_user["id"];
						$area=$d_user["nama_unit"];
						$userid=$d_user["nik_karyawan"];
						$region=$d_user["region"];
						$lb=$d_user["lb"];
						$spv_name=$d_user["spv_name"];
						$survey_date=$d_user["survey_date"];
						$observation_date=$d_user["observation_date"];
						$validation_date=$d_user["date_saved"];
						$survey_methode=$d_user["survey_methode"];
						$customer_name=$d_user["customer_name"];
						$msisdn=$d_user["msisdn"];
						$activity_code=$d_user["activity_code"];
						$observ=$d_user["observ"];
						
						 $interaction_date2 = $d_user['date'];
						 $jam = $d_user['jam'];
						 $jamm = explode (":", $jam);
						 $hh = $jamm[0];
						 $mm = $jamm[1];
						$id_qm=$d_user["id_qm"];
						$full_name=$d_user["full_name"];
						
						
						
						$q1=$d_user["q1"];
						$q2=$d_user["q2"];
						$q3=$d_user["q3"];
						$q4=$d_user["q4"];
						$q5=$d_user["q5"];
						$q6=$d_user["q6"];
						$q7=$d_user["q7"];
						$q8=$d_user["q8"];
						$q9=$d_user["q9"];
						$q10=$d_user["q10"];
						$status_save=$d_user["status_save"];
						$observer=$d_user["observer"];
						
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
					
					$q_kal="select nama as kalibrasi_name
						  	from hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
					$r_kal=mssql_query($q_kal);
					while($d_kal=mssql_fetch_array($r_kal))
						{
						$kalibrasi_name=$d_kal["kalibrasi_name"];
						}
    echo"
                      <td>$area</td>
					  <td>$userid</td>
                      <td>$region</td>
                      <td>$lb</td>
					 <td>$spv_name</td>
					  <td>$survey_date</td>
					  <td>$observation_date</td>
					  <td>$validation_date</td>
					  <td>$survey_methode</td>
					  <td>$customer_name</td>
					  <td class='str'>$msisdn</td>
					  <td>$activity_code</td>
                      <td>$q1</td>
					  <td>$notes1</td>
                      <td>$q2</td>
					  <td>$notes2</td>
                      <td>$q3</td>
					  <td>$notes3</td>
                      <td>$q4</td>
					  <td>$notes4</td>
                      <td>$q5</td>
					  <td>$notes5</td>
                      <td>$q6</td>
					  <td>$notes6</td>
					  <td>$q7</td>
					  <td>$notes7</td>
                      <td>$q8</td>
					  <td>$notes8</td>
                      <td>$q9</td>
					  <td>$notes9</td>
                      <td>$q10</td>
					  <td>$notes10</td>
					  <td>$observer_name</td>
					  <td>$kalibrasi</td>
					  <td>$kalibrasi_name</td>
                      </tr>";
					  $no++;
					  
						}
						
					?>
  </a>
</table>
<p>Total data : <? echo"$jum_tot"; ?></p>
<table width="568" border="1">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th rowspan="2" width="17" class="head0"><div align="center">No</div></th>
      <th rowspan="2" width="36" class="head0"><div align="center">Category</div></th>
      <th rowspan="2" width="205" class="head0"><div align="center">Attributes</div></th>
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
      <td>Process Call</td>
      <td>Telephone Skill</td>
      <td><?  
	  //edit hendi
      $queryhendi="[sp_reportqm_kalibrasi_voce]'table_kalibrasi_voce','table_qm_voce','$date_eva1','$date_eva2','$report_by','$c_observer','%$nik_agent%','%$cc1%','%$cc2%','%$cc3%','%$cr1%','%$cr2%','%$dc1%','%$dc2%','%$kd_unit%','$select_region'";
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
      <td>2</td>
      <td>Solution</td>
      <td>Solution/Providing Assistance</td>
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
			printf("%1.2f ", $prosen_q2_n);
		?>
	  </td>
    </tr>
    <tr>
	<td>3</td>
      <td rowspan="8">Reason Dessatisfaction Customer</td>
	  <td>CEC</td>
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
	<td>4</td>
      <td>Network</td>
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
      <td>Process & Procedure</td>
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
	  <td>6</td>
      <td>Billing Issue</td>
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
      <td>7</td>
      <td>Pricing & Package</td>
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
      <td>8</td>
      <td>Wrong Input Reason</td>
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
		  	$q8_tot_n=$result["q9_no"];
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
      <td>9</td>
      <td>Program Promo</td>
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
      <td>10</td>
      <td>Access to Contact Center</td>
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
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1" class="table table-bordered table-infinite">
	<tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
  </table>
</table>
<p>
  
</p>
