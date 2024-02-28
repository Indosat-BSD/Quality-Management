<?
session_name("AUTHEN");
session_start();

$id = $_GET['id'];
//echo"$SES_USERNAME";
if ($SES_hendi<>"")
{
include "../konek_qm.php";
date_default_timezone_set('Asia/Jakarta');
 
?>

<head>
<title>Form Edit Kalibrasi CR</title>
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

<? 
$query = "SELECT * FROM table_kalibrasi_cr WHERE id='{$id}'";
$result = mssql_query( $query );
$data = mssql_fetch_assoc($result);

$id_qm = $data["id_qm"];

$query = "SELECT kalibrasi FROM table_qm_cr WHERE id_qm='{$id_qm}'";
$result = mssql_query( $query );
$data2 = mssql_fetch_assoc($result);

if(!$_POST){
	$sc1 = $data["q1"];
	$sc2 = $data["q2"];
	$sc3 = $data["q3"];
	$sc4 = $data["q4"];
	$sc5 = $data["q5"];
	$sc6 = $data["q6"];
	$sc7 = $data["q7"];
	$sc8 = $data["q8"];
	$notes1 = $data["notes1"];
	$notes2 = $data["notes2"];
	$notes3 = $data["notes3"];
	$notes4 = $data["notes4"];
	$notes5 = $data["notes5"];
	$notes6 = $data["notes6"];
	$notes7 = $data["notes7"];
	$notes8 = $data["notes8"];
	$tot1 = $data["save_q1"];
	$tot2 = $data["save_q2"];
	$tot3 = $data["save_q3"];
	$tot4 = $data["save_q4"];
	$tot5 = $data["save_q5"];
	$tot6 = $data["save_q6"];
	$tot7 = $data["save_q7"];
	$tot8 = $data["save_q8"];
	$notes_score = $data["notes_score"];
	$agree = $data2["kalibrasi"];
}
$observer = $data["id_pribadi_observer"];
$id_lb = $data["lb"];
$kd_unit = $data["id_unit"];
$id_pribadi_user = $data["id_pribadi_user"];
?>
<form action="<? $PHP_SELF; ?>" method="post" name="welcome" id="welcome" onKeyPress="return noenter()">
  <table width="947" border="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="17" class="head0"><div align="center">No</div></th>
      <th width="100" class="head0"><div align="center">Category</div></th>
      <th width="300" class="head0"><div align="center">Attributes</div></th>
      <th width="50" class="head0"><div align="center">Bobot</div></th>
	  <th width="100" class="head0"><div align="center">Scale</div></th>
	  <th width="300" class="head0"><div align="center">Notes</div></th>
    </tr>
	</thead>
    <tr>
      <td>1</td>
      <td>Activity Plan</td>
	  <td>Activity Plan</td>
      <td><div align="center">5</div></td>
	  <td><div align="left"><input name="sc1" type="radio"  value="y" <? if ($sc1=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc1" type="radio"  value="n" <? if ($sc1=="n") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes1" cols="35" id="notes1" onkeypress="javascript: checkValuenotes1();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes1="";}?><? echo "$notes1"; ?></textarea>
        <input name="jml_notes1" type="text" "disabled" id="jml_notes1" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
    <tr>
	  <td>2</td>
      <td>Probing</td>
	  <td>Probing dan Analisa</td>
      <td><div align="center">15</div></td>
      <td><div align="left"><input name="sc2" type="radio"  value="y" <? if ($sc2=="y") {echo "checked";} else {echo "";} ?> />
       Y
        <input name="sc2" type="radio"  value="n" <? if ($sc2=="n") {echo "checked";} else {echo "";} ?> />
        N
        </div></td>
      <td><textarea name="notes2" cols="35" id="notes2" onkeypress="javascript: checkValuenotes2();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes2="";}?><? echo "$notes2"; ?></textarea>
          <input name="jml_notes2" type="text" "disabled" id="jml_notes2" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Solution</td>
      <td>Correct Solution</td>
      <td><div align="center">40</div></td>
      <td><div align="left"><input name="sc3" type="radio"  value="y" <? if ($sc3=="y") {echo "checked";} else {echo "";} ?> />
        Y
        <input name="sc3" type="radio"  value="n" <? if ($sc3=="n") {echo "checked";} else {echo "";} ?> />
        N
		</div></td>
      <td><textarea name="notes3" cols="35" id="notes3" onkeypress="javascript: checkValuenotes3();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes3="";}?><? echo "$notes3"; ?></textarea>
          <input name="jml_notes3" type="text" "disabled" id="jml_notes3" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Notes</td>
      <td>Notes</td>
      <td><div align="center">20</div></td>
      <td><div align="left"><input name="sc4" type="radio"  value="y" <? if ($sc4=="y") {echo "checked";} else {echo "";} ?> />
        Y
        <input name="sc4" type="radio"  value="n" <? if ($sc4=="n") {echo "checked";} else {echo "";} ?> />
        N
        </div></td>
      <td><textarea name="notes4" cols="35" id="notes4" onkeypress="javascript: checkValuenotes4();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes4="";}?><? echo "$notes4"; ?></textarea>
          <input name="jml_notes4" type="text" "disabled" id="jml_notes4" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>5</td>
      <td>Closing</td>
      <td>Courtesy & Closing</td>
      <td><div align="center">20</div></td>
      <td><div align="left"><input name="sc5" type="radio"  value="y" <? if ($sc5=="y") {echo "checked";} else {echo "";} ?> />
        Y
        <input name="sc5" type="radio"  value="n" <? if ($sc5=="n") {echo "checked";} else {echo "";} ?> />
        N
		</div></td>
      <td><textarea name="notes5" cols="35" id="notes5" onkeypress="javascript: checkValuenotes5();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes5="";}?><? echo "$notes5"; ?></textarea>
          <input name="jml_notes5" type="text" "disabled" id="jml_notes5" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
	<tr>
      <td colspan="6">
	  
	  <?
	  	if($sc1=="y"){$tot1=5;}else{$tot1=0;}
		if($sc2=="y"){$tot2=15;}else{$tot2=0;}
		if($sc3=="y"){$tot3=40;}else{$tot3=0;}
		if($sc4=="y"){$tot4=20;}else{$tot4=0;}
		if($sc5=="y"){$tot5=20;}else{$tot5=0;}

		$save_total=$tot1+$tot2+$tot3+$tot4+$tot5;
		  
		  $s_notes1 = str_replace('"', '', "$notes1");
		  $s_notes2 = str_replace('"', '', "$notes2");
		  $s_notes3 = str_replace('"', '', "$notes3");
		  $s_notes4 = str_replace('"', '', "$notes4");
		  $s_notes5 = str_replace('"' ,'', "$notes5");
	  ?>
		<div align="center">
		<input name="cek_score" type="submit" id="cek_score" value="Cek Score"  class="btn"/>
		<? echo"$save_total";?>
		<br />
		
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
<title>Form Kalibrasi CR</title>
<script language="javascript" src="../js/jam.js"></script>
<script language="javascript" src="../js/menit.js"></script>
<script type="text/javascript" src="../js/datepickercontrol.js"></script>

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
	  
		if( $sc1=="" or $sc2=="" or $sc3=="" or $sc4=="" or $sc5=="" or $agree=="" )
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
		
		$add="update table_qm_cr set kalibrasi = '$agree' where id_qm='$id_qm'";
		  mssql_query($add);
		
		$date_saved=date("m/d/Y H:i:s");			
		$add="update table_kalibrasi_cr set 
		notes1 = '$s_notes1',
		notes2 = '$s_notes2',
		notes3 = '$s_notes3',
		notes4 = '$s_notes4',
		notes5= '$s_notes5',
		q1='$sc1',
		q2='$sc2',
		q3='$sc3',
		q4='$sc4',
		q5='$sc5',
		save_q1='$tot1',
		save_q2='$tot2',
		save_q3='$tot3',
		save_q4='$tot4',
		save_q5='$tot5',
		tot_score='$save_total',
		notes_score='$notes_score'
		where id='$id'";
			mssql_query($add);
			//echo "$add";
		
		
			echo "	<script type='text/javascript'>
			window.opener.location.reload();
			window.close();
			</script>"; 	}
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