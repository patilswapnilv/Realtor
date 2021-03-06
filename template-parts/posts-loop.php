<?php if(have_posts() ) : ?>

                        <?php while( have_posts() ): the_post(); ?>

                            <article class="blog_post_wrapper">

                <?php if(has_post_thumbnail()) { ?>

                                    <div class="blog-item">
                                          <div class="avtar"><?php echo get_avatar(get_the_author_meta('ID'), 75); ?><div><span><?php the_time('j'); ?></span><?php echo substr(get_the_time('F'), 0, 3); ?></div></div>
                                        <div class="blog-detail">
                                            <div class="b-image"><?php the_post_thumbnail("realtor_blog_thumbnail"); ?></div>
                                            <div class="b-detail">
                                            <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                                          <div class="blog-info"><span><?php echo __('By', 'realtor').' '; ?><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>   |   <span><?php the_category(', '); ?></span>   |   <span>
                        <?php
                        $num_comments = get_comments_number(); // get_comments_number returns only a numeric value

                        if (comments_open() ) {
                            if ($num_comments == 0 ) {
                                $comments = __('No Comments', 'realtor');
                            } elseif ($num_comments > 1 ) {
                                $comments = $num_comments . __(' Comments', 'realtor');
                            } else {
                                $comments = __('1 Comment');
                            }
                                     $write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
                        } else {
                                     $write_comments =  __('Comments Disabled');
                        }
                        echo $write_comments;
                        ?>

                                          </span>   |        <span><a href="javascript:;"><i class="more"></i>Share this post</a></span></div>
                                          <p><?php the_excerpt(); ?></p>
                                          <a href="<?php the_permalink(); ?>" class="blog-read-more">READ MORE <i class="ti-arrow-right"></i></a>
                                        </div>
                                        </div>
                                      </div>

                                <?php
                }
                                
else { 

?>
<div class="blog-item">
  <div class="avtar"><?php echo get_avatar(get_the_author_meta('ID'), 75); ?><div><span><?php the_time('j'); ?></span><?php echo substr(get_the_time('F'), 0, 3); ?></div></div>
   <div class="blog-detail">
    <div class="b-detail">
    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
     <div class="blog-info"><span><?php echo __('By', 'realtor').' '; ?><a href="<?php echo get_author_posts_url(get_the_author_meta('ID')); ?>"><?php the_author(); ?></a></span>   |   <span><?php the_category(', '); ?></span>   |   <span>
        <?php
               $num_comments = get_comments_number(); // get_comments_number returns only a numeric value

        if (comments_open() ) {
            if ($num_comments == 0 ) {
                $comments = __('No Comments', 'realtor');
            } elseif ($num_comments > 1 ) {
                $comments = $num_comments . __(' Comments', 'realtor');
            } else {
                $comments = __('1 Comment');
            }
                 $write_comments = '<a href="' . get_comments_link() .'">'. $comments.'</a>';
        } else {
                 $write_comments =  __('Comments Disabled');
        }
        echo $write_comments;
                ?>

             </span>   |        <span><a href="javascript:;"><i class="more"></i>Share this post</a></span></div>
             <p><?php the_excerpt(); ?></p>
                                          <a href="<?php the_permalink(); ?>" class="blog-read-more">READ MORE <i class="ti-arrow-right"></i></a>
                                        </div>
                                        </div>
                                      </div>

<?php } ?>

                            </article><!-- blog_post_wrapper-->
                    
                        <?php endwhile;?>

        <?php
        if (function_exists('wp_bootstrap_pagination') ) {
                        wp_bootstrap_pagination();
        }
        ?>

                    
                    
                        <?php else: ?>

                        <div class="not-found">
                            <h1><?php _e("Blog is empty", "merrycafe"); ?></h2>
                            <span><?php _e("No posts were found", "merrycafe"); ?> </span>
                        </div>

                        

                        <?php endif; wp_reset_query(); ?>