<?php 

class HeadwaySlimBlock extends HeadwayBlockAPI {

    public $id = 'jons-slim-block';
    
    public $name = 'Slim Menu';

    public $options_class = 'HeadwaySlimBlockOptions';
    
        public static function enqueue_action($block_id, $block, $original_block = null) {

            wp_enqueue_script('slimmenu-js', plugins_url('/jquery.slimmenu.min.js', __FILE__),'','',false); 
			wp_enqueue_style('style', plugins_url('/slimmenu.min.css' , __FILE__),'','',false); 
		//	wp_enqueue_script('easing-js', '//cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js');
			wp_enqueue_style('fontawesome-css', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css');

		}
	
		function setup_elements() {
    	
			$this->register_block_element(array(
			'id' => 'slimmenu-collapser',
			'name' => 'Menu Collapser',
			'selector' => '.menu-collapser',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-collapsebtn',
			'name' => 'Collapse Button',
			'selector' => '.collapse-button',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			'states' => array(
				'Hover' => '.collapse-button:hover, .collapse-button:focus',
			)
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-iconbars',
			'name' => 'Icon Bars',
			'selector' => '.collapse-button .icon-bar',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-ul',
			'name' => 'Slimmenu UL',
			'selector' => 'ul.slimmenu',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-li',
			'name' => 'Slimmenu Item',
			'selector' => 'ul.slimmenu li, ul.slimmenu > li',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-first',
			'name' => 'Slimmenu First Item',
			'selector' => 'ul.slimmenu > li:first-child',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-last',
			'name' => 'Slimmenu Last Item',
			'selector' => 'ul.slimmenu > li:last-child',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-item-anchor',
			'name' => 'Slimmenu Item Anchor',
			'selector' => 'ul.slimmenu li a',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-item-anchor',
			'name' => 'Slimmenu Item Anchor',
			'selector' => 'ul.slimmenu li a',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			'states' => array(
				'Hover' => 'ul.slimmenu li a:hover',
			)
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-sub-collapser',
			'name' => 'Slimmenu Sub Collapser',
			'selector' => 'ul.slimmenu li .sub-collapser',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-sub-collapser-before',
			'name' => 'Slimmenu Sub Collapser Before',
			'selector' => 'ul.slimmenu li .sub-collapser:before',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-i',
			'name' => 'Slimmenu Sub Collapser I',
			'selector' => 'ul.slimmenu li .sub-collapser > i',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-li-ul',
			'name' => 'Slimmenu LI UL',
			'selector' => 'ul.slimmenu li ul',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-li-ul-li',
			'name' => 'Slimmenu LI UL LI',
			'selector' => 'ul.slimmenu li ul li',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-ul-li-ul',
			'name' => 'Slimmenu UL LI LI',
			'selector' => 'ul.slimmenu li > ul',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-li-ul-li-ul',
			'name' => 'Slimmenu LI UL LI UL',
			'selector' => 'ul.slimmenu li > ul > li ul',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-collapsed-li',
			'name' => 'Slimmenu Collapsed LI',
			'selector' => 'ul.slimmenu.collapsed li',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));
			
			$this->register_block_element(array(
			'id' => 'slimmenu-collapsed-li-a',
			'name' => 'Slimmenu Collapsed LI A',
			'selector' => 'ul.slimmenu.collapsed li a',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));	
			
			$this->register_block_element(array(
			'id' => 'slimmenu-subcollapser',
			'name' => 'Slimmenu Sub Collapser',
			'selector' => 'ul.slimmenu.collapsed li .sub-collapser',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));	
			
			$this->register_block_element(array(
			'id' => 'slimmenu-subcollapsed LI UL',
			'name' => 'Slimmenu Sub Collapsed LI UL',
			'selector' => 'ul.slimmenu.collapsed li > ul ',
			'properties' => array('background', 'padding', 'fonts', 'corners', 'borders',),
			));	
		}
		
    	public static function dynamic_css($block, $block_id) {
		
		$slimmenufloat = parent::get_setting($block, 'slimmenu-float', 0);
			$css = null;
			
			if ($slimmenufloat == 1) {
			$css .= '
			.collapse-button {
				left: 8px;
			}
			
			.menu-collapser {
				text-align: right;
			}
			
			';
			}
			return $css;
		}				
		
    	public static function dynamic_js($block, $block_id) {
		 	
			 	
		$js = null;
			

		$js .= '
			
			
			
			jQuery(function ($) {  
				$(document).ready(function() {
				
					jQuery(\'#jons-slimmenu\').slimmenu({
						resizeWidth: \' ' . (parent::get_setting($block, 'slimmenu-resize-width', 800) ) . ' \',
						collapserTitle: \' ' . (parent::get_setting($block, 'slimmenu-collapser-title', 'Main Menu') ) . ' \',
						animSpeed: \' ' . (parent::get_setting($block, 'slimmenu-animation-speed', 'medium') ) . ' \',
                        indentChildren: true,
						childrenIndenter: \' ' . (parent::get_setting($block, 'slimmenu-indent-style', '&nbsp;') ). ' \',
					});
			
				});			
			}); 
			
		';

		return $js;
	}

		function content($block) {
            $slimmenufloat = parent::get_setting($block, 'slimmenu-float', false);
					echo '<nav>';		
						echo '<div class="navbar">';
							wp_nav_menu( array('menu_class' => 'slimmenu', 'menu_id' => 'jons-slimmenu', 'theme_location' => 'jons-slim-menu'));
						echo '</div>';
					echo '</nav>';

		}


}

