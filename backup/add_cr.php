<?
session_name("AUTHEN");
session_start();
//echo"$SES_hendi";
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
window.open(href, windowname, 'width=550,height=600,scrollbars=yes');
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
window.open(href, windowname, 'width=600,height=550,scrollbars=yes');
return false;
}

//-->
</SCRIPT>
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
	
		 //$stot="select count(*) as jum_s from db_qm.dbo.table_qm_cr a,dev_asst3.dbo.table_usr b where a.status_save='not_complete' and  a.userid=b.username and b.kd_unit like '%$kd_unit%' and a.observer='$SES__NIK'";
	  		$stot="select count(*)as jum_s from db_qm.dbo.table_qm_cr where status_save='not_complete' and id_pribadi_observer='$SES_hendi'";

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
					/*$q_user="select a.id_karyawan,a.nama,a.nik_karyawan,a.id_data_pribadi,left(z.id_unit,len(z.id_unit)-1) as id_fungsi,left(z.id_unit,charindex('0',z.id_unit)-1) as id_divisi,z.id_unit,b.nama_unit,c.qm
							from hrms.dbo.tb_data_pribadi a
							inner join hrms.dbo.tb_detail_karyawan z on a.id_data_pribadi=z.id_data_pribadi
							inner join hrms.dbo.tb_unit b on a.id_unit=b.id_unit
							inner join hrms.dbo.tb_auth c on a.id_data_pribadi=c.id_data_pribadi
							where status_kerja=1 and (a.nik_karyawan like '%$userText%' or a.id_karyawan like '%$userText%') and a.nama like '%$namaText%'";*/
					$q_user="[sp_searchUser]'%$userText%','%$namaText%'";
					//echo "$q_user";
					$r_user=mssql_query($q_user);
					$no=1;
					while($d_user=mssql_fetch_array($r_user))
						{
							
						$pribadi=$d_user["id_data_pribadi"];
						//session_register("SES_IDUSER");
						//$SES_IDUSER=$userid;
						$akd_divisi=$d_user["id_divisi"];
						$akd_departemen=$d_user["id_fungsi"];
						//$userid=$d_user["userid"];
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
                     if($akd_divisi == 'CR' or $akd_unit=='CCO04C'){
                echo" 
                      <td><a href='?index=add_cr&div=cr&edit=t&userTextBox=$usernameS&namaTextBox=$full_name&id_lb=$lb&searchButton=1&kd_division=$akd_divisi&kd_departemen=$akd_departemen&userid=$userid&userText=$userText&namaText=$namaText&kd_unit=$akd_unit&useridHidden=$userid&nikTextBox=$nik&pribadi=$pribadi'>Create</a>"; }else{ echo "<td></td>";}
					
					  echo "</td>
                      </tr>";
					  $no++;
					}
					
					$q_user2="select * FROM hrms.dbo.tb_LB where lb like '%$namaText%'";
					//echo "$q_user";
					$r_user2=mssql_query($q_user2);
					
					while($d_user2=mssql_fetch_array($r_user2))
						{
						//$pribadi=$d_user2["id_data_pribadi"];
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
                      <td><a href='?index=add_cr&div=cr&edit=t&userTextBox=$usernameS&namaTextBox=$lb&id_lb=$lb&searchButton=1&kd_division=$akd_divisi&kd_departemen=$akd_departemen&userid=$userid&userText=$userText&namaText=$namaText&kd_unit=$akd_unit&useridHidden=$userid&nikTextBox=$nik&pribadi=$pribadi&nu=$nu'>Create</a>"; 
					
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
	  $sql = mssql_query("select * from hrms.dbo.tb_data_pribadi where nik_karyawan ='$userTextBox'");
	  $qry = mssql_fetch_array($sql);
	  $pribadi = $qry['id_data_pribadi'];
	  ?>
	  </td>
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
$query = "SELECT * FROM hrms.dbo.tb_divisi where id_divisi in('CR','CCO')";
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
$query="select * from hrms.dbo.tb_fungsi where left(id_fungsi,charindex('0',id_fungsi)-1)='$kd_division'";
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
$query="select * from hrms.dbo.tb_unit where left(id_unit,len(id_unit)-1)='$kd_departemen'";
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
  <table width="947" border="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="17" class="head0"><div align="center">No</div></th>
      <th width="36" class="head0"><div align="center">Value</div></th>
      <th width="301" class="head0"><div align="center">Attributes</div></th>
      <th width="37" class="head0"><div align="center">Score</div></th>
      <th width="166" class="head0" bgcolor="#CCCCCC"><div align="center">Y/N/NA</div></th>
      <th width="350" class="head0" bgcolor="#CCCCCC">Notes</th>
    </tr>
	</thead>
	<tr>
		<td colspan="6"><b>i. GREETING (OPENING) </b></td>
	</tr>
    <tr>
      <td>1</td>
      <td>NCE</td>
      <td>Opening Greeting</td>
      <td><div align="center">1.82</div></td>
      <td><input name="q1" type="radio"  value="yes" <? if ($q1=="yes") {echo "checked";} else {echo "";} ?> />
      Yes 
        <input name="q1" type="radio"  value="no" <? if ($q1=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q1" type="radio"  value="na" <? if ($q1=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes1" cols="35" id="notes1" onkeypress="javascript: checkValuenotes1();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes1="";}?><? echo "$notes1"; ?></textarea>
          <input name="jml_notes1" type="text" "disabled" id="jml_notes1" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>2</td>
      <td>NCE</td>
      <td>Confirmation customer data </td>
      <td><div align="center">7.27</div></td>
      <td><input name="q2" type="radio"  value="yes" <? if ($q2=="yes") {echo "checked";} else {echo "";} ?> />
      Yes 
        <input name="q2" type="radio"  value="no" <? if ($q2=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q2" type="radio"  value="na" <? if ($q2=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes2" cols="35" id="notes2" onkeypress="javascript: checkValuenotes2();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes2="";}?><? echo "$notes2"; ?></textarea>
          <input name="jml_notes2" type="text" "disabled" id="jml_notes2" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
	<tr>
		<td colspan="6"><b>ii. SOLUTION </b></td>
	</tr>
    <tr>
      <td>3</td>
      <td>NCE</td>
      <td>Identifikasi Kebutuhan Pelanggan </td>
      <td><div align="center">
3.64</div></td>
      <td><input name="q3" type="radio"  value="yes" <? if ($q3=="yes") {echo "checked";} else {echo "";} ?> />
      Yes 
        <input name="q3" type="radio"  value="no" <? if ($q3=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q3" type="radio"  value="na" <? if ($q3=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes3" cols="35" id="notes3" onkeypress="javascript: checkValuenotes3();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes3="";}?><? echo "$notes3"; ?></textarea>
          <input name="jml_notes3" type="text" "disabled" id="jml_notes3" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>4</td>
      <td>CE</td>
      <td> Correct Answer & Solution</td>
      <td><div align="center">15</div></td>
      <td><input name="q4" type="radio"  value="yes" <? if ($q4=="yes") {echo "checked";} else {echo "";} ?> />
      Yes 
        <input name="q4" type="radio"  value="no" <? if ($q4=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q4" type="radio"  value="na" <? if ($q4=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes4" cols="35" id="notes4" onkeypress="javascript: checkValuenotes4();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes4="";}?><? echo "$notes4"; ?></textarea>
          <input name="jml_notes4" type="text" "disabled" id="jml_notes4" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>5</td>
      <td>CE</td>
      <td>Correct Handling</td>
      <td><div align="center">15</div></td>
      <td><input name="q5" type="radio"  value="yes" <? if ($q5=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
         <input name="q5" type="radio"  value="no" <? if ($q5=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q5" type="radio"  value="na" <? if ($q5=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes5" cols="35" id="notes5" onkeypress="javascript: checkValuenotes5();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes5="";}?><? echo "$notes5"; ?></textarea>
          <input name="jml_notes5" type="text" "disabled" id="jml_notes5" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>6</td>
      <td>CE</td>
      <td>Privacy Policy</td>
      <td><div align="center">15</div></td>
      <td><input name="q6" type="radio"  value="yes" <? if ($q6=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q6" type="radio"  value="no" <? if ($q6=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q6" type="radio"  value="na" <? if ($q6=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes6" cols="35" id="notes6" onkeypress="javascript: checkValuenotes6();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes6="";}?><? echo "$notes6"; ?></textarea>
          <input name="jml_notes6" type="text" "disabled" id="jml_notes6" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>7</td>
      <td>CE</td>
      <td>Input Accuracy Data</td>
      <td><div align="center"> 15 </div></td>
      <td><input name="q7" type="radio"  value="yes" <? if ($q7=="yes") {echo "checked";} else {echo "";} ?> />
    Yes
      <input name="q7" type="radio"  value="no" <? if ($q7=="no") {echo "checked";} else {echo "";} ?> />
    No
    <input name="q7" type="radio"  value="na" <? if ($q7=="na") {echo "checked";} else {echo "";} ?> />
    NA</td>
      <td><textarea name="notes7" cols="35" id="notes7" onkeypress="javascript: checkValuenotes7();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes7="";}?><? echo "$notes7"; ?></textarea>
          <input name="jml_notes7" type="text" "disabled" id="jml_notes7" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
	<tr>
		<td colspan="6"><b>iii. PROFESSIONALISM</b></td>
	</tr>
    <tr>
      <td>8</td>
      <td>NCE</td>
      <td>Hospitality  </td>
      <td><div align="center">7.27</div></td>
      <td><input name="q8" type="radio"  value="yes" <? if ($q8=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q8" type="radio"  value="no" <? if ($q8=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q8" type="radio"  value="na" <? if ($q8=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes8" cols="35" id="notes8" onkeypress="javascript: checkValuenotes8();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes8="";}?><? echo "$notes8"; ?></textarea>
          <input name="jml_notes8" type="text" "disabled" id="jml_notes8" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>9</td>
      <td>NCE</td>
      <td>Voice Quality</td>
      <td><div align="center">5.45</div></td>
      <td><input name="q9" type="radio"  value="yes" <? if ($q9=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q9" type="radio"  value="no" <? if ($q9=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q9" type="radio"  value="na" <? if ($q9=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes9" cols="35" id="notes9" onkeypress="javascript: checkValuenotes9();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes9="";}?><? echo "$notes9"; ?></textarea>
          <input name="jml_notes9" type="text" "disabled" id="jml_notes9" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>10</td>
      <td>NCE</td>
      <td>Call Management</td>
      <td><div align="center">5.45</div></td>
      <td><input name="q10" type="radio"  value="yes" <? if ($q10=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q10" type="radio"  value="no" <? if ($q10=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q10" type="radio"  value="na" <? if ($q10=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes10" cols="35" id="notes10" onkeypress="javascript: checkValuenotes10();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes10="";}?><? echo "$notes10"; ?></textarea>
          <input name="jml_notes10" type="text" "disabled" id="jml_notes10" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>11</td>
      <td>NCE</td>
      <td>Hold</td>
      <td><div align="center">1.82</div></td>
      <td><input name="q11" type="radio"  value="yes" <? if ($q11=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q11" type="radio"  value="no" <? if ($q11=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q11" type="radio"  value="na" <? if ($q11=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes11" cols="35" id="notes11" onkeypress="javascript: checkValuenotes11();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes11="";}?><? echo "$notes11"; ?></textarea>
          <input name="jml_notes11" type="text" "disabled" id="jml_notes11" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
	<tr>
		<td colspan="6"><b>iv. GREETING (CLOSING)</b></td>
	</tr>
	
    <tr>
      <td>12</td>
      <td>NCE</td>
      <td>Reconfirm</td>
      <td><div align="center">3.64</div></td>
      <td><input name="q12" type="radio"  value="yes" <? if ($q12=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q12" type="radio"  value="no" <? if ($q12=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q12" type="radio"  value="na" <? if ($q12=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes12" cols="35" id="notes12" onkeypress="javascript: checkValuenotes12();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes12="";}?><? echo "$notes12"; ?></textarea>
          <input name="jml_notes12" type="text" "disabled" id="jml_notes12" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>13</td>
      <td>NCE</td>
      <td>Closing Greeting</td>
      <td><div align="center">1.82</div></td>
      <td><input name="q13" type="radio"  value="yes" <? if ($q13=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q13" type="radio"  value="no" <? if ($q13=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q13" type="radio"  value="na" <? if ($q13=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes13" cols="35" id="notes13" onkeypress="javascript: checkValuenotes13();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes13="";}?><? echo "$notes13"; ?></textarea>
          <input name="jml_notes13" type="text" "disabled" id="jml_notes13" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
    <tr>
      <td>14</td>
      <td>NCE</td>
      <td>Campaign / Cross selling/ upselling/ survey</td>
      <td><div align="center">1.82</div></td>
      <td><input name="q14" type="radio"  value="yes" <? if ($q14=="yes") {echo "checked";} else {echo "";} ?> />
      Yes
        <input name="q14" type="radio"  value="no" <? if ($q14=="no") {echo "checked";} else {echo "";} ?> />
      No
      <input name="q14" type="radio"  value="na" <? if ($q14=="na") {echo "checked";} else {echo "";} ?> />
NA</td>
      <td><textarea name="notes14" cols="35" id="notes14" onkeypress="javascript: checkValuenotes14();" onKeyUp="angka(this);"><? if($cancel){ ?><? $notes14="";}?><? echo "$notes14"; ?></textarea>
          <input name="jml_notes14" type="text" "disabled" id="jml_notes14" style="border-style:none; width:50px; background-color: white" value="0" /></td>
    </tr>
      <td colspan="6">
	  
	  <?
	  	if ($q1=="yes" or $q1=="na")
		{
		$save_q1="1.82";
		$sc_q1="1";
		}
		else
		{
		$save_q1="0";
		$sc_q1="0";
		}
		
		if ($q2=="yes" or $q2=="na")
		{
		$save_q2="7.27";
		$sc_q2="1";
		}
		else
		{
		$save_q2="0";
		$sc_q2="0";
		}
		
		if ($q3=="yes" or $q2=="na")
		{
		$sc_q3="1";
		$save_q3="3.64";
		}
		else
		{
		$sc_q3="0";
		$save_q3="0";
		}
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na") and ($q7=="yes" or $q7=="na"))
		{
		$save_q4="15";
		$save_q5="15";
		$save_q6="15";
		$save_q7="15";
		$sc_fe="4";
		}
		if ($q4=="no" or $q5=="no" or $q6=="no" or $q7=="no")
		{
		$save_q4="0";
		$save_q5="0";
		$save_q6="0";
		$save_q7="0";
		$sc_fe="0";
		}

		

		if ($q8=="yes" or $q8=="na")
		{
		$save_q8="7.27";
		$sc_q8="1";
		}
		else
		{
		$save_q8="0";
		$sc_q8="0";
		}

		if ($q9=="yes" or $q9=="na")
		{
		$save_q9="5.45";
		$sc_q9="1";
		}
		else
		{
		$save_q9="0";
		$sc_q9="0";
		}

		if ($q10=="yes" or $q10=="na")
		{
		$save_q10="5.45";
		$sc_q10="1";
		}
		else
		{
		$save_q10="0";
		$sc_q10="0";
		}

		if ($q11=="yes" or $q11=="na")
		{
		$save_q11="1.82";
		$sc_q11="1";
		}
		else
		{
		$save_q11="0";
		$sc_q11="0";
		}

		if ($q12=="yes" or $q12=="na")
		{
		$save_q12="3.64";
		$sc_q12="1";
		}
		else
		{
		$save_q12="0";
		$sc_q12="0";
		}

		if ($q13=="yes" or $q13=="na")
		{
		$save_q13="1.82";
		$sc_q13="1";
		}
		else
		{
		$save_q13="0";
		$sc_q13="0";
		}

		if ($q14=="yes" or $q14=="na")
		{
		$save_q14="1.82";
		$sc_q14="1";
		}
		else
		{
		$save_q14="0";
		$sc_q14="0";
		}

		$save_total=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13+$save_q14;
		//echo"ini save total : $save_total;";
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
	  ?>
	  <div align="center">
	    <input name="cek_score" type="submit" id="cek_score" value="Cek Score"  class="btn"/>
	  <?  echo"$save_total"; ?>
      </div></td>
    </tr>
  </table>
  <table width="948" border="0">
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
	  
		if($save_q3=="" or $userTextBox=="" or $namaTextBox=="" or $kd_division=="0" or $kd_departemen=="0" or $kd_unit=="0" or $q1=="" or $q2=="" or $q3=="" or $q4=="" or $q5=="" or $q6=="" or $q7=="" or $q8=="" or $q9=="" or $q10=="" or $q11=="" or $q12=="" or $q13=="" or $q14=="")
			{
			?>
            <script type="text/javascript">
			window.alert("Value not completed")
			</script>
            <?
			}
			
		else 
			
			{

		//$sql_unt = mssql_query("select * from dev_asst3.dbo.table_usr where username='$userTextBox'");
		$sql_unt = mssql_query("select id_unit from hrms.dbo.tb_detail_karyawan where id_data_pribadi='$pribadi'");
		$array_unt = mssql_fetch_array ($sql_unt);
		$unit = $array_unt['id_unit'];
		$date_saved=date("m/d/Y H:i:s");		  
		$q_addTemp="insert into table_qm_cr(notes1,notes2,notes3,notes4,notes5,notes6,notes7,notes8,notes9,notes10,notes11,notes12,notes13,notes14,q1,q2,q3,q4,q5,q6,q7,q8,q9,q10,q11,q12,q13,q14,save_q1,save_q2,save_q3,save_q4,save_q5,save_q6,save_q7,save_q8,save_q9,save_q10,save_q11,save_q12,save_q13,save_q14,status_save,id_pribadi_user,id_pribadi_observer,date_saved,tot_score,id_unit,lb,flag_status)
		  values('$s_notes1','$s_notes2','$s_notes3','$s_notes4','$s_notes5','$s_notes6','$s_notes7','$s_notes8','$s_notes9','$s_notes10','$s_notes11','$s_notes12','$s_notes13','$s_notes14','$q1','$q2','$q3','$q4','$q5','$q6','$q7','$q8','$q9','$q10','$q11','$q12','$q13','$q14','$save_q1','$save_q2','$save_q3','$save_q4','$save_q5','$save_q6','$save_q7','$save_q8','$save_q9','$save_q10','$save_q11','$save_q12','$save_q13','$save_q14','not_complete','$pribadi','$SES_hendi',getdate(),'$save_total','$unit','$id_lb','2')";
		  mssql_query($q_addTemp);
		 //echo "$q_addTemp";
		  
 echo"<script type='text/javascript'>
		window.location='?index=add_cr&div=cr'
		</script> ";
	  	}
	  }
	  
	 if ($cancel)
		{
		?>
          <script type="text/javascript">
		window.location="?index=add_cr&div=cr"
		</script> 
          <?php
		}
	 
	  ?>
</p>
          </div></td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <table width="146%" border="1" align="center" cellspacing="1" class="table table-bordered table-infinite">
  <thead>
    <tr bgcolor="#CCCCCC">
      <th width="1%" rowspan="2" class="head0"><div align="center">No</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Action</div></th>
      <th width="4%" rowspan="2" class="head0">Delete</th>
	   <th width="4%" rowspan="2" class="head0">Edit</th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Username</div></th>
      <th width="2%" rowspan="2" class="head0"><div align="center">Nama</div></th>
      <th colspan="3" class="head0"><div align="center">Opening Greeting</div></th>
      <th colspan="3" class="head0"><div align="center">Confirmation customer data</div></th>
      <th colspan="3" class="head0"><div align="center">Identifikasi Kebutuhan Pelanggan </div></th>
      <th colspan="3" class="head0"><div align="center">Correct Answer & Solution </div></th>
      <th colspan="3" class="head0"><div align="center">Correct Handling</div></th>
		<th colspan="3" class="head0"><div align="center">Privacy Policy </div></th>
      <th colspan="3" class="head0"><div align="center">Input Accuracy Data</div></th>
      <th colspan="3" class="head0"><div align="center">Hospitality</div></th>
      <th colspan="3" class="head0"><div align="center">Voice Quality</div></th>
      <th colspan="3" class="head0"><div align="center">Call Management</div></th>
      <th colspan="3" class="head0"><div align="center">Hold</div></th>
      <th colspan="3" class="head0"><div align="center">Reconfirm</div></th>
      <th colspan="3" class="head0"><div align="center">Closing Greeting</div></th>
      <th colspan="3" class="head0"><div align="center">Campaign / Cross selling/ upselling/ survey</div></th>
      <!--<th colspan="3" class="head0"><div align="center">Not use of Jargon/Informal Style</div></th>
      <th colspan="3" class="head0"><div align="center">Hold/Transfer/Routing/ Callback Technique</div></th>
      <th colspan="3" class="head0"><div align="center">Reconfirm the Agreement</div></th>
      <th colspan="3" class="head0"><div align="center">Closing Greeting</div></th>
      <th colspan="3" class="head0"><div align="center">Campaign / Cross selling/ upselling / survey</div></th>-->
      <th width="4%" rowspan="2" class="head0"><div align="center">FE Accuracy </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">NFE Accuracy </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Total Score </div></th>
      <th width="4%" rowspan="2" class="head0"><div align="center">Skala</div></th>
      <th width="4%" colspan="2" rowspan="2" class="head0"><div align="center">Observer</div></th>
    </tr>
    <tr bgcolor="#CCCCCC">
      <th width="1%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="1%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="1%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="2%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="5%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="5%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="5%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="6%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="6%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th><!--
      <th width="6%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="6%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="8%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="8%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="3%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="3%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>
      <th width="4%" class="head0"><div align="center">Y/N/NA</div></th>
      <th width="4%" class="head0"><div align="center">score</div></th>
      <th width="3%" class="head0">Notes</th>-->
    </tr>
	</thead>
    <?
					
					
					/*$q_user="select a.*,b.nama,b.nik_karyawan,case when a.lb !='' then a.lb else b.nama end as lb from db_qm.dbo.table_qm_cr a
inner join hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi where id_pribadi_observer='$SES_hendi' and status_save='not_complete'";*/
					$q_user="[sp_User_NotComplete]'table_qm_cr','$SES_hendi'";
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
						$save_q1=$d_user["save_q1"];
						$q2=$d_user["q2"];
						$save_q2=$d_user["save_q2"];
						$q3=$d_user["q3"];
						$save_q3=$d_user["save_q3"];
						$q4=$d_user["q4"];
						$save_q4=$d_user["save_q4"];
						$q5=$d_user["q5"];
						$save_q5=$d_user["save_q5"];
						$q6=$d_user["q6"];
						$save_q6=$d_user["save_q6"];
						$q7=$d_user["q7"];
						$save_q7=$d_user["save_q7"];
						$q8=$d_user["q8"];
						$save_q8=$d_user["save_q8"];
						$q9=$d_user["q9"];
						$save_q9=$d_user["save_q9"];
						$q10=$d_user["q10"];
						$save_q10=$d_user["save_q10"];
						$q11=$d_user["q11"];
						$save_q11=$d_user["save_q11"];
						$q12=$d_user["q12"];
						$save_q12=$d_user["save_q12"];
						$q13=$d_user["q13"];
						$save_q13=$d_user["save_q13"];
						$q14=$d_user["q14"];
						$save_q14=$d_user["save_q14"];
						$status_save=$d_user["status_save"];
						$nik=$d_user["nik"];
						$observer=$d_user["id_pribadi_observer"];						
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
						$notes11=$d_user["notes11"];
						$notes12=$d_user["notes12"];
						$notes13=$d_user["notes13"];
						$notes14=$d_user["notes14"];/*
						$notes15=$d_user["notes15"];
						$notes16=$d_user["notes16"];
						$notes17=$d_user["notes17"];
						$notes18=$d_user["notes18"];
						$notes19=$d_user["notes19"];
						$notes20=$d_user["notes20"];*/
						
						echo "<tr class='content'>
                      <td>$no2</td>";
		if ($q1=="yes" or $q1=="na")
		{
		$sc_q1="1";
		}
		else
		{
		$sc_q1="0";
		}
		
		if ($q2=="yes" or $q2=="yes")
		{
		$sc_q2="1";
		}
		else
		{
		$sc_q2="0";
		}
		
		if ($q3=="yes" or $q3=="yes")
		{
		$sc_q3="1";
		}
		else
		{
		$sc_q3="0";
		}
	
		if (($q4=="yes" or $q4=="na" ) and ($q5=="yes" or $q5=="na")and ($q6=="yes" or $q6=="na") and ($q7=="yes" or $q7=="na"))
		{
		$sc_fe="4";
		}
		if ($q4=="no" or $q5=="no" or $q6=="no" or $q7=="no")
		{
		$sc_fe="0";
		}
		
		if ($q8=="yes" or $q8=="na")
		{
		$sc_q8="1";
		}
		else
		{
		$sc_q8="0";
		}

		if ($q9=="yes" or $q9=="na")
		{
		$sc_q9="1";
		}
		else
		{
		$sc_q9="0";
		}

		if ($q10=="yes" or $q10=="na")
		{
		$sc_q10="1";
		}
		else
		{
		$sc_q10="0";
		}

		if ($q11=="yes" or $q11=="na")
		{
		$sc_q11="1";
		}
		else
		{
		$sc_q11="0";
		}

		if ($q12=="yes" or $q7=="na")
		{
		$sc_q12="1";
		}
		else
		{
		$sc_q12="0";
		}

		if ($q13=="yes" or $q13=="na")
		{
		$sc_q13="1";
		}
		else
		{
		$sc_q13="0";
		}

		if ($q14=="yes" or $q14=="na")
		{
		$sc_q14="1";
		}
		else
		{
		$sc_q14="0";
		}
/*
		if ($q15=="yes" or $q15=="na")
		{
		$sc_q15="1";
		}
		else
		{
		$sc_q15="0";
		}

		if ($q16=="yes" or $q16=="na")
		{
		$sc_q16="1";
		}
		else
		{
		$sc_q16="0";
		}

		if ($q17=="yes" or $q17=="na")
		{
		$sc_q17="1";
		}
		else
		{
		$sc_q17="0";
		}

		if ($q18=="yes" or $q18=="na")
		{
		$sc_q18="1";
		}
		else
		{
		$sc_q18="0";
		}

		if ($q19=="yes" or $q19=="na")
		{
		$sc_q19="1";
		}
		else
		{
		$sc_q19="0";
		}*/
		
		
			$sc_nfe=$sc_q1+$sc_q2+$sc_q3+$sc_q8+$sc_q9+$sc_q10+$sc_q11+$sc_q12+$sc_q13+$sc_q14;
 					 	$total_score=$save_q1+$save_q2+$save_q3+$save_q4+$save_q5+$save_q6+$save_q7+$save_q8+$save_q9+$save_q10+$save_q11+$save_q12+$save_q13+$save_q14;
						//echo"ini total score : $total_score";
						//echo "ini $save_q14";
						if ($total_score >= 90)
						{
						$skala="A";
						}
						if ($total_score >= 80 and $total_score < 90)
						{
						$skala="B";
						}
						if ($total_score >= 70 and $total_score < 80)
						{
						$skala="C";
						}
						if ($total_score >= 60 and $total_score < 70)
						{
						$skala="D";
						}
						if ($total_score < 60)
						{
						$skala="E";
						}
					  if($status_save=="not_complete")
					  {
                      echo "<td bgcolor='#FF0000'>";
					  $q_user1="select nama as observer_name 
					from hrms.dbo.tb_data_pribadi 
					where cast(id_data_pribadi as varchar)='$observer' ";
					//echo "$q_user";
					$r_user1=mssql_query($q_user1);
					while($d_user1=mssql_fetch_array($r_user1))
						{
						$observer_name=$d_user1["observer_name"];
						}
					  ?>
					  <a href="<? echo "add_cr_detail.php?observer_name=$observer_name&id_qm=$id_qm&full_name=$full_name&observer=$observer&sc_fe=$sc_fe&sc_nfe=$sc_nfe&total_score=$total_score&skala=$skala"; ?>" onClick="return popup(this, 'notes')">
					  <?
					  echo "$status_save</a></td>";
					  echo "</td>";
					  }

echo "<td>";
					  ?>
					  					  
					  <a href="<? echo "del_group.php?kode_del=add_cr&id_qm=$id_qm"; ?>" onclick="return confirmDelete2();">
					  <?
					  	 echo "delete</a></td><td>";
						 ?>
						 <a href="<? echo "edit_cr_2.php?kode_edit=edit_cr&id_qm=$id_qm&full_name=$full_name&spv_name=$spv_name&observer_name=$observname&interaction_date=$interaction_date2&hh=$hh&mm=$mm&observation_date=$observ&week_=$week_&customer_name=$customer_name&interaction_type=$interaction_type&product_type=$product_type&product_detail=$product_detail&product_detail_agent=$product_detail_agent&call_status=$call_status&hh_2=$hh_2&mm_2=$mm_2&ss_2=$ss_2&call_activity=$call_activity&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&notes6=$notes6&notes7=$notes7&notes8=$notes8&notes9=$notes9&notes10=$notes10&notes11=$notes11&notes12=$notes12&notes13=$notes13&notes14=$notes14&q1=$q1&q2=$q2&q3=$q3&q4=$q4&q5=$q5&q6=$q6&q7=$q7&q8=$q8&q9=$q9&q10=$q10&q11=$q11&q12=$q12&q13=$q13&q14=$q14&&save_q1=$save_q1&save_q2=$save_q2&save_q3=$save_q3&save_q4=$save_q4&save_q5=$save_q5&save_q6=$save_q6&save_q7=$save_q7&save_q8=$save_q8&save_q9=$save_q9&save_q10=$save_q10&save_q11=$save_q11&save_q12=$save_q12&save_q13=$save_q13&save_q14=$save_q14&userid=$userid&observer=$SES__NIK&date_saved=$date_saved&fe_acc=$sc_fe&nfe_acc=$sc_nfe&total_score=$total_score&skala=$skala"; ?>" onClick="return popup(this, 'notes');">
					  <?
					  	 echo "Edit </a></td>				  
					
					  
                      <td>$userid</td>
                      <td>$lb</td>					  
                      <td>$q1</td>
					  <td>$save_q1</td>
					  <td>$notes1</td>
                      <td>$q2</td>
					  <td>$save_q2</td>
					  <td>$notes2</td>
                      <td>$q3</td>
					  <td>$save_q3</td>
					  <td>$notes3</td>
                      <td>$q4</td>
					  <td>$save_q4</td>
					  <td>$notes4</td>
                      <td>$q5</td>
					  <td>$save_q5</td>
					  <td>$notes5</td>
                      <td>$q6</td>
					  <td>$save_q6</td>
					  <td>$notes6</td>
					  <td>$q7</td>
					  <td>$save_q7</td>
					  <td>$notes7</td>
                      <td>$q8</td>
					  <td>$save_q8</td>
					  <td>$notes8</td>
                      <td>$q9</td>
					  <td>$save_q9</td>
					  <td>$notes9</td>
                      <td>$q10</td>
					  <td>$save_q10</td>
					  <td>$notes10</td>
                      <td>$q11</td>
					  <td>$save_q11</td>
					  <td>$notes11</td>
                      <td>$q12</td>
					  <td>$save_q12</td>
					  <td>$notes12</td>
                      <td>$q13</td>
					  <td>$save_q13</td>
					  <td>$notes13</td>
                      <td>$q14</td>
					  <td>$save_q14</td>
					  <td>$notes14</td>
					  <td>$sc_fe</td>
                      <td>$sc_nfe</td>
					  <td>$total_score</td>
                      <td>$skala</td>					  
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