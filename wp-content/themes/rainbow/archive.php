<?php
get_header();
?>
<div class="page-banner blog-banner" style="background-image: url(<?= get_template_directory_uri() ?>/assets/img/sample-category.jpg)">
    <div class="box-text-banner">
        <div class="container">
            <h1 class="service-title"><?= single_cat_title() ?></h1>
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
                <?php if ( have_posts() ) : ?>
                <div class="list-blogs blog-main page-blog">
                    <div class="news-group">
                    <?php
                        while ( have_posts() ) :
                            the_post();
                    ?>
                        

                            <div class="post-item">
                              <a href="<?php the_permalink() ?>" class="post-item__img">
                                <figure style="background-image: url(<?php the_post_thumbnail_url() ?>);">
                                  <img src="<?php the_post_thumbnail_url() ?>" alt="<?php the_title() ?>">
                                </figure>
                              </a>
                              <h3 class="post-item__title"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h3>
                                  <div class="post-item__pub">
                                  <span><?php the_time('d/m/Y') ?></span>
                                  <span><i class="fa fa-thumbs-up"></i> 0</span>
                                </div>
                                <div class="post-item__sapo"><?php the_excerpt() ?></div>
                              <a href="<?php the_permalink() ?>" class="post-item__link">Xem bài viết →</a>
                            </div>
                            
                        
                    <?php
                        endwhile;
                            wp_pagenavi();
                        

                    else :

                        get_template_part( 'template-parts/content', 'none' );

                    endif;
                    ?>
                    </div>
                </div>
                
            </div>
            <div class="left-content col-xs-12 col-md-4 ">
                <?php dynamic_sidebar('blog-sidebar') ?>
               
            </div>
        </div>
    </div>
</div>
      
<?php get_footer(); ?>