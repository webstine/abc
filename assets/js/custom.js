// Transforming Tables to DataTable
	// $(".KPdatatable").dataTable();
	// $(".KPdatatable").dataTable();
	// Function I don't know
	$(document).ready(function(){
		$('#datatable').dataTable();
	    $('#datatable-keytable').DataTable({keys: true});
	    $('#datatable-responsive').DataTable();
	    $('#datatable-colvid').DataTable({
	        "dom": 'C<"clear">lfrtip',
	        "colVis": {
	            "buttonText": "Change columns"
	        }
	    });
	    $('#datatable-scroller').DataTable({
	        ajax: "plugins/datatables/json/scroller-demo.json",
	        deferRender: true,
	        scrollY: 380,
	        scrollCollapse: true,
	        scroller: true
	    });
	    var table = $('#datatable-fixed-header').DataTable({fixedHeader: true});
	    var table = $('#datatable-fixed-col').DataTable({
	        scrollY: "300px",
	        scrollX: true,
	        scrollCollapse: true,
	        paging: false,
	        fixedColumns: {
	            leftColumns: 1,
	            rightColumns: 1
	        }
	    });
	    TableManageButtons.init();
	    $('.year').datepicker({
	        minViewMode: 'years',
	        autoclose: true,
	        format: 'yyyy'
	    });

    	$(".InActive").hide();
		$('.alertRow').click(function(){
   			var i= $(this).nextUntil('tr.alertRow').slideToggle(1000);
  			console.log(i);
		});

		$('.alertRow').click(function(){
   			var i= $(this).nextUntil('tr.alertRow').slideToggle(1000);
		});

		// ARREST JAVASCRIPT

		// $(".crimehead").hide();
		// $(".ipcsllact").hide();
		// $("#msg").hide();
		// $(document).on('change', '.arrestagainst', function(){
		// 	var a = $(this).val();
		// 	var mother = $(this).parent().parent().parent().parent();
		// 	if(a == 'FIR' || a == 'SPECIFIC'){
		// 		mother.children().children(".crimehead").show();
		// 		mother.children().children(".ipcsllact").show();
		// 		mother.children("#msg").show();
		// 	}
		// 	else{
		// 		$(".crimehead").hide();	
		// 	}
		// });

		// ADD & DELETE div row dynamically
		$(document).on('click','.add',function(){
			var mother = $(this).parent().parent();
			var mother2 = $(this).parent().parent().parent();
			
			
			var obj = mother.clone();
			// console.log(obj.html());
			var obj2 = mother2.clone();
			$('.append_panel2').append(obj2);
			$('.append_panel').append(obj);
			var slno = mother.parent().children().size();
			obj.find("input, textarea").val("");
			obj.children().children().children().children("#slno").val(slno);
			obj.children("#msg").hide();
			obj.children().children(".crimehead").hide();
			obj.children().children(".ipcsllact").hide();

			jQuery('.datepicker-autoclose').datepicker({
		        autoclose: true,
		        todayHighlight: true,
		        format: "dd/mm/yyyy"
		    });
		});

		$(document).on('click','.delete',function(){
			var count = $(this).parent().parent().parent().children().size();
			if(count > 1){
				$(this).parent().parent().remove();
			}
			else{
				alert('Sorry! Cannot remove first row..');
			}
		});

		$(document).on('click','.delete1',function(){
			var count = $(this).parent().parent().parent().parent().children().size();
			console.log(count);
			if(count > 1){
				$(this).parent().parent().parent().remove();
			}
			else{
				alert('Sorry! Cannot remove first row..');
			}
		});


		//ADD & DELETE table row dynamically

		$(document).on('click','.addrow',function(){
			var mother = $(this).parent().parent().parent().parent();
			var obj = mother.children('tbody').children("tr:eq(0)").clone();
			var slno = mother.children('tbody').children().size()+1;
			mother.append(obj);
			mother.children('tbody').children("tr:last-child").children("td:eq(0)").children().val(slno);


		});

		$(document).on('click','.deleterow',function(){
			var count = $(this).parent().parent().parent().children().size();
			if(count > 1){
				$(this).parent().parent().remove();
				for(var i=1;i<=count;i++){
                    $(".kpTable tbody tr:nth-child("+i+") td #sl").val((i).toString());
                }
			}
			else{
				alert('Sorry! Cannot remove first row..');
			}
		});

		//CASE TRANSFER JAVASCRIPT

		// $("#transfer_to_io").hide();
		// $("#transfer_to_ps").hide();
		// $("#transfer_to_agency").hide();
		// $("#section").hide();
		// $("#tansfer_type").change(function(){
		// 	var type = $(this).val();
		// 	if(type == 'IO-IO'){
		// 		$("#transfer_to_io").show();
		// 		$("#transfer_to_ps").hide();
		// 		$("#transfer_to_agency").hide();
		// 		$("#section").hide();
		// 	}
		// 	else if(type == 'PS-PS'){
		// 		$("#transfer_to_io").hide();
		// 		$("#transfer_to_ps").show();
		// 		$("#transfer_to_agency").hide();
		// 		$("#section").hide();	
		// 	}
		// 	else if(type == 'PS-OTH'){
		// 		$("#transfer_to_io").hide();
		// 		$("#transfer_to_ps").hide();
		// 		$("#transfer_to_agency").show();
		// 		$("#section").show();	
		// 	}
		// });

		// Data Module
		//WARRANT OF ARREST JAVASCRIPT

		// $("#year").change(function(){
		// 	var val = $(this).val();
		// 	if(val == "")
		// 		$("#type").prop("disabled",true);
		// 	else
		// 		$("#type").prop("disabled",false);
		// });

		// $("#type").change(function(){
		// 	var val = $(this).val();
		// 	if(val == "")
		// 		$("#stat").prop("disabled",true);
		// 	else
		// 		$("#stat").prop("disabled",false);
		// });

		//INITIALIZATION OF DATE ON TOPBAR
      	$('#iniDate').change(function(){
      		var dateval = $('#iniDate').val();
            $.ajax({
              type: 'POST',
              url: base_url+module+'/check_date',
              data: {dateval: dateval},
               success: function(data) {
                if(data == '0'){
                    $('#IniButton').css('display','block');
                    $('.addNewBtn').hide();
                    $('.dateMsg').show();
                    $('.dateMsg').text('Please initialize the date first');
                }else{
                    $('#IniButton').css('display','none');
                    $('.addNewBtn').show();
                    $('.dateMsg').hide();
                }
                autoPopulateData();
              },
           });
        });

        $('#IniButton').click(function(){
            var dateval = $('#iniDate').val();
            $.ajax({
              type: 'POST',
              url: base_url+module+'/savePsreports',
              data: {dateval: dateval},
               success: function(data) {
               	console.log(data);
                if(data == '1'){
                    alert("Date is initialized successfully");
                    location.reload();
                }                   
              }
           });
        });

    	//Dashboard
    	if(module === 'Dashboard'){
    		        
        	$('#dbdate').change(function(){
        		var dt = $(this).val();
        		alert(dt);		
        	});
        }


    });

//DATA FOUND BY CHANGING DATE
function autoPopulateData(){
	var pathArray = window.location.pathname.split( '/' );
	var method = pathArray[3];
    var dateval = $('#iniDate').val();
    $.ajax({
    	url: base_url+module+'/getResultByDate',
    	type:'POST',
    	data:{
    		dateval:dateval,
    		method:method
    	},
    	success:function(data){
			var html = "";
    		$('#firtable').DataTable().clear().destroy();
    		html = JSON.parse(atob(data));
      		$('.dlist').html(html);
      		$('.date').html(dateval);
			$('#firtable').DataTable().draw();
		},
	});
}

//GET URL METHOD
function getMethod(){
	var pathArray = window.location.pathname.split( '/' );
	return pathArray[3];
}