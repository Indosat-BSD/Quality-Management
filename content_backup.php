<?
session_name("AUTHEN");
session_start();

//add QA
if ( $_GET[index] == "add_cr" ) {
	include ("add/add_cr.php");
	}
else if ( $_GET[index] == "add_email" ) {
	include ("add/add_email.php");
	}
else if ( $_GET[index] == "add_galeri" ) {
	include ("add/add_galeri.php");
	}
else if ( $_GET[index] == "add_galeri_kasir" ) {
	include ("add/add_galeri_kasir.php");
	}
else if ( $_GET[index] == "add_iic" ) {
	include ("add/add_iic.php");
	}
else if ( $_GET[index] == "add_inbound" ) {
	include ("add/add_inbound.php");
	}
else if ( $_GET[index] == "add_sli" ) {
	include ("add/add_sli.php");
	}
else if ( $_GET[index] == "add_telesales" ) {
	include ("add/add_telesales.php");
	}
else if ( $_GET[index] == "add_twitter" ) {
	include ("add/add_twitter.php");
	}
else if ( $_GET[index] == "add_collection" ) {
	include ("add/add_collection.php");
	}
	
	//report QA
else if ( $_GET[index] == "report_cr" ) {
	include ("report/report_cr.php");
	}
else if ( $_GET[index] == "report_email" ) {
	include ("report/report_email.php");
	}
else if ( $_GET[index] == "report_galeri" ) {
	include ("report/report_galeri.php");
	}
else if ( $_GET[index] == "report_galeri_kasir" ) {
	include ("report/report_galeri_kasir.php");
	}
else if ( $_GET[index] == "report_iic" ) {
	include ("report/report_iic.php");
	}
else if ( $_GET[index] == "report_inbound" ) {
	include ("report/report_inbound.php");
	}
else if ( $_GET[index] == "report_sli" ) {
	include ("report/report_sli.php");
	}
else if ( $_GET[index] == "report_telesales" ) {
	include ("report/report_telesales.php");
	}
else if ( $_GET[index] == "report_twitter" ) {
	include ("report/report_twitter.php");
	}
else if ( $_GET[index] == "report_collection" ) {
	include ("report/report_collection.php");
	}
else if ( $_GET[index] == "report_collection3" ) {
	include ("report/report_collection_tester.php");
	}
else if ( $_GET[index] == "report_credit" ) {
	//include ("report/report_credit_controlHUA.php");
	include ("report/report_credit_controlHUA.php");
	}
else if ( $_GET[index] == "report_SumIBOther" ) {
	include ("report/report_SumIBOther.php");
	}

else if ( $_GET[index] == "userLB" ) {
	include ("userLB.php");
	}

// form kalibrasi 
else if ( $_GET[index] == "kalibrasi_inbound" ) {
	include ("kalibrasi/kalibrasi_inbound.php");
	}
	else if ( $_GET[index] == "kalibrasi_cr" ) {
	include ("kalibrasi/kalibrasi_cr.php");
	}
	else if ( $_GET[index] == "kalibrasi_email" ) {
	include ("kalibrasi/kalibrasi_email.php");
	}
	else if ( $_GET[index] == "kalibrasi_twitter" ) {
	include ("kalibrasi/kalibrasi_twitter.php");
	}
	else if ( $_GET[index] == "kalibrasi_telesales" ) {
	include ("kalibrasi/kalibrasi_telesales.php");
	}
else if ( $_GET[index] == "add_kalibrasi_inbound" ) {
	include ("kalibrasi/add_kalibrasi_inbound.php");
	}
	else if ( $_GET[index] == "add_kalibrasi_cr" ) {
	include ("kalibrasi/add_kalibrasi_cr.php");
	}
	else if ( $_GET[index] == "add_kalibrasi_email" ) {
	include ("kalibrasi/add_kalibrasi_email.php");
	}
	else if ( $_GET[index] == "add_kalibrasi_twitter" ) {
	include ("kalibrasi/add_kalibrasi_twitter.php");
	}
	else if ( $_GET[index] == "add_kalibrasi_telesales" ) {
	include ("kalibrasi/add_kalibrasi_telesales.php");
	}	
	else if ( $_GET[index] == "kalibrasi_credit_control" ) {
	include ("kalibrasi/kalibrasi_credit_control.php");
	}
	
	
////////////////////////////////////////////////////////////////////////////
else if ( $_GET[index] == "kalibrasi_galeri" ) {
	include ("kalibrasi/kalibrasi_galeri.php");
	}
else if ( $_GET[index] == "kalibrasi_iic" ) {
	include ("kalibrasi/kalibrasi_iic.php");
	}
else if ( $_GET[index] == "add_kalibrasi_iic" ) {
	include ("kalibrasi/add_kalibrasi_iic.php");
	}

else if ( $_GET[index] == "kalibrasi_sli" ) {
	include ("kalibrasi/kalibrasi_sli.php");
	}
else if ( $_GET[index] == "add_kalibrasi_sli" ) {
	include ("kalibrasi/add_kalibrasi_sli.php");
	}


