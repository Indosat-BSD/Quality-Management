<?php
/////////////////////////////////export to excel ///////////////////////////////////////////
// Here we tell the browser that this is an excel file.
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=report_telesales.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 
set_time_limit(0);

//$user = "sa";		//MySQL Username
//$password = "hasuuuuut";		// MySQL Username's Password
//$dbname= "db_qm";		//Database Name

// localhost is the default database hosf for most servers, you might need to change yours if it doesnt work
//$global_dbh = mssql_connect("crmgateway", $user, $password); // This establishes the database connection

//mssql_select_db($dbname, $global_dbh);// Select what database to use
include "../konek_qm.php";
?>
<style> .str{ mso-number-format:\@; } </style>
<p>&nbsp;</p>
<?php
if($report_by!='New Report'){
?> 
<table width="368%" border="1" align="center" cellspacing="1">
  <tr bgcolor="#CCCCCC">
    <th width="1%" rowspan="3" class="header"><div align="center">No</div></th>
    <th width="1%" rowspan="3" class="head0"><div align="center">Unit Kerja</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Username</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Region</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Nama</div></th>
        <<th width="1%" rowspan="3" class="head0"><div align="center">Team Leader</div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">MSISDN</div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Tanggal Transaksi</div></th>
        <!--th width="1%" rowspan="3" class="head0"><div align="center">Week</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Customer Name </div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Type</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Product Type</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Product Detail</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Product Detail by Agent</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Repeat (Y / N)</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Date of previous call</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Previous Agent </div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Handling time (duration)</div></th>
        <th width="1%" rowspan="3" class="head0">Handling Time (second) </th>-->
		
		<th colspan="9" class="head0"><div align="center">Greeting & Cofirm Customer Data / Permission and purpose to call</div></th>
		<th colspan="3" class="head0"><div align="center">Penjelasan terkait perbedaan pra Bayar & Paska Bayar</div></th>
		<th colspan="3" class="head0"><div align="center">Penjelasan terkait cara pembayaran paska bayar</div></th>
		<th colspan="9" class="head0"><div align="center">Menyampaikan penawaran program</div></th>
		<th colspan="3" class="head0"><div align="center">Trial Closing</div></th>
		<th colspan="3" class="head0"><div align="center">Legal Statement</div></th>
		<th colspan="3" class="head0"><div align="center">Konfirmasi penjelasan ke pelanggan</div></th>
		<th colspan="3" class="head0"><div align="center">Input Accuracy Data / Information</div></th>
		
        <th width="1%" rowspan="3" class="head0"><div align="center">Total Score </div></th>
		<th width="1%" rowspan="3" class="head0"><div align="center">Skala</div></th>
		<!--<th width="1%" rowspan="3" class="head0"><div align="center">Strength Agent</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Area to be Improved</div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Recommendation</div></th>
        <th width="6%" rowspan="3" class="head0"><div align="center">Action to be done - QA</div></th>
        <th width="6%" rowspan="3" class="head0"><div align="center">File QA</div></th>
        <th width="7%" rowspan="3" class="head0"><div align="center">Action to be done - Opers</div></th>
        <th width="7%" rowspan="3" class="head0"><div align="center">File Opers</div></th>-->
	 <? if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){?>
        <!--<th width="7%" rowspan="3" class="head0"><div align="center">Notes sample recording</div></th>-->
    <? } ?>
        <th width="2%" rowspan="3" class="head0"><div align="center">Observer</div></th>
		<!--<th width="4%" rowspan="3" class="head0"><div align="center">Validator</div></th>
		<th width="4%" rowspan="3" class="head0"><div align="center">Validation</div></th>
		<th width="4%" rowspan="3" class="head0"><div align="center">FCR Value</div></th>
		<th width="4%" rowspan="3" class="head0"><div align="center">Repeat Value</div></th>-->
  </tr>
  <tr bgcolor="#CCCCCC">
		<th colspan="3" class="head0"><div align="center">Melakukan konfirmasi data pelanggan</div></th>
		<th colspan="3" class="head0"><div align="center">Meminta waktu pelanggan</div></th>
		<th colspan="3" class="head0"><div align="center">Menyampaikan tujuan menelepon untuk penawaran</div></th>
		<th colspan="3" class="head0"><div align="center">Menyampaikan perbedaan pra bayar dan paska bayar dengan benar</div></th>
		<th colspan="3" class="head0"><div align="center">Menjelaskan terkait cara pembayaran paska bayar</div></th>
		<th colspan="3" class="head0"><div align="center">Menyampaikan nama program product dengan benar</div></th>
		<th colspan="3" class="head0"><div align="center">Menyampaikan benefit program dengan benar</div></th>
		<th colspan="3" class="head0"><div align="center">Menyampaikan biaya program dengan akurat</div></th>
		<th colspan="3" class="head0"><div align="center">Menanyakan Persetujuan pelanggan (Proses Agreement)</div></th>
		<th colspan="3" class="head0"><div align="center">Menyebutkan legal statement sales</div></th>
		<th colspan="3" class="head0"><div align="center">Menyampaikan konfirmasi kepada pelanggan jika ada keraguan atau pertanyaan</div></th>
		<th colspan="3" class="head0"><div align="center">TSO membuat dan menjalankan tahapan input data sesuai dengan ketentuan. TSO menulisakan notes dengan lengkap dan benar</div></th>
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
	
	if($c_observer==""){$obs=0;}else{$obs=$c_observer;}
	$itung="[sp_count_telesalesnew]'table_qm_telesalesnew','$date_eva1','$date_eva2','$report_by','%$kd_unit%','%$cc_tele%','$c_observer','%$nik_agent%','$select_region','$skala','$depart','$unitSkala'";
	
	//echo $itung;
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
//echo "$q1_yes_jum";
	  	
					$q_user="[sp_search_telesalesnew]'table_qm_telesalesnew','$report_by','%$kd_unit%','$date_eva1','$date_eva2','%$cc_tele%','$c_observer','%$nik_agent%','$select_region','$skala','$depart','$unitSkala'";
					// echo"$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$date_saved=$d_user["data_saved"];
						$spv_name=$d_user["spv_name"];
						$region=$d_user["region"];
						// $interaction_date=$d_user["interaction_date"];
						// $observation_date=$d_user["observation_date"];
						// $observ=$d_user["observ"];
						// $week_=$d_user["week_"];
						// $customer_name=$d_user["customer_name"];
						// $interaction_type=$d_user["interaction_type"];
						 // $interaction_date2 = $d_user['date'];
						 // $jam = $d_user['jam'];
						 // $jamm = explode (":", $jam);
						 // $hh = $jamm[0];
						 // $mm = $jamm[1];
						// $product_type=$d_user["product_type"];
						// $product_detail=$d_user["product_detail"];
						// $product_detail_agent=$d_user["product_detail_agent"];
						// $fcr=$d_user["fcr"];
						// $repeat=$d_user["repeat"];
						// $date_prev_call2 = $d_user['prev'];
						// $date_prev_call=$d_user["date_prev_call"];
						// $prev_agent=$d_user["prev_agent"];
						// $hh_handling_time=$d_user["hh_handling_time"];
						// $mm_handling_time=$d_user["mm_handling_time"];
						// $ss_handling_time=$d_user["ss_handling_time"];
						// $hh_2=$d_user["hh_handling_time"];
						// $mm_2=$d_user["mm_handling_time"];
						// $ss_2=$d_user["ss_handling_time"];
						// $drop_call=$d_user["drop_call"];
						// $strength_agent=$d_user["strength_agent"];
						// $improved=$d_user["improved"];
						// $recommendation=$d_user["recommendation"];
						// $action_done_qa=$d_user["action_done_qa"];
						// $action_done_ops=$d_user["action_done_ops"];
						// $file_action_done_qa=$d_user["file_action_done_qa"];
						// $file_action_done_ops=$d_user["file_action_done_ops"];
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
						// $status_save=$d_user["status_save"];
						$observer=$d_user["observer"];
						$area=$d_user["nama_unit"];
						// $id_kalibrasi=$d_user["id_kalibrasi"];
						// $kalibrasi=$d_user["kalibrasi"];
						// $notes_recording=$d_user["notes_recording"];
						$score_tot=$d_user["tot_score"];
						$team_leader=$d_user["team_leader"];
						$tanggal_transaksi=$d_user["tanggal_transaksi"];
						$msisdn=$d_user["msisdn"];
						
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
						$skala=$d_user["Skala"];
						
						
		
						echo "<tr class='content'>
                      <td>$no</td>";
						 
						 $q ="select nama as observer_name
						  	from cco.hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer' ";
					//echo "$q_user";
					$qq=mssql_query($q);
					$qqq=mssql_fetch_array($qq);
					$observname=$qqq["observer_name"];

					$q_user1="select nama as observer_name
						  	from cco.hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer' ";
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
                      <td>$area</td>
					  <td>$userid</td>
                      <td>$region</td>
                      <td>$full_name</td>
					    <td>$team_leader</td> 
						<td class='str'>$msisdn</td>
						<td>$tanggal_transaksi</td>
						<!--<td>$week_</td>
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
						<td>$hhtomm1</td>-->
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
					  <!--<td>$strength_agent</td>
                      <td>$improved</td>
                      <td>$recommendation</td>
                      <td>$action_done_qa</td>
                      <td>$file_action_done_qa</td>
                      <td>$action_done_ops</td>
                      <td>$file_action_done_ops</td>-->";
                      if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="validator"){
					  // echo"<td>$notes_recording</td>";
					  }
                      echo"<td>$observer_name</td>
					  <!--<td>-->";
					  
					// if ($id_kalibrasi != ""){
					  // $q_kal="select nama as kalibrasi_name from cco.hrms.dbo.tb_data_pribadi where id_data_pribadi='$id_kalibrasi' ";
					  // $r_kal=mssql_query($q_kal);
					  // while($d_kal=mssql_fetch_array($r_kal))
					  // {
						// $kalibrasi_name=$d_kal["kalibrasi_name"];
					  // }
					
					// echo "$kalibrasi_name</td>";
					// } 
					// echo "<td>$kalibrasi</td>";
					// if($save_q7=="y")
					// {
						// $fcr=0;
					// }
					// else
					// {
						// $fcr=1;
					// }
					// echo "<td>$fcr</td> <td>$repeat_val</td>";

                    echo "</tr>";
					
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
	<?
		  $queryhendi="[sp_reportqm_telesalesnew]'table_qm_telesalesnew','$date_eva1','$date_eva2','$report_by','%$c_observer%','%$nik_agent%','%$cc_tele%','%$kd_unit%','$select_region','$skala','$depart','$unitSkala'";
		  $proses=mssql_query($queryhendi);
		  $result=mssql_fetch_array($proses);
		  
		 // echo $queryhendi;
	?>
    <tr>
      <td rowspan="3">1</td>
      <td rowspan="3">Greeting & Cofirm Customer Data / Permission and purpose to call</td>
      <td>Melakukan konfirmasi data pelanggan</td>
	  <td>2</td>
      <td>
		<?  
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
      <td>Meminta waktu pelanggan</td>
	  <td>3</td>
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
      <td>Menyampaikan tujuan menelepon untuk penawaran</td>
	  <td>4</td>
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
      <td>2</td>
      <td>Penjelasan terkait perbedaan pra Bayar & Paska Bayar</td>
      <td>Menyampaikan perbedaan pra bayar dan paska bayar dengan benar</td>
	  <td>15</td>
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
      <td>3</td>
      <td>Penjelasan terkait cara pembayaran paska bayar</td>
      <td>Menjelaskan terkait cara pembayaran paska bayar</td>
	  <td>15</td>
      <td>
		<?  
		  	$q5_tot_s1=$result["q5_yes"];
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
		  	$q5_tot_s2=$result["q5_no"];
			echo"$q5_tot_s2";
		?>
	  </td>
	  <td>
		<?
			$prosen_q5_s2 =($q5_tot_s2/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q5_s2);
		?>
	  </td>
    </tr>
    <tr>
      <td rowspan="3">4</td>
      <td rowspan="3">Menyampaikan penawaran program</td>
      <td>Menyampaikan nama program product dengan benar</td>
	  <td>5</td>
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
      <td>Menyampaikan benefit program dengan benar</td>
	  <td>7</td>
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
      <td>Menyampaikan biaya program dengan akurat</td>
	  <td>7</td>
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
      <td>Trial Closing</td>
      <td>Menanyakan Persetujuan pelanggan (Proses Agreement)</td>
	  <td>10</td>
      <td>
		<?  
		  	$q9_tot_s1=$result["q9_yes"];
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
		  	$q9_tot_s2=$result["q9_no"];
			echo"$q9_tot_s2";
		?>
	  </td>
	  <td>
		<?
			$prosen_q9_s2 =($q9_tot_s2/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_q9_s2);
		?>
	  </td>
    </tr>
    <tr>
      <td>6</td>
      <td>Legal Statement</td>
      <td>Menyebutkan legal statement sales</td>
	  <td>25</td>
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
      <td>Konfirmasi penjelasan ke pelanggan</td>
      <td>Menyampaikan konfirmasi kepada pelanggan jika ada keraguan atau pertanyaan</td>
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
    </tr>
    <tr>
      <td rowspan="2">8</td>
      <td rowspan="2">Input Accuracy Data / Information</td>
      <td>TSO membuat dan menjalankan tahapan input data sesuai dengan ketentuan. TSO menulisakn notes dengan lengkap dan benar</td>
	  <td>5</td>
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
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="264" border="1" class="table table-bordered table-infinite">
	<tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
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
		  <!--<th width="10%" rowspan="3" class="head0"><div align="center">Periode</div></th>-->
		  <?php }?>
		  
		<th colspan="6" class="head0"><div align="center">Greeting & Cofirm Customer Data / Permission and purpose to call</div></th>
		<th colspan="2" class="head0"><div align="center">Penjelasan terkait perbedaan pra Bayar & Paska Bayar</div></th>
		<th colspan="2" class="head0"><div align="center">Penjelasan terkait cara pembayaran paska bayar</div></th>
		<th colspan="6" class="head0"><div align="center">Menyampaikan penawaran program</div></th>
		<th colspan="2" class="head0"><div align="center">Trial Closing</div></th>
		<th colspan="2" class="head0"><div align="center">Legal Statement</div></th>
		<th colspan="2" class="head0"><div align="center">Konfirmasi penjelasan ke pelanggan</div></th>
		<th colspan="2" class="head0"><div align="center">Input Accuracy Data / Information</div></th>
		  
		  <th width="4%" rowspan="2" colspan="4" class="head0"><div align="center">Total</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">Score</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">NOE</div></th>
		</tr>
		<tr bgcolor="#CCCCCC">
		<th colspan="2" class="head0"><div align="center">Melakukan konfirmasi data pelanggan</div></th>
		<th colspan="2" class="head0"><div align="center">Meminta waktu pelanggan</div></th>
		<th colspan="2" class="head0"><div align="center">Menyampaikan tujuan menelepon untuk penawaran</div></th>
		<th colspan="2" class="head0"><div align="center">Menyampaikan perbedaan pra bayar dan paska bayar dengan benar</div></th>
		<th colspan="2" class="head0"><div align="center">Menjelaskan terkait cara pembayaran paska bayar</div></th>
		<th colspan="2" class="head0"><div align="center">Menyampaikan nama program product dengan benar</div></th>
		<th colspan="2" class="head0"><div align="center">Menyampaikan benefit program dengan benar</div></th>
		<th colspan="2" class="head0"><div align="center">Menyampaikan biaya program dengan akurat</div></th>
		<th colspan="2" class="head0"><div align="center">MenyampaikanMenanyakan Persetujuan pelanggan (Proses Agreement)</div></th>
		<th colspan="2" class="head0"><div align="center">Menyebutkan legal statement sales</div></th>
		<th colspan="2" class="head0"><div align="center">Menyampaikan konfirmasi kepada pelanggan jika ada keraguan atau pertanyaan</div></th>
		<th colspan="2" class="head0"><div align="center">TSO membuat dan menjalankan tahapan input data sesuai dengan ketentuan. TSO menulisakan notes dengan lengkap dan benar</div></th>
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

		$a_user="[new_report_telesalesnew]'table_qm_telesalesnew','$report_by','$date_eva1','$date_eva2','$select_region','summary','' ";
		// echo"$a_user";
		
		$b_user=mssql_query($a_user);
		$no=1;
		$sample=0;
		while($c_user=mssql_fetch_array($b_user)){
			echo "<tr class='content'>
				<td>$no</td>
				<td align='left'>".$c_user['nik_karyawan']."</td>
				<td align='left'>".$c_user['full_name']."</td>
				<td align='left'>".$c_user['nama_unit']."</td>
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
				<td>".$c_user['q11_no']."</td>
				<td>".$c_user['q12_yes']."</td>
				<td>".$c_user['q12_no']."</td>";
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

		$a_user="[new_report_telesalesnew]'table_qm_telesalesnew','$report_by','$date_eva1','$date_eva2','$select_region','detail','' ";
		//echo"$a_user";
		
		$b_user=mssql_query($a_user);
		$no=1;
		$tmp='';
		$sample=0;
		while($c_user=mssql_fetch_array($b_user)){
			
			echo "<tr class='content'>";
			
			if($c_user['noe']>1 and $tmp!=$c_user['id_pribadi_user']){
				echo "<td rowspan='".$c_user['noe']."'>$no</td>
					  <td rowspan='".$c_user['noe']."' align='left'>".$c_user['nik_karyawan']."</td>
					  <td rowspan='".$c_user['noe']."' align='left'>".$c_user['full_name']."</td>
					  <td rowspan='".$c_user['noe']."' align='left'>".$c_user['nama_unit']."</td>";
				$no++;
			}else if($c_user['noe']==1){
				echo "<td>$no</td>
					  <td align='left'>".$c_user['nik_karyawan']."</td>
					  <td align='left'>".$c_user['full_name']."</td>
					  <td align='left'>".$c_user['nama_unit']."</td>";
				$no++;
			}
				echo "
				<!--<td>".$c_user['observation_date']."</td>-->
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
				<td>".$c_user['q11_no']."</td>
				<td>".$c_user['q12_yes']."</td>
				<td>".$c_user['q12_no']."</td>";
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
			echo "
				</tr>";
			$tmp=$c_user['id_pribadi_user'];
			$sample++;
		}
	}
	?>
		</tbody>
	</table>
	<br>
	
	<?php echo 'Total Sample : '.$sample; ?>
<? } ?>
