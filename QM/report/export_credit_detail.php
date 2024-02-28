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
<p>&nbsp;</p>
  <table width="290%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
		<thead>
		<tr bgcolor="#CCCCCC">
		  <th width="10%" rowspan="3" class="head0"><div align="center">NIK</div></th>
		  <th width="10%" rowspan="3" class="head0"><div align="center">Nama</div></th>
		  <th width="10%" rowspan="3" class="head0"><div align="center">Unit Kerja</div></th>
		  <th width="10%" rowspan="3" class="head0"><div align="center">Periode</div></th>
		  
		  <th colspan="2" class="head0"><div align="center">Validation Dokumen</div></th>
		  <th colspan="4" class="head0"><div align="center">Update Activities</div></th>
		  
		  <th colspan="4" class="head0"><div align="center">Action Plan</div></th>
		  
		  <th colspan="2" class="head0"><div align="center">Notes</div></th>
		  <th colspan="12" class="head0"><div align="center">Courtesy Call</div></th>
		  
		  <th width="4%" rowspan="2" colspan="4" class="head0"><div align="center">Total</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">Score</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">NOE</div></th>
		</tr>
		<tr bgcolor="#CCCCCC">
		  <th colspan="2" class="head0"><div align="center">Validation Data & Approval Verification</div></th>
		  <th colspan="2" class="head0"><div align="center">Change status SR</div></th>
		  <th colspan="2" class="head0"><div align="center">Create SR Up Credit Monitoring</div></th>
		  <th colspan="2" class="head0"><div align="center">Change Credit Monitoring</div></th>
		  <th colspan="2" class="head0"><div align="center">Aktivasi IDD</div></th>
		  <th colspan="2" class="head0"><div align="center">Notes</div></th>
		  
		  <th colspan="2" class="head0"><div align="center">Greeting with enthusiasm</div></th>
		  
		  <th colspan="2" class="head0"><div align="center">Permission & Purpose to call</div></th>
		  <th colspan="2" class="head0"><div align="center">Reconfirm the Agreement & Closing Greeting</div></th>
		  <th colspan="2" class="head0"><div align="center">Hospitality / kesopanan (relate to Manner)</div></th>
		  <th colspan="2" class="head0"><div align="center">Personalize Communication</div></th>
		  <th colspan="2" class="head0"><div align="center">Hold/Mute/Transfer</div></th>
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
		
	<?
		$a_user="[new_report_CC]'table_qm_credit','$report_by','$tgl1','$tgl2','$select_region','popup','$id_pribadi_user' ";
		//echo"$a_user";
		
		$b_user=mssql_query($a_user);
		$no=1;
		$row=true;
		while($c_user=mssql_fetch_array($b_user)){
			echo "<tr class='content'>";
			if($c_user['noe']>1 and $row==true){
				echo "<td rowspan='".$c_user['noe']."'>".$c_user['nik_karyawan']."</td>
					  <td rowspan='".$c_user['noe']."'>".$c_user['full_name']."</td>
					  <td rowspan='".$c_user['noe']."'>".$c_user['nama_unit']."</td>";
			}else if($c_user['noe']<=1){
				echo "<td>".$c_user['nik_karyawan']."</td>
					  <td>".$c_user['full_name']."</td>
					  <td>".$c_user['nama_unit']."</td>";
			}
				echo "
				<td>".$c_user['observation_date']."</td>
				<!--<td>".$c_user['flag_socmed']."</td>-->
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
				$prosen_yes = round((($c_user['tot_yes']/($c_user['tot_yes']+$c_user['tot_no']))*100),2);
				$prosen_no = round((($c_user['tot_no']/($c_user['tot_yes']+$c_user['tot_no']))*100),2);
				echo "
				<td>".$c_user['tot_yes']."</td>
				<td>$prosen_yes</td>
				<td>".$c_user['tot_no']."</td>
				<td>$prosen_no</td>
				<td>".$c_user['tot_score']."</td>
				";
			if($c_user['noe']>1 and $row==true){
				echo "<td rowspan='".$c_user['noe']."'>".$c_user['noe']."</td>";
			}else if($c_user['noe']<=1){
				echo "<td>".$c_user['noe']."</td>";
			}
				echo "
			</tr>
			";
			$row=false;
			$no++;
		}
	?>
	</table>
