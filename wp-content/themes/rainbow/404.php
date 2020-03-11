<?php

get_header();
?>
<div class="block-404">
	<div class="container">
		<div class="row">
			<div class="col-md-6 col-xs-12">
				<img src="<?= get_template_directory_uri()  ?>/assets/img/404.png" alt="404" class="img-responsive">
			</div>
			<div class="col-md-6 col-xs-12">
				<h1>Oops! Không tìm thấy trang này.</h1>
				<a href="<?= home_url() ?>" class="back-home">Về trang chủ</a>
				
				<p>Chúng tôi không tìm thấy nội dung bạn cần tìm. Vui lòng tìm kiếm bài viết khác hoặc quay lại trang chủ!</p>
				<div class="search-404">
				<form action="<?= home_url() ?>">
					<input type="text" name="s" placeholder="Nhập từ khóa">
					<input type="hidden" name="post_type" value="post">
					<button type="submit" ><i class="fa fa-search"></i></button>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
	$args = [
			'post_type'      => 'post',
			'posts_per_page' => 3,
			'orderby'        => 'date',
			'order'          => 'DESC'
	];
	$newPosts = new WP_Query( $args );

		// The Loop
		if ($newPosts->have_posts()):
?>			
<div class="block-news">
	<div class="container">
		<div class="block-title">
			<h2>Bài viết mới</h2>
		</div>
	
		<div class="row">
			<?php
						
				while ($newPosts->have_posts()):
					$newPosts->the_post();
			?>
			<div class="col-md-4 col-xs-12">
				<div class="post-item">
					<div class="post-image">
						<a href="<?php the_permalink() ?>">
							<?php the_post_thumbnail('post-thumbnail', ['class'=>'img-responsive']) ?>
						</a>
					</div>
					<div class="post-text">
						<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
						<div class="excerpt"><?php the_excerpt() ?></div>
					</div>
				</div>
			</div>
			<?php
			endwhile;
			wp_reset_postdata();
			?>
		</div>
	</div>
</div>
<?php endif; ?>	
<?php get_footer(); ?>