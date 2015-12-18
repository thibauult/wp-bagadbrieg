<?php

use Roots\Sage\Assets;

?>

<div class="container">
    <header class="header">

        <a class="visible-xs visible-sm hidden-md smart-menu" role="button" data-toggle="collapse" href="#collapseMenu" aria-expanded="false" aria-controls="collapseMenu">
            <span class="glyphicon glyphicon-menu-hamburger" aria-hidden="true"></span>
        </a>

        <div class="row">
            <div class="col-md-3 w-20 text-center">
                <a class="logo" href="<?php echo esc_url(home_url('/')); ?>">
                    <img class="img-responsive" src="<?php echo Assets\asset_path('images/logo.png'); ?>"/>
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
