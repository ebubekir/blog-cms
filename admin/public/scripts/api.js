function send_email(formId){
    var data = $(formId).serialize();
    $.post(api_url + '/send-email',data,function(response){
          if(response.error){
            $('#success').hide();
            $('#error').show().html(response.error);
          }
          else {
            $('#error').hide();
            $('#success').show().html(response.success);
            $(formId + ' input, '+formId+' textarea').val('');
          }
    },'json');
}
