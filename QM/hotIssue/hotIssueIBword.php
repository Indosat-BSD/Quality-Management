<?
header("Content-type: application/vnd.ms-word"); 
header("Content-Disposition: attachment; filename=hot_issue.doc"); 
header("Pragma: no-cache"); 
header("Expires: 0"); 

include "konek_qm.php";
date_default_timezone_set('Asia/Jakarta');
?>


<table border="1">
			<thead>
			  <tr>
				<th width="5%" align="center" class="a7_biru">Nu.</th>
				<th width="28%" align="center" class="a7_biru">Activity Code</th>
				<th width="51%" align="center" class="a7_biru">Description</th>
				<th width="16%" align="center" class="a7_biru">Total</th>
			  </tr></thead><tbody>
			<?
			include "konek_qm.php";
			
			$sql_a		= "select top 10 product_type,product_detail,count(product_type) as jumlah
			from table_qm a
			inner join table_qm_detail b on b.id_qm=a.id_qm 
			where convert(varchar,a.date_saved,112) between '$tgl1' and '$tgl2' and product_type like '$report_by%'										
			group by product_detail,product_type
			order by jumlah desc";
			//echo $sql_a;
			$qry_a		= mssql_query($sql_a);

				$no	= 1;
				while ($data_a	= mssql_fetch_array($qry_a))
				  		{
				  		$product_type = $data_a['product_type']; 
						$product_detail  = $data_a['product_detail'];
						$jumlah  = $data_a['jumlah'];
							 
							 ?>
							  <tr>
								<td><? echo $no; ?></td>
								<td align="center"><? echo "$product_type"; ?></td>
								<td><? echo "$product_detail"; ?></td>
								<td align="center"><? echo $jumlah;	?></td>
							  </tr>
							<?
							$no++;				
					
						
						
						}//end for
						?>
	</tbody></table>
 