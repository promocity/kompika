$(document).ready(function() {
    var checkbox_pos = false;
    var checkbox = $('.checkbox');
    var checkX = $('.check');
    var name = $("input[name='name']");
    var phone = $("input[name='_replyto']");
    var day = $("select[name='day']");
    var month = $("select[name='month']");
    var hour = $("select[name='hour']");
    var minute = $("select[name='minute']");

    function SetCheckbox () {
        checkbox_pos = !checkbox_pos;

        if(checkbox_pos)
            checkX.css('opacity', 1);
        else
            checkX.css('opacity', 0);
    }

    checkbox.click(function() {
        SetCheckbox();
        if(checkbox_pos) {
            day.attr('disabled', 'disabled');
            month.attr('disabled', 'disabled');
            hour.attr('disabled', 'disabled');
            minute.attr('disabled', 'disabled');
        }
        else {
            day.removeAttr('disabled');
            month.removeAttr('disabled');
            hour.removeAttr('disabled');
            minute.removeAttr('disabled');
        }
    });
});
