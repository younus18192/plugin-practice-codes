<?php
/*
 * Plugin Name: show a message in the footer
 */
function samitf_function() {
    echo '<center><p><b>This is a custom text inserted in the footer</b></p></center>';
}
add_action( 'wp_footer', 'samitf_function' );
?>