$(document).ready(function () {

    $('#datetimepicker').datetimepicker({
       /* locale: 'ua',*/
        ignoreReadonly : true,
        format: 'DD.MM.YYYY',
        locale: 'ru',
        /* viewMode: 'years',*/
    });
// запрет ввода символов в поле с суммой
    $('#amount').keypress(function (e) {
        if (e.which != 8 && e.which != 0  && e.which != 46 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });
 //date in users balance of period page
    $('#dateBegin').datetimepicker({format: 'DD.MM.YYYY',
        locale: 'ru',});
    $('#dateEnd').datetimepicker({
        format: 'DD.MM.YYYY',
        locale: 'ru',
        useCurrent: false //Important! See issue #1075
    });
    $("#dateBegin").on("dp.change", function (e) {
        $('#dateEnd').data("DateTimePicker").minDate(e.date);
    });
    $("#dateEnd").on("dp.change", function (e) {
        $('#dateBegin').data("DateTimePicker").maxDate(e.date);
    });

});