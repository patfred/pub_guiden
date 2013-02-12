$(function(){

    $('#search-drop').click(function () {
    if ($('#show-search').is(":visible")){
        $('#show-login').hide();
        $('#show-search').toggle();
    } else {
        $('#show-login').hide();
        $('#show-search').toggle();
    }
        return false;
    });

    $('#login-drop').click(function () {
    if ($('#show-login').is(":visible")){
        $('#show-search').hide();
        $('#show-login').toggle();
    } else {
        $('#show-search').hide();
        $('#show-login').toggle();
    }    
        return false;
    });
});