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
<title>Deatail Form Input</title>
<script language="javascript" src="js/jam.js"></script>
<script language="javascript" src="js/menit.js"></script>
<style type="text/css">
<!--
.style3 {font-size: 18px}
-->
</style>
<link rel="stylesheet" href="css/style.default2.css" type="text/css" />

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
      <th width="100" class="head0"><div align="center">Category</div></th>
      <th width="300" class="head0"><div align="center">Attributes</div></th>
      <th width="50" class="head0"><div align="center">Bobot</div></th>
      <th width="150" class="head0" bgcolor="#CCCCCC"><div align="center">Scale</div></th>
      <th width="300" class="head0" bgcolor="#CCCCCC"><div align="center">Notes</div></th>
    </tr>
</thead>
    <tr>
      <td>1</td>
      <td rowspan="2"><div style="text-align:center;">Opening</div></td>
      <td>Greeting with enthusiasm</td>
      <td><div align="center">5</div></td>
      <td>
	  <input name="q1" type="radio"  value="5" <? if ($q1=="5") {echo "checked";} else {echo "";} ?> />
	  5
	  <input name="q1" type="radio"  value="0" <? if ($q1=="0") {echo "checked";} else {echo "";} ?> />
	  0
	  </td>
      <td><textarea name="notes1" cols="35" id="notes1" onkeypress="javascript: checkValuenotes1();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes1="";}?><? echo "$notes1"; ?></textarea>
      <input name="jml_notes1" type="text" "disabled" id="jml_notes1" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>2</td>
      <td>Verify (refer to verification rules)</td>
      <td><div align="center">5</div></td>
      <td>
	  <input name="q2" type="radio"  value="5" <? if ($q2=="5") {echo "checked";} else {echo "";} ?> />
	  5
      <input name="q2" type="radio"  value="0" <? if ($q2=="0") {echo "checked";} else {echo "";} ?> />
	  0
	  </td>
      <td><textarea name="notes2" cols="35" id="notes2" onkeypress="javascript: checkValuenotes2();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes2="";}?><? echo "$notes2"; ?></textarea>
        <input name="jml_notes2" type="text" "disabled" id="jml_notes2" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>3</td>
      <td rowspan="4">Penyambungan</td>
      <td>Probing</td>
      <td><div align="center">5</div></td>
      <td>
	  <input name="q4" type="radio"  value="5" <? if ($q4=="5") {echo "checked";} else {echo "";} ?> />
	  5
      <input name="q4" type="radio"  value="0" <? if ($q4=="0") {echo "checked";} else {echo "";} ?> />
	  0
	  </td>
      <td><textarea name="notes4" cols="35" id="notes4" onkeypress="javascript: checkValuenotes4();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes4="";}?><? echo "$notes4"; ?></textarea>
        <input name="jml_notes4" type="text" "disabled" id="jml_notes4" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>4</td>
      <td>Correct Solution</td>
      <td><div align="center">40</div></td>
      <td>
	  <input name="q5" type="radio"  value="40" <? if ($q5=="40") {echo "checked";} else {echo "";} ?> />
	  40
	  <input name="q5" type="radio"  value="0" <? if ($q5=="0") {echo "checked";} else {echo "";} ?> />
	  0
	  </td>
      <td><textarea name="notes5" cols="35" id="notes5" onkeypress="javascript: checkValuenotes5();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes5="";}?><? echo "$notes5"; ?></textarea>
        <input name="jml_notes5" type="text" "disabled" id="jml_notes5" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td></td>
      <td>Input Accuracy Data / Information</td>
      <td><div align="center">5</div></td>
      <td><input name="q6" type="radio"  value="5" <? if ($q6=="5") {echo "checked";} else {echo "";} ?> />
  5
    <input name="q6" type="radio"  value="0" <? if ($q6=="0") {echo "checked";} else {echo "";} ?> />
  0
