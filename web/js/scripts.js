$(document).ready(function() {
    $('#car_search_form').submit(function (e) {
        e.preventDefault();

        $.post($(this).attr('action'), $(this).serialize(), function(data) {
            $('#search_results').html(data);
        });
    });
});