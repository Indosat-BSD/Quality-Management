<?
session_name("AUTHEN");
session_start();

$id = $_GET['id_qm'];
//echo"$SES_USERNAME";
if ($SES_hendi<>"")
{

include "../konek_qm.php";
date_default_timezone_set('Asia/Jakarta');
 
?>

<head>
<title>Form Input Validasi Telesales</title>
<script language="javascript" src="../js/jam.js"></script>
<script language="javascript" src="../js/menit.js"></script>
<style type="text/css">
<!--
.style3 {font-size: 18px}
-->
</style>
<link rel="stylesheet" href="../css/style.default2.css" type="text/css" />

<link rel="stylesheet" href="../css/responsive-tables.css">
<script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-migrate-1.1.1.min.js"></script>
<script type="text/javascript" src="../js/jquery-ui-1.9.2.min.js"></script>
<script type="text/javascript" src="../js/bootstrap.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-fileupload.min.js"></script>
<script type="text/javascript" src="../js/bootstrap-timepicker.min.js"></script>
<script type="text/javascript" src="../js/jquery.uniform.min.js"></script>
<script type="text/javascript" src="../js/jquery.validate.min.js"></script>
<script type="text/javascript" src="../js/jquery.tagsinput.min.js"></script>
<script type="text/javascript" src="../js/jquery.autogrow-textarea.js"></script>
<script type="text/javascript" src="../js/charCount.js"></script>
<script type="text/javascript" src="../js/colorpicker.js"></script>
<script type="text/javascript" src="../js/ui.spinner.min.js"></script>
<script type="text/javascript" src="../js/chosen.jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.cookie.js"></script>
<script type="text/javascript" src="../js/modernizr.min.js"></script>
<script type="text/javascript" src="../js/custom.js"></script>
<script type="text/javascript" src="../js/forms.js"></script>

<script type="text/javascript" src="../js/jquery.dataTables.min.js"></script>
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

<script type="text/javascript" >
	function refresh() {
	window.location.reload(false)
	}
	
</script>
	
<SCRIPT TYPE="text/javascript">

<!--
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=700,height=500,scrollbars=yes');
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
window.open(href, windowname, 'width=790,height=500,scrollbars=yes');
return false;
}

//-->
</SCRIPT>
<script type="text/javascript" >
	function refresh() {
	window.location.reload(false)
	}
	
	</script>
</head>

<form action="<? $PHP_SELF; ?>" method="post" name="welcome" id="welcome" onKeyPress="return noenter()">
<table width="935" border="1"  class="table table-bordered table-infinite">
<thead>
    <tr bgcolor="#CCCCCC" >
      <th width="17" class="head0"><div align="center">No</div></th>
      <th width="36"  class="head0"><div align="center">Category</div></th>
      <th width="232" class="head0"><div align="center">Attributes</div></th>
      <th width="71"  class="head0"><div align="center">Bobot</div></th>
      <th width="176"  class="head0" bgcolor="#CCCCCC"><div align="center">Scale</div></th>
      <th width="363"  class="head0" bgcolor="#CCCCCC"><div align="center">Notes</div></th>
    </tr>
