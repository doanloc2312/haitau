<?php if ( ! defined( 'ABSPATH' ) ) { die; } // Cannot access pages directly.
// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK SETTINGS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$settings           = array(
  'menu_title'      => 'Theme Option',
  'menu_type'       => 'menu', // menu, submenu, options, theme, etc.
  'menu_slug'       => 'cs-framework',
  'ajax_save'       => false,
  'show_reset_all'  => false,
  'framework_title' => 'Rainbow Media Framework <small>by DoanLoc</small>',
);

// ===============================================================================================
// -----------------------------------------------------------------------------------------------
// FRAMEWORK OPTIONS
// -----------------------------------------------------------------------------------------------
// ===============================================================================================
$options        = array();

// ----------------------------------------
// a option section for options overview  -
// ----------------------------------------
$options[]      = array(
  'name'        => 'general',
  'title'       => 'Cấu hình chung',
  'icon'        => 'fa fa-bullhorn',

  // begin: fields
  'fields'      => array(

    // begin: a field
    array(
      'id'        => 'logo-white',
      'type'      => 'image',
      'title'     => 'Logo trang chủ',
    ),
    array(
      'id'        => 'logo-black',
      'type'      => 'image',
      'title'     => 'Logo',
    ),
   
     array(
      'id'        => 'company_name',
      'type'      => 'text',
      'title'     => 'Tên công ty',
    ),
    array(
      'id'        => 'phone',
      'type'      => 'text',
      'title'     => 'Phone',
    ),
    array(
      'id'        => 'hotline',
      'type'      => 'text',
      'title'     => 'Hotline',
    ),
    array(
      'id'        => 'address',
      'type'      => 'text',
      'title'     => 'Địa chỉ',
    ),
    array(
      'id'        => 'email',
      'type'      => 'text',
      'title'     => 'Email',
    ),
    array(
      'id'        => 'about',
      'type'      => 'textarea',
      'title'     => 'Giới thiệu footer',
    ),
    array(
      'id'        => 'map',
      'type'      => 'wysiwyg',
      'title'     => 'Map',
    ),

  
    

  ), // end: fields
);

$options[]      = array(
  'name'        => 'customer',
  'title'       => 'Khách hàng',
  'icon'        => 'fa fa-bullhorn',

  // begin: fields
  'fields'      => array(

       array(
          'id'    => 'customers',
          'type'  => 'gallery',
          'title' => 'Logo',
        ),

  
    

  ), // end: fields
);

// $options[]      = array(
//   'name'        => 'social',
//   'title'       => 'Social',
//   'icon'        => 'fa fa-bullhorn',

//   // begin: fields
//   'fields'      => array(

//     // begin: a field
//     array(
//       'id'      => 'facebook',
//       'type'    => 'text',
//       'title'   => 'Facebook',
//     ),
//     array(
//       'id'      => 'youtube',
//       'type'    => 'text',
//       'title'   => 'Youtube',
//     ),
//     array(
//       'id'      => 'instagram',
//       'type'    => 'text',
//       'title'   => 'instagram',
//     ),
//     array(
//       'id'      => 'fanpage',
//       'type'    => 'text',
//       'title'   => 'Fanpage',
//     ),


//   ), // end: fields
// );

// $options[]      = array(
//   'name'        => 'contact_information',
//   'title'       => 'Thông tin liên hệ',
//   'icon'        => 'fa fa-envelope',

//   // begin: fields
//   'fields'      => array(
    
//     array(
//       'id'      => 'company_name',
//       'type'    => 'text',
//       'title'   => 'Tên công ty',
//     ), 
//     array(
//       'id'      => 'email',
//       'type'    => 'text',
//       'title'   => 'Email',
//     ),
//     array(
//       'id'      => 'hotline',
//       'type'    => 'text',
//       'title'   => 'Hotline',
//     ),
//       array(
//       'id'      => 'map_position',
//       'type'    => 'text',
//       'title'   => 'Map google',
//     ),    
    
   

//   ), // end: fields
// );

// $options[]      = array(
//   'name'        => 'banners',
//   'title'       => 'Banners product page',
//   'icon'        => 'fa fa-image',

//   // begin: fields
//   'fields'      => array(
    
//    array(
//       'id'        => 'banner-product',
//       'type'      => 'group',
//       'title'     => 'Banners product page',
//       'button_title'    => 'Thêm',
//       'fields'    => array(       
//         array(
//           'id'        => 'image',
//           'type'      => 'image',
//           'title'     => 'Image',
//         ),
//         array(
//           'id'        => 'title',
//           'type'      => 'text',
//           'title'     => 'Tiêu đề',
//         ),
//         array(
//           'id'        => 'excerpt',
//           'type'      => 'textarea',
//           'title'     => 'Mô tả',
//         ),
//         array(
//           'id'        => 'url',
//           'type'      => 'text',
//           'title'     => 'Đường dẫn',
//         ),
//       ),
//     ),

//   ), // end: fields
// );
// $options[]      = array(
//   'name'        => 'banners_studio',
//   'title'       => 'Banners studio page',
//   'icon'        => 'fa fa-image',

//   // begin: fields
//   'fields'      => array(
    
//    array(
//       'id'        => 'banner-studio',
//       'type'      => 'group',
//       'title'     => 'Banners studio page',
//       'button_title'    => 'Thêm',
//       'fields'    => array(    
//         array(
//           'id'        => 'title',
//           'type'      => 'text',
//           'title'     => 'Tiêu đề',
//         ),   
//         array(
//           'id'        => 'image',
//           'type'      => 'image',
//           'title'     => 'Image',
//         ),
       
//       ),
//     ),

//   ), // end: fields
// );


CSFramework::instance( $settings, $options );
