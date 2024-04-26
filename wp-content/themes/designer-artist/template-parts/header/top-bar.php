<?php
/**
 * The template part for Middle Header
 *
 * @package Designer Artist
 * @subpackage designer-artist
 * @since designer-artist 1.0
 */
?>
<?php if( get_theme_mod( 'designer_artist_topbar_hide_show', false) == 1 || get_theme_mod( 'designer_artist_resp_topbar_hide_show', false) == 1) { ?>
  <div class="top-bar">
    <div class="container">
      <div class="row">
        <div class="col-lg-3 col-md-4 col-12 align-self-center text-md-start text-center py-md-0 py-2">
          <?php if( get_theme_mod('designer_artist_email_address') != ''){ ?>
            <span class=""><a href="mailto:<?php echo esc_attr(get_theme_mod('designer_artist_email_address',''));?>"><i class="me-2 <?php echo esc_attr(get_theme_mod('designer_artist_email_icon','fas fa-envelope')); ?>"></i><?php echo esc_html(get_theme_mod('designer_artist_email_address',''));?></a></span>
          <?php } ?>
        </div>
        <div class="col-lg-3 col-md-3 col-12 align-self-center text-md-start text-center py-md-0 py-2">
          <?php if(get_theme_mod('designer_artist_phone_number') != '') {?>
            <span class="phone"><a href="tel:<?php echo esc_attr(get_theme_mod('designer_artist_phone_number')) ?>"><i class="me-2 <?php echo esc_attr(get_theme_mod('designer_artist_phone_icon','fas fa-phone')); ?>"></i><?php echo esc_html(get_theme_mod('designer_artist_phone_number')) ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('designer_artist_phone_number')) ?></span></a>
          </span>
          <?php }?>
        </div>
        <div class="col-lg-4 col-md-3 col-12 align-self-center text-md-start text-center py-md-0 py-2">
          <div class="social-icon align-self-end text-center ">
              <?php dynamic_sidebar('social-widget'); ?>
          </div>
        </div>
          <div class="col-lg-2 col-md-2 col-12 align-self-center text-md-end text-center py-md-0 py-2">
            <div class="button-text">
              <?php if(get_theme_mod('designer_artist_cart_button_text') != '' || get_theme_mod('designer_artist_cart_button_link') != ''){ ?>
                <span class=""><a href="<?php echo esc_url(get_theme_mod('designer_artist_cart_button_link')); ?>"><i class="me-2 <?php echo esc_attr(get_theme_mod('designer_artist_cart_icon','fas fa-shopping-bag')); ?>"></i><?php echo esc_html(get_theme_mod('designer_artist_cart_button_text')); ?><span class="screen-reader-text"><?php echo esc_html(get_theme_mod('designer_artist_cart_button_text')); ?></span></a></span>
              <?php }?>
            </div>
          </div>
      </div>
      <hr>
    </div>
  </div>
<?php }?>