</thead>
	<tr>
      <td rowspan="2">1</td>
      <td rowspan="2">Opening</td>
      <td>Greeting with enthusiasm</td>
      <td><div align="center">7.5</div></td>
	  <td><div align="left"><input name="sc1" type="radio"  value="7.5" <? if ($sc1=="7.5") {echo "checked";} else {echo "";} ?>/>
  7.5
    <input name="sc1" type="radio"  value="0" <? if ($sc1=="0") {echo "checked";} else {echo "";} ?>/>
  0
	  </div></td>
	  <td><textarea name="notes1" cols="35" id="notes1" onkeypress="javascript: checkValuenotes1();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes1="";}?><? echo "$notes1"; ?></textarea>
		  <input name="jml_notes1" type="text" "disabled" id="jml_notes1" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
    <tr>
      <td>Purpose to call & Confirmation</td>
      <td><div align="center">5</div></td>
	  <td><div align="left"><input name="sc2" type="radio"  value="5" <? if ($sc2=="5") {echo "checked";} else {echo "";} ?>/>
  5
    <input name="sc2" type="radio"  value="0" <? if ($sc2=="0") {echo "checked";} else {echo "";} ?>/>
  0
	  </div></td>
	  <td><textarea name="notes2" cols="35" id="notes2" onkeypress="javascript: checkValuenotes2();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes2="";}?><? echo "$notes2"; ?></textarea>
          <input name="jml_notes2" type="text" "disabled" id="jml_notes2" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
    <tr>
      <td rowspan="2">2</td>
      <td rowspan="2">Solution</td>
      <td><div style="background-color:#E0E0D1">Input Accuracy Data & Verification Address Customer</div></td>
      <td><div align="center">30</div></td>
      <td><input name="sc3" type="radio"  value="3" <? if ($sc3=="3") {echo "checked";} else {echo "";} ?> />
      3 
        <input name="sc3" type="radio"  value="2" <? if ($sc3=="2") {echo "checked";} else {echo "";} ?> />
      2
      <input name="sc3" type="radio"  value="1" <? if ($sc3=="1") {echo "checked";} else {echo "";} ?> />
