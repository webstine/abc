
$(document).ready(function(){
	var method = getMethod();
	if(method=='Fir'){
		autoPopulateData();
	}
	if(method=='addFir'){
		getIOByUnit();
		checkCharSize();
		textCount();
		$(".input-daterange-datepicker").val("");

		$('.input-daterange-datepicker').daterangepicker({
			autoUpdateInput: false,
			locale: {
			  cancelLabel: 'Clear'
			}
		});

		$('.input-daterange-datepicker').on('apply.daterangepicker', function(ev, picker) {
			$(this).val(picker.startDate.format('DD/MM/YYYY') + ' - ' + picker.endDate.format('DD/MM/YYYY'));
		});

		$('.input-daterange-datepicker').on('cancel.daterangepicker', function(ev, picker) {
			$(this).val('');
		});

	}
});

$(document).on('keyup','.upprCase',function(){
	var up = $(this).val();
	var res = up.toUpperCase();
	$(this).val(res);
});

$(document).on('keyup','.spclChar',function(){
	var char = $(this).val();
	var pattern = /(-|~|`|!|@|#|\$|%|\^|&|\*|\(|\)|\+|=|_|\.|,)/;
    if(pattern.test(char)){
        alert("Do not use any special Characters");        
        var len = char.length;
        var v = char.substr(0,len-1);
        $(this).val(v);
    }	
});

function getIOByUnit(){
    var unit = $('#unit').val();
    $.ajax({
		url: base_url+module+'/getIOByUnit',
		type:'POST',
		data:{unit:unit},
		success:function(data){
			data = JSON.parse(atob(data));
			var html = "";

			for(d in data){
				var io = data[d]['IONAME'];
				var iocode = data[d]['IOCODE'];
				html += '<option value ="'+iocode+'|'+io+'">'+io+'</option>';
			}
			$('#io').html(html);
		},
	});
}

function checkCharSize(){
	var id = $('#idcat').val();

    if(id==='Aadhar Card'){
        $('#idno').attr('maxlength',12);
    }
    else if(id==='Driving Licence'){
        $('#idno').prop('maxlength',17);
    }
    else if(id==='Passport'){
        $('#idno').prop('maxlength',8);
    }
    else if(id==='Voter ID Card'){
        $('#idno').prop('maxlength',11);
    }
}

function textCount(){
	var maxLength = 4000;
    var length = $('#brieffact').val().length;
    var length = maxLength-length;
    $('#char').text(length);
}

$('#law').change(function(){
    var law = $(this).val();
    $.ajax({
		url: base_url+module+'/getCategoryCrime',
		type:'POST',
		data:{law:law},
		success:function(data){
			data = JSON.parse(atob(data));
			var html = "";
			for(d in data){
				html += "<option value ="+data[d]['CATEGORY']+">"+data[d]['CATEGORY']+"</option>"
			}
			$('#cat').html(html);
		},
	});
});

$('#firno').blur(function(){
	var firno = $(this).val();
	$.ajax({
		url: base_url+module+'/getMaxFir',
		type:'POST',
		data:{firno:firno},
		success:function(data){
			data = JSON.parse(atob(data));
			if(data.length != 0){
				alert('FIR No. already exists.');
				$('#firno').val('');
			}
		},
	});
});

$('#unit').change(function(){
	getIOByUnit();
});

$('#idcat').change(function(){
    checkCharSize();
});

$('#brieffact').keyup(function() {
	textCount();
});