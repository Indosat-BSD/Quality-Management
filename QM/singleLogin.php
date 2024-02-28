<?
session_name("AUTHEN");
session_start();

//include ("koneksi.php");
$ippc=@$REMOTE_ADDR; 

$userna=$users;
			//validasi hak
			//=============

include "koneksi_hrms.php";
/*$q_login="select a.nama,a.id_data_pribadi,a.nik_karyawan,b.nama_unit,c.qm,a.id_unit,a.id_fungsi,a.id_divisi,a.jabatan
		from hrms.dbo.tb_data_pribadi a 
		inner join hrms.dbo.tb_unit b with(nolock) on a.id_unit =
		(case when right(a.id_unit,1) like '[a-z]' then b.id_unit else left(b.id_unit,len(b.id_unit)-1) end)
		inner join hrms.dbo.tb_auth c with(nolock) on a.id_data_pribadi=c.id_data_pribadi
		where a.nik_karyawan='$userna'";*/
$q_login="[splogin_qm]'$userna'";		
		echo $q_login;
$query=mssql_query($q_login);
$result=mssql_fetch_array($query);

$username=$result['id_data_pribadi'];
$nik=$result['nik_karyawan'];
$full_name=$result['nama'];
$nama_unit=$result['nama_unit'];
$kode_level=$result['qm'];
$divisi=$result['id_divisi'];
$fungsi=$result['id_fungsi'];
$unit=$result['id_unit'];
$jabatan=$result['jabatan'];


//echo  $username;
//end edit

	
	session_start();
	session_register('SES_hendi');
	//session_register("SES_PASSWORD");
	session_register('SES_FULLNAME');
	session_register('SES_NAMA_UNIT');
	session_register('SES_KODE_LEVEL');
	session_register('SES__NIK');
	session_register('SES_JABATAN');
	session_register('SSO');
	
	/*
	session_register("SES_id_unit");
	session_register("SES_id_divisi");
	session_register("SES_id_fungsi");
	*/
	//session_register("SES_USERID");
	$SES_hendi = $username;
	$SES_FULLNAME = $full_name;
	$SES_NAMA_UNIT = $nama_unit;
	$SES_KODE_LEVEL = $kode_level;
	$SES__NIK = $nik;
	$SES_JABATAN = $jabatan;
	$SSO="1";

	//$q_ip="select count(*) as cek from table_ip where ip='$REMOTE_ADDR'";
	//$r_ip=mssql_query($q_ip);
	//$d_ip=mssql_fetch_array($r_ip);
	//$cek=$d_ip["cek"];
/*	$tanggal=date("F j, Y, g:i a");
	$q="insert into table_session (username,session_ip,waktu_login) values ('$SES_hendi','$REMOTE_ADDR','$tanggal')";
	mssql_query($q);
	
		if($cek=="0")
		{
		?>
		<script type="text/javascript">
		window.location="under_c.php"
		</script>
		<?php
		}
*/
		if($kode_level=="admin" or $kode_level=="mitra" or $kode_level=="corres" or $kode_level=="galeri" or $kode_level=="cr" or 
		$kode_level=="inbound" or $kode_level=="telesales" or $kode_level=="collection" or $kode_level=="validator")
		{
		?>
		<script type="text/javascript">
		window.location="page.php"
		</script>
		<?php
		}
		elseif ($username<>$userna)
		{
			
		?>
		<script type="text/javascript">
		window.alert("Username or password salah")
				window.location="http://10.34.28.124"
		</script>
		<?
		}
		?></body>
</html>



