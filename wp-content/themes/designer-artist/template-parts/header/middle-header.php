<?php
/**
 * The template part for Middle Header
 *
 * @package Designer Artist
 * @subpackage designer-artist
 * @since designer-artist 1.0
 */
?>

<div id="middle-header" class="<?php if( get_theme_mod( 'designer_artist_sticky_header', false) == 1 || get_theme_mod( 'designer_artist_stickyheader_hide_show', false) == 1) { ?> header-sticky"<?php } else { ?>close-sticky <?php } ?>">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-5 col-12">
        <div class="logo align-self-center text-lg-center text-md-center text-center">
          <svg class="logo-shape upward" width="317" height="58" viewBox="0 0 317 58">
            <image id="logo-curve" width="317" height="58" xlink:href="data:img/png;base64,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"/>
          </svg>
          <?php if ( has_custom_logo() ) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
          <?php endif; ?>
          <?php $blog_info = get_bloginfo( 'name' ); ?>
            <?php if ( ! empty( $blog_info ) ) : ?>
              <?php if ( is_front_page() && is_home() ) : ?>
                <?php if( get_theme_mod('designer_artist_logo_title_hide_show',true) == 1){ ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php } ?>
              <?php else : ?>
                <?php if( get_theme_mod('designer_artist_logo_title_hide_show',true) == 1){ ?>
                  <p class="site-title mb-0"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
                <?php } ?>
              <?php endif; ?>
            <?php endif; ?>
            <?php
              $description = get_bloginfo( 'description', 'display' );
              if ( $description || is_customize_preview() ) :
            ?>
            <?php if( get_theme_mod('designer_artist_tagline_hide_show',false) == 1){ ?>
              <p class="site-description mb-0">
                <?php echo esc_html($description); ?>
              </p>
            <?php } ?>
          <?php endif; ?>
          <svg class="logo-shape" width="317" height="58" viewBox="0 0 317 58">
            <image id="logo-curve" width="317" height="58" xlink:href="data:img/png;base64,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"/>
          </svg>
        </div>
      </div>
      <div class="col-lg-9 col-md-5 col-6 align-self-center">
          <?php get_template_part('template-parts/header/navigation'); ?>
      </div>
      <div class="col-lg-1 col-md-2 col-6 align-self-center text-center">
        <?php if( get_theme_mod( 'designer_artist_search_hide_show',true) == 1) { ?>
          <div class="search-box">
            <span><a href="#"><i class="<?php echo esc_attr(get_theme_mod('designer_artist_searchopen_topbar_section','fas fa-search')); ?>"></i></a></span>
          </div>
        <?php }?>
        <div class="serach_outer">
          <div class="closepop"><a href="#maincontent"><i class="<?php echo esc_attr(get_theme_mod('designer_artist_searchclose_topbar_section','fas fa-window-close')); ?>"></i></a></div>
          <div class="serach_inner">
            <?php get_search_form(); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>