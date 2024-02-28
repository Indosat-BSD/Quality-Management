<?
session_name("AUTHEN");
session_start();
//echo"$SES_USERNAME";
if ($SES_hendi<>"")
{
date_default_timezone_set('Asia/Jakarta');
?>
	<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>QM Standard COPC Application</title>
<link rel="stylesheet" href="css/style.default.css" type="text/css" />

<link rel="stylesheet" href="css/responsive-tables.css">
<script type="text/javascript" src="js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<script type="text/javascript" src="js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript" src="js/charCount.js"></script>
<script type="text/javascript" src="js/colorpicker.js"></script>
<script type="text/javascript" src="js/ui.spinner.min.js"></script>
<script type="text/javascript" src="js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.cookie.js"></script>
<script type="text/javascript" src="js/modernizr.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
<script type="text/javascript" src="js/forms.js"></script>

<script type="text/javascript" src="js/jquery.dataTables.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function(){
        // dynamic table
        jQuery('#dyntable').dataTable({
            "sPaginationType": "full_numbers",
            "aaSortingFixed": [[0,'asc']],
            "fnDrawCallback": function(oSettings) {
                jQuery.uniform.update();
            }
        });
        
        jQuery('#dyntable2').dataTable( {
            "bScrollInfinite": true,
            "bScrollCollapse": true,
            "sScrollY": "300px"
        });
        
    });
</script>
<!--[if lte IE 8]><script language="javascript" type="text/javascript" src="js/excanvas.min.js"></script><![endif]-->
</head>

<body>

