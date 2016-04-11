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
        echo '<h1>'.strtolower(single_cat_title('', false)).'</h1>';
    }
    ?>
</header>
<?php endif; ?>