<?php get_template_part('templates/page', 'header'); ?>
<article>

    <table class="table table-hover">
        <tbody>

        <?php
        $postList = get_posts(array( 'category' => get_category( get_query_var( 'cat' ) )->cat_ID ));

        if(!empty($postList)) :
            foreach ( $postList as $post ) : setup_postdata( $post );
            $meta = get_post_meta(get_the_ID());
        ?>
                <tr>
                    <td><?php echo $meta['Date'][0]; ?></td>
                    <td><h4><a href="<?php echo the_permalink(); ?>"><?php echo the_title(); ?></a></h4></td>
                </tr>

        <?php
            endforeach;
        else :
        ?>
            <div class="alert alert-warning">Cette catégorie ne contient pas encore d'articles !</div>
        <?php
        endif;
        ?>
        </tbody>
    </table>


</article>