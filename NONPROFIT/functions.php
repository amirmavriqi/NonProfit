<?php

function nonprofit_register_styles(){
    $version= wp_get_theme()->get('version');

wp_enqueue_style( 'noprofit_style', get_template_directory_uri( )."/style.css",array('noprofit_bootstrap' ),'$version','all'); 
wp_enqueue_style( 'noprofit_bootstrap',"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" ,array(),'4.4.1','all'); 
wp_enqueue_style( 'noprofit_fontawesome',"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" ,array(),'5.13.0','all'); 
}
add_action( 'wp_enqueue_scripts', 'nonprofit_register_styles');


function nonprofit_register_scripts(){
    
wp_enqueue_script('nonprofit-bootstrap','https://code.jquery.com/jquery-3.4.1.slim.min.js', 'array()','3.4.1' , 'all' );

}
add_action( 'wp_enqueue_scripts', 'nonprofit_register_scripts');
?>