/*=========================================================================================
    File Name: pagination.js
    Description: Provide pagination links for your site or app with the multi-page 
                pagination component.
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 3.0
    Author: Pixinvent
    Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
(function(window, document, $) {
    'use strict';
     $('.page1-links').twbsPagination({
        totalPages: 5,
        visiblePages: 4,
        prev: 'Prev',
        first: null,
        last: null,
        onPageClick: function (event, page) {
            $('#page1-content').text('You are on Page ' + page);
            $(".pagination").find('li').addClass('page-item');
            $(".pagination").find('a').addClass("page-link");
        }
    });

    $('.page2-links').twbsPagination({
        totalPages: 5,
        visiblePages: 4,
        prev: 'Prev',
        first: null,
        last: null,
        onPageClick: function (event, page) {
            $('#page2-content').text('You are on Page ' + page);
            $(".pagination").find('li').addClass('page-item');
            $(".pagination").find('a').addClass("page-link");
        }
    });

    $('.page3-links').twbsPagination({
        totalPages: 5,
        visiblePages: 4,
        prev: 'Prev',
        first: null,
        last: null,
        onPageClick: function (event, page) {
            $('#page3-content').text('You are on Page ' + page);
            $(".pagination").find('li').addClass('page-item');
            $(".pagination").find('a').addClass("page-link");
        }
    });
    $('.firstLast1-links').twbsPagination({
        totalPages: 5,
        visiblePages: 4,
        prev: 'Prev',
        first: 'First',
        last: 'Last',
        onPageClick: function (event, page) {
            $('#firstLast1-content').text('You are on Page ' + page);
            $(".pagination").find('li').addClass('page-item');
            $(".pagination").find('a').addClass("page-link");
        }
    });

    $('.firstLast2-links').twbsPagination({
        totalPages: 5,
        visiblePages: 4,
        prev: 'Prev',
        first: 'First',
        last: 'Last',
        onPageClick: function (event, page) {
            $('#firstLast2-content').text('You are on Page ' + page);
            $(".pagination").find('li').addClass('page-item');
            $(".pagination").find('a').addClass("page-link");
        }
    });

    $('.firstLast3-links').twbsPagination({
        totalPages: 5,
        visiblePages: 4,
        prev: 'Prev',
        first: 'First',
        last: 'Last',
        onPageClick: function (event, page) {
            $('#firstLast3-content').text('You are on Page ' + page);
            $(".pagination").find('li').addClass('page-item');
            $(".pagination").find('a').addClass("page-link");
        }
    });

    $('.start-links').twbsPagination({
        totalPages: 10,
        visiblePages: 6,
        startPage : 5,
        prev: 'Prev',
        first: 'First',
        last: 'Last',
        onPageClick: function (event, page) {
            $('#start-content').text('Your start Page ' + page);
            $(".pagination").find('li').addClass('page-item');
            $(".pagination").find('a').addClass("page-link");
        }
    });
    $('.loop-links').twbsPagination({
        totalPages: 5,
        visiblePages: 5,
        prev: 'Prev',
        first: 'First',
        last: 'Last',
        loop: true,
        onPageClick: function (event, page) {
            $('#loop-content').text('You are on Page ' + page);
            $(".pagination").find('li').addClass('page-item');
            $(".pagination").find('a').addClass("page-link");
        }
    });
    $('.url-links').twbsPagination({
        totalPages: 10,
        visiblePages: 5,
        prev: 'Prev',
        first: 'First',
        last: 'Last',
        href: '?page={{page}}',
        onPageClick: function (event, page) {
            $('#url-content').text('You are on Page ' + page);
            $(".pagination").find('li').addClass('page-item');
            $(".pagination").find('a').addClass("page-link");
        }
    });
    $('.url1-links').twbsPagination({
        totalPages: 10,
        visiblePages: 5,
        prev: 'Prev',
        first: 'First',
        last: 'Last',
        href: '?page={{page}}&#url1-content',
        hrefVariable: '{{page}}',
        onPageClick: function (event, page) {
            $('#url1-content').text('You are on Page ' + page);
            $(".pagination").find('li').addClass('page-item');
            $(".pagination").find('a').addClass("page-link");
        }
    });
    $('.synchronized-links').twbsPagination({
        totalPages: 15,
        visiblePages: 6,
        prev: 'Prev',
        first: 'First',
        last: 'Last',
        onPageClick: function (event, page) {
            $('#synchronized-content').text('You are on Page ' + page);
            $(".pagination").find('li').addClass('page-item');
            $(".pagination").find('a').addClass("page-link");
        }
    });

})(window, document, jQuery);