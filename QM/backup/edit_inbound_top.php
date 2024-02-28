<?
session_name("AUTHEN");
session_start();

$id = $_GET['id_qm'];
//echo"$SES_USERNAME";
if ($SES_hendi<>"")
{

include "konek_qm.php";
date_default_timezone_set('Asia/Jakarta');
 
?>

<head>
<title>Detail Form Input</title>
<script language="javascript" src="js/jam.js"></script>
<script language="javascript" src="js/menit.js"></script>

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


<script language="javascript">

				function Checkfiles()
				{
					var fup = document.getElementById('file_action_done_qa');
					var fup2 = document.getElementById('file_action_done_ops');
					
					var fileName = fup.value;
					var fileName2 = fup2.value;
					
					var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
					var ext2 = fileName2.substring(fileName2.lastIndexOf('.') + 1);

					if(ext == "xls" ||ext == "xlsx" ||ext == "doc" ||ext == "docx" 
					||ext == "pdf" ||ext == "jpeg" ||ext == "jpg" || ext2 == "xls" ||ext2 == "xlsx" ||ext2 == "doc" ||ext2 == "docx" 
					||ext2 == "pdf" ||ext2 == "jpeg" ||ext2 == "JPG")
					
					{
						return true;
					}
					
					else
						{
							alert(" Format Tidak Sesuai ");
							fup.focus();
							return false;
						}
					}
	</script>

</head>
<body>

<form action="<? $PHP_SELF; ?>" method="post"  name="welcome" onKeyPress="return noenter()" enctype="multipart/form-data" >
<table width="935" border="1"  class="table table-bordered table-infinite">
<thead>
    <tr bgcolor="#CCCCCC" >
      <th width="17" class="head0"><div align="center">No</div></th>
      <th width="36"  class="head0"><div align="center">Value</div></th>
      <th width="232" class="head0"><div align="center">Attributes</div></th>
      <th width="71"  class="head0"><div align="center">Score</div></th>
      <th width="176"  class="head0" bgcolor="#CCCCCC"><div align="center">Y/N</div></th>
      <th width="363"  class="head0" bgcolor="#CCCCCC"><div align="center">Notes</div></th>
    </tr>
</thead>
    <tr>
      <td>1</td>
      <td>NCE</td>
      <td>Opening Greeting, Call Respons &amp; Responsiveness</td>
      <td><div align="center">2.22</div></td>
      <td><input name="q1" type="radio"  value="yes" <? if ($q1=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q1" type="radio"  value="no" <? if ($q1=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q1" type="radio"  value="na" <? if ($q1=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes1" cols="35" id="notes1" onKeyPress="javascript: checkValuenotes1();"><? if($cancel){ ?><? $notes1="";}?><? echo "$notes1"; ?></textarea>
      <input name="jml_notes1" type="text" "disabled" id="jml_notes1" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>2</td>
      <td>NCE</td>
      <td>Verify or Confirmation</td>
      <td><div align="center">3.33</div></td>
      <td><input name="q2" type="radio"  value="yes" <? if ($q2=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q2" type="radio"  value="no" <? if ($q2=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q2" type="radio"  value="na" <? if ($q2=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes2" cols="35" id="notes2" onKeyPress="javascript: checkValuenotes2();"><? if($cancel){ ?><? $notes2="";}?><? echo "$notes2"; ?></textarea>
        <input name="jml_notes2" type="text" "disabled" id="jml_notes2" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>3</td>
      <td>NCE</td>
      <td>Probing</td>
      <td><div align="center">5.57</div></td>
      <td><input name="q3" type="radio"   value="yes" <? if ($q3=="yes"){echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q3" type="radio"   value="no" <? if ($q3=="no"){echo "checked";} else {echo "";} ?> />
  No
  <input name="q3" type="radio"   value="na" <? if ($q3=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes3" cols="35" id="notes3" onKeyPress="javascript: checkValuenotes3();"><? if($cancel){ ?><? $notes3="";}?><? echo "$notes3"; ?></textarea>
        <input name="jml_notes3" type="text" "disabled" id="jml_notes3" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>4</td>
      <td>CE</td>
      <td>Correct Answer &amp; Solution</td>
      <td><div align="center">20</div></td>
      <td><input name="q4" type="radio"  value="yes" <? if ($q4=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q4" type="radio"  value="no" <? if ($q4=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q4" type="radio"  value="na" <? if ($q4=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes4" cols="35" id="notes4" onKeyPress="javascript: checkValuenotes4();"><? if($cancel){ ?><? $notes4="";}?><? echo "$notes4"; ?></textarea>
        <input name="jml_notes4" type="text" "disabled" id="jml_notes4" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>5</td>
      <td>CE</td>
      <td>Correct Handling </td>
      <td><div align="center">20</div></td>
      <td><input name="q5" type="radio"  value="yes" <? if ($q5=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q5" type="radio"  value="no" <? if ($q5=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q5" type="radio"  value="na" <? if ($q5=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes5" cols="35" id="notes5" onKeyPress="javascript: checkValuenotes5();"><? if($cancel){ ?><? $notes5="";}?><? echo "$notes5"; ?></textarea>
        <input name="jml_notes5" type="text" "disabled" id="jml_notes5" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>6</td>
      <td>CE</td>
      <td>Privacy Policy </td>
      <td><div align="center">20</div></td>
      <td><input name="q6" type="radio"  value="yes" <? if ($q6=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q6" type="radio"  value="no" <? if ($q6=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q6" type="radio"  value="na" <? if ($q6=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes6" cols="35" id="notes6" onKeyPress="javascript: checkValuenotes6();"><? if($cancel){ ?><? $notes6="";}?><? echo "$notes6"; ?></textarea>
        <input name="jml_notes6" type="text" "disabled" id="jml_notes6" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    
    <tr>
      <td>7</td>
      <td>NCE</td>
      <td>Information</td>
      <td><div align="center">5.57</div></td>
      <td><input name="q7" type="radio"  value="yes" <? if ($q7=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q7" type="radio"  value="no" <? if ($q7=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q7" type="radio"  value="na" <? if ($q7=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes7" cols="35" id="notes7" onKeyPress="javascript: checkValuenotes7();"><? if($cancel){ ?><? $notes7="";}?><? echo "$notes7"; ?></textarea>
        <input name="jml_notes7" type="text" "disabled" id="jml_notes7" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>8</td>
      <td>NCE</td>
      <td>Hospitality</td>
      <td><div align="center">4.44</div></td>
      <td><input name="q8" type="radio"  value="yes" <? if ($q8=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q8" type="radio"  value="no" <? if ($q8=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q8" type="radio"  value="na" <? if ($q8=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes8" cols="35" id="notes8" onKeyPress="javascript: checkValuenotes8();"><? if($cancel){ ?><? $notes8="";}?><? echo "$notes8"; ?></textarea>
        <input name="jml_notes8" type="text" "disabled" id="jml_notes8" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>9</td>
      <td>NCE</td>
      <td>Voice Quality </td>
      <td><div align="center">4.44</div></td>
      <td><input name="q9" type="radio"  value="yes" <? if ($q9=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q9" type="radio"  value="no" <? if ($q9=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q9" type="radio"  value="na" <? if ($q9=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes9" cols="35" id="notes9" onKeyPress="javascript: checkValuenotes9();"><? if($cancel){ ?><? $notes9="";}?><? echo "$notes9"; ?></textarea>
        <input name="jml_notes9" type="text" "disabled" id="jml_notes9" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>10</td>
      <td>NCE</td>
      <td>Call Management</td>
      <td><div align="center">3.33</div></td>
      <td><input name="q10" type="radio"  value="yes" <? if ($q10=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q10" type="radio"  value="no" <? if ($q10=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q10" type="radio"  value="na" <? if ($q10=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes10" cols="35" id="notes10" onKeyPress="javascript: checkValuenotes10();"><? if($cancel){ ?><? $notes10="";}?><? echo "$notes10"; ?></textarea>
        <input name="jml_notes10" type="text" "disabled" id="jml_notes10" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>11</td>
      <td>NCE</td>

      <td>Hold/Transfer/Routing/Callback Technique // Hold</td>
      <td><div align="center">2.22</div></td>
      <td><input name="q11" type="radio"  value="yes" <? if ($q11=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q11" type="radio"  value="no" <? if ($q11=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q11" type="radio"  value="na" <? if ($q11=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes11" cols="35" id="notes11" onKeyPress="javascript: checkValuenotes11();"><? if($cancel){ ?><? $notes11="";}?><? echo "$notes11"; ?></textarea>
        <input name="jml_notes11" type="text" "disabled" id="jml_notes11" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>12</td>
      <td>NCE</td>
      <td>Reconfirm the Agreement</td>
      <td><div align="center">3.33</div></td>
      <td><input name="q12" type="radio"  value="yes" <? if ($q12=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q12" type="radio"  value="no" <? if ($q12=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q12" type="radio"  value="na" <? if ($q12=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes12" cols="35" id="notes12" onKeyPress="javascript: checkValuenotes12();"><? if($cancel){ ?><? $notes12="";}?><? echo "$notes12"; ?></textarea>
        <input name="jml_notes12" type="text" "disabled" id="jml_notes12" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>13</td>
      <td>NCE</td>
      <td>Campaign / Cross selling/ upselling / survey</td>
      <td><div align="center">3.33</div></td>
      <td><input name="q13" type="radio"  value="yes" <? if ($q13=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q13" type="radio"  value="no" <? if ($q13=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q13" type="radio"  value="na" <? if ($q13=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes13" cols="35" id="notes13" onKeyPress="javascript: checkValuenotes13();"><? if($cancel){ ?><? $notes1="";}?><? echo "$notes13"; ?></textarea>
        <input name="jml_notes13" type="text" "disabled" id="jml_notes13" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
	<tr>
      <td>14</td>
      <td>NCE</td>
      <td>Closing Greeting </td>
      <td><div align="center">2.22</div></td>
      <td><input name="q14" type="radio" value="yes" <? if ($q14=="yes") {echo "checked";} else {echo "";} ?> />
    Yes
      <input name="q14" type="radio" value="no" <? if ($q14=="no") {echo "checked";} else {echo "";} ?> />
    No
    <input name="q14" type="radio"  value="na" <? if ($q14=="na") {echo "checked";} else {echo "";} ?> />
    NA</td>
      <td><textarea name="notes14" cols="35" id="notes14" onKeyPress="javascript: checkValuenotes14();"><? if($cancel){ ?><? $notes14="";}?><? echo "$notes14"; ?></textarea>
          <input name="jml_notes14" type="text" "disabled" id="jml_notes14" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    
    <tr>
      <td colspan="6">
	  
	  <?

 
 if ($q1=="yes" or $q1=="na")
		{
		$save_q1="2.22";
		$sc_q1="1";
		}
		else
		{
		$save_q1="0";
		$sc_q1="0";
		}
		
		if ($q2=="yes" or $q2=="na")
		{
		$save_q2="3.33";
		$sc_q2="1";
		}
		else
		{
		$save_q2="0";
		$sc_q2="0";
		}
		
		if ($q3=="yes" or $q3=="na")
		{
		$save_q3="5.57";
		$sc_q3="1";
		}
		else
		{
		$save_q3="0";
		$sc_q3="0";
		}
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na"))
		{
		$save_q4="20";
		$save_q5="20";
		$save_q6="20";
		$sc_fe="3";
		}
		if ($q4=="no" or $q5=="no" or $q6=="no" )
		{
		$save_q4="0";
		$save_q5="0";
		$save_q6="0";
		$sc_fe="0";
		}

		

		if ($q7=="yes" or $q7=="na")
		{
		$save_q7="5.57";
		$sc_q7="1";
		}
		else
		{
		$save_q7="0";
		$sc_q7="0";
		}

		if ($q8=="yes" or $q8=="na")
		{
		$save_q8="4.44";
		$sc_q8="1";
		}
		else
		{
		$save_q8="0";
		$sc_q8="0";
		}

		if ($q9=="yes" or $q9=="na")
		{
		$save_q9="4.44";
		$sc_q9="1";
		}
		else
		{
		$save_q9="0";
		$sc_q9="0";
		}

		if ($q10=="yes" or $q10=="na")
		{
		$save_q10="3.33";
		$sc_q10="1";
		}
		else
		{
		$save_q10="0";
		$sc_q10="0";
		}

		if ($q11=="yes" or $q11=="na")
		{
		$save_q11="2.22";
		$sc_q11="1";
		}
		else
		{
		$save_q11="0";
		$sc_q11="0";
		}

		if ($q12=="yes" or $q12=="na")
		{
		$save_q12="3.33";
		$sc_q12="1";
		}
		else
		{
		$save_q12="0";
		$sc_q12="0";
		}

		if ($q13=="yes" or $q13=="na")
		{
		$save_q13="3.33";
		$sc_q13="1";
		}
		else
		{
		$save_q13="0";
		$sc_q13="0";
		}
		
		if ($q14=="yes" or $q14=="na")
		{
		$save_q14="2.22";
		$sc_q14="1";
		}
		else
		{
		$save_q14="0";
		$sc_q14="0";
		}

		
		

		$save_total=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13+$save_q14;
		  
		  $s_notes1 = str_replace('"', '', "$notes1");
		  $s_notes2 = str_replace('"', '', "$notes2");
		  $s_notes3 = str_replace('"', '', "$notes3");
		  $s_notes4 = str_replace('"', '', "$notes4");
		  $s_notes5 = str_replace('"' ,'', "$notes5");
		  $s_notes6 = str_replace('"', '', "$notes6");
		  $s_notes7 = str_replace('"', '', "$notes7");
		  $s_notes8 = str_replace('"', '', "$notes8");
		  $s_notes9 = str_replace('"', '', "$notes9");
		  $s_notes10 = str_replace('"', '', "$notes10");
		  $s_notes11 = str_replace('"', '', "$notes11");
		  $s_notes12 = str_replace('"', '', "$notes12");
		  $s_notes13 = str_replace('"', '', "$notes13");
		  $s_notes14 = str_replace('"', '', "$notes14");

 

	  ?>	  <div align="center">
	    <input name="cek_score" type="submit" id="cek_score" value="Cek Score" class="btn"/>
     <? echo round($save_total,2);?>
</div></td>
    </tr>
  </table>

          <p></p>


<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>


<body>
<?
 //nfe total
$nfe_total=$q1_tot_y+$q2_tot_y+$q3_tot_y+$q7_tot_y+$q8_tot_y+$q9_tot_y+$q10_tot_y+$q11_tot_y+$q12_tot_y+$q13_tot_y+$q14_tot_y+$q1_tot_na+$q2_tot_na+$q3_tot_na+$q7_tot_na+$q8_tot_na+$q9_tot_na+$q10_tot_na+$q11_tot_na+$q12_tot_na+$q13_tot_na+$q14_tot_na;
		
		//$nfe_acc=($nfe_total/(17*$jum_tot)*100);
		//printf("%1.2f ", $nfe_acc);
		
// fe total


 
?>
  <p align="center">Form Input</p>
  <table width="386" border="1" align="center"  class="table table-bordered table-infinite">
  <input name="userid" type="hidden" disabled id="userid" value="<? echo "$userid"; ?>" />
    <tr>
      <td width="181">Agent Name </td>
      <td width="195"><input name="full_name" type="text" disabled id="full_name" value="<? echo"$full_name";?>" class="input-large"></td>
    </tr>
    <tr>
      <td>TL / Supervisor Name </td>
      <td><input name="spv_name" type="text" id="spv_name" value="<? echo"$spv_name"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Observer Name </td>
      <td><input name="observer_name" type="text" disabled id="observer_name" value="<? echo"$observer_name"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Interaction Date </td>
      <td><span class="content">
        <input name="interaction_date" type="text" id="datepicker" value="<? echo "$interaction_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" tabindex="2" class="input-large">
      </span></td>
    </tr>
    <tr>
      <td>Interaction Time </td>
      <td><input name="hh" type="text" id="hh" value="<? echo"$hh"; ?>" size="2" maxlength="2"class="input-small">
        :
        <input name="mm" type="text" id="mm" value="<? echo"$mm"; ?>" size="2" maxlength="2"class="input-small">        
        (hh:mm) </td>
    </tr>
    <tr>
      <td>Observation Date </td>
      <td>
        <span class="content">
        <input name="observation_date" disabled type="text" id="datepicker" value="<? echo "$observation_date"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" class="input-large" tabindex="2">
      </span></td>
    </tr>
    <tr>
      <td>Week</td>
      <td><select name="week_" id="week_" class="uniformselect">
        <option value="0">Select
        <?php
		
			$katahh=array('1','2','3','4');
		$counthh = count($katahh);
							  
			for($i=0;$i<$counthh;$i++)
			{
				if($katahh[$i] == $week_)
				{
					echo "<option value='$katahh[$i]' selected>$katahh[$i]";
				}
				else
				{
					echo "<option value='$katahh[$i]'>$katahh[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td> Customer Name </td>
      <td><input name="customer_name" type="text" id="customer_name" value="<? echo"$customer_name"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Interaction Type</td>
      <td><select name="interaction_type" id="interaction_type" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh1=array('Inquiry','Request','Dispute','Complaint');
		$counthh1 = count($katahh1);
							  
			for($i=0;$i<$counthh1;$i++)
			{
				if($katahh1[$i] == $interaction_type)
				{
					echo "<option value='$katahh1[$i]' selected>$katahh1[$i]";
				}
				else
				{
					echo "<option value='$katahh1[$i]'>$katahh1[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td>Product Type</td>
      <td><input name="product_type" type="text" id="product_type" value="<? echo"$product_type"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Product Detail</td>
      <td><input name="product_detail" type="text" id="product_detail" value="<? echo"$product_detail"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Product Detail by Agent</td>
      <td><input name="product_detail_agent" type="text" id="product_detail_agent" value="<? echo"$product_detail_agent"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>FCR atau Not FCR</td>
      <td><select name="fcr" id="fcr" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh2=array('FCR','Not FCR');
		$counthh2 = count($katahh2);
							  
			for($i=0;$i<$counthh2;$i++)
			{
				if($katahh2[$i] == $fcr)
				{
					echo "<option value='$katahh2[$i]' selected>$katahh2[$i]";
				}
				else
				{
					echo "<option value='$katahh2[$i]'>$katahh2[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td>Repeat (Y / N)</td>
      <td><select name="repeat" id="repeat" class="uniformselect" onchange="welcome.submit()">
        <option value="0">Select
        <?php
			$katahh3=array('yes','no');
		$counthh3 = count($katahh3);
							  
			for($i=0;$i<$counthh3;$i++)
			{
				if($katahh3[$i] == $repeat)
				{
					echo "<option value='$katahh3[$i]' selected>$katahh3[$i]";
				}
				else
				{
					echo "<option value='$katahh3[$i]'>$katahh3[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td> Date of previous call</td>
      <td><span class="content">
        <input name="date_prev_call" <? if ($repeat=="no"){?> disabled <? } else {}?> type="text" id="date_prev_call" value="<? echo "$date_prev_call"; ?>" datepicker="true" datepicker_format="MM/DD/YYYY" tabindex="2" class="input-large"/>
      </span></td>
    </tr>
    <tr>
      <td>Previous Agent </td>
      <td><input name="prev_agent"  <? if ($repeat=="no"){?> disabled <? } else {}?> type="text" id="prev_agent" value="<? echo"$prev_agent"; ?>"class="input-large"></td>
    </tr>
    <tr>
      <td>Handling time (duration)</td>
      <td><input name="hh_2" type="text" id="hh_2" value="<? echo"$hh_2"; ?>" size="2" maxlength="2"class="input-small">
:
  <input name="mm_2" type="text" id="mm_2" value="<? echo"$mm_2"; ?>" size="2" maxlength="2"class="input-small">
  :
  <input name="ss_2" type="text" id="ss_2" value="<? echo"$ss_2"; ?>" size="2" maxlength="2"class="input-small">
  (hh:mm:ss) </td>
    </tr>
    <tr>
      <td>Drop Call</td>
      <td><select name="drop_call" id="select9" class="uniformselect">
        <option value="0">Select
        <?php
			$katahh4=array('yes','no');
		$counthh4 = count($katahh4);
							  
			for($i=0;$i<$counthh4;$i++)
			{
				if($katahh4[$i] == $drop_call)
				{
					echo "<option value='$katahh4[$i]' selected>$katahh4[$i]";
				}
				else
				{
					echo "<option value='$katahh4[$i]'>$katahh4[$i]";
				}
			}
			?>
        </option>
      </select></td>
    </tr>
    <tr>
      <td>FE Accuracy</td>
      <td><input name="sc_fe" type="text" disabled id="sc_fe" value="<? echo"$fe_acc"; ?>" size="3" maxlength="3"class="input-large"></td>
    </tr>
    <tr>
      <td>NFE Accuracy</td>
      <td><input name="sc_nfe" type="text" disabled id="sc_nfe" value="<? echo"$nfe_acc"; ?>" size="3" maxlength="3"class="input-large"></td>
    </tr>
    <tr>
      <td>Total Agent Score</td>
      <td><input name="total_score" type="text" disabled id="total_score" value="<? echo"$total_score"; ?>" size="3" maxlength="3"class="input-large"></td>
    </tr>
    <tr>
      <td>Evaluation Scale </td>
      <td><input name="skala" type="text" disabled id="skala" value="<? echo"$skala"; ?>" size="1" maxlength="1"class="input-large"></td>
    </tr>
	 <tr>
      <td>Strength Agent</td>
      <td><textarea name="strength_agent" cols="35" id="strength_agent"><? echo "$strength_agent"; ?></textarea></td>
    </tr>
	<tr>
      <td>Area to be improved</td>
      <td><textarea name="improved" cols="35" id="improved"><? echo "$improved"; ?></textarea></td>
    </tr>
	 <tr>
      <td>Recommendation</td>
      <td><textarea name="recommendation" cols="35" id="recommendation"><? echo "$recommendation"; ?></textarea></td>
    </tr>
	<tr>
      <td>Action to be done - QA</td>
      <td><textarea name="action_done_qa" cols="35" id="action_done_qa"><? echo "$action_done_qa"; ?></textarea>
	  <input type="file" name="file_action_done_qa" id="file_action_done_qa"/></td>
    </tr>
	<tr>
      <td>Action to be done - Opers</td>
      <td><textarea name="action_done_ops" cols="35" id="action_done_ops"><? echo "$action_done_ops"; ?></textarea>
	  <input type="file" name="file_action_done_ops" id="file_action_done_ops"/></td>
    </tr>
	<tr>
      <td>Notes sample recording </td>
      <td><textarea name="notes_recording" cols="35" id="notes_recording"><? echo "$notes_recording"; ?></textarea>
    </tr>
  </table>
  <p align="center">
    <input name="id_qm"  id="id_qm" type="hidden" value="<? echo"$id_qm"; ?>"class="input-large">
			  <?

echo"<SCRIPT TYPE='text/javascript'>
function confirmDelete()
{
    return confirm('Are you sure you wish to save this entry?');
}
</script>";

		  ?>
    <input type="submit" name="Submit" value="Submit" class="btn btn-primary">
    <input name="cancel" type="submit" id="cancel" value="Cancel" class="btn btn-primary"/>
<?
           
			include "konek_qm.php";
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
			$s_strength_agent = str_replace("'", "", "$strength_agent");
			$s_improved = str_replace("'", "", "$improved");
			$s_recommendation = str_replace("'", "", "$recommendation");
			$s_action_done_qa = str_replace("'", "", "$action_done_qa");
			$s_action_done_ops = str_replace("'", "", "$action_done_ops");
			$s_notes_recording = str_replace("'", "", "$notes_recording");
			
		  if ($Submit)
	  {
	  
		if($q1=="" or $q2==""  or $q4=="" or $q3=="" or $q5=="" or $q6=="" or $q7=="" or $q8=="" or $q9=="" or $q10=="" or $q11=="" or $q12=="" or $q13=="" or $q14=="" or $ss="" or $spv_name=="" or $interaction_date=="" or $observation_date=="" or $week_=="0" or $customer_name=="" or $interaction_type=="0" or $product_type=="" or $product_detail=="" or $product_detail_agent=="" or $fcr=="0" or $repeat=="0" or $s_date_prev_call=="" or $s_prev_agent=="" or hh_2=="" or $mm_2=="" or $drop_call=="0" or $strength_agent==""or $improved =="" or  $recommendation=="" or $notes_recording=="")
		{
			 
			?>
			
            <script type="text/javascript">
			window.alert("Value not completed")
			</script>
            <?
			}
			
		else 
			
			{
			
				
	    	    $uploadDir = "upload_path/";
	
				$uploadFile = $_FILES['file_action_done_qa'];
				$uploadFile2 = $_FILES['file_action_done_ops'];
				

				// Extract nama file
				$extractFile = pathinfo($uploadFile['name']);
				$extractFile2 = pathinfo($uploadFile2['name']);
				
				$size = $_FILES['file_action_done_qa']['size']; //untuk mengetahui ukuran file
				$tipe = $_FILES['file_action_done_qa']['type'];// untuk mengetahui tipe file
				
				$size2 = $_FILES['file_action_done_ops']['size']; //untuk mengetahui ukuran file
				$tipe2 = $_FILES['file_action_done_ops']['type'];// untuk mengetahui tipe file


				//Dibawah ini adalah untuk mengatur format gambar yang dapat di uplada ke server.
				//nda bisa tambahakan jika ingin memasukan format yang lain tergantung kebutuhan anda.

				$exts =array('image/jpg','image/jpeg','image/pjpeg','image/png','image/x-png','doc','docx','pdf','xls','xlsx');
				
				// dibawah ini script untuk mengatur ukuran file yang dapat di upload ke server
				/* if(($size !=0)&&($size>130000))
				{
					exit('Ukuran gambar terlalu besar?');
				}*/
		//}

		$sameName = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
		$handle = opendir($uploadDir);
		
		while(false !== ($file = readdir($handle)))
		{ // Looping isi file pada directory tujuan
			// Apabila ada file dengan awalan yg sama dengan nama file di uplaod
			if(strpos($file,$extractFile['filename']) !== false)
			$sameName++; // Tambah data file yang sama
		}
		$newName = empty($sameName) ? $uploadFile['name'] : $extractFile['filename'].'('.$sameName.').'.$extractFile['extension'];
		
		
		$sameName2 = 0; // Menyimpan banyaknya file dengan nama yang sama dengan file yg diupload
		$handle2 = opendir($uploadDir);
		
		while(false !== ($file2 = readdir($handle2)))
		{ // Looping isi file pada directory tujuan
			// Apabila ada file dengan awalan yg sama dengan nama file di uplaod
			if(strpos($file2,$extractFile2['filename']) !== false)
			$sameName2++; // Tambah data file yang sama
		}

		/* Apabila tidak ada file yang sama ($sameName masih '0') maka nama file pakai 
		* nama ketika diupload, jika $sameName > 0 maka pakai format "namafile($sameName).ext */
	
		$newName2 = empty($sameName2) ? $uploadFile2['name'] : 
		$extractFile2['filename'].'('.$sameName2.').'.$extractFile2['extension'];

		
		if ($uploadFile!='' )
		{
			move_uploaded_file($uploadFile['tmp_name'],$uploadDir.$newName);
		}
		if ($uploadFile2!='' )
		{
			move_uploaded_file($uploadFile2['tmp_name'],$uploadDir.$newName2);
		}
		
		//$date_saved_e=date("m/d/Y H:i:s");
		$slas_e=":";
		$ss2_e=00;	
		$interaction_date_save="$interaction_date $hh$slas_e$mm$slas_e$ss2_e"; 
		
			$add="update table_qm_inbound_top_detail set 
			id_qm = '$id_qm', 
			spv_name = '$spv_name',
			interaction_date = '$interaction_date_save', 
			observation_date ='$observation_date', 
			week_ ='$week_', 
			customer_name ='$customer_name', 
			interaction_type ='$interaction_type', 
			product_type ='$product_type',
			product_detail ='$product_detail',
			product_detail_agent = '$product_detail_agent',
			fcr = '$fcr',
			repeat = '$repeat',
			date_prev_call = '$date_prev_call',
			prev_agent = '$prev_agent',
			hh_handling_time = '$hh_2',
			mm_handling_time = '$mm_2',
			ss_handling_time = '$ss_2',
			drop_call = '$drop_call',
			recommendation = '$s_recommendation',
			strength_agent = '$s_strength_agent',
			improved = '$s_improved',
			action_done_qa = '$s_action_done_qa',
			action_done_ops = '$s_action_done_ops',
			notes_recording = '$s_notes_recording'
			
			where id_qm='$id'";
			mssql_query($add);
		 //echo "$add";
		
		if ($newName !='')
		{
			$add22="update table_qm_inbound_top_detail set 
			file_action_done_qa = '$newName' where id_qm='$id'";
			mssql_query($add22);
			
		}
		if ($newName2 !='')
		{
			$add2="update table_qm_inbound_top_detail set 
			file_action_done_ops = '$newName2' where id_qm='$id'";
			mssql_query($add2); 
		}
		
		$add2="update table_qm_inbound_top set 
		notes1 = '$notes1',
		notes2 = '$notes2',
		notes3 = '$notes3',
		notes4 = '$notes4',
		notes5= '$notes5',
		notes6= '$notes6',
		notes7='$notes7',
		notes8='$notes8',
		notes9='$notes9',
		notes10='$notes10',
		notes11='$notes11',
		notes12='$notes12',
		notes13='$notes13',
		notes14='$notes14',
		q1='$q1',
		q2='$q2',
		q3='$q3',
		q4='$q4',
		q5='$q5',
		q6='$q6',
		q7='$q7',
		q8='$q8',
		q9='$q9',
		q10='$q10',
		q11='$q11',
		q12='$q12',
		q13='$q13',
		q14='$q14',
		save_q1='$save_q1',
		save_q2='$save_q2',
		save_q3='$save_q3',
		save_q4='$save_q4',
		save_q5='$save_q5',
		save_q6='$save_q6',
		save_q7='$save_q7',
		save_q8='$save_q8',
		save_q9='$save_q9',
		save_q10='$save_q10',
		save_q11='$save_q11',
		save_q12='$save_q12',
		save_q13='$save_q13',
		save_q14='$save_q14',
		tot_score='$save_total' where id_qm='$id'";
		  mssql_query($add2);
		  //echo "$q_addTemp";

			echo "<script type='text/javascript'>
			window.opener.location.reload();
			window.close();
			</script>";  	}
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
	window.location="http://crmce"
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
include "konek_qm.php";
date_default_timezone_set('Asia/Jakarta');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

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