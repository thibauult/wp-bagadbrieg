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
    <h1><?= Titles\title(); ?></h1>
</header>
<?php endif; ?>