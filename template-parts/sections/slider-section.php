<?php 
/**
 * Intimate Slider Function
 * @since Intimate 1.0.0
 *
 * @param null
 * @return void
 *
 */
global $intimate_theme_options;
$slide_id = absint($intimate_theme_options['intimate-select-category']);
$slide_right_id = absint($intimate_theme_options['intimate-select-category-slider-right']);
$trending_id = absint($intimate_theme_options['intimate-select-category-trending']);
      
    $args = array(
			'posts_per_page' => 3,
			'paged' => 1,
			'cat' => $slide_id,
			'post_type' => 'post'
		);
		$slider_query = new WP_Query($args);
		if ($slider_query->have_posts()): ?>
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-9">
        <div class="row no-gutters">
          <div class="col-lg-8">
            <div class="modern-slider">
        				<?php while ($slider_query->have_posts()) : $slider_query->the_post(); 
                  if(has_post_thumbnail()){
                  $image_id = get_post_thumbnail_id();
                  $image_url = wp_get_attachment_image_src( $image_id,'',true );
                ?>
                <div class="slider-items">
                  <div class="slide-wrap">
                  <div class="img-cover">
                    <?php intimate_post_thumbnail('intimate-promo-post'); ?>
                  </div>
                
                      <div class="caption bg__post-cover">
                            <?php
                               $categories = get_the_category();
                               if ( ! empty( $categories ) ) {
                                  echo '<a class="post-category" href="'.esc_url( get_category_link( $categories[0]->term_id ) ).'">'.esc_html( $categories[0]->name ).'</a>';
                              }                                 
                            ?>
                            <h2 class="mb-2">
                              <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                            </h2>
                            <div class="entry-meta">
                                <?php intimate_posted_by(); ?>
                                <?php intimate_posted_on(); ?>
                            </div>
                      </div>
                    </div>
                  </div>
                <?php } endwhile;
                wp_reset_postdata(); ?>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="popular__news-right">
              <?php
              $r_args = array(
              'posts_per_page' => 2,
              'cat' => $slide_right_id,
              'post_type' => 'post'
            );
            $slider_r_query = new WP_Query($r_args);
            if ($slider_r_query->have_posts()): while($slider_r_query->have_posts()) : $slider_r_query->the_post(); 
              $r_image_id = get_post_thumbnail_id();
                  $r_image_url = wp_get_attachment_image_src( $r_image_id,'',true );
              ?>

              <!-- Post Article -->
              <div class="card__post ">
                  <div class="card__post__body card__post__transition">
                      <a href="#">
                          <?php the_post_thumbnail(); ?>
                      </a>
                      <div class="card__post__content bg__post-cover">
                          <div class="card__post__category">
                              <?php
                               $categories = get_the_category();
                               if ( ! empty( $categories ) ) {
                                  echo '<a href="'.esc_url( get_category_link( $categories[0]->term_id ) ).'">'.esc_html( $categories[0]->name ).'</a>';
                              }                                 
                            ?>
                          </div>
                          <div class="card__post__title">
                              <h5 class="mb-1">
                                  <a href="#"><?php the_title(); ?></a>
                              </h5>
                          </div>
                          <div class="card__post__author-info">
                              <ul class="list-inline">
                                  <li class="list-inline-item">
                                      <a href="#">
                                         <?php intimate_posted_by();?>
                                      </a>
                                  </li>
                                  <li class="list-inline-item">
                                      <span>
                                          <?php intimate_posted_on();?>
                                      </span>
                                  </li>
                              </ul>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- Post Article -->
             <?php endwhile; wp_reset_postdata();  endif; ?>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3">
        <div class="tab__wrapper">
          <ul id="tab_first" class="tabs-nav">
              <li class="tab-active"><a data-toggle="tab" href="#TB1"><i class="fa fa-fire"></i><?php esc_html_e('Popular', 'intimate'); ?></a></li>
              
              <li class=""><a data-toggle="tab" href="#TB2"><i class="fa fa-clock-o"></i><?php esc_html_e('Recent', 'intimate'); ?></a></li>
              
              <li class=""><a data-toggle="tab" href="#TB3"><i class="fa fa-random"></i><?php esc_html_e('Trending', 'intimate'); ?></a></li>
          </ul>
          <div class="tab-content tab-content_1">
            <div id="TB1" class="active">
                <!-- Post Article -->
                <?php 
                      $p_args = array(
                        'post_type' => 'post',
                        'posts_per_page'=> 4,
                        'orderby' => 'comment_count',                    
                    );
                    // the query
                    $p_the_query = new WP_Query( $p_args ); 
                    if ( $p_the_query->have_posts()):
                    while($p_the_query->have_posts())
                      : $p_the_query->the_post(); ?>
                  <div class="card__post card__post-list py-2">
                      <div class="image-sm my-auto">
                          <?php the_post_thumbnail('thumbnail'); ?>
                      </div>
                      <div class="card__post__body my-auto">
                          <div class="card__post__content">
                              <div class="card__post__author-info mb-1">
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <?php
                                          $categories = get_the_category();
                                          if ( ! empty( $categories ) ) {
                                            echo '<a href="'.esc_url( get_category_link( $categories[0]->term_id ) ).'">'.esc_html( $categories[0]->name ).'</a>';
                                            }                                 
                                          ?>
                                      </li>
                                  </ul>
                              </div>
                              <div class="card__post__title">
                                  <h6 class="mb-1">
                                      <a href="<?php the_permalink(); ?>">
                                          <?php the_title(); ?>
                                      </a>
                                  </h6>
                              </div>
                              <div class="card__post__author-info">
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <span class="text-dark text-capitalize">
                                              <?php intimate_posted_on(); ?>
                                          </span>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
                <?php endwhile; wp_reset_postdata(); endif; ?>
            </div> 
            <div id="TB2">
              <?php 
                      $t_args = array(
                        'post_type' => 'post',
                        'posts_per_page'=> 4,
                        'cat'=> $trending_id,
                    );
                    // the query
                    $t_the_query = new WP_Query( $t_args ); 
                    if ( $t_the_query->have_posts()):
                    while($t_the_query->have_posts())
                      : $t_the_query->the_post(); ?>
                <!-- Post Article -->
                <div class="card__post card__post-list py-2">
                    <div class="image-sm my-auto">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="card__post__body my-auto">
                        <div class="card__post__content">
                              <div class="card__post__author-info mb-1">
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <?php
                                          $categories = get_the_category();
                                          if ( ! empty( $categories ) ) {
                                            echo '<a href="'.esc_url( get_category_link( $categories[0]->term_id ) ).'">'.esc_html( $categories[0]->name ).'</a>';
                                            }                                 
                                          ?>
                                      </li>
                                  </ul>
                              </div>
                              <div class="card__post__title">
                                  <h6 class="mb-1">
                                      <a href="<?php the_permalink(); ?>">
                                          <?php the_title(); ?>
                                      </a>
                                  </h6>
                              </div>
                              <div class="card__post__author-info">
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <span class="text-dark text-capitalize">
                                              <?php intimate_posted_on(); ?>
                                          </span>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                    </div>
                </div>
                 <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
            <div id="TB3">
              <?php 
                      $t_args = array(
                        'post_type' => 'post',
                        'posts_per_page'=> 4,
                        'cat'=> $trending_id,
                    );
                    // the query
                    $t_the_query = new WP_Query( $t_args ); 
                    if ( $t_the_query->have_posts()):
                    while($t_the_query->have_posts())
                      : $t_the_query->the_post(); ?>
                <!-- Post Article -->
                <div class="card__post card__post-list py-2">
                    <div class="image-sm my-auto">
                        <?php the_post_thumbnail('thumbnail'); ?>
                    </div>
                    <div class="card__post__body my-auto">
                        <div class="card__post__content">
                              <div class="card__post__author-info mb-1">
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <?php
                                          $categories = get_the_category();
                                          if ( ! empty( $categories ) ) {
                                            echo '<a href="'.esc_url( get_category_link( $categories[0]->term_id ) ).'">'.esc_html( $categories[0]->name ).'</a>';
                                            }                                 
                                          ?>
                                      </li>
                                  </ul>
                              </div>
                              <div class="card__post__title">
                                  <h6 class="mb-1">
                                      <a href="<?php the_permalink(); ?>">
                                          <?php the_title(); ?>
                                      </a>
                                  </h6>
                              </div>
                              <div class="card__post__author-info">
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <span class="text-dark text-capitalize">
                                              <?php intimate_posted_on(); ?>
                                          </span>
                                      </li>
                                  </ul>
                              </div>
                          </div>
                    </div>
                </div>
                 <?php endwhile; wp_reset_postdata(); endif; ?>
            </div>
          </div>
        </div>   
      </div>
    </div>
  </div>
<?php endif; ?>