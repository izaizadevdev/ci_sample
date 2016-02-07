// JavaScript Document
function MainTotal(form){
	var x = form.num.value;
	var ty = form.type.value;
	var l = form.lang.value; // รับค่า lang จาก form
	var news = document.getElementById('news');
	var domain = document.getElementById('domain');
	var server = document.getElementById('server');
	var ln;
	var pg = 0; // pg = total1(totalBase)
	var typ = 0; // typ = total1+(PC,Mobile,Respon)
	if(x!=0){
		var pg = priceBase(x); // pg = total1(totalBase)
		var typ = typeList(ty); // typ = total1+(PC,Mobile,Respon)
	}
	var lan = langNum(l); // lan = numbers of lang
	
	
	var tc = contactFm(lan); // tc = contact
	
	if(news.checked){ var nw =15000;} // check news 
	else{var nw =0; }
	
	if(domain.checked){var dm = 1300;} // check domain
	else{var dm = 0;}

	if(server.checked){var ser = 6000;} // check server
	else{var ser = 0;}
	 
	if(lan>=2){
		ln =3900*x*lan;
	}else{ln=0;} // ln = total lang 

/*	var totalBase = typ;
	var totalLang = ln;
	var totalSystem = tc+nw;
	var totalOther = dm+ser;*/
	var webtotalCost = typ+ln+tc+nw+dm+ser;
	var directionFee = webtotalCost*0.25;
	var TotalCost = webtotalCost+directionFee; //Total Price
/*	form.totalBase.value = totalBase;
	form.totalLang.value = totalLang;
	form.totalSystem.value = totalSystem;
	form.totalOther.value = totalOther;
	form.WebTotalCost.value = webtotalCost;
	form.directionFee.value = directionFee;*/
	var cm = numberWithCommas(TotalCost);
	form.TotalCost.value = cm+" THB";
	
}
function priceBase(p){
	var x = document.getElementById('num').value;
	
	var d = 5900+((x-1)*3900);
	var c = 3900+((x-1)*2900);
	
	var total1 = d+c;
	return total1;
}
function typeList(ty){
	totals = priceBase();
	if(ty=="PC"){
		totals = totals*1;
	}else if(ty=="mobile"){
		totals = totals*0.7;
	}else if(ty=="responsive"){
		totals = totals*1.3;
	}
	return totals;
}
function langNum(l){
	var chk = document.getElementsByName('lang[]');
	var len = 0;
	for(var i=0; i< chk.length; i++){
    	if(chk[i].checked){
        	len++;
		}
	}
	return len;
}
function contactFm(l){ //check contact
	var conChk = document.getElementById('contact01');
	if(conChk.checked){
		if(l<1){ l = 1;}
		tc=3000+(3000*l)
	}else{tc=0;}
	return tc;
}
function chkLang(){ 
	var chLang = document.getElementById('lang04');
	var langOt = document.getElementById('langOther');
	if(chLang.checked){
		langOt.disabled = false;
	}else{
		langOt.disabled = true;
	}
}
function numberWithCommas(cm) {
    return cm.toString().replace(/\B(?=(?:\d{3})+(?!\d))/g, ",");
}