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
		  
		  <th colspan="4" class="head0"><div align="center">Opening</div></th>
		  <th colspan="2" class="head0"><div align="center">Solution</div></th>
		  <th colspan="2" class="head0"><div align="center">Accuracy Data</div></th>
		  <th colspan="2" class="head0"><div align="center">Closing Agreement</div></th>
		  <th colspan="4" class="head0"><div align="center">Effective Communication</div></th>
		  <th colspan="2" class="head0"><div align="center">Telephony Manner</div></th>
		  
		  <th width="4%" rowspan="2" colspan="4" class="head0"><div align="center">Total</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">Score</div></th>
		  <th width="4%" rowspan="3" class="head0"><div align="center">NOE</div></th>
		</tr>
		<tr bgcolor="#CCCCCC">
		  <th colspan="2" class="head0"><div align="center">Greeting with enthusiasm</div></th>
		  <th colspan="2" class="head0"><div align="center">Purpose to call & Confirmation</div></th>
		  <th colspan="2" class="head0"><div align="center">Correct Solution & Information</div></th>
		  <th colspan="2" class="head0"><div align="center">Input Accuracy Data</div></th>
		  <th colspan="2" class="head0"><div align="center">Reconfirm the Agreement & Closing Greeting</div></th>
		  <th colspan="2" class="head0"><div align="center">Hospitality (relate to Manner)</div></th>
		  <th colspan="2" class="head0"><div align="center">Personalize Communication</div></th>
		  <th colspan="2" class="head0"><div align="center">Hold/Transfer/Routing/Callback Technique</div></th>
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
		  <th class="head0"><div align="center">%</div></th>
		  <th class="head0"><div align="center">N</div></th>
		  <th class="head0"><div align="center">%</div></th>
		</tr>
		</thead>
		
	<?
			$a_user="[new_report_email]'table_qm_collection','$report_by','$tgl1','$tgl2','$select_region','$st_rep','popup','$id_pribadi_user' ";
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
				<td>".$c_user['q8_no']."</td>";
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
