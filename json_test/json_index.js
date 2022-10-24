$(function (){
    $('input[type=submit]').on('click',function (e){
        e.preventDefault();
        var json = {
            name: $('input[name=name]').val(),
            family: $('input[name=family]').val(),
            age: $('input[name=age]').val(),
            citizenship: $('input[name=citizenship]').val()
        }
        $.ajax({
            uri: $('form').prop('action'),
            method: 'POST',
            data: 'json=' + JSON.stringify(json)
        })
            $.done(function (msg){
                $('#hello-js'.html(msg));
            });
    });
});