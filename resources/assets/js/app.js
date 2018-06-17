
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');
var $ = require('jquery');


$(document).ready(function() {
	var page = $('.tab-content').children('div').attr('id');
	$('.nav-tabs').find('.active').attr('aria-selected', 'false');
	$('.nav-tabs').find('.active').removeClass('active');
	$('.nav-tabs li a[name='+page+']').addClass('active');
	$('.nav-tabs li a[name='+page+']').attr('aria-selected', 'true');
});


$('.btn-submit').click(function (e) {
	e.preventDefault();
	$.ajaxSetup({
		headers: {
			'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
		}
	});
	var name = $("input[name='name']").val();
	var key = $("input[name='key']").val();
	var token = $('meta[name="csrf-token"]').attr('content');
	$.ajax({
		type: 'POST',
		url: '/store',
		data: {_token: token, name: name, key: key},
		dataType: 'JSON',
		success:function (data) {
			$('.errorContent p').html('');
			$('.errorContent').attr('hidden', 'true');
			var addres = window.location.href+'city/'+data.city;
			$('.nav-tabs').append('<li class="nav-item"><a class="nav-link"  href="'+addres+'" role="tab" aria-selected="false">'+data.city+'</a></li>');
		},
		error:function () {
			$('.errorContent p').html('');
			$('.errorContent').attr('hidden');
			$('.errorContent').removeAttr('hidden');
			$('.errorContent p').html('The OpenWeatherMap API key you entered is incorrect or we do not have information about your city.');
		}
	})
});


