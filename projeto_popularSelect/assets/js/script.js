function pegarAulas(obj){
    var item = obj.value;
    $.ajax({
        url: "./home/pegar_aulas",
        type: 'POST',
        data: {modulo:item},
        dataType: 'json',
        success:function(data){
            var html = '';
            for(var i in data){
                html += "<option value='"+data[i].id+"'>"+data[i].titulo+"</option>";
            }
            $('#aulas').html(html);
        }
    });
}