<?php get_template_part('templates/page', 'header'); ?>
<article>

    <table class="table table-hover">
        <!--<thead>
        <tr>
            <th>date</th>
            <th>Titre de l'article</th>
        </tr>
        </thead>-->
        <tbody>

        <?php
        $postList = get_posts(array( 'category' => the_category_ID(false) ));
        foreach ( $postList as $post ) : setup_postdata( $post );
            $meta = get_post_meta(get_the_ID());
            ?>

            <tr>
                <td><?php echo $meta['Date'][0]; ?></td>
                <td><h4><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h4></td>
            </tr>

        <?php endforeach;?>
        </tbody>
    </table>


</article>