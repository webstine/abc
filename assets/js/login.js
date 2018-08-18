// Get Username by Department for Login
$('#department').change(function(){
    $('#username').html('<option>LOADING.....</option>');	
	var dept = $('#department').val();
	$.ajax({
		type: 'POST',
		url: base_url+'Login/getUsernm',
		data: {deptVal: dept},
		success: function(data) {
            data = JSON.parse(data);
			var html="";
            for(d in data){
                html += "<option value = "+data[d]['UNAME']+">"+data[d]['UNAME']+"</option>";
            }
            $('#username').html(html);
        },
    });
});

// Reload CAPTCHA
$('#reloadBtn').click(function(){
    $.ajax({
        url: base_url+'Login/newCaptcha',
        type: 'post',
        data: {},
        success: function(data){
            $('#captchaImg').html(data);
        }
    });
});