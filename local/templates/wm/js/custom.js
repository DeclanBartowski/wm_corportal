$(document).on('click', '[data-show-more]', function(){
    var btn = $(this);
    var page = btn.attr('data-next-page');
    var id = btn.attr('data-show-more');
    var bx_ajax_id = btn.attr('data-ajax-id');
    var block_id = "#comp_"+bx_ajax_id;

    var data = {
        bxajaxid:bx_ajax_id
    };
    data['PAGEN_'+id] = page;
    $('.ajaxUpdate .text-center').remove();

    $.ajax({
        type: "GET",
        url: window.location.href,
        data: data,
        timeout: 3000,
        success: function(data) {
           $('.row.projects-row').append($(data).find('.row.projects-row').html());
           $('.pagination').html($(data).find('.pagination').html());
        }
    });
});