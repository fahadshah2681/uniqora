<?php
/*
 * @package IT Security
 */

function it_security_admin_enqueue_scripts() {
    wp_enqueue_style( 'it-security-admin-style', esc_url( get_template_directory_uri() ).'/css/addon.css' );
}
add_action( 'admin_enqueue_scripts', 'it_security_admin_enqueue_scripts' );

function it_security_theme_info_menu_link() {

    $it_security_theme = wp_get_theme();
    add_theme_page(
        /* translators: 1: Theme name, 2: Theme version */
        sprintf( esc_html__( 'Welcome to %1$s %2$s', 'it-security' ), $it_security_theme->get( 'Name' ), $it_security_theme->get( 'Version' ) ),
        esc_html__( 'Theme Info', 'it-security' ),'edit_theme_options','it-security','it_security_theme_info_page'
    );

    // Add "Theme Demo Import" page
    add_theme_page(
        esc_html__( 'Theme Demo Import', 'it-security' ),
        esc_html__( 'Theme Demo Import', 'it-security' ),
        'edit_theme_options',
        'it-security-demo',
        'it_security_demo_content_page'
    );

}
add_action( 'admin_menu', 'it_security_theme_info_menu_link' );

function it_security_theme_info_page() {

    $it_security_theme = wp_get_theme();
    ?>
<div class="wrap theme-info-wrap">
    <h1><?php printf( esc_html__( 'Welcome to %1$s %2$s', 'it-security' ), esc_html($it_security_theme->get( 'Name' )), esc_html($it_security_theme->get( 'Version' ))); ?>
    </h1>
    <p class="theme-description">
    <?php esc_html_e( 'Do you want to configure this theme? Look no further, our easy-to-follow theme documentation will walk you through it.', 'it-security' ); ?>
    </p>
    <div class="important-link">
        <p class="main-box columns-wrapper clearfix">
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e( 'Pro version of our theme', 'it-security' ); ?></strong></p>
                <p><?php esc_html_e( 'Are you exited for our theme? Then we will proceed for pro version of theme.', 'it-security' ); ?></p>
                <a class="get-premium" href="<?php echo esc_url( IT_SECURITY_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Go To Premium', 'it-security' ); ?></a>
                <p><strong><?php esc_html_e( 'Check all classic features', 'it-security' ); ?></strong></p>
                <p><?php esc_html_e( 'Explore all the premium features.', 'it-security' ); ?></p>
                <a href="<?php echo esc_url( IT_SECURITY_THEME_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Theme Page', 'it-security' ); ?></a>
            </div>
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e( 'Need Help?', 'it-security' ); ?></strong></p>
                <p><?php esc_html_e( 'Go to our support forum to help you out in case of queries and doubts regarding our theme.', 'it-security' ); ?></p>
                <a href="<?php echo esc_url( IT_SECURITY_SUPPORT ); ?>" target="_blank"><?php esc_html_e( 'Contact Us', 'it-security' ); ?></a>
                <p><strong><?php esc_html_e( 'Leave us a review', 'it-security' ); ?></strong></p>
                <p><?php esc_html_e( 'Are you enjoying our theme? We would love to hear your feedback.', 'it-security' ); ?></p>
                <a href="<?php echo esc_url( IT_SECURITY_REVIEW ); ?>" target="_blank"><?php esc_html_e( 'Rate This Theme', 'it-security' ); ?></a>
            </div>
            <div class="themelink column column-half clearfix">
                <p><strong><?php esc_html_e( 'Check Our Demo', 'it-security' ); ?></strong></p>
                <p><?php esc_html_e( 'Here, you can view a live demonstration of our premium them.', 'it-security' ); ?></p>
                <a href="<?php echo esc_url( IT_SECURITY_PRO_DEMO ); ?>" target="_blank"><?php esc_html_e( 'Premium Demo', 'it-security' ); ?></a>
                <p><strong><?php esc_html_e( 'Theme Documentation', 'it-security' ); ?></strong></p>
                <p><?php esc_html_e( 'Need more details? Please check our full documentation for detailed theme setup.', 'it-security' ); ?></p>
                <a href="<?php echo esc_url( IT_SECURITY_THEME_DOCUMENTATION ); ?>" target="_blank"><?php esc_html_e( 'Documentation', 'it-security' ); ?></a>
            </div>
        </p>
    </div>
    <div id="getting-started">
        <h3><?php 
        /* translators: %s: Theme name */
        printf( esc_html__( 'Getting started with %s', 'it-security' ),
        esc_html($it_security_theme->get( 'Name' ))); ?></h3>
        <div class="columns-wrapper clearfix">
            <div class="column column-half clearfix">
                <div class="section">
                    <h4><?php esc_html_e( 'Theme Description', 'it-security' ); ?></h4>
                    <div class="theme-description-1"><?php echo esc_html($it_security_theme->get( 'Description' )); ?></div>
                </div>
            </div>
            <div class="column column-half clearfix">
                <img src="<?php echo esc_url( $it_security_theme->get_screenshot() ); ?>" alt="<?php echo esc_attr( 'screenshot', 'it-security'); ?>"/>
                <div class="section">
                    <h4><?php esc_html_e( 'Theme Options', 'it-security' ); ?></h4>
                    <p class="about">
                    <?php 
                    /* translators: %s: Theme name */
                    printf( esc_html__( '%s makes use of the Customizer for all theme settings. Click on "Customize Theme" to open the Customizer now.', 'it-security' ),esc_html($it_security_theme->get( 'Name' ))); ?></p>
                    <p>
                    <div class="themelink-1">
                        <a target="_blank" href="<?php echo esc_url( wp_customize_url() ); ?>"><?php esc_html_e( 'Customize Theme', 'it-security' ); ?></a>
                        <a class="get-premium" href="<?php echo esc_url( IT_SECURITY_PREMIUM_PAGE ); ?>" target="_blank"><?php esc_html_e( 'Checkout Premium', 'it-security' ); ?></a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <hr>
    <div id="theme-author">
      <p><?php
      /* translators: 1: Theme name, 2: Developer name, 3: Call to action */
        printf( esc_html__( '%1$s is proudly brought to you by %2$s. If you like this theme, %3$s :)', 'it-security' ),
            esc_html($it_security_theme->get( 'Name' )),
            '<a target="_blank" href="' . esc_url( 'https://www.theclassictemplates.com/', 'it-security' ) . '">classictemplate</a>',
            '<a target="_blank" href="' . esc_url( IT_SECURITY_REVIEW ) . '" title="' . esc_attr__( 'Rate it', 'it-security' ) . '">' . esc_html_x( 'rate it', 'If you like this theme, rate it', 'it-security' ) . '</a>'
        );
        ?></p>
    </div>
</div>
<?php
}

function it_security_demo_content_page() {

    $it_security_theme = wp_get_theme();
    ?>
    <div class="container">
       <div class="start-box">
          <div class="columns-wrapper m-0"> 
             <div class="column column-half clearfix">
               <div class="wrapper-info"> 
                  <img src="<?php echo esc_url( get_template_directory_uri().'/images/Logo.png' ); ?>" />
                  <h2><?php esc_html_e( 'Welcome to IT Security', 'it-security' ); ?></h2>
                  <span class="version"><?php esc_html_e( 'Version', 'it-security' ); ?>: <?php echo esc_html( wp_get_theme()->get( 'Version' ) ); ?></span>	
                  <p><?php esc_html_e( 'To begin, locate the run importer button and click on it to initiate the importation of all the demo content.', 'it-security' ); ?></p>
                  <?php require get_parent_theme_file_path( '/inc/demo-content.php' ); ?>
               </div>
             </div>
             <div class="column column-half clearfix">
             <div class="get-screenshot">
               <img src="<?php echo esc_url( get_template_directory_uri().'/screenshot.png' ); ?>" />
             </div>   
             </div>
          </div>
       </div>
    </div>
<?php
}

?>
