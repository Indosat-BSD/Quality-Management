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
else if ( $_GET[index] == "add_live_chat_facebook" ) {
	include ("add/add_live_chat_facebook.php");
	}	
else if ( $_GET[index] == "add_collection" ) {
	include ("add/add_collection.php");
	}
else if ( $_GET[index] == "add_hua" ) {
	include ("add/add_hua.php");
	}
else if ( $_GET[index] == "add_return_billing" ) {
	include ("add/add_return_billing.php");
	}
else if ( $_GET[index] == "add_process_level" ) {
	include ("add/add_process_level.php");
	}
//tabahan 13 februari 2017
else if ( $_GET[index] == "add_voce" ) {
	include ("add/add_voce.php");
	}	
//tambahan 4 April 2017 Nisa
else if ( $_GET[index] == "add_instagram" ) {
	include ("add/add_instagram.php");
	}
//tambahan 4 April 2017 Nisa
else if ( $_GET[index] == "add_vip" ) {
	include ("add/add_vip.php");
	}	
//
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
else if ( $_GET[index] == "report_vip" ) {
	include ("report/report_vip.php");
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
	else if ( $_GET[index] == "report_twitter_chart" ) {
	include ("report/report_twitter_chart.php");
	}
else if ( $_GET[index] == "report_instagram" ) {
	include ("report/report_instagram.php");
	}	
else if ( $_GET[index] == "report_live_chat_facebook" ) {
	include ("report/report_live_chat-facebook.php");
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
//TAMBAHAN YANTI
else if ( $_GET[index] == "report_hua" ) {
	include ("report/report_HUA.php");
	}
else if ( $_GET[index] == "report_return_billing" ) {
	include ("report/report_return_billing.php");
	}
else if ( $_GET[index] == "report_process_level" ) {
	include ("report/report_process_level.php");
	}
//tambahan Nisa 20 Februari 2017
else if ( $_GET[index] == "report_voce" ) {
	include ("report/report_voce.php");
	}	
else if ( $_GET[index] == "userLB" ) {
	include ("userLB.php");
	}

// form kalibrasi 
else if ( $_GET[index] == "kalibrasi_inbound" ) {
	include ("kalibrasi/kalibrasi_inbound.php");
	}
	else if ( $_GET[index] == "kalibrasi_vip" ) {
	include ("kalibrasi/kalibrasi_vip.php");
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
	else if ( $_GET[index] == "kalibrasi_live_chat_facebook" ) {
	include ("kalibrasi/kalibrasi_live_chat_facebook.php");
	}	
	else if ( $_GET[index] == "kalibrasi_telesales" ) {
	include ("kalibrasi/kalibrasi_telesales.php");
	}
else if ( $_GET[index] == "add_kalibrasi_inbound" ) {
	include ("kalibrasi/add_kalibrasi_inbound.php");
	}
	else if ( $_GET[index] == "add_kalibrasi_vip" ) {
	include ("kalibrasi/add_kalibrasi_vip.php");
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
	else if ( $_GET[index] == "kalibrasi_instagram" ) {
	include ("kalibrasi/kalibrasi_instagram.php");
	}
	else if ( $_GET[index] == "add_kalibrasi_telesales" ) {
	include ("kalibrasi/add_kalibrasi_telesales.php");
	}	
	else if ( $_GET[index] == "kalibrasi_credit_control" ) {
	include ("kalibrasi/kalibrasi_credit_control.php");
	}
	else if ( $_GET[index] == "kalibrasi_pl" ) {
	include ("kalibrasi/kalibrasi_pl.php");
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
else if ( $_GET[index] == "add_kalibrasi_credit" ) {
	include ("kalibrasi/add_kalibrasi_credit_control.php");
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
//tambahan 17 Februari 2017 Nisa
else if ( $_GET[index] == "kalibrasi_voce" ) {
	include ("kalibrasi/kalibrasi_voce.php");
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
else if ( $_GET[index] == "report_kalibrasi_vip" ) {
	include ("rep_kalibrasi/report_kalibrasi_vip.php");
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
else if ( $_GET[index] == "report_kalibrasi_instagram" ) {
	include ("rep_kalibrasi/report_kalibrasi_instagram.php");
	}
else if ( $_GET[index] == "report_kalibrasi_live_chat_facebook" ) {
	include ("rep_kalibrasi/report_kalibrasi_live_chat_facebook.php");
	}	
else if ( $_GET[index] == "report_kalibrasi_collection" ) {
	include ("rep_kalibrasi/report_kalibrasi_collection.php");
	}
else if ( $_GET[index] == "report_kalibrasi_credit" ) {
	include ("rep_kalibrasi/report_kalibrasi_credit.php");
	}
else if ( $_GET[index] == "report_kalibrasi_pl" ) {
	include ("rep_kalibrasi/report_kalibrasi_pl.php");
	}
else if ( $_GET[index] == "kalibrasi_hua" ) {
	include ("kalibrasi/kalibrasi_hua.php");
	}
else if ( $_GET[index] == "kalibrasi_rb" ) {
	include ("kalibrasi/kalibrasi_rb.php");
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
//yanti
else if ( $_GET[index] == "report_kalibrasi_hua" ) {
	include ("rep_kalibrasi/report_kalibrasi_hua.php");
	}
else if ( $_GET[index] == "report_kalibrasi_rb" ) {
	include ("rep_kalibrasi/report_kalibrasi_rb.php");
	}
//Tambahan 20 Februari 2017 - Nisa
else if ( $_GET[index] == "report_kalibrasi_voce" ) {
	include ("rep_kalibrasi/report_kalibrasi_voce.php");
	}
?>
