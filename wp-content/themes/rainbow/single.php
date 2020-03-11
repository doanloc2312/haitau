<?php
get_header();
?>
<?php
	$category = get_the_category();
	$firstCategory = $category[0]->cat_name;
?>
<div class="page-banner blog-banner" style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/sample-category.jpg)">
    <div class="box-text-banner">
        <div class="container">
            <h1 class="service-title"><?= $firstCategory ?></h1>
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                  yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
        </div>
    </div>
</div>
<div class="blog_page_section"> 
    <div class="container"> 
        <div class="row">   
            <div class="right-content col-md-8 nopd-right">
               <div class="main-content">
               		<h1 class="entry-title"><?php the_title() ?></h1>
					<div class="post-item__pub">
						<span><?php the_time('d/m/Y') ?></span>
						<span><i class="fa fa-eye"></i> 164</span>
					</div>
					<div class="entry-content">
						<?php the_content() ?>
					</div>
               </div>
                
            </div>
            <div class="left-content col-xs-12 col-md-4 ">
                <?php dynamic_sidebar('blog-sidebar') ?>
               
            </div>
        </div>
    </div>
</div>



<?php
get_footer();
?>

