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
			<div class="left">
				<div id="products-title">
					<h1 class="main-title">Products</h1>
				</div>
				<p>Ruckus technologies offer unmatched simplicity, ridiculous reliability, and killer coverage at a fraction of the cost of alternatives. Industrial-strength Smart Wireless LAN products for enterprise systems eliminate cost and complexity, while delivering unprecedented performance and reliability.</p>
				<h3>The Components of Ruckus Networks</h3>
				<p>Indoor, outdoor, meshed, video, voice, data, 802.11n, 802.11a, 802.11g-take your pick. Everything you need is uniformly managed as a single, centralized Wireless LAN with ZoneDirector. Or you can manage thousands of standalone APs or ZoneFlex wireless LANs remotely with FlexMaster. Ruckus Smart WiFi products support even the most rigid, latency-sensitive applications-offering carrier-level quality and ironclad security to enterprises and service providers everywhere.</p>
				<ul class="content">
					<li><strong>Central Management</strong> - The Ruckus ZoneDirector provides secure centralised control</li>
					<li><strong>Triple Play Ready</strong> - Smart antennas and QoS support voice, video and data traffic</li>
					<li><strong>Simple To Use</strong> - easy wizard and menu driven interfaces for ease of use</li>
					<li><strong>Industry Standard Security</strong> - Up to WPA2/AES with integration to Active Directory and Radius </li>
					<li><strong>Mesh Enabled</strong> - support for mesh where Ethernet is not available </li>
					<li><strong>Real Time Management</strong> - the ZoneDirector automatically manages RF channel and power </li>
					<li><strong>Multiple SSIDs</strong> - including advanced features such as controlled Guest access </li>
					<li><strong>Dynamic PSK</strong> - Per user key removes the major limitation of this type of security</li>
					<li><strong>Limited Lifetime Warranty</strong> - warranty on all internal equipment </li>
				</ul>
				<a class="learnmore" href="products.php">Read More</a>
			</div>
			<div class="right">
				<div id="services-title">
					<h1 class="main-title">Services</h1>
				</div>
				<p>
					<h3>Technology Platforms</h3>
					<p>CWT currently deploys a range of VSAT based and Enterprise Wireless technology compatible service platforms. Each solution is specially tailored to the needs of... <a class="learnmore" href="technologyplatforms.php">Read More</a></p>
				</p>
				<p>
					<h3>VSAT</h3>
					<p>A Very Small Aperture Terminal (VSAT) is a subsystem device that is used to communicate with distant Hub or another VSAT by bouncing signals off a satellite located in... <a class="learnmore" href="vsat.php">Read More</a></p>
				</p>
				<p>
					<h3>Network Security</h3>
					<p>Enterprise network security ultimately comes to this bottom line: A business network should be available exclusively for legitimate business use... <a class="learnmore" href="networksecurity.php">Read More</a></p>
				</p>
				<p>
					<h3>Network Optimization</h3>
					<p>Our network optimization practice is based on a simple principle: A healthy network is tuned to deliver precisely what a business needs... <a class="learnmore" href="">Read More</a></p>
				</p>
				<p>
					<h3>Wireless Enterprise</h3>
					<p>CWT Wireless Enterprise offers solutions and services to companies within the entire range of the enterprise value chain within the GCC countries; from technical consultancy, system... <a class="learnmore" href="">Read More</a></p>
				</p>
				<p>
					<h3>Last Mile Solutions</h3>
					<p>Over the past years, CWT acquired the ability to integrate, and install "off the self" commercial broadband wireless transport products for IP applications. This allows us to provide "last mile... <a class="learnmore" href="">Read More</a></p>
				</p>
				<p>
					<h3>LAN / WAN Solutions</h3>
					<p>Network infrastructure starts with Local Area Network - your LAN. No matter what applications your business runs, the core LAN must be designed for high speed, extreme reliability, and ease... <a class="learnmore" href="">Read More</a></p>
				</p>
				<p>
					<h3>VOIP / Video Conferencing / IPTV</h3>
					<p>Advancement in IP technology provides solutions allowing enterprises to design networks that simultaneously support data, voice, and video traffic... <a class="learnmore" href="">Read More</a></p>
				</p>
				<p>
					<h3>Leasing</h3>
					<p>Leasing allows your organization to run smoothly towards expansion with the latest and most efficient equipment and software. An initial discovery... <a class="learnmore" href="">Read More</a></p>
				</p>
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