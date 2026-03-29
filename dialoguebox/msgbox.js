function msgbox(caption,message,buttons,resfunc){

if(resfunc==undefined)resfunc=function(){return false;};

var disablediv=document.createElement("div");
disablediv.className="disablediv";
disablediv.setAttribute("class","disablediv");

document.body.appendChild(disablediv);

msg=document.createElement("div");
msg.className="dvmsgbox";
msg.setAttribute("class","dvmsgbox");

msg.disablediv=disablediv;
msg.resfunc=resfunc;

var strHTML="<p class='msgboxtitle'><span class='caption'>"+caption+"</span>"
strHTML +="<img src='close.png' class='close' onclick=closemsgbox('btn_msgClose',this.parentNode.parentNode) /></p>"
strHTML +="<p class='msgboxdesc'>"+message+"</p>";
msg.innerHTML=strHTML;

if (buttons!=undefined){
    var btnArr=buttons.split(",");
    var btnGrp=document.createElement("p");
    btnGrp.className="msgboxbuttons";
    btnGrp.setAttribute("class","msgboxbuttons");
	
    for (i=btnArr.length-1;i>=0;i--){
        var btn =document.createElement("input");
		btn.type="button"
        btn.value=btnArr[i];
        btn.setAttribute("onclick","closemsgbox(this.value,this.parentNode.parentNode)");
        btnGrp.appendChild(btn);

    }
    msg.appendChild(btnGrp);
}

document.body.appendChild(msg);
return msg;
}
// -------------------------------------------------------------------

// close message box
function closemsgbox(btnval,msgobj){
	msgobj.resfunc(btnval,msgobj); 
	document.body.removeChild(msgobj.disablediv);
	document.body.removeChild(msgobj);

}