1</td>
      <td><textarea name="notes3" cols="35" id="notes3" onkeypress="javascript: checkValuenotes2();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes3="";}?><? echo "$notes3"; ?></textarea>
          <input name="jml_notes3" type="text" "disabled" id="jml_notes3" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    </tr>
    <tr>
      <td>Process Compliance/Privacy Policy</td>
      <td><div align="center">15</div></td>
	  <td><div align="left"><input name="sc4" type="radio"  value="15" <? if ($sc4=="15") {echo "checked";} else {echo "";} ?>/>
  15
    <input name="sc4" type="radio"  value="0" <? if ($sc4=="0") {echo "checked";} else {echo "";} ?>/>
  0
	  </div></td>
	  <td><textarea name="notes4" cols="35" id="notes4" onkeypress="javascript: checkValuenotes2();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes4="";}?><? echo "$notes4"; ?></textarea>
          <input name="jml_notes4" type="text" "disabled" id="jml_notes4" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
    <tr>
      <td>3</td>
      <td>Closing</td>
      <td>Closing Greeting</td>
      <td><div align="center">7.5</div></td>
      <td><input name="sc5" type="radio"  value="7.5" <? if ($sc5=="7.5") {echo "checked";} else {echo "";} ?> />
      7.5 
        <input name="sc5" type="radio"  value="0" <? if ($sc5=="0") {echo "checked";} else {echo "";} ?> />
      0
      <td><textarea name="notes5" cols="35" id="notes5" onkeypress="javascript: checkValuenotes3();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes5="";}?><? echo "$notes5"; ?></textarea>
          <input name="jml_notes5" type="text" "disabled" id="jml_notes5" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td rowspan="3">4</td>
      <td rowspan="3">Teknis berbicara / Effective Communication</td>
	  <td>Hospitality / kesopanan (relate to Manner)</td>
      <td><div align="center">15</div></td>
      <td><input name="sc6" type="radio"  value="15" <? if ($sc6=="15") {echo "checked";} else {echo "";} ?> />
      15 
        <input name="sc6" type="radio"  value="0" <? if ($sc6=="0") {echo "checked";} else {echo "";} ?> />
      0
      <td><textarea name="notes6" cols="35" id="notes6" onkeypress="javascript: checkValuenotes4();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes6="";}?><? echo "$notes6"; ?></textarea>
          <input name="jml_notes6" type="text" "disabled" id="jml_notes6" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td><div style="background-color:#E0E0D1">Personalize Communication</div></td>
      <td><div align="center">15</div></td>
	  <td><div align="left"><input name="sc7" type="radio"  value="3" <? if ($sc7=="3") {echo "checked";} else {echo "";} ?>/>
  3
    <input name="sc7" type="radio"  value="2" <? if ($sc7=="2") {echo "checked";} else {echo "";} ?>/>
  2
    <input name="sc7" type="radio"  value="1" <? if ($sc7=="1") {echo "checked";} else {echo "";} ?>/>
  1  
	  </div></td>
	  <td><textarea name="notes7" cols="35" id="notes7" onkeypress="javascript: checkValuenotes2();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes7="";}?><? echo "$notes7"; ?></textarea>
          <input name="jml_notes7" type="text" "disabled" id="jml_notes7" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
    <tr>
      <td>Not Use jargon</td>
      <td><div align="center">5</div></td>
	  <td><div align="left"><input name="sc8" type="radio"  value="5" <? if ($sc8=="5") {echo "checked";} else {echo "";} ?>/>
  5
    <input name="sc8" type="radio"  value="0" <? if ($sc8=="0") {echo "checked";} else {echo "";} ?>/>
  0
	  </div></td>
	  <td><textarea name="notes8" cols="35" id="notes8" onkeypress="javascript: checkValuenotes3();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes8="";}?><? echo "$notes8"; ?></textarea>
          <input name="jml_notes8" type="text" "disabled" id="jml_notes8" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
    <tr>
      <td colspan="6">
	  <?
	  	if ($sc1 !="")
		{
			//echo $sc1;	
			$tot1=$sc1;
		}
		else{
			//echo "0.0";
			$tot1=0.0;
		}
		
		if ($sc2 !="")
		{
			//echo $sc2;
			$tot2=$sc2;
		}
		else{
			//echo "0";
			$tot2=0;
		}
		
		if ($sc3=="3")
		{
			//echo "30";
			$tot3=30;
		}
		else if ($sc3=="2")
		{
			//echo "15";
			$tot3=15;
		}
		else if ($sc3=="1")
		{
			//echo "0";
			$tot3=0;
		}		
		else
		{
			//echo "0";
			$tot3=0;
		}
		
		if ($sc4 !="")
		{
			//echo $sc2;
			$tot4=$sc4;
		}
		else
		{
			//echo "0";
			$tot4=0;
		}
		
		if ($sc5 !="")
		{
			// echo $sc5
			$tot5=$sc5;
		}
		else
		{
			//echo "0.0";
			$tot5=0.0;
		}
		
		if ($sc6 !="")
		{
			//echo $sc6;
			$tot6=$sc6;
		}
		else
		{
			//echo "0";
			$tot6=0;
		}

		if ($sc7=="3")
		{
			//echo "15";
			$tot7=15;
		}
		else if ($sc7=="2")
		{
			//echo "8";
			$tot7=8;
		}
		else if ($sc7=="1")
		{
			//echo "4";
			$tot7=4;
		}		
		else
		{
			//echo "0";
			$tot7=0;
		}

		if ($sc8 !="")
		{
			//echo $sc8;
			$tot8=$sc8;
		}
		else
		{
			//echo "0";
			$tot8=0;
		}		
				
		$save_total=$tot1+$tot2+$tot3+$tot4+$tot5+$tot6+$tot7+$tot8;
		  $s_notes1 = str_replace('"', '', "$notes1");
		  $s_notes2 = str_replace('"', '', "$notes2");
		  $s_notes3 = str_replace('"', '', "$notes3");
		  $s_notes4 = str_replace('"', '', "$notes4");
		  $s_notes5 = str_replace('"' ,'', "$notes5");
		  $s_notes6 = str_replace('"', '', "$notes6");
		  $s_notes7 = str_replace('"', '', "$notes7");
		  $s_notes8 = str_replace('"', '', "$notes8");
	  ?>
		<div align="center">
	    <input name="cek_score" type="submit" id="cek_score" value="Cek Score"  class="btn"/>
      	<? echo round($save_total,2);?>
		<br><br>
		NOTES : <br />
		<textarea name="notes_score" cols="35" rows="10"  id="notes_score"><? echo "$notes_score";?></textarea><br />
		<? $notes_score = str_replace('"', '', "$notes_score");?>
		<br />
		<input name="agree" type="radio"  value="Sesuai" <? if ($agree=="Sesuai") {echo "checked";} else {echo "";} ?> />SESUAI
   		<input name="agree" type="radio"  value="Tidak Sesuai" <? if ($agree=="Tidak Sesuai") {echo "checked";} else {echo "";} ?> />TIDAK SESUAI
		 <br /><br />
		<input type="submit" name="Submit" value="Submit" class="btn btn-primary" >
		<input name="cancel" type="submit" id="cancel" value="Cancel"  class="btn btn-primary"/>
		</div></td>
    </tr>
  </table>
 
  <table width="935" border="0">
    <tr>
      <td><div align="center">
          <p>&nbsp;          </p>
          <p></p>
          </div></td>
    </tr>
  </table>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Form Validasi Return Billing</title>
