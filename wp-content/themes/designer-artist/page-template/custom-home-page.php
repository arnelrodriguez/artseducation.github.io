<?php
/**
 * Template Name: Custom Home Page
 */

get_header(); ?>

<main id="maincontent" role="main">
  <?php do_action( 'designer_artist_before_slider' ); ?>

  <?php if( get_theme_mod( 'designer_artist_slider_hide_show', false) == 1 || get_theme_mod( 'designer_artist_resp_slider_hide_show', true) == 1) { ?>
    <section id="slider">   
      <?php if(get_theme_mod('designer_artist_slider_type', 'Default slider') == 'Default slider' ){ ?>    
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel" data-bs-interval="<?php echo esc_attr(get_theme_mod( 'designer_artist_slider_speed',4000)) ?>">
          <?php $designer_artist_pages = array();
            for ( $count = 1; $count <= 3; $count++ ) {
              $mod = intval( get_theme_mod( 'designer_artist_slider_page' . $count ));
              if ( 'page-none-selected' != $mod ) {
                $designer_artist_pages[] = $mod;
              }
            }
            if( !empty($designer_artist_pages) ) :
              $args = array(
                'post_type' => 'page',
                'post__in' => $designer_artist_pages,
                'orderby' => 'post__in'
              );
              $query = new WP_Query( $args );
              if ( $query->have_posts() ) :
                $i = 1;
          ?>
          <div class="carousel-inner" role="listbox">
            <?php while ( $query->have_posts() ) : $query->the_post(); ?>
              <div <?php if($i == 1){echo 'class="carousel-item active"';} else{ echo 'class="carousel-item"';}?>>
                <?php if(has_post_thumbnail()){
                  the_post_thumbnail();
                } else{?>
                  <img src="<?php echo esc_url(get_template_directory_uri()); ?>/inc/block-patterns/images/banner.png" alt="" />
                <?php } ?>
                <div class="carousel-caption">
                  <div class="inner_carousel">
                    <h1 class="wow slideInRight delay-1000" data-wow-duration="2s"><a href="<?php echo esc_url( get_permalink() ); ?>" title="<?php echo the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
                    <p class="wow slideInRight delay-1000" data-wow-duration="2s"><?php $designer_artist_excerpt = get_the_excerpt(); echo esc_html( designer_artist_string_limit_words( $designer_artist_excerpt, esc_attr(get_theme_mod('designer_artist_slider_excerpt_number','10')))); ?></p>
                      <?php 
                      $designer_artist_button_text = get_theme_mod('designer_artist_slider_button_text', 'Explore Now');
                      $designer_artist_button_link = get_theme_mod('designer_artist_top_button_url', ''); 
                      if (empty($designer_artist_button_link)) {
                        $designer_artist_button_link = get_permalink();
                      }
                      if ($designer_artist_button_text || !empty($designer_artist_button_link)) { ?>
                        <div class="more-btn mt-0 my-lg-4 my-md-4 wow slideInRight delay-1000" data-wow-duration="2s">
                          <a href="<?php echo esc_url($designer_artist_button_link); ?>" class="button redmor">
                          <?php echo esc_html($designer_artist_button_text); ?>
                            <span class="screen-reader-text"><?php echo esc_html($designer_artist_button_text); ?></span>
                          </a>
                        </div>
                      <?php } ?>
                  </div>
                </div>
              </div>
            <?php $i++; endwhile; 
            wp_reset_postdata();?>
          </div>
          <?php else : ?>
            <div class="no-postfound"></div>
          <?php endif;
          endif;?>
          <?php if(get_theme_mod('designer_artist_slider_arrow_hide_show', true)){?>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" id="prev" data-bs-slide="prev">
            <i class="<?php echo esc_attr(get_theme_mod('designer_artist_slider_prev_icon','fas fa-angle-left')); ?>"></i>
            <span class="screen-reader-text"><?php echo esc_html('Previous','designer-artist'); ?></span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next" id="next">
            <i class="<?php echo esc_attr(get_theme_mod('designer_artist_slider_next_icon','fas fa-angle-right')); ?>"></i>
            <span class="screen-reader-text"><?php echo esc_html('Next','designer-artist'); ?></span>
            </button>
          <?php }?>
        </div>
      <?php } else if(get_theme_mod('designer_artist_slider_type', 'Advance slider') == 'Advance slider'){?>
        <?php echo do_shortcode(get_theme_mod('designer_artist_advance_slider_shortcode')); ?>
      <?php } ?>
    </section>
    <?php }?>
    <div>
      <?php do_action( 'designer_artist_after_slider' ); ?>
      <?php get_template_part('template-parts/header/middle-header'); ?>
    </div>

<!-- Product Section -->
    <?php if( get_theme_mod( 'designer_artist_product_hide_show') != '' &&  get_theme_mod( 'designer_artist_product_heading_product') != '') { ?>
      <section id="main-product" class="wow bounceInRight delay-1000 mt-md-5 mt-3" data-wow-duration="3s"> 
        <div class="container">
          <div class="heding-title">
            <?php if( get_theme_mod('designer_artist_product_heading_product') != ''){ ?>
              <h2 class=""><?php echo esc_html(get_theme_mod('designer_artist_product_heading_product'));?></h2>
            <?php }?>
            <p><?php echo esc_html(get_theme_mod('designer_artist_product_title',''));?></p>
          </div>     
          <div class="row"> 
            <?php if ( class_exists( 'WooCommerce' ) && get_theme_mod('designer_artist_product_settings') != '' ) {?>
              <?php $args = array( 
                'post_type' => 'product',
                'product_cat' => get_theme_mod('designer_artist_product_settings'),
                'order' => 'ASC',
                'hide_empty' => 0,
              );
              $loop = new WP_Query( $args );
                while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
                    <div class="col-lg-3 col-md-6 pt-0 pb-4">
                  <div class="main-product-section">
                    <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.esc_url(woocommerce_placeholder_img_src()).'" />'; ?>
                    <div class="add-to-cart"><?php if( $product->is_type( 'simple' ) ){ woocommerce_template_loop_add_to_cart( $loop->post, $product ); } ?></div>
                    <h3><a href="<?php echo esc_url(get_permalink( $loop->post->ID )); ?>"><?php the_title(); ?></a></h3>
                    <p class="<?php echo esc_attr( apply_filters( 'woocommerce_product_price_class', 'price' ) ); ?>"><?php echo $product->get_price_html(); ?></p>
                  </div>
                </div>
              <?php endwhile; wp_reset_query(); ?> 
              <?php } ?> 
          </div>
        </div>
      </section>
  <?php }?>
  <?php do_action( 'designer_artist_after_events_section' ); ?>

  <div id="content-vw" class="entry-content py-3">
    <div class="container">
      <?php while ( have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
      <?php endwhile; // end of the loop. ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>