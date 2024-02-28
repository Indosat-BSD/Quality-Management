	var imagePathMenit='image/';
	
	var ieMenit=document.all;
	var domMenit=document.getElementById;
	var ns4Menit=document.layers;
	var bShowMenit=false;
	var textCtlMenit;

	function setMenitPicker(t) {
		document.getElementById(textCtlMenit).value=t;
		closeMenitPicker();
	}

	function refreshMenitPicker(mode) {
		sHTML = "<table cellspacing='0' cellpadding='0'><tr><td><table cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>";
		hr=0;
		for (i=0;i<=3;i++) {
			sHTML+="<tr align=right style='font-family:verdana;font-size:9px;color:#000000;'>";		
			for (j=0;j<3;j++) {
				if(hr<10){
					menit = "0"+hr;
				}else if(hr<60){
					menit = hr;
				}else{
					menit = "";
				}
				sHTML+="<td width=20  style='cursor: pointer; background-color: #eceff6;\' onmouseover='this.style.backgroundColor=\"#FFFFFF\"' onmouseout='this.style.backgroundColor=\"#eceff6\"' onclick='setMenitPicker(\""+ menit +"\")'><a style='text-decoration:none;color:#000000' href='javascript:setMenitPicker(\""+ menit +"\")'>" + menit +"</font></a></td>";
				hr=hr+5;
			}

			sHTML+="</tr>";
		}
		sHTML += "</table></td></tr></table>";
		document.getElementById("menitPickerContent").innerHTML = sHTML;
	}

	if (domMenit){
		document.write ("<div id='menitpicker' style='z-index:+999;position:absolute;visibility:hidden;'><table border='0' cellspacing='0' cellpadding='2'  class='tabel'><tr class='header'><td><table cellpadding=0 cellspacing=1 width='100%'><tr ><td>&nbsp;<font color='#ffffff'>Menit</font></td><td align=right valign=center>&nbsp;<img onclick='closeMenitPicker()' src='" + imagePathMenit + "close.gif' STYLE='cursor:pointer'>&nbsp;</td></tr></table></td></tr><tr><td colspan=2><span id='menitPickerContent'></span></td></tr></table></div>");
		refreshMenitPicker(0);
	}

	var crossobjMenit=(domMenit)?document.getElementById("menitpicker").style : ieMenit? document.all.menitpicker : document.menitpicker;
	var currentCtlMenit

	function selectMenit(ctl,ctl2) {
		calendarDiv.style.display = 'none';
		closeJamPicker();
		var leftpos=0
		var toppos=0

		textCtlMenit=ctl2;
		currentCtlMenit = ctl
		aTag = ctl
		do {
			aTag = aTag.offsetParent;
			leftpos	+= aTag.offsetLeft;
			toppos += aTag.offsetTop;
		} while(aTag.tagName!="BODY");
		crossobjMenit.left =	ctl.offsetLeft	+ leftpos 
		crossobjMenit.top = ctl.offsetTop +	toppos + ctl.offsetHeight +	2 
		crossobjMenit.visibility=(domMenit||ieMenit)? "visible" : "show"
		hideElementMenit( 'SELECT', document.getElementById("calendar") );
		hideElementMenit( 'APPLET', document.getElementById("calendar") );			
		bShowMenit = true;
	}

	// hides <select> and <applet> objects (for IE only)
	function hideElementMenit( elmID, overDiv ){
		if( ieMenit ){
			for( i = 0; i < document.all.tags( elmID ).length; i++ ){
				obj = document.all.tags( elmID )[i];
				if( !obj || !obj.offsetParent ){
						continue;
				}
				  // Find the element's offsetTop and offsetLeft relative to the BODY tag.
				  objLeft   = obj.offsetLeft;
				  objTop    = obj.offsetTop;
				  objParent = obj.offsetParent;
				  while( objParent.tagName.toUpperCase() != "BODY" )
				  {
					objLeft  += objParent.offsetLeft;
					objTop   += objParent.offsetTop;
					objParent = objParent.offsetParent;
				  }
				  objHeight = obj.offsetHeight;
				  objWidth = obj.offsetWidth;
				  if(( overDiv.offsetLeft + overDiv.offsetWidth ) <= objLeft );
				  else if(( overDiv.offsetTop + overDiv.offsetHeight ) <= objTop );
				  else if( overDiv.offsetTop >= ( objTop + objHeight + obj.height ));
				  else if( overDiv.offsetLeft >= ( objLeft + objWidth ));
				  else
				  {
					obj.style.visibility = "hidden";
				  }
			}
		}
	}
		 
	//unhides <select> and <applet> objects (for IE only)
	function showElementMenit( elmID ){		
		if( ieMenit ){
			for( i = 0; i < document.all.tags( elmID ).length; i++ ){
				obj = document.all.tags( elmID )[i];
				if( !obj || !obj.offsetParent ){
						continue;
				}
				obj.style.visibility = "";
			}
		}
	}

	function closeMenitPicker() {
		crossobjMenit.visibility="hidden"
		showElementMenit( 'SELECT' );
		showElementMenit( 'APPLET' );
	}