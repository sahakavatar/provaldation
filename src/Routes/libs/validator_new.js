$(document).ready(function () {
    $('#v-add-button').on('click', function () {
        var id = Date.now();
        var html = $('#v-component-1').html();
        html = html.replace(/{id}/g, id);
        $('#v-add-place').append(html);
    });
    $('body').on('click','[data-delete]',function () {
       var id =$(this).attr('data-delete');
       $('body').find('[data-parent='+id+']').remove();
    });
});
