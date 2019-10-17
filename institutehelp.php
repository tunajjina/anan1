<!doctype html public "-//W3C//DTD HTML 4.0 //EN">
<html>
<head>
       <title>Title here!</title>
       <style>
	body { width: 450px; margin: 100px auto; }

	.box {
		width: 450px;

		position: relative;
		overflow: hidden;
		padding: 1em;
        backface-visibility: visible;
        background-color:#99CC33;
	}
	</style>
 <script src="jquery-1.7.1.js"></script>
<script>
$(function(){
(function() {

	var box = $('div.box');
	$.fn.FadeSlideToggle = function(speed, fn) {
		// fadeToggle = opacity
		// slideToggle = height
		return $(this).animate({
			'height': 'toggle',
			'opacity': 'toggle'
		}, speed || 400, function() {
			$.isFunction(fn) && fn.call(this);
		});
	};

	$('button').on('mouseover', function() {
		box.FadeSlideToggle(500);
	});

})();
});
</script>
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<link rel="stylesheet" href="st120.css">
</head>
<body bgcolor="#99CC33">
<table>
<tr><td rowspan="10">
<pre>
<p class="pro">
Using this page admin add
Institue Name and ther department.
no of seats in those department.
Click next and get other department
follow the process as first one.
</p>
</pre>
</td>
<td rowspan="10">
<div class="box" style="backface-visibility: visible;">
<img src="image/updateseat.jpg" width="250" height="300"/>
</div>
<p><button class="rc-button-submit">Example</button></p>
</td>
</tr>
</table>
</body>
</html>
