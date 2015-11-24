<?php

use Roots\Sage\Assets;

?>

<div class="container">
    <header class="header">

      <div class="row">
        <div class="col-md-3 w-20 text-center">
            <a href="<?= esc_url(home_url('/')); ?>">
                <img class="img-responsive" src="<?php echo Assets\asset_path('images/logo.png'); ?>" />
            </a>
        </div>

        <div class="col-md-6 w-60 text-center">
            <div class="brand-wrapper">
                <h1>Bagad <strong>Brieg</strong> Pipe Band</h1>
            </div>
        </div>

      </div>
    </header>
</div>
