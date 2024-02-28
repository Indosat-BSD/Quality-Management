<?php
/////////////////////////////////export to excel ///////////////////////////////////////////
// Here we tell the browser that this is an excel file.
header("Content-type: application/octet-stream"); 
header("Content-Disposition: attachment; filename=report.xls"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 

$user = "sa";		//MySQL Username
$password = "otak-otak";		// MySQL Username's Password
$dbname= "db_qm";		//Database Name

// localhost is the default database hosf for most servers, you might need to change yours if it doesnt work
$global_dbh = mssql_connect("csogateway", $user, $password); // This establishes the database connection

mssql_select_db($dbname, $global_dbh);// Select what database to use
?>
<p>&nbsp;</p>
<table width="368%" border="1" align="center" cellspacing="1">
  <tr bgcolor="#CCCCCC">
    <td width="1%" rowspan="2" class="header"><div align="center">No</div></td>
    <td width="4%" rowspan="2" class="header"><div align="center">Username</div></td>
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
    <td width="2%" rowspan="2" class="header"><div align="center">Repeat (Y / N)</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Date of previous call</div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Previous Agent </div></td>
    <td width="2%" rowspan="2" class="header"><div align="center">Handling time (duration)</div></td>
    <td rowspan="2" class="header">Handling Time (second) </td>
      <td rowspan="2" class="header"><div align="center">Drop Call</div></td>
      <td colspan="3" class="header"><div align="center">Opening Greeting</div></td>
      <td colspan="3" class="header"><div align="center">Verify Customer Data</div></td>
      <td colspan="3" class="header"><div align="center">Identify Customer Needs</div></td>
      <td colspan="3" class="header"><div align="center">Correct Answer </div></td>
      <td colspan="3" class="header"><div align="center">Manner</div></td>
      <td colspan="3" class="header"><div align="center">Communication Skill </div></td>
      <td colspan="3" class="header"><div align="center">Greet Customer Name</div></td>
      <td colspan="3" class="header"><div align="center">Hold</div></td>
      <td colspan="3" class="header"><div align="center">Closing Greeting</div></td>
      <td colspan="3" class="header"><div align="center">Input Accuracy Data / Information </div></td>
      <td colspan="3" class="header"><div align="center">Campaign/ Cross Selling/ UpSelling/ Survey</div></td>
    <td width="4%" rowspan="2" class="header"><div align="center">FE Accuracy </div></td>
    <td width="4%" rowspan="2" class="header"><div align="center">NFE Accuracy </div></td>
    <td width="4%" rowspan="2" class="header"><div align="center">Total Score </div></td>
    <td width="4%" rowspan="2" class="header"><div align="center">Skala</div></td>
    <td width="4%" rowspan="2" class="header">Recommendation</td>
    <td width="4%" colspan="2" rowspan="2" class="header"><div align="center">Observer</div></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td width="1%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="5%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="1%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="5%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="2%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="3%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="3%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="3%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
    <td width="5%" class="header"><div align="center">Y/N/NA</div></td>
    <td width="5%" class="header"><div align="center">score</div></td>
    <td width="3%" class="header">Notes</td>
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
  </tr>
  <?
	include "../konek_qm.php";
	if ($report_by=="Unit")
	{
	 $stot="select count(*) as jum_s from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'";
	 	   $r_stot=mssql_query($stot);
	   while($d_stot=mssql_fetch_array($r_stot))
			{
		     	$jum_tot=$d_stot["jum_s"];
			} 	
	 } 
	if ($report_by=="Departement")
	{
	 $stot="select count(*) as jum_s from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and a.status_save='complete' and  a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'";
	 	   $r_stot=mssql_query($stot);
	   while($d_stot=mssql_fetch_array($r_stot))
			{
		     	$jum_tot=$d_stot["jum_s"];
			} 	
	 } 
	if ($report_by=="Observer")
	{
	 $stot="select count(*) as jum_s from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'";
	 	   $r_stot=mssql_query($stot);
	   while($d_stot=mssql_fetch_array($r_stot))
			{
		     	$jum_tot=$d_stot["jum_s"];
			} 	
	 } 
	if ($report_by=="Agent")
	{
	 $stot="select count(*) as jum_s from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'";
	 	   $r_stot=mssql_query($stot);
	   while($d_stot=mssql_fetch_array($r_stot))
			{
		     	$jum_tot=$d_stot["jum_s"];
			} 	
	 } 
//echo "$q1_yes_jum";
	  	

	if(($jum_tot<>"0") or ($kd_del=="ok"and $jum_tot<>"0"))
					{
					
					if ($report_by=="Unit")
					{
					$q_user="select c.recommendation,a.notes1,a.notes2,a.notes3,a.notes4,a.notes5,a.notes6,a.notes7,a.notes8,a.notes9,a.notes10,a.notes11,a.notes12,a.notes13,a.notes14,a.notes15,a.notes16,a.notes17,a.notes18,a.notes19,a.notes20,b.nik,c.spv_name, c.interaction_date,left(convert(varchar,c.observation_date,113),11) as observation_date,convert(varchar,c.observation_date,101) as observ, c.week_, c.customer_name, c.interaction_type,convert(varchar,c.interaction_date,101) as date, convert(varchar,c.interaction_date,108) as jam,convert(varchar,c.date_prev_call,101) as prev, c.product_type, c.product_detail, c.product_detail_agent, c.fcr, c.repeat, left(convert(varchar,c.date_prev_call,113),11) as date_prev_call, c.prev_agent, c.hh_handling_time, c.mm_handling_time, c.ss_handling_time, c.drop_call, a.id_qm,a.q1,a.save_q1,a.q2,a.save_q2,a.q3,a.save_q3,a.q4,a.save_q4,a.q5,a.save_q5,a.q6,a.save_q6,a.q7,a.save_q7,a.q8,a.save_q8,a.q9,a.save_q9,a.q10,a.save_q10,a.q11,a.save_q11,a.q12,a.save_q12,a.q13,a.save_q13,a.q14,a.save_q14,a.q15,a.save_q15,a.q16,a.save_q16,a.q17,a.save_q17,a.q18,a.save_q18,a.q19,a.save_q19,a.q20,a.save_q20,a.userid,b.full_name,a.observer,a.status_save,a.date_saved 
					from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c
					where a.id_qm=c.id_qm and a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'order by a.id_qm desc  ";
					}//echo "$q_user";
					if ($report_by=="Departement")
					{
					$q_user="select c.recommendation,a.notes1,a.notes2,a.notes3,a.notes4,a.notes5,a.notes6,a.notes7,a.notes8,a.notes9,a.notes10,a.notes11,a.notes12,a.notes13,a.notes14,a.notes15,a.notes16,a.notes17,a.notes18,a.notes19,a.notes20,b.nik,c.spv_name, c.interaction_date,left(convert(varchar,c.observation_date,113),11) as observation_date,convert(varchar,c.observation_date,101) as observ, c.week_, c.customer_name, c.interaction_type,convert(varchar,c.interaction_date,101) as date, convert(varchar,c.interaction_date,108) as jam,convert(varchar,c.date_prev_call,101) as prev, c.product_type, c.product_detail, c.product_detail_agent, c.fcr, c.repeat, left(convert(varchar,c.date_prev_call,113),11) as date_prev_call, c.prev_agent, c.hh_handling_time, c.mm_handling_time, c.ss_handling_time, c.drop_call, a.id_qm,a.q1,a.save_q1,a.q2,a.save_q2,a.q3,a.save_q3,a.q4,a.save_q4,a.q5,a.save_q5,a.q6,a.save_q6,a.q7,a.save_q7,a.q8,a.save_q8,a.q9,a.save_q9,a.q10,a.save_q10,a.q11,a.save_q11,a.q12,a.save_q12,a.q13,a.save_q13,a.q14,a.save_q14,a.q15,a.save_q15,a.q16,a.save_q16,a.q17,a.save_q17,a.q18,a.save_q18,a.q19,a.save_q19,a.q20,a.save_q20,a.userid,b.full_name,a.observer,a.status_save,a.date_saved 
					from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c
					where a.id_qm=c.id_qm and a.status_save='complete' and  a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'order by a.id_qm desc  ";
					}//echo "$q_user";

					if ($report_by=="Observer")
					{
					$q_user="select c.recommendation,a.notes1,a.notes2,a.notes3,a.notes4,a.notes5,a.notes6,a.notes7,a.notes8,a.notes9,a.notes10,a.notes11,a.notes12,a.notes13,a.notes14,a.notes15,a.notes16,a.notes17,a.notes18,a.notes19,a.notes20,b.nik,c.spv_name, c.interaction_date,left(convert(varchar,c.observation_date,113),11) as observation_date,convert(varchar,c.observation_date,101) as observ, c.week_, c.customer_name, c.interaction_type,convert(varchar,c.interaction_date,101) as date, convert(varchar,c.interaction_date,108) as jam,convert(varchar,c.date_prev_call,101) as prev, c.product_type, c.product_detail, c.product_detail_agent, c.fcr, c.repeat, left(convert(varchar,c.date_prev_call,113),11) as date_prev_call, c.prev_agent, c.hh_handling_time, c.mm_handling_time, c.ss_handling_time, c.drop_call, a.id_qm,a.q1,a.save_q1,a.q2,a.save_q2,a.q3,a.save_q3,a.q4,a.save_q4,a.q5,a.save_q5,a.q6,a.save_q6,a.q7,a.save_q7,a.q8,a.save_q8,a.q9,a.save_q9,a.q10,a.save_q10,a.q11,a.save_q11,a.q12,a.save_q12,a.q13,a.save_q13,a.q14,a.save_q14,a.q15,a.save_q15,a.q16,a.save_q16,a.q17,a.save_q17,a.q18,a.save_q18,a.q19,a.save_q19,a.q20,a.save_q20,a.userid,b.full_name,a.observer,a.status_save,a.date_saved 
					from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c
					where a.id_qm=c.id_qm and a.status_save='complete' and a.userid=b.username and a.observer='$c_observer'  and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'order by a.id_qm desc  ";
					}
					if ($report_by=="Agent")
					{
					$q_user="select c.recommendation,a.notes1,a.notes2,a.notes3,a.notes4,a.notes5,a.notes6,a.notes7,a.notes8,a.notes9,a.notes10,a.notes11,a.notes12,a.notes13,a.notes14,a.notes15,a.notes16,a.notes17,a.notes18,a.notes19,a.notes20,b.nik,c.spv_name, c.interaction_date,left(convert(varchar,c.observation_date,113),11) as observation_date,convert(varchar,c.observation_date,101) as observ, c.week_, c.customer_name, c.interaction_type,convert(varchar,c.interaction_date,101) as date, convert(varchar,c.interaction_date,108) as jam,convert(varchar,c.date_prev_call,101) as prev, c.product_type, c.product_detail, c.product_detail_agent, c.fcr, c.repeat, left(convert(varchar,c.date_prev_call,113),11) as date_prev_call, c.prev_agent, c.hh_handling_time, c.mm_handling_time, c.ss_handling_time, c.drop_call, a.id_qm,a.q1,a.save_q1,a.q2,a.save_q2,a.q3,a.save_q3,a.q4,a.save_q4,a.q5,a.save_q5,a.q6,a.save_q6,a.q7,a.save_q7,a.q8,a.save_q8,a.q9,a.save_q9,a.q10,a.save_q10,a.q11,a.save_q11,a.q12,a.save_q12,a.q13,a.save_q13,a.q14,a.save_q14,a.q15,a.save_q15,a.q16,a.save_q16,a.q17,a.save_q17,a.q18,a.save_q18,a.q19,a.save_q19,a.q20,a.save_q20,a.userid,b.full_name,a.observer,a.status_save,a.date_saved
					from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c
					where a.id_qm=c.id_qm and a.status_save='complete' and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.userid=b.username  and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'order by a.id_qm desc  ";
					}
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
						$userid=$d_user["nik"];
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
						$observer=$d_user["observer"];
						
						$notes1=$d_user["notes1"];
						$notes2=$d_user["notes2"];
						$notes3=$d_user["notes3"];
						$notes4=$d_user["notes4"];
						$notes5=$d_user["notes5"];
						$notes7=$d_user["notes7"];
						$notes8=$d_user["notes8"];
						$notes9=$d_user["notes9"];
						$notes10=$d_user["notes10"];
						$notes11=$d_user["notes11"];
						$notes12=$d_user["notes12"];
						
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
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na"))
		{
		$sc_fe="2";
		}
		if ($q4=="no" or $q5=="no")
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

		

		
$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q7+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12;
 					 	$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12;
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
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na"))
		{
		$sc_fe="2";
		}
		if ($q4=="no" or $q5=="no")
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

		
$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q7+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12;
 					 	$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12;
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
					$q_user1="select full_name as observer_name 
					from dev_asst.dbo.table_usr 
					where username='$observer' ";
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
			


    echo"
                      <td>$userid</td>
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
					  <td>$sc_fe</td>
                      <td>$sc_nfe</td>
					  <td>$total_score</td>
                      <td>$skala</td>
                      <td>$recommendation</td>
					  <td>$observer_name</td>
					  
                      </tr>";
					  $no++;
					  
						}
						
					

			
					?>
  </a>
</table>
<p>Total data : <? echo"$jum_tot"; ?></p>
<table width="408" border="1">
  <tr bgcolor="#CCCCCC">
    <td width="17"><div align="center">No</div></td>
    <td width="36"><div align="center">Value</div></td>
    <td width="138"><div align="center">Attributes</div></td>
    <td width="24"><div align="center">Yes</div></td>
    <td width="17"><div align="center">%</div></td>
    <td width="17"><div align="center">No</div></td>
    <td width="17"><div align="center">%</div></td>
    <td width="20"><div align="center">NA</div></td>
    <td width="17"><div align="center">%</div></td>
    <td width="41"><div align="center">AVG Score </div></td>
  </tr>
  <tr>
    <td>1</td>
    <td>NFE</td>
    <td>Opening Greeting</td>
    <td><?  
				  if ($report_by=="Unit")
				  	{
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
				  if ($report_by=="Departement")
				  	{
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='yes' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
				  if ($report_by=="Observer")
				  	{
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
				  if ($report_by=="Agent")
				  	{
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q1_tot_y=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q1_tot_y";
			
		?></td>
    <td><?
$prosen_q1_y =($q1_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_y);
			?></td>
    <td><?  
				  if ($report_by=="Unit")
				  	{				  
					$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					if ($report_by=="Departement")
				  	{				  
					$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='no' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}

				  if ($report_by=="Observer")
				  	{				  
					$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}

				  if ($report_by=="Agent")
				  	{				  
					$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}

	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q1_tot_n=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q1_tot_n";
			
		?></td>
    <td><?
$prosen_q1_y =($q1_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_y);
			?></td>
    <td><?  
				  if ($report_by=="Unit")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='na' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
				  if ($report_by=="Departement")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='na' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
				  if ($report_by=="Observer")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='na' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
				  if ($report_by=="Agent")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q1='na' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}

	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q1_tot_na=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q1_tot_na";
			
		?></td>
    <td><?
$prosen_q1_na =($q1_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q1_na);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$avg_q1="select avg(save_q1) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$avg_q1="select avg(save_q1) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$avg_q1="select avg(save_q1) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$avg_q1="select avg(save_q1) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_avg_q1=mssql_query($avg_q1);
	   while($d_avg_q1=mssql_fetch_array($r_avg_q1))
			{
		     	$q1_avg=$d_avg_q1["jum_avg"];
			} 		
			
			printf("%1.2f ", $q1_avg);
			
		?></td>
  </tr>
  <tr>
    <td>2</td>
    <td>NFE</td>
    <td>Verify Customer Data</td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}  
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='yes' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}  
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}  
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}  
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q2_tot_y=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q2_tot_y";
			
		?></td>
    <td><?
$prosen_q2_y =($q2_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='no' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}

	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q2_tot_n=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q2_tot_n";
			
		?></td>
    <td><?
$prosen_q2_y =($q2_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='na' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='na' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='na' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q2='na' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q2_tot_na=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q2_tot_na";
			
		?></td>
    <td><?
$prosen_q2_na =($q2_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q2_na);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$avg_q1="select avg(save_q2) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$avg_q1="select avg(save_q2) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$avg_q1="select avg(save_q2) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$avg_q1="select avg(save_q2) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_avg_q1=mssql_query($avg_q1);
	   while($d_avg_q1=mssql_fetch_array($r_avg_q1))
			{
		     	$q2_avg=$d_avg_q1["jum_avg"];
			} 		
			printf("%1.2f ", $q2_avg);
		?></td>
  </tr>
  <tr>
    <td>3</td>
    <td>NFE</td>
    <td>Identify Customer Needs</td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='yes' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					//echo"$stot_q1";
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q3_tot_y=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q3_tot_y";
			
		?></td>
    <td><?
$prosen_q3_y =($q3_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='no' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q3_tot_n=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q3_tot_n";
			
		?></td>
    <td><?
$prosen_q3_y =($q3_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='na' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='na' and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='na' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q3='na' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q3_tot_na=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q3_tot_na";
			
		?></td>
    <td><?
$prosen_q3_na =($q3_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q3_na);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$avg_q1="select avg(save_q3) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$avg_q1="select avg(save_q3) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$avg_q1="select avg(save_q3) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$avg_q1="select avg(save_q3) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_avg_q1=mssql_query($avg_q1);
	   while($d_avg_q1=mssql_fetch_array($r_avg_q1))
			{
		     	$q3_avg=$d_avg_q1["jum_avg"];
			} 		
			printf("%1.2f ", $q3_avg);
			
		?></td>
  </tr>
  <tr>
    <td>4</td>
    <td>FE</td>
    <td>Correct Answer </td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='yes' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q4_tot_y=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q4_tot_y";
			
		?></td>
    <td><?
$prosen_q4_y =($q4_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='no' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q4_tot_n=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q4_tot_n";
			
		?></td>
    <td><?
$prosen_q4_y =($q4_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='na' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='na' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='na' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4='na' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q4_tot_na=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q4_tot_na";
			
		?></td>
    <td><?
$prosen_q4_na =($q4_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q4_na);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
					  $avg_q1="select avg(save_q4) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
					  $avg_q1="select avg(save_q4) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
					  $avg_q1="select avg(save_q4) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
					  $avg_q1="select avg(save_q4) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_avg_q1=mssql_query($avg_q1);
	   while($d_avg_q1=mssql_fetch_array($r_avg_q1))
			{
		     	$q4_avg=$d_avg_q1["jum_avg"];
			} 		
		printf("%1.2f ", $q4_avg);
		?></td>
  </tr>
  <tr>
    <td>5</td>
    <td>FE</td>
    <td>Manner</td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='yes' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q5_tot_y=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q5_tot_y";
			
		?></td>
    <td><?
$prosen_q5_y =($q5_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='no' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q5_tot_n=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q5_tot_n";
			
		?></td>
    <td><?
$prosen_q5_y =($q5_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='na' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='na' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='na' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q5='na' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q5_tot_na=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q5_tot_na";
			
		?></td>
    <td><?
$prosen_q5_na =($q5_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q5_na);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$avg_q1="select avg(save_q5) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$avg_q1="select avg(save_q5) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$avg_q1="select avg(save_q5) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$avg_q1="select avg(save_q5) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_avg_q1=mssql_query($avg_q1);
	   while($d_avg_q1=mssql_fetch_array($r_avg_q1))
			{
		     	$q5_avg=$d_avg_q1["jum_avg"];
			} 		
		printf("%1.2f ", $q5_avg);
			
		?></td>
  </tr>
  <tr>
    <td>6</td>
    <td>NFE</td>
    <td> Communication Skill</td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='yes' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q7_tot_y=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q7_tot_y";
			
		?></td>
    <td><?
$prosen_q7_y =($q7_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='no' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q7_tot_n=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q7_tot_n";
			
		?></td>
    <td><?
$prosen_q7_y =($q7_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='na' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='na' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='na' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q7='na' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q7_tot_na=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q7_tot_na";
			
		?></td>
    <td><?
$prosen_q7_na =($q7_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q7_na);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $avg_q1="select avg(save_q7) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $avg_q1="select avg(save_q7) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $avg_q1="select avg(save_q7) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $avg_q1="select avg(save_q7) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_avg_q1=mssql_query($avg_q1);
	   while($d_avg_q1=mssql_fetch_array($r_avg_q1))
			{
		     	$q7_avg=$d_avg_q1["jum_avg"];
			} 		
		printf("%1.2f ", $q7_avg);
			
		?></td>
  </tr>
  <tr>
    <td>7</td>
    <td>NFE</td>
    <td>Greet Customer Name</td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='yes' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q8_tot_y=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q8_tot_y";
			
		?></td>
    <td><?
$prosen_q8_y =($q8_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='no' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q8_tot_n=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q8_tot_n";
			
		?></td>
    <td><?
$prosen_q8_y =($q8_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='na' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='na' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='na' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q8='na' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q8_tot_na=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q8_tot_na";
			
		?></td>
    <td><?
$prosen_q8_na =($q8_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q8_na);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $avg_q1="select avg(save_q8) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $avg_q1="select avg(save_q8) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Observer")
				  	{				  
				 	 $avg_q1="select avg(save_q8) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Agent")
				  	{				  
				 	 $avg_q1="select avg(save_q8) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	   $r_avg_q1=mssql_query($avg_q1);
	   while($d_avg_q1=mssql_fetch_array($r_avg_q1))
			{
		     	$q8_avg=$d_avg_q1["jum_avg"];
			} 		
		printf("%1.2f ", $q8_avg);
			
		?></td>
  </tr>
  <tr>
    <td>8</td>
    <td>NFE</td>
    <td>Hold</td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='yes' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q9_tot_y=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q9_tot_y";
			
		?></td>
    <td><?
$prosen_q9_y =($q9_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='no' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q9_tot_n=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q9_tot_n";
			
		?></td>
    <td><?
$prosen_q9_y =($q9_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='na' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='na' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='na' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q9='na' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q9_tot_na=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q9_tot_na";
			
		?></td>
    <td><?
$prosen_q9_na =($q9_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q9_na);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $avg_q1="select avg(save_q9) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $avg_q1="select avg(save_q9) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Observer")
				  	{				  
				 	 $avg_q1="select avg(save_q9) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Agent")
				  	{				  
				 	 $avg_q1="select avg(save_q9) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	   $r_avg_q1=mssql_query($avg_q1);
	   while($d_avg_q1=mssql_fetch_array($r_avg_q1))
			{
		     	$q9_avg=$d_avg_q1["jum_avg"];
			} 		
		printf("%1.2f ", $q9_avg);
			
		?></td>
  </tr>
  <tr>
    <td>9</td>
    <td>NFE</td>
    <td>Closing Greeting</td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='yes' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q10_tot_y=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q10_tot_y";
			
		?></td>
    <td><?
$prosen_q10_y =($q10_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='no' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q10_tot_n=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q10_tot_n";
			
		?></td>
    <td><?
$prosen_q10_y =($q10_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
					  $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='na' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
					  $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='na' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
					  $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='na' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
					  $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q10='na' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q10_tot_na=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q10_tot_na";
			
		?></td>
    <td><?
$prosen_q10_na =($q10_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q10_na);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $avg_q1="select avg(save_q10) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $avg_q1="select avg(save_q10) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $avg_q1="select avg(save_q10) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $avg_q1="select avg(save_q10) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_avg_q1=mssql_query($avg_q1);
	   while($d_avg_q1=mssql_fetch_array($r_avg_q1))
			{
		     	$q10_avg=$d_avg_q1["jum_avg"];
			} 		
		printf("%1.2f ", $q10_avg);
			
		?></td>
  </tr>
  <tr>
    <td>10</td>
    <td>NFE</td>
    <td>Input Accuracy Data / Information </td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='yes' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q11_tot_y=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q11_tot_y";
			
		?></td>
    <td><?
$prosen_q11_y =($q11_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
					  $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='no' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q11_tot_n=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q11_tot_n";
			
		?></td>
    <td><?
$prosen_q11_y =($q11_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='na' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='na' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='na' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q11='na' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q11_tot_na=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q11_tot_na";
			
		?></td>
    <td><?
$prosen_q11_na =($q11_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q11_na);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
					  $avg_q1="select avg(save_q11) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
	  			if ($report_by=="Departement")
				  	{				  
					  $avg_q1="select avg(save_q11) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Observer")
				  	{				  
					  $avg_q1="select avg(save_q11) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Agent")
				  	{				  
					  $avg_q1="select avg(save_q11) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	   $r_avg_q1=mssql_query($avg_q1);
	   while($d_avg_q1=mssql_fetch_array($r_avg_q1))
			{
		     	$q11_avg=$d_avg_q1["jum_avg"];
			} 		
		printf("%1.2f ", $q11_avg);
			
		?></td>
  </tr>
  <tr>
    <td>11</td>
    <td>NFE</td>
    <td>Campaign/ Cross Selling/ UpSelling/ Survey</td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='yes' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q12_tot_y=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q12_tot_y";
			
		?></td>
    <td><?
$prosen_q12_y =($q12_tot_y/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='no' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='no' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='no' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q12_tot_n=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q12_tot_n";
			
		?></td>
    <td><?
$prosen_q12_y =($q12_tot_n/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_y);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='na' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='na' and a.userid=b.username  and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='na' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_q1="select count(*) as jum_s_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q12='na' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_q1=mssql_query($stot_q1);
	   while($d_stot_q1=mssql_fetch_array($r_stot_q1))
			{
		     	$q12_tot_na=$d_stot_q1["jum_s_tot"];
			} 		
			echo"$q12_tot_na";
			
		?></td>
    <td><?
$prosen_q12_na =($q12_tot_na/$jum_tot)*100 ;
printf("%1.2f ", $prosen_q12_na);
			?></td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
					  $avg_q1="select avg(save_q12) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
	  			if ($report_by=="Departement")
				  	{				  
					  $avg_q1="select avg(save_q12) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Observer")
				  	{				  
					  $avg_q1="select avg(save_q12) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Agent")
				  	{				  
					  $avg_q1="select avg(save_q12) as jum_avg from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	   $r_avg_q1=mssql_query($avg_q1);
	   while($d_avg_q1=mssql_fetch_array($r_avg_q1))
			{
		     	$q11_avg=$d_avg_q1["jum_avg"];
			} 		
		printf("%1.2f ", $q11_avg);
			
		?></td>
  </tr>
</table>
<p>&nbsp;</p>
<table width="264" border="1">
  <tr>
    <td width="180">NFE Total </td>
    <td width="68"><? $nfe_total=$q1_tot_y+$q2_tot_y+$q3_tot_y+$q7_tot_y+$q8_tot_y+$q9_tot_y+$q10_tot_y+$q11_tot_y+$q12_tot_y+$q1_tot_na+$q2_tot_na+$q3_tot_na+$q7_tot_na+$q8_tot_na+$q9_tot_na+$q10_tot_na+$q11_tot_na+$q12_tot_na; echo"$nfe_total";?></td>
  </tr>
  <tr>
    <td>NFE Accuracy</td>
    <td><?
	  $nfe_acc=($nfe_total/(9*$jum_tot)*100);
		printf("%1.2f ", $nfe_acc);
		
	  ?>
      %</td>
  </tr>
  <tr>
    <td>FE Total </td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_fe="select count(*) as jum_fe_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4<>'no' and  a.q5<>'no' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_fe="select count(*) as jum_fe_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4<>'no' and  a.q5<>'no'  and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_fe="select count(*) as jum_fe_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4<>'no' and  a.q5<>'no'  and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_fe="select count(*) as jum_fe_tot from db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b ,db_qm.dbo.table_qm_iic_detail c where a.id_qm=c.id_qm and  a.status_save='complete' and  a.q4<>'no' and  a.q5<>'no'  and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	   $r_stot_fe=mssql_query($stot_fe);
	   while($d_stot_fe=mssql_fetch_array($r_stot_fe))
			{
		     	$fe_tot=$d_stot_fe["jum_fe_tot"];
			} 		
			//echo"$fe_tot";
			$fe_total=$fe_tot*2;
			echo"$fe_total";
			
		?></td>
  </tr>
  <tr>
    <td>FE Accuracy </td>
    <td>
      <?
	  $fe_acc=($fe_tot/$jum_tot)*100;
		printf("%1.2f ", $fe_acc);
		
	  ?>
      %</td>
  </tr>
  <tr>
    <td>Repeat (Y) </td>
    <td><? 
	
	  			if ($report_by=="Unit")
				  	{				  
				 	 $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b  where a.status_save='complete'  and a.id_qm=c.id_qm and repeat='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				 	 $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b  where a.status_save='complete'  and a.id_qm=c.id_qm and repeat='yes' and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Observer")
				  	{				  
				 	 $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b  where a.status_save='complete'  and a.id_qm=c.id_qm and repeat='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Agent")
				  	{				  
				 	 $stot_rep="select count(*) as jum_s_rep from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b  where a.status_save='complete'  and a.id_qm=c.id_qm and repeat='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
			
	   $r_stot_rep=mssql_query($stot_rep);
	   while($d_stot_rep=mssql_fetch_array($r_stot_rep))
			{
		     	$rep_tot_y=$d_stot_rep["jum_s_rep"];
			} 			
	  echo"$rep_tot_y"; ?></td>
  </tr>
  <tr>
    <td>Handling Time Average</td>
    <td><?  
	  			if ($report_by=="Unit")
				  	{				  
					  $stot_hh="select sum(hh_handling_time) as jum_hh from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where  a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
	  			if ($report_by=="Departement")
				  	{				  
					  $stot_hh="select sum(hh_handling_time) as jum_hh from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where  a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Observer")
				  	{				  
					  $stot_hh="select sum(hh_handling_time) as jum_hh from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where  a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	  			if ($report_by=="Agent")
				  	{				  
					  $stot_hh="select sum(hh_handling_time) as jum_hh from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where  a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
					}
					
	   $r_stot_hh=mssql_query($stot_hh);
	   while($d_stot_hh=mssql_fetch_array($r_stot_hh))
			{
		     	$d_tot_hh=$d_stot_hh["jum_hh"];
			} 
	  			if ($report_by=="Unit")
				  	{				  
					$stot_mm="select sum(mm_handling_time) as jum_mm from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
	  			if ($report_by=="Departement")
				  	{				  
					$stot_mm="select sum(mm_handling_time) as jum_mm from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Observer")
				  	{				  
					$stot_mm="select sum(mm_handling_time) as jum_mm from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	  			if ($report_by=="Agent")
				  	{				  
					$stot_mm="select sum(mm_handling_time) as jum_mm from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	  				}
					
	   $r_stot_mm=mssql_query($stot_mm);
	   while($d_stot_mm=mssql_fetch_array($r_stot_mm))
			{
		     	$d_tot_mm=$d_stot_mm["jum_mm"];
			}
	  			if ($report_by=="Unit")
				  	{				  
					$stot_ss="select sum(ss_handling_time) as jum_ss from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
	  			if ($report_by=="Departement")
				  	{				  
					$stot_ss="select sum(ss_handling_time) as jum_ss from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Observer")
				  	{				  
					$stot_ss="select sum(ss_handling_time) as jum_ss from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	  			if ($report_by=="Agent")
				  	{				  
					$stot_ss="select sum(ss_handling_time) as jum_ss from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm  and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	 				}
					
	   $r_stot_ss=mssql_query($stot_ss);
	   while($d_stot_ss=mssql_fetch_array($r_stot_ss))
			{
		     	$d_tot_ss=$d_stot_ss["jum_ss"];
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
	  			if ($report_by=="Unit")
				  	{				  
				  	$stot_d="select count(*) as jum_s_d from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm and drop_call='yes' and a.userid=b.username and a.kd_unit like '%$kd_unit%' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Departement")
				  	{				  
				  	$stot_d="select count(*) as jum_s_d from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm and drop_call='yes' and a.userid=b.username and (a.kd_unit like '%$cc_mentari%' or a.kd_unit like '%$cc_im3%' or a.kd_unit like '%$cc_pp%' or a.kd_unit like '%$cc_matrix%' or a.kd_unit like '%$cc_ftm%' or a.kd_unit like '%$cc_m2%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Observer")
				  	{				  
				  	$stot_d="select count(*) as jum_s_d from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm and drop_call='yes' and a.userid=b.username and a.observer='$c_observer' and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
	  			if ($report_by=="Agent")
				  	{				  
				  	$stot_d="select count(*) as jum_s_d from db_qm.dbo.table_qm_iic_detail c,db_qm.dbo.table_qm_iic a,dev_asst.dbo.table_usr b where a.status_save='complete'  and a.id_qm=c.id_qm and drop_call='yes' and a.userid=b.username and (a.userid='$nik_agent' or b.full_name like'%$nik_agent%') and a.date_saved between '$date_eva1 00:00:00.000' and '$date_eva2 23:59:59.000'"; 
	   				}
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
