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
<table width="100%" border="1" align="center" cellspacing="1">
    <tr bgcolor="#CCCCCC">
      <td width="1%" class="header"><div align="center">No</div></td>
      <td width="4%" class="header"><div align="center">Agent Name</div></td>
      <td width="2%" class="header"><div align="center">Brand</div></td>
      <td width="2%" class="header"><div align="center">Tenure</div></td>
      <td width="2%" class="header"><div align="center">NOE</div></td>
      <td width="2%" class="header"><div align="center">Observasi</div></td>
      <td width="2%" class="header"><div align="center">AHT</div></td>
      <td width="2%" class="header"><div align="center">FE Score</div></td>
     
	</tr>
    <?
	include "../konek_qm.php";
	
	$date_eva1 = $_GET['date_eva1'];
	$date_eva2 = $_GET['date_eva2'];
	
	//edit hendi
	$itung1="[sp_count]'table_qm','$date_eva1','$date_eva2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%'";
	//echo $itung1;
	 $queryitung1=mssql_query($itung1);
	 $hasilitung1=mssql_fetch_array($queryitung1);
	 $jum_tot1=$hasilitung1["jum_s"];
	 
	 $itung2="[sp_count]'table_qm_iic','$date_eva1','$date_eva2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%'";
	 //echo $itung2;
	 $queryitung2=mssql_query($itung2);
	 $hasilitung2=mssql_fetch_array($queryitung2);
	 $jum_tot2=$hasilitung2["jum_s"];
	 
	 $itung3="[sp_count]'table_qm_sli','$date_eva1','$date_eva2','$report_by','%$kd_unit%','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%-%','%-%','%-%','%-%','%-%','%-%','%-%','$c_observer','%$nik_agent%'";
	// echo $itung3;
	 $queryitung3=mssql_query($itung3);
	 $hasilitung3=mssql_fetch_array($queryitung3);
	 $jum_tot3=$hasilitung3["jum_s"];
	  
	  $jum_tot = $jum_tot1+$jum_tot2+$jum_tot3;


					include "../konek_qm.php";
					/*
					$q_user="[sp_search]'table_qm','$report_by','%$kd_unit%','$date_eva1','$date_eva2','%$cc_mentari%','%$cc_im3%','%$cc_pp%','%$cc_matrix%','%$cc_ftm%','%$cc_m2%','$c_observer','%$nik_agent%'";
					
					
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
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na") and ($q20=="yes" or $q20=="na"))
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

		if ($q18=="yes" or $q18=="na")
		{
		$sc_q18="1";
		}
		else
		{
		$sc_q18="0";
		}

		if ($q19=="yes" or $q19=="na")
		{
		$sc_q19="1";
		}
		else
		{
		$sc_q19="0";
		}
		

		
$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q7+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12+$sc_q13+$sc_q14+$sc_q15+$sc_q16+$sc_q17+$sc_q18+$sc_q19;
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
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na") and ($q20=="yes" or $q20=="na"))
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

		if ($q18=="yes" or $q18=="na")
		{
		$sc_q18="1";
		}
		else
		{
		$sc_q18="0";
		}

		if ($q19=="yes" or $q19=="na")
		{
		$sc_q19="1";
		}
		else
		{
		$sc_q19="0";
		}
		

		
$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q7+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12+$sc_q13+$sc_q14+$sc_q15+$sc_q16+$sc_q17+$sc_q18+$sc_q19;
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
					$q_user1="select nama as observer_name from hrms.dbo.tb_data_pribadi where cast(id_data_pribadi as varchar)='$observer' ";
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
			}
			if ($repeat=="no")
			{
			$s_date_prev_call="-"; 
			$s_prev_agent="-";
			}
			
						$hhtomm1=($hh_handling_time*3600)+($mm_handling_time*60)+($ss_handling_time);
			


  
        echo "<tr>
						<td>$no</td>  
						<td>$userid</td>
                      	<td>$lb</td>
						<td>$spv_name</td> 
						<td>$interaction_date</td>
						<td>$observation_date</td>
						<td>$week_</td>
						<td>$customer_name</td>
						<td>$interaction_type</td>
                      </tr>";
					  $no++;
					  } */?> 
		<?  
		$q_user= "
