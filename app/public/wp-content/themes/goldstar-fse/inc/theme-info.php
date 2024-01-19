<?php
/**
 * Add Theme info Page
 */

function goldstar_fse_menu() {
	add_theme_page( esc_html__( 'Goldstar FSE', 'goldstar-fse' ), esc_html__( 'About Goldstar FSE', 'goldstar-fse' ), 'edit_theme_options', 'about-goldstar-fse', 'goldstar_fse_theme_page_display' );
}
add_action( 'admin_menu', 'goldstar_fse_menu' );

function goldstar_fse_admin_theme_style() {
	wp_enqueue_style('goldstar-fse-custom-admin-style', esc_url(get_template_directory_uri()) . '/assets/css/admin-styles.css');
}
add_action('admin_enqueue_scripts', 'goldstar_fse_admin_theme_style');

/**
 * Display About page
 */
function goldstar_fse_theme_page_display() {
	$theme = wp_get_theme();

	if ( is_child_theme() ) {
		$theme = wp_get_theme()->parent();
	} ?>

		<div class="Grace-wrapper">
			<div class="Grcae-info-holder">
				<div class="Grcae-info-holder-content">
					<div class="Grace-Welcome">
						<h1 class="welcomeTitle"><?php esc_html_e( 'About Theme Info', 'goldstar-fse' ); ?></h1>                        
						<div class="featureDesc">
							<?php echo esc_html__( 'The Goldstar FSE is the best full site editing-based free jewellery WordPress theme designed specifically for jewelry shops, jewelry production, showrooms, and other business websites associated with the making or selling of jewelry.', 'goldstar-fse' ); ?>
						</div>
						
                        <h1 class="welcomeTitle"><?php esc_html_e( 'Theme Features', 'goldstar-fse' ); ?></h1>

                        <h2><?php esc_html_e( 'Block Compatibale', 'goldstar-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The built-in customizer panel quickly change aspects of the design and display changes live before saving them.', 'goldstar-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Responsive Ready', 'goldstar-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'The themes layout will automatically adjust and fit on any screen resolution and looks great on any device. Fully optimized for iPhone and iPad.', 'goldstar-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'Cross Browser Compatible', 'goldstar-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Our themes are tested in all mordern web browsers and compatible with the latest version including Chrome,Firefox, Safari, Opera, IE11 and above.', 'goldstar-fse' ); ?>
                        </div>
                        
                        <h2><?php esc_html_e( 'E-commerce', 'goldstar-fse' ); ?></h2>
                        <div class="featureDesc">
                            <?php echo esc_html__( 'Fully compatible with WooCommerce plugin. Just install the plugin and turn your site into a full featured online shop and start selling products.', 'goldstar-fse' ); ?>
                        </div>

					</div> <!-- .Grace-Welcome -->
				</div> <!-- .Grcae-info-holder-content -->
				
				
				<div class="Grcae-info-holder-sidebar">
                        <div class="sidebarBX">
                            <h2 class="sidebarBX-title"><?php echo esc_html__( 'Get Goldstar PRO', 'goldstar-fse' ); ?></h2>
                            <p><?php echo esc_html__( 'More features availbale on Premium version', 'goldstar-fse' ); ?></p>
                            <a href="<?php echo esc_url( 'https://gracethemes.com/themes/jewellery-shop-wordpress-theme/' ); ?>" target="_blank" class="button"><?php esc_html_e( 'Get the PRO Version &rarr;', 'goldstar-fse' ); ?></a>
                        </div>


						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Important Links', 'goldstar-fse' ); ?></h2>

							<ul class="themeinfo-links">
                                <li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/goldstar/' ); ?>" target="_blank"><?php echo esc_html__( 'Demo Preview', 'goldstar-fse' ); ?></a>
								</li>                               
								<li>
									<a href="<?php echo esc_url( 'https://gracethemesdemo.com/documentation/goldstar/#homepage-lite' ); ?>" target="_blank"><?php echo esc_html__( 'Documentation', 'goldstar-fse' ); ?></a>
								</li>
								
								<li>
									<a href="<?php echo esc_url( 'https://gracethemes.com/wordpress-themes/' ); ?>" target="_blank"><?php echo esc_html__( 'View Our Premium Themes', 'goldstar-fse' ); ?></a>
								</li>
							</ul>
						</div>

						<div class="sidebarBX">
							<h2 class="sidebarBX-title"><?php echo esc_html__( 'Leave us a review', 'goldstar-fse' ); ?></h2>
							<p><?php echo esc_html__( 'If you are satisfied with Goldstar FSE, please give your feedback.', 'goldstar-fse' ); ?></p>
							<a href="https://wordpress.org/support/theme/goldstar-fse/reviews/" class="button" target="_blank"><?php esc_html_e( 'Submit a review', 'goldstar-fse' ); ?></a>
						</div>

				</div><!-- .Grcae-info-holder-sidebar -->	

			</div> <!-- .Grcae-info-holder -->
		</div><!-- .Grace-wrapper -->
<?php } ?>