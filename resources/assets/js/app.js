
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var $ = require('jquery');

$('.btn-submit').click(function (e) {
	e.preventDefault();
	var name = $("input[name='name']").val();
	var key = $("input[name='key']").val();
	var token = $('meta[name="csrf-token"]').attr('content');
	$.ajax({
		type: 'POST',
		url: '/store',
		data: {_token: token, name: name, key: key},
		dataType: 'JSON',
		success:function () {
			$('.errorContent').html('');
			$('.errorContent').attr('hidden');
		


		},
		error:function (error) {
			$('.errorContent').removeAttr('hidden');
			$('.errorContent').html(error['responseJSON']['message']);
		}
	})
});

// $('#profile-tab').click(function () {
// 	var city = $("a[name=]")
// 	$('#profile').p.html()
// })