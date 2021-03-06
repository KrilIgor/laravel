
$("form").on("click",".upload-image",function(e){
    $(this).parents("form").ajaxForm(options);
});

var options = {
    complete: function(response)
    {
        if($.isEmptyObject(response.responseJSON.error)){
            $("input[name='title']").val('');
            $(".print-img").css('display','block');
            $(".print-img").find('img').attr('src','/images/'+ response.responseJSON.success);
        }else{
            printErrorMsg(response.responseJSON.error);
        }
    }
};

function printErrorMsg (msg) {
    $(".print-error-msg").find("ul").html('');
    $(".print-error-msg").css('display','block');
    $.each( msg, function( key, value ) {
        $(".print-error-msg").find("ul").append('<li>'+value+'</li>');
    });
}
