<?php use Roots\Sage\Titles; ?>

<?php if(!is_front_page()) :  ?>
<header>
    <div class="breadcrumb">
        <?php
        if(function_exists('bcn_display'))
        {
            bcn_display();
        }
        ?>
    </div>
    <?php
    if(!is_category()) {
        echo '<h1>'.Titles\title().'</h1>';
    }
    else {
        echo '<h1>'.get_cat_name(the_category_ID(false)).'</h1>';
    }
    ?>
</header>
<?php endif; ?>

<script type="text/javascript">
    jQuery(document).ready(function(){
        console.log(jQuery(".breadcrumb>.itemListElement>a>span[property='name']").length);
    });
</script>