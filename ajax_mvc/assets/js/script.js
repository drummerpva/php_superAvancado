$(function () {
    $('button').bind('click', function () {
        var nome = $('#nome').val();
        $.ajax({
            url: "./ajax",
            type: "POST",
            dataType: 'json',
            data:{nome:nome},
            success:function(data){
                $(".borda").html(data.frase);
            }
        });
        
    });
});