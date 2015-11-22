<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php
        global $fb_tags;
        if (isset ($fb_tags)) {
            echo $fb_tags;
        }
    ?>

    <?php wp_head(); ?>
</head>
