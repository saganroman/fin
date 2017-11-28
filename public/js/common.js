$(document).ready(function () {

    $('#datetimepicker').datetimepicker({
        /* locale: 'ua',*/
        ignoreReadonly: true,
        format: 'DD.MM.YYYY',
        locale: 'ru',
        /* viewMode: 'years',*/
    });
// запрет ввода символов в поле с суммой
    $('#amount').keypress(function (e) {
        if (e.which != 8 && e.which != 0 && e.which != 46 && (e.which < 48 || e.which > 57)) {
            return false;
        }
    });
    //date in users balance of period page
    $('#dateBegin').datetimepicker({
        format: 'DD.MM.YYYY',
        locale: 'ru',
    });
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
    $('#userKarma').on('change', function () {
        var userId = $(this).val();

        $.ajax({
            type: "GET",
            url: "getUserKarma?id=" + userId,
            //cache: false,
            success: function (result) {
                var user = JSON.parse(result);
                $("#karma").val(user.karma);
            }
        });
    });

    $('#getPeriod').on('click', function () {
        var startData = $("#dateBegin input").val();
        var endData = $("#dateEnd input").val();

        $.ajax({
            type: "GET",
            url: "getBalanceByPeriod?startData=" + startData + '&endData=' + endData,
            //cache: false,
            success: function (result) {
                var users = JSON.parse(result);
                //console.log(users);
                users.forEach(function(item, i, arr) {
                    var index = i+1;
                    $('#balancePeriod').append("<tr> <td>"+index+"</td>  <td>"+item.user_name+"</td> <td>"+item.balanceR+"Руб/"+ item.balanceD+"$" +"</td>       </tr>");
                });

            }
        });
    });
});