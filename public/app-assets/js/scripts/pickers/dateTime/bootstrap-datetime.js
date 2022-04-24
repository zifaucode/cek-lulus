/*=========================================================================================
    File Name: bootstrap-datetime.js
    Description: Bootstrap DateTime Picker JS
    ----------------------------------------------------------------------------------------
    Item Name: Stack - Responsive Admin Theme
    Version: 3.0
    Author: Pixinvent
    Author URL: hhttp://www.themeforest.net/user/pixinvent
==========================================================================================*/
(function(window, document, $) {
	'use strict';

	/*******	Bootstrap DateTime Picker	*****/

	// Simple Date time picker
	$('#datetimepicker1').datetimepicker();

	// Use any Language
	$('#datetimepicker2').datetimepicker({
		locale: 'fr'
	});

	//With some format
	$('#datetimepicker3').datetimepicker({
		format: 'LT'
	});

	// No Icon
	$('#datetimepicker4').datetimepicker();

	// Disabled dates
	$('#datetimepicker5').datetimepicker({
		defaultDate: "11/1/2013",
		disabledDates: [
			moment("12/25/2013"),
			new Date(2013, 11 - 1, 21),
			"11/22/2013 00:53"
		]
	});

	// Linked Pickers
	$('#datetimepicker6').datetimepicker();
	$('#datetimepicker7').datetimepicker({
		useCurrent: false //Important! See issue #1075
	});
	$("#datetimepicker6").on("dp.change", function (e) {
		$('#datetimepicker7').data("DateTimePicker").minDate(e.date);
	});
	$("#datetimepicker7").on("dp.change", function (e) {
		$('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
	});

	// Custom Icons
	$('#datetimepicker8').datetimepicker({
		icons: {
			time: "icon-clock",
			date: "icon-calendar",
			up: "icon-angle-up",
			down: "icon-angle-down"
		}
	});

	// View Mode
	$('#datetimepicker9').datetimepicker({
		viewMode: 'years'
	});

	//Mininum View Mode
	$('#datetimepicker10').datetimepicker({
		viewMode: 'years',
		format: 'MM/YYYY'
	});

	//Disabled Days of the Week
	$('#datetimepicker11').datetimepicker({
		daysOfWeekDisabled: [0, 6]
	});

	// Inline Picker
	$('#datetimepicker12').datetimepicker({
		inline: true,
		sideBySide: true
	});

	
})(window, document, jQuery);