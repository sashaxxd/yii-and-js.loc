function showCategory(res){
    $('.app-category').html(res);
    $(".app-table").empty();
    var scrollTop = $('.category').offset().top;
    $('html, body').animate({ scrollTop: scrollTop }, 500);
    $("#wb_CssMenu1 ul li a").first().addClass("active");

}


function showTable(res){
    $('#cat-rem').empty();
    $('.app-table').html(res);

    var scrollTop = $('.app-table').offset().top;
    $('html, body').animate({ scrollTop: scrollTop }, 500);


}


$(document).ready(function($){
$('.app-container').delegate(".wb_CssMenu2 ul li a", "click",  function(e) {
    e.preventDefault();
    $(".wb_CssMenu2 ul li a").removeClass("active");
    $(this).toggleClass("active");





    var id = $(this).data('id');
    // var csrfToken = $('meta[name="csrf-token"]').attr("content");
    console.log(id);
    $.ajax({
        type: 'GET',
        // dataType: 'json',
        url: '/site/index',
        data: {
             id: id,
             // _csrf : csrfToken
        },

        success: function(res){
            if(!res) alert('Ошибка!');

            showCategory(res);
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
        var id = $(this).data('id');
        alert(id);
        // var csrfToken2 = $('meta[name="csrf-token"]').attr("content");
        console.log(id);
        // $("#wb_table_search").remove();
        $.ajax({
            type: 'GET',
            // dataType: 'json',
            url: '/site/table',
            data: {
                id: id,
                // _csrf : csrfToken2
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
