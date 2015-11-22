<?php
if(is_front_page()) {
    query_posts(array('category_name' => 'actualites', 'posts_per_page' => -1));
?>
    <div id="carousel-news" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <!--
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        -->

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">

            <?php $i = 0; while (have_posts()) : the_post(); ?>
            <div class="item <?php echo $i++ == 0 ? 'active' : '' ?>">
                <?php the_post_thumbnail(); ?>
                <div class="carousel-caption">
                    <h3><?php the_title(); ?></h3>
                    <p>
                        <?php the_excerpt(); ?>
                        <a href="<?php the_permalink(); ?>" class="more">lire la suite...</a>
                    </p>
                </div>
            </div>
            <?php endwhile; ?>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-news" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-news" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <a title="Voir tous les articles" href="<?php esc_url(get_category_link(get_cat_ID('actualites'))) ?>">voir tous les articles</a>

<?php } else { ?>

<h1>OTHER PAGE</h1>

<?php } ?>