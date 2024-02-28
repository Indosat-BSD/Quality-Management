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
window.open(href, windowname, 'width=1000,height=600,scrollbars=yes');
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
window.open(href, windowname, 'width=1000,height=600,scrollbars=yes');
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
<form type="text" action="<? $PHP_SELF; ?>" method="post" enctype="multipart/form-data" name="welcome" id="welcome">
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
							from cco.hrms.dbo.tb_data_pribadi a
							inner join cco.hrms.dbo.tb_detail_karyawan z on a.id_data_pribadi=z.id_data_pribadi
							inner join cco.hrms.dbo.tb_unit b on a.id_unit=b.id_unit
							inner join cco.hrms.dbo.tb_auth c on a.id_data_pribadi=c.id_data_pribadi
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
                     // if($akd_divisi == 'CR' or $akd_unit=='CCO04C'){
                echo" 
                      <td><a href='?index=add_cr&div=cr&edit=t&userTextBox=$usernameS&namaTextBox=$full_name&id_lb=$lb&searchButton=1&kd_division=$akd_divisi&kd_departemen=$akd_departemen&userid=$userid&userText=$userText&namaText=$namaText&kd_unit=$akd_unit&useridHidden=$userid&nikTextBox=$nik&pribadi=$pribadi'>Create</a>"; 
					  // }else{ echo "<td></td>";}
					
					  echo "</td>
                      </tr>";
					  $no++;
					}
					
					$q_user2="select * FROM cco.hrms.dbo.tb_LB where lb like '%$namaText%'";
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
	  $sql = mssql_query("select * from cco.hrms.dbo.tb_data_pribadi where nik_karyawan ='$userTextBox'");
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
          <option value="0" selected="selected">Divisi Name</option>
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
					echo "<option value='$katadivisi[$i]' selected>$KATAGORIdivisi[$i]</option>";
				}
				else
				{
					echo "<option value='$katadivisi[$i]'>$KATAGORIdivisi[$i]</option>";
				}
			}
			?>
          
      </select></td>
    </tr>
    <tr>
      <td>Departemen</td>
      <td><select name="kd_departemen" class="box" id="kd_departemen" onchange="welcome.submit()" >
          <option value="0" selected="selected">Departemen Name</option>
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
					echo "<option value='$katadepartemen[$i]' selected>$KATAGORIdepartemen[$i]</option>";
				}
				else
				{
					echo "<option value='$katadepartemen[$i]'>$KATAGORIdepartemen[$i]</option>";
				}
			}

	 
	 
			?> 
      </select></td>
    </tr>
    <tr>
      <td>Unit Kerja </td>
      <td><select name="kd_unit" class="box" id="kd_unit" >
          <option value="0" selected="selected">Unit Name</option>
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
					echo "<option selected value='$kata[$i]' >$KATAGORI[$i]</option>";
				}
				else
				{
					echo "<option value='$kata[$i]'>$KATAGORI[$i]</option>";
				}
			}
			?> 
      </select></td>
    </tr>
	<tr>
	<td>Privacy Policy</td>
	<td><div align="left"><input name="pol" type="radio"  value="y" <? if ($pol=="y") {echo "checked";} else {echo "";} ?> onchange="welcome.submit()" />
  Y
    <input name="pol" type="radio"  value="n" <? if ($pol=="n") {echo "checked";} else {echo "";} ?> onchange="welcome.submit()"/>
  N
	  </div></td>
	</tr>
  </table>
 
  <p>&nbsp;</p>
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
	  <td><div align="left"><input name="sc1" type="radio"  <? if ($pol=="n") {?> disabled  <?} else {} ?> value="y" <? if ($sc1=="y") {echo "checked";} else {echo "";} ?>/>
  Y
    <input name="sc1" type="radio"  <? if ($pol=="n") {?> disabled  <?} else {} ?> value="n" <? if ($sc1=="n") {echo "checked";} else {echo "";} ?>/>
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
      <td><div align="left"><input name="sc2" type="radio" <? if ($pol=="n") {?> disabled  <?} else {} ?> value="y" <? if ($sc2=="y") {echo "checked";} else {echo "";} ?> />
       Y
        <input name="sc2" type="radio" <? if ($pol=="n") {?> disabled  <?} else {} ?> value="n" <? if ($sc2=="n") {echo "checked";} else {echo "";} ?> />
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
      <td><div align="left"><input name="sc3" type="radio" <? if ($pol=="n") {?> disabled  <?} else {} ?> value="y" <? if ($sc3=="y") {echo "checked";} else {echo "";} ?> />
        Y
        <input name="sc3" type="radio" <? if ($pol=="n") {?> disabled  <?} else {} ?> value="n" <? if ($sc3=="n") {echo "checked";} else {echo "";} ?> />
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
      <td><div align="left"><input name="sc4" type="radio" <? if ($pol=="n") {?> disabled  <?} else {} ?> value="y" <? if ($sc4=="y") {echo "checked";} else {echo "";} ?> />
        Y
        <input name="sc4" type="radio" <? if ($pol=="n") {?> disabled  <?} else {} ?> value="n" <? if ($sc4=="n") {echo "checked";} else {echo "";} ?> />
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
      <td><div align="left"><input name="sc5" type="radio" <? if ($pol=="n") {?> disabled  <?} else {} ?> value="y" <? if ($sc5=="y") {echo "checked";} else {echo "";} ?> />
        Y
        <input name="sc5" type="radio" <? if ($pol=="n") {?> disabled  <?} else {} ?> value="n" <? if ($sc5=="n") {echo "checked";} else {echo "";} ?> />
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
			echo "submit";
		$status=0;
		print "print status $status";
		if($pol=="")
			{ $status=1;
			?>
				<script type="text/javascript">				
				window.alert("Privacy Policy harus diisi")
				</script>
				<?
			}
		if($pol=="y" and ($userTextBox=="" or $namaTextBox=="" or $kd_division=="0" or $kd_departemen=="0" or $kd_unit=="0" or $sc1=="" or $sc2=="" or $sc3=="" or $sc4=="" or $sc5==""))
			{
				$status=1;
			?>
            <script type="text/javascript">			
			window.alert("Value not completed")
			</script>
            <?
			}
			
		if($status==0 or $pol=="n")			
			{
		print "$status";
		//$sql_unt = mssql_query("select * from dev_asst3.dbo.table_usr where username='$userTextBox'");
		$sql_unt = mssql_query("select id_unit from cco.hrms.dbo.tb_detail_karyawan where id_data_pribadi='$pribadi'");
		$array_unt = mssql_fetch_array ($sql_unt);
		$unit = $array_unt['id_unit'];
		$date_saved=date("m/d/Y H:i:s");		  
		$q_addTemp="insert into table_qm_cr(notes1,notes2,notes3,notes4,notes5,q1,q2,q3,q4,q5,save_q1,save_q2,save_q3,save_q4,save_q5,status_save,id_pribadi_user,id_pribadi_observer,date_saved,tot_score,id_unit,lb,flag_status, privacypol)
		  values('$s_notes1','$s_notes2','$s_notes3','$s_notes4','$s_notes5','$sc1','$sc2','$sc3','$sc4','$sc5','$tot1','$tot2','$tot3','$tot4','$tot5','not_complete','$pribadi','$SES_hendi',getdate(),'$save_total','$unit','$id_lb','4','$pol')";
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
      <th width="1%" rowspan="3" class="head0"><div align="center">No</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Action</div></th>
      <th width="4%" rowspan="3" class="head0">Delete</th>
	   <th width="4%" rowspan="3" class="head0">Edit</th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Username</div></th>
      <th width="2%" rowspan="3" class="head0"><div align="center">Nama</div></th>
	  
      <th colspan="3" class="head0"><div align="center">Activity Plan</div></th>
      <th colspan="3" class="head0"><div align="center">Probing</div></th>
      <th colspan="3" class="head0"><div align="center">Solution</div></th>
      <th colspan="3" class="head0"><div align="center">Notes</div></th>
      <th colspan="3" class="head0"><div align="center">Closing</div></th>
	  
      <th width="4%" rowspan="3" class="head0"><div align="center">Total Score </div></th>
      <th width="4%" rowspan="3" class="head0"><div align="center">Observer</div></th>
	  <th width="4%" rowspan="3" class="head0"><div align="center">Privacy Policy</div></th>
    </tr>
    <tr bgcolor="#CCCCCC">
      <th colspan="3" class="head0"><div align="center">Activity Plan</div></th>
      <th colspan="3" class="head0"><div align="center">Probing dan Analisa</div></th>
      <th colspan="3" class="head0"><div align="center">Correct Solution</div></th>
      <th colspan="3" class="head0"><div align="center">Notes</div></th>
      <th colspan="3" class="head0"><div align="center">Courtesy & Closing</div></th>
    </tr>
	<tr bgcolor="#CCCCCC">
      <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
      <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
	  <th class="head0"><div align="center">Scale</div></th>
      <th class="head0"><div align="center">Score</div></th>
	  <th class="head0">Notes</th>
    </tr>
	</thead>
    <?
					
					
					/*$q_user="select a.*,b.nama,b.nik_karyawan,case when a.lb !='' then a.lb else b.nama end as lb from db_qm.dbo.table_qm_cr a
inner join cco.hrms.dbo.tb_data_pribadi b on a.id_pribadi_user=b.id_data_pribadi where id_pribadi_observer='$SES_hendi' and status_save='not_complete'";*/
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
						$status_save=$d_user["status_save"];
						$nik=$d_user["nik"];
						$observer=$d_user["id_pribadi_observer"];						
						$notes1=$d_user["notes1"];
						$notes2=$d_user["notes2"];
						$notes3=$d_user["notes3"];
						$notes4=$d_user["notes4"];
						$notes5=$d_user["notes5"];
						$score_tot=$d_user["tot_score"];
						$privacypol=$d_user["privacypol"];
						echo "<tr class='content'>
                      <td>$no2</td>";
		
					  if($status_save=="not_complete")
					  {
                      echo "<td bgcolor='#FF0000'>";
					  $q_user1="select nama as observer_name 
					from cco.hrms.dbo.tb_data_pribadi 
					where cast(id_data_pribadi as varchar)='$observer' ";
					//echo "$q_user";
					$r_user1=mssql_query($q_user1);
					while($d_user1=mssql_fetch_array($r_user1))
						{
						$observer_name=$d_user1["observer_name"];
						}
					  ?>
					  <a href="<? echo "add_cr_detail.php?observer_name=$observer_name&id_qm=$id_qm&full_name=$full_name&observer=$observer&total_score=$score_tot&skala=$skala"; ?>" onClick="return popup(this, 'notes')">
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
						 <a href="<? echo "edit_cr_2.php?kode_edit=edit_cr&id_qm=$id_qm&full_name=$full_name&spv_name=$spv_name&observer_name=$observname&interaction_date=$interaction_date2&hh=$hh&mm=$mm&observation_date=$observ&week_=$week_&customer_name=$customer_name&interaction_type=$interaction_type&product_type=$product_type&product_detail=$product_detail&product_detail_agent=$product_detail_agent&call_status=$call_status&hh_2=$hh_2&mm_2=$mm_2&ss_2=$ss_2&call_activity=$call_activity&notes1=$notes1&notes2=$notes2&notes3=$notes3&notes4=$notes4&notes5=$notes5&sc1=$q1&sc2=$q2&sc3=$q3&sc4=$q4&sc5=$q5&&userid=$userid&observer=$SES__NIK&date_saved=$date_saved&total_score=$score_tot&skala=$skala"; ?>" onClick="return popup(this, 'notes');">
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
					  <td>$score_tot</td>				  
					  <td>$observer_name</td>	
					  <td>$privacypol</td>						  
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