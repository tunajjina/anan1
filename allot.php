<?php
session_start();
$_SESSION['allocatesheat']='cross.jpg';
if( !isset($_SESSION['key4']))
{
    header('location:H.php');
}
else
include('system.php');
$_SESSION['allocatesheat']='right.jpg';
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
 <SCRIPT language="JavaScript1.2">
function openwindow()
{
	window.open("allocatehelp.php","mywindow","menubar=1,resizable=1,width=730,height=550");
}
</script>
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
<link rel="stylesheet" href="st00.css">
<link rel="stylesheet" href="st4.css">
<link rel="stylesheet" href="st8.css">
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
<form name="af" action="allot1.php"  method="POST" >
<center>
<h1><b><?php echo"Welcome Admin"?></b></h1>
<a href="javascript: openwindow()" ><img src="image/chat.jpg" width="25" height="24" align="absmiddle"/><span  class="span">Help</span></a>
<table class="sea1">
<tr><td class="sea12"><p class="sea">Search</p></td></tr>
<tr><td class="sea12"><p>EnterRollno:</p>
</td>
<td class="sea12"><input type="text" name="txtColor" value=""placeholder=" Enter first roll no" required></td>
</tr>
<tr><td></td>
<td>
<input type="submit" name="ee" size="4"  value="ENTER" class="rc-button-submit">
</td>
</tr>
<tr></tr><tr></tr>
</table>
</form>
</center>
</table>
</body>
</html>
