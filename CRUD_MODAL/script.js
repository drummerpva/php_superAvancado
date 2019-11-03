$(document).ready(function () {
    $('.modalAjax').bind('click', function (e) {
        e.preventDefault();
        $('.modal').html("Carregando...");
        $('.bgModal').fadeIn();
        var arquivo = $(this).attr('href');
        $('.modal').load(arquivo);
    });
    $('.bgModal').bind('click',function(){
        $(this).fadeOut();
    });
    $('.buttonForm').bind('submit',function(e){
        e.preventDefault();
        var arquivo = $(this).parent().attr('action');
        var dados = serialize($(this).parent());
        $.ajax({
            url: arquivo,
            type: "POST",
            data:dados,
            success:function(data){
                window.location.href = "./";
            }
        });
    });
});