<?php get_template_part('templates/page', 'header'); ?>
<div class="container-fluid" id="about" class="32">
	<p>The New England VegFest is a free festival that brings the local community together to celebrate vegetarianism: an animal-friendly, environmentally sustainable, and healthy lifestyle.</p>
</div>
<div id="features">
	<div class="box">
		<p>Free Admission</p>
		<img src="/app/themes/nevegfest/assets/img/icon-FreeAdmission.png" alt="" />
	</div>
	<div class="box">
		<p>Free Food</p>
		<img src="/app/themes/nevegfest/assets/img/icon-FreeFood.png" alt="" />
	</div>
	<div class="box">
		<p>100% Vegan</p>
		<img src="/app/themes/nevegfest/assets/img/icon-vegan.png" alt="" />
	</div>
	<div class="box">
		<p>Incredible Speakers</p>
		<img src="/app/themes/nevegfest/assets/img/icon-Speakers.png" alt="" />
	</div>
	<div class="box">
		<p>Cooking Demos</p>
		<img src="/app/themes/nevegfest/assets/img/icon-CookingDemos.png" alt="" />
	</div>
	<div class="box">
		<p>Kid's Activities</p>
		<img src="/app/themes/nevegfest/assets/img/icon-Kids.png" alt="" />
	</div>
	<div class="box">
		<p>Animal Advocacy</p>
		<img src="/app/themes/nevegfest/assets/img/icon-nonprofit.png" alt="" />
	</div>
	<div class="box">
		<p>Veg Restaurants</p>
		<img src="/app/themes/nevegfest/assets/img/icon-restaurants.png" alt="" />
	</div>
	<div class="box">
		<p>Local Businesses</p>
		<img src="/app/themes/nevegfest/assets/img/icon-VegBiz.png" alt="" />
	</div>
	<div class="box">
		<p>Raffle Prizes</p>
		<img src="/app/themes/nevegfest/assets/img/icon-prizes.png" alt="" />
	</div>
</div>
<div class="slideshow">
	<ul>
		<li><img src="/app/themes/nevegfest/assets/img/attendees.jpg" alt="" />
		<li><img src="/app/themes/nevegfest/assets/img/home-bbq2.jpg" alt="" />
		<li><img src="/app/themes/nevegfest/assets/img/icecream-kid.jpg" alt="" />
		<li><img src="/app/themes/nevegfest/assets/img/go-vegan.jpg" alt="" />
		<li><img src="/app/themes/nevegfest/assets/img/cookies.jpg" alt="" />
	</ul>
</div>
<img src="/app/themes/nevegfest/assets/img/bw-people.png" alt="VegFest Attendees" class="fullwidth" />
<div id="testimonial" class="32">
	<div class="container-fluid">
		<p class="alignleft">"VegFest is one of the best events in the city! It combines education about compassionate practices, along with wonderful vendors who promote animal welfare, vegetarian and vegan living, in a festive and warm atmosphere. And the food is great too!"</p>
		<p class="alignright">-Tina Zlody, Co-Founder of stART on the Street</p>
	</div>
</div>
<div class="break" id="food"></div>
<div id="sponsors">
	<h2>Our Sponsors</h2>
	<div class="col-xs-12" id="gold">
		<h3>Gold Partners</h3>
		<img src="/app/themes/nevegfest/assets/img/sponsor-logos/SpiritOfChange.png" alt="Spirit Of Change" />
		<img src="/app/themes/nevegfest/assets/img/sponsor-logos/WorcesterMag.png" class="square" alt="Worcester Magazine" />
	</div>
<!--	<div class="col-xs-12" id="silver">
		<div class="container-fluid">
			<h3>Silver Partners</h3>
			<img src="/app/themes/nevegfest/assets/img/sponsor-logos/motive-company.png" alt="Motive Company" />
		</div>
	</div>
	<div class="col-xs-12" id="bronze">
		<h3>Bronze Partners</h3>
		<img src="/app/themes/nevegfest/assets/img/sponsor-logos/LovingHut.png" alt="Loving Hut" />
	</div>-->
</div>
			<script type="text/javascript" src="//maps.google.com/maps/api/js?sensor=false"></script>
			<div style="overflow:hidden;height:360px;width:100%;"><div id="gmap_canvas" style="height:360px;width:100%;"></div>
			<style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
			<script type="text/javascript"> function init_map(){var myOptions = {draggable:false,zoom:8,center:new google.maps.LatLng(37.7990182,-122.2629028),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(37.7990182,-122.2629028),icon: '//newenglandvegfest.com/app/themes/nevegfest/assets/img/nevf-map.png'});infowindow = new google.maps.InfoWindow({content:"<b>Oakland VegFest @Lake Merritt Amphitheater</b><br/>Between 12th St & 1st Ave on Lake Merritt Blvd<br/> Oakland, CA<br/><a href='https://www.google.com/maps/place/Lake+Merritt+Amphitheater/@37.7990182,-122.2629028,17z/data=!3m1!4b1!4m2!3m1!1s0x808f873433e19613:0x42896152be34d0d4' target='_blank'>Directions</a>" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});}google.maps.event.addDomListener(window, 'load', init_map);</script>

<?php get_template_part('templates/content', 'page'); ?>
