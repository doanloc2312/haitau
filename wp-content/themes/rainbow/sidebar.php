<div class="block-sidebar">
	<div class="sidebar-title">
		<h3>Dịch vụ</h3>
	</div>
	<?php
		$args = [
				'post_type'      => 'dich-vu',
				'posts_per_page' => -1,
				'orderby'    => 'menu_order',  /* this will look at the meta_key you set below */					
				'order'      => 'ASC',	
		];
		$services = new WP_Query( $args );

			// The Loop
			if ($services->have_posts()):
	?>			
	<ul class="sidebar-services">
		<?php
					
			while ($services->have_posts()):
				$services->the_post();
		?>
			<li><a href="<?php the_permalink() ?>"><?php the_title() ?></a></li>					
		<?php
		endwhile;
		wp_reset_postdata();
		?>
	</ul>
	<?php endif; ?>	
</div>