highchartrefresh = setInterval(function () {
    url = window.location.href;
    $.fn.highchartsview.update("sms_chart", url);
}, 6000);