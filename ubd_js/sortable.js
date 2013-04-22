$(function() {
    $(document).ready(function() {
        $("#media_sort_holder").sortable({
            handle : '.handle',
            update : function () {
                var order = $('#media_sort_holder').sortable('serialize');
            }
        });
    });
});
