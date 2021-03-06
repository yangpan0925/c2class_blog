<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <header class="entry-header">
    <?php if ( has_post_thumbnail() && ! post_password_required() && is_home() ) : ?>
    <div class="entry-thumbnail">
      <?php the_post_thumbnail(); ?>
    </div>
    <?php endif; ?>

    <?php if ( is_single() ) : ?>
    <h1 class="entry-title"><?php the_title(); ?></h1>
    <?php else : ?>
    <h2 class="entry-title">
      <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
    </h2>
    <?php endif; // is_single() ?>

    <div class="entry-meta">
      <?php twentythirteen_entry_meta(); ?>
      <?php edit_post_link( __( 'Edit', 'twentythirteen' ), '<span class="edit-link">', '</span>' ); ?>
    </div><!-- .entry-meta -->
  </header><!-- .entry-header -->

  <?php if ( is_search() ) : // Only display Excerpts for Search ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
  </div><!-- .entry-summary -->
  
  <?php elseif(is_single()) : ?>
  <div class="entry-content">
    <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentythirteen' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentythirteen' ) . '</span>', 'after' => '</div>', 'link_before' => '<span>', 'link_after' => '</span>' ) ); ?>
  </div><!-- .entry-content -->
  
  <?php else :?>
    <div class="entry-summary">
    <?php the_excerpt(); ?>
    </div>
  <?php endif; ?> 
  
  <div class="post-shadow"></div>

</article>

  <!-- #post -->