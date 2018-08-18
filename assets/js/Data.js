$(document).ready(function(){

	// ARREST JAVASCRIPT

	$(".crimehead").hide();
	$(".ipcsllact").hide();
	$("#msg").hide();
	$(document).on('change', '.arrestagainst', function(){
		var a = $(this).val();
		var mother = $(this).parent().parent().parent().parent();
		if(a == 'FIR' || a == 'SPECIFIC'){
			mother.children().children(".crimehead").show();
			mother.children().children(".ipcsllact").show();
			mother.children("#msg").show();
		}
		else{
			$(".crimehead").hide();	
		}
	});

	//CASE TRANSFER JAVASCRIPT

	$("#transfer_to_io").hide();
	$("#transfer_to_ps").hide();
	$("#transfer_to_agency").hide();
	$("#section").hide();
	$("#tansfer_type").change(function(){
		var type = $(this).val();
		if(type == 'IO-IO'){
			$("#transfer_to_io").show();
			$("#transfer_to_ps").hide();
			$("#transfer_to_agency").hide();
			$("#section").hide();
		}
		else if(type == 'PS-PS'){
			$("#transfer_to_io").hide();
			$("#transfer_to_ps").show();
			$("#transfer_to_agency").hide();
			$("#section").hide();	
		}
		else if(type == 'PS-OTH'){
			$("#transfer_to_io").hide();
			$("#transfer_to_ps").hide();
			$("#transfer_to_agency").show();
			$("#section").show();	
		}
	});

	//WARRANT OF ARREST JAVASCRIPT

	$("#year").change(function(){
		var val = $(this).val();
		if(val == "")
			$("#type").prop("disabled",true);
		else
			$("#type").prop("disabled",false);
	});

	$("#type").change(function(){
		var val = $(this).val();
		if(val == "")
			$("#stat").prop("disabled",true);
		else
			$("#stat").prop("disabled",false);
	});
});