<?php
switch($page){
	case 'main':
	 echo <<<HH
<script src="slider/jquery.bxslider.min.js"></script>
<script>
	$(document).ready(function() {
		 $('.bxslider').bxSlider({
			adaptiveHeight: true,
			speed: 900,
			pager: false,
			auto: true
		  });
	});
</script>
<link href="slider/jquery.bxslider.css" rel="stylesheet" />
HH;
	 break;
    case 'order':
	    echo <<<HH
<link rel="stylesheet" type="text/css" href="styles/select.css" />
<script type="text/javascript" src="js/select.js"></script>
<script type="text/javascript" src="js/jquery.maskedinput-1.2.2.js"></script>

<script type="text/javascript">
	jQuery(function($) {
		$.mask.definitions['~']='[+-]';
		$('#phone').mask('+7-999-999-99-99');
	});
</script>
HH;
	    break;
}
if(preg_match('/slushatel/',$page)){
	echo <<<HH
<script src="slider/jquery.bxslider.min.js"></script>
<script>
	$(document).ready(function() {
		 $('.bxslider').bxSlider({
			speed: 900,
			auto: true
		 });
	});
</script>
<link href="styles/jquery.bxslider.pure.css" rel="stylesheet" />
HH;
}