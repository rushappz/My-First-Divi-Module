<?php

class MYEX_SimpleHeader extends ET_Builder_Module {

	public $slug       = 'myex_simple_header';
	public $vb_support = 'on';

	protected $module_credits = array(
		'module_uri' => 'http://www.divi-artisan.com/my-extension',
		'author'     => 'Rushanthan Nagarajah',
		'author_uri' => 'http://www.divi-artisan.com/author',
	);

	public function init() {
		$this->name = esc_html__( 'Simple Header', 'myex-my-extension' );
	}

	public function get_fields() {
		return array(
			'heading'	=> array(
				'label'           => esc_html__( 'Heading', 'myex-my-extension' ),
				'type'            => 'text',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Input your desired heading here.', 'myex-my-extension' ),
				'toggle_slug'     => 'main_content',
			),
			'content'	 => array(
				'label'           => esc_html__( 'Content', 'myex-my-extension' ),
				'type'            => 'tiny_mce',
				'option_category' => 'basic_option',
				'description'     => esc_html__( 'Content entered here will appear inside the module.', 'myex-my-extension' ),
				'toggle_slug'     => 'main_content',
			),
		);
	}

	public function render( $attrs, $content = null, $render_slug ) {
		return sprintf( '<h1>%1$s</h1>', $this->props['content'] );
	}
}

new MYEX_SimpleHeader;
