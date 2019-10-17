<?php
session_start();
$_SESSION['allocatesheat']='cross.jpg';
if( !isset($_SESSION['key4']))
{
    header('location:H.php');
}
else
?>
<html>
<head>
       <title>Title here!</title>
       <style>
	body { width: 400px; margin: 100px auto; }

	.box {
		width: 400px;
		background: red;
		position: relative;
		overflow: hidden;
		padding: 1em;
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

	$('button').on('click', function() {
		box.FadeSlideToggle(500);
	});

})();
});
</script>
</head>
<body bgcolor="#99CC33">
<link rel="stylesheet" href="st120.css">
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
<link rel="stylesheet" href="st8.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<center>
<h1><b><?php echo"Welcome Admin"?></b></h1>
<table class="sea1" cellpadding="10">
<tr><td colspan="2"><p class="pro">First-priority</p></td><td></td><td></td><td></td></td><td></td><td></td><td><td></td><td colspan="2"><p class="pro">Second-priority</p></td></tr>
<tr><td colspan="2"><input type="button" value="Nongenaral" size="4"  class="rc-button-red" onclick="document.location='n.php';"></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td colspan="2"><button class="rc-button-submit">Genaral</button></td>
</tr>
</table>
</center>
<div class="box">
	<center><h2>Caution</h2></center>
	<p>
      As per system guidline Non-genaralstudent
      Allot First after compliting that Genaral
      student conseling Taken Plase.
	</p>
</div>
</center>
</body>
</html>
