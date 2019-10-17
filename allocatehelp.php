<!doctype html>
<html>
<head>
	<meta>
	<title></title>
 <link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<link rel="stylesheet" href="st120.css">
<link rel="stylesheet" href="style.css">
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
</head>
<body bgcolor="#99CC33">

<dl>
	<dt>Step one</dt>
	<dd><table>
<tr><td rowspan="">
<pre>
<p class="pro">
Using this page admin can start
counselling process enter first
Roll no.
</p>
</pre>
</td>
<td rowspan="">
<div class="box" style="backface-visibility: visible;">
<img src="image/conseling1.jpg" width="250" height="300"/>
</div>
<p><button class="rc-button-submit">Example</button></p>
</td>
</tr>
</table></dd>
	<dt>Step two</dt>
	<dd><table>
<tr><td rowspan="">
<pre>
<p class="pro">
After compliting first step
ther is a page come where
there is two button you must
click on non-general button.
</p>
</pre>
</td>
<td rowspan="">
<div class="box" style="backface-visibility: visible;">
<img src="image/conseling2.jpg" width="250" height="300"/>
</div>
<p><button class="rc-button-submit">Example</button></p>
</td>
</tr>
</table></dd>
	<dt>Step three</dt>
	<dd><table>
<tr><td rowspan="">
<pre>
<p class="pro">
After compliting secend step
ther is a page come where
there is two button you must
click on general button.
</p>
</pre>
</td>
<td rowspan="10">
<div class="box" style="backface-visibility: visible;">
<img src="image/conseling3.jpg" width="250" height="300"/>
</div>
<p><button class="rc-button-submit">Example</button></p>
</td>
</tr>
</table></dd>
	<dt>Step four</dt>
	<dd><table>
<tr><td rowspan="10">
<pre>
<p class="pro">
After compliting third step
ther is a page come where
system gave you conformation
About sucessfully compliting
counselling process and exicution time.
</p>
</pre>
</td>
<td rowspan="10">
<div class="box" style="backface-visibility: visible;">
<img src="image/conseling4.jpg" width="250" height="300"/>
</div>
<p><button class="rc-button-submit">Example</button></p>
</td>
</tr>
</table></dd>
	<dt>Note</dt>
	<dd><p class="pro">In second step click on the non-Genarel button.</p></dd>
</dl>

<script src="jquery-1.7.1.js"></script>


<script>

(function() {

	$('dd').filter(':nth-child(n+4)').addClass('hide');

	$('dl').on('mouseenter', 'dt', function() {
		$(this)
			.next()
				.slideDown(200)
				.siblings('dd')
					.slideUp(200);
	});
})();


</script>

</body>
</html>











