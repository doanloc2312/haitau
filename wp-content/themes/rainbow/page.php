<?php

get_header();
?>
<div class="service-banner text-center" style="background-image: url(<?= get_field('banner')?>)">
	<div class="box-service-banner">
		<div class="container">
			<h1 class="service-title"><?php the_title() ?></h1>
			<?php
				if ( function_exists('yoast_breadcrumb') ) {
				  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
				}
				?>
		</div>
	</div>
</div>
<div class="entry-content page-content">
	<div class="container">
		<?php the_content() ?>
	</div>
</div>


<?php get_footer(); ?>