"use strict";


// Shared Colors Definition
const primary = '#6993FF';
const success = '#1BC5BD';
const info = '#8950FC';
const warning = '#FFA800';
const danger = '#F64E60';


var KTApexChartsDemo = function () {


    var _chart_sales = function () {
        const apexChart = "#chart_sales";


        var salesData = [];



        var url = $("#ajax_get_sales_per_year").val();
        var token_search = $("#token_search").val();


        $.ajax({
            url: url,
            type: 'get',
            data: {
                "_token": token_search,
            },
            success: function (data) {


                var options = {
                    series: [
                        {
                            name: 'المبيعات',
                            data: data.map(function (item) { return item.count; })
                        }],
                    chart: {
                        height: 350,
                        type: 'area'
                    },
                    dataLabels: {
                        enabled: true
                    },
                    stroke: {
                        curve: 'smooth'
                    },
                    xaxis: {
                        categories: ['يناير', 'فبراير', 'مارس', 'ابريل', 'مايو', 'يونيو', 'يوليو', 'أغسطس', 'سبتمبر', 'أكتوبر', 'توفمبر', 'ديسمبر'],
                    },
                    colors: [danger]
                };

                var chart = new ApexCharts(document.querySelector(apexChart), options);
                chart.render();


                console.log(salesData);

            },
            error: function () {

            }
        });





    }


    var _chart_balance = function () {
        const apexChart = "#chart_balance";
        var options = {
            series: [44, 55, 13, 43, 22],
            chart: {
                width: 380,
                type: 'pie',
            },
            labels: ['محمد السيد', 'إبراهيم حسن', 'أحمد علي', 'شيماء عبدالحميد', 'علي الشعراوي'],
            responsive: [{
                breakpoint: 480,
                options: {
                    chart: {
                        width: 200
                    },
                    legend: {
                        position: 'bottom'
                    }
                }
            }],
            colors: [primary, success, warning, danger, info]
        };

        var chart = new ApexCharts(document.querySelector(apexChart), options);
        chart.render();
    }
    return {
        // public functions
        init: function () {
            _chart_sales();
            _chart_balance();
        }
    };
}();

jQuery(document).ready(function () {
    KTApexChartsDemo.init();
});