</td>
      <td><textarea name="notes6" cols="35" id="notes6" onkeypress="javascript: checkValuenotes6();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes6="";}?><? echo "$notes6"; ?></textarea>
        <input name="jml_notes6" type="text" "disabled" id="jml_notes6" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td></td>
      <td>FCR</td>
      <td><div align="center"> 10 </div></td>
      <td><input name="q20" type="radio" value="10" <? if ($q20=="10") {echo "checked";} else {echo "";} ?> />
    10
      <input name="q20" type="radio" value="0" <? if ($q20=="0") {echo "checked";} else {echo "";} ?> />
    0
	</td>
      <td><textarea name="notes20" cols="35" id="notes20" onkeypress="javascript: checkValuenotes20();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes20="";}?><? echo "$notes20"; ?></textarea>
          <input name="jml_notes20" type="text" "disabled" id="jml_notes20" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>5</td>
      <td rowspan="2">Closing</td>
      <td> Closing Greeting</td>
      <td><div align="center">5</div></td>
      <td><input name="q7" type="radio"  value="5" <? if ($q7=="5") {echo "checked";} else {echo "";} ?> />
  5
    <input name="q7" type="radio"  value="0" <? if ($q7=="0") {echo "checked";} else {echo "";} ?> />
 0
</td>
      <td><textarea name="notes7" cols="35" id="notes7" onkeypress="javascript: checkValuenotes7();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes7="";}?><? echo "$notes7"; ?></textarea>
        <input name="jml_notes7" type="text" "disabled" id="jml_notes7" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td></td>
      <td>Reconfirm the Agreement</td>
      <td><div align="center">5</div></td>
      <td><input name="q8" type="radio"  value="5" <? if ($q8=="5") {echo "checked";} else {echo "";} ?> />
  5
    <input name="q8" type="radio"  value="0" <? if ($q8=="0") {echo "checked";} else {echo "";} ?> />
  0
</td>
      <td><textarea name="notes8" cols="35" id="notes8" onkeypress="javascript: checkValuenotes8();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes8="";}?><? echo "$notes8"; ?></textarea>
        <input name="jml_notes8" type="text" "disabled" id="jml_notes8" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>6</td>
      <td rowspan="2">Teknis berbicara / Effective Communication</td>
      <td>Kesopanan / Hospitality</td>
      <td><div align="center">10</div></td>
      <td><input name="q9" type="radio"  value="10" <? if ($q9=="10") {echo "checked";} else {echo "";} ?> />
  10
    <input name="q9" type="radio"  value="0" <? if ($q9=="0") {echo "checked";} else {echo "";} ?> />
  0
</td>
      <td><textarea name="notes9" cols="35" id="notes9" onkeypress="javascript: checkValuenotes9();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes9="";}?><? echo "$notes9"; ?></textarea>
        <input name="jml_notes9" type="text" "disabled" id="jml_notes9" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>7</td> 
      <td>Personalize Communication</td>
      <td><div align="center">5</div></td>
      <td><input name="q10" type="radio"  value="5" <? if ($q10=="5") {echo "checked";} else {echo "";} ?> />
  5
    <input name="q10" type="radio"  value="0" <? if ($q10=="0") {echo "checked";} else {echo "";} ?> />
  0
</td>
      <td><textarea name="notes10" cols="35" id="notes10" onkeypress="javascript: checkValuenotes10();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes10="";}?><? echo "$notes10"; ?></textarea>
        <input name="jml_notes10" type="text" "disabled" id="jml_notes10" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td></td>
      <td>Telephony ( Penggunaan Hold/Mute/Transfer )</td>
      <td>Hold/Mute/Transfer</td>
      <td><div align="center">5</div></td>
      <td><input name="q11" type="radio"  value="5" <? if ($q11=="5") {echo "checked";} else {echo "";} ?> />
  5
    <input name="q11" type="radio"  value="0" <? if ($q11=="0") {echo "checked";} else {echo "";} ?> />
  0
