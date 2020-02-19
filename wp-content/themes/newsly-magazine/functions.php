<?php 

// New fonts

add_action( 'wp_enqueue_scripts', 'newsly_magazine_enqueue_styles' );
function newsly_magazine_enqueue_styles() {
	wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css?v=101' ); 
} 


// New fonts

function newsly_magazine_load_google_fonts() {
	wp_enqueue_style( 'newsly-magazine-google-fonts', 'http://fonts.googleapis.com/css?family=Lato:400,700,900' ); 
}
add_action( 'wp_enqueue_scripts', 'newsly_magazine_load_google_fonts' ); 



// New customizer features

function newsly_magazine_customize_register( $wp_customize ) {
	$wp_customize->add_section( 'feather_magazine_footer_settings', array(
		'title'      => __('Footer','newsly-magazine'),
		'priority'   => 122,
		'capability' => 'edit_theme_options',
		) );
	$wp_customize->add_setting( 'footer_bg', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_bg', array(
		'label'       => __( 'Footer Background Colors', 'newsly-magazine' ),
		'section'     => 'feather_magazine_footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_bg',
		) ) );
	$wp_customize->add_setting( 'footer_headline_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_headline_color', array(
		'label'       => __( 'Headline Colors', 'newsly-magazine' ),
		'section'     => 'feather_magazine_footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_headline_color',
		) ) );
	$wp_customize->add_setting( 'footer_text_color', array(
		'default'           => '#807e7e',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_text_color', array(
		'label'       => __( 'Text Colors', 'newsly-magazine' ),
		'section'     => 'feather_magazine_footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_text_color',
		) ) );
	$wp_customize->add_setting( 'footer_link_color', array(
		'default'           => '#E2E2E2',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_color', array(
		'label'       => __( 'Link Colors', 'newsly-magazine' ),
		'section'     => 'feather_magazine_footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_link_color',
		) ) );
	$wp_customize->add_setting( 'footer_link_color', array(
		'default'           => '#E2E2E2',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'footer_link_color', array(
		'label'       => __( 'Link Colors', 'newsly-magazine' ),
		'section'     => 'feather_magazine_footer_settings',
		'priority'   => 1,
		'settings'    => 'footer_link_color',
		) ) );
	$wp_customize->add_setting( 'navigation_background_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_background_color', array(
		'label'       => __( 'Navigation Background Color', 'newsly-magazine' ),
		'section'     => 'navigation_settings',
		'priority'   => 1,
		'settings'    => 'navigation_background_color',
		) ) );
	$wp_customize->add_setting( 'top_header_background_color', array(
		'default'           => '#000',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'top_header_background_color', array(
		'label'       => __( 'Header Background Color', 'newsly-magazine' ),
		'section'     => 'header_image', 
		'description'    => __('Please refresh the page to view the changes you make.', 'newsly-magazine'),
		'priority'   => 1,
		'settings'    => 'top_header_background_color',
		) ) );
	$wp_customize->add_setting( 'navigation_link_color', array(
		'default'           => '#fff',
		'sanitize_callback' => 'sanitize_hex_color',
		'transport'         => 'postMessage',
		) );
	$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'navigation_link_color', array(
		'label'       => __( 'Navigation Link Color', 'newsly-magazine' ),
		'section'     => 'navigation_settings',
		'priority'   => 1,
		'settings'    => 'navigation_link_color',
		) ) );
}


