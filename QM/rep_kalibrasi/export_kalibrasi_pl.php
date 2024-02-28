<?php
/////////////////////////////////export to excel ///////////////////////////////////////////
// Here we tell the browser that this is an excel file.
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=report_kalibrasi_pl.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 

include "../konek_qm.php";
?>
<style> .str{ mso-number-format:\@; } </style>
  <p>&nbsp;</p>
  <table width="368%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
  <thead>
      <tr bgcolor="#CCCCCC">
        <th width="1%" rowspan="3" class="head0 nosort"><div align="center">No</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Area</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Username</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Region</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Nama</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">TL Name</div></th>
        
		<th width="2%" rowspan="3" class="head0"><div align="center">MSISDN</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Customer Name </div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Interaction Date</div></th>
		<th width="2%" rowspan="3" class="head0"><div align="center">Interaction Time</div></th>
		<th width="2%" rowspan="3" class="head0"><div align="center">Observation Date</div></th>
		<th width="2%" rowspan="3" class="head0"><div align="center">Validation Date </div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Duration</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Week</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Interaction Type</div></th>
        <th width="1%" colspan="2" class="head0"><div align="center">Product Knowledge</div></th>
        <th width="1%" colspan="2" class="head0"><div align="center">Activity Code</div></th>
        <th width="1%" rowspan="3" class="head0"><div align="center">Handling Process </div></th>
        <th width="1%" colspan="2" class="head0"><div align="center">FCR</div></th>
        <th width="1%" colspan="2" class="head0"><div align="center">Repetitive Call</div> </th>
		
        <th colspan="6" class="head0"><div align="center">Personalize Communication after Reborn</div></th>
        <th width="2%" rowspan="3" class="head0"><div align="center">Observer</div></th>
		<th width="2%" rowspan="3" class="header"><div align="center">Validation</div></th>
		<th width="2%" rowspan="3" class="header"><div align="center">Validator</div></th>
      </tr>
	  <tr bgcolor="#CCCCCC">
      	  <th rowspan="2" class="head0"><div align="center">Y/N </div></th>
          <th rowspan="2" class="head0"><div align="center">Notes </div></th>
		  
      	  <th rowspan="2" class="head0"><div align="center">Y/N </div></th>
          <th rowspan="2" class="head0"><div align="center">Notes </div></th>		  

		  <th rowspan="2" class="head0"><div align="center">Y/N </div></th>
          <th rowspan="2" class="head0"><div align="center">Notes </div></th>
          
		  <th rowspan="2" class="head0"><div align="center">Y/N </div></th>
          <th rowspan="2" class="head0"><div align="center">Notes </div></th>
		  
          <th colspan="2" class="head0"><div align="center">Antusiasm </div></th>
          <th colspan="2" class="head0"><div align="center">Manner </div></th>
		  <th colspan="2" class="head0"><div align="center">Effective Handling</div></th>
	  </tr>
	  	  <tr bgcolor="#CCCCCC">
      	  <th width="1%" class="head0"><div align="center">Y/N </div></th>
          <th width="3%" class="head0"><div align="center">Notes </div></th>

		  <th width="1%" class="head0"><div align="center">Y/N </div></th>
          <th width="3%" class="head0"><div align="center">Notes </div></th>
          
		  <th width="1%" class="head0"><div align="center">Y/N </div></th>
          <th width="3%" class="head0"><div align="center">Notes </div></th>
	  </tr>
    </thead>
    <?
	include "../konek_qm.php";
	 $itung="[sp_count_kalibrasi_pl]'$date_eva1','$date_eva2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
	 $queryitung=mssql_query($itung);
	 $hasilitung=mssql_fetch_array($queryitung);
	 $jum_tot=$hasilitung["jum_s"];
	//echo $itung;
	//end edit
