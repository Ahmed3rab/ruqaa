<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ruqaa
 */

?>

<article class="article" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!-- <p class="article__category"><a href="#">حرية التعبير</a></p> -->
	<?php
	if ( is_singular() ) :
		the_title( '<h1 class="article__title">', '</h1>' );
	else :
		the_title( '<h2 class="article__title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
	endif;

	if ( 'post' === get_post_type() ) : ?>
	<div class="entry-meta">
		<?php //ruqaa_posted_on(); ?>
	</div><!-- .entry-meta -->
	<?php
	endif; ?>

	<div class="article__content">
		<?php
			if ( is_singular() ) :
				the_content();
			else :
				the_excerpt();
			endif;

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ruqaa' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->
	<?php if ( !  is_singular() ) : ?>
		<div class="article__footer">
			<a href="<?php the_permalink(); ?>" class="article__moreLink">تابع القراءة ..</a>
			<div class="article__meta">
				<span class="article__metaItem"><?php echo get_comments_number();?> تعليقات</span>
				<span class="article__metaItem"><?php echo reading_time(); ?></span>
				<span class="article__metaItem"><?php the_category( ', ' ); ?></span>
			</div>
			<?php //ruqaa_entry_footer(); ?>
		</div><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
