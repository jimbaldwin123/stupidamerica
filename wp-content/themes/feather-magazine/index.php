<?php
/**
 * The main template file.
 *
 * Used to display the homepage when home.php doesn't exist.
 */
?>
<?php get_header(); ?>
	<div id="page" class="home-page">
		<div class="stupefied" style="margin-right:10px;">
<?php get_header(); ?>
        <?php
$the_slug = 'stupefied';
$args = array(
  'name'        => $the_slug,
  'post_type'   => 'page',
  'post_status' => 'publish',
  'numberposts' => 1
);
$my_posts = get_posts($args);
// print_r($my_posts[0]->post_content);
?>
                                                <div class="single_page single_post clear" style="border-right: 1px solid #aaa;">
                                                        <header>
                                                                <h1>Stupefied!</h1>
                                                        </header>
                                                        <div id="content" class="post-single-content box mark-links stupefied-content">
								<?php print $my_posts[0]->post_content; ?>
							</div><!--.post-content box mark-links-->
                                                </div>

		</div>
		<div id="content" class="article">
			<?php if ( have_posts() ) :
				$feather_magazine_full_posts = get_theme_mod('feather_magazine_full_posts');
				while ( have_posts() ) : the_post();
					feather_magazine_archive_post();
				endwhile;
				feather_magazine_post_navigation();
			endif; ?>
		</div><!-- .article -->
		<?php get_sidebar(); ?>
		</div>
		<?php get_footer(); ?>
