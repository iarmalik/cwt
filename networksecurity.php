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
				<h1>Network Security</h1>
				<p>Enterprise network security ultimately comes to this bottom line: A business network should be available exclusively for legitimate business use.</p>
				<p>By that definition, network security covers everything from intrusion detection to monitoring employees' use of the Internet. But whatever your network security requirements, CWT will create the solution that's right for your business. Engineering expertise, world-class technologies, and broad experience in deploying all kinds of networks give CWT the edge in creating and maintaining secure end-to-end networking solutions.</p>
				<p>As a technology partner of leading network equipment manufacturers whose engineers have achieved the highest possible level of certification, CWT is ideally suited to design, obtain, deploy, and manage your security-related network infrastructure.</p>
				<p>Other network security solutions available from CWT and our technology partners include:</p>
				<ul class="content">
					<li>Virtual Private Networks (VPNs) secured using SSL and IPsec</li>
					<li>End-to-End Internet security solutions using technology from companies like Cisco, Juniper, Pointsec, Networks Defender, Engage Communications, Blue Socket, Airaya etc.</li>
				</ul>
				<p>For an assessment of your enterprise security needs and a detailed description of how CWT can secure your business network, please <a href="contacts.php">contact us</a>.</p>
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