<?php 

add_filter( 'walker_nav_menu_start_el', function( $item ) {

    $parts = explode( '>', $item );
    $out   = array ();

    foreach ( $parts as $i => $part )
    {
        if ( 0 === strpos( $part, '<a ' ) ) // a start
            $out[ $i ] = $part . ' data-foo="bar"';
        else
            $out[ $i ] = $part;
    }

    return join( '>', $out );
});
