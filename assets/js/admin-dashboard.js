/**
 * @Package: Ultra Admin HTML Theme
 * @Since: Ultra 1.0
 * This file is part of Ultra Admin Theme HTML package.
 */


jQuery(function($) {

    'use strict';

    var ULTRA_SETTINGS = window.ULTRA_SETTINGS || {};

    /*--------------------------------
        Sparkline Chart
     --------------------------------*/
    ULTRA_SETTINGS.dbSparklineChart = function() {

        if ($.isFunction($.fn.sparkline)) {

            $('.db_dynamicbar').sparkline([8.4, 9, 8.8, 8, 9.5, 9.2, 9.9, 9, 9, 8, 7, 9, 9, 9.5, 8, 9.5, 9.8], {
                type: 'bar',
                barColor: '#f5f5f5',
                height: '40',
                barWidth: '10',
                barSpacing: 1,
            });

            $('.db_linesparkline').sparkline([2000, 3454, 5454, 2323, 3432, 4656, 2897, 3545, 4232, 5434, 4656, 3567, 4878, 3676, 3787], {
                type: 'line',
                width: '100%',
                height: '40',
                lineWidth: 2,
                lineColor: '#f5f5f5',
                fillColor: 'rgba(255,255,255,0.2)',
                highlightSpotColor: '#ffffff',
                highlightLineColor: '#ffffff',
                spotRadius: 3,
            });


            // Bar + line composite charts
            $('.db_compositebar').sparkline([4, 6, 7, 7, 4, 3, 2, 4, 6, 7, 7, 4, 3, 1, 4, 6, 5, 9], {
                type: 'bar',
                barColor: '#f5f5f5',
                height: '40',
                barWidth: '10',
                barSpacing: 1,
            });

            $('.db_compositebar').sparkline([4, 1, 5, 7, 9, 9, 8, 8, 4, 7, 9, 9, 8, 8, 4, 2, 5, 6, 7], {
                composite: true,
                fillColor: 'rgba(153,114,181,0)',
                type: 'line',
                width: '100%',
                height: '40',
                lineWidth: 2,
                lineColor: '#9972b5',
                highlightSpotColor: '#fa8564',
                highlightLineColor: '#9972b5',
                spotRadius: 3,
            });



        }

    };




    /*--------------------------------
        Easy PIE
     --------------------------------*/
    ULTRA_SETTINGS.dbEasyPieChart = function() {

        if ($.isFunction($.fn.easyPieChart)) {

            $('.db_easypiechart1').easyPieChart({
                barColor: '#9972b5',
                trackColor: '#f5f5f5',
                scaleColor: '#f5f5f5',
                lineCap: 'square',
                lineWidth: 6,
                size: 120,
                animate: 2000,
                onStep: function(from, to, percent) {
                    $(this.el).find('.percent').text(Math.round(percent));
                }
            });
        }

    };




    

    /*--------------------------------
         gauge meter
     --------------------------------*/
    ULTRA_SETTINGS.dbGaugemeter = function() {

        if ($("#gauge-meter").length) {
            var opts = {
                lines: 1, // The number of lines to draw
                angle: 0.05, // The length of each line
                lineWidth: 0.30, // The line thickness
                pointer: {
                    length: 0.40, // The radius of the inner circle
                    strokeWidth: 0.038, // The rotation offset
                    color: '#ffffff' // Fill color
                },
                limitMax: 'false', // If true, the pointer will not go past the end of the gauge
                colorStart: '#9972b5', // Colors
                colorStop: '#9972b5', // just experiment with them
                strokeColor: '#ffffff', // to see which ones work best for you
                generateGradient: false
            };
            var target = document.getElementById('gauge-meter'); // your canvas element
            var gauge = new Gauge(target).setOptions(opts); // create sexy gauge!
            gauge.maxValue = 100; // set max gauge value
            gauge.animationSpeed = 90; // set animation speed (32 is default value)

            gauge.set(56); // set actual value
            gauge.setTextField(document.getElementById("gauge-meter-text"));
            randomGauge();

        }

        function randomGauge() {
            setTimeout(function() {
                var val = Math.random() * 99;
                gauge.set(val); // set actual va{lue
                AnimationUpdater.run();
                randomGauge();
            }, 2000);
        }

    };



    /******************************
     initialize respective scripts 
     *****************************/
    $(document).ready(function() {
        ULTRA_SETTINGS.dbSparklineChart();
        ULTRA_SETTINGS.dbEasyPieChart();
        ULTRA_SETTINGS.dbGaugemeter();
    });

    $(window).resize(function() {
        ULTRA_SETTINGS.dbSparklineChart();
    });

    $(window).load(function() {});

});
