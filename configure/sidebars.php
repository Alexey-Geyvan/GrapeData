<?php

add_action( 'widgets_init', 'decentralized_widgets_init' );
function decentralized_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'decentralized' ),
        'id'            => 'primary',
        'before_widget' => '<aside class="widget">',
        'after_widget'  => '</aside>'        
    ) ); 
    
}