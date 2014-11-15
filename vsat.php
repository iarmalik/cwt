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
				<h2>VSAT</h2>
				<p>A Very Small Aperture Terminal (VSAT) is a subsystem device that is used to communicate with distant Hub or another VSAT by bouncing signals off a satellite located in geostationary orbit above the earth. "VSAT hubs" are large (often 9 meters or larger) dishes equipped with sophisticated network management and control, transmit and receive equipment that the network provider operates for the terminals to communicate with.</p>
				<p>VSAT terminals" are the satellite modem/router and small generally between 0.75 meter and 1.2 meters dishes operating at a remote customer's location. Satellite networks transmit and receive data via high-frequency radio waves in the (Ku band or C band) bounced off a satellite in orbit, providing a single point continent-wide wireless, or big cell-like spot connectivity footprint.</p>
				<p>VSAT networks are designed in a star topology, with customer locations connecting directly over the air via satellite to a central “hub” facility. The equipment at a customer site is a VSAT modem/router, attached to a small dish mounted on top of or outside the building. At the central hub facility, a large dish and sophisticated hub RF components receive and transmit to the remote sites, and route information to and from the Internet or private networks via leased line connected to the IP backbone.</p>
				<p>VSAT networks can be used for internet access, or they can be connected from the hub facility directly to a corporate data center or application provider such as the point of sale credit card authorization provider. VSAT networks may have anywhere from one to tens of thousands of remote VSATs communicating with a single hub.</p>
				<p>Satellite Connectivity.  Satellite network services are available virtually anywhere, and provide a wireless, physically diverse connectivity path. Satellite networks are the preferred transport method for the real multicast data distribution, and are available in broadband speed configurations.</p>
				<p>Strength and Weaknesses of VSAT.  VSAT is used for many applications including Internet/intranet access, E-mail and messaging, VoIP, consumer store polling and inventory updates, distance learning, video surveillance & security, live video conferencing, IPTV etc. In-store music and picture messaging, digital signage, credit processing, and network disaster recovery backup.</p>
				<p>VSAT may not be the best choice in some situations involving latency-sensitive applications. The VSAT to the satellite slant range takes about quarter of a second for the signal to make the trip to the satellite and back. In spite of the remoteness of our customers, rendering them no other choice, they report no problems with performance of their applications.</p>
				<p>Certain encryption technologies typically are not compatible off the shelf with VSAT acceleration technologies. CWT has found solutions from many of these available technologies requiring no special setup, and are guaranteed and tested to be compatible in the VSAT implementations.</p>
				<p>While the price versus performance equation of VSAT services have improved dramatically over the past several years, business grade services is still not at the same level of absolute low costs as consumer-grade DSL or cable modem services. CWT services are priced very competitively, but customers should not expect the same pricing as the local phone company or cable ISP offers for residential-grade broadband with no equipment costs. Contact us to find out more about pricing for our business-grade services.</p>
				
				<h4>Advantages of VSAT satellite networks include:</h4>
				<ul>
					<li><strong class="adv">Availability anywhere -</strong> Remote areas out of reach and unserviceable by telephone/cable infrastructure, VSAT networks use wireless links to satellites in geostationary orbit over the equator. Therefore, they can get broadband access from essentially anywhere that there is a view or within the satellite footprint - from cities to mountaintops.</li>
					<li><strong class="adv">Business-grade service -</strong> CWT services deliver uptime and throughput similar to SDSL or Frame Relay circuits.</li>
					<li><strong class="adv">Versatile multicast support -</strong> The DVB outbound of CWT VSAT services is multicast medium, making it the perfect solution for distributing data, files, video and more with electronic delivery receipts and immediate distribution.</li>
					<li><strong class="adv">Mobile VSAT services -</strong> CWT offers portable mobile VSAT solutions that can be mounted on vehicles or deployed rapidly in fixed locations. Oil rigs or other businesses with frequent location movement can take their VSAT service from one location and have it installed at another when required.</li>
					<li><strong class="adv">Uniform service levels -</strong> Unlike DSL where the speed and service availability are dictated by the type of infrastructure and distance from the Telco Central Office, VSAT offers the ability to deliver the exact same speed and service level to every single point of your locations.</li>
					<li><strong class="adv">Network management -</strong> The star topology architecture of VSAT networks, allows CWT to control the entire network centrally at any remote place. This means that we can provide firewalling, virus scanning, intrusion detection, network management and more for an entire customer network.</li>
					<li><strong class="adv">Scalability -</strong> VSAT networks scale easily from a several sites to more than thousand locations.</li>
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