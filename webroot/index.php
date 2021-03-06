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
			<div class="button" onmouseover="recordSpin( this );" id="home_button" onclick=" window.location.replace('index.php') ">
				<img src="/images/record_small_1.png" class="small_button_icon" id="home_button_img" /><h1 class="inline buttonText">Homepage</h1>
			</div>
			<div class="button" onmouseover="recordSpin( this );" id="enquiry_button" onclick=" window.location.replace('enquiry.php') ">
				<img src="/images/record_small_1.png" class="small_button_icon" id="enquiry_button_img"/><h1 class="inline buttonText">Make Enquiry</h1>
			</div>
		</div>
		<div class="links">
			&nbsp;
		</div>
		<div class="content">
			
		</div>
		<div class="contentNoBlur">
			<b>Hi there!</b><br />
			My name is Harvey, and I am a mobile DJ based in Newbury, Berkshire. If you're in need of someone to bring amazing entertainment to your party or event, I'm your guy!
			<br /><br />
			<img src='/images/image_of_setup.png' style='width: 400px; float: left; display: inline;' alt='image of my set up'/>
			<div style='float: left; margin-left: 20px; width: calc( 95% - 400px ); auto; display: inline;'>
				I've got the sound system to keep the tunes coming, the lights and a requests board, so I know what your guests want to hear played.
				<br /><br />
				My setup is portable, so I can travel to almost anywhere in the south of England, last year I travelled to Yeovil to DJ at the Yeovil Rugby Club Christmas Party.
				<br /><br />
				So if it's a birthday, wedding or any other kind of celebration that you need a disc jockey for, please get in touch with me on<br />0751 174 9870 or use the enquiry form on the website.
			</div>
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
