<?php

?>
<html>
    <head>
        <title>Harvey Fletcher DJ | HOME</title>
		<link rel="stylesheet" href="main.css" type="text/css" />
    </head>
    <body>
		<div class="obscurity">&nbsp;</div>
		<div class="logoContainer">
			<img class="logo" src="/images/logo.png" />
		</div>
		<div class="buttons" align="center">
			<div class="button" onmouseover="recordSpin( this );" id="home_button">
				<img src="/images/record_small_1.png" class="small_button_icon" id="home_button_img"/><h1 class="inline buttonText">Homepage</h1>
			</div>
		</div>
		<div class="links">
			&nbsp;
		</div>
		<div class="content">
			&nbsp;
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script type="text/javascript">
		    var buttonHover = true;
		
		    function recordSpin( event ){
				console.log(buttonHover);
				
				var id = event.getAttribute("id");
				var button = $('#' + id);
				var image = $('#' + id + "_img" );
				
				image.attr('src', '/images/record_small_2.png');
				
				var x = setTimeout(function(){
					image.attr('src', '/images/record_small_1.png');
				}, 500);
			}
		</script>
    </body>
</html>
