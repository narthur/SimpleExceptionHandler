var refreshIframe = function(){
    document.getElementById('log_frame').contentWindow.location.reload(true);
};

$(function(){
    $('#trigger_exception_standard').click(function() {
        $.post('errors.php', {"action": "standard"}, function(data) {
            console.log(data.message);
            refreshIframe();
        });
    });
    $('#trigger_exception_custom').click(function() {
        $.post('errors.php', {"action": "custom"}, function(data) {
            console.log(data.message);
            refreshIframe();
        });
    });
    $('#trigger_exception_clear').click(function() {
        $.post('errors.php', {"action": "clear"}, function(data) {
            console.log(data.message);
            refreshIframe();
        });
        this.blur();
    });
});