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
<script language="javascript">
 function angka(e) {
    if (!/^[-_/''""+=(),.:;<>\|{}a-z, A-Z, 0-9]+$/.test(e.value)) {
      e.value = e.value.substring(0,e.value.length-1);
   }
 }
</script>

</head>

<form action="<? $PHP_SELF; ?>" method="post" name="welcome" id="welcome" onKeyPress="return noenter()">
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
      <td>Opening Greeting And Confirmation customer data </td>
      <td><div align="center">2</div></td>
      <td><input name="q1" type="radio"  value="yes" <? if ($q1=="yes") {echo "checked";} else {echo "";} ?> />
      Yes 
        <input name="q1" type="radio"  value="no" <? if ($q1=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q1" type="radio"  value="na" <? if ($q1=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes1" cols="35" id="notes1" onKeyPress="javascript: checkValuenotes1();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes1="";}?><? echo "$notes1"; ?></textarea>
          <input name="jml_notes1" type="text" "disabled" id="jml_notes1" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>2</td>
      <td>NCE</td>
      <td> Mengatasi Penolakan</td>
      <td><div align="center">6</div></td>
      <td><input name="q2" type="radio"  value="yes" <? if ($q2=="yes") {echo "checked";} else {echo "";} ?> />
      Yes 
        <input name="q2" type="radio"  value="no" <? if ($q2=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q2" type="radio"  value="na" <? if ($q2=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes2" cols="35" id="notes2" onKeyPress="javascript: checkValuenotes2();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes2="";}?><? echo "$notes2"; ?></textarea>
          <input name="jml_notes2" type="text" "disabled" id="jml_notes2" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>3</td>
      <td>CE</td>
      <td>Correct Information</td>
      <td><div align="center">20</div></td>
      <td><input name="q3" type="radio"  value="yes" <? if ($q3=="yes") {echo "checked";} else {echo "";} ?> />
      Yes 
        <input name="q3" type="radio"  value="no" <? if ($q3=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q3" type="radio"  value="na" <? if ($q3=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes3" cols="35" id="notes3" onKeyPress="javascript: checkValuenotes3();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes3="";}?><? echo "$notes3"; ?></textarea>
          <input name="jml_notes3" type="text" "disabled" id="jml_notes3" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>4</td>
      <td>CE</td>
      <td>Correct Handling </td>
      <td><div align="center">20</div></td>
      <td><input name="q4" type="radio"  value="yes" <? if ($q4=="yes") {echo "checked";} else {echo "";} ?> />
      Yes 
        <input name="q4" type="radio"  value="no" <? if ($q4=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q4" type="radio"  value="na" <? if ($q4=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes4" cols="35" id="notes4" onKeyPress="javascript: checkValuenotes4();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes4="";}?><? echo "$notes4"; ?></textarea>
          <input name="jml_notes4" type="text" "disabled" id="jml_notes4" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>5</td>
      <td>CE</td>
      <td>Privacy Policy</td>
      <td><div align="center">20</div></td>
      <td><input name="q5" type="radio"  value="yes" <? if ($q5=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
         <input name="q5" type="radio"  value="no" <? if ($q5=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q5" type="radio"  value="na" <? if ($q5=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes5" cols="35" id="notes5" onKeyPress="javascript: checkValuenotes5();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes5="";}?><? echo "$notes5"; ?></textarea>
          <input name="jml_notes5" type="text" "disabled" id="jml_notes5" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>6</td>
      <td>NCE</td>
      <td>Input Accuracy Data </td>
      <td><div align="center">6</div></td>
      <td><input name="q6" type="radio"  value="yes" <? if ($q6=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q6" type="radio"  value="no" <? if ($q6=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q6" type="radio"  value="na" <? if ($q6=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes6" cols="35" id="notes6" onKeyPress="javascript: checkValuenotes6();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes6="";}?><? echo "$notes6"; ?></textarea>
          <input name="jml_notes6" type="text" "disabled" id="jml_notes6" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>7</td>
      <td>NCE</td>
      <td>Hospitality</td>
      <td><div align="center">4</div></td>
      <td><input name="q7" type="radio"  value="yes" <? if ($q7=="yes") {echo "checked";} else {echo "";} ?> />
    Yes
      <input name="q7" type="radio"  value="no" <? if ($q7=="no") {echo "checked";} else {echo "";} ?> />
    No
    <input name="q7" type="radio"  value="na" <? if ($q7=="na") {echo "checked";} else {echo "";} ?> />
    NA</td>
      <td><textarea name="notes7" cols="35" id="notes7" onKeyPress="javascript: checkValuenotes7();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes7="";}?><? echo "$notes7"; ?></textarea>
          <input name="jml_notes7" type="text" "disabled" id="jml_notes7" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>8</td>
      <td>NCE</td>
      <td>Not use Jargon </td>
      <td><div align="center">4</div></td>
      <td><input name="q8" type="radio"  value="yes" <? if ($q8=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q8" type="radio"  value="no" <? if ($q8=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q8" type="radio"  value="na" <? if ($q8=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes8" cols="35" id="notes8" onKeyPress="javascript: checkValuenotes8();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes8="";}?><? echo "$notes8"; ?></textarea>
          <input name="jml_notes8" type="text" "disabled" id="jml_notes8" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>9</td>
      <td>NCE</td>
      <td>Voice Quality</td>
      <td><div align="center">2</div></td>
      <td><input name="q9" type="radio"  value="yes" <? if ($q9=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q9" type="radio"  value="no" <? if ($q9=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q9" type="radio"  value="na" <? if ($q9=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes9" cols="35" id="notes9" onKeyPress="javascript: checkValuenotes9();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes9="";}?><? echo "$notes9"; ?></textarea>
          <input name="jml_notes9" type="text" "disabled" id="jml_notes9" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>10</td>
      <td>NCE</td>
      <td>Call Management</td>
      <td><div align="center">4</div></td>
      <td><input name="q10" type="radio"  value="yes" <? if ($q10=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q10" type="radio"  value="no" <? if ($q10=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q10" type="radio"  value="na" <? if ($q10=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes10" cols="35" id="notes10" onKeyPress="javascript: checkValuenotes10();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes10="";}?><? echo "$notes10"; ?></textarea>
          <input name="jml_notes10" type="text" "disabled" id="jml_notes10" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>11</td>
      <td>NCE</td>
      <td>Hold</td>
      <td><div align="center">4</div></td>
      <td><input name="q11" type="radio"  value="yes" <? if ($q11=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q11" type="radio"  value="no" <? if ($q11=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q11" type="radio"  value="na" <? if ($q11=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes11" cols="35" id="notes11" onKeyPress="javascript: checkValuenotes11();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes10="";}?><? echo "$notes11"; ?></textarea>
          <input name="jml_notes11" type="text" "disabled" id="jml_notes11" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>12</td>
      <td>NCE</td>
      <td>Reconfirm </td>
      <td><div align="center">6</div></td>
      <td><input name="q12" type="radio"  value="yes" <? if ($q12=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q12" type="radio"  value="no" <? if ($q12=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q12" type="radio"  value="na" <? if ($q11=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes12" cols="35" id="notes12" onKeyPress="javascript: checkValuenotes12();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes12="";}?><? echo "$notes12"; ?></textarea>
          <input name="jml_notes12" type="text" "disabled" id="jml_notes12" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>13</td>
      <td>NCE</td>
      <td>Closing Greeting</td>
      <td><div align="center">2</div></td>
      <td><input name="q13" type="radio"  value="yes" <? if ($q13=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q13" type="radio"  value="no" <? if ($q13=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q13" type="radio"  value="na" <? if ($q13=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes13" cols="35" id="notes13" onKeyPress="javascript: checkValuenotes13();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes13="";}?><? echo "$notes13"; ?></textarea>
          <input name="jml_notes13" type="text" "disabled" id="jml_notes13" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
	
<!--
    <tr>
      <td>14</td>
      <td>NFE</td>
      <td>Control conversations</td>
      <td><div align="center">2.5</div></td>
      <td><input name="q13" type="radio"  value="yes" <? //if ($q13=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q13" type="radio"  value="no" <? //if ($q13=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q13" type="radio"  value="na" <?//if ($q13=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes13" cols="35" id="notes13" onkeypress="javascript: checkValuenotes13();" onKeyUp="angka(this);"><? //if($cancel){ ?><?// $notes1="";}?><? //echo "$notes13"; ?></textarea>
          <input name="jml_notes13" type="text" "disabled" id="jml_notes13" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>15</td>
      <td>NFE</td>
      <td>Communicating the Information</td>
      <td><div align="center">5</div></td>
      <td><input name="q14" type="radio"  value="yes" <? //if ($q14=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q14" type="radio"  value="no" <? //if ($q14=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q14" type="radio"  value="na" <? //if ($q14=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes14" cols="35" id="notes14" onkeypress="javascript: checkValuenotes14();" onKeyUp="angka(this);"><? //if($cancel){ ?><? //$notes14="";}?><? //echo "$notes14"; ?></textarea>
          <input name="jml_notes14" type="text" "disabled" id="jml_notes14" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>16</td>
      <td>NFE</td>
      <td>Not use of Jargon/Informal Style</td>
      <td><div align="center">2.5</div></td>
      <td><input name="q15" type="radio"  value="yes" <? //if ($q15=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q15" type="radio"  value="no" <? //if ($q15=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q15" type="radio"  value="na" <? //if ($q15=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes15" cols="35" id="notes15" onkeypress="javascript: checkValuenotes15();" onKeyUp="angka(this);"><? //if($cancel){ ?><? //$notes15="";}?><? //echo "$notes15"; ?></textarea>
          <input name="jml_notes15" type="text" "disabled" id="jml_notes15" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>17</td>
      <td>NFE</td>
      <td>Hold/Transfer/Routing/Callback Technique</td>
      <td><div align="center">2.5</div></td>
      <td><input name="q16" type="radio"  value="yes" <? //if ($q16=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q16" type="radio"  value="no" <? //if ($q16=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q16" type="radio"  value="na" <? //if ($q16=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes16" cols="35" id="notes16" onkeypress="javascript: checkValuenotes16();" onKeyUp="angka(this);"><? //if($cancel){ ?><? //$notes16="";}?><? //echo "$notes16"; ?></textarea>
          <input name="jml_notes16" type="text" "disabled" id="jml_notes16" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>18</td>
      <td>NFE</td>
      <td>Reconfirm the Agreement</td>
      <td><div align="center">2.5</div></td>
      <td><input name="q17" type="radio"  value="yes" <? //if ($q17=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q17" type="radio"  value="no" <? //if ($q17=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q17" type="radio"  value="na" <? //if ($q17=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes17" cols="35" id="notes17" onkeypress="javascript: checkValuenotes17();" onKeyUp="angka(this);"><? //if($cancel){ ?><?// $notes17="";}?><? //echo "$notes17"; ?></textarea>
          <input name="jml_notes17" type="text" "disabled" id="jml_notes17" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>19</td>
      <td>NFE</td>
      <td>Closing Greeting</td>
      <td><div align="center">2.5</div></td>
      <td><input name="q18" type="radio"  value="yes" <? //if ($q18=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q18" type="radio"  value="no" <? //if ($q18=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q18" type="radio"  value="na" <?// if ($q18=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes18" cols="35" id="notes18" onkeypress="javascript: checkValuenotes18();" onKeyUp="angka(this);"><? //if($cancel){ ?><? //$notes18="";}?><? //echo "$notes18"; ?></textarea>
          <input name="jml_notes18" type="text" "disabled" id="jml_notes18" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>20</td>
      <td>NFE</td>
      <td>Campaign / Cross selling/ upselling / survey</td>
      <td><div align="center">2.5</div></td>
      <td><input name="q19" type="radio"  value="yes" <? //if ($q19=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q19" type="radio"  value="no" <?// if ($q19=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q19" type="radio"  value="na" <?// if ($q19=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes19" cols="35" id="notes19" onkeypress="javascript: checkValuenotes19();" onKeyUp="angka(this);"><? //if($cancel){ ?><? //$notes19="";}?><? //echo "$notes19"; ?></textarea>
          <input name="jml_notes19" type="text" "disabled" id="jml_notes19" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
-->
    <tr>
      <td colspan="6">
<?
	  	if ($q1=="yes" or $q1=="na")
		{
		$save_q1="2";
		$sc_q1="1";
		}
		else
		{
		$save_q1="0";
		$sc_q1="0";
		}
		
		if ($q2=="yes" or $q2=="na")
		{
		$save_q2="6";
		$sc_q2="1";
		}
		else
		{
		$save_q2="0";
		$sc_q2="0";
		}
		
		if (($q3=="yes" or $q3=="na" ) and ($q4=="yes" or $q4=="na")and ($q5=="yes" or $q5=="na") )
		{
		$save_q3="20";
		$save_q4="20";
		$save_q5="20";
		$sc_fe="3";
		}
		if ($q3=="no" or $q4=="no" or $q5=="no")
		{
		$save_q3="0";
		$save_q4="0";
		$save_q5="0";
		$sc_fe="0";
		}

		if ($q6=="yes" or $q6=="na")
		{
		$save_q6="6";
		$sc_q6="1";
		}
		else
		{
		$save_q6="0";
		$sc_q6="0";
		}
		
		if ($q7=="yes" or $q7=="na")
		{
		$save_q7="4";
		$sc_q7="1";
		}
		else
		{
		$save_q7="0";
		$sc_q7="0";
		}
		if ($q8=="yes" or $q8=="na")
		{
		$save_q8="4";
		$sc_q8="1";
		}
		else
		{
		$save_q8="0";
		$sc_q8="0";
		}

		if ($q9=="yes" or $q9=="na")
		{
		$save_q9="2";
		$sc_q9="1";
		}
		else
		{
		$save_q9="0";
		$sc_q9="0";
		}

		if ($q10=="yes" or $q10=="na")
		{
		$save_q10="4";
		$sc_q10="1";
		}
		else
		{
		$save_q10="0";
		$sc_q10="0";
		}

		if ($q11=="yes" or $q11=="na")
		{
		$save_q11="4";
		$sc_q11="1";
		}
		else
		{
		$save_q11="0";
		$sc_q11="0";
		}

		if ($q12=="yes" or $q12=="na")
		{
		$save_q12="6";
		$sc_q12="1";
		}
		else
		{
		$save_q12="0";
		$sc_q12="0";
		}

		if ($q13=="yes" or $q13=="na")
		{
		$save_q13="2";
		$sc_q13="1";
		}
		else
		{
		$save_q13="0";
		$sc_q13="0";
		}
		/*
		if ($q14=="yes" or $q14=="na")
		{
		$save_q14="5";
		$sc_q14="1";
		}
		else
		{
		$save_q14="0";
		$sc_q14="0";
		}

		if ($q15=="yes" or $q15=="na")
		{
		$save_q15="2.5";
		$sc_q15="1";
		}
		else
		{
		$save_q15="0";
		$sc_q15="0";
		}

		if ($q16=="yes" or $q16=="na")
		{
		$save_q16="2.5";
		$sc_q16="1";
		}
		else
		{
		$save_q16="0";
		$sc_q16="0";
		}

		if ($q17=="yes" or $q17=="na")
		{
		$save_q17="2.5";
		$sc_q17="1";
		}
		else
		{
		$save_q17="0";
		$sc_q17="0";
		}

		if ($q18=="yes" or $q18=="na")
		{
		$save_q18="2.5";
		$sc_q18="1";
		}
		else
		{
		$save_q18="0";
		$sc_q18="0";
		}

		if ($q19=="yes" or $q19=="na")
		{
		$save_q19="2.5";
		$sc_q19="1";
		}
		else
		{
		$save_q19="0";
		$sc_q19="0";
		}
		
		*/
		$save_total=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13;
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
	  ?>
		<div align="center">
	    <input name="cek_score" type="submit" id="cek_score" value="Cek Score" class="btn" />
      <? echo"$save_total";?></br><br />
	   <input type="submit" name="Submit" value="Submit" class="btn btn-primary" >
    <input name="cancel" type="submit" id="cancel" value="Cancel" class="btn btn-primary" />
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
$nfe_total=$q1_tot_y+$q2_tot_y+$q3_tot_y+$q7_tot_y+$q8_tot_y+$q9_tot_y+$q10_tot_y+$q11_tot_y+$q12_tot_y+$q13_tot_y+$q14_tot_y+$q15_tot_y+$q16_tot_y+$q17_tot_y+$q18_tot_y+$q19_tot_y+$q1_tot_na+$q2_tot_na+$q3_tot_na+$q7_tot_na+$q8_tot_na+$q9_tot_na+$q10_tot_na+$q11_tot_na+$q12_tot_na+$q13_tot_na;
		
		//$nfe_acc=($nfe_total/(17*$jum_tot)*100);
		//printf("%1.2f ", $nfe_acc);
		
// fe total


 
?>
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
			
			
			
		  if ($Submit)
	  {
	  
		if( $q1=="" or $q2=="" or $q3=="" or $q4=="" or $q5=="" or $q6=="" or $q7=="" or $q8=="" or $q9=="" or $q10=="" or $q11=="" or $q12=="" or $q13=="")
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
		
			$add="update table_qm_telesales_detail set 
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
			call_activity='$call_activity',
			hh_handling_time = '$hh_2',
			mm_handling_time = '$mm_2',
			ss_handling_time = '$ss_2',
			call_status = '$call_status' where id_qm='$id'";
			mssql_query($add);
		 
		 $date_saved=date("m/d/Y H:i:s");		  
		$add2="update table_qm_telesales set 
		notes1 = '$s_notes1',
		notes2 = '$s_notes2',
		notes3 = '$s_notes3',
		notes4 = '$s_notes4',
		notes5= '$s_notes5',
		notes6= '$s_notes6',
		notes7='$s_notes7',
		notes8='$s_notes8',
		notes9='$s_notes9',
		notes10='$s_notes10',
		notes11='$s_notes11',
		notes12='$s_notes12',
		notes13='$s_notes13',
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
		tot_score='$save_total',
		userid='$userid' where id_qm='$id'";
		  mssql_query($add2);
		  //echo "$q_addTemp";

			echo "	<script type='text/javascript'>
			window.opener.location.reload();
			window.close();
			</script>";	  	}
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
include "konek_qm.php";
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