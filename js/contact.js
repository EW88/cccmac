// JavaScript Document

$(function(){
	
	
	$('#content').html('<div id="contact"><h2>Contact Us (jQuery Driven)</h2></div>');
	
	$('#contact').append('<div class="left"></div><div class="right"></div>')
	
	$left = $('#contact .left');
	$right = $('#contact .right');
	
	$left.append('<div id="tel" class="contact-container"></div><div id="fax" class="contact-container"></div><div id="c-email" class="contact-container"></div><div id="address" class="contact-container"></div>');
	
	$('#tel').append('<p class="title">Tel:</p>');
	$('#tel').append('<p class="info">(647)686-6782</p>');
	
	$('#fax').append('<p class="title">fax:</p>');
	$('#fax').append('<p class="info">(647)686-6782</p>');
	
	$('#c-email').append('<p class="title">E-Mail:</p>');
	$('#c-email').append('<p class="info"><a href="mailto:info@ethanwang.ca">info@ethanwang.ca</a></p>');
	
	$('#address').append('<p class="title">Address:</p>');
	$('#address').append('<p class="info"><a href="https://www.google.ca/maps/place/Humber+College/@43.728133,-79.607958,15z/data=!4m2!3m1!1s0x0:0xdadd88718b1895d7?sa=X&ei=K2OCVOHHOY-fyAT_0YHYBQ&ved=0CHsQ_BIwDQ">205 Humber College Blvd, Toronto, ON M9W 5L7</a></p>');
	
	$right.append('<div id="map" class="contact-container"></div>');
	
	$('#map').append('<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11532.614958981765!2d-79.607958!3d43.728133!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdadd88718b1895d7!2sHumber+College!5e0!3m2!1sen!2sca!4v1417634025176" width="450" height="400" frameborder="0" style="border:0"></iframe>');
	
	$content = $('#content');
	$h2 = $('#content h2');
	$contact = $('#contact');
	$tel = $('#tel');
	$fax = $('#fax');
	$email = $('#c-email');
	$address = $('#address');
	$map = $('#map');
	
	$title = $('.title');
	$info = $('.info');
	$link = $('.info a');
	$container = $('.contact-container');
	
	$left.css({
		'float': 'left'
	});
	
	$right.css({
		'float': 'right'
	});
	
	$contact.css({
		'padding-top': '180px',
		'padding-bottom': '50px',
		'overflow': 'hidden',
		'width': '900px',
		'margin': '0 auto'
	});
	
	$h2.css({
		'position': 'relative',
		'bottom': '30px'
	});
	
	$container.css({
		'position': 'relative',
		'opacity': '0',
		'padding': '10px'
	});
	
	$title.css({
		'font-family': '\'Open Sans\', sans-serif',
		'color': '#222',
		'font-size': '18px',
		'padding': '5px 0'
	});
	
	$info.css({
		'font-family': '\'Open Sans\', sans-serif',
		'color': '#ef1515',
		'font-size': '15px',
		'padding': '10px 0'
	});
	
	$link.css({
		'font-family': '\'Open Sans\', sans-serif',
		'color': '#ef1515',
		'font-size': '15px',
		'padding': '10px 0',
		'text-decoration': 'none'
	});
	
	
	
	$tel.animate({'bottom': '20px'}, {queue: false, duration: 1000});
	$tel.animate({'opacity': '1', queue: false}, 1500, function x(){
		$fax.animate({'bottom': '20px'}, {queue: false, duration: 1000});
		$fax.animate({'opacity': '1', queue: false}, 1500, function x(){
			$email.animate({'bottom': '20px'}, {queue: false, duration: 1000});
			$email.animate({'opacity': '1', queue: false}, 1500, function x(){
				$address.animate({'bottom': '20px'}, {queue: false, duration: 1000});
				$address.animate({'opacity': '1', queue: false}, 1500, function x(){
					$map.animate({'bottom': '20px'}, {queue: false, duration: 1000});
					$map.animate({'opacity': '1', queue: false}, 1500);
				});
			});
		});
	});
})