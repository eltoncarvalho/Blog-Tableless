<?php
/**
 * The template part for displaying content
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php if ( is_sticky() && is_home() && ! is_paged() ) : ?>
			<span class="sticky-post"><?php _e( 'Featured', 'twentysixteen' ); ?></span>
		<?php endif; ?>

		<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
	</header><!-- .entry-header -->

	<?php twentysixteen_excerpt(); ?>

	<?php twentysixteen_post_thumbnail(); ?>

	<section class="tb-latest-posts no-divider">

		<div class="tb-container">

			<?php
			$latestPostsargs = array(
          'posts_per_page' => 8, // Quantidade de posts
          'order'=> 'DESC',
          );
			$latestPosts = get_posts( $latestPostsargs );
			foreach ( $latestPosts as $post ) : setup_postdata( $post ); ?>

			<?php get_template_part('tb-box');?>




		<?php endforeach; wp_reset_postdata(); ?>
		<?php
		$content = get_the_content();
		$resumo = substr($content, 0, 300).  …;
		echo '<p>'.$resumo. '</p><br/>';
		?>

		<footer class="entry-footer">
		<h3>Por <?php the_author_posts_link(); ?></h3>
			<?php twentysixteen_entry_meta(); ?>
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Name of current post */
					__( 'Editar<span class="screen-reader-text" style="margin-left: 10px;"> "%s "</span>', 'twentysixteen' ),
					get_the_title()
					),
				'<span class="edit-link">',
				'</span>'
				);
				?>
			</footer><!-- .entry-footer -->

			

		</div>

	</section>
</article><!-- #post-## -->
