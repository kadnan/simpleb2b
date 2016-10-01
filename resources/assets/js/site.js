function getMessages() {

}
$(function() {
    $('#generate_api').click(function () {
        var randomstring = Math.random().toString(36).substr(2);;
        $('#api_key').val(randomstring);
        return false
    });
    $('#btnsend').click(function () {
        alert('send')
        return false;
    });

    if(document.location.href.indexOf('/screen') != -1) {
    }
});
