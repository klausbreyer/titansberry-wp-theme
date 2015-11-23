<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package Titansberry
 * @subpackage Template
 * @since Titansberry 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<h2 class="entry-title"><?php the_title(); ?></h2>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'snowberry' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">

	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
