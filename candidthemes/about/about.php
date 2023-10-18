<?php
/**
 * Added fairy Page. */

/**
 * Add a new page under Appearance
 */
function fairy_menu()
{
	add_theme_page(__('Fairy Options', 'fairy'), __('Fairy Options', 'fairy'), 'edit_theme_options', 'fairy-theme', 'fairy_page');
}
add_action('admin_menu', 'fairy_menu');

/**
 * Enqueue styles for the help page.
 */
function fairy_admin_scripts($hook)
{
	if ('appearance_page_fairy-theme' !== $hook) {
		return;
	}
	wp_enqueue_style('fairy-admin-style', get_template_directory_uri() . '/candidthemes/about/about.css', array(), '');
}
add_action('admin_enqueue_scripts', 'fairy_admin_scripts');

/**
 * Add the theme page
 */
function fairy_page()
{
?>
<div class="das-wrap">
  <div class="fairy-panel header">
    <div class="fairy-logo">
      <img class="ts-logo"
        src="<?php echo esc_url(get_template_directory_uri() . '/candidthemes/about/images/fairy-logo.png'); ?>"
        alt="Logo">
    </div>
    <p>
      <?php esc_html_e('A perfect theme for blog and magazine site. With masonry layout and multiple blog page layout, this theme is the awesome and minimal theme.', 'fairy'); ?>
    </p>
    <a class="btn btn-primary" href="<?php echo esc_url(admin_url('/customize.php?'));
?>"><?php esc_html_e('Theme Options - Click Here', 'fairy'); ?></a>
  </div>

  <div class="das-wrap-inner">
    <div class="das-col das-col-7">
      <div class="fairy-panel">
        <div class="fairy-panel-content">
          <div class="theme-title">
            <h3><?php esc_html_e('Looking for theme Documentation?', 'fairy'); ?></h3>
          </div>
          <a href="https://docs.candidthemes.com/fairy/" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Documentation - Click Here', 'fairy'); ?></a>
        </div>
      </div>
      <div class="fairy-panel">
        <div class="fairy-panel-content">
          <div class="theme-title">
            <h3><?php esc_html_e('If you like the theme, please leave a review', 'fairy'); ?></h3>
          </div>
          <a href="https://wordpress.org/support/theme/fairy/reviews/?filter=5" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Rate this theme', 'fairy'); ?></a>
        </div>
      </div>
      <div class="fairy-panel">
        <div class="fairy-panel-content">
          <div class="theme-title">
            <h3><?php esc_html_e('View all Demos', 'fairy'); ?></h3>
          </div>
          <a href="https://fairy.candidthemes.com/" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Default Demo', 'fairy'); ?></a>
          <a href="https://demo.candidthemes.com/fairy-pro/" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Fairy Pro', 'fairy'); ?></a>
          <a href="https://demo.candidthemes.com/fairy-rtl/" target="_blank"
            class="btn btn-secondary"><?php esc_html_e('Fairy RTL', 'fairy'); ?></a>
        </div>
      </div>
    </div>
    <div class="das-col das-col-3">
      <div class="upgrade-div">
        <p>
          <strong>
            <?php esc_html_e('Pro Features Include:', 'fairy'); ?>
          </strong>
          </h4>
        <ul>
          <li>
          <?php esc_html_e('Author Information including social icons and descriptions.', 'fairy'); ?>
          </li>
          <li>
          <?php esc_html_e('Write your own powered by text with link in HTML formats.', 'fairy'); ?>
          </li>
          <li>
          <?php esc_html_e('Change search placeholder text easily and write your own text.', 'fairy'); ?>            
          </li>
          <li>
          <?php esc_html_e('Make your menu sticky on the top for better user experience.', 'fairy'); ?>  
          </li>
        </ul>
        <div class="text-center">
          <a href="https://www.candidthemes.com/themes/fairy-pro/" target="_blank"
            class="btn btn-success"><?php esc_html_e('Upgrade Pro $49', 'fairy'); ?></a>
        </div>
      </div>
      <div class="fairy-panel">
        <div class="theme-title">
          <h3><?php esc_html_e('Important Links', 'fairy'); ?></h3>
        </div>
        <div>
          <ul>
            <li>
              <a href="https://www.candidthemes.com/themes/fairy/"><?php esc_html_e('Theme page', 'fairy'); ?></a>
            </li>
            <li>
              <a href="https://www.candidthemes.com/support-tickets/"><?php esc_html_e('Support', 'fairy'); ?></a>
            </li>
          </ul>
        </div>
      </div>
      <div class="fairy-panel">
        <div class="theme-title">
          <h3><?php esc_html_e('Other Popular Theme', 'fairy'); ?></h3>
        </div>
        <a href="https://www.candidthemes.com/themes/refined-magazine-free-magazine-wordpress-theme/" target="_blank"
          class="btn btn-success"><?php esc_html_e('Refined Magazine', 'fairy'); ?></a>
      </div>
    </div>
  </div>
</div>
<?php
}