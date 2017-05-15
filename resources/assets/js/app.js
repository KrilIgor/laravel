
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example', require('./components/Example.vue'));

const app = new Vue({
    el: '#app'
});



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
