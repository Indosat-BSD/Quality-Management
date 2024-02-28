	var imagePath='../images/';
	
	var ie=document.all;
	var dom=document.getElementById;
	var ns4=document.layers;
	var bShow=false;
	var textCtl;

	function setJamPicker(t) {
		document.getElementById(textCtl).value=t;
		closeJamPicker();
	}

	function refreshJamPicker(mode) {
		sHTML = "<table cellspacing='0' cellpadding='0'><tr><td><table cellpadding='3' cellspacing='1' bgcolor='#FFFFFF'>";
		hr=0;
		for (i=0;i<=4;i++) {
			sHTML+="<tr align=right style='font-family:verdana;font-size:9px;color:#000000;'>";		
			for (j=0;j<5;j++) {
				if(hr<10){
					jam = "0"+hr;
				}else if(hr<24){
					jam = hr;
				}else{
					jam = "";
				}
				sHTML+="<td width=20  style='cursor: pointer; background-color: #eceff6;\' onmouseover='this.style.backgroundColor=\"#FFFFFF\"' onmouseout='this.style.backgroundColor=\"#eceff6\"' onclick='setJamPicker(\""+ jam +"\")'><a style='text-decoration:none;color:#000000' href='javascript:setJamPicker(\""+ jam +"\")'>" + jam +"</font></a></td>";
				hr++;
			}

			sHTML+="</tr>";
		}
		sHTML += "</table></td></tr></table>";
		document.getElementById("jamPickerContent").innerHTML = sHTML;
	}

	if (dom){
		document.write ("<div id='jampicker' style='z-index:+999;position:absolute;visibility:hidden;'><table border='0' cellspacing='0' cellpadding='2'  class='tabel'><tr class='header'><td><table cellpadding=0 cellspacing=1 width='100%'><tr ><td>&nbsp;<font color='#ffffff'>Jam</font></td><td align=right valign=center>&nbsp;<img onclick='closeJamPicker()' src='" + imagePath + "close.gif' STYLE='cursor:pointer'>&nbsp;</td></tr></table></td></tr><tr><td colspan=2><span id='jamPickerContent'></span></td></tr></table></div>");
		refreshJamPicker(0);
	}

	var crossobj=(dom)?document.getElementById("jampicker").style : ie? document.all.jampicker : document.jampicker;
	var currentCtl

	function selectJam(ctl,ctl2) {
		calendarDiv.style.display = 'none';
		closeMenitPicker();
		var leftpos=0
		var toppos=0

		textCtl=ctl2;
		currentCtl = ctl
		aTag = ctl
		do {
			aTag = aTag.offsetParent;
			leftpos	+= aTag.offsetLeft;
			toppos += aTag.offsetTop;
		} while(aTag.tagName!="BODY");
		crossobj.left =	ctl.offsetLeft	+ leftpos 
		crossobj.top = ctl.offsetTop +	toppos + ctl.offsetHeight +	2 
		crossobj.visibility=(dom||ie)? "visible" : "show"
		hideElement( 'SELECT', document.getElementById("calendar") );
		hideElement( 'APPLET', document.getElementById("calendar") );			
		bShow = true;
	}

	// hides <select> and <applet> objects (for IE only)
	function hideElement( elmID, overDiv ){
		if( ie ){
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
	function showElement( elmID ){       
		if( ie ){
			for( i = 0; i < document.all.tags( elmID ).length; i++ ){
				obj = document.all.tags( elmID )[i];
				if( !obj || !obj.offsetParent ){
						continue;
				}
				obj.style.visibility = "";
			}
		}
	}

	function closeJamPicker() {
		crossobj.visibility="hidden"
		showElement( 'SELECT' );
		showElement( 'APPLET' );
	}