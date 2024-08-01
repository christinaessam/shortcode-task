<?php
function custom_scripts() {
    wp_enqueue_script( 'my-custom-script', get_template_directory_uri() . '/assets/js/custom-shortcode.js', array( 'jquery' ), '1.0', true );
    wp_localize_script( 'my-custom-script', 'myAjax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
    wp_enqueue_style( 'my-custom-style', get_template_directory_uri().'/assets/css/custom-shortcode.css' ); 

}
add_action( 'wp_enqueue_scripts', 'custom_scripts' );


function posts_display_function($atts, $content = null, $tag = ''){

    $atts = shortcode_atts( array(
        'categories' => '3',
        'postsnum' => '6'
    ), $atts );
   
    $categories= $atts['categories'];
    $numberOfPosts = $atts['postsnum'];

    $args = array(
        'orderby'          => 'date',
		'order'            => 'DESC',
        'category'=> $categories,
        'numberposts' => $numberOfPosts
    ); 
    $posts=get_posts($args);

    $posts_display="<div id='main-container'><div id='posts-container' data-page=1 data-categories='".$categories."' data-postsnum='".$numberOfPosts."'>";

    if($posts){
        foreach($posts as $post){
            $post_title=get_the_title($post);
            $post_link=get_permalink($post);

            $post_text= "<a href=\"$post_link\"><h3>$post_title</h3></a> ";
            $posts_display.=$post_text;
        }
    }
    $posts_display.="</div>";

    $show_more_button="<button id='sc_load_more' class='button'>Load more</button>";
    $posts_display.=$show_more_button;
    $posts_display.="</div>";
    return $posts_display;
}
add_shortcode('display-posts', 'posts_display_function');



function load_more_posts() {
    $paged = isset($_POST['page_no']) ? intval($_POST['page_no']) : 1;
    $categories = isset($_POST['categories']) ? $_POST['categories'] : 0;
    $posts_per_page = isset($_POST['postsnum']) ? $_POST['postsnum'] : 1;
  
    $args = array(
      'post_type' => 'post', 
      'posts_per_page' => $posts_per_page,
      'cat' => $categories,
      'paged' => $paged
    );

    $query = new WP_Query($args);
    $posts_display="";
    if ($query->have_posts()) {
    
        $posts =$query->posts;
        
        foreach($posts as $post){
            $post_title=get_the_title($post);
            $post_link=get_permalink($post);

            $post_text= "<a href=\"$post_link\"><h3>$post_title</h3></a> ";
            $posts_display.=$post_text;
        }
        echo $posts_display;
      
    } else {
      echo 'No more posts';
    }
  
    wp_die();
  }
  
  add_action('wp_ajax_load_more', 'load_more_posts');
  add_action('wp_ajax_nopriv_load_more', 'load_more_posts');
  

?>