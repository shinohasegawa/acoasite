<?php register_sidebar(
    array ("id" => "sidebar-1")
);


add_theme_support( 'post-formats', array( 'aside', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video', 'audio' ) );


// カスタムメニュー  
register_nav_menus(   array(  
'place_global' => 'グローバル', 
'place_footer' => 'フッター',   )    
);


add_theme_support( 'post-thumbnails' );


/*タクソノミーのアイキャッチ追加*/ 
register_post_type( 'cook',
//カスタム投稿タイプの名前   
array(   'supports' => array('title','editor','thumbnail')    ) ); 


// アイキャッチ画像を利用できるようにします 
add_theme_support('post-thumbnails'); 
// アイキャッチ画像サイズ設定 
set_post_thumbnail_size(90, 90 ,true); 
// 60サイズ設定 
add_image_size('small_thumbnail', 60, 60, true); 
// 120サイズ設定 
add_image_size('large_thumbnail', 120, 120, true); 
// サブページヘッダー用画像サイズ設定 
add_image_size('category_image', 360, 230, true);



/* カスタム投稿タイプの追加 */  
add_action( 'init', 'create_post_type' );  
function create_post_type() {    
    register_post_type( 'AI',
/* post-type */      
array( 'labels' => array( 'name' => __( '個人用' ),      
'singular_name' => __( '個人用' ) ),      
'public' => true,      'menu_position' =>5     
 )    );  } 


 