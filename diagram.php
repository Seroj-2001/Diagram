<!DOCTYPE html>
<html>
<head>
	<title>Diagram</title>
	<style type="text/css">
		html,body {
			height: 100%;
			margin: 0;
			font-family: verdana;
			width: 820px;
			background-color: black;
		}
		.d {
			width: 400px;
			height: 300px;
			float: left;
			background-color: black;
			margin: 1px;
		}
		.a {
			color: white;
			font-size: 20px;
			font-weight: bold;
			line-height: 60px;
			text-align: right;
		}
		.a span {
			display: block;
			width: 30px;
			height: 30px;
			margin: 15px;
			float: right;
		}
		.c1 { background-color:purple; }
		.c2 { background-color: orange; }
		.c3 { background-color: darkred; }
		.c4 { background-color: teal; }
		.c5 { background-color: green; }
		#d2 div, #d3 div {
			width: 20%;
			float: left;
			text-align: center;
			line-height: 30px;
			font-size: 24px;
			color: white;
			font-weight: bold;
			position: relative;
		}


.b1 {
  background: 
    conic-gradient(green 8%, 
      purple 0 20%, 
      orange 0 45%,
      teal 0 80%,
      darkred 0 100%,
        white 0
    );
height: 250px;
    width: 250px;
    border-radius: 100%;
    position: absolute;
    top:350px;
    left:500px;
}
            
        


            
         
	</style>
</head>
<body>
<?php
$p1 = 40;
$p2 = 60;
$p3 = 50;
$p4 = 95;
$p5 = 25;

$sum = $p1+$p2+$p3+$p4+$p5;
$per = $sum/100; // 1 % @ qani miavora

$t1 = $p1/$per;
$t2 = $p2/$per;
$t3 = $p3/$per;
$t4 = $p4/$per;
$t5 = $p5/$per;
?>
<div id="d1" class="d">
	<div class="a"><span class="c1"></span>HTML (<?=$p1?>)</div>
	<div class="a"><span class="c2"></span>CSS (<?=$p2?>)</div>
	<div class="a"><span class="c3"></span>JavaScript (<?=$p3?>)</div>
	<div class="a"><span class="c4"></span>PHP (<?=$p4?>)</div>
	<div class="a"><span class="c5"></span>SQL/MySQL (<?=$p5?>)</div>
</div>
<div id="d2" class="d">
<div class="c1" style="margin-top:<?php echo (100-$p1)*3; ?>px; height:<?php echo $p1*3; ?>px"><?=$p1?></div>
<div class="c2" style="margin-top:<?php echo (100-$p2)*3; ?>px; height:<?php echo $p2*3; ?>px"><?=$p2?></div>
<div class="c3" style="margin-top:<?php echo (100-$p3)*3; ?>px; height:<?php echo $p3*3; ?>px"><?=$p3?></div>
<div class="c4" style="margin-top:<?php echo (100-$p4)*3; ?>px; height:<?php echo $p4*3; ?>px"><?=$p4?></div>
<div class="c5" style="margin-top:<?php echo (100-$p5)*3; ?>px; height:<?php echo $p5*3; ?>px"><?=$p5?></div>
</div>
<div id="d3" class="d">
	<div class="c1" style="top:<?php echo (100-$t1); ?>%; height:<?php echo $t1; ?>%"><?=round($t1)?>%</div>
	<div class="c2" style="top:<?php echo (100-$t2); ?>%; height:<?php echo $t2; ?>%"><?=round($t2)?>%</div>
	<div class="c3" style="top:<?php echo (100-$t3); ?>%; height:<?php echo $t3; ?>%"><?=round($t3)?>%</div>
	<div class="c4" style="top:<?php echo (100-$t4); ?>%; height:<?php echo $t4; ?>%"><?=round($t4)?>%</div>
	<div class="c5" style="top:<?php echo (100-$t5); ?>%; height:<?php echo $t5; ?>%"><?=round($t5)?>%</div>
</div>
<div id="d4">
    <div class="b1"></div>
    
    </div>



</body>
</html>