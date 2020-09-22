<?php
/**
 * Intimate highlights Unique
 * @since Intimate 1.0.0
 *
 * @param null
 * @return void
 *
 */
global $intimate_theme_options;
$promo_cat = absint($intimate_theme_options['intimate-promo-select-category']);
$title = esc_html($intimate_theme_options['intimate_highlights_title']);

if( $promo_cat > 0 && is_home() )
{ ?>
    <section class="intimate-promo-section">
        <?php if ( is_front_page() && is_home() )
        {  ?>
            <div class="container">
                <div class="intimate-promo-highlights">
                    <h2 class="title-highlight">
                        <?php echo esc_html($title); ?>
                    </h2>
                </div>
                <div class="promo-section promo-three">
                    <?php
                    $args = array(
                        'cat' => $promo_cat ,
                        'posts_per_page' => 5,
                    );
                    
                    $query = new WP_Query($args);
                    
                    if($query->have_posts()):                        
                        while($query->have_posts()):
                            $query->the_post();
                            ?>                            
                            <div class="item">
                                <a href="<?php the_permalink(); ?>">
                                    <?php
                                    
                                    if(has_post_thumbnail())
                                    {
                                        
                                        $image_id  = get_post_thumbnail_id();
                                        $image_url = wp_get_attachment_image_src($image_id,'intimate-promo-post',true);
                                        ?>
                                        
                                        <figure>
                                            <img src="<?php echo esc_url($image_url[0]);?>">
                                        </figure>
                                    <?php   } ?>
                                </a>
                                <div class="promo-content">    
                                    <div class="post-category">
                                        <?php intimate_list_category(get_the_ID()); ?>
                                    </div>

                                    <h3 class="post-title entry-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <div class="post-date">
                                        <div class="entry-meta">
                                            <?php
                                            intimate_posted_by();
                                            intimate_posted_on();
                                            ?>
                                        </div><!-- .entry-meta -->
                                    </div>
                                </div>
                            </div>
                        
                        <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
            </div>
        <?php } ?>
    </section>
<?php   }