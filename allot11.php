<?php
session_start();
$_SESSION['pt']=$_SESSION['process'];
//echo$_SESSION['pt'];
?>
<html>
<head>
       <title>Title here!</title>
       <style>
	body { width: 400px; margin: 100px auto; }

	.box {
		width: 400px;
		background: #3399FF;
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

	$('button').on('mouseover', function() {
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
<form name="af" action="allot11.php"  method="POST" >
<center>
<h1><b><?php echo"Welcome Admin"?></b></h1>
<table class="sea1" cellpadding="10">
<tr><td colspan="2"><b><p class="pro">First-priority</p></b></td><td></td><td></td><td></td><td></td><td></td><td></td><td></td><td colspan="2"><b><p class="pro">Secend-priority</p></td></b></tr>
<tr><td colspan="2"><button class="rc-button-red">Nongenaral</button></td>
<td></td><td></td><td></td><td></td><td></td><td></td><td></td><td colspan="2"><input type="button" class="rc-button-submit" value="General" onclick="document.location='nsc.php';"></td>
</tr>
</table>
<input type="hidden" name="pt" value="<?php echo$exicution;?>">
</form>
</center>
</table>
<center>
<div class="box">
	<h2>hi Admin</h2>
	<p>
      Non-general candidate are Sucessfully placed.
      As per ther rank and choice-filleing.

	</p>
</div>
</center>
</body>
</html>
