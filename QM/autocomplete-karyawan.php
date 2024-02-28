<?
session_name("AUTHEN");
session_start();
if ($SES_hendi<>"")
{
include "koneksi_hrms.php";

		$input = $_GET['input'];
		
		$query = mssql_query("select top 7 nik_karyawan, nama from tb_data_pribadi where status_kerja='1' and (nama like '%$input%' or nik_karyawan like '%$input%')"); //query mencari hasil search
		$hasil = mssql_num_rows($query);
		
		if ($hasil !=0)
		{
			$result = array();
			while ($data = mssql_fetch_array($query))
			{
				for ($i = 0; $i <= strlen($input) - 4; $i ++) {
					if (strpos(strtolower($data[0]), strtolower(substr($input, $i, 4))) !== false) {
						$like = true;
					}else{
						$like = false;
					}
				}
				
				if($like == true){
					array_push($result, array('value' => $data[0], 'label' => $data[0]." - ".$data[1]));
				}else{
					array_push($result, array('value' => $data[1], 'label' => $data[0]." - ".$data[1]));
				}
			}
			echo json_encode($result);
		}
		else
		{
			$result = array();
			array_push($result, array('value' => null, 'label' => 'Data Tidak Ditemukan'));
			echo json_encode($result);
		}
}?>