<div class="page-header">
  <h1>
	  <a href="/"><img itemprop="logo" src="/app/themes/nevegfest/assets/img/logo-white.png" alt="New England VegFest" /></a>
  </h1>
		<?php if (is_front_page()) { ?>
			<div class="ctas">
				<!-- <a class="cta" href="//www.facebook.com/events/818240381635344/" target="_blank"><i class="fa fa-facebook-square"></i> RSVP</a> -->
        <a class="cta red" href="//www.youtube.com/watch?v=kAU7N_8fqLc" target="_blank"><i class="fa  fa-youtube-square"></i> Watch our video</a>
				
			</div>
			<h2>Saturday May 19, 2018 &middot; 11AM-5PM &middot; Oakland, CA</h2>
		<?php } else { ?>
			<h2><?= the_title(); ?></h2>
		<?php } ?>
</div>
