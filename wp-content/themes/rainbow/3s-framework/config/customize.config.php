<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// CUSTOMIZE SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options              = array();

// -----------------------------------------


// -----------------------------------------
// Customize Panel Options Fields          -
// -----------------------------------------
// $options[]            = array(
//   'name'              => 'general',
//   'title'             => 'Cấu hình chung',
//   'description'       => '',
//   'sections'          => array(

//     // begin: section
//     array(
//       'name'          => 'footer',
//       'title'         => 'Footer 1',
//       'settings'      => array(

//         array(
// 		  'name'      => 'footer-intro',
// 		  'type'    => 'textarea',
// 		  'title'   => 'Giới thiệu',
// 		  'default' => ''
// 		),


//       ),
//     ),
//     // end: section

   

//   ),
//   // end: sections

// );

CSFramework_Customize::instance( $options );
