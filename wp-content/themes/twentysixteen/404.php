<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

	<div id="primary" class="content">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found" align="center">
				<header class="page-header">
					<h1 class="page-title"><?php _e( 'Ixi! Não encontramos a página.', 'twentysixteen' ); ?></h1>
				</header><!-- .page-header -->
				<div class="page-content">
					<p><?php _e( 'Mas confira alguns outros posts incríveis que você pode gostar pesquisando abaixo', 'twentysixteen' ); ?></p>

					<?php get_search_form(); ?>
				</div><!-- .page-content -->
				
			</section><!-- .error-404 -->

		</main><!-- .site-main -->

		<?php get_sidebar( 'content-bottom' ); ?>

	</div><!-- .content-area -->
<?php get_footer(); ?>
