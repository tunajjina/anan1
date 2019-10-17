<?php
session_start();
if(!isset($_SESSION['report']))
{
    header('location: H.php');
}
else
$rs=$_SESSION['report'];
//echo$_SESSION['report'];
?>
<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Custom Effect Methods</title>
	<style>
	p {
        margin-top: 0;
        width: 400px;
		background: #3399FF;
		position: relative;
         font-size:20px;
       }
	</style>
</head>
<body bgcolor="#99CC33">

<center><b><i><h1 color="black" title="Select the line to gate system report">Report</h1></i></b></center>
<table align="right"><tr><td><b><a href="logout1.php">logout</a></b></td></tr></table>

<div class=content>
	<center><p>
        Sytem Sucessfully complited counselling process.
        All Registerd Student Non-genaral&Genaral candidate.
        Are placed in<b> <?php echo$rs;?></b>Sec.
        All the Processing information Stored in System Data Bank.
 
	</p></center>

</div>



<script src="jquery-1.7.1.js"></script>

<script>
$(function(){
(function() {
	var content = $('div.content').hide();

	jQuery.fn.flash = function( speed, easing, callback ) {
		var $this = $(this);

		return $this.slideDown(500, function() {
	 		$this.delay(4000).slideUp(500);
		});
	};

	$('h1').on('click', function() {
		content.flash();
	});
})();
});



</script>

</body>
</html>












