<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<style type="text/css">
.a4
{
background-color:#B0B0B0;
color:#FFFFFF
}

body {
	font-family: Arial, Helvetica, sans-serif;
	font-size: 14px;
	color:#4A4140
}

table
{
border-collapse:collapse;
border-color:#618C04;
}
</style>
<SCRIPT TYPE='text/javascript'>
function confirmDelete2()
{
    return confirm('Are you sure?');
}

<!--
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=300,height=300,scrollbars=yes');
return false;
}
function popupBig(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=600,height=550,scrollbars=yes');
return false;
}

//-->
</SCRIPT>
</head>

<body>
<form method="POST" name="form" action="<? $PHP_SELF; ?>" enctype="multipart/form-data">
<table width="44%">
	<tr>
      <td width="23%">Import user LB</td>
	  <td width="2%">:</td>
	  <td width="75%"><input type="file" name="userfile" id="userfile" align="left">
	  <input type="submit" name="upload" value="Import"></td>
	</tr>
	<tr>
      <td width="23%">&nbsp;</td>
	  <td width="2%"></td>
	  <td width="75%"><a href="templateUserLB.php">Download template here</a></td>
	</tr>
</table>
</form>

<p>&nbsp;</p>
<table width="64%" border="1">
	<tr bgcolor="#CCCCCC">
      <td width="4%" align="center">No.</td>
	  <td width="10%" align="center">LB</td>
	  <td width="14%" align="center">NIK</td>
	  <td width="19%" align="center">Unit</td>
	  <td width="19%" align="center">End Date</td>
	</tr>
	<? 
	include "koneksi_hrms.php";
	$sql = mssql_query("select * from tb_LB order by nu desc");
	$no=1;
	while ($qry = mssql_fetch_array($sql))
	{
	?>
	<tr>
      <td width="4%"><? echo $no; ?></td>
	  <td width="10%"><? echo $qry['lb']; ?></td>
	  <td width="14%"><? echo $qry['nik']; ?></td>
	  <td width="19%"><? echo $qry['unit']; ?></td>
	  <td width="19%"><a href="editLB.php?nu=<? echo $qry['nu']; ?>&lb=<? echo $qry['lb']; ?>&nik=<? echo $qry['nik']; ?>&unit=<? echo $qry['unit']; ?>" onClick="return popup(this, 'notes');">Edit</a> | <a href="deleteLB.php?nu=<? echo $qry['nu']; ?>" onclick="return confirmDelete2();">Delete</a></td>
	</tr>
	<? $no++; } ?>
</table>
<? 

	if ($upload) {
		if ($userfile !="") {
			include "excel_reader2.php";
			
			// membaca file excel yang diupload
			$data = new Spreadsheet_Excel_Reader($_FILES['userfile']['tmp_name']);
			 
			// membaca jumlah baris dari data excel
			$baris = $data->rowcount($sheet_index=0);
			
			// nilai awal counter untuk jumlah data yang sukses dan yang gagal diimport
			$sukses = 0;
			$gagal = 0;
			
			 
			
			 $LB_array = array();
			 
			 for ($i=1; $i<=$baris; ) //baca header template
			{
				if($data->val($i, 1)!="LB")// cek otentik template
				{
					
					echo"<script>alert('Format tidak sesuai Template '); windows.history.back();</script>";
					exit();
				}
				elseif ($data->val($i, 2)!="NIK")
				{
					
					echo"<script>alert('Format tidak sesuai Template '); windows.history.back();</script>";
					exit();
				}
				elseif ($data->val($i, 3)!="Start date")
				{
					
					echo"<script>alert('Format tidak sesuai Template '); windows.history.back();</script>";
					exit();
				}
				elseif ($data->val($i, 4)!="End Date")
				{
					
					echo"<script>alert('Format tidak sesuai Template '); windows.history.back();</script>";
					exit();
				}
				elseif ($data->val($i, 5)!="Unit")
				{
					
					echo"<script>alert('Format tidak sesuai Template '); windows.history.back();</script>";
					exit();
				}	
				
			// import data excel mulai baris ke-2 (karena baris pertama adalah nama kolom)
				for ($i=2; $i<=$baris; $i++)
				{
				// membaca data nim (kolom ke-1)
				$lb = $data->val($i, 1);
				// membaca data nama (kolom ke-2)
				$nik = $data->val($i, 2);
				// membaca data alamat (kolom ke-3)
				$start = $data->val($i, 3);
				// membaca data nama (kolom ke-4)
				$end = $data->val($i, 4);
				// membaca data alamat (kolom ke-5)
				$unit = $data->val($i, 5);
				
				$LB_array[] = $lb;
				$start_array[] = $start;
				$end_array[] = $end;
				//cek duplicate
				//$sqlcek = mssql_query("select * from tb_LB");
				//$qrycek = mssql_fetch_array($sqlcek);
				
				// setelah data dibaca, sisipkan ke dalam tabel mhs
				
				// 
				// jika proses insert data sukses, maka counter $sukses bertambah
				// jika gagal, maka counter $gagal yang bertambah
				
				$hasil_lb=array_search($lb, $LB_array);// memastikan inputan nama asset sesuai role
				$hasil_tgl=array_search($lb, $start_array);
								
					if ($hasil_lb == false)
						{ 
						  $gagal++;
						}
					else  
						{
						$query = "INSERT INTO tb_LB (lb,nik,start,[end],unit,date_upload) VALUES ('$lb', '$nik', '$start', '$end', '$unit',getdate())";
						$hasil = mssql_query($query);
						//echo "$query";
						$sukses++;
						}
			}	
				// tampilan status sukses dan gagal
				echo "<h3>Proses import data selesai.</h3>";
				echo "<p>Jumlah data yang sukses diimport : ".$sukses."<br>";
				echo "Jumlah data yang gagal diimport : ".$gagal."</p>";
				echo "<p>Total Data : ".$baris."</p>";
				echo "<p>Data : ".$_FILES['userfile']['name']."</p>";
				
				
				 //var_dump($LB_array);
				
				
					
					
					
			}
		} 
		else {
			echo"<script>alert('Anda belum memilih file'); windows.history.back();</script>";
		}
	}
?>
</body>
</html>
