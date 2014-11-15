<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>CWT</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="css/mainpage.css" media="screen" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="javascript/scripts.js"></script>
	<script type="text/javascript" src="javascript/jquery-1.3.2.js"></script>
</head>

<body>
	<?php require("includes/header.php"); ?>
	
	<div id="content">
		<div id="content-boxes">
			<div id="contentbox1">
				<a href="">
					<h4>Lorem Ipsum is simply dummy text</h4>
					<img src="images/contentbox.jpg" width="275px" height="115px" />
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</a>
			</div>
			<div id="contentbox2">
				<a href="">
					<h4>Lorem Ipsum is simply dummy text</h4>
					<img src="images/contentbox.jpg" width="275px" height="115px" />
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</a>
			</div>
			<div id="contentbox3">
				<a href="">
					<h4>Lorem Ipsum is simply dummy text</h4>
					<img src="images/contentbox.jpg" width="275px" height="115px" />
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
				</a>
			</div>
		</div>
		<div id="news">
			<img id="left" src="images/arrow-left.png" width="22px" height="26px" />
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text...</p>
			<img id="right" src="images/arrow-right.png" width="22px" height="26px" />
		</div>
	</div>
	
	<?php require("includes/footer.php"); ?>
	
	<script type="text/javascript">
	$(document).ready(function(){
		$('#b1').hover(function() {
			$('#products').show();
			$('#b-products').addClass("selected");
		}
		,function() {
		$('#products').hide();
		});
		
		$('#b2').hover(function() {
			$('#vsat').show();
		}
		,function() {
		$('#vsat').hide();
		});
		
		$('#b3').hover(function() {
			$('#clients').show();
		}
		,function() {
		$('#clients').hide();
		});
		
		$('#b4').hover(function() {
			$('#support').show();
		}
		,function() {
		$('#support').hide();
		});
		
		$('#b-products').click(function(){
			$('#sub-products').show();
			$('#sub-services').hide();
			$('#sub-solutions').hide();
		});
		
		$('#b-services').click(function(){
			$('#sub-products').hide();
			$('#sub-services').show();
			$('#sub-solutions').hide();
		});
		
		$('#b-solutions').click(function(){
			$('#sub-products').hide();
			$('#sub-services').hide();
			$('#sub-solutions').show();
		});
	});
	</script>
	
</body>

</html>