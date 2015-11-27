<?php
while (have_posts()) : the_post();
    get_template_part('templates/page', 'header');
    get_template_part('templates/content', 'page');
    get_template_part('templates/page', 'footer');
    comments_template('/templates/comments.php');
endwhile;
?>
<script type="text/javascript">
    (function($) {
        $("article > p:has(> iframe)").addClass('text-center'); // detect video and center it
    })(jQuery);
</script>
