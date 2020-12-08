const datepicker = {};

 $(function () {
    $('holiday_date_from').datetimepicker({
 useCurrent: false,
    format: 'YYYY-MM-DD',
    locale: 'ja',
    daysOfWeekDisabled: [0, 6],});
});


window.datepicker = datepicker;