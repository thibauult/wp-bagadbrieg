<?php get_template_part('templates/page', 'header'); ?>
<article class="category">

    <ul>

    <?php

    $postList = get_posts(array(
        'posts_per_page' => -1,
        'category'       => get_category(get_query_var( 'cat' ))->cat_ID
    ));

    $is_first = true;

    foreach ( $postList as $post ) : setup_postdata( $post );
        $meta = get_post_meta(get_the_ID());
        if(!$is_first) {
            echo '<hr>';
        }
    ?>

        <li class="row">
            <div class="col-md-5">
                <a href="<?php echo the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>
            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="col-md-12">
                        <h2><a href="<?php echo the_permalink(); ?>"><?php the_title(); ?></a></h2>
                        <span>le&nbsp;<?php echo the_time( get_option( 'date_format' ) ); ?></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p><?php the_excerpt(); ?></p>
                    </div>
                </div>
            </div>
        </li>

        <?php

        $is_first = false;

    endforeach;
    ?>

    </ul>
</article>