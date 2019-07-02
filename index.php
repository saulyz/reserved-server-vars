<?php
    require( __DIR__ . '/inc/check.php' );
    if ( is_cli() ) {
        require( __DIR__ . '/templates/cli.php' );
    } else {
        require( __DIR__ . '/templates/web.php' );
    }