<script language="javascript" src="../js/jam.js"></script>
<script language="javascript" src="../js/menit.js"></script>

<SCRIPT TYPE="text/javascript">

<!--
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=700,height=500,scrollbars=yes');
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
window.open(href, windowname, 'width=790,height=500,scrollbars=yes');
return false;
}

//-->
</SCRIPT>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<link rel="SHORTCUT ICON" href="..images/m.png">
<link type="text/css" rel="stylesheet" href="../css/datepickercontrol.css">
<link type="text/css" rel="stylesheet" href="../css/text.css">

</head>

<body>
  <p align="center">&nbsp;</p>
  <p align="center">
    <input name="id_qm"  id="id_qm" type="hidden" value="<? echo"$id_qm"; ?>">
			  <?

echo"<SCRIPT TYPE='text/javascript'>
function confirmDelete()
{
    return confirm('Are you sure you wish to save this entry?');
}
</script>";

		  ?>
   
<?
           
			include "../konek_qm.php";
			if ($repeat=="yes")
			{
			$s_date_prev_call="$date_prev_call"; 
			$s_prev_agent="$prev_agent";
			}
			if ($repeat=="no")
			{
			$s_date_prev_call="$observation_date"; 
			$s_prev_agent="-";
			}
			
			
			
		  if ($Submit)
	  {
	  
		if( $sc1=="" or $sc2=="" or $sc3=="" or $sc4=="" or $sc5=="" or $sc6=="" or $sc7=="" or $sc8=="" or $sc9=="" or $agree =="" )
		{
			 
			?>
			
            <script type="text/javascript">
			window.alert("Value not completed")
			</script>
            <?
			}
			
		else 
			
			{
		
		$slas_e=":";
		$ss2_e=00;	
		$interaction_date_save="$interaction_date $hh$slas_e$mm$slas_e$ss2_e"; 
		
			$c ="select * from table_kalibrasi_rb where id_qm='$id_qm'";
		$q = mssql_query($c);
		$n = mssql_num_rows($q);
		
		if ($n <= 0) {
			$add="insert into table_kalibrasi_rb(notes1,notes2,notes3,notes4,notes5,notes6,notes7,notes8,notes9,q1,q2,q3,q4,q5,q6,q7,q8,q9,save_q1,save_q2,save_q3,save_q4,save_q5,save_q6,save_q7,save_q8,save_q9,status_save,id_pribadi_user,id_pribadi_observer,date_saved,tot_score,id_unit,lb,id_qm,notes_score,id_kalibrasi)
		  values('$s_notes1','$s_notes2','$s_notes3','$s_notes4','$s_notes5','$s_notes6','$s_notes7','$s_notes8','$s_notes9','$sc1','$sc2','$sc3','$sc4','$sc5','$sc6','$sc7','$sc8','0','$tot1','$tot2','$tot3','$tot4','$tot5','$tot6','$tot7','$tot8','$tot9','complete','$id_pribadi_user','$observer',getdate(),'$save_total','$kd_unit','$id_lb','$id_qm','$notes_score','$SES_hendi')";
			mssql_query($add);
		//echo "$add";
		 
		 
		 $date_saved=date("m/d/Y H:i:s");		  
	 $add2="update table_qm_rb set id_kalibrasi='$SES_hendi', kalibrasi='$agree' where id_qm='$id'";
		mssql_query($add2);
		  //echo "$add2";
			}	

			echo "	<script type='text/javascript'>
			window.close();					
					window.opener.location.reload();
			</script>";		
			}
	  }
	  
	 if ($cancel)
		{
		?>
          <script type="text/javascript">
		window.close();
		</script> 
          <?php
		}
	 
	  ?>

