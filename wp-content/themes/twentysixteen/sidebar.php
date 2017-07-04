<?php
/**
 * The template for the sidebar containing the main widget area
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

<?php if ( is_active_sidebar( 'sidebar-1' )  ) : ?>
	<aside id="secondary" class="sidebar widget-area" role="complementary">
		<?php dynamic_sidebar( 'sidebar-1' ); ?>
		<div class="side-title-wrap left relative">
	<h3 class="widget-title">MAIS VISTAS</h3>
</div><!--side-title-wrap-->
<div class="side-list-wrap left relative">
	<ul class="side-list left relative" style="margin-top: 20px;">
		<?php $latest_ad = get_option('mvp_latest_ad'); $count = 0; global $do_not_duplicate; if (isset($do_not_duplicate)) { $latest_num = esc_html(get_option('mvp_latest_num')); $recent = new WP_Query(array( 'post__not_in' => $do_not_duplicate, 'posts_per_page' => $latest_num )); while($recent->have_posts()) : $recent->the_post(); $count++; if ($count == 1 && $latest_ad) { ?>
			<li>
				<a href="<?php the_permalink(); ?>" rel="bookmark">
				<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
					<div class="side-list-out">
						<div class="side-list-img left relative">
							<?php the_post_thumbnail('mvp-small-thumb'); ?>
							<?php if ( has_post_format( 'video' )) { ?>
								<div class="feat-vid-but">
									<i class="fa fa-play fa-3"></i>
								</div><!--feat-vid-but-->
							<?php } ?>
						</div><!--side-list-img-->
						<div class="side-list-in">
							<div class="side-list-text left relative">
								
								<h4 style="    font-weight: inherit; "><?php the_title(); ?></h4>
								<p class="side-list-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></p>
							</div><!--side-list-text-->
						</div><!--side-list-in-->
					</div><!--side-list-out-->
				<?php } else { ?>
					<div class="side-list-text left relative">
						
						<h4 style="    font-weight: inherit; "><?php the_title(); ?></h4>
						<p class="side-list-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></p>
					</div><!--side-list-text-->
				<?php } ?>
				</a>
			</li>
			<li class="latest-ad">
				<?php $latest_ad = get_option('mvp_latest_ad'); if ($latest_ad) { echo html_entity_decode($latest_ad); } ?>
			</li>
		<?php } else { ?>
			<li>
				<a href="<?php the_permalink(); ?>" rel="bookmark">
				<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
					<div class="side-list-out">
						<div class="side-list-img left relative">
							<?php the_post_thumbnail('mvp-small-thumb'); ?>
							<?php if ( has_post_format( 'video' )) { ?>
								<div class="feat-vid-but">
									<i class="fa fa-play fa-3"></i>
								</div><!--feat-vid-but-->
							<?php } ?>
						</div><!--side-list-img-->
						<div class="side-list-in">
							<div class="side-list-text left relative">
								
								<h4 style="    font-weight: inherit; "><?php the_title(); ?></h4>
								<p class="side-list-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></p>
							</div><!--side-list-text-->
						</div><!--side-list-in-->
					</div><!--side-list-out-->
				<?php } else { ?>
					<div class="side-list-text left relative">
						
						<h4 style="    font-weight: inherit; "><?php the_title(); ?></h4>
						<p class="side-list-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></p>
					</div><!--side-list-text-->
				<?php } ?>
				</a>
			</li>
		<?php } endwhile; wp_reset_postdata(); } else { ?>
		<?php $latest_num = esc_html(get_option('mvp_latest_num')); $recent = new WP_Query(array( 'post__not_in' => array( $post->ID ), 'posts_per_page' => $latest_num )); while($recent->have_posts()) : $recent->the_post(); ?>
			<li>
				<a href="<?php the_permalink(); ?>" rel="bookmark">
				<?php if (  (function_exists('has_post_thumbnail')) && (has_post_thumbnail())  ) { ?>
					<div class="side-list-out">
						<div class="side-list-img left relative">
							<?php the_post_thumbnail('mvp-small-thumb'); ?>
							<?php if ( has_post_format( 'video' )) { ?>
								<div class="feat-vid-but">
									<i class="fa fa-play fa-3"></i>
								</div><!--feat-vid-but-->
							<?php } ?>
						</div><!--side-list-img-->
						<div class="side-list-in">
							<div class="side-list-text left relative">
								
								<h4 style="    font-weight: inherit; "><?php the_title(); ?></h4>
								<p class="side-list-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></p>
							</div><!--side-list-text-->
						</div><!--side-list-in-->
					</div><!--side-list-out-->
				<?php } else { ?>
					<div class="side-list-text left relative">
						
						<h4 style="    font-weight: inherit; "><?php the_title(); ?></h4>
						<p class="side-list-cat"><?php $category = get_the_category(); echo esc_html( $category[0]->cat_name ); ?></p>
					</div><!--side-list-text-->
				<?php } ?>
				</a>
			</li>
		<?php endwhile; wp_reset_postdata(); } ?>
	</ul>
</div><!--side-list-wrap-->
	</aside><!-- .sidebar .widget-area -->
<?php endif; ?>

