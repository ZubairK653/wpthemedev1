<?php 

function wpmu_customize_register( $wp_customize ) {

	$wp_customize->add_section( 'wpmu_footer' , array(
	'title' => __( 'Footer Credits', 'wpmu')
) );

 

class wpmu_Customize_Textarea_Control extends WP_Customize_Control {
	
	public $type = 'textarea';
	public function render_content() {
		
		echo '<label>';
			echo '<span class="customize-control-title">' . esc_html( $this-> label ) . '</span>';
			echo '<textarea rows="2" style ="width: 100%;"';
			$this->link();
			echo '>' . esc_textarea( $this->value() ) . '</textarea>';
		echo '</label>';
		
	}
}	


$wp_customize->add_setting( 'wpmu_address_setting', array (
	'default' => __( 'Footer Text', 'wpmu' )
) );
$wp_customize->add_control( new wpmu_Customize_Textarea_Control(
	$wp_customize,
	'wpmu_address_setting',
	array( 
		'label' => __( 'Footer credit Text', 'wpmu' ),
		'section' => 'wpmu_footer',
		'settings' => 'wpmu_address_setting'
)));

 
}
add_action( 'customize_register', 'wpmu_customize_register' );

?>