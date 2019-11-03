function verificarNotificacao(){
    $.ajax({
        url: "verificar.php",
        type: 'POST',
        dataType: 'json',
        success:function(json){
            if(json.qt > 0){
                $('.notificacoes').addClass('temNotif').html(json.qt);
            }else{
                $('.notificacoes').removeClass('temNotif').html('0');
            }
        }
    });    
}
$(function(){
   setInterval(verificarNotificacao,5000); 
   verificarNotificacao();
   $('.notificacoes').bind('click',function(){
       
   });
   
   $('.addNotif').bind('click',function(){
      $.ajax({
          url:"add.php"
      }); 
      });
});