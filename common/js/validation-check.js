$(document).ready(function () {
	// Validation form --------------------------*//
	$('#contact-form').validate({
		rules: {
			subject: {
				required: true
			},
			name: {
				required: true
			},
			email: {
				required: true,
				email: true
			},
			tel: {
				minlength: 9
			},
			detail: {
				required: true
			},
			num: {
				required: true
			},
			lang:{
				required: true
			}
		},
		highlight: function (element) {
			$(element).closest('.control-group').removeClass('success').addClass('note');
		},
		success: function (element) {
			element.closest('.control-group').removeClass('note').addClass('success');
		}
	});
			
	//To get the placeholder value again on blur() --------------------------*//	
	$('input,textarea').focus(function(){
	$(this).data('placeholder',$(this).attr('placeholder'))
		.attr('placeholder','');
	}).blur(function(){
		 $(this).attr('placeholder',$(this).data('placeholder'));
	});
			
});

function AlertFilesize(){
	var sizeinbytes = document.getElementById('file').files[0];

	if(sizeinbytes){
		sizeinbytes = sizeinbytes.size;
		var fSExt = new Array('Bytes', 'KB', 'MB', 'GB');
	    fSize = sizeinbytes; i=0;while(fSize>900){fSize/=1024;i++;}
		fSize = (Math.round(fSize*100)/100);
		fSExt =fSExt[i];
		//fSize = Math.round(fSize*100)/100
		if(fSExt=="MB"||fSExt=="GB"){
			if(fSize>5||fSExt=="GB"){
			alert('Sorry! Your file it larger than the maximum size allowed.'+fSize+fSExt);
			return false;
			//alert((Math.round(fSize*100)/100)+' '+fSExt[i]);
			}
		}
	} else{
		sizeinbytes = 0;
	}
}