else if ( $_GET[index] == "kalibrasi_collection" ) {
	include ("kalibrasi/kalibrasi_collection.php");
	}
else if ( $_GET[index] == "kalibrasi_credit" ) {
	include ("kalibrasi/kalibrasi_credit.php");
	}
else if ( $_GET[index] == "add_kalibrasi_collection" ) {
	include ("kalibrasi/add_kalibrasi_collection.php");
	}	

else if ( $_GET[index] == "kalibrasi_galeri_kasir" ) {
	include ("kalibrasi/kalibrasi_galeri_kasir.php");
	}
else if ( $_GET[index] == "add_kalibrasi_galeri_kasir" ) {
	include ("kalibrasi/add_kalibrasi_galeri_kasir.php");
	}	
	
	
	//report kalibrasi
else if ( $_GET[index] == "report_kalibrasi_cr" ) {
	include ("rep_kalibrasi/report_kalibrasi_cr.php");
	}
else if ( $_GET[index] == "report_kalibrasi_email" ) {
	include ("rep_kalibrasi/report_kalibrasi_email.php");
	}
else if ( $_GET[index] == "report_kalibrasi_galeri" ) {
	include ("rep_kalibrasi/report_kalibrasi_galeri.php");
	}
else if ( $_GET[index] == "report_kalibrasi_galeri_kasir" ) {
	include ("rep_kalibrasi/report_kalibrasi_galeri_kasir.php");
	}
else if ( $_GET[index] == "report_kalibrasi_iic" ) {
	include ("rep_kalibrasi/report_kalibrasi_iic.php");
	}
else if ( $_GET[index] == "report_kalibrasi_inbound" ) {
	include ("rep_kalibrasi/report_kalibrasi_inbound.php");
	}
else if ( $_GET[index] == "report_kalibrasi_sli" ) {
	include ("rep_kalibrasi/report_kalibrasi_sli.php");
	}
else if ( $_GET[index] == "report_kalibrasi_telesales" ) {
	include ("rep_kalibrasi/report_kalibrasi_telesales.php");
	}
else if ( $_GET[index] == "report_kalibrasi_twitter" ) {
	include ("rep_kalibrasi/report_kalibrasi_twitter.php");
	}
else if ( $_GET[index] == "report_kalibrasi_collection" ) {
	include ("rep_kalibrasi/report_kalibrasi_collection.php");
	}
else if ( $_GET[index] == "report_kalibrasi_credit" ) {
	include ("rep_kalibrasi/report_kalibrasi_credit.php");
	}
	
//21-08-2014	
else if ( $_GET[index] == "Report_SumCENCE" ) {
	include ("Report_SumCENCE.php");
	}
	//26-08-2014	
else if ( $_GET[index] == "hotIssueIB" ) {
	include ("hotIssue/hotIssueIB.php");
	}
else if ( $_GET[index] == "hotIssueCR" ) {
	include ("hotIssue/hotIssueCR.php");
	}
else if ( $_GET[index] == "hotIssueTele" ) {
	include ("hotIssue/hotIssueTele.php");
	}
else if ( $_GET[index] == "hotIssueEmail" ) {
	include ("hotIssue/hotIssueEmail.php");
	}
else if ( $_GET[index] == "hotIssueTwit" ) {
	include ("hotIssue/hotIssueTwit.php");
	}
else if ( $_GET[index] == "hotIssueIIC" ) {
	include ("hotIssue/hotIssueIIC.php");
	}
else if ( $_GET[index] == "hotIssueSLI" ) {
	include ("hotIssue/hotIssueSLI.php");
	}
else if ( $_GET[index] == "hotIssueGal" ) {
	include ("hotIssue/hotIssueGal.php");
	}
else if ( $_GET[index] == "hotIssueGalKas" ) {
	include ("hotIssue/hotIssueGalKas.php");
	}
else if ( $_GET[index] == "hotIssueColl" ) {
	include ("hotIssue/hotIssueColl.php");
	}
else if ( $_GET[index] == "add_inbound_top" ) {
	include ("add/add_inbound_top.php");
	}
else if ( $_GET[index] == "report_inbound_top" ) {
	include ("report/report_inbound_top.php");
	}
else if ( $_GET[index] == "add_newHireIB" ) {
	include ("add/add_newHireIB.php");
	}
else if ( $_GET[index] == "add_newHireIB2" ) {
	include ("add/add_newHireIB2.php");
	}
else if ( $_GET[index] == "add_credit_control" ) {
	include ("add/add_credit_control.php");
	}
	else if ( $_GET[index] == "tes" ) {
	include ("add/tes.php");
	}
else if ( $_GET[index] == "report_newHireIB" ) {
	include ("report/report_newHireIB.php");
	}
else if ( $_GET[index] == "report_newHireIB2" ) {
	include ("report/report_newHireIB2.php");
	}
else if ( $_GET[index] == "report_credit" ) {
	include ("report/report_credit_controlHUA.php");
	}


?>
