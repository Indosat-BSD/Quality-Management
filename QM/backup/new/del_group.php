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
window.location='page.php?index=add_inbound&div=cco'
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
window.location='page.php?index=report_inbound&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
elseif($kode_del=="add_newHireIB")
{
include "konek_qm.php";
			$add="delete from table_qm_newHireIB where id_qm='$id_qm'";
			mssql_query($add);
			
				echo"<script type='text/javascript'>
window.location='page.php?index=add_newHireIB&div=cco'
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
window.location='page.php?index=add_inbound_top&div=cco'
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
window.location='page.php?index=add_cr&div=cr'
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
window.location='page.php?index=report_cr&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer&st_rep=$st_rep'
</script> ";		
}
/////////////////////////////////////////////////////////////////////////////////////////////
elseif($kode_del=="add_sli")
{
include "konek_qm.php";
			$add="delete from table_qm_sli where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_sli&div=cco'
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
window.location='page.php?index=add_iic&div=cco'
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
window.location='page.php?index=add_telesales&div=cco'
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
window.location='page.php?index=report_telesales&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer&st_rep=$st_rep'
</script> ";		
}
//
elseif($kode_del=="add_email")
{
include "konek_qm.php";
			$add="delete from table_qm_email where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_email&div=cco'
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
window.location='page.php?index=report_email&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer&st_rep=$st_rep'
</script> ";		
}
//
elseif($kode_del=="add_twitter")
{
include "konek_qm.php";
			$add="delete from table_qm_twitter where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_twitter&div=cco'
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
window.location='page.php?index=report_twitter&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer&st_rep=$st_rep'
</script> ";		
}
elseif($kode_del=="add_live_chat_facebook")
{
include "konek_qm.php";
			$add="delete from table_qm_lcfb where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_live_chat_facebook&div=cco'
</script> ";		
}

elseif($kode_del=="detail_live_chat_facebook")
{
include "konek_qm.php";

			$add="delete from table_qm_lcfb where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_lcfb_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_live_chat_facebook&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer&st_rep=$st_rep'
</script> ";		
}

//
elseif($kode_del=="add_galeri")
{
include "konek_qm.php";
			$add="delete from table_qm_galeri where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_galeri&div=gal'
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
window.location='page.php?index=add_galeri_kasir&div=gal'
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
window.location='page.php?index=add_collection&div=ccc'
</script> ";		
}
//tambahan delete form hua create by danil 03 maret 2015-------------------------------------------------------------//
elseif($kode_del=="add_hua")
{
include "konek_qm.php";
			$add="delete from table_qm_hua where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_hua&div=ccc'
</script> ";		
}
else if($kode_del=="add_pl_qm")
{
include "konek_qm.php";
			$add="delete from table_qm_pl where id_qm='$id_qm'";
			//echo"$add";
			mssql_query($add);
			
			echo"<script type='text/javascript'>
			window.location='page.php?index=add_process_level&div=cco'
			</script> ";		
			}
elseif($kode_del=="add_return_billing")
{
include "konek_qm.php";
			$add="delete from table_qm_rb where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_return_billing&div=ccc'
</script> ";		
}
//-------------------------------------------------------------------------------------------------------------------//
elseif($kode_del=="add_credit_control")
{
include "konek_qm.php";
			$add="delete from table_qm_credit where id_qm='$id_qm'";
			mssql_query($add);
			
echo"<script type='text/javascript'>
window.location='page.php?index=add_credit_control&div=ccc'
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
window.location='page.php?index=report_collection&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer&st_rep=$st_rep'
</script> ";		
}

elseif($kode_del=="detail_credit")
{
include "konek_qm.php";

			$add="delete from table_qm_credit where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_credit_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_credit&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}

elseif($kode_del=="detail_hua")
{
include "konek_qm.php";

			$add="delete from table_qm_hua where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_hua_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_hua&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}

elseif($kode_del=="detail_rb")
{
include "konek_qm.php";

			$add="delete from table_qm_rb where id_qm='$id_qm'";
			mssql_query($add);
			
			$add2="delete from table_qm_rb_detail where id_qm='$id_qm'";
			mssql_query($add2);
			
echo"<script type='text/javascript'>
window.location='page.php?index=report_return_billing&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}
elseif($kode_del=="detail_pl")
{
include "konek_qm.php";

			$add="delete from table_qm_pl where id_qm='$id_qm'";
			mssql_query($add);
		
echo"<script type='text/javascript'>
window.location='page.php?index=report_process_level&report_by=$report_by&kd_division=$kd_division&kd_departemen=$kd_departemen&kd_unit=$kd_unit&date_eva1=$date_eva1&date_eva2=$date_eva2&kd_del=ok&c_observer=$c_observer'
</script> ";		
}

?>



</body>
</html>