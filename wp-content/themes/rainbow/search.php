<?php
get_header();
?>
<div class="service-banner text-center" style="background-image: url(<?= get_template_directory_uri().'/assets/img/archive-bg.jpg'?>)">
    <div class="box-service-banner">
        <div class="container">
            
        </div>
    </div>
</div>
<div class="archive-page">
    <div class="container">
       
            <?php if ( have_posts() ) : ?>
            <div class="row">
                    <?php     
                    
                    while ( have_posts() ) :
                        the_post();
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
                                    <p class="date"><?php the_time('d/m/Y') ?></p>
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
        else :
            echo 'Dữ liệu đang được cập nhật!';
        endif;
        ?>
        
    </div>
</div>
      
<?php get_footer(); ?>