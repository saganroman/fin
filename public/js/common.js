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
});