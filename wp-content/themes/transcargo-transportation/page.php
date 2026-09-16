<?php get_header(); ?>

<div id="content">
    <div class="feature-header">
      <div class="feature-post-thumbnail">
         <?php
            if ( has_post_thumbnail() ) :
              the_post_thumbnail();
            else:
              ?>
              <div class="slider-alternate">
                <img src="<?php echo get_stylesheet_directory_uri() . '/assets/images/header-banner.png'; ?>">
              </div>
              <?php
            endif;
          ?>
        <h1 class="post-title feature-header-title"><?php the_title(); ?></h1>
        <?php if ( get_theme_mod('transcargo_transportation_breadcrumb_enable',true) ) : ?>
          <div class="bread_crumb text-center">
            <?php transcargo_transportation_breadcrumb();  ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  <div class="container">
    <?php $transcargo_transportation_theme_layout = get_theme_mod( 'transcargo_transportation_page_layout','Right Sidebar');
            if($transcargo_transportation_theme_layout == 'One Column'){ ?>
                <?php while ( have_posts() ) : the_post();
                    get_template_part( 'template-parts/content-page');
                    wp_link_pages(
                            array(
                              'before' => '<div class="transcargo-transportation-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template(); 
                endwhile; ?>
                <?php echo esc_html (transcargo_transportation_edit_link()); ?>
        <?php }else if($transcargo_transportation_theme_layout == 'Right Sidebar'){ ?>
            <div class="row">
                <div class="col-lg-9 col-md-8 mt-5">
                    <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="transcargo-transportation-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                        echo esc_html (transcargo_transportation_edit_link());
                      ?>
                </div>
                <div id="sidebar" class="col-lg-3 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php }else if($transcargo_transportation_theme_layout == 'Left Sidebar'){ ?>
            <div class="row">
                <div id="sidebar" class="col-lg-3 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
                <div class="col-lg-9 col-md-8 mt-5">
                    <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="transcargo-transportation-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                        echo esc_html (transcargo_transportation_edit_link());
                      ?>
                </div>
            </div>
        <?php }else {?>
            <div class="row">
               <div class="col-lg-9 col-md-8 mt-5">
                    <?php
                        while ( have_posts() ) :
                          the_post();
                          get_template_part( 'template-parts/content', 'page');

                          wp_link_pages(
                            array(
                              'before' => '<div class="transcargo-transportation-pagination">',
                              'after' => '</div>',
                              'link_before' => '<span>',
                              'link_after' => '</span>'
                            )
                          );
                          comments_template();
                        endwhile;
                        echo esc_html (transcargo_transportation_edit_link());
                      ?>
                </div>
                <div id="sidebar" class="col-lg-3 col-md-4">
                    <?php get_sidebar(); ?>
                </div>
            </div>
        <?php } ?>
  </div>
</div>

<?php get_footer(); ?>