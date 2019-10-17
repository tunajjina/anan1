<!doctype html>
<html>
<head>
	<meta charset=utf-8>
	<title>Animate</title>
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
<link rel="stylesheet" href="button.css">
<link rel="stylesheet" href="gmail.css">
</head>

<body bgcolor="#99CC33">
<div class="box" style="backface-visibility: visible;">
	<center><h2>COLLAGE NAME LIST</h2></center>
	<pre>
<span id="sp1" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:101JAILPAIGURI GOVERMENT ENGINEERING COLLEGE'</span>
<span id="sp2" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:102 KALYANI GOVERMENT ENGINEERING COLLAGE'</span>
<span id="sp3" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:103 HALDIA INSTITUE OF TECHNOLOGY'</span>
<span id="sp4" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:104 INSTITUE OF ENGINEERING MANAGEMENT'</span>
<span id="sp5" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)"">ID:105 BANKURA UNNAYNI INSTITUE OF ENGINEERING'</span>
<span id="sp6" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:106 MURSHIDABAD COLLEGE OF ENGINEERING&TECHNOLOGY'</span>
<span id="sp7" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:107 COLLEGE OF ENGINEERING&MANAGEMENT,KOLAGHAT'</span>
<span id="sp8" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:108 ASANSOL ENGINEERING COLLAGE'</span>
<span id="sp9" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:109 NETAJI SUBHAS ENGINEERING COLLEGE'</span>
<span id="sp10" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:111 GOV.COLLEGE OF ENGG&TEXTILE TECHNOLOGY,SERAMPOER'</span>
<span id="sp11" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:110 GOV.COLLEGE OF ENGG&TEXTILE TECHNOLOGY,BERHAMPOER'</span>
<span id="sp12" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:112 GOV.COLLEGE OF ENGINEERING&LEATHER TECHNOLOGY'</span>
<span id="sp13" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:113 GOV.COLLEGE OF ENGINEERING&CERAMIC TECHNOLOGY'</span>
<span id="sp14" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:114 ST.THOMAS COLLEGE OF ENGINEERING'</span>
<span id="sp15" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:115 B.P. PODDAR INSTITUTE OF MANAGEMENT &TECHNOLOGY'</span>
<span id="sp16" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:116 MCKV INSTITUTE OF ENGINEERING'</span>
<span id="sp17" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:117 RCC INSTITUTE OF INFORMATION TECHNOLOGY'</span>
<span id="sp18" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:118 BIRBHUM INSTITUTE OF ENGINEERING & TECHNOLOGY'</span>
<span id="sp19" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:119 SILIGURI INSTITUTE OF TECHNOLOGY'</span>
<span id="sp20" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:120 DR. B. C. ROY ENGINEERING COLLEGE, DURGAPUR'</span>
<span id="sp21" onmouseover="setstyle(this.id)" onmouseout="setstyle1(this.id)">ID:121 BENGAL INSTITUE OF TECHNOLOGY'</span>

</pre>
</div>


<p><button class="rc-button-submit">Reference</button></p>


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
<script language="javascript">
function setstyle(i)
{
document.getElementById(i).style.background="red";
document.getElementById(i).style.color="white";
document.getElementById(i).style.fontWeight="bold";
document.getElementById(i).style.textShadow="#000000 5px 5px 1px";
}
function setstyle1(j)
{
document.getElementById(j).style.background="#99CC33";
document.getElementById(j).style.color="pink";
document.getElementById(j).style.textShadow="0px 0px 0px";
}
</script>
</body>
</html>
