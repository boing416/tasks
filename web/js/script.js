$(document).ready(function(){
    $('#tasks').DataTable();

    var val = $('#log').val();

    if(val == 1)
        $('#login').html('<a id="login" href="?controller=tasks&action=index" style="color: white">Logout</a>');

    console.log("val " + val);
});