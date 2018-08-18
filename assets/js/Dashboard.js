$(document).ready(function() {
    $('.datepicker-autoclose').datepicker({
    })
    .change(dateChanged)
    .on('changeDate', dateChanged);
});

function dateChanged(ev) {
        // loadred start
        var date = (ev.date).toString();
        var dateval = date.split("+");
        $.ajax({
        url: base_url+module+'/getFactsFigures',
        type: 'POST',
        data: {date: dateval[0]},
        success: function(response) {
            var data = JSON.parse(atob(response));
            $("#dbfacts").html(data);
            // loadred end
        },
    });
}