<div class="mainwrapper">
    
    <div class="header">
        <div class="logo">
            <a href="page.php"><img src="images/indosat1.png" alt="" /></a>
        </div>
        <div class="headerinner"><font color="#FFFFFF" face="Century Gothic" size="+3"></font>
            <ul class="headmenu">
                <li >
                  
                </li>
                <li>
                    
                </li>
                <li class="odd">
                </li>
                <li class="right">
                    <div class="userloggedinfo">
					<img src="images/user.png" class="head-icon" alt="" />
					<span class="head-icon"></span>
                      <div class="userinfo">
                            <h5><?php echo $_SESSION['SES_FULLNAME'];$_SESSION['username'];?></h5>
                            <ul>
                                
                                <li><a href="logout.php">Sign Out</a></li>
                                <li>QM COPC Application</li>
                            </ul>
                      </div>
                    </div>
                </li>
            </ul><!--headmenu-->
        </div>
    </div>
    
    <div class="leftpanel">
        
        <div class="leftmenu">        
            <ul class="nav nav-tabs nav-stacked">
			<? if ($SES_KODE_LEVEL !="mitra"){?>
                <li class="dropdown"><a href="#"><span class="iconfa-pencil"></span> Form QA</a>
                	<ul>
						<? if ( $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="inbound"){?>
						<li><a href="?index=add_newHireIB" ><span>F. New Hire Inbound</span></a></li>
						<li><a href="?index=add_inbound" ><span>F. Inbound</span></a></li>
						<li><a href="?index=add_inbound_top" ><span>F. Inbound Top 10</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="cr"){?>
						<li><a href="?index=add_cr" ><span>F. Customer Relation</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="admin" or  $SES_KODE_LEVEL=="telesales"){?>
						<li><a href="?index=add_telesales"  ><span>F. Telesales</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="corres"){?>
						<li><a href="?index=add_email" ><span>F. Corres Email</span></a></li>
						<li><a href="?index=add_twitter" ><span>F. Corres Twitter</span></a></li>
						
						<? }  if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="galeri"){?>
						<li><a href="?index=add_galeri" ><span>F. Galeri</span></a></li>
						<li><a href="?index=add_galeri_kasir"><span>F. Galeri Kasir</span></a></li>
						
						<? }if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="iic"){?>
						<li><a href="?index=add_iic" ><span>F. IIC</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="sli"){?>
						<li><a href="?index=add_sli" ><span>F. SLI</span></a></li>
						
						<? }if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="cch"){?>
						<li><a href="?index=add_credit_control" ><span>F. VERIFIKASI HQ</span></a></li>
						
						<? }if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="collection" ){?>
						<li><a href="?index=add_collection" ><span>F. Collection</span></a></li>
						<!-- Tambahan Baru------------------------------------------------------------->
						<? }if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="hua" ){?>
						<li><a href="?index=add_hua" ><span>F. HUA</span></a></li>
						
						<? }if ($SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="rb" ){?>
						<li><a href="?index=add_return_billing" ><span>F. RETURN BILLING</span></a></li>
						<? }?>
					</ul>
				</li>	
				<? } ?>
				<? if ($SES_KODE_LEVEL=="validator" or $SES_JABATAN == "Supervisor"  or $SES_JABATAN == "Manager" or $SES_JABATAN == "Staff" ){?>
				<? if ($SES_KODE_LEVEL !="mitra"){?>
				<li class="dropdown"><a href="#"><span class="iconfa-pencil"></span> Form Validasi</a>
                	<ul>
						<? if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="inbound"){?>
						<li><a href="?index=kalibrasi_inbound" ><span>F. Validasi Inbound</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="cr"){?>
						<li><a href="?index=kalibrasi_cr" ><span>F. Validasi CR</span></a></li>
						
						<? }if ($SES_KODE_LEVEL=="validator"  or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="telesales"){?>
						<li><a href="?index=kalibrasi_telesales"  ><span>F. Validasi Telesales</span></a></li>
						
						<? }if ($SES_KODE_LEVEL=="validator"  or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="corres"){?>
						<li><a href="?index=kalibrasi_email" ><span>F. Validasi Corres Email</span></a></li>
						<li><a href="?index=kalibrasi_twitter" ><span>F. Validasi Corres Twitter</span></a></li>
						
						<? }  if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="galeri"){?>
						<li><a href="?index=kalibrasi_galeri" ><span>F. Validasi Galeri</span></a></li>
						<li><a href="?index=kalibrasi_galeri_kasir"><span>F. Validasi Galeri Kasir</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator"  or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="iic"){?>
						<li><a href="?index=kalibrasi_iic" ><span>F. Validasi IIC</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator"  or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="sli"){?>
						<li><a href="?index=kalibrasi_sli" ><span>F. Validasi SLI</span></a></li>
						
						<? }if ($SES_KODE_LEVEL=="validator"  or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="sli"){?>
						<li><a href="?index=kalibrasi_credit_control" ><span>F. Validasi Verifikasi HQ</span></a></li>
						
						<? }if ($SES_KODE_LEVEL=="validator"  or $SES_KODE_LEVEL=="admin"  or $SES_KODE_LEVEL=="collection" ){?>
						<li><a href="?index=kalibrasi_collection" ><span>F. Validasi Collection</span></a></li>
						<? }if ($SES_KODE_LEVEL=="validator"  or $SES_KODE_LEVEL=="admin"  or $SES_KODE_LEVEL=="hua" ){?>
						<li><a href="?index=kalibrasi_hua" ><span>F. Validasi HUA</span></a></li>
						<? }if ($SES_KODE_LEVEL=="validator"  or $SES_KODE_LEVEL=="admin"  or $SES_KODE_LEVEL=="return_billing" ){?>
						<li><a href="?index=kalibrasi_rb" ><span>F. Validasi RETURN BILLING</span></a></li>
						<? }?>
					</ul>
				</li>
				<? } }?>
				
				<li class="dropdown"><a href="#"><span class="iconfa-table"></span>Report QA</a>
					<ul>
						<? if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="inbound"){?>
						<li><a href="?index=report_SumIBOther" ><span>R. Summary IB Other</span></a></li>
						<li><a href="?index=report_newHireIB" ><span>R. New Hire Inbound</span></a></li>
						<li><a href="?index=report_inbound" ><span>R. Inbound</span></a></li>
						<li><a href="?index=report_inbound_top" ><span>R. Inbound Top 10</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="cr"){?>						
						<li><a href="?index=report_cr" ><span>R. Customer Relation</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="telesales"){?>
						<li><a href="?index=report_telesales"><span>R. Telesales</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="corres"){?>			
						<li><a href="?index=report_email" ><span>R. Corres Email</span></a></li>
						<li><a href="?index=report_twitter" ><span>R. Corres Twitter</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="galeri"){?>
						<li><a href="?index=report_galeri"><span>R. Galeri</span></a></li>
						<li><a href="?index=report_galeri_kasir" ><span>R. Galeri Kasir</span></a></li>
			
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="iic"){?>
						<li><a href="?index=report_iic"><span>R. IIC</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="sli"){?>
						<li><a href="?index=report_sli"><span>R. SLI</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="sli"){?>
						<li><a href="?index=report_credit"><span>R.VERIFIKASI HQ</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="collection" or $SES_KODE_LEVEL=="mitra" ){?>
						<li><a href="?index=report_collection"><span>R. Collection</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="hua" or $SES_KODE_LEVEL=="mitra" ){?>
						<li><a href="?index=report_hua"><span>R. HUA</span></a></li>
					
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="rb" or $SES_KODE_LEVEL=="mitra" ){?>
						<li><a href="?index=report_return_billing"><span>R. Return Billing</span></a></li>
						<? }?>
					</ul>
				</li>
				
				<? if ($SES_KODE_LEVEL=="validator" or $SES_JABATAN == "Supervisor" or $SES_JABATAN == "Manager" or $SES_JABATAN == "Staff" ){?>
				<li class="dropdown"><a href="#"><span class="iconfa-table"></span>Report Validasi</a>
					<ul>
						<? if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="inbound"){?>	
						<li><a href="?index=report_kalibrasi_inbound" ><span>R.Validasi Inbound</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="cr"){?>	
						<li><a href="?index=report_kalibrasi_cr" ><span>R.Validasi CR</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="telesales"){?>
						<li><a href="?index=report_kalibrasi_telesales"><span>R.Validasi Telesales</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="corres"){?>		
						<li><a href="?index=report_kalibrasi_email" ><span>R.Validasi Corres Email</span></a></li>
						<li><a href="?index=report_kalibrasi_twitter" ><span>R.Validasi Corres Twitter</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="galeri"){?>
						<li><a href="?index=report_kalibrasi_galeri"><span>R.Validasi Galeri</span></a></li>
						<li><a href="?index=report_kalibrasi_galeri_kasir" ><span>R.Validasi Galeri Kasir</span></a></li>
			
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="iic"){?>
						<li><a href="?index=report_kalibrasi_iic"><span>R.Validasi IIC</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="sli"){?>
						<li><a href="?index=report_kalibrasi_sli"><span>R.Validasi SLI</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="mitra" or $SES_KODE_LEVEL=="admin" or $SES_KODE_LEVEL=="sli"){?>
						<li><a href="?index=report_kalibrasi_credit"><span>R.Validasi Verifikasi HQ</span></a></li>
						
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="admin"  or $SES_KODE_LEVEL=="collection" or $SES_KODE_LEVEL=="mitra" ){?>
						<li><a href="?index=report_kalibrasi_collection"><span>R.Validasi Collection</span></a></li>
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="admin"  or $SES_KODE_LEVEL=="hua" or $SES_KODE_LEVEL=="mitra" ){?>
						<li><a href="?index=report_kalibrasi_hua"><span>R.Validasi HUA</span></a></li>
					
						<? } if ($SES_KODE_LEVEL=="validator" or $SES_KODE_LEVEL=="admin"  or $SES_KODE_LEVEL=="rb" or $SES_KODE_LEVEL=="mitra" ){?>
						<li><a href="?index=report_kalibrasi_rb"><span>R.Validasi Return Billing</span></a></li>
						<? }?>
					</ul>
				</li>
				<? } ?>
				<li class="dropdown"><a href="#" ><span class="iconfa-signal"></span>Report Summary CE-NCE</a>
					<ul>
						<li><a href="?index=Report_SumCENCE" ><span>Inbound</span></a></li>
					</ul>
				</li>
				<li class="dropdown"><a href="#" ><span class="iconfa-thumbs-up"></span>Top 10 Activity Code</a>
					<ul>
						<li><a href="?index=hotIssueIB" >Inbound</a></li>
						<li><a href="?index=hotIssueCR" >CR</a></li>
						<li><a href="?index=hotIssueTele" >Telesales</a></li>
						<li><a href="?index=hotIssueEmail" >Corres Email</a></li>
						<li><a href="?index=hotIssueTwit" >Corres Twitter</a></li>
						<li><a href="?index=hotIssueGal" >Galeri</a></li>
						<li><a href="?index=hotIssueGalKas" >Galeri Kasir</a></li>
						<li><a href="?index=hotIssueIIC" >IIC</a></li>
						<li><a href="?index=hotIssueSLI" >SLI</a></li>
						<li><a href="?index=hotIssueColl" >Collection</a></li>
					</ul>
				</li>
				<? if ($SES_KODE_LEVEL =="admin"){?>
				<li><a href="?index=userLB" ><span class="iconfa-user"></span>User LB</a></li>
				<? } ?>
				<li><a href="http://infiniti/" target="_blank" ><span class="iconfa-book"></span>INFINITI</a></li>
				<li><a href="http://icare-siebel/" target="_blank" ><span class="iconfa-book"></span>SIEBEL</a></li>
		</ul>
	</div>
	
	</div><!-- leftpanel -->
    
    <div class="rightpanel">
      <div class="pageheader"> 
		
		<? if($_GET["index"] == "add_cr") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
				 	<h5>QM COPC Application</h5>
					<h1>FORM CUSTOMER RELATION </h1>
				</div>
		<?	} 
			if($_GET["index"] == "add_email") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM CORRES EMAIL</h1>
				</div>
		<?	} 
			if($_GET["index"] == "add_galeri") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM GALERI</h1>
				</div>
		<?	}
			if($_GET["index"] == "add_galeri_kasir") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM GALERI KASIR</h1>
				</div>
		<?	} 
			if($_GET["index"] == "add_iic") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM IIC</h1>
				</div>
		<?	}
			if($_GET["index"] == "add_inbound") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM INBOUND</h1>
				</div>
		<?	}
			if($_GET["index"] == "add_newHireIB") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM NEW HIRE INBOUND</h1>
				</div>
		<?	}
		
		if($_GET["index"] == "add_newHireIB2") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM NEW SELECTION</h1>
				</div>
		<?	}
			if($_GET["index"] == "add_inbound_top") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM INBOUND TOP 10</h1>
				</div>
		<?	}
			if($_GET["index"] == "add_sli") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM SLI</h1>
				</div>
		<?	}
			if($_GET["index"] == "add_telesales") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM TELESALES</h1>
				</div>
		<?	}
			if($_GET["index"] == "add_twitter") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM CORRES TWITTER</h1>
			
				</div>
		<?	}
			if($_GET["index"] == "add_collection") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM COLLECTION</h1>
				</div>
		<?	}
		if($_GET["index"] == "kalibrasi_cr") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
				 	<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI CUSTOMER RELATION </h1>
				</div>
		<?	} 
			if($_GET["index"] == "kalibrasi_email") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI CORRES EMAIL</h1>
				</div>
		<?	} 
			if($_GET["index"] == "kalibrasi_galeri") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI GALERI</h1>
				</div>
		<?	}
			if($_GET["index"] == "kalibrasi_galeri_kasir") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI GALERI KASIR</h1>
				</div>
		<?	} 
			if($_GET["index"] == "kalibrasi_iic") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI IIC</h1>
				</div>
		<?	}
			if($_GET["index"] == "kalibrasi_inbound") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI INBOUND</h1>
				</div>
		<?	}
			if($_GET["index"] == "kalibrasi_sli") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI SLI</h1>
				</div>
		<?	}
			if($_GET["index"] == "kalibrasi_telesales") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI TELESALES</h1>
				</div>
		<?	}
			if($_GET["index"] == "kalibrasi_twitter") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI CORRES TWITTER</h1>
			
				</div>
		<?	}
			if($_GET["index"] == "add_credit_control") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VERIFIKASI HQ</h1>
				</div>
		<?	}
			if($_GET["index"] == "kalibrasi_collection") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI COLLECTION</h1>
				</div>
		<?	}		
			if($_GET["index"] == "kalibrasi_credit_control") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI VERIFIKASI HQ</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_collection") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT COLLECTION</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_cr") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT CUSTOMER RELATION </h1>
				</div>
		<?	}
			if($_GET["index"] == "report_email") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT CORRES EMAIL</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_galeri") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT GALERI</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_galeri_kasir") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT GALERI KASIR</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_iic") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT IIC</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_inbound") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT INBOUND</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_newHireIB") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT NEW HIRE INBOUND</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_newHireIB2") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT NEW SELECTION</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_credit") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VERIFIKASI HQ</h1>
				</div>
		<?	}
		
			if($_GET["index"] == "report_inbound_top") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT INBOUND TOP 10</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_sli") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT SLI</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_telesales") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT TELESALES</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_twitter") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT CORRES TWITTER</h1>
				</div>
		<?	}
		if($_GET["index"] == "report_kalibrasi_collection") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI COLLECTION</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_kalibrasi_cr") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI CUSTOMER RELATION </h1>
				</div>
		<?	}
			if($_GET["index"] == "report_kalibrasi_email") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI CORRES EMAIL</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_kalibrasi_galeri") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI GALERI</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_kalibrasi_galeri_kasir") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI GALERI KASIR</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_kalibrasi_iic") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI IIC</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_kalibrasi_inbound") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI INBOUND</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_kalibrasi_sli") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI SLI</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_kalibrasi_telesales") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI TELESALES</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_kalibrasi_twitter") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI CORRES TWITTER</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_kalibrasi_credit") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI VERIFIKASI HQ</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_SumIBOther") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT SUMMARY INBOUND OTHER</h1>
				</div>
		<?	}
			if($_GET["index"] == "userLB") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>USER LB</h1>
				</div>
		<?	}
			if($_GET["index"] == "Report_SumCENCE") 
			{ ?>
				<div class="pageicon"><span class="iconfa-signal"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT SUMMARY CE - NCE</h1>
				</div>
		<?	}
			if($_GET["index"] == "hotIssueIB") 
			{ ?>
				<div class="pageicon"><span class="iconfa-thumbs-up"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>TOP 10 ACTIVITY CODE INBOUND</h1>
				</div>
		<?	}
			if($_GET["index"] == "hotIssueCR") 
			{ ?>
				<div class="pageicon"><span class="iconfa-thumbs-up"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>TOP 10 ACTIVITY CODE CR</h1>
				</div>
		<?	}
			if($_GET["index"] == "hotIssueTele") 
			{ ?>
				<div class="pageicon"><span class="iconfa-thumbs-up"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>TOP 10 ACTIVITY CODE TELESALES</h1>
				</div>
		<?	}
			if($_GET["index"] == "hotIssueEmail") 
			{ ?>
				<div class="pageicon"><span class="iconfa-thumbs-up"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>TOP 10 ACTIVITY CODE EMAIL</h1>
				</div>
		<?	}
			if($_GET["index"] == "hotIssueTwit") 
			{ ?>
				<div class="pageicon"><span class="iconfa-thumbs-up"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>TOP 10 ACTIVITY CODE TWITTER</h1>
				</div>
		<?	}
			if($_GET["index"] == "hotIssueGal") 
			{ ?>
				<div class="pageicon"><span class="iconfa-thumbs-up"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>TOP 10 ACTIVITY CODE GALERI</h1>
				</div>
		<?	}
			if($_GET["index"] == "hotIssueGalKas") 
			{ ?>
				<div class="pageicon"><span class="iconfa-thumbs-up"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>TOP 10 ACTIVITY CODE GALERI KASIR</h1>
				</div>
		<?	}
		if($_GET["index"] == "hotIssueIIC") 
			{ ?>
				<div class="pageicon"><span class="iconfa-thumbs-up"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>TOP 10 ACTIVITY CODE IIC</h1>
				</div>
		<?	}
		if($_GET["index"] == "hotIssueSLI") 
			{ ?>
				<div class="pageicon"><span class="iconfa-thumbs-up"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>TOP 10 ACTIVITY CODE SLI</h1>
				</div>
		<?	}
		if($_GET["index"] == "hotIssueColl") 
			{ ?>
				<div class="pageicon"><span class="iconfa-thumbs-up"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>TOP 10 ACTIVITY CODE COLLECTION</h1>
				</div>
		<?	}
		if($_GET["index"] == "add_hua") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM HUA</h1>
				</div>
		<?	}
		if($_GET["index"] == "add_return_billing") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM RETURN BILLING</h1>
				</div>
		<?	}
		if($_GET["index"] == "kalibrasi_hua") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI HUA</h1>
				</div>
		<?	}
		if($_GET["index"] == "kalibrasi_rb") 
			{ ?>
				<div class="pageicon"><span class="iconfa-pencil"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>FORM VALIDASI RETURN BILLING</h1>
				</div>
		<?	}
		if($_GET["index"] == "report_hua") 
				{ ?>
					<div class="pageicon"><span class="iconfa-table"></span></div>
					 <div class="pagetitle">
						<h5>QM COPC Application</h5>
						<h1>REPORT HUA</h1>
					</div>
		<?	}	
			if($_GET["index"] == "report_return_billing") 
				{ ?>
					<div class="pageicon"><span class="iconfa-table"></span></div>
					 <div class="pagetitle">
						<h5>QM COPC Application</h5>
						<h1>REPORT RETURN BILLING</h1>
					</div>
		<?	}				
		if($_GET["index"] == "report_kalibrasi_hua") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI HUA</h1>
				</div>
		<?	}
			if($_GET["index"] == "report_kalibrasi_rb") 
			{ ?>
				<div class="pageicon"><span class="iconfa-table"></span></div>
				 <div class="pagetitle">
					<h5>QM COPC Application</h5>
					<h1>REPORT VALIDASI RETURN BILLING</h1>
				</div>
		<?	}
		?>
			
        </div><!--pageheader-->
        
        <div class="maincontent">
            <div class="maincontentinner">
                <div class="row-fluid" style="overflow:auto">
					 <?
					 include "content.php";
					 ?>                  
                </div><!--row-fluid-->
                
                <div class="footer">
                    <div class="footer-left">
                        <span>&copy; 2014. CRM Application Solution.</span>
                    </div>
                    <div class="footer-right">
                        <span>The Best View In Browser Firefox ,  <a href="https://www.google.com/intl/id/chrome/browser/">Google Chrome </a> & Internet Explore 10.</span>
    
                    </div>
                </div><!--footer-->
                
            </div><!--maincontentinner-->
        </div><!--maincontent-->
        
    </div><!--rightpanel-->
    
</div><!--mainwrapper-->
<script type="text/javascript">
    jQuery(document).ready(function() 
    {
        
           
        //datepicker
        jQuery('#datepicker').datepicker();
        jQuery('#datepicker1').datepicker();
  
    
    });
</script>
</body>
</html>

<? }
elseif ($SES_hendi=="")
{
	
?>
	<script type="text/javascript">
	window.alert("Anda belum login")
	window.location="index.php"
	</script>
<?
}
?>