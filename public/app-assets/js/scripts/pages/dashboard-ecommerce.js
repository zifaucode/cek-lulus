/*=========================================================================================
    File Name: advance-cards.js
    Description: intialize advance cards
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 3.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/
    // Area chart
// ------------------------------
$(window).on("load", function(){
    $('#recent-buyers').perfectScrollbar({
        wheelPropagation: true
    });
    /********************************************
    *               PRODUCTS SALES              *
    ********************************************/
    
    var months = ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
    Morris.Area({
        element: 'products-sales',
        data: [{
            month: '2017-01',
            electronics: 0,
            apparel: 0,
            decor: 0
        }, {
            month: '2017-02',
            electronics: 240,
            apparel: 0,
            decor: 0
        }, {
            month: '2017-03',
            electronics: 0,
            apparel: 0,
            decor: 0
        }, {
            month: '2017-04',
            electronics: 0,
            apparel: 190,
            decor: 0
        }, {
            month: '2017-05',
            electronics: 0,
            apparel: 25,
            decor: 80
        }, {
            month: '2017-06',
            electronics: 0,
            apparel: 150,
            decor: 0
        }, {
            month: '2017-07',
            electronics: 0,
            apparel: 0,
            decor: 0
        },{
            month: '2017-08',
            electronics: 80,
            apparel: 0,
            decor: 0
        },{
            month: '2017-09',
            electronics: 0,
            apparel: 0,
            decor: 0
        },{
            month: '2017-10',
            electronics: 0,
            apparel: 0,
            decor: 150
        },{
            month: '2017-11',
            electronics: 300,
            apparel: 0,
            decor: 0
        },{
            month: '2017-12',
            electronics: 0,
            apparel: 0,
            decor: 0
        }],
        xkey: 'month',
        ykeys: ['electronics', 'apparel', 'decor'],
        labels: ['Electronics', 'Apparel', 'Decor'],
        xLabelFormat: function(x) { // <--- x.getMonth() returns valid index
            var month = months[x.getMonth()];
            return month;
        },
        dateFormat: function(x) {
            var month = months[new Date(x).getMonth()];
            return month;
        },
        behaveLikeLine: true,
        ymax: 300,
        resize: true,
        pointSize: 0,
        pointStrokeColors:['#00B5B8', '#FA8E57', '#F25E75'],
        smooth: true,
        gridLineColor: '#E4E7ED',
        numLines: 6,
        gridtextSize: 14,
        lineWidth: 0,
        fillOpacity: 0.9,
        hideHover: 'auto',
        lineColors: ['#00B5B8', '#FA8E57', '#F25E75']
    });
    
    /********************************************
    *               Monthly Sales               *
    ********************************************/
    Morris.Bar.prototype.fillForSeries = function(i) {
      var color;
      return "0-#fff-#f00:20-#000";
    };

    Morris.Bar({
        element: 'monthly-sales',
        data: [{month: 'Jan', sales: 1835 }, {month: 'Feb', sales: 2356 }, {month: 'Mar', sales: 1459 }, {month: 'Apr', sales: 1289 }, {month: 'May', sales: 1647 }, {month: 'Jun', sales: 2156 }, {month: 'Jul', sales: 1835 }, {month: 'Aug', sales: 2356 }, {month: 'Sep', sales: 1459 }, {month: 'Oct', sales: 1289 }, {month: 'Nov', sales: 1647 }, {month: 'Dec', sales: 2156 }],
        xkey: 'month',
        ykeys: ['sales'],
        labels: ['Sales'],
        barGap: 4,
        barSizeRatio: 0.3,
        gridTextColor: '#bfbfbf',
        gridLineColor: '#E4E7ED',
        numLines: 5,
        gridtextSize: 14,
        resize: true,
        barColors: ['#00B5B8'],
        hideHover: 'auto',
    });
    
    /************************************************************
    *               Social Cards Content Slider                 *
    ************************************************************/
    // RTL Support
    var rtl = false;
    if($('html').data('textdirection') == 'rtl'){
        rtl = true;
    }
    if(rtl === true)
        $(".tweet-slider").attr('dir', 'rtl');
    if(rtl === true)
        $(".fb-post-slider").attr('dir', 'rtl');

    // Tweet Slider
    $(".tweet-slider").unslider({
        autoplay: true,
        delay:3500,
        arrows: false,
        nav: false,
        infinite: true
    });

    // FB Post Slider
    $(".fb-post-slider").unslider({
        autoplay: true,
        delay:4500,
        arrows: false,
        nav: false,
        infinite: true
    });
});