</td>
      <td><textarea name="notes11" cols="35" id="notes11" onkeypress="javascript: checkValuenotes11();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes11="";}?><? echo "$notes11"; ?></textarea>
        <input name="jml_notes11" type="text" "disabled" id="jml_notes11" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
      <td colspan="6">
	  
	  <?

	  	if ($q1 !="")
		{
		$save_q1=$q1;
		}
		else
		{
		$save_q1="0";
		}
		
	if ($q2 !="")
		{
		$save_q2=$q2;
		}
		else
		{
		$save_q2="0";
		}
		
	if ($q4 !="" )
		{
		$save_q4=$q4;
		}else{
		$save_q4="0";
		}
	if ($q5 !="" )
		{
		$save_q5=$q5;
		}else{
		$save_q5="0";
		}
	
	if ($q6 !="" )
		{
		$save_q6=$q6;
		}else{
		$save_q6="0";
		}		

	if ($q7 !="")
		{
		$save_q7=$q7;
		}
		else
		{
		$save_q7="0";
		}

	if ($q8 !="")
		{
		$save_q8=$q8;
		}
		else
		{
		$save_q8="0";
		}

	if ($q9 !="")
		{
		$save_q9=$q9;
		}
		else
		{
		$save_q9="0";
		}

	if ($q10 !="")
		{
		$save_q10=$q10;
		}
		else
		{
		$save_q10="0";
		}

	if ($q11 !="")
		{
		$save_q11=$q11;
		}
		else
		{
		$save_q11="0";
		}
	if ($q20 !="")
		{
		$save_q20=$q20;
		}
		else
		{
		$save_q20="0";
		}
		if($cek_score){
			if($q20=="" or $q1=="" or $q2==""  or $q4=="" or $q5=="" or $q6=="" or $q7=="" or $q8=="" or $q9=="" or $q10=="" or $q11=="")
			{
			?>
            <script type="text/javascript">
			window.alert("Value not completed")
			</script>
            <?
			}else{
		  
			}
		}
		
		 $save_total=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13+$save_q14+$save_q15+$save_q16+$save_q17+$save_q18+$save_q19+$save_q20;
		  
		  $s_notes1 = str_replace("'", "", "$notes1");
		  $s_notes2 = str_replace("'", "", "$notes2");
		  $s_notes3 = str_replace("'", "", "$notes3");
		  $s_notes4 = str_replace("'", "", "$notes4");
		  $s_notes5 = str_replace("'", "", "$notes5");
		  $s_notes6 = str_replace("'", "", "$notes6");
		  $s_notes7 = str_replace("'", "", "$notes7");
		  $s_notes8 = str_replace("'", "", "$notes8");
		  $s_notes9 = str_replace("'", "", "$notes9");
		  $s_notes10 = str_replace("'", "", "$notes10");
		  $s_notes11 = str_replace("'", "", "$notes11");
		  $s_notes12 = str_replace("'", "", "$notes12");
		  $s_notes13 = str_replace("'", "", "$notes13");
		  $s_notes14 = str_replace("'", "", "$notes14");
		  $s_notes15 = str_replace("'", "", "$notes15");
		  $s_notes16 = str_replace("'", "", "$notes16");
		  $s_notes17 = str_replace("'", "", "$notes17");
		  $s_notes18 = str_replace("'", "", "$notes18");
		  $s_notes19 = str_replace("'", "", "$notes19");
		  $s_notes20 = str_replace("'", "", "$notes20");

 

	  ?>	  <div align="center">
	    <input name="cek_score" type="submit" id="cek_score" value="Cek Score"   class="btn"/>
     <? echo"$save_total";?>
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
<title>Deatail Form Input</title>
<script language="javascript" src="js/jam.js"></script>
<script language="javascript" src="js/menit.js"></script>
<script type="text/javascript" src="js/datepickercontrol.js"></script>

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
<link rel="stylesheet" href="css/style.css" type="text/css">
<link rel="SHORTCUT ICON" href="..images/m.png">
<link type="text/css" rel="stylesheet" href="css/datepickercontrol.css">
<link type="text/css" rel="stylesheet" href="css/text.css">

</head>

<body>
<?
 //nfe total
$nfe_total=$q1_tot_y+$q2_tot_y+$q3_tot_y+$q7_tot_y+$q8_tot_y+$q9_tot_y+$q10_tot_y+$q11_tot_y+$q12_tot_y+$q13_tot_y+$q14_tot_y+$q15_tot_y+$q16_tot_y+$q17_tot_y+$q18_tot_y+$q19_tot_y+$q1_tot_na+$q2_tot_na+$q3_tot_na+$q7_tot_na+$q8_tot_na+$q9_tot_na+$q10_tot_na+$q11_tot_na+$q12_tot_na+$q13_tot_na+$q14_tot_na+$q15_tot_na+$q16_tot_na+$q17_tot_na+$q18_tot_na+$q19_tot_na;
		
		//$nfe_acc=($nfe_total/(17*$jum_tot)*100);
		//printf("%1.2f ", $nfe_acc);
		
