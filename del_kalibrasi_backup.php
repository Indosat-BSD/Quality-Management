<html>
<head>
</head>

<body>
<?


if($kode_del=="detail_inbound")
{
include "konek_qm.php";

			$add="delete from table_kalibrasi_inbound where id='$id'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_kalibrasi_inbound&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}


elseif($kode_del=="detail_cr")
{
include "konek_qm.php";

			$add="delete from table_kalibrasi_cr where id='$id'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_kalibrasi_cr&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}

elseif($kode_del=="detail_sli")
{
include "konek_qm.php";

			$add="delete from table_kalibrasi_sli where id='$id'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_kalibrasi_sli&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}



elseif($kode_del=="detail_iic")
{
include "konek_qm.php";

			$add="delete from table_kalibrasi_iic where id='$id'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_kalibrasi_iic&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}


elseif($kode_del=="detail_telesales")
{
include "konek_qm.php";

			$add="delete from table_kalibrasi_telesales where id='$id'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_kalibrasi_telesales&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}


elseif($kode_del=="detail_email")
{
include "konek_qm.php";

			$add="delete from table_kalibrasi_email where id='$id'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_kalibrasi_email&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}


elseif($kode_del=="detail_twitter")
{
include "konek_qm.php";

			$add="delete from table_kalibrasi_twitter where id='$id'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_kalibrasi_twitter&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}


elseif($kode_del=="detail_galeri")
{
include "konek_qm.php";

			$add="delete from table_kalibrasi_galeri where id='$id'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_kalibrasi_galeri&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}


elseif($kode_del=="detail_galeri_kasir")
{
include "konek_qm.php";

			$add="delete from table_kalibrasi_galeri_kasir where id='$id'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_kalibrasi_galeri_kasir&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}

elseif($kode_del=="detail_collection")
{
include "konek_qm.php";

			$add="delete from table_kalibrasi_collection where id='$id'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_kalibrasi_collection&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}

elseif($kode_del=="detail_credit")
{
include "konek_qm.php";

			$add="delete from table_kalibrasi_credit_control where id='$id'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_kalibrasi_credit&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}

?>



</body>
</html>