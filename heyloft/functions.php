// require get_template_directory() . '/inc/theme-options.php';
  
    
 add_action( 'cmb2_admin_init', 'cmb2_rs_metaboxes' );

function cmb2_rs_metaboxes() {
  

	/**
	 * Initiate the metabox
	 */
    $rs_cmb_repeat = new_cmb2_box( array(
		'id'            =>  'floor_plan_gallery',
		'title'         =>  'Gallery',
		'object_types' => [ 'page' ], // post type
			'show_on'      => [ 'key' => 'page-template', 'value' => 'page-filter.php' ],
		'context'       => 'normal',
		'priority'      => 'low',
		'show_names'    => true,
	) );
	$rs_cmb_repeat->add_field( [
    'name'    =>  'Heading',
            'id'      =>  'price',
            'description' => 'Starting title',
            'type'    => 'text',
] );
   $rs_group_repeat = $rs_cmb_repeat->add_field( array(
            'id'          => 'floor_plan_sections',
            'type'        => 'group',
            'options'     => [
                'group_title'   =>  'Gallery',
                'add_button'    =>  'Add another Gallery',
                'remove_button' =>  'Remove Gallery' ,
                'sortable'      => true, // beta
			],
        ) );
	   
		$rs_cmb_repeat->add_group_field(  $rs_group_repeat, [
            'name'    => 'Floor Plain Image',
            'id'      => 'floor_image',
			 'description' => 'Upload Plain image',
            'type'    => 'file',
			'attributes' => [ 'required' =>'required']
        ] );
        
		$rs_cmb_repeat->add_group_field(  $rs_group_repeat, [
            'name'    => 'Floor detail Image',
            'id'      => 'floor_image_image',
			 'description' => 'Upload detail image of floor plan',
            'type'    => 'file',
			'attributes' => [ 'required' =>'required']
        ] );
         $rs_cmb_repeat->add_group_field(  $rs_group_repeat, array(
            'name'    =>  'Css Class Name',
            'id'      =>  'title_1',
			'description' => 'Put Css class. Just put (onebed, if it is one bedroom, twobed if it is two bedroom, threebed, fourbed, fivebed, sixbed, sevenbed, eightbed) according to number of beds ',
            'type'    => 'text',
			 'attributes' => [ 'required' =>'required']
            
        ) );
    
        $rs_cmb_repeat->add_group_field(  $rs_group_repeat, array(
            'name'    =>  'Image title',
            'id'      =>  'title_2',
            'description' => 'Put the image title.',
            'type'    => 'text',
            
        ) );
        $rs_cmb_repeat->add_group_field(  $rs_group_repeat, array(
            'name'    =>  'Image information(sq.ft)',
            'id'      =>  'title_3',
            'description' => 'Put the image information.',
            'type'    => 'text',
            
        ) );
    
        $rs_cmb_repeat->add_group_field(  $rs_group_repeat, array(
            'name'    =>  'Data Caption',
            'id'      =>  'data_caption',
            'description' => 'Put the data caption. (It appears when we click image ) ',
            'type'    => 'text',
            
        ) );
          $rs_cmb_repeat->add_group_field(  $rs_group_repeat, array(
            'name'    =>  'Starting price',
            'id'      =>  'starting_price',
            'description' => 'Put starting price ',
            'type'    => 'text',
            
        ) );
      
          $rs_cmb_repeat->add_group_field(  $rs_group_repeat, array(
            'name'    =>  'Left Icon title',
            'id'      =>  'left_icon_title',
			'description' => 'Put the icon title.',
            'type'    => 'text',
			'attributes' => [ 'required' =>'required']
            
        ) );
          $rs_cmb_repeat->add_group_field(  $rs_group_repeat, array(
            'name'    =>  'Right Icon title',
            'id'      =>  'right_icon_title',
			'description' => 'Put the icon title.',
            'type'    => 'text',
			'attributes' => [ 'required' =>'required']
            
        ) );
           $rs_cmb_repeat->add_group_field(  $rs_group_repeat, array(
            'name'    =>  'Availability',
            'id'      =>  'call_title',
            'description' => 'Call for Availability  ',
            'type'    => 'text',
            
        ) );

}
