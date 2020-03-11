<?php
/*
Template Name: Trang chủ
*/
get_header();
?>
<?php
	$blockOne = get_field('block-1');
	if($blockOne):
?>
<div class="section-1">
	<div class="container">
		<div class="row">
			<?php foreach ($blockOne as $one):?>
			<div class="col-md-6 col-xs-12">
				<div class="box-icon text-center">
					<div class="icon">
						<div><img src="<?= $one['icon'] ?>" alt="<?= $one['title'] ?>"></div>

					</div>
					<div class="text">
						<h3><?= $one['title'] ?></h3>
						<p><?= $one['content'] ?></p>
						<a href="<?= $one['url'] ?>" class="more">Xem chi tiết</a>
					</div>
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php
	$blockTwo = get_field('block-2');
	if($blockTwo):
?>
<div class="section-2">
	<div class="container">
		<h2 class="block-title text-center"><?= $blockTwo['title'] ?></h2>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="block-desc text-center"><?= $blockTwo['desc'] ?></div>
			</div>
		</div>
		<?php $icons = $blockTwo['icons']; ?>
		<?php foreach ($icons as $key => $icon):?>
				<div class="box-icon text-center box-icon-<?= $key ?>">
					<div class="icon">
						<div>
							<img src="<?= $icon['icon'] ?>" alt="<?= $icon['title'] ?>">
						</div>

					</div>
					<div class="text">
						<h3><?= $icon['title'] ?></h3>
						<p><?= $icon['content'] ?></p>
					</div>
				</div>
			
			<?php endforeach; ?>
	</div>
</div>
<?php endif; ?>

<?php
	$blockThree = get_field('block-3');
	if($blockThree):
?>
<div class="section-3">
	<div class="container">
		<div class="row">
			<?php foreach ($blockThree as $three):?>
			<div class="col-md-3 col-xs-12">
				<div class="box-image">
					<img src="<?= $three['url'] ?>" alt="<?= $three['title'] ?>">
				</div>
			</div>
			<?php endforeach; ?>
		</div>
	</div>
</div>
<?php endif; ?>

<?php
	$blockFour = get_field('block-4');
	if($blockFour):
?>
<div class="section-4">
	<div class="container">
		<h2 class="block-title text-center"><?= $blockFour['title'] ?></h2>
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="block-desc text-center"><?= $blockFour['desc'] ?></div>
			</div>
		</div>
		<div class="row">
		<?php $icons = $blockFour['icons']; ?>
		<?php foreach ($icons as $key => $icon):?>
			<div class="col-md-4 col-xs-6">
				<div class="box-icon text-left">
					<div class="icon">
						<div>						
							<img src="<?= $icon['icon'] ?>" alt="<?= $icon['title'] ?>">
						</div>
					</div>
					<div class="text">
						<h3><?= $icon['title'] ?></h3>
						<p><?= $icon['content'] ?></p>
					</div>
				</div>
			</div>
		<?php endforeach; ?>
		</div>
	</div>
</div>
<?php endif; ?>
<?php
	$blockFive = get_field('block-5');
	if($blockFive):
?>
<div class="section-5">
	<div class="container">
		
		<div class="row">
			<div class="col-md-4 col-xs-12">
				<h2 class="block-title text-left"><?= $blockFive['title'] ?></h2>
				<div class="block-desc text-left"><?= $blockFive['desc'] ?></div>
			</div>
			<div class="col-md-8 col-xs-12">
				<div id="testimonial-slider">
				<?php 
					$testimonials = $blockFive['testimonials'];
					if($testimonials):
						foreach ($testimonials as $testimonial):?>
						
							<div class="item">
								<div class="box-cmt">
									<img class="avt" src="<?= $testimonial['img'] ?>" alt="<?= $testimonial['name'] ?>">
									<h4 class="name"><?= $testimonial['name'] ?></h4>
									<div class="cmt">"<?= $testimonial['comment'] ?>"</div>
								</div>
							</div>
						
						<?php endforeach; ?>
					<?php endif; ?>	
				</div>	
			</div>
		</div>
		
	</div>
</div>
<?php endif; ?>

<div class="section-6">
	<h3 class="block-title">Tin tức</h3>
	<div class="container">
				<?php
					$args = [
							'post_type'      => 'post',
							'posts_per_page' => 3,
					];
					$newPosts = new WP_Query( $args );

						// The Loop
						if ($newPosts->have_posts()):
				?>		
				<div class="row">
					<?php
						while ($newPosts->have_posts()):
							$newPosts->the_post();
					?>
					<div class="col-md-4 col-xs-12">
						<div class="post-item">
							<div class="box-image">
								<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
								<div class="post-date text-center">
									<div class="day"><?php the_time('d') ?></div>
									<div class="month"><?php the_time('M') ?></div>
								</div>
							</div>
							<div class="box-text">
								<h3 class="post-title">
									<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
								</h3>
								<div class="sapo"><?= wp_trim_words(get_the_excerpt(), 20 ,'...') ?></div>
								<a href="<?php the_permalink() ?>" class="more">Đọc thêm <i class="fa fa-angle-right"></i></a>
							</div>
						</div>
					</div>
					
					<?php endwhile; ?>
					<?php wp_reset_postdata(); ?>
				</div>
				<?php endif; ?>	
		</div>
	</div>
</div>
<?php get_footer(); ?>