//echo "$q1_yes_jum";

	if(($jum_tot<>"0") or ($kd_del=="ok"and $jum_tot<>"0"))
					{
					include "../konek_qm.php";
					
					//$q_user="[sp_search_kalibrasi]'table_kalibrasi','table_qm','$report_by','%$kd_unit%','$date_eva1','$date_eva2','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
					$q_user="[sp_search_kalibrasi_pl]'$report_by','%$kd_unit%','$date_eva1','$date_eva2','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$select_region','$c_observer','%$nik_agent%'";
					//echo $q_user;
					//echo "456456";
					
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$date_saved=$d_user["date_saved"];
						$nik_karyawan=$d_user["nik_karyawan"];
						$nama_unit=$d_user["nama_unit"];
						$nama=$d_user["nama"];
						$spv=$d_user["tl_name"];
						$customer_name=$d_user["customer_name"];
						$msisdn=$d_user["msisdn"];
						$interaction_date=$d_user["interaction_date"];
						$interaction_time=$d_user["interaction_time"];
						$observation_date=$d_user["observation_date"];
						$hh_dur = $d_user["hh_duration"];
						$mm_dur = $d_user["mm_duration"];
						$ss_dur = $d_user["ss_duration"];
						$week_=$d_user["week_"];
						$interaction_type=$d_user["interaction_type"];
						$product_knowledge=$d_user["product_knowledge"];
						$notes_pk=$d_user["notes_pk"];
						$activity_code=$d_user["activity_code"];
						$notes_ac=$d_user["notes_ac"];
						$handling_process=$d_user["handling_process"];
						$fcr=$d_user["fcr"];
						$notes_fcr=$d_user["notes_fcr"];
						$repeat=$d_user["repeat"];
						$notes_repeat=$d_user["notes_repeat"];
						$antusiasm=$d_user["antusiasm"];
						$notes_antusiasm=$d_user["notes_antusiasm"];
						$manner=$d_user["manner"];
						$notes_manner=$d_user["notes_manner"];
						$effective_handling=$d_user["effective_handling"];
						$notes_eh=$d_user["notes_eh"];
						$region=$d_user["region"];
						$id_pribadi_user=$d_user["id_pribadi_user"];
						$kd_unit=$d_user["kd_unit"];
						$id_unit=$d_user["kd_unit"];
						$observer=$d_user["id_pribadi_observer"];
						$tl_name=$d_user["tl_name"];
						$id_qm=$d_user["id_qm"];
						$id_kalibrasi=$d_user["id_kalibrasi"];
						$kalibrasi=$d_user["kalibrasi"];
						$agree=$d_user["kalibrasi"];
						$notes_score=$d_user["notes_score"];
						
						echo "<tr class='content'>
                      <td>$no</td>";
					  if ($SES_KODE_LEVEL<>"mitra"){
					  					  echo "</td>";
					  
						 }		  
					  		
					$q_user1="select nama as observer_name
						  	from hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer' ";
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
			  
        echo"         
						<td>$nama_unit</td>
						<td>$nik_karyawan</td>
						<td>$region</td>
						<td>$nama</td>
						<td>$spv</td>
						<td class='str'>$msisdn</td>
						<td>$customer_name</td>
					 	<td>$interaction_date</td>
						<td>$interaction_time</td>
						<td>$observation_date</td>
						<td>$date_saved</td>
						<td>$hh_dur:$mm_dur:$ss_dur</td>
						<td>$week_</td>
						<td>$interaction_type</td>
						<td>$product_knowledge</td>	
						<td>$notes_pk</td>	
						<td>$activity_code</td>
						<td>$notes_ac</td>						
						<td>$handling_process</td>	
						<td>$fcr</td>	
						<td>$notes_fcr</td>	
						<td>$repeat</td>
						<td>$notes_repeat</td>
						<td>$antusiasm</td>	
						<td>$notes_antusiasm</td>
						<td>$manner</td>	
						<td>$notes_manner</td>
						<td>$effective_handling</td>
						<td>$notes_eh</td>
						<td>$observer_name</td>
						<td>$notes_score</td>  
						<td>$kalibrasi_name</td>
                      </tr>";
					  $no++;
					  
						}
						
					?> </a>
  </table>
  <p>Total data : <? echo"$jum_tot"; ?></p>
  <table width="700" border="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="5" class="head0"><div align="center">No</div></th>
      <th width="242" class="head0"><div align="center">Attributes</div></th>
      <th width="30" class="head0"><div align="center">Y</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
      <th width="30" class="head0"><div align="center">N</div></th>
      <th width="30" class="head0"><div align="center">%</div></th>
    </tr>
	</thead>
    <tr>
      <td>1</td>
      <td>Product Knowledge</td>
      <td><?  
	  //edit hendi
      $queryhendi="[sp_reportqm_kalibrasi_pl]'$date_eva1','$date_eva2','$report_by','$c_observer','%$nik_agent%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','%$kd_unit%','%%','$select_region'";
	  $proses=mssql_query($queryhendi);
	  $result=mssql_fetch_array($proses);
	  //echo $queryhendi;
		
			$pk_tot_y=$result["pk_yes"];
			echo"$pk_tot_y";
			
			//$q1_avg=$result["avg1"];
			
		?>
	  </td>
	  <td>
		<?
			$prosen_pk_y =($pk_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_pk_y);
		?>
	  </td>
	  <td>
		<?  
		  	$pk_tot_n=$result["pk_no"];
			echo"$pk_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_pk_n =($pk_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_pk_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Activity Code </td>
      <td>
		<?  
		  	$ac_tot_y=$result["ac_yes"];
			echo"$ac_tot_y";
			
			//$q3_avg=$result["avg3"];
		?>
	  </td>
	  <td>
		<?
			$prosen_ac_y =($ac_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_ac_y);
		?>
	  </td>
	  <td>
		<?  
		  	$ac_tot_n=$result["ac_no"];
			echo"$ac_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_ac_n =($ac_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_ac_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>3</td>
      <td>FCR </td>
      <td>
		<?  
		  	$fcr_tot_y=$result["fcr_yes"];
			echo"$fcr_tot_y";
			
			//$q3_avg=$result["avg3"];
		?>
	  </td>
	  <td>
		<?
			$prosen_fcr_y =($fcr_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_fcr_y);
		?>
	  </td>
	  <td>
		<?  
		  	$fcr_tot_n=$result["fcr_no"];
			echo"$fcr_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_fcr_n =($fcr_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_fcr_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>4</td>
      <td>Repetitive Call</td>

      <td>
		<?  
		  	$rpt_tot_y=$result["repeat_yes"];
			echo"$rpt_tot_y";
			
			//$q7_avg=$result["avg7"];
		?>
	  </td>
	  <td>
		<?
			$prosen_rpt_y =($rpt_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_rpt_y);
		?>
	  </td>
	  <td>
		<?  
		  	$rpt_tot_n=$result["repeat_no"];
			echo"$rpt_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_rpt_n =($rpt_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_rpt_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>5</td>
      <td>Antusiasm</td>

      <td>
		<?  
		  	$antusiasm_tot_y=$result["antusiasm_yes"];
			echo"$antusiasm_tot_y";
			
			//$q8_avg=$result["avg8"];
		?>
	  </td>
	  <td>
		<?
			$prosen_antusiasm_y=($antusiasm_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_antusiasm_y);
		?>
	  </td>
	  <td>
		<?  
		  	$antusiasm_tot_n=$result["antusiasm_no"];
			echo"$antusiasm_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_antusiasm_n =($antusiasm_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_antusiasm_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>6</td>
      <td>Manner</td>
      <td>
		<?  
		  	$manner_tot_y=$result["manner_yes"];
			echo"$manner_tot_y";
			
			//$q10_avg=$result["avg10"];
		?>
	  </td>
	  <td>
		<?
			$prosen_manner_y =($manner_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_manner_y);
		?>
	  </td>
	  <td>
		<?  
		  	$manner_tot_n=$result["manner_no"];
			echo"$manner_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_manner_n =($manner_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_manner_n);
		?>
	  </td>
    </tr>
    <tr>
      <td>7</td>
      <td>Effective Handling</td>

      <td>
		<?  
		  	$eh_tot_y=$result["eh_yes"];
			echo"$eh_tot_y";
			
			//$q11_avg=$result["avg11"];
		?>
	  </td>
	  <td>
		<?
			$prosen_eh_y =($eh_tot_y/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_eh_y);
		?>
	  </td>
	  <td>
		<?  
		  	$eh_tot_n=$result["eh_no"];
			echo"$eh_tot_n";
		?>
	  </td>
	  <td>
		<?
			$prosen_eh_n =($eh_tot_n/$jum_tot)*100 ;
			printf("%1.2f ", $prosen_eh_n);
		?>
	  </td>
    </tr>
  </table>
  <p>&nbsp;</p>
 <table width="264" border="1" class="table table-bordered table-infinite">
  <?  
