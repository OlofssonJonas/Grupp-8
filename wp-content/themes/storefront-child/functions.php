<?php
add_theme_support('thumbnails');
add_theme_support('widgets');



add_action('init', 'registerShop');

function registerShop() {
$shop_args = [
    "public" => true,
    "label" => "Butiker",
    "show_in_rest" => true,
    "has_archive" => true,
];

register_post_type('shop', $shop_args);
} 



// function theme_widgets() {
//     $widgets = array(
//         array (
//             'name' => 'rightWidget1',
//             'id' => 'rightWidget1',
//             'before_widget' => '',
//             'after_widget' => ''
//         ),
//         array(
//             'name' => 'rightWidget2',
//             'id' => 'rightWidget2',
//             'before_widget' => '',
//             'after_widget' => ''
//         ),
//         array(
//             'name' => 'rightWidget3',
//             'id' => 'rightWidget3',
//             'before_widget' => '',
//             'after_widget' => ''
//         ),
//         array(
//             'name' => 'footWidget1',
//             'id' => 'footWidget1',
//             'before_widget' => '',
//             'after_widget' => ''
//         ),
//         array(
//                 'name' => 'footWidget2',
//             'id' => 'footWidget2',
//             'before_widget' => '',
//             'after_widget' => ''
//         ),
//         array(
//             'name' => 'footWidget3',
//             'id' => 'footWidget3',
//             'before_widget' => '',
//             'after_widget' => ''
            
//         ),
//         array(
//             'name' => 'footWidget4',
//             'id' => 'footWidget4',
//             'before_widget' => '',
//             'after_widget' => ''
            
//         ),
//     );
//     foreach ($widgets as $widget) {
//         register_sidebar($widget);
//     }
// }
// add_action('init', 'theme_widgets');

?>