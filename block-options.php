<?php

class HeadwaySlimBlockOptions extends HeadwayBlockOptionsAPI {

public $tabs = array(

    'setting-tab' => 'Settings',
	
);


public $inputs = array(

	'setting-tab' => array(
		
		'slimmenu-resize-width' => array(				
				'type' => 'integer',				
				'name' =>  'slimmenu-resize-width',				
				'label' => 'Responsive Width',				
				'default' => 800,
				'unit' => 'px',
				'tooltip' => 'Choose your width to resize',			
			),
		
		'slimmenu-collapser-title' => array(				
				'type' => 'text',				
				'name' =>  'slimmenu-collapser-title',				
				'label' => 'Menu Title',				
				'default' => 'Main Menu',
				'tooltip' => 'Choose your menu title on resize',			
			),
			
		'slimmenu-float' => array(				
				'type' => 'checkbox',				
				'name' =>  'slimmenu-float',				
				'label' => 'Icon On Left',				
				'default' => false,
				'tooltip' => 'Choose to have your icon on left and title on right',			
			),

		/*
		'slimmenu-animation-speed' => array(				
				'type' => 'select',				
				'name' =>  'slimmenu-animation-speed',				
				'label' => 'Animation Speed',				
				'default' => 'medium',
				'options' => array (
				'slow' => 'Slow',
				'medium' => 'Medium',
				'fast' => 'Fast',
				),
				'tooltip' => 'Choose your animation speed',			
			),

		'slimmenu-animation-effect' => array(				
				'type' => 'select',				
				'name' =>  'slimmenu-animation-effect',				
				'label' => 'Animation Effect',				
				'default' => null,
				'options' => array (
				null => 'None',
				'linear' => 'linear',
				'easeInSine' => 'easeInSine',
				'easeOutSine' => 'easeOutSine',
				'easeInOutSine' => 'easeInOutSine',
				'easeInQuad' => 'easeInQuad',
				'easeOutQuad' => 'easeOutQuad',
				'easeInOutQuad' => 'easeInOutQuad',
				'easeInCubic' => 'easeInCubic',
				'easeOutCubic' => 'easeOutCubic',
				'easeInOutCubic' => 'easeInOutCubic',
				'easeInQuart' => 'easeInQuart',
				'easeOutQuart' => 'easeOutQuart',
				'easeInOutQuart' => 'easeInOutQuart',
				'easeInQuint' => 'easeInQuint',
				'easeOutQuint' => 'easeOutQuint',
				'easeInOutQuint' => 'easeInOutQuint',
				'easeInExpo' => 'easeInExpo',
				'easeOutExpo' => 'easeOutExpo',
				'easeInOutExpo' => 'easeInOutExpo',
				'easeInCirc' => 'easeInCirc',
				'easeOutCirc' => 'easeOutCirc',
				'easeInOutCirc' => 'easeInOutCirc',
				'easeInBack' => 'easeInBack',
				'easeOutBack' => 'easeInCubic',
				'easeInOutBack' => 'easeInOutBack',
				'easeInElastic' => 'easeInElastic',
				'easeOutElastic' => 'easeOutElastic',
				'easeInOutElastic' => 'easeInOutElastic',
				'easeInBounce' => 'easeInBounce',
				'easeOutBounce' => 'easeOutBounce',
				'easeInOutBounce' => 'easeInOutBounce',
				),
				'tooltip' => 'Choose your animation effect',			
			), 
			
			'slimmenu-indent-children' => array(				
				'type' => 'select',				
				'name' =>  'slimmenu-indent-children',				
				'label' => 'Indent SubMenus',				
				'default' => false,
				'options' => array (
				'false' => 'False',
				'true' => 'True',
				),
				'tooltip' => 'Choose your animation speed',			
			),
			*/
			'slimmenu-indent-style' => array(				
				'type' => 'text',				
				'name' =>  'slimmenu-indent-style',				
				'label' => 'Indent Character',				
				'default' => '&nbsp;',
				'tooltip' => 'Choose your indent character',			
			),
		
	),

);

}