select brand,id_pribadi_user, nama ,nama_unit, tenure, sum(NOE)as NOE, avg(observasi) as observasi,
 sum(jum_hh) as hh, sum(jum_mm) as mm, sum(jum_ss) as ss, fe  from (

	select 'Inbound' as brand,id_pribadi_user, nama, nama_unit, c.tenure,count(a.id_qm) as NOE, avg(tot_score) as observasi, 
sum(hh_handling_time) as jum_hh,sum(mm_handling_time) as jum_mm ,sum(ss_handling_time) as jum_ss,
sum(case when q4 ='no' or q5 ='no' or q6 ='no'or q20 ='no' then 0 else 1 end)as fe
from table_qm a
inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user = b.id_data_pribadi
inner join hrms.dbo.tb_unit d on a.id_unit = d.id_unit
inner join table_qm_detail c on a.id_qm = c.id_qm
where date_saved between '$date_eva1' and '$date_eva2'
group by id_pribadi_user, nama, nama_unit, tenure
	union

	select 'IIC' as brand,id_pribadi_user, nama, nama_unit, c.tenure,count(a.id_qm) as NOE, avg(tot_score) as observasi, 
sum(hh_handling_time) as jum_hh,sum(mm_handling_time) as jum_mm ,sum(ss_handling_time) as jum_ss, 
sum(case when q4 ='no' or q5 ='no' then 0 else 1 end)as fe
from table_qm_iic a
inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user = b.id_data_pribadi
inner join hrms.dbo.tb_unit d on a.id_unit = d.id_unit
inner join table_qm_iic_detail c on a.id_qm = c.id_qm
where date_saved between '$date_eva1' and '$date_eva2'
group by id_pribadi_user, nama, nama_unit, tenure

	union 

select 'SLI' as brand,id_pribadi_user, nama, nama_unit, c.tenure,count(a.id_qm) as NOE, avg(tot_score) as observasi, 
sum(hh_handling_time) as jum_hh,sum(mm_handling_time) as jum_mm ,sum(ss_handling_time) as jum_ss,

sum(case when q4 ='no' or q5 ='no' or q6 ='no'or q20 ='no' then 0 else 1 end)as fe

from table_qm_sli a
inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user = b.id_data_pribadi
inner join hrms.dbo.tb_unit d on a.id_unit = d.id_unit
inner join table_qm_sli_detail c on a.id_qm = c.id_qm
where date_saved between '$date_eva1' and '$date_eva2'
group by id_pribadi_user, nama, nama_unit, tenure
) t  group by id_pribadi_user, nama ,nama_unit, tenure,noe,fe,brand";

	$qry = mssql_query($q_user);
	$no = 1;
	while ($array = mssql_fetch_Array ($qry))
	{
	$nama = $array ['nama'];
	$brand = $array['brand'];
	$tenure = $array['tenure'];
	$noe = $array ['NOE'];
	$observasi = $array['observasi'];
	$hh = $array['hh'];
	$mm = $array ['mm'];
	$ss = $array['ss'];
	$fe = $array['fe'];
	
	$hhtomm=(($hh*3600)+($mm*60)+$ss)/$noe;
			//echo $hhtomm;
			//echo "jumtot$noe";
			//echo $d_stot_hh; echo $d_tot_mm; echo $d_tot_ss; echo $jum_tot;
			
			$iHours1 = Floor($hhtomm / 3600);
					//echo"vvv$iHours1";
			$Minutes1 = Floor(($hhtomm - ($iHours1 * 3600))/ 60) ;
					//echo"dddd$Minutes1";
			$Seconds1 =  ($hhtomm - (($iHours1 * 3600)+($Minutes1 * 60))) ;
	
	$fe_score = $fe/$noe*100;				
			  
	?>
	
	<tr>
      <td><? echo $no; ?></td>
	  <td><? echo $nama; ?></td>
      <td><? echo $brand; ?></td>
      <td><? echo $tenure; ?></td>
      <td><? echo $noe; ?></td>
      <td><? printf("%1.2f", $observasi); ?></td>
      <td><? echo"$iHours1:$Minutes1:";printf("%1.0f ", $Seconds1); ?></td>
      <td><? printf("%1.2f", $fe_score); ?> %</td>
     
    </tr>
	<? $no++;
	}
	$noo = $no-1;
	

?>
  </table>