if ($select_region !="") {
	  			if ($report_by=="Unit")
				  	{
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_kalibrasi_pl a
					   inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					   where b.region ='$select_region' and repeat='yes' 
					   and a.kd_unit like '%$kd_unit%' and  convert(varchar,a.observation_date,112) between '$date_eva1' and '$date_eva2'";
	   				}
	  			if ($report_by=="Departement")
				  	{	
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_kalibrasi_pl a 
					  inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					  where b.region ='$select_region' and repeat='yes'
					  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%')
					  and  convert(varchar,a.observation_date,112) between '$date_eva1' and'$date_eva2'"; 
					}
			}
			else {
	  			if ($report_by=="Unit")
				  	{
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_kalibrasi_pl a 
					   inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					   where repeat='yes' 
					   and a.kd_unit like '%$kd_unit%' and  convert(varchar,a.observation_date,112) between '$date_eva1' and '$date_eva2'";
	   				}
	  			if ($report_by=="Departement")
				  	{	
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_kalibrasi_pl a 
					  inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi
					  where repeat='yes'
					  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%')
					  and  convert(varchar,a.observation_date,112) between '$date_eva1' and'$date_eva2'"; 
					}
			}		
	  			if ($report_by=="Observer")
				  	{
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_kalibrasi_pl a
					  			inner join hrms.dbo.tb_data_pribadi z  on a.id_pribadi_observer=cast(id_data_pribadi as varchar)
					  			where repeat='yes' and  cast(id_data_pribadi as varchar)='$c_observer'
					  			and  convert(varchar,a.observation_date,112) between '$date_eva1' and '$date_eva2'";  
					}
					
	  			if ($report_by=="Agent")
				  	{	
					  $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_kalibrasi_pl a
					  			 inner join hrms.dbo.tb_data_pribadi z on a.id_pribadi_user=cast(id_data_pribadi as varchar)
					  			where repeat='yes' and  (z.nik_karyawan like '%$nik_agent%' or z.nama like '%$nik_agent%')
					  			and  convert(varchar,a.observation_date,112) between '$date_eva1' and '$date_eva2'";   
					}
					if ($report_by=="Skala")
				  	{	
					  /*$stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm a with(nolock) inner join db_qm.dbo.table_qm_detail b 
with(nolock) on a.id_qm=b.id_qm where a.status_save='complete' and repeat='yes' and convert(varchar,a.date_saved,112) 
between '$date_eva1' and '$date_eva2' and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%' AND a.id_qm in( select id_qm from 
( select a.id_qm,b.repeat, 
case when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 90 then 'A' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 80 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 90 then 'B' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 70 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 80 then 'C' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 >= 60 and sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14)
 < 70 then 'D' when sum ( save_q1+save_q2+save_q3+save_q4+save_q5+save_q6+save_q7+save_q8+save_q9+save_q10+save_q11+save_q12+save_q13+save_q14) 
< 60 then 'E' end 'Skala' from db_qm.dbo.table_qm a with(nolock) 
inner join db_qm.dbo.table_qm_detail b with(nolock) on a.id_qm=b.id_qm
 where a.status_save='complete' and convert(varchar,a.date_saved,112) 
  between '$date_eva1' and '$date_eva2' and a.id_unit like '%$departemen_skala%' and a.id_unit like '%$unit_skala%'
   and b.repeat='yes' group by a.id_qm,b.repeat ) AA where Skala like '%$skala' )
";   */
					}
				//echo $stot_fcr;
				//echo $stot_rep;
	   
		    $r_stot_rep=mssql_query($stot_rep);
		    while($d_stot_rep=mssql_fetch_array($r_stot_rep))
			{
				$rep_tot_y=$d_stot_rep["jum_s_rep"];
			} 			
		?>
	<tr>
      <td width="180">Total Sample</td>
      <td width="68"><? echo $jum_tot;?></td>
    </tr>
	<tr>
      <td width="180">Total FCR</td>
      <td width="68">
		<? $fcr_tot_y=$result["fcr_yes"];
		   echo"$fcr_tot_y";
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">%FCR</td>
      <td width="68">
		<?  
			$fcr_tot_n=$result["fcr_yes"];
			//$prosen_q6_n =($q6_tot_n/$jum_tot)*100 ;
			//$prosen_end=100-$prosen_q6_n;
			$has=($fcr_tot_n/$jum_tot)*100;
			//echo "jum : $jum_tot rep : $rep_tot_y fcr : $fcr_tot_n $has";
			printf("%1.2f ", $has);
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">Total Repetitive Call</td>
      <td width="68">
		<? $repeat_tot_y=$result["repeat_yes"];
		   echo"$repeat_tot_y";
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">% Repetitive Call</td>
      <td width="68">
		<?  		
			$rpt_tot_n=$result["repeat_yes"];
			//$prosen_q6_n =($q6_tot_n/$jum_tot)*100 ;
			//$prosen_end=100-$prosen_q6_n;
			$has=($rpt_tot_n/$jum_tot)*100;
			//echo "jum : $jum_tot rep : $rep_tot_y fcr : $fcr_tot_n $has";
			printf("%1.2f ", $has);
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">% Product Knowledge Accuration</td>
      <td width="68">
		<?  
	  		$pk_tot_y=$result["pk_yes"];
			//$prosen_q6_n =($q6_tot_n/$jum_tot)*100 ;
			//$prosen_end=100-$prosen_q6_n;
			$has=($pk_tot_y/$jum_tot)*100;
			//echo "jum : $jum_tot rep : $rep_tot_y fcr : $fcr_tot_n $has";
			printf("%1.2f ", $has);
		?>
	  </td>
    </tr>
	<tr>
      <td width="180">Average Handling Time</td>
      <td width="68">
		<?  
			//$stot_hh="[sp_handling3]'table_qm','$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region','$skala','$departemen_skala','$unit_skala'";
			$stot_hh="[sp_handling_kalibrasi_pl]'$report_by','$date_eva1','$date_eva2','$kd_unit','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%','$select_region'";
			//echo "$stot_hh";	
		    $r_stot_hh=mssql_query($stot_hh);
		    while($d_stot_hh=mssql_fetch_array($r_stot_hh))
			{
				$d_tot_hh=$d_stot_hh["jum_hh"];
				$d_tot_mm=$d_stot_hh["jum_mm"];
				$d_tot_ss=$d_stot_hh["jum_ss"];
			} 
			$hhtomm=(($d_tot_hh*3600)+($d_tot_mm*60)+$d_tot_ss)/$jum_tot;
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
			
}?>
	  </td>
    </tr>
  </table>

