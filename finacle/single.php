 <?php
/**
 * The template for displaying all single posts.
 *
 * @package finacle
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
<!-- ====== blog starts ====== -->
        <div class="main-content-wrapper">
            <!-- Start blog section -->
            <div class="content-section ptb-100 clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-sm-9">
                            <?php if(have_posts()) : ?>
                                <?php while(have_posts()) : the_post(); ?>
                                    <?php  get_template_part( 'content-parts/content', 'single' ); ?>
                                <?php endwhile; ?>
                            <?php else :  
                                 get_template_part( 'content-parts/content', 'none' );
                            endif; ?>
                            <!-- Comments -->
                            <div class="spacer-80"></div>
                            <?php 
                                if ( comments_open() || get_comments_number() ) :
                                        comments_template();
                                endif; 
                            ?> 
                            <!--End Comments -->
                        </div>
                        <div class="col-md-3 col-sm-3">
                            
                            <?php get_sidebar(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End blog section -->
        </div>
        <!-- End Main content Wrapper -->
    
<!-- ====== blog ends ====== -->
<?php get_footer(); ?>