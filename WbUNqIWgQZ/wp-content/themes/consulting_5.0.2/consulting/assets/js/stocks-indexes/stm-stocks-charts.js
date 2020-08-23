jQuery(document).ready(function ($) {
    "use strict";
    $('.consulting_stocks_chart').each(function(){
        var id = $(this).attr('data-id');
        var indexes = $(this).attr('data-indexes');
        var range = $(this).attr('data-range');
        var interval = $(this).attr('data-interval');
        var fill_color = $(this).attr('data-fill-color');
        var point_color = $(this).attr('data-point-color');

        $.ajax({
            url: ajaxurl,
            dataType: 'json',
            context: this,
            data: {
                'indexes' : indexes,
                'range' : range,
                'interval' : interval,
                'fill_color' : fill_color,
                'point_color' : point_color,
                'action' : 'stm_get_history',
                'security' : stm_get_history,
                'data' : []
            },
            success: function (data) {
                var ctx = document.getElementById(id).getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'line',
                    data: {
                        labels: data.labels,
                        datasets: data.indexes
                    },
                    options: {
                        tooltips: {
                            callbacks: {
                                label: function(tooltipItem, data) {
                                    var label = data.datasets[tooltipItem.datasetIndex].label || '';

                                    if (label) {
                                        label += ': ';
                                    }
                                    label += Math.round(tooltipItem.yLabel * 100) / 100;
                                    return label;
                                }
                            }
                        },
                        legend: {
                            display: false
                        },
                        scales: {
                            yAxes: [{
                                ticks: {
                                    fontSize: 11,
                                    fontColor: '#000'
                                }
                            }],
                            xAxes: [{
                                ticks: {
                                    fontSize: 11,
                                    fontColor: '#000'
                                }
                            }]
                        }
                    }
                });

                $('.consulting_stocks_charts_box').addClass("hide_preloader");
            }

        });

    });
});