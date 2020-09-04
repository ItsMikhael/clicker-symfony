/* $("#gold_inc").on('click', function() {
    $.ajax({
        url: {{ render(controller('App\\Controller\\MainController::increaseGold')) }},
    success: {
            alert('dziala');
    }});

});
 */

$("#gold_inc").on('click', function() {
    $.ajax({
        //type: 'POST',
        //dataType: 'json',
        url: 'App\\Controller\\MainController::increaseGold',
        //url: $('ajax-method').val(),
        data: {userid: $('ajax-userid').val()},
        success: function (data) {
            alert(data);
        }
    });
});