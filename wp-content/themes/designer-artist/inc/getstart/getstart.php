<?php
//about theme info
add_action( 'admin_menu', 'designer_artist_gettingstarted' );
function designer_artist_gettingstarted() {
	add_theme_page( esc_html__('About Designer Artist', 'designer-artist'), esc_html__('About Designer Artist', 'designer-artist'), 'edit_theme_options', 'designer_artist_guide', 'designer_artist_mostrar_guide');
}

// Add a Custom CSS file to WP Admin Area
function designer_artist_admin_theme_style() {
	wp_enqueue_style('designer-artist-custom-admin-style', esc_url(get_template_directory_uri()) . '/inc/getstart/getstart.css');
	wp_enqueue_script('designer-artist-tabs', esc_url(get_template_directory_uri()) . '/inc/getstart/js/tab.js');
}
add_action('admin_enqueue_scripts', 'designer_artist_admin_theme_style');

//guidline for about theme
function designer_artist_mostrar_guide() { 
	//custom function about theme customizer
	$designer_artist_return = add_query_arg( array()) ;
	$designer_artist_theme = wp_get_theme( 'designer-artist' );
?>

<div class="wrapper-info">
    <div class="col-left">
    	<h2><?php esc_html_e( 'Welcome to Designer Artist', 'designer-artist' ); ?> <span class="version"><?php esc_html_e( 'Version', 'designer-artist' ); ?>: <?php echo esc_html($designer_artist_theme['Version']);?></span></h2>
    	<p><?php esc_html_e('All our WordPress themes are modern, minimalist, 100% responsive, seo-friendly,feature-rich, and multipurpose that best suit designers, bloggers and other professionals who are working in the creative fields.','designer-artist'); ?></p>
    </div>

    <div class="col-right">
    	<div class="logo">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/final-logo.png" alt="" />
		</div>
		<div class="update-now">
			<h4><?php esc_html_e('Buy Designer Artist at 20% Discount','designer-artist'); ?></h4>
			<h4><?php esc_html_e('Use Coupon','designer-artist'); ?> ( <span><?php esc_html_e('vwpro20','designer-artist'); ?></span> ) </h4>
			<div class="info-link">
				<a href="<?php echo esc_url( DESIGNER_ARTIST_BUY_NOW ); ?>" target="_blank"> <?php esc_html_e( 'Upgrade to Pro', 'designer-artist' ); ?></a>
			</div>
		</div>
   	</div>
    
    <div class="tab-sec">
    	<div class="tab">
			<button class="tablinks" onclick="designer_artist_open_tab(event, 'lite_theme')"><?php esc_html_e( 'Setup With Customizer', 'designer-artist' ); ?></button>
			<button class="tablinks" onclick="designer_artist_open_tab(event, 'block_pattern')"><?php esc_html_e( 'Setup With Block Pattern', 'designer-artist' ); ?></button>
			<button class="tablinks" onclick="designer_artist_open_tab(event, 'gutenberg_editor')"><?php esc_html_e( 'Setup With Gutunberg Block', 'designer-artist' ); ?></button>
			<button class="tablinks" onclick="designer_artist_open_tab(event, 'product_addons_editor')"><?php esc_html_e( 'Woocommerce Product Addons', 'designer-artist' ); ?></button>
			<button class="tablinks" onclick="designer_artist_open_tab(event, 'theme_pro')"><?php esc_html_e( 'Get Premium', 'designer-artist' ); ?></button>
		  	<button class="tablinks" onclick="designer_artist_open_tab(event, 'free_pro')"><?php esc_html_e( 'Support', 'designer-artist' ); ?></button>
		</div>

		<?php
			$designer_artist_plugin_custom_css = '';
			if(class_exists('Ibtana_Visual_Editor_Menu_Class')){
				$designer_artist_plugin_custom_css ='display: block';
			}
		?>
		<div id="lite_theme" class="tabcontent open">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
				$plugin_ins = Designer_Artist_Plugin_Activation_Settings::get_instance();
				$designer_artist_actions = $plugin_ins->recommended_actions;
				?>
				<div class="designer-artist-recommended-plugins">
				    <div class="designer-artist-action-list">
				        <?php if ($designer_artist_actions): foreach ($designer_artist_actions as $key => $designer_artist_actionValue): ?>
				                <div class="designer-artist-action" id="<?php echo esc_attr($designer_artist_actionValue['id']);?>">
			                        <div class="action-inner">
			                            <h3 class="action-title"><?php echo esc_html($designer_artist_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($designer_artist_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($designer_artist_actionValue['link']); ?>
			                            <a class="ibtana-skip-btn" get-start-tab-id="lite-theme-tab" href="javascript:void(0);"><?php esc_html_e('Skip','designer-artist'); ?></a>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php } ?>
			<div class="lite-theme-tab" style="<?php echo esc_attr($designer_artist_plugin_custom_css); ?>">
				<h3><?php esc_html_e( 'Lite Theme Information', 'designer-artist' ); ?></h3>
				<hr class="h3hr">
				<p><?php esc_html_e('Designer Artist is a professional website template designed specifically for artists and creatives who want to create an online presence for their work. The theme features a clean, modern, and professional design that looks good and functions well. Customization is made simple with a user-friendly interface, even for those without much web design experience. The theme offers a full-width header, perfect for showcasing images of your art or creative projects, and a catalog section to present your offerings in an organized and attractive manner. One of the key features of the Designer Artist is its responsiveness, ensuring that your website will look great on any device, including desktops, laptops, tablets, and smartphones. This is especially important for artists who want their work accessible from any device and reach a wider audience. The theme is designed to help increase your online visibility with the help of SEO optimization and attract more potential customers to your website. It offers several customization options, including custom colors, fonts, and the ability to upload your logo, which allows you to make your website unique and reflective of your brand. Overall, the Designer Artist is an excellent choice for artists and creatives who want to create an online presence for their work. With its clean, modern, professional design, user-friendly interface, and responsive layout, this theme offers everything you need to showcase your work and attract potential customers. Whether youre a professional artist or just starting, the Designer Artist provides a versatile and professional platform for niches like artist, art lovers, art galleries, animations, graphic designers, photographers, tattoo artists, art wordpress, minimal portfolio, modern art, photo portfolio and etc. that helps you to achieve your goals.','designer-artist'); ?></p>
			  	<div class="col-left-inner">
			  		<h4><?php esc_html_e( 'Theme Documentation', 'designer-artist' ); ?></h4>
					<p><?php esc_html_e( 'If you need any assistance regarding setting up and configuring the Theme, our documentation is there.', 'designer-artist' ); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( DESIGNER_ARTIST_FREE_THEME_DOC ); ?>" target="_blank"> <?php esc_html_e( 'Documentation', 'designer-artist' ); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Theme Customizer', 'designer-artist'); ?></h4>
					<p> <?php esc_html_e('To begin customizing your website, start by clicking "Customize".', 'designer-artist'); ?></p>
					<div class="info-link">
						<a target="_blank" href="<?php echo esc_url( admin_url('customize.php') ); ?>"><?php esc_html_e('Customizing', 'designer-artist'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Having Trouble, Need Support?', 'designer-artist'); ?></h4>
					<p> <?php esc_html_e('Our dedicated team is well prepared to help you out in case of queries and doubts regarding our theme.', 'designer-artist'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( DESIGNER_ARTIST_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Support Forum', 'designer-artist'); ?></a>
					</div>
					<hr>
					<h4><?php esc_html_e('Reviews & Testimonials', 'designer-artist'); ?></h4>
					<p> <?php esc_html_e('All the features and aspects of this WordPress Theme are phenomenal. I\'d recommend this theme to all.', 'designer-artist'); ?></p>
					<div class="info-link">
						<a href="<?php echo esc_url( DESIGNER_ARTIST_REVIEW ); ?>" target="_blank"><?php esc_html_e('Reviews', 'designer-artist'); ?></a>
					</div>

					<div class="link-customizer">
						<h3><?php esc_html_e( 'Link to customizer', 'designer-artist' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','designer-artist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=designer_artist_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','designer-artist'); ?></a>
								</div>
							</div>

							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-slides"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=designer_artist_slidersettings') ); ?>" target="_blank"><?php esc_html_e('Slider Settings','designer-artist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-category"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=designer_artist_product_section') ); ?>" target="_blank"><?php esc_html_e('Product Section','designer-artist'); ?></a>
								</div>
							</div>
						
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','designer-artist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','designer-artist'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=designer_artist_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','designer-artist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=designer_artist_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','designer-artist'); ?></a>
								</div>
							</div>
						</div>
					</div>
			  	</div>
				<div class="col-right-inner">
					<h3 class="page-template"><?php esc_html_e('How to set up Home Page Template','designer-artist'); ?></h3>
				  	<hr class="h3hr">
					<p><?php esc_html_e('Follow these instructions to setup Home page.','designer-artist'); ?></p>
                  	<p><span class="strong"><?php esc_html_e('1. Create a new page :','designer-artist'); ?></span><?php esc_html_e(' Go to ','designer-artist'); ?>
					  	<b><?php esc_html_e(' Dashboard >> Pages >> Add New Page','designer-artist'); ?></b></p>
                  	<p><?php esc_html_e('Name it as "Home" then select the template "Custom Home Page".','designer-artist'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/home-page-template.png" alt="" />
                  	<p><span class="strong"><?php esc_html_e('2. Set the front page:','designer-artist'); ?></span><?php esc_html_e(' Go to ','designer-artist'); ?>
					  	<b><?php esc_html_e(' Settings >> Reading ','designer-artist'); ?></b></p>
				  	<p><?php esc_html_e('Select the option of Static Page, now select the page you created to be the homepage, while another page to be your default page.','designer-artist'); ?></p>
                  	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/set-front-page.png" alt="" />
                  	<p><?php esc_html_e(' Once you are done with setup, then follow the','designer-artist'); ?> <a class="doc-links" href="<?php echo esc_url( DESIGNER_ARTIST_FREE_THEME_DOC ); ?>" target="_blank"><?php esc_html_e('Documentation','designer-artist'); ?></a></p>
			  	</div>
			</div>
		</div>

			<div id="block_pattern" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){
			$plugin_ins = designer_artist_Plugin_Activation_Settings::get_instance();
			$designer_artist_actions = $plugin_ins->recommended_actions;
			?>
			<div class="designer-artist-recommended-plugins">
			    <div class="designer-artist-action-list">
			        <?php if ($designer_artist_actions): foreach ($designer_artist_actions as $key => $designer_artist_actionValue): ?>
			                <div class="designer-artist-action" id="<?php echo esc_attr($designer_artist_actionValue['id']);?>">
		                        <div class="action-inner">
		                            <h3 class="action-title"><?php echo esc_html($designer_artist_actionValue['title']); ?></h3>
		                            <div class="action-desc"><?php echo esc_html($designer_artist_actionValue['desc']); ?></div>
		                            <?php echo wp_kses_post($designer_artist_actionValue['link']); ?>
		                            <a class="ibtana-skip-btn" href="javascript:void(0);" get-start-tab-id="gutenberg-editor-tab"><?php esc_html_e('Skip','designer-artist'); ?></a>
		                        </div>
			                </div>
			            <?php endforeach;
			        endif; ?>
			    </div>
			</div>
			<?php } ?>
			<div class="gutenberg-editor-tab" style="<?php echo esc_attr($designer_artist_plugin_custom_css); ?>">
				<div class="block-pattern-img">
				  	<h3><?php esc_html_e( 'Block Patterns', 'designer-artist' ); ?></h3>
					<hr class="h3hr">
					<p><?php esc_html_e('Follow the below instructions to setup Home page with Block Patterns.','designer-artist'); ?></p>
	              	<p><b><?php esc_html_e('Click on Below Add new page button >> Click on "+" Icon ','designer-artist'); ?></span></b></p>
	              	<div class="designer-artist-pattern-page">
				    	<a href="javascript:void(0)" class="vw-pattern-page-btn button-primary button"><?php esc_html_e('Add New Page','designer-artist'); ?></a>
				    </div>
				    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern1.png" alt="" />
				    <p><b><?php esc_html_e('Click on Patterns Tab >> Click on Theme Name >> Click on Section >> Publish.','designer-artist'); ?></span></b></p>
	              	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/block-pattern.png" alt="" />
	            </div>

	            <div class="block-pattern-link-customizer">
					<h3><?php esc_html_e( 'Link to customizer', 'designer-artist' ); ?></h3>
					<hr class="h3hr">
					<div class="first-row">
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','designer-artist'); ?></a>
							</div>
							<div class="row-box2">
								<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=designer_artist_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','designer-artist'); ?></a>
							</div>
						</div>
						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','designer-artist'); ?></a>
							</div>

							<div class="row-box2">
								<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=designer_artist_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','designer-artist'); ?></a>
							</div>
						</div>

						<div class="row-box">
							<div class="row-box1">
								<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=designer_artist_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','designer-artist'); ?></a>
							</div>
							 <div class="row-box2">
								<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','designer-artist'); ?></a>
							</div>
						</div>
					</div>
				</div>
	     	</div>
		</div>
		
		<div id="gutenberg_editor" class="tabcontent">
			<?php if(!class_exists('Ibtana_Visual_Editor_Menu_Class')){ 
			$plugin_ins = Designer_Artist_Plugin_Activation_Settings::get_instance();
			$designer_artist_actions = $plugin_ins->recommended_actions;
			?>
				<div class="designer-artist-recommended-plugins">
				    <div class="designer-artist-action-list">
				        <?php if ($designer_artist_actions): foreach ($designer_artist_actions as $key => $designer_artist_actionValue): ?>
				                <div class="designer-artist-action" id="<?php echo esc_attr($designer_artist_actionValue['id']);?>">
			                        <div class="action-inner plugin-activation-redirect">
			                            <h3 class="action-title"><?php echo esc_html($designer_artist_actionValue['title']); ?></h3>
			                            <div class="action-desc"><?php echo esc_html($designer_artist_actionValue['desc']); ?></div>
			                            <?php echo wp_kses_post($designer_artist_actionValue['link']); ?>
			                        </div>
				                </div>
				            <?php endforeach;
				        endif; ?>
				    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Gutunberg Blocks', 'designer-artist' ); ?></h3>
				<hr class="h3hr">
				<div class="designer-artist-pattern-page">
			    	<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-templates' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Ibtana Settings','designer-artist'); ?></a>
			    </div>

			    <div class="link-customizer-with-guternberg-ibtana">
	              	<div class="link-customizer-with-block-pattern">
						<h3><?php esc_html_e( 'Link to customizer', 'designer-artist' ); ?></h3>
						<hr class="h3hr">
						<div class="first-row">
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-buddicons-buddypress-logo"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[control]=custom_logo') ); ?>" target="_blank"><?php esc_html_e('Upload your logo','designer-artist'); ?></a>
								</div>
								<div class="row-box2">
									<span class="dashicons dashicons-format-gallery"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=designer_artist_post_settings') ); ?>" target="_blank"><?php esc_html_e('Post settings','designer-artist'); ?></a>
								</div>
							</div>
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-menu"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=nav_menus') ); ?>" target="_blank"><?php esc_html_e('Menus','designer-artist'); ?></a>
								</div>
								
								<div class="row-box2">
									<span class="dashicons dashicons-text-page"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=designer_artist_footer') ); ?>" target="_blank"><?php esc_html_e('Footer Text','designer-artist'); ?></a>
								</div>
							</div>
							
							<div class="row-box">
								<div class="row-box1">
									<span class="dashicons dashicons-admin-generic"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[section]=designer_artist_left_right') ); ?>" target="_blank"><?php esc_html_e('General Settings','designer-artist'); ?></a>
								</div>
								 <div class="row-box2">
									<span class="dashicons dashicons-screenoptions"></span><a href="<?php echo esc_url( admin_url('customize.php?autofocus[panel]=widgets') ); ?>" target="_blank"><?php esc_html_e('Footer Widget','designer-artist'); ?></a>
								</div> 
							</div>
						</div>
					</div>	
				</div>
			<?php } ?>
		</div>

		<div id="product_addons_editor" class="tabcontent">
			<?php if(!class_exists('IEPA_Loader')){
				$plugin_ins = designer_artist_Plugin_Activation_Woo_Products::get_instance();
				$designer_artist_actions = $plugin_ins->recommended_actions;
				?>
				<div class="designer-artist-recommended-plugins">
					    <div class="designer-artist-action-list">
					        <?php if ($designer_artist_actions): foreach ($designer_artist_actions as $key => $designer_artist_actionValue): ?>
					                <div class="designer-artist-action" id="<?php echo esc_attr($designer_artist_actionValue['id']);?>">
				                        <div class="action-inner plugin-activation-redirect">
				                            <h3 class="action-title"><?php echo esc_html($designer_artist_actionValue['title']); ?></h3>
				                            <div class="action-desc"><?php echo esc_html($designer_artist_actionValue['desc']); ?></div>
				                            <?php echo wp_kses_post($designer_artist_actionValue['link']); ?>
				                        </div>
					                </div>
					            <?php endforeach;
					        endif; ?>
					    </div>
				</div>
			<?php }else{ ?>
				<h3><?php esc_html_e( 'Woocommerce Products Blocks', 'designer-artist' ); ?></h3>
				<hr class="h3hr">
				<div class="designer-artist-pattern-page">
					<p><?php esc_html_e('Follow the below instructions to setup Products Templates.','designer-artist'); ?></p>
					<p><b><?php esc_html_e('1. First you need to activate these plugins','designer-artist'); ?></b></p>
						<p><?php esc_html_e('1. Ibtana - WordPress Website Builder ','designer-artist'); ?></p>
						<p><?php esc_html_e('2. Ibtana - Ecommerce Product Addons.','designer-artist'); ?></p>
						<p><?php esc_html_e('3. Woocommerce','designer-artist'); ?></p>

					<p><b><?php esc_html_e('2. Go To Dashboard >> Ibtana Settings >> Woocommerce Templates','designer-artist'); ?></span></b></p>
	              	<div class="designer-artist-pattern-page">
			    		<a href="<?php echo esc_url( admin_url( 'admin.php?page=ibtana-visual-editor-woocommerce-templates&ive_wizard_view=parent' ) ); ?>" class="vw-pattern-page-btn ibtana-dashboard-page-btn button-primary button"><?php esc_html_e('Woocommerce Templates','designer-artist'); ?></a>
			    	</div>
	              	<p><?php esc_html_e('You can create a template as you like.','designer-artist'); ?></span></p>
			    </div>
			<?php } ?>
		</div>

			<div id="theme_pro" class="tabcontent">
		  	<h3><?php esc_html_e( 'Premium Theme Information', 'designer-artist' ); ?></h3>
			<hr class="h3hr">
		    <div class="col-left-pro">
		    	<p><?php esc_html_e('Designer Portfolio WordPress Theme $59 $40The Designer Portfolio WordPress Theme is the perfect solution for creative professionals looking to showcase their work in a modern, stylish, and professional way. With a clean and minimalist design, this theme provides the ideal platform to display your portfolio and make a lasting impression on potential clients and collaborators. The theme features a responsive design that will automatically adjust to any screen size, ensuring that your website will look great on any device, whether viewed on a desktop computer, tablet, or smartphone. The theme is also optimized for fast loading times, so visitors will not be left waiting for your website to load.','designer-artist'); ?></p>
		    	<div class="pro-links">
			    	<a href="<?php echo esc_url( DESIGNER_ARTIST_LIVE_DEMO ); ?>" target="_blank"><?php esc_html_e('Live Demo', 'designer-artist'); ?></a>
					<a href="<?php echo esc_url( DESIGNER_ARTIST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Buy Pro', 'designer-artist'); ?></a>
					<a href="<?php echo esc_url( DESIGNER_ARTIST_PRO_DOC ); ?>" target="_blank"><?php esc_html_e('Pro Documentation', 'designer-artist'); ?></a>
				</div>
		    </div>
		    <div class="col-right-pro">
		    	<img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/getstart/images/responsive.png" alt="" />
		    </div>
		    <div class="featurebox">
			    <h3><?php esc_html_e( 'Theme Features', 'designer-artist' ); ?></h3>
				<hr class="h3hr">
				<div class="table-image">
					<table class="tablebox">
						<thead>
							<tr>
								<th></th>
								<th><?php esc_html_e('Free Themes', 'designer-artist'); ?></th>
								<th><?php esc_html_e('Premium Themes', 'designer-artist'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php esc_html_e('Portfolio Page', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme Customization', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Responsive Design', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Logo Upload', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Social Media Links', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Slider Settings', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Number of Slides', 'designer-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('4', 'designer-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('Unlimited', 'designer-artist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Template Pages', 'designer-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'designer-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('7', 'designer-artist'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Home Page Template', 'designer-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'designer-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('1', 'designer-artist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Theme sections', 'designer-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('2', 'designer-artist'); ?></td>
								<td class="table-img"><?php esc_html_e('11', 'designer-artist'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Contact us Page Template', 'designer-artist'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('1', 'designer-artist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Blog Templates & Layout', 'designer-artist'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('3(Full width/Left/Right Sidebar)', 'designer-artist'); ?></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Page Templates & Layout', 'designer-artist'); ?></td>
								<td class="table-img">0</td>
								<td class="table-img"><?php esc_html_e('2(Left/Right Sidebar)', 'designer-artist'); ?></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Color Pallete For Particular Sections', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Global Color Option', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Reordering', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Demo Importer', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Allow To Set Site Title, Tagline, Logo', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Enable Disable Options On All Sections, Logo', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Full Documentation', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Latest WordPress Compatibility', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Woo-Commerce Compatibility', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Support 3rd Party Plugins', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Secure and Optimized Code', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Exclusive Functionalities', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Section Enable / Disable', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Section Google Font Choices', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Gallery', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Simple & Mega Menu Option', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Support to add custom CSS / JS ', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Shortcodes', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Background, Colors, Header, Logo & Menu', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Premium Membership', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Budget Friendly Value', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('Priority Error Fixing', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Custom Feature Addition', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('All Access Theme Pass', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('Seamless Customer Support', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('WordPress 6.4 or later', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr class="odd">
								<td><?php esc_html_e('PHP 8.2 or 8.3', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td><?php esc_html_e('MySQL 5.6 (or greater) | MariaDB 10.0 (or greater)', 'designer-artist'); ?></td>
								<td class="table-img"><span class="dashicons dashicons-no"></span></td>
								<td class="table-img"><span class="dashicons dashicons-saved"></span></td>
							</tr>
							<tr>
								<td></td>
								<td class="table-img"></td>
								<td class="update-link"><a href="<?php echo esc_url( DESIGNER_ARTIST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Upgrade to Pro', 'designer-artist'); ?></a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<div id="free_pro" class="tabcontent">
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-star-filled"></span><?php esc_html_e('Pro Version', 'designer-artist'); ?></h4>
				<p> <?php esc_html_e('To gain access to extra theme options and more interesting features, upgrade to pro version.', 'designer-artist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( DESIGNER_ARTIST_BUY_NOW ); ?>" target="_blank"><?php esc_html_e('Get Pro', 'designer-artist'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-cart"></span><?php esc_html_e('Pre-purchase Queries', 'designer-artist'); ?></h4>
				<p> <?php esc_html_e('If you have any pre-sale query, we are prepared to resolve it.', 'designer-artist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( DESIGNER_ARTIST_CONTACT ); ?>" target="_blank"><?php esc_html_e('Question', 'designer-artist'); ?></a>
				</div>
		  	</div>
		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-customizer"></span><?php esc_html_e('Child Theme', 'designer-artist'); ?></h4>
				<p> <?php esc_html_e('For theme file customizations, make modifications in the child theme and not in the main theme file.', 'designer-artist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( DESIGNER_ARTIST_CHILD_THEME ); ?>" target="_blank"><?php esc_html_e('About Child Theme', 'designer-artist'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-admin-comments"></span><?php esc_html_e('Frequently Asked Questions', 'designer-artist'); ?></h4>
				<p> <?php esc_html_e('We have gathered top most, frequently asked questions and answered them for your easy understanding. We will list down more as we get new challenging queries. Check back often.', 'designer-artist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( DESIGNER_ARTIST_FAQ ); ?>" target="_blank"><?php esc_html_e('View FAQ','designer-artist'); ?></a>
				</div>
		  	</div>

		  	<div class="col-3">
		  		<h4><span class="dashicons dashicons-sos"></span><?php esc_html_e('Support Queries', 'designer-artist'); ?></h4>
				<p> <?php esc_html_e('If you have any queries after purchase, you can contact us. We are eveready to help you out.', 'designer-artist'); ?></p>
				<div class="info-link">
					<a href="<?php echo esc_url( DESIGNER_ARTIST_SUPPORT ); ?>" target="_blank"><?php esc_html_e('Contact Us', 'designer-artist'); ?></a>
				</div>
		  	</div>
		</div>
	</div>
</div>

<?php } ?>