// fe total


 
?>

  <p align="center">
    <input name="id_qm"  id="id_qm" type="hidden" value="<? echo"$id_qm"; ?>" class="input-large">
			  <?

echo"<SCRIPT TYPE='text/javascript'>
function confirmDelete()
{
    return confirm('Are you sure you wish to save this entry?');
}
</script>";

		  ?>
	NOTES : <br />
		<textarea name="notes_score" cols="35" rows="10"  id="notes_score"></textarea><br />
		<? $notes_score = str_replace('"', '', "$notes_score");?>
		<br />
		<input name="agree" type="radio"  value="Sesuai" <? if ($agree=="Sesuai") {echo "checked";} else {echo "";} ?> />SESUAI
   		<input name="agree" type="radio"  value="Tidak Sesuai" <? if ($agree=="Tidak Sesuai") {echo "checked";} else {echo "";} ?> />TIDAK SESUAI
		 <br /><br />
		<input type="submit" name="Submit" value="Submit" class="btn btn-primary" >
		<input name="cancel" type="submit" id="cancel" value="Cancel"  class="btn btn-primary"/>
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
	  
		if($q20=="" or $q1=="" or $q2==""  or $q4=="" or $q5=="" or $q6=="" or $q7=="" or $q8=="" or $q9=="" or $q10=="" or $q11=="" or $q12=="" or $ss="" or $spv_name=="" or $interaction_date=="" or $observation_date=="" or $week_=="0" or $customer_name=="" or $interaction_type=="0" or $product_type=="" or $product_detail=="" or $product_detail_agent=="" or $repeat=="0" or $s_date_prev_call=="" or $s_prev_agent=="" or hh_2=="" or $mm_2=="" or $drop_call=="0" or $agree=="" )
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
		
		$c ="select * from table_kalibrasi_sli where id_qm='$id'";
		$q = mssql_query($c);
		$n = mssql_num_rows($q);
		
		if ($n <= 0) {
			$add="insert into table_kalibrasi_sli(notes1,notes2,notes3,notes4,notes5,notes6,notes7,notes8,notes9,notes10,notes11,notes12,notes13,notes14,notes15,notes16,notes17,notes18,notes19,notes20,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,save_q1,save_q2,save_q3,save_q4,save_q5,save_q6,save_q7,save_q8,save_q9,save_q10,save_q11,save_q12,save_q13,save_q14,save_q15,save_q16,save_q17,save_q18,save_q19,save_q20,status_save,id_pribadi_user,id_pribadi_observer,date_saved,tot_score,id_unit,lb,id_qm,notes_score,id_kalibrasi)
		  values('$notes1','$notes2','$notes3','$notes4','$notes5','$notes6','$notes7','$notes8','$notes9','$notes10','$notes11','$notes12','$notes13','$notes14','$notes15','$notes16','$notes17','$notes18','$notes19','$notes20','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$save_q1','$save_q2','$save_q3','$save_q4','$save_q5','$save_q6','$save_q7','$save_q8','$save_q9','$save_q10','$save_q11','$save_q12','$save_q13','$save_q14','$save_q15','$save_q16','$save_q17','$save_q18','$save_q19','$save_q20','complete','$id_pribadi_user','$observer',getdate(),'$save_total','$kd_unit','$id_lb','$id','$notes_score','$SES_hendi')";
			mssql_query($add);
		echo "$add";
		 
		 
		 $date_saved=date("m/d/Y H:i:s");		  
		 $add2="update table_qm_sli set id_kalibrasi='$SES_hendi', kalibrasi='$agree' where id_qm='$id'";
		  mssql_query($add2);
		  //echo "$q_addTemp";
		}

			echo "<script type='text/javascript'>
			window.close();					
					window.opener.location.reload();
			</script>";   	}
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