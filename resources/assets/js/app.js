
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var $ = require('jquery');

$('.btn-submit').click(function () {
	// var token = $("input[name='_token']").val();
	var name = $("input[name='name']").val();
	var key = $("input[name='key']").val();
	var token = $('meta[name="csrf-token"]').attr('content');
	$.ajax({

		type: 'POST',
		url: '/store',
		data: {_token: token, name: name, key: key},
		dataType: 'JSON',
		success:function (data) {
			console.log(data);
		},
		error:function (error) {
			console.log(error);
		}
	})
});