			<footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">

				<div class="inner-footer">

					<nav role="navigation">
						<?php wp_nav_menu(array(
    					'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
    					'container_class' => 'footer-links',         // class of container (should you choose to use it)
    					'menu' => __( 'Footer Links', 'bonestheme' ),   // nav name
    					'menu_class' => 'nav footer-nav',            // adding custom nav class
    					'theme_location' => 'footer-links',             // where it's located in the theme
    					'before' => '',                                 // before the menu
    					'after' => '',                                  // after the menu
    					'link_before' => '',                            // before each link
    					'link_after' => '',                             // after each link
    					'depth' => 0,                                   // limit the depth of the nav
    					'fallback_cb' => 'bones_footer_links_fallback'  // fallback function
						)); ?>
					</nav>
					
					<div class="info">
						<p>1000 Floyd Ave, Suite 4102 | Richmond, Virginia 23284  | <a href="mailto:online@vcu.edu">online@vcu.edu</a></p>
						<p>Division of the Vice Provost for Learning Innovation and Student Success <br/>
						Office of the Provost | Virginia Commonwealth University</p>


						<p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>.</p>
	          			<p class="last-modified">Last modified: <?php the_modified_time('F j, Y'); ?></p>
          			</div>

          			<div class="full-logo">
          				<a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/library/images/svg/online-vcu-full.svg" onerror="this.onerror=null; this.src='<?php echo get_template_directory_uri(); ?>/library/images/svg/fallbacks/online-vcu-full.jpg'"></a>
          			</div>
				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>

    <?php echo get_development_scripts(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
