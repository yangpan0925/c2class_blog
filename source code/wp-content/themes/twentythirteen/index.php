<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme and one of the
 * two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

get_header(); ?>  
  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
    <?php if ( have_posts() ) : ?>

      <?php /* The loop */ ?>
      <?php while ( have_posts() ) : the_post(); ?>
        
        <?php
          get_template_part( 'content', get_post_format() ); 
          //the_excerpt();
        ?>
      <?php endwhile; ?>

      <?php twentythirteen_paging_nav(); ?>

    <?php else : ?>
      <?php get_template_part( 'content', 'none' ); ?>
    <?php endif; ?>
    </div><!-- #content -->
    
    <div id="secondary" class="sidebar-container" role="complementary">
    <div class="widget-area">
      <?php dynamic_sidebar( 'sidebar-1' ); ?>
    </div><!-- .widget-area -->
    </div><!-- #secondary -->

  </div><!-- #primary -->
  

 
  <!-- AddThis Smart Layers BEGIN -->
  <!-- Go to http://www.addthis.com/get/smart-layers to customize -->
 
  <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51e9bab72fdd9192"></script>
  <script type="text/javascript">
    addthis.layers({
    'theme' : 'transparent',
    'share' : {
      'position' : 'left',
      'numPreferredServices' : 5
    },  
    'whatsnext' : {},  
    'recommended' : {} 
    });
  </script>
 
  <!-- AddThis Smart Layers END -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>