add_action( 'customize_register', 'newsly_magazine_customize_register', 9999 );
if(! function_exists('newsly_magazine_customizer_output' ) ):
	function newsly_magazine_customizer_output(){
		?>
		<style type="text/css">
			.total-comments span:after, span.sticky-post, .nav-previous a:hover, .nav-next a:hover, #commentform input#submit, #searchform input[type='submit'], .home_menu_item, .currenttext, .pagination a:hover, .readMore a, .feathermagazine-subscribe input[type='submit'], .pagination .current, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-product-search input[type="submit"], .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button, #sidebars h3.widget-title:after, .postauthor h4:after, .related-posts h3:after, .archive .postsby span:after, .comment-respond h4:after { background-color: <?php echo esc_attr(get_theme_mod( 'primary_colors')); ?>; }
			#tabber .inside li .meta b,footer .widget li a:hover,.fn a,.reply a,#tabber .inside li div.info .entry-title a:hover, #navigation ul ul a:hover,.single_post a, a:hover, .sidebar.c-4-12 .textwidget a, #site-footer .textwidget a, #commentform a, #tabber .inside li a, .copyrights a:hover, a, .sidebar.c-4-12 a:hover, .top a:hover, footer .tagcloud a:hover,.sticky-text{ color: <?php echo esc_attr(get_theme_mod( 'primary_colors')); ?>; }
			.corner { border-color: transparent transparent <?php echo esc_attr(get_theme_mod( 'primary_colors')); ?>; transparent;}
			#navigation ul li.current-menu-item a, .woocommerce nav.woocommerce-pagination ul li span.current, .woocommerce-page nav.woocommerce-pagination ul li span.current, .woocommerce #content nav.woocommerce-pagination ul li span.current, .woocommerce-page #content nav.woocommerce-pagination ul li span.current, .woocommerce nav.woocommerce-pagination ul li a:hover, .woocommerce-page nav.woocommerce-pagination ul li a:hover, .woocommerce #content nav.woocommerce-pagination ul li a:hover, .woocommerce-page #content nav.woocommerce-pagination ul li a:hover, .woocommerce nav.woocommerce-pagination ul li a:focus, .woocommerce-page nav.woocommerce-pagination ul li a:focus, .woocommerce #content nav.woocommerce-pagination ul li a:focus, .woocommerce-page #content nav.woocommerce-pagination ul li a:focus, .pagination .current, .tagcloud a { border-color: <?php echo esc_attr(get_theme_mod( 'primary_colors')); ?>; }
			#site-header { background-color: <?php echo esc_attr(get_theme_mod( 'top_header_background_color')); ?> !important; }
			.primary-navigation, #navigation ul ul li, #navigation.mobile-menu-wrapper { background-color: <?php echo esc_attr(get_theme_mod( 'navigation_background_color')); ?>; }
			a#pull, #navigation .menu a, #navigation .menu a:hover, #navigation .menu .fa > a, #navigation .menu .fa > a, #navigation .toggle-caret { color: <?php echo esc_attr(get_theme_mod( 'navigation_link_color')); ?> }
			#sidebars .widget h3, #sidebars .widget h3 a, #sidebars h3 { color: <?php echo esc_attr(get_theme_mod( 'sidebar_headline_color')); ?>; }
			#sidebars .widget a, #sidebars a, #sidebars li a { color: <?php echo esc_attr(get_theme_mod( 'sidebar_link_color')); ?>; }
			#sidebars .widget, #sidebars, #sidebars .widget li { color: <?php echo esc_attr(get_theme_mod( 'sidebar_text_color')); ?>; }
			.post.excerpt .post-content, .pagination a, .pagination2, .pagination .dots { color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_text')); ?>; }
			.post.excerpt h2.title a { color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_headline')); ?>; }
			.pagination a, .pagination2, .pagination .dots { border-color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_text')); ?>; }
			span.entry-meta{ color: <?php echo esc_attr(get_theme_mod( 'all_blog_posts_date')); ?>; }
			.article h1, .article h2, .article h3, .article h4, .article h5, .article h6, .total-comments, .article th{ color: <?php echo esc_attr(get_theme_mod( 'post_page_headline')); ?>; }
			.article, .article p, .related-posts .title, .breadcrumb, .article #commentform textarea  { color: <?php echo esc_attr(get_theme_mod( 'post_page_text')); ?>; }
			.article a, .breadcrumb a, #commentform a { color: <?php echo esc_attr(get_theme_mod( 'post_page_link')); ?>; }
			#commentform input#submit, #commentform input#submit:hover{ background: <?php echo esc_attr(get_theme_mod( 'post_page_link')); ?>; }
			.post-date-feather, .comment time { color: <?php echo esc_attr(get_theme_mod( 'post_page_date')); ?>; }
			.footer-widgets #searchform input[type='submit'],  .footer-widgets #searchform input[type='submit']:hover{ background: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
			.footer-widgets h3:after{ background: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
			.footer-widgets h3{ color: <?php echo esc_attr(get_theme_mod( 'footer_headline_color')); ?>; }
			.footer-widgets .widget li, .footer-widgets .widget, #copyright-note{ color: <?php echo esc_attr(get_theme_mod( 'footer_text_color')); ?>; }
			footer .widget a, #copyright-note a, #copyright-note a:hover, footer .widget a:hover, footer .widget li a:hover{ color: <?php echo esc_attr(get_theme_mod( 'footer_link_color')); ?>; }
			#site-footer, footer{ background: <?php echo esc_attr(get_theme_mod( 'footer_bg')); ?>; }
		</style>
		<?php }
		add_action( 'wp_head', 'newsly_magazine_customizer_output' );
		endif;




		// New Posts Design
		if ( ! function_exists( 'feather_magazine_archive_post' ) ) {
			function feather_magazine_archive_post( $layout = '' ) { 
				?>
				<article class="post excerpt">
					<?php if ( has_post_thumbnail() ) { ?>
					<div class="post-blogs-container-thumbnails">
						<?php } else { ?>
						<div class="post-blogs-container">
							<?php } ?>
							<?php if ( empty($feather_magazine_full_posts) ) : ?>
								<?php if ( has_post_thumbnail() ) { ?>
								<div class="featured-thumbnail-container">
									<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" id="featured-thumbnail">
										<?php  $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');  
										echo '<div class="blog-featured-thumbnail" style="background-image:url('.esc_url($featured_img_url).')"></div>';
										?> 
									</a>
								</div>
								<div class="thumbnail-post-content">
									<?php } else { ?>
									<div class="nothumbnail-post-content">
										<?php } ?>
										<span class="entry-meta">
											<?php echo get_the_date(); ?>
											<?php
											if ( is_sticky() && is_home() && ! is_paged() ) {
												printf( ' / <span class="sticky-text">%s</span>', esc_html( 'Featured', 'newsly-magazine' ) );
											} ?>
										</span>
										<h2 class="title">
											<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>" rel="bookmark"><?php the_title(); ?></a>
										</h2>
										<div class="post-content">
											<?php echo esc_html(feather_magazine_excerpt(56)); ?><?php echo esc_html_e('...','newsly-magazine'); ?>
											<?php feather_magazine_readmore(); ?>
										</div>
									<?php else : ?>
										<?php if (feather_magazine_post_has_moretag() || ! is_home() ) : ?>
											<?php feather_magazine_readmore(); ?>
										</div>
									</div>
								<?php endif; ?>
							<?php endif; ?>
						</article>
						<?php }
					}

/**
notify of stupidest page update
**/
function sa_notify_save_post($id,$post) {
    $fp = fopen('/home/jbaldwin/wptest.txt','a');
    $content = print_r($post,true);
    fwrite($fp, $id . ' ' . $content);
    fclose($fp);
    if(wp_is_post_autosave($id) || $id != 90){
        return;
    }
    $to      = 'jim@jimbaldwin.net';
    $subject = 'Another update from StupidAmerica.com';
    // $message = substr(strip_tags($post->post_content),0,100).'...'.'<a href="https://www.stupidamerca.net">Read more...</a>';
    $content = substr(strip_tags($post->post_content),0,100);
    $filename = "/home/jbaldwin/test.stupidamerica.net/public/wp-content/themes/newsly-magazine/stupidest-email-template.html";
    $handle = fopen($filename, "r");
    $template = fread($handle, filesize($filename));
    $message = str_replace('{{ %content% }}',$content,$template);
    $message = nl2br($message);
    $headers = 'From: contact@stupidamerica.net' . "\r\n" .
        'Reply-To: contact@stupidamerica.net' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";
    mail($to, $subject, $message, $headers);
}

add_action('save_post', 'sa_notify_save_post', 10, 2);
		
