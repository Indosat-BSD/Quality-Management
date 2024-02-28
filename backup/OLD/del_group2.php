<html>
<head>
</head>

<body>
<?


if($kode_del=="add_inbound")
{
include "konek_qm.php";
			$add="delete from table_qm where id_qm='$id_qm'";
			mssql_query($add);
			
				echo"<script type='text/javascript'>
window.location='page.php?index=add_inbound'
</script> ";		
}

elseif($kode_del=="detail_inbound")
{
include "konek_qm.php";

			$add="delete from table_qm where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_detail where id_qm='$id_qm'";
			mssql_query($add2);
		
echo"<script type='text/javascript'>
window.location='page.php?index=report_newHireIB&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
elseif($kode_del=="add_newHireIB2")
{
include "konek_qm.php";
			$add="delete from table_qm_newHireIB where id_qm='$id_qm'";
			mssql_query($add);
			
				echo"<script type='text/javascript'>
window.location='page.php?index=add_newHireIB2'
</script> ";		
}

elseif($kode_del=="detail_newHireIB")
{
include "konek_qm.php";

			$add="delete from table_qm_newHireIB where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_newHireIB_detail where id_qm='$id_qm'";
			mssql_query($add2);
		
echo"<script type='text/javascript'>
window.location='page.php?index=report_newHireIB&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
elseif($kode_del=="add_inbound_top")
{
include "konek_qm.php";
			$add="delete from table_qm_inbound_top where id_qm='$id_qm'";
			mssql_query($add);
			
				echo"<script type='text/javascript'>
window.location='page.php?index=add_inbound_top'
</script> ";		
}

elseif($kode_del=="detail_inbound_top")
{
include "konek_qm.php";

			$add="delete from table_qm_inbound_top where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_inbound_top_detail where id_qm='$id_qm'";
			mssql_query($add2);
		
echo"<script type='text/javascript'>
window.location='page.php?index=report_inbound_top&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
/////////////////////////////////////////////////////////////////////////////////////////////
elseif($kode_del=="add_cr")
{
include "konek_qm.php";
			$add="delete from table_qm_cr where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_cr'
</script> ";		
}

elseif($kode_del=="detail_cr")
{
include "konek_qm.php";

			$add="delete from table_qm_cr where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_cr_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_cr&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
/////////////////////////////////////////////////////////////////////////////////////////////
elseif($kode_del=="add_sli")
{
include "konek_qm.php";
			$add="delete from table_qm_sli where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_sli'
</script> ";		
}

elseif($kode_del=="detail_sli")
{
include "konek_qm.php";

			$add="delete from table_qm_sli where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_sli_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_sli&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}

/////////////////////////////////////////////////////////////////////////////////////////////
elseif($kode_del=="add_iic")
{
include "konek_qm.php";
			$add="delete from table_qm_iic where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_iic'
</script> ";		
}

elseif($kode_del=="detail_iic")
{
include "konek_qm.php";

			$add="delete from table_qm_iic where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_iic_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_iic&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}

/////////////////////////////////////////////////////////////////////////////////////////////

elseif($kode_del=="add_telesales")
{
include "konek_qm.php";
			$add="delete from table_qm_telesales where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_telesales'
</script> ";		
}

elseif($kode_del=="detail_telesales")
{
include "konek_qm.php";

			$add="delete from table_qm_telesales where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_telesales_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_telesales&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
//
elseif($kode_del=="add_email")
{
include "konek_qm.php";
			$add="delete from table_qm_email where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_email'
</script> ";		
}

elseif($kode_del=="detail_email")
{
include "konek_qm.php";

			$add="delete from table_qm_email where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_email_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_email&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
//
elseif($kode_del=="add_twitter")
{
include "konek_qm.php";
			$add="delete from table_qm_twitter where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_twitter'
</script> ";		
}

elseif($kode_del=="detail_twitter")
{
include "konek_qm.php";

			$add="delete from table_qm_twitter where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_twitter_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_twitter&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
//
elseif($kode_del=="add_galeri")
{
include "konek_qm.php";
			$add="delete from table_qm_galeri where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_galeri'
</script> ";		
}

elseif($kode_del=="detail_galeri")
{
include "konek_qm.php";

			$add="delete from table_qm_galeri where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_galeri_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_galeri&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
//
elseif($kode_del=="add_galeri_kasir")
{
include "konek_qm.php";
			$add="delete from table_qm_galeri_kasir where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_galeri_kasir'
</script> ";		
}

elseif($kode_del=="detail_galeri_kasir")
{
include "konek_qm.php";

			$add="delete from table_qm_galeri_kasir where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_galeri_kasir_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_galeri_kasir&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
elseif($kode_del=="add_collection")
{
include "konek_qm.php";
			$add="delete from table_qm_collection where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_collection'
</script> ";		
}

elseif($kode_del=="detail_collection")
{
include "konek_qm.php";

			$add="delete from table_qm_collection_top where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_collection_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_collection&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
?>



</body>
</html>