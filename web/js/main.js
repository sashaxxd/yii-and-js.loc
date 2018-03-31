function showCart(cart){
    $('.app-category').html(cart);
    $(".category").show();
    var scrollTop = $('.category').offset().top;
    $('html, body').animate({ scrollTop: scrollTop }, 500);
    $("#wb_CssMenu1 ul li a").first().addClass("active");

}

$(document).ready(function($){
$('.app-container').delegate(".wb_CssMenu2 ul li a", "click",  function(e) {
    e.preventDefault();
    $(".wb_CssMenu2 ul li a").removeClass("active");
    $(this).toggleClass("active");





    var id = $(this).data('id');
    var csrfToken = $('meta[name="csrf-token"]').attr("content");
    console.log(id);
    $.ajax({
        type: 'POST',
        // dataType: 'json',
        url: '/site/index',
        data: {
             id: id,
             _csrf : csrfToken
        },

        success: function(res){
            if(!res) alert('Ошибка!');

            showCart(res);
        },
        error: function(){
            alert(id);
        }
    });


});


    $('.app-container').delegate("#wb_CssMenu1 ul li a", "click",  function(e) {
        e.preventDefault();

        $("#wb_CssMenu1 ul li a").removeClass("active");
        $(this).toggleClass("active");

    });

});
