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

<ul class="service_list">
 	<li>Set up the books to align with your business industry.</li>
 	<li>Set up Payroll, Human Resources such as medical/dental insurance, 401K, FSA, Life Insurance</li>
 	<li>Set up business insurance - Professional Liability, Workers Comp, E&amp;O, etc.</li>
 	<li>Invoice customers, receive payments, pay vendors.</li>
 	<li>Maintain books throughout the month and do bank reconciliations.</li>
 	<li>Prepare month-end financial statements.</li>
 	<li>Be the liaison between your company and your tax accountant to make sure they have all
quarterly and year-end information necessary for taxes.</li>
 	<li>Review and advise on accounting processes and how it can be more streamlined and
efficient.</li>
 	<li>Clean up any general ledger accounts that were not maintained or managed properly.</li>
 	<li>Maintain the books going forward to ensure GAAP compliance.</li>
 	<li>Issue 1099's to eligible vendors.</li>
 	<li>Year-end financial preparation for a tax accountant.</li>
 	<li>Due diligence prep in the event of a potential 


With over 20 years of valuable experience serving as Controller and Director of Finance for numerous small-to-medium-sized companies in the tech, foodservice, and telecom industries, Jessica is well-versed in the various areas of accounting, payroll, and human resources including employee benefits. A versatile asset to any team, Jessica’s vast range of knowledge and experience is her best attribute.

For established small-to-medium-sized companies, she can review current bookkeeping processes for efficiency and accuracy, reconcile past and current books, and implement corrective measures moving forward to maintain GAAP compliance and readiness for any situation ranging from year-end tax preparation to the due diligence required in the event of a potential sale.

For start-up companies, Jessica’s accounting experience provides her with the valuable knowledge and foresight necessary to establish a strong culture of accuracy, readiness, and accountability. In addition, her experience in payroll and human resources allows her to play an integral role in an incredibly vital area of business, particularly in that of a start-up company. Jessica can serve dutifully as a qualified advocate not only for the employee, but the employer as well.

Her attention to detail and problem-solving allows her to do what she does with integrity.  It is her desire to help small businesses achieve and maintain success with efficient and streamlined processes. These achievements make Jessica a valuable asset to any company of any size.

When she’s not crunching numbers, Jessica’s enjoying quality time with her 5-year-old daughter, Makayla. She also finds great joy in being outdoors, especially when gardening and doing yard work.