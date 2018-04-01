

$(document).ready(function($){
    $("#site_CssMenu1 ul li a").first().addClass("active");
    $(".site_CssMenu2 ul li a").first().addClass("active");


});



function showCategory(res){
    $('.app-category').html(res);
    $(".app-table").empty();
    var scrollTop = $('.category').offset().top;
    $('html, body').animate({ scrollTop: scrollTop }, 500);
    $("#site_CssMenu1 ul li a").first().addClass("active");

}


function showTable(res){
    $('#cat-rem').empty();
    $('.app-table').html(res);

    var scrollTop = $('.app-table').offset().top;
    $('html, body').animate({ scrollTop: scrollTop }, 500);


}


$(document).ready(function($){
$('.app-container').delegate(".site_CssMenu2 ul li a", "click",  function(e) {
    e.preventDefault();
    $(".site_CssMenu2 ul li a").removeClass("active");
    $(this).toggleClass("active");





    var id = $(this).data('id');

    console.log(id);
    $.ajax({
        type: 'GET',

        url: '/site/index',
        data: {
             id: id,

        },

        success: function(res){
            if(!res) alert('Ошибка!');

            showCategory(res);
        },
        error: function(){
            alert('Не заполнено!');
        }
    });


});


    $('.app-container').delegate("#site_CssMenu1 ul li a", "click",  function(e) {
        e.preventDefault();

        $("#site_CssMenu1 ul li a").removeClass("active");
        $(this).toggleClass("active");
        var id = $(this).data('id');
        alert(id);

        console.log(id);

        $.ajax({
            type: 'GET',

            url: '/site/table',
            data: {
                id: id

            },

            success: function(res){
                if(!res) alert('Ошибка!');

                showTable(res);
            },
            error: function(){
                alert(id);
            }
        });
    });

});
