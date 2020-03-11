<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// TAXONOMY OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options     = array();

// -----------------------------------------
// Taxonomy Options                        -
// -----------------------------------------
// $options[]   = array(
//   'id'       => '_product_taxonomy_options',
//   'taxonomy' => 'danh-muc-san-pham', // category, post_tag or your custom taxonomy name
//   'fields'   => array(

//     array(
//           'id'          => 'image_tax',
//           'type'        => 'image',
//           'title'       => 'Ảnh đại diện',
//         ),
//     // array(
//     //   'id'          => 'posts_related',
//     //   'type'        => 'text',
//     //   'title'       => 'Bài viết liên quan',
//     //   'desc'        => 'Nhập id bài viêt ngăn cách bằng dấu ","',
//     // ),

//   ),
// );



CSFramework_Taxonomy::instance( $options );
