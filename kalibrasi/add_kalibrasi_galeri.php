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
      <th width="36"  class="head0"><div align="center">Value</div></th>
      <th width="232" class="head0"><div align="center">Attributes</div></th>
      <th width="71"  class="head0"><div align="center">Score</div></th>
      <th width="176"  class="head0" bgcolor="#CCCCCC"><div align="center">Y/N</div></th>
      <th width="363"  class="head0" bgcolor="#CCCCCC"><div align="center">Notes</div></th>
    </tr>
</thead>
    <tr>
      <td>1</td>
      <td>NFE</td>
      <td>Opening</td>
      <td><div align="center">2.5</div></td>
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
      <td>NFE</td>
      <td>Data Gathering</td>
      <td><div align="center">5</div></td>
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
      <td>FE</td>
      <td>Correct Answer</td>
      <td><div align="center">10</div></td>
      <td><input name="q3" type="radio"  value="yes" <? if ($q3=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q3" type="radio"  value="no" <? if ($q3=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q3" type="radio"  value="na" <? if ($q3=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes3" cols="35" id="notes3" onKeyPress="javascript: checkValuenotes3();"><? if($cancel){ ?><? $notes3="";}?><? echo "$notes3"; ?></textarea>
        <input name="jml_notes3" type="text" "disabled" id="jml_notes3" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>4</td>
      <td>FE</td>
      <td>Provide Solution</td>
      <td><div align="center">10</div></td>
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
      <td>FE</td>
      <td>Proses Compliance</td>
      <td><div align="center">10</div></td>
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
      <td>FE</td>
      <td>Input Accuracy Data / Information</td>
      <td><div align="center">10</div></td>
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
      <td>NFE</td>
      <td>Appearance</td>
      <td><div align="center">10</div></td>
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
      <td>NFE</td>
      <td>Skillful</td>
      <td><div align="center">5</div></td>
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
      <td>NFE</td>
      <td>Greet Customer Name</td>
      <td><div align="center">2.5</div></td>
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
      <td>NFE</td>
      <td>Human Touch</td>
      <td><div align="center">5</div></td>
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
      <td>NFE</td>
      <td>Voice Quality</td>
      <td><div align="center">5</div></td>
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
      <td>NFE</td>
      <td>Attitude during Handling</td>
      <td><div align="center">5</div></td>
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
      <td>NFE</td>
      <td>Empowerment</td>
      <td><div align="center">5</div></td>
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
      <td>NFE</td>
      <td>Communicating the Information</td>
      <td><div align="center">5</div></td>
      <td><input name="q14" type="radio"  value="yes" <? if ($q14=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q14" type="radio"  value="no" <? if ($q14=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q14" type="radio"  value="na" <? if ($q14=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes14" cols="35" id="notes14" onKeyPress="javascript: checkValuenotes14();"><? if($cancel){ ?><? $notes14="";}?><? echo "$notes14"; ?></textarea>
        <input name="jml_notes14" type="text" "disabled" id="jml_notes14" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>15</td>
      <td>NFE</td>
      <td>Negotiation skill</td>
      <td><div align="center">5</div></td>
      <td><input name="q15" type="radio"  value="yes" <? if ($q15=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q15" type="radio"  value="no" <? if ($q15=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q15" type="radio"  value="na" <? if ($q15=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes15" cols="35" id="notes15" onKeyPress="javascript: checkValuenotes15();"><? if($cancel){ ?><? $notes15="";}?><? echo "$notes15"; ?></textarea>
        <input name="jml_notes15" type="text" "disabled" id="jml_notes15" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>16</td>
      <td>NFE</td>
      <td>Closing</td>
      <td><div align="center">2.5</div></td>
      <td><input name="q16" type="radio"  value="yes" <? if ($q16=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q16" type="radio"  value="no" <? if ($q16=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q16" type="radio"  value="na" <? if ($q16=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes16" cols="35" id="notes16" onKeyPress="javascript: checkValuenotes16();"><? if($cancel){ ?><? $notes16="";}?><? echo "$notes16"; ?></textarea>
        <input name="jml_notes16" type="text" "disabled" id="jml_notes16" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>17</td>
      <td>NFE</td>
      <td>Campaign / Cross selling/ upselling / survey</td>
      <td><div align="center">2.5</div></td>
      <td><input name="q17" type="radio"  value="yes" <? if ($q17=="yes") {echo "checked";} else {echo "";} ?> />
  Yes
    <input name="q17" type="radio"  value="no" <? if ($q17=="no") {echo "checked";} else {echo "";} ?> />
  No
  <input name="q17" type="radio"  value="na" <? if ($q17=="na") {echo "checked";} else {echo "";} ?> />
  NA</td>
      <td><textarea name="notes17" cols="35" id="notes17" onKeyPress="javascript: checkValuenotes17();"><? if($cancel){ ?><? $notes17="";}?><? echo "$notes17"; ?></textarea>
        <input name="jml_notes17" type="text" "disabled" id="jml_notes17" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td colspan="6">
	  
	  <?
	  		if ($q1=="yes" or $q1=="na")
		{
		$save_q1="2.5";
		$sc_q1="1";
		}
		else
		{
		$save_q1="0";
		$sc_q1="0";
		}
		
		if ($q2=="yes" or $q2=="na")
		{
		$save_q2="5";
		$sc_q2="1";
		}
		else
		{
		$save_q2="0";
		$sc_q2="0";
		}
		
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na") and ($q3=="yes" or $q3=="na"))
		{
		$save_q3="10";
		$save_q4="10";
		$save_q5="10";
		$save_q6="10";
		$sc_fe="4";
		}
		if ($q3=="no" or $q4=="no" or $q5=="no" or $q6=="no")
		{
		$save_q3="0";
		$save_q4="0";
		$save_q5="0";
		$save_q6="0";
		$sc_fe="0";
		}

		

		if ($q7=="yes" or $q7=="na")
		{
		$save_q7="7.5";
		$sc_q7="1";
		}
		else
		{
		$save_q7="0";
		$sc_q7="0";
		}

		if ($q8=="yes" or $q8=="na")
		{
		$save_q8="5";
		$sc_q8="1";
		}
		else
		{
		$save_q8="0";
		$sc_q8="0";
		}

		if ($q9=="yes" or $q9=="na")
		{
		$save_q9="2.5";
		$sc_q9="1";
		}
		else
		{
		$save_q9="0";
		$sc_q9="0";
		}

		if ($q10=="yes" or $q10=="na")
		{
		$save_q10="5";
		$sc_q10="1";
		}
		else
		{
		$save_q10="0";
		$sc_q10="0";
		}

		if ($q11=="yes" or $q11=="na")
		{
		$save_q11="5";
		$sc_q11="1";
		}
		else
		{
		$save_q11="0";
		$sc_q11="0";
		}

		if ($q12=="yes" or $q12=="na")
		{
		$save_q12="5";
		$sc_q12="1";
		}
		else
		{
		$save_q12="0";
		$sc_q12="0";
		}

		if ($q13=="yes" or $q13=="na")
		{
		$save_q13="5";
		$sc_q13="1";
		}
		else
		{
		$save_q13="0";
		$sc_q13="0";
		}

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
		$save_q15="5";
		$sc_q15="1";
		}
		else
		{
		$save_q15="0";
		$sc_q15="0";
		}

		if ($q16=="yes" or $q16=="na")
		{
		$save_q16="5";
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

		$save_total=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13+$save_q14+$save_q15+$save_q16+$save_q17;
		  
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
	    <input name="cek_score" type="submit" id="cek_score" value="Cek Score"  class="btn"/>
      <? echo"$save_total"; ?>
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
  

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN""http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<title>Detail Form Input</title>
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

</head>

<body>
<?
 
 //nfe total
$nfe_total=$q1_tot_y+$q2_tot_y+$q3_tot_y+$q7_tot_y+$q8_tot_y+$q9_tot_y+$q10_tot_y+$q11_tot_y+$q12_tot_y+$q13_tot_y+$q14_tot_y+$q15_tot_y+$q16_tot_y+$q17_tot_y+$q18_tot_y+$q19_tot_y+$q20_tot_y+$q1_tot_na+$q2_tot_na+$q3_tot_na+$q7_tot_na+$q8_tot_na+$q9_tot_na+$q10_tot_na+$q11_tot_na+$q12_tot_na+$q13_tot_na+$q14_tot_na+$q15_tot_na+$q16_tot_na+$q17_tot_na+$q18_tot_na+$q19_tot_na+$q20_tot_na;
		
		//$nfe_acc=($nfe_total/(17*$jum_tot)*100);
		//printf("%1.2f ", $nfe_acc);
		
// fe total


 
?>
  
    <input name="id_qm"  id="id_qm" type="hidden" value="<? echo"$id_qm"; ?>">
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
	  
		if($q1=="" or $q2==""  or $q4=="" or $q5=="" or $q6=="" or $q7=="" or $q8=="" or $q9=="" or $q10=="" or $q11=="" or $q12=="" or $q13=="" or $q14=="" or $q15=="" or $q16=="" or $q17=="" or $ss="" or $spv_name=="" or $interaction_date=="" or $observation_date=="" or $week_=="0" or $customer_name=="" or $interaction_type=="0" or $product_type=="" or $product_detail=="" or $product_detail_agent=="" or $fcr=="0" or hh_2=="" or $mm_2=="" or $agree=="")
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
		
		$c ="select * from table_kalibrasi_galeri where id_qm='$id'";
		$q = mssql_query($c);
		$n = mssql_num_rows($q);
		
		if ($n <= 0) {
			$add="insert into table_kalibrasi_galeri(notes1,notes2,notes3,notes4,notes5,notes6,notes7,notes8,notes9,notes10,notes11,notes12,notes13,notes14,notes15,notes16,notes17,notes18,notes19,notes20,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,q15,q16,q17,q18,q19,q20,save_q1,save_q2,save_q3,save_q4,save_q5,save_q6,save_q7,save_q8,save_q9,save_q10,save_q11,save_q12,save_q13,save_q14,save_q15,save_q16,save_q17,save_q18,save_q19,save_q20,status_save,id_pribadi_user,id_pribadi_observer,date_saved,tot_score,id_unit,lb,id_qm,notes_score,id_kalibrasi)
		  values('$notes1','$notes2','$notes3','$notes4','$notes5','$notes6','$notes7','$notes8','$notes9','$notes10','$notes11','$notes12','$notes13','$notes14','$notes15','$notes16','$notes17','$notes18','$notes19','$notes20','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$q15','$q16','$q17','$q18','$q19','$q20','$save_q1','$save_q2','$save_q3','$save_q4','$save_q5','$save_q6','$save_q7','$save_q8','$save_q9','$save_q10','$save_q11','$save_q12','$save_q13','$save_q14','$save_q15','$save_q16','$save_q17','$save_q18','$save_q19','$save_q20','complete','$id_pribadi_user','$observer',getdate(),'$save_total','$kd_unit','$id_lb','$id','$notes_score','$SES_hendi')";
			mssql_query($add);
		echo "$add";
		 
		 
		 $date_saved=date("m/d/Y H:i:s");		  
		 $add2="update table_qm_galeri set id_kalibrasi='$SES_hendi', kalibrasi='$agree' where id_qm='$id'";
		  mssql_query($add2);
		  //echo "$q_addTemp";
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