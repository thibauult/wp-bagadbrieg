<?php
/**
 * Template Name: Custom Template
 */

get_template_part('templates/page', 'header') ?>

<article class="partitions">
<?php

/**
 * @param $slug
 * @return toutes les sous-catégories 'partitions'
 */
function get_media_category_by_slug($slug) {
    $term = get_term_by('slug', $slug, 'media_category');
    return get_categories(array(
        'type'     => 'post',
        'child_of' => $term->term_id,
        'parent'   => $term->term_id,
        'hide_empty' => false,
        'taxonomy' => 'media_category')
    );
}

/**
 * @param $slug
 * @return tous les médias associés à une catégorie
 */
function get_media_by_slug($slug) {
    return new WP_Query(array(
        'post_type' => 'attachment',
        'post_status' => 'inherit',
        'posts_per_page' => -1,
        'tax_query' => array(
            array(
                'taxonomy' => 'media_category',
                'field'    => 'slug',
                'terms'    => $slug,
            )
        )
    ));
}

foreach(get_media_category_by_slug('partitions') as $cat) : ?>

    <h2><?php echo $cat->name; ?></h2>

    <div class="panel-group" id="accordion" role="tablist">

        <?php foreach(get_media_category_by_slug($cat->slug) as $subCat) : ?>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="heading-<?php echo $subCat->term_id; ?>">
                <h4 class="panel-title">
                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse-<?php echo $subCat->term_id; ?>">
                        <?php echo $subCat->name; ?>
                    </a>
                </h4>
            </div>
            <div id="collapse-<?php echo $subCat->term_id; ?>" class="panel-collapse collapse" role="tabpanel">
                <div class="panel-body">

                    <ul></ul>
                    <?php
                        $the_query = get_media_by_slug($cat->slug);
                        if($the_query->have_posts()) :
                    ?>

                        <ul>
                            <?php foreach( $the_query->posts as $post ) : setup_postdata( $post ); ?>

                                <li class="item">
                                    <i class="fa fa-file-pdf-o"></i>
                                    <a target="_blank" href="<?php echo wp_get_attachment_url( get_the_ID() ); ?>">
                                        <?php echo the_title(); ?>
                                    </a>
                                </li>

                            <?php endforeach; ?>
                        </ul>

                    <?php
                        wp_reset_postdata();
                        endif;
                    ?>

                </div>
            </div>
        </div>
        <?php endforeach; ?>

    </div>
<?php endforeach; ?>

</article>