</p>
</form>
</body>
</html>
<? }
elseif ($SES_hendi=="")
{
	
?>
	<script type="text/javascript">
	window.alert("Anda belum login")
	window.location="http://csogateway"
	</script>
<?
}
?>



<?
session_name("AUTHEN");
session_start();
//echo"$SES_USERNAME";
if ($SES_hendi<>"")
{
include "../konek_qm.php";
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<SCRIPT type="text/javascript" LANGUAGE=JavaScript>

function checkValuenotes1() {
                TextVal = document.forms['welcome'].notes1.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes1.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes1.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes2() {
                TextVal = document.forms['welcome'].notes2.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes2.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes2.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes3() {
                TextVal = document.forms['welcome'].notes3.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes3.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes3.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes4() {
                TextVal = document.forms['welcome'].notes4.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes1.value = TextVa4.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes4.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes5() {
                TextVal = document.forms['welcome'].notes5.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes5.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes5.value = TextVal.length+1;
                        return;
                }
        }
		
		
function checkValuenotes6() {
                TextVal = document.forms['welcome'].notes6.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes6.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes6.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes7() {
                TextVal = document.forms['welcome'].notes7.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes1.value = TextVa7.substring(0,1000);

                        return false;
                } else {
                        document.forms['welcome'].jml_notes7.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes8() {
                TextVal = document.forms['welcome'].notes8.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes8.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes8.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes9() {
                TextVal = document.forms['welcome'].notes9.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes9.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes9.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes10() {
                TextVal = document.forms['welcome'].notes10.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes10.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes10.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes11() {
                TextVal = document.forms['welcome'].notes11.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes11.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes11.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes12() {
                TextVal = document.forms['welcome'].notes12.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes12.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes12.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes13() {
                TextVal = document.forms['welcome'].notes13.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes13.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes13.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes14() {
                TextVal = document.forms['welcome'].notes14.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes14.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes14.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes15() {
                TextVal = document.forms['welcome'].notes15.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes15.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes15.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes16() {
                TextVal = document.forms['welcome'].notes16.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes16.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes16.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes17() {
                TextVal = document.forms['welcome'].notes17.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes17.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes17.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes18() {
                TextVal = document.forms['welcome'].notes18.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes18.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes18.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes19() {
                TextVal = document.forms['welcome'].notes19.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes19.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes19.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes20() {
                TextVal = document.forms['welcome'].notes20.value;
                if (TextVal.length > 999) {
                        document.forms['welcome'].notes20.value = TextVal.substring(0,1000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes20.value = TextVal.length+1;
                        return;
                }
        }
		
		
</SCRIPT>

<SCRIPT TYPE="text/javascript">

<!--
function popup(mylink, windowname)
{
if (! window.focus)return true;
var href;
if (typeof(mylink) == 'string')
   href=mylink;
else
   href=mylink.href;
window.open(href, windowname, 'width=550,height=700,scrollbars=yes');
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
window.open(href, windowname, 'width=100,height=100,scrollbars=yes');
return false;
}

//-->
</SCRIPT>

</head>
<body>
  <p>&nbsp;</p>
  
  
  <p>&nbsp;</p>
</form>

</body>
</html>
<? }
elseif ($SES_hendi=="")
{
	
?>
	<script type="text/javascript">
	window.alert("Anda belum login")
	window.location="login.php"
	</script>
<?
}
?>