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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Form Input Validasi Instagram</title>
<script language="javascript" src="../js/jam.js"></script>
<script language="javascript" src="../js/menit.js"></script>
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
</head>


<form action="<? $PHP_SELF; ?>" method="post" name="welcome" id="welcome" onKeyPress="return noenter()">
<table width="935" border="1"  class="table table-bordered table-infinite">
   <thead>
    <tr bgcolor="#CCCCCC">
      <th width="17" class="head0"><div align="center">No</div></th>
      <th width="300" class="head0"><div align="center">Attributes</div></th>
      <th width="50" class="head0"><div align="center">Bobot</div></th>
	  <th width="100" class="head0"><div align="center">Scale</div></th>
	  <th width="300" class="head0"><div align="center">Notes</div></th>
    </tr>
	</thead>
    <tr>
      <td>1</td>
	  <td>Response (SLA) 5 minutes</td>
      <td><div align="center">10</div></td>
	  <td><div align="left"><input name="sc1" type="radio"  value="Y" <? if ($sc1=="Y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc1" type="radio"  value="N" <? if ($sc1=="N") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes1" cols="35" id="notes1" onkeypress="javascript: checkValuenotes1();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes1="";}?><? echo "$notes1"; ?></textarea>
        <input name="jml_notes1" type="text" "disabled" id="jml_notes1" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
    <tr>
      <td>2</td>
      <td>Greeting Care and Friendly</td>
      <td><div align="center">5</div></td>
      <td><div align="left"><input name="sc2" type="radio"  value="Y" <? if ($sc2=="Y") {echo "checked";} else {echo "";} ?> />
        Y
        <input name="sc2" type="radio"  value="N" <? if ($sc2=="N") {echo "checked";} else {echo "";} ?> />
        N
        </div></td>
      <td><textarea name="notes2" cols="35" id="notes2" onkeypress="javascript: checkValuenotes2();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes2="";}?><? echo "$notes2"; ?></textarea>
          <input name="jml_notes2" type="text" "disabled" id="jml_notes2" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>3</td>
      <td>Correct Solution</td>
      <td><div align="center">35</div></td>
      <td><div align="left"><input name="sc3" type="radio"  value="Y" <? if ($sc3=="Y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc3" type="radio"  value="N" <? if ($sc3=="N") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
      <td><textarea name="notes3" cols="35" id="notes3" onkeypress="javascript: checkValuenotes3();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes3="";}?><? echo "$notes3"; ?></textarea>
          <input name="jml_notes3" type="text" "disabled" id="jml_notes3" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Proses Complience</td>
      <td><div align="center">15</div></td>
      <td><div align="left"><input name="sc4" type="radio"  value="Y" <? if ($sc4=="Y") {echo "checked";} else {echo "";} ?> />
        Y
        <input name="sc4" type="radio"  value="N" <? if ($sc4=="N") {echo "checked";} else {echo "";} ?> />
        N</div></td>
      <td><textarea name="notes4" cols="35" id="notes4" onkeypress="javascript: checkValuenotes4();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes4="";}?><? echo "$notes4"; ?></textarea>
          <input name="jml_notes4" type="text" "disabled" id="jml_notes4" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>5</td>
	  <td>Input Akurasi Data</td>
      <td><div align="center">15</div></td>
      <td><div align="left"><input name="sc5" type="radio"  value="Y" <? if ($sc5=="Y") {echo "checked";} else {echo "";} ?> />
        Y
        <input name="sc5" type="radio"  value="N" <? if ($sc5=="N") {echo "checked";} else {echo "";} ?> />
        N</div></td>
      <td><textarea name="notes5" cols="35" id="notes5" onkeypress="javascript: checkValuenotes5();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes5="";}?><? echo "$notes5"; ?></textarea>
          <input name="jml_notes5" type="text" "disabled" id="jml_notes5" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
	<td>6</td>
      <td>Words composition, phrases and punctuation (Grammar)</td>
      <td><div align="center">15</div></td>
      <td><div align="left"><input name="sc6" type="radio"  value="Y" <? if ($sc6=="Y") {echo "checked";} else {echo "";} ?> />
        Y
        <input name="sc6" type="radio"  value="N" <? if ($sc6=="N") {echo "checked";} else {echo "";} ?> />
        N</div></td>
      <td><textarea name="notes6" cols="35" id="notes6" onkeypress="javascript: checkValuenotes6();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes6="";}?><? echo "$notes6"; ?></textarea>
          <input name="jml_notes6" type="text" "disabled" id="jml_notes6" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
	<td>7</td>
      <td>Closing</td>
      <td><div align="center">5</div></td>
      <td><div align="left"><input name="sc7" type="radio"  value="Y" <? if ($sc7=="Y") {echo "checked";} else {echo "";} ?> />
        Y
        <input name="sc7" type="radio"  value="N" <? if ($sc7=="N") {echo "checked";} else {echo "";} ?> />
        N</div></td>
      <td><textarea name="notes7" cols="35" id="notes7" onkeypress="javascript: checkValuenotes7();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes7="";}?><? echo "$notes7"; ?></textarea>
          <input name="jml_notes7" type="text" "disabled" id="jml_notes7" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
        
    <tr>
      <td colspan="6"><?
	  	if ($sc1 !=""){($sc1=='Y')?$tot1=10:$tot1=0;}else{$tot1=0;}
		if ($sc2 !=""){($sc2=='Y')?$tot2=5:$tot2=0;}else{$tot2=0;}
		if ($sc3 !=""){($sc3=='Y')?$tot3=35:$tot3=0;}else{$tot3=0;}
		if ($sc4 !=""){($sc4=='Y')?$tot4=15:$tot4=0;}else{$tot4=0;}		
		if ($sc5 !=""){($sc5=='Y')?$tot5=15:$tot5=0;}else{$tot5=0;}
		if ($sc6 !=""){($sc6=='Y')?$tot6=15:$tot6=0;}else{$tot6=0;}		
		if ($sc7 !=""){($sc7=='Y')?$tot7=5:$tot7=0;}else{$tot7=0;}	
		
		$save_total=$tot1+$tot2+$tot3+$tot4+$tot5+$tot6+$tot7;
		  
		  $s_notes1 = str_replace('"', '', "$notes1");
		  $s_notes2 = str_replace('"', '', "$notes2");
		  $s_notes3 = str_replace('"', '', "$notes3");
		  $s_notes4 = str_replace('"', '', "$notes4");
		  $s_notes5 = str_replace('"' ,'', "$notes5");
		  $s_notes6 = str_replace('"', '', "$notes6");
		  $s_notes7 = str_replace('"', '', "$notes7");
	  ?>
          <div align="center">
            <input name="cek_score" type="submit" id="cek_score" value="Cek Score"  class="btn"/>
            <?  echo"$save_total"; ?>
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
		</div>
		</td>
    </tr>
  </table>
 
  <p align="center">&nbsp;</p>
  <p align="center">
    <input name="id_qm"  id="id_qm" type="hidden" value="<? echo"$id_qm"; ?>">
    
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
		if($sc1=="" or $sc2=="" or $sc3=="" or $sc4=="" or $sc5=="" or $sc6=="" or $sc7=="" or $agree=="")
		{
			 
			?>
			
            <script type="text/javascript">
			window.alert("Value not completed")
			</script>
            <?
			}
			
		else 
			
			{
		
		$add="update table_qm_instagram set kalibrasi = '$agree' where id_qm='$id_qm'";
		  mssql_query($add);
		
		 
		 $date_saved=date("m/d/Y H:i:s");		  
		$add2="update table_kalibrasi_instagram set 
		notes1 = '$s_notes1',
		notes2 = '$s_notes2',
		notes3 = '$s_notes3',
		notes4 = '$s_notes4',
		notes5 = '$s_notes5',
		notes6 = '$s_notes6',
		notes7 = '$s_notes7',
		
		q1='$sc1',
		q2='$sc2',
		q3='$sc3',
		q4='$sc4',
		q5='$sc5',
		q6='$sc6',
		q7='$sc7',
		
		save_q1='$tot1',
		save_q2='$tot2',
		save_q3='$tot3',
		save_q4='$tot4',
		save_q5='$tot5',
		save_q6='$tot6',
		save_q7='$tot7',
		tot_score='$save_total',
		notes_score='$notes_score' where id='$id'";
		  mssql_query($add2);
		  // echo "$add2";

			echo "	<script type='text/javascript'>
			window.opener.location.reload();
			window.close();
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

<SCRIPT type="text/javascript">

function checkValuenotes1() {
                TextVal = document.forms['welcome'].notes1.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes1.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes1.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes2() {
                TextVal = document.forms['welcome'].notes2.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes2.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes2.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes3() {
                TextVal = document.forms['welcome'].notes3.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes3.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes3.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes4() {
                TextVal = document.forms['welcome'].notes4.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes1.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes4.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes5() {
                TextVal = document.forms['welcome'].notes5.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes5.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes5.value = TextVal.length+1;
                        return;
                }
        }
		
		
function checkValuenotes6() {
                TextVal = document.forms['welcome'].notes6.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes6.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes6.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes7() {
                TextVal = document.forms['welcome'].notes7.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes1.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes7.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes8() {
                TextVal = document.forms['welcome'].notes8.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes8.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes8.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes9() {
                TextVal = document.forms['welcome'].notes9.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes9.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes9.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes10() {
                TextVal = document.forms['welcome'].notes10.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes10.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes10.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes11() {
                TextVal = document.forms['welcome'].notes11.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes11.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes11.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes12() {
                TextVal = document.forms['welcome'].notes12.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes12.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes12.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes13() {
                TextVal = document.forms['welcome'].notes13.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes13.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes13.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes14() {
                TextVal = document.forms['welcome'].notes14.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes14.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes14.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes15() {
                TextVal = document.forms['welcome'].notes15.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes15.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes15.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes16() {
                TextVal = document.forms['welcome'].notes16.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes16.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes16.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes17() {
                TextVal = document.forms['welcome'].notes17.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes17.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes17.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes18() {
                TextVal = document.forms['welcome'].notes18.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes18.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes18.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes19() {
                TextVal = document.forms['welcome'].notes19.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes19.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes19.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes20() {
                TextVal = document.forms['welcome'].notes20.value;
                if (TextVal.length > 2999) {
                        document.forms['welcome'].notes20.value = TextVal.substring(0,3000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes20.value = TextVal.length+1;
                        return;
                }
        }
		
		
</SCRIPT>

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