<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// METABOX OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options      = array();

// $options[]    = array(
//   'id'        => '_custom_category_options',
//   'post_type' => 'category', // or array( 'category', 'post_tag' )

//   // begin: fields
//   'fields'    => array(

//     // begin: a field
//      array(
//           'id'          => 'gallery_cat',
//           'type'        => 'gallery',
//           'title'       => 'Gallery',
//         ),

//   ), // end: fields
// );

// $options[]      = array(
//   'id'            => '_custom_meta_options_studio',
//   'title'         => 'Options',
//   'post_type'     => 'studio-detail', // or post or CPT or array( 'page', 'post' )
//   'context'       => 'normal',
//   'priority'      => 'default',
//   'sections'      => array(
//     // begin section
//     array(
//       'name'      => 'section_1',
//       'title'     => '',
//       'fields'    => array( 
//         // Select with posts
//         array(
//           'id'          => 'opt-select-6',
//           'type'        => 'select',
//           'title'       => 'Select with posts',
//           'placeholder' => 'Select a post',
//           'options'     => 'posts',
//         ),
//       ),
//     )
//   ),
// );

// $options[]      = array(
//   'id'            => '_custom_meta_options_product',
//   'title'         => 'Options',
//   'post_type'     => 'product', // or post or CPT or array( 'page', 'post' )
//   'context'       => 'normal',
//   'priority'      => 'default',
//   'sections'      => array(
//     // begin section
//     array(
//       'name'      => 'section_1',
//       'title'     => 'Gallery',
//       'fields'    => array(
 
// 		    array(
// 	          'id'          => 'gallery_product',
// 	          'type'        => 'gallery',
// 	          'title'       => 'Gallery',
// 	        ),

//       ),

//     ),
//     array(
//       'name'      => 'section_2',
//       'title'     => 'Product overview',
//       'fields'    => array(
//         array(
//             'id'          => 'code',
//             'type'        => 'text',
//             'title'       => 'Code',
//           ),
//         array(
//             'id'          => 'design_name',
//             'type'        => 'text',
//             'title'       => 'Designer name',
//           ),
//         array(
//             'id'          => 'product',
//             'type'        => 'text',
//             'title'       => 'Product',
//           ),
//         array(
//             'id'          => 'series',
//             'type'        => 'text',
//             'title'       => 'Series',
//           ),
        

//       ),

//     ),
//     array(
//       'name'      => 'section_3',
//       'title'     => 'Appearance',
//       'fields'    => array(
//         array(
//             'id'          => 'tone',
//             'type'        => 'text',
//             'title'       => 'Tone',
//           ),
//         array(
//             'id'          => 'surface_finished',
//             'type'        => 'text',
//             'title'       => 'Surface Finished',
//           ),
//         array(
//             'id'          => 'gloss_level',
//             'type'        => 'text',
//             'title'       => 'Gloss Level',
//           ),
//         array(
//             'id'          => 'edge_format',
//             'type'        => 'text',
//             'title'       => 'Edge Format',
//           ),
        

//       ),

//     ),
//     array(
//       'name'      => 'section_4',
//       'title'     => 'Packing Details',
//       'fields'    => array(
//         array(
//             'id'          => 'pieces_per_box',
//             'type'        => 'text',
//             'title'       => 'Pieces per box',
//           ),
//         array(
//             'id'          => 'sqm_per_box',
//             'type'        => 'text',
//             'title'       => 'Sqm per box',
//           ),
//         array(
//             'id'          => 'sqft_per_box',
//             'type'        => 'text',
//             'title'       => 'Sqft per box',
//           ),
       
        

//       ),

//     ),
//     array(
//       'name'      => 'section_5',
//       'title'     => 'Specification',
//       'fields'    => array(
//         array(
//             'id'          => 'dimension',
//             'type'        => 'text',
//             'title'       => 'Dimension',
//           ),
//         array(
//             'id'          => 'thickness',
//             'type'        => 'text',
//             'title'       => 'Thickness',
//           ),
//         array(
//             'id'          => 'core_material',
//             'type'        => 'text',
//             'title'       => 'Core Material',
//           ),
//         array(
//             'id'          => 'profile',
//             'type'        => 'text',
//             'title'       => 'Profile',
//           ),
//         array(
//             'id'          => 'profile_coating',
//             'type'        => 'text',
//             'title'       => 'Profile Coating',
//           ),
//          array(
//             'id'          => 'acoustic_underlayment',
//             'type'        => 'text',
//             'title'       => 'Acoustic Underlayment',
//           ),
//         array(
//             'id'          => 'utility_class',
//             'type'        => 'text',
//             'title'       => 'Utility Class',
//           ),
//         array(
//             'id'          => 'green_smarking',
//             'type'        => 'text',
//             'title'       => 'Green Marking',
//           ),
        

//       ),

//     ),
//     array(
//       'name'      => 'section_6',
//       'title'     => 'Icons',
//       'fields'    => array(
//          array(
//           'id'        => 'product_icons',
//           'type'      => 'group',
//           'title'     => 'Product icons',
//           'button_title'    => 'Thêm',
//           'fields'    => array( 
//            array(
//               'id'        => 'title',
//               'type'      => 'text',
//               'title'     => 'Nhãn',
//             ),      
//             array(
//               'id'        => 'image',
//               'type'      => 'image',
//               'title'     => 'Image',
//             ),
           
           
//           ),
//         ),
        

//       ),

//     ),




//   ),
// );


CSFramework_Metabox::instance( $options );
