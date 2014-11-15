<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<title>CWT</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<link href="css/styles.css" media="screen" rel="stylesheet" type="text/css" />
	<script type="text/javascript" src="javascript/scripts.js"></script>
	<script type="text/javascript" src="javascript/jquery-1.3.2.js"></script>
</head>

<body>
	<?php require("includes/menubar.php"); ?>
	
	<div id="content">
		<div id="content-elements">
			<?php require("includes/services-sidebar.php"); ?>
			<div id="main-content">
				<h1>Technology Platforms</h1>
				<p><img src="images/technologyplatforms.jpg" width="166px" height="105px" alt="technology platforms" />CWT currently deploys a range of VSAT based and Enterprise Wireless technology compatible service platforms. Each solution is specially tailored to the needs of the customer, application and geographical location.</p>
				<p>We continuously complement our platforms with additional equipment to suit customers’ requirement especially for industries extremely located very remotely.
				<br/>Mobile in-land or maritime applications that include the following:</p>
				<ul class="content">
					<li>Automatic self-pointing and aligning antennas for vehicle or movable rigs case deployment business-grade service</li>
					<li>Maritime VSAT antennas for private yacht and ships applications</li>
					<li>Point to point and Point to multipoint WiLan & Wimax last mile wireless extensions</li>
					<li>Video surveillance for security purposes</li>
					<li>Multiplexers, routers and switches for LAN/WAN applications</li>
					<li>Optimization, Qos and IP Traffic Acceleration</li>
				</ul>
			</div>
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