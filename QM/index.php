<?php
// ****************************************************
// File login.php
// File ini berguna untuk otentikasi
// ****************************************************
session_name("AUTHEN");
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>QM Standard COPC Application</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />
<link rel="stylesheet" href="css/style.shinyblue.css" type="text/css" />

<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/custom.js"></script>

</head>

<body class="loginpage">

<div class="loginpanel">
    <div class="loginpanelinner">
        <form action="<? $PHP_SELF; ?>" method="post">
            <div class="inputwrapper login-alert">
                <div class="alert alert-error">Invalid username or password</div>
            </div>
            <table border="1px" width="300px">
			<tr>
				<td colspan="2"><div style="text-align:center;">
				<img src="images/indosat1.png" alt="OoredoO"/></div></td>
			</tr>
			<tr>
				<td colspan="2">
				<div style="text-align:center;font:18px calibri;color:white;">QM COPC Application</div><br>
				</td>
			</tr>
			<tr>
				<td width="30" align="left">
					
				</td>
				<td  width="200px">
					<input type="text" class="box" value="<? echo"$userna"; ?>" name="userna" id="userna" Placeholder="Enter any Username" tabindex="<? if ($userna=="") {echo "1";} else {echo "10";} ?>">
				</td>
			</tr>		
			<tr>
				<td width="30" align="left">
					
				</td>
				<td  width="200px">
					<input name="passwo" class="box" type="password" id="passwo" placeholder="Enter any password" tabindex="<? if ($userna=="") {echo "2";} else {echo "1";} ?>">
				</td>
			</tr>	
			<tr>
				<td colspan="2" align="center">
					<button  class="btn btn-danger" name="login" type="submit" value="login"> Login </button>	

				</td>
			</tr>				
			</table>
            
            
        </form>
    </div><!--loginpanelinner-->
</div><!--loginpanel-->

<div class="loginfooter">
    <p>&copy; 2014. CRM Application Solution.</p>
</div>

</body>
</html>
<?
if ($login)
{
include "konek_qm.php";



//edit hendi
	
	$result = mssql_query("SET ANSI_NULLS ON") or die(mssql_get_last_message());
  $result2 = mssql_query("SET ANSI_WARNINGS ON") or die(mssql_get_last_message());

$q_login="select a.nama,a.id_data_pribadi,a.nik_karyawan,b.nama_unit,c.qm,a.id_unit,a.id_fungsi,a.id_divisi,a.jabatan
		from cco.hrms.dbo.tb_data_pribadi a 
		inner join cco.hrms.dbo.tb_unit b with(nolock) on a.id_unit =
		(case when right(a.id_unit,1) like '[a-z]' then b.id_unit else left(b.id_unit,len(b.id_unit)-1) end)
		inner join cco.hrms.dbo.tb_auth c with(nolock) on a.id_data_pribadi=c.id_data_pribadi
		where a.nik_karyawan='$userna' and a.password='$passwo' and a.nik_karyawan in ('V140001658','V140001545','84126444','V140001546','V140000166',
		'V140000574','V140000484','71146914','V140003153','V140000681','75964169',
		'LBTLS0001','LBTLS0002','LBBPD0003','LBTLS0004','LBDIG0005','LBDIG0006','LBDIG0007','82126342')";
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
	$SSO="0";
	/*
	$SES_id_unit=$unit;
	$SES_id_divisi=$divisi;
	$SES_id_fungsi=$fungsi;
	 * */
	//$SES_USERID = $userid;
/*
	$q_ip="select count(*) as cek from table_ip where ip='$REMOTE_ADDR'";
	$r_ip=mssql_query($q_ip);
	$d_ip=mssql_fetch_array($r_ip);
	$cek=$d_ip["cek"];
*/
		if($kode_level=="admin" || $kode_level=="mitra" || $kode_level=="corres" || $kode_level=="galeri" || $kode_level=="cr" ||
		$kode_level=="inbound" || $kode_level=="telesales" || $kode_level=="collection" || $kode_level=="validator")
		{
		?>
		<script type="text/javascript">
		window.location="page.php?index=home"
		
		</script>
		<?php
		}
		
		else
		{
			echo $SES_hendi;
			
		?>
		
		<script type="text/javascript">
			window.alert("Maaf Anda Tidak Di Ijinkan Melalui URL ini")
			window.location="http://cco"
		</script>
		
		<?php
		}
	
}
?>