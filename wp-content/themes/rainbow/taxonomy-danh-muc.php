<?php
get_header();
?>
<style>
    #main-menu li.mega-menu>a{
        color: #ff5d00;
    }
</style>
<div class="theme-banner text-center">
    <div class="box-theme-banner">
        <div class="container">
            <h1>Thiết kế website bán hàng, web doanh nghiệp</h1>
            <h3>Tất cả các giao diện mẫu <span>đa dạng, chuyên nghiệp</span> <br class="hidden-xs">dành cho website của bạn</h3>
            <div class="row">
               <div class="col-md-6 col-md-offset-3">                
                    <form action="/search">
                        <div class="filter-form">
                            <input type="text" placeholder="Bạn tìm giao diện gì?" name="key" class="search-key">
                            <button type="submit"><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </form>                
               </div>
            </div>
        </div>  
    </div> 
</div>

<div class="theme-page">
	<div class="container">
		<h2 class="theme-page-title text-center"><?= single_cat_title() ?></h2>
        <div class="row">
            <div class="col-md-8 col-xs-12 col-md-offset-2">
                <div class="tax-theme-desc">
                    <?php echo term_description() ?>
                </div>
            </div>
        </div>
            <?php if ( have_posts() ) : ?>
            <div class="row">
			<?php     
	                    
                while ( have_posts() ) :
                    the_post();
                ?>
                    <div class="theme-item col-lg-3 col-md-3 col-sm-4 col-xs-6 product-loop-mb fixheight">
						<div class="image" style="height: 336px;">
							<a class="loop-img" href="<?php the_permalink() ?>" title="Mẫu website <?php the_title() ?>">
								<?php the_post_thumbnail('post-thumbnail',['class'=>'img-responsive']) ?>
							</a>
						</div>
						<div class="details">
							<a href="<?php the_permalink() ?>" class="clearfix">
								<h3 class="title">
									<?php the_title() ?>
								</h3>
							</a>
							<div class="actions">
								<a class="btn-proloop view-all" target="_blank" href="<?php the_permalink() ?>">CHI TIẾT</a>	
								<a class=" btn-proloop view-demo" name="add" href="<?= home_url('demo') ?>?page=<?= get_post_field('post_name') ?>" target="_blank">XEM THỰC TẾ</a>
							</div>	
						</div>
					</div>
                <?php
                endwhile;
            
                
            ?>
            <div class="clear"></div>
                 <?php wp_pagenavi( );  ?>	                
	       </div>
	       <?php
	           endif;
	       ?>
	</div>
</div>
      
<?php get_footer(); ?>