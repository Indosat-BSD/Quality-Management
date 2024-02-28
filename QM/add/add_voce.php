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
window.open(href, windowname, 'width=700,height=610,left=350,top=30,scrollbars=yes');
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
window.open(href, windowname, 'width=600,height=510,left=215,top=30,scrollbars=yes');
return false;
}

//-->
</SCRIPT>
<SCRIPT type="text/javascript" LANGUAGE=JavaScript>

function checkValuenotes1() {
                TextVal = document.forms['welcome'].notes1.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes1.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes1.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes2() {
                TextVal = document.forms['welcome'].notes2.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes2.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes2.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes3() {
                TextVal = document.forms['welcome'].notes3.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes3.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes3.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes4() {
                TextVal = document.forms['welcome'].notes4.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes1.value = TextVa4.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes4.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes5() {
                TextVal = document.forms['welcome'].notes5.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes5.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes5.value = TextVal.length+1;
                        return;
                }
        }
		
		
function checkValuenotes6() {
                TextVal = document.forms['welcome'].notes6.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes6.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes6.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes7() {
                TextVal = document.forms['welcome'].notes7.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes1.value = TextVa7.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes7.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes8() {
                TextVal = document.forms['welcome'].notes8.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes8.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes8.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes9() {
                TextVal = document.forms['welcome'].notes9.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes9.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes9.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes10() {
                TextVal = document.forms['welcome'].notes10.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes10.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes10.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes11() {
                TextVal = document.forms['welcome'].notes11.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes11.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes11.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes12() {
                TextVal = document.forms['welcome'].notes12.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes12.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes12.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes13() {
                TextVal = document.forms['welcome'].notes13.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes13.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes13.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes14() {
                TextVal = document.forms['welcome'].notes14.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes14.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes14.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes15() {
                TextVal = document.forms['welcome'].notes15.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes15.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes15.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes16() {
                TextVal = document.forms['welcome'].notes16.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes16.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes16.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes17() {
                TextVal = document.forms['welcome'].notes17.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes17.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes17.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes18() {
                TextVal = document.forms['welcome'].notes18.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes18.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes18.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes19() {
                TextVal = document.forms['welcome'].notes19.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes19.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes19.value = TextVal.length+1;
                        return;
                }
        }
		
function checkValuenotes20() {
                TextVal = document.forms['welcome'].notes20.value;
                if (TextVal.length > 4999) {
                        document.forms['welcome'].notes20.value = TextVal.substring(0,5000);
                        return false;
                } else {
                        document.forms['welcome'].jml_notes20.value = TextVal.length+1;
                        return;
                }
        }
		
		
</SCRIPT>
<script language="javascript">
 function angka(e) {
    if (!/^[-_/''""+=(),.:;<>\|{}a-z, A-Z, 0-9]+$/.test(e.value)) {
      e.value = e.value.substring(0,e.value.length-1);
   }
 }
</script>
</head>
<body>
<form action="<? $PHP_SELF; ?>" method="post" name="welcome" id="welcome">
  <p align="center">&nbsp;</p>
  <table width="313" border="0">
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td width="90">NIK</td>
      <td width="213"><input name="userText" type="text" id="userText" value="<? echo "$userText"; ?>" /></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input name="namaText" type="text" id="namaText" value="<? echo "$namaText"; ?>" /></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="searchButton" type="submit" id="searchButton" value="Search"  class="btn btn-primary"/></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="98%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="2%" class="head0"><div align="center">No</div></th>
      <th width="13%" class="head0"><div align="center">Username</div></th>
      <th width="18%" class="head0"><div align="center">Nama</div></th>
      <th width="19%" class="head0"><div align="center">Unit</div></th>
      <th width="11%" class="head0"><div align="center">Level</div></th>
      <th width="10%" class="head0"><div align="center">NIK</div></th>
      <th width="13%" class="head0"><div align="center">Action</div></th>
    </tr>
	</thead>
    <?
	$stot="select count(*)as jum_s from db_qm.dbo.table_qm_voce where status_save='not_complete' and id_pribadi_observer='$SES_hendi'";
//echo "$q1_yes_jum";
	   $r_stot=mssql_query($stot);
	   while($d_stot=mssql_fetch_array($r_stot))
			{
		     	$jum_tot1=$d_stot["jum_s"];
			} 		


		  if ($searchButton)
	  {
	  
		if($jum_tot1<>"0")
			{
			?>
            <script type="text/javascript">
			window.alert("complete the form at the bottom")
			</script>
            <?
			}
			
		else 
			
			{

					if(isset($searchButton)and $jum_tot1=="0")
					{
					$q_user="[sp_searchUser]'%$userText%','%$namaText%'";
					//echo "$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$pribadi=$d_user["id_data_pribadi"];
						$akd_divisi=$d_user["id_divisi"];
						$akd_departemen=$d_user["id_fungsi"];
						$usernameS=$d_user["id_karyawan"];
						$full_name=$d_user["nama"];
						$kode_level=$d_user["qm"];
						$akd_unit=$d_user["id_unit"];
						$nama_unit=$d_user["nama_unit"];
						
						$nik=$d_user["nik_karyawan"];
						echo "<tr class='content'>
                      <td>$no</td>
                      <td>$usernameS</td>
                      <td>$full_name</td>
                      <td>$nama_unit</td>
                      <td>$kode_level</td>
				
					  <td>$nik</td>";
                     if($akd_departemen =='CCO01' | $akd_departemen =='CCO02' | $akd_departemen =='CCO03' | $akd_divisi=='CR'
					  | $akd_unit =='CCO04A' | $akd_unit =='CCO04B'){
                     
                 echo"                               
                      <td><a href='?index=add_voce&div=cco&edit=t&userTextBox=$usernameS&namaTextBox=$full_name&id_lb=$lb&searchButton=1&kd_division=$akd_divisi&kd_departemen=$akd_departemen&userid=$userid&userText=$userText&namaText=$namaText&kd_unit=$akd_unit&useridHidden=$userid&nikTextBox=$nik&pribadi=$pribadi'>Create</a>";
							}else{ echo "<td></td>";}
					  echo "</td>
                      </tr>";
					  $no++;
					}
						
					$q_user2="select * FROM cco.hrms.dbo.tb_LB where lb like '%$namaText%'";
					//echo "$q_user";
					$r_user2=mssql_query($q_user2);
					
					while($d_user2=mssql_fetch_array($r_user2))
						{
						$akd_divisi=$d_user2["id_divisi"];
						$akd_departemen=$d_user2["id_fungsi"];
						$usernameS=$d_user2["id_karyawan"];
						$full_name=$d_user2["nama"];
						$kode_level=$d_user2["qm"];
						$akd_unit=$d_user2["id_unit"];
						$nama_unit=$d_user2["nama_unit"];
						$lb = $d_user2["lb"];
						$nik=$d_user2["nik_karyawan"];
						$nu=$d_user2["nu"];
						
				echo "<tr class='content'>
                      <td>$no</td>
                      <td>$usernameS</td>
                      <td>$lb</td>
                      <td>$nama_unit</td>
                      <td>$kode_level</td>
					  <td>$nik</td>
                     
                      <td><a href='?index=add_voce&div=cco&edit=t&userTextBox=$usernameS&namaTextBox=$lb&id_lb=$lb&searchButton=1&kd_division=$akd_divisi&kd_departemen=$akd_departemen&userid=$userid&userText=$userText&namaText=$namaText&kd_unit=$akd_unit&useridHidden=$userid&nikTextBox=$nik&pribadi=$pribadi&nu=$nu'>Create</a>";
					
					  echo "</td></tr>";
					  $no++;
					}	
					}}}
					?>
  </table>
  <p>&nbsp;</p>
  <table width="313" border="0">
    <tr>
      <td>NIK</td>
      <td><input name="pribadi" type="hidden" value="<? echo "$pribadi"; ?>" />
	  <input name="id_lb" type="hidden" value="<? echo "$id_lb"; ?>" />
	  <input name="userTextBox" type="text" id="userTextBox7" value="<? echo "$userTextBox"; ?>" onchange="welcome.submit()"/>
	  <?
	  $sql = mssql_query("select * from cco.hrms.dbo.tb_data_pribadi where nik_karyawan ='$userTextBox'");
	  $qry = mssql_fetch_array($sql);
	  $pribadi = $qry['id_data_pribadi'];
	  ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><input name="namaTextBox" type="text" id="namaTextBox7" value="<? echo "$namaTextBox"; ?>" /></td>
    </tr>
    <tr>
      <td>Divisi</td>
      <td><select name="kd_division" id="select7" class="box" onchange="welcome.submit()" >
          <option value="0" selected="selected">Divisi Name
          <?php
$query = "SELECT * FROM cco.hrms.dbo.tb_divisi where id_divisi = '$_GET[kd_division]'";
$result_divisi = mssql_query( $query );
		$KATAGORIdivisi = array();
		while($data = mssql_fetch_row($result_divisi))
		{
			$KATAGORIdivisi[] = $data["1"];
			$katadivisi[] = $data["0"];
		}
		$countdivisi = count($KATAGORIdivisi);

					  
			for($i=0;$i<$countdivisi;$i++)
			{
				if($katadivisi[$i] == $kd_division)
				{
					echo "<option value='$katadivisi[$i]' selected>$KATAGORIdivisi[$i]";
				}
				else
				{
					echo "<option value='$katadivisi[$i]'>$KATAGORIdivisi[$i]";
				}
			}
			?>
          </option>
      </select></td>
    </tr>
    <tr>
      <td>Departemen</td>
      <td><select name="kd_departemen" class="box" id="kd_departemen" onchange="welcome.submit()" >
          <option value="0" selected="selected">Departemen Name
          <?php
$query="select * from cco.hrms.dbo.tb_fungsi where left(id_fungsi,charindex('0',id_fungsi)-1)='$kd_division'";
$result_departemen = mssql_query( $query );
		$KATAGORIdepartemen = array();
		while($data = mssql_fetch_row($result_departemen))
		{
			$KATAGORIdepartemen[] = $data["1"];
			$katadepartemen[] = $data["0"];
		}
		$countdepartemen = count($KATAGORIdepartemen);
					  
		for($i=0;$i<$countdepartemen;$i++)
			{
				if($katadepartemen[$i]  == $kd_departemen)
				{
					echo "<option value='$katadepartemen[$i]' selected>$KATAGORIdepartemen[$i]";
				}
				else
				{
					echo "<option value='$katadepartemen[$i]'>$KATAGORIdepartemen[$i]";
				}
			}

	 
	 
			?>
          </option>
      </select></td>
    </tr>
    <tr>
      <td>Unit Kerja </td>
      <td><select name="kd_unit" class="box" id="kd_unit" >
          <option value="0" selected="selected">Unit Name
          <?php
$query="select * from cco.hrms.dbo.tb_unit where left(id_unit,len(id_unit)-1)='$kd_departemen'";
$result = mssql_query( $query );
		$KATAGORI = array();
		while($data = mssql_fetch_row($result))
		{
			$KATAGORI[] = $data["1"];
			$kata[] = $data["0"];
		}
		$count = count($KATAGORI);

					  //
			for($i=0;$i<$count;$i++)
			{
				if($kata[$i] == $kd_unit)
				{
					echo "<option selected value='$kata[$i]' >$KATAGORI[$i]";
				}
				else
				{
					echo "<option value='$kata[$i]'>$KATAGORI[$i]";
				}
			}
			?>
          </option>
      </select></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="947" border="1"  class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="17" class="head0"><div align="center">No</div></th>
      <th width="100" class="head0"><div align="center">Category</div></th>
      <th width="300" class="head0"><div align="center">Attributes</div></th>
	  <th width="100" class="head0"><div align="center">Y/N</div></th>
	  <th width="300" class="head0"><div align="center">Notes</div></th>
    </tr>
	</thead>
    <tr>
      <td>1</td>
      <td>Process Call</td>
	  <td>Telephone Skill</td>
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
      <td>Solution</td>
	  <td>Solution/Providing Assistance</td>
	  <td><div align="left"><input name="sc2" type="radio"  value="Y" <? if ($sc2=="Y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc2" type="radio"  value="N" <? if ($sc2=="N") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes2" cols="35" id="notes2" onkeypress="javascript: checkValuenotes2();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes2="";}?><? echo "$notes2"; ?></textarea>
          <input name="jml_notes2" type="text" "disabled" id="jml_notes2" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	
	<tr>
	  <td>3</td>
      <td rowspan="8">Reason Dessatisfaction Customer</td>
	  <td>CEC</td>
	  <td><div align="left"><input name="sc3" type="radio"  value="Y" <? if ($sc3=="Y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc3" type="radio"  value="N" <? if ($sc3=="N") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes3" cols="35" id="notes3" onkeypress="javascript: checkValuenotes3();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes3="";}?><? echo "$notes3"; ?></textarea>
          <input name="jml_notes3" type="text" "disabled" id="jml_notes3" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	<tr>
	  <td>4</td>
	  <td>Network</td>
	  <td><div align="left"><input name="sc4" type="radio"  value="Y" <? if ($sc4=="Y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc4" type="radio"  value="N" <? if ($sc4=="N") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes4" cols="35" id="notes4" onkeypress="javascript: checkValuenotes4();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes4="";}?><? echo "$notes4"; ?></textarea>
          <input name="jml_notes4" type="text" "disabled" id="jml_notes4" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>	
	<tr>
      <td>5</td>
      <td>Process & Procedure</td>
	  <td><div align="left"><input name="sc5" type="radio"  value="Y" <? if ($sc5=="Y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc5" type="radio"  value="N" <? if ($sc5=="N") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes5" cols="35" id="notes5" onkeypress="javascript: checkValuenotes5();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes5="";}?><? echo "$notes5"; ?></textarea>
        <input name="jml_notes5" type="text" "disabled" id="jml_notes5" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	
	<tr>
      <td>6</td>
	  <td>Billing Issue</td>
	  <td><div align="left"><input name="sc6" type="radio"  value="Y" <? if ($sc6=="Y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc6" type="radio"  value="N" <? if ($sc6=="N") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes6" cols="35" id="notes6" onkeypress="javascript: checkValuenotes6();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes6="";}?><? echo "$notes6"; ?></textarea>
        <input name="jml_notes6" type="text" "disabled" id="jml_notes6" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	<tr>
	  <td>7</td>
	  <td>Pricing & Package</td>
	  <td><div align="left"><input name="sc7" type="radio"  value="Y" <? if ($sc7=="Y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc7" type="radio"  value="N" <? if ($sc7=="N") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes7" cols="35" id="notes7" onkeypress="javascript: checkValuenotes7();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes7="";}?><? echo "$notes7"; ?></textarea>
        <input name="jml_notes7" type="text" "disabled" id="jml_notes7" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	<tr>
      <td>8</td>
	  <td>Program Promo</td>
	  <td><div align="left"><input name="sc8" type="radio"  value="Y" <? if ($sc8=="Y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc8" type="radio"  value="N" <? if ($sc8=="N") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes8" cols="35" id="notes8" onkeypress="javascript: checkValuenotes8();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes8="";}?><? echo "$notes8"; ?></textarea>
        <input name="jml_notes8" type="text" "disabled" id="jml_notes8" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr>
	<tr>
      <td>9</td>
	  <td>Access to Contact Center</td>
	  <td><div align="left"><input name="sc9" type="radio"  value="Y" <? if ($sc9=="Y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc9" type="radio"  value="N" <? if ($sc9=="N") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes9" cols="35" id="notes9" onkeypress="javascript: checkValuenotes9();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes9="";}?><? echo "$notes9"; ?></textarea>
        <input name="jml_notes9" type="text" "disabled" id="jml_notes9" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr> 
	<tr>
      <td>10</td>
	  <td>Wrong Input Reason</td>
	  <td><div align="left"><input name="sc10" type="radio"  value="Y" <? if ($sc10=="Y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc10" type="radio"  value="N" <? if ($sc10=="N") {echo "checked";} else {echo "";} ?>/>
  N
	  </div></td>
	  <td><textarea name="notes10" cols="35" id="notes10" onkeypress="javascript: checkValuenotes10();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes10="";}?><? echo "$notes10"; ?></textarea>
        <input name="jml_notes10" type="text" "disabled" id="jml_notes10" style="border-style:none; width:50px; background-color: white" value="0" />
	  </td>
    </tr> 	
  </table>
  <table width="951" border="0">
    <tr>
      <td><div align="center">
          <p>&nbsp;          </p>
          <p>
		  <?

echo"<SCRIPT TYPE='text/javascript'>
function confirmDelete()
{
    return confirm('Are you sure you wish to save this entry?');
}
</script>";
echo"<SCRIPT TYPE='text/javascript'>
function confirmDelete2()
{
    return confirm('Are you sure you wish to delete this entry?');
}
</script>";
		  ?>
            <input type="submit" name="Submit" value="Submit" onclick="return confirmDelete();"  class="btn btn-primary"/>
            <input name="cancel" type="submit" id="cancel" value="Refresh"  class="btn btn-primary"/>

            <?
			include "konek_qm.php";
		  if ($Submit)
	  {
	  
		if($userTextBox=="" or $namaTextBox=="" or $kd_division=="0" or $kd_departemen=="0" or $kd_unit=="0" or $sc1=="" or $sc2==""  or $sc3=="" or $sc4=="" or $sc5=="" or $sc6=="" or $sc7=="" or $sc8=="" or $sc9=="" or $sc10=="")
			{
			?>
            <script type="text/javascript">
			window.alert("Value not completed")
			</script>
            <?
			}
			
		else 
			
			{
		
		if($sc1=="Y"){$tot1=1;}else{$tot1=0;}
		if($sc2=="Y"){$tot2=1;}else{$tot2=0;}
		if($sc3=="Y"){$tot3=1;}else{$tot3=0;}
		if($sc4=="Y"){$tot4=1;}else{$tot4=0;}
		if($sc5=="Y"){$tot5=1;}else{$tot5=0;}
		if($sc6=="Y"){$tot6=1;}else{$tot6=0;}
		if($sc7=="Y"){$tot7=1;}else{$tot7=0;}
		if($sc8=="Y"){$tot8=1;}else{$tot8=0;}
		if($sc9=="Y"){$tot9=1;}else{$tot9=0;}
		if($sc10=="Y"){$tot10=1;}else{$tot10=0;}
		
		$save_total=$tot1+$tot2+$tot3+$tot4+$tot5+$tot6+$tot7+$tot8+$tot9+$tot10;
		  
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


		$date_saved=date("m/d/Y H:i:s");		  
		$q_addTemp="insert into table_qm_voce(notes1,notes2,notes3,notes4,notes5,notes6,notes7,notes8,notes9,notes10,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,save_q1,save_q2,save_q3,save_q4,save_q5,save_q6,save_q7,save_q8,save_q9,save_q10,status_save,id_pribadi_user,id_pribadi_observer,date_saved,id_unit,lb,tot_score)
		  values('$s_notes1','$s_notes2','$s_notes3','$s_notes4','$s_notes5','$s_notes6','$s_notes7','$s_notes8','$s_notes9','$s_notes10','$sc1','$sc2','$sc3','$sc4','$sc5','$sc6','$sc7','$sc8','$sc9','$sc10','$tot1','$tot2','$tot3','$tot4','$tot5','$tot6','$tot7','$tot8','$tot9','$tot10','not_complete','$pribadi','$SES_hendi','$date_saved','$kd_unit','$id_lb','$save_total')";
		  mssql_query($q_addTemp);
		  //echo "$q_addTemp";
		  
 echo"<script type='text/javascript'>
		window.location='?index=add_voce&div=cco'
		</script> ";
	  	}
	  }
	  
	 if ($cancel)
		{
		?>
          <script type="text/javascript">
		window.location="?index=add_voce&div=cco"
		</script> 
          <?php
		}
	 
	  ?>
</p>
          </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="146%" border="1" align="center" cellspacing="1"  class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th rowspan="3" width="1%" rowspan="2" class="head0"><div align="center">No</div></th>
      <th rowspan="3" width="2%" rowspan="2" class="head0"><div align="center">Action</div></th>
      <th rowspan="3" width="4%" rowspan="2" class="head0">Delete</th>
	  <th rowspan="3" width="4%" rowspan="2" class="head0">Edit</th>
      <th rowspan="3" width="4%" rowspan="2" class="head0"><div align="center">Username</div></th>
      <th rowspan="3" width="2%" rowspan="2" class="head0"><div align="center">Nama</div></th>
      <th colspan="2" class="head0"><div align="center">Process Call</div></th>
      <th colspan="2" class="head0"><div align="center">Solution</div></th>
      <th colspan="16" class="head0"><div align="center">Reason Dessatisfaction Customer</div></th>
	  <th rowspan="3" class="head0"><div align="center">Observer</div></th>
    </tr>
	
	<tr bgcolor="#CCCCCC">
      <th colspan="2" class="head0"><div align="center">Telephone Skill</div></th>
      <th colspan="2" class="head0"><div align="center">Solution/Providing Assistance</div></th>
      <th colspan="2" class="head0"><div align="center">CEC</div></th>
	  <th colspan="2" class="head0"><div align="center">Network</div></th>
	  <th colspan="2" class="head0"><div align="center">Process & Procedure</div></th>
	  <th colspan="2" class="head0"><div align="center">Billing Issue</div></th>
	  <th colspan="2" class="head0"><div align="center">Pricing & Package</div></th>
      <th colspan="2" class="head0"><div align="center">Program Promo<div></th>
	  <th colspan="2" class="head0"><div align="center">Access to Contact Center</div></th>
	  <th colspan="2" class="head0"><div align="center">Wrong Input Reason</div></th>
    </tr>
	<tr bgcolor="#CCCCCC">
      <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
      <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Y/N</div></th>
	  <th class="head0">Notes</th>	  
    </tr>
	</thead>
    <?
					$q_user="[sp_User_NotComplete]'table_qm_voce','$SES_hendi'";
					//echo "$q_user";
					$r_user=mssql_query($q_user);
					$no2=1;
					while($d_user=mssql_fetch_array($r_user))
						{
						$id_qm=$d_user["id_qm"];
						$full_name=$d_user["nama"];
						$lb=$d_user["lb"];
						$userid=$d_user["nik_karyawan"];
						$q1=$d_user["q1"];
						$q2=$d_user["q2"];
						$q3=$d_user["q3"];
						$q4=$d_user["q4"];
						$q5=$d_user["q5"];
						$q6=$d_user["q6"];
						$q7=$d_user["q7"];
						$q8=$d_user["q8"];
						$q9=$d_user["q9"];
						$q10=$d_user["q10"];
						$status_save=$d_user["status_save"];
						$nik=$d_user["nik"];
						$observer=$d_user["id_pribadi_observer"];
						$id_user=$d_user["id_pribadi_user"];
						$score_tot=$d_user["tot_score"];
						
						$notes1=$d_user["notes1"];
						$notes2=$d_user["notes2"];
						$notes3=$d_user["notes3"];
						$notes4=$d_user["notes4"];
						$notes5=$d_user["notes5"];
						$notes6=$d_user["notes6"];
						$notes7=$d_user["notes7"];
						$notes8=$d_user["notes8"];
						$notes9=$d_user["notes9"];
						$notes10=$d_user["notes10"];
						
						echo "<tr class='content'>
                      <td>$no2</td>";
		
					  if($status_save=="not_complete")
					  {
                      echo "<td bgcolor='#FF0000'>";
					  
					  $q_user1="select nama as observer_name from cco.hrms.dbo.tb_data_pribadi 
					where cast(id_data_pribadi as varchar)='$observer' ";
					//echo "$q_user";
					$r_user1=mssql_query($q_user1);
					while($d_user1=mssql_fetch_array($r_user1))
						{
						$observer_name=$d_user1["observer_name"];
						}
						
					$q_user2="select k.id_tl,t.nama as tl from cco.hrms.dbo.tb_detail_karyawan k inner join cco.hrms.dbo.tb_data_pribadi t on cast(k.id_tl as varchar)=cast(t.id_data_pribadi as varchar) where cast(k.id_data_pribadi as varchar)='$id_user' ";
					//echo "$q_user2";
					$r_user2=mssql_query($q_user2);
					while($d_user2=mssql_fetch_array($r_user2))
						{
						$tl_name=$d_user2["tl"];
						}	
					  ?>
					  <a href="<? echo "add_voce_detail.php?observer_name=$observer_name&spv_name=$tl_name&id_qm=$id_qm&full_name=$full_name&observer=$observer&sc_fe=$sc_fe&sc_nfe=$sc_nfe&total_score=$score_tot&skala=$skala"; ?>" onClick="return popup(this, 'notes')">
					  <?
					  echo "$status_save</a></td>";
					  echo "</td>";
					  }

echo "<td>";
					  ?>
					  					  
					  <a href="<? echo "del_group.php?kode_del=add_voce&id_qm=$id_qm"; ?>" onclick="return confirmDelete2();">
					  <?
					  	 echo "delete</a></td>	<td>";
						 ?>			  
					 <a href="<? echo "edit_voce_2.php?kode_edit=edit_voce&activity_code=$activity_code&id_qm=$id_qm&full_name=$full_name&call_activity=$call_activity&call_status=$call_status&spv_name=$spv_name&observer_name=$full_name&interaction_date=$interaction_date2&hh=$hh&mm=$mm&observation_date=$observ&week_=$week_&customer_name=$customer_name&interaction_type=$interaction_type&product_type=$product_type&product_detail=$product_detail&product_detail_agent=$product_detail_agent&fcr=$fcr&repeat=$repeat&date_prev_call=$date_prev_call2&prev_agent=$prev_agent&hh_2=$hh_2&mm_2=$mm_2&ss_2=$ss_2&drop_call=$drop_call&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&notes6=$notes6&notes7=$notes7&notes8=$notes8&notes9=$notes9&notes10=$notes10&sc1=$q1&sc2=$q2&sc3=$q3&sc4=$q4&sc5=$q5&sc6=$q6&sc7=$q7&sc8=$q8&sc9=$q9&sc10=$q10&userid=$userid&observer=$SES__NIK&date_saved=$date_saved&fe_acc=$sc_fe&nfe_acc=$sc_nfe&total_score=$score_tot&skala=$skala"; ?>" onClick="return popup(this, 'notes');">	
					  
					  <?
					  	 echo "Edit</a></td>
					  
                      <td>$userid</td>
                      <td>$lb</td>
					  
                      <td>$q1</td>
					  <td>$notes1</td>
                      <td>$q2</td>
					  <td>$notes2</td>
                      <td>$q3</td>
					  <td>$notes3</td>
                      <td>$q4</td>
					  <td>$notes4</td>
                      <td>$q5</td>
					  <td>$notes5</td>
                      <td>$q6</td>
					  <td>$notes6</td>
                      <td>$q7</td>
					  <td>$notes7</td>
                      <td>$q8</td>
					  <td>$notes8</td>
					  <td>$q9</td>
					  <td>$notes9</td>
					  <td>$q10</td>
					  <td>$notes10</td>
                      					  
					  <td>$observer_name</td>
					  
                      </tr>";
					  $no2++;
						}
					
					?>
  </table>
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