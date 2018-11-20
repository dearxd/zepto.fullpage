<?php
/**
 * Template Name: Full-width Page Template, No Sidebar
 *
 * Description: Use this page template to remove the sidebar from any page.
 * 
 */
get_header(); 
if ( get_header_image() ){      
    $overlay = "bg-opacity-black-80";
    $title =  "banner-wrapper";
}
else{
    $overlay = "noverlay";
    $title = "no-banner";
}
    
?>
    
<!-- ====== top-banner starts ====== -->
        <div class="banner-area banner-bg-1 ptb-100  text-center <?php echo esc_attr($overlay);?>" <?php if ( get_header_image() ){ ?> style="background-image:url('<?php header_image(); ?>')"  <?php } ?>>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="<?php echo esc_attr($title);?>">
                            <h2><?php wp_title(''); ?></h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!-- ====== top-banner ends ====== -->

<!-- ====== page starts ====== -->
<!-- Start Main content Wrapper -->
        <div class="main-content-wrapper">
            <!-- Start blog section -->
            <div class="content-section ptb-100 gray-bg clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-sm-12 ">
                            <div class="portfolio-masonry">
                                <?php if(have_posts()) : ?>
                                    <?php while(have_posts()) : the_post(); ?>
                                        <div class="portfolio-item">
                                            <div class="single-blog-post">
                                                <div class="blog-thumb">
                                                    <?php if(has_post_thumbnail()) : ?>
                                                         <?php the_post_thumbnail('finacle-page-thumbnail', array('class' => 'img-responsive')); ?>
                                                    <?php endif; ?>
                                                </div>
                                                <div class="blog-text">
                                                    <?php the_content(); ?>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endwhile; ?>
                                    <?php else :  
                                        get_template_part( 'content-parts/content', 'none' );
                                    endif; ?>
                            </div>
                            <!-- Comments -->
                            <div class="spacer-80"></div>
                                <?php 
                                    if ( comments_open() || get_comments_number() ) :
                                            comments_template();
                                    endif; 
                                ?> 
                            <!--End Comments -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- End blog section -->
        </div>
        <!-- End Main content Wrapper -->
<!-- ====== page ends ====== -->
	
<?php get_footer(); ?>