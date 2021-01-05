<?php
function group_style(){
        wp_enqueue_style('icon','https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css');
        wp_enqueue_style('bootrap','https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css');   

    wp_register_style('plugin',get_template_directory_uri().'/plugin/swiper/package/css/swiper.min.css','all');
    wp_enqueue_style('plugin');
    wp_register_style('style',get_template_directory_uri().'/style.css','all');
    wp_enqueue_style('style');
    
}
add_action ('wp_enqueue_scripts','group_style');


