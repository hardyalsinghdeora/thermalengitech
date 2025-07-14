<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.


class Widget_BoostedElementsfullscreenNav extends Widget_Base {

	public function get_name() {
		return 'boosted-elements-full-navi';
	}

	public function get_title() {
		return esc_html__( 'Full Screen Nav - Boosted', 'boosted-elements-progression' );
	}

	public function get_icon() {
		return 'eicon-menu-toggle boosted-elements-progression-icon';
	}

    public function get_categories() {
		return [ 'boosted-elements-progression' ];
	}
    
	public function get_style_depends() { 
		return [ 'elementor-icons-fa-solid'];
	}
    
	public function grab_available_menus() {
		$menus = wp_get_nav_menus();
		$options = [];
		foreach ( $menus as $menu ) {
			$options[ $menu->slug ] = $menu->name;
		}
		return $options;
	}

	protected function register_controls() {

		
  		$this->start_controls_section(
  			'section_title_boosted_global_options',
  			[
  				'label' => esc_html__( 'Navigation Element', 'boosted-elements-progression' )
  			]
  		);
        
        
		
       

                
		$this->add_control(
			'mobile_menu_icon',
			[
				'label' => esc_html__( 'Menu Open Icon', 'boosted-elements-progression' ),
				'type' => Controls_Manager::ICONS,
				'separator' => 'before',
                
                'default' => [
	                    'value' => 'fas fa-bars',
	                     'library' => 'solid',
                    ],
			]
		);
        
		$this->add_control(
			'mobile_menu_align',
			[
				'label' => esc_html__( 'Menu Icon Align', 'boosted-elements-progression' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'boosted-elements-progression' ),
						'icon' => 'eicon-h-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'boosted-elements-progression' ),
						'icon' => 'eicon-h-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'boosted-elements-progression' ),
						'icon' => 'eicon-h-align-right',
					],
				],
                'default' => 'right',
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-screen-iconcon-align' => '{{VALUE}}',
				],
				'selectors_dictionary' => [
					'center' => 'text-align:center;',
					'right' => 'text-align:right;',
                    'justify' => '',
				],
				'separator' => 'after',

			]
		);
        
        
		$this->add_control(
			'mobile_closing_icon',
			[
				'label' => esc_html__( 'Closing Icon', 'boosted-elements-progression' ),
				'type' => Controls_Manager::ICONS,
                'default' => [
	                    'value' => 'fas fa-times',
	                     'library' => 'solid',
                    ],
			]
		);
	    
		$this->add_control(
			'mobile_closing_btn_align',
			[
				'label' => esc_html__( 'Closing Icon Align', 'boosted-elements-progression' ),
				'type' => Controls_Manager::CHOOSE,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'boosted-elements-progression' ),
						'icon' => 'eicon-h-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'boosted-elements-progression' ),
						'icon' => 'eicon-h-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'boosted-elements-progression' ),
						'icon' => 'eicon-h-align-right',
					],
				],
                'default' => 'right',
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-mobile-closing-icon-align .boosted-elements-full-screen-icon' => '{{VALUE}}',
				],
				'selectors_dictionary' => [
					'center' => 'left:50%;',
					'right' => 'right:0;',
                    'left' => 'left:0;',
				],
				'separator' => 'after',

			]
		);
        
		$this->add_control(
			'mobile_menu_select',
			[
				'label' => esc_html__( 'Menu Select', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SELECT,
				'options'   => $this->grab_available_menus(),
                'default' => 'tablet',
				'condition' => [
					'custom_mobile_template!' => 'yes',
				],
			]
		);
        
		
        
        
		$this->add_control(
			'custom_mobile_template',
			[
				'label' => esc_html__( 'Custom Template', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SWITCHER,
				'description' => esc_html__( 'Optional Custom Template Instead of Menu ', 'boosted-elements-progression' ),
                
			]
		);
        
        
		
	    
        
		$this->add_control(
			'template_choice',
			[
				'label' => esc_html__( 'Template Overlay', 'boosted-elements-progression' ),                
                'label_block' => true,
				'type' => Controls_Manager::SELECT,
				'options' => boosted_template_list(),
				'separator' => 'after',
				'condition' => [
					'custom_mobile_template' => 'yes',
				],
			]
		);
        
		
		$this->end_controls_section();
  		
       
        
        
  		$this->start_controls_section(
  			'section_mobile_menu_icon_styles',
  			[
  				'label' => esc_html__( 'Toggle Icon', 'boosted-elements-progression' ),
				'tab' => Controls_Manager::TAB_STYLE
  			]
  		);
        
        
        
        
		$this->start_controls_tabs( 'boosted_mobile_icon_tabs' );

		$this->start_controls_tab( 'mobile_icon_normal', [ 'label' => esc_html__( 'Normal', 'boosted-elements-progression' ) ] );

		$this->add_control(
			'boosted_elements_mobile_icon_color',
			[
				'label' => esc_html__( 'Icon Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-screen-icon' => 'color: {{VALUE}};',
				],
			]
		);
		

		$this->add_control(
			'boosted_elements_mobile_icon_background',
			[
				'label' => esc_html__( 'Background Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-screen-icon' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'boosted_elements_mobile_icon_border',
				'selector' => '{{WRAPPER}} .boosted-elements-full-screen-icon',
			]
		);
		
		
		$this->end_controls_tab();
        
        $this->start_controls_tab( 'mobile_icon_active', [ 'label' => esc_html__( 'Hover', 'boosted-elements-progression' ) ] );
        
		$this->add_control(
			'boosted_elements_mobile_icon_color_active',
			[
				'label' => esc_html__( 'Hover Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-screen-icon:hover' => 'color: {{VALUE}};',
				],
			]
		);
        
		$this->add_control(
			'boosted_elements_mobile_icon_background_active',
			[
				'label' => esc_html__( 'Hover Background Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-screen-icon:hover' => 'background-color: {{VALUE}};',
				],
			]
		);
        

		$this->add_control(
			'boosted_elements_mobile_icon_border_active',
			[
				'label' => esc_html__( 'Hover Border Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-screen-icon:hover' => 'border-color: {{VALUE}};',
				],
			]
		);
        
        
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
        
        
        
        
		$this->add_responsive_control(
			'nav_toggle-size',
			[
				'label' => esc_html__( 'Toggle Icon Size', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 60,
					],
				],
                'separator' => 'before',
                'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-screen-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
        
		$this->add_responsive_control(
			'nav_toggle_width',
			[
				'label' => esc_html__( 'Toggle Width', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
                'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-screen-icon' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
        
		$this->add_responsive_control(
			'nav_toggle_height',
			[
				'label' => esc_html__( 'Toggle Height', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
                'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-screen-icon' => 'height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
		$this->add_responsive_control(
			'nav_toggle_radius',
			[
				'label' => esc_html__( 'Toggle Radius', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
                'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-screen-icon' => 'border-radius: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
        
		$this->add_responsive_control(
			'mobile_icon_margins',
			[
				'label' => esc_html__( 'Margin', 'boosted-elements-progression' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-screen-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        
        
        
        $this->end_controls_section();
        
  		$this->start_controls_section(
  			'section_mobile_menu_closing_styles',
  			[
  				'label' => esc_html__( 'Closing Icon', 'boosted-elements-progression' ),
				'tab' => Controls_Manager::TAB_STYLE
  			]
  		);
        

        
		$this->start_controls_tabs( 'boosted_mobile_icon_closing_tabs' );

		$this->start_controls_tab( 'mobile_icon_closing_normal', [ 'label' => esc_html__( 'Normal', 'boosted-elements-progression' ) ] );

		$this->add_control(
			'boosted_elements_mobile_closing_color',
			[
				'label' => esc_html__( 'Icon Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-nav-container .boosted-elements-full-screen-icon' => 'color: {{VALUE}};',
				],
			]
		);
		

		$this->add_control(
			'boosted_elements_mobile_closing_background',
			[
				'label' => esc_html__( 'Background Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-nav-container .boosted-elements-full-screen-icon' => 'background-color: {{VALUE}};',
				],
			]
		);

		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'boosted_elements_mobile_closing_border',
				'selector' => '{{WRAPPER}} .boosted-elements-full-nav-container .boosted-elements-full-screen-icon',
			]
		);
		
		
		$this->end_controls_tab();
        
        $this->start_controls_tab( 'mobile_icon_closing_active', [ 'label' => esc_html__( 'Hover', 'boosted-elements-progression' ) ] );
        
		$this->add_control(
			'boosted_elements_mobile_closing_color_active',
			[
				'label' => esc_html__( 'Hover Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-nav-container .boosted-elements-full-screen-icon:hover' => 'color: {{VALUE}};',
				],
			]
		);
        
		$this->add_control(
			'boosted_elements_mobile_closing_background_active',
			[
				'label' => esc_html__( 'Hover Background Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-nav-container .boosted-elements-full-screen-icon:hover' => 'background-color: {{VALUE}};',
				],
			]
		);
        

		$this->add_control(
			'boosted_elements_mobile_closing_border_active',
			[
				'label' => esc_html__( 'Hover Border Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-nav-container .boosted-elements-full-screen-icon:hover' => 'border-color: {{VALUE}};',
				],
			]
		);
        
        
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
        
        
        
        
		$this->add_responsive_control(
			'nav_close_toggle-size',
			[
				'label' => esc_html__( 'Closing Icon Size', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 60,
					],
				],
                'separator' => 'before',
                'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-nav-container .boosted-elements-full-screen-icon' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
        
		$this->add_responsive_control(
			'nav_close_toggle_width',
			[
				'label' => esc_html__( 'Closing Width', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
                'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-nav-container .boosted-elements-full-screen-icon' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
        
		$this->add_responsive_control(
			'nav_close_toggle_height',
			[
				'label' => esc_html__( 'Closing Height', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
                'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-nav-container .boosted-elements-full-screen-icon' => 'height: {{SIZE}}{{UNIT}}; line-height: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
		$this->add_responsive_control(
			'nav_close_toggle_radius',
			[
				'label' => esc_html__( 'Closing Radius', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 200,
					],
				],
                'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-nav-container .boosted-elements-full-screen-icon' => 'border-radius: {{SIZE}}{{UNIT}}; ',
				],
			]
		);
        
        
		$this->add_responsive_control(
			'mobile_close_icon_margins',
			[
				'label' => esc_html__( 'Margin', 'boosted-elements-progression' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-nav-container .boosted-elements-full-screen-icon' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        
        
        
        $this->end_controls_section();
        
        
  		$this->start_controls_section(
  			'section_mobile_menu_menu_container_full_screen',
  			[
  				'label' => esc_html__( 'Full Screen Container', 'boosted-elements-progression' ),
				'tab' => Controls_Manager::TAB_STYLE
  			]
  		);
        
		$this->add_control(
			'boosted_elements_fullscreen_container_background',
			[
				'label' => esc_html__( 'Background Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-nav-container' => 'background-color: {{VALUE}};',
				],
			]
		);
        
        
		$this->add_responsive_control(
			'boosted_elements_full_screen_width',
			[
				'label' => esc_html__( 'Menu Width', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 1600,
					],
					'%' => [
						'min' => 0,
						'max' => 100,
					],
				],
                'size_units' => [ 'px', '%' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-full-container-main-bg' => 'width: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
        
        $this->end_controls_section();
        
  		
        
  		$this->start_controls_section(
  			'section_mobile_menu_menu_container',
  			[
  				'label' => esc_html__( 'Menu Container', 'boosted-elements-progression' ),
				'tab' => Controls_Manager::TAB_STYLE
  			]
  		);
        
		$this->add_control(
			'boosted_elements_mobile_container_background',
			[
				'label' => esc_html__( 'Background Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-mobile-menu-list' => 'background-color: {{VALUE}};',
				],
			]
		);
        
		$this->add_group_control(
			Group_Control_Border::get_type(),
			[
				'name' => 'boosted_elements_mobile_container_border',
				'selector' => '{{WRAPPER}} .boosted-elements-mobile-menu-list',
			]
		);
        

		$this->add_responsive_control(
			'mobile_container_padding',
			[
				'label' => esc_html__( 'Padding', 'boosted-elements-progression' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-mobile-menu-list' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        

		$this->add_responsive_control(
			'boosted_elements_mobile_container_radius',
			[
				'label' => esc_html__( 'Border Radius', 'boosted-elements-progression' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .boosted-elements-mobile-menu-list' => 'border-radius: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        
        
		$this->add_group_control(
			Group_Control_Box_Shadow::get_type(),
			[
				'name' => 'mobile_menu-container',
				'selector' => '{{WRAPPER}} .boosted-elements-mobile-menu-list',
			]
		);
        
	
		$this->end_controls_section();
        
  		
        
  		$this->start_controls_section(
  			'section_mobile_menu_menu_styles',
  			[
  				'label' => esc_html__( 'Mobile Menu Links', 'boosted-elements-progression' ),
				'tab' => Controls_Manager::TAB_STYLE
  			]
  		);
        

        
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
             'name' => 'section_title_mobile_menu_typography',
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item a.boosted-nav-link-def',
			]
		);
        
		
		$this->start_controls_tabs( 'boosted_mobile_menu_links_tabs' );

		$this->start_controls_tab( 'mobile_menu_links_normal', [ 'label' => esc_html__( 'Normal', 'boosted-elements-progression' ) ] );

		$this->add_control(
			'boosted_elements_mobile_menu_color',
			[
				'label' => esc_html__( 'Link Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item a.boosted-nav-link-def' => 'color: {{VALUE}};',
				],
			]
		);
		

		$this->add_control(
			'boosted_elements_mobile_menu_background',
			[
				'label' => esc_html__( 'Background Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item a.boosted-nav-link-def' => 'background-color: {{VALUE}};',
				],
			]
		);
        
		$this->add_control(
			'menu_underline_option',
			[
				'type' => Controls_Manager::SELECT,
				'label' => esc_html__( 'Underline', 'boosted-elements-progression' ),
				'options' => [
					'none' => esc_html__( 'Hide', 'boosted-elements-progression' ),
                    'hover' => esc_html__( 'Display on Hover', 'boosted-elements-progression' ),
                    'always' => esc_html__( 'Always Display', 'boosted-elements-progression' ),
				],
                'default' => 'none',
				'selectors' => [
					'{{WRAPPER}} .item-underline-nav-boosted:before' => '{{VALUE}}',
				],
				'selectors_dictionary' => [
					'none' => 'display:none;',
					'hover' => 'display:block;',
                    'always' => 'width:100%; left:0; opacity:1;',
				],
                
                
                
			]
		);
        
		$this->add_control(
			'boosted_elements_underline_color',
			[
				'label' => esc_html__( 'Underline Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item a.boosted-nav-link-def .item-underline-nav-boosted:before' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'menu_underline_option' => 'always',
				],
			]
		);
        
        
        
		$this->add_control(
			'underline_height_control',
			[
				'label' => esc_html__( 'Underline Height', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 15,
					],
				],
				'condition' => [
					'menu_underline_option!' => 'none',
				],
				'selectors' => [
					'{{WRAPPER}} .item-underline-nav-boosted:before' => 'height: {{SIZE}}px;',
				],
			]
		);
        
		$this->add_control(
			'underline_position',
			[
				'label' => esc_html__( 'Underline Vertical Position', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -60,
						'max' => 60,
					],
				],
				'condition' => [
					'menu_underline_option!' => 'none',
				],
				'selectors' => [
					'{{WRAPPER}} .item-underline-nav-boosted:before' => 'bottom: {{SIZE}}px;',
				],
			]
		);
        

	
		
		
		$this->end_controls_tab();
        
        $this->start_controls_tab( 'mobile_menu_links_active', [ 'label' => esc_html__( 'Hover', 'boosted-elements-progression' ) ] );
        
		$this->add_control(
			'boosted_elements_mobile_menu_color_hover',
			[
				'label' => esc_html__( 'Link Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item a.boosted-nav-link-def:hover, {{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item.current-menu-item a.boosted-nav-link-def' => 'color: {{VALUE}};',
				],
			]
		);
		

		$this->add_control(
			'boosted_elements_mobile_menu_background_hover',
			[
				'label' => esc_html__( 'Background Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item a.boosted-nav-link-def:hover' => 'background-color: {{VALUE}};',
				],
			]
		);
        
        
		$this->add_control(
			'boosted_elements_nav_underline_hover_test',
			[
				'label' => esc_html__( 'Hover Underline Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item.current-menu-item a.boosted-nav-link-def .item-underline-nav-boosted:before, {{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item a.boosted-nav-link-def:hover .item-underline-nav-boosted:before' => 'background-color: {{VALUE}};',
				],
				'condition' => [
					'menu_underline_option!' => 'none',
				],
			]
		);
        

		
        
		$this->end_controls_tab();
		
		$this->end_controls_tabs();
        
        
        
		$this->add_control(
			'boosted_elements_mobile_menu_borderdefault',
			[
				'label' => esc_html__( 'Divider Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
                'separator' => 'before',
                
				'selectors' => [
					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item a.boosted-nav-link-def' => 'border-color: {{VALUE}};',
				],
			]
		);
        
		$this->add_responsive_control(
			'sub_menu_mobile_list_padding',
			[
				'label' => esc_html__( 'Padding', 'boosted-elements-progression' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item a.boosted-nav-link-def,
{{WRAPPER}} .menu-item-has-children .mobile-drop-down-icon-boosted' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
        
        $this->add_control(
        			'mobile_sub_menu_heading',
        			[
        				'label' => __( 'Sub-Menu Styles', 'plugin-name' ),
        				'type' => \Elementor\Controls_Manager::HEADING,
        				'separator' => 'before',
        			]
        		);
                
        		$this->add_group_control(
        			Group_Control_Typography::get_type(),
        			[
                     'name' => 'section_title_mobile_sub_menu_typography',
        				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
        				'selector' => '{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item li a.boosted-nav-link-def',
        			]
        		);
        
        		$this->start_controls_tabs( 'boosted_mobile_sub_menu_links_tabs' );

        		$this->start_controls_tab( 'sub_mobile_menu_links_normal', [ 'label' => esc_html__( 'Normal', 'boosted-elements-progression' ) ] );

        		$this->add_control(
        			'sub_boosted_elements_mobile_menu_color',
        			[
        				'label' => esc_html__( 'Sub-menu Link Color', 'boosted-elements-progression' ),
        				'type' => Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item li a.boosted-nav-link-def' => 'color: {{VALUE}};',
        				],
        			]
        		);
		

        		$this->add_control(
        			'sub_boosted_elements_mobile_menu_background',
        			[
        				'label' => esc_html__( 'Sub-menu Background Color', 'boosted-elements-progression' ),
        				'type' => Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item li a.boosted-nav-link-def' => 'background-color: {{VALUE}};',
        				],
        			]
        		);
        
        		$this->add_control(
        			'sub_boosted_elements_mobile_menu_borderdefault',
        			[
        				'label' => esc_html__( 'Sub-menu Border Color', 'boosted-elements-progression' ),
        				'type' => Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item li a.boosted-nav-link-def' => 'border-color: {{VALUE}};',
        				],
        			]
        		);
        

		
		
        		$this->end_controls_tab();
        
                $this->start_controls_tab( 'sub_mobile_menu_links_active', [ 'label' => esc_html__( 'Hover', 'boosted-elements-progression' ) ] );
        
        		$this->add_control(
        			'sub_boosted_elements_mobile_menu_color_hover',
        			[
        				'label' => esc_html__( 'Sub-menu Link Color', 'boosted-elements-progression' ),
        				'type' => Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item li a.boosted-nav-link-def:hover' => 'color: {{VALUE}};',
        				],
        			]
        		);
		

        		$this->add_control(
        			'sub_boosted_elements_mobile_menu_background_hover',
        			[
        				'label' => esc_html__( 'Sub-menu Background Color', 'boosted-elements-progression' ),
        				'type' => Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item li a.boosted-nav-link-def:hover' => 'background-color: {{VALUE}};',
        				],
        			]
        		);
        

        		$this->add_control(
        			'sub_boosted_elements_mobile_menu_borderhover',
        			[
        				'label' => esc_html__( 'Sub-menu Hover Border Color', 'boosted-elements-progression' ),
        				'type' => Controls_Manager::COLOR,
        				'selectors' => [
        					'{{WRAPPER}} ul.boosted-elements-mobile-menu-list li.menu-item li a.boosted-nav-link-def:hover' => 'border-color: {{VALUE}};',
        				],
        			]
        		);
        
        
        		$this->end_controls_tab();
		
        		$this->end_controls_tabs();
        
        
        $this->add_control(
        			'sub_menu_toggle_heading',
        			[
        				'label' => __( 'Toggle Styles', 'plugin-name' ),
        				'type' => \Elementor\Controls_Manager::HEADING,
        				'separator' => 'before',
        			]
        		);
        
        
		$this->add_control(
			'sub_menu_drop_down_arrow_size',
			[
				'label' => esc_html__( 'Sub-Menu Toggle Font Size', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 60,
					],
				],
                'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .menu-item-has-children .mobile-drop-down-icon-boosted' => 'font-size: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
		$this->add_control(
			'sub_menu_drop_down_toggle_width',
			[
				'label' => esc_html__( 'Sub-Menu Toggle Width', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 250,
					],
				],
                'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .menu-item-has-children .mobile-drop-down-icon-boosted:after' => 'right: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
		$this->add_control(
			'sub_menu_drop_down_toggle_position',
			[
				'label' => esc_html__( 'Sub-Menu Toggle Position', 'boosted-elements-progression' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 250,
					],
				],
                'size_units' => [ 'px' ],
				'selectors' => [
					'{{WRAPPER}} .menu-item-has-children .mobile-drop-down-icon-boosted' => 'top: {{SIZE}}{{UNIT}};',
				],
			]
		);
        
        
        
		$this->add_control(
			'boosted_elements_sub_menu_toggle_mobile_menu_color',
			[
				'label' => esc_html__( 'Sub-Menu Toggle Color', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .menu-item-has-children .mobile-drop-down-icon-boosted' => 'color: {{VALUE}};',
				],
			]
		);
        
		$this->add_control(
			'boosted_elements_sub_menu_toggle_mobile_menu_border_color',
			[
				'label' => esc_html__( 'Sub-Menu Toggle Border', 'boosted-elements-progression' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .menu-item-has-children .mobile-drop-down-icon-boosted:after' => 'background: {{VALUE}};',
				],
			]
		);
        
        
		
        
		
        $this->end_controls_section();
        
        
        
	}


	protected function render( ) {
        $settings = $this->get_settings();
	?>
    
    
    <div id="boosted-elements-mobile-menu-<?php echo esc_attr($this->get_id()); ?>">   
        <div class="boosted-elements-full-screen-iconcon-align"><div class="boosted-elements-full-screen-icon-mobile"><div class="boosted-elements-full-screen-icon"><?php \Elementor\Icons_Manager::render_icon( $settings['mobile_menu_icon'], [ 'aria-hidden' => 'true', 'class' => 'fa-fw boosted-elements-mobile-default-icon'] ); ?></div></div></div>
        
        <div class="boosted-elements-full-nav-container">
            <div class="boosted-elements-mobile-closing-icon-align"><div class="boosted-elements-full-screen-icon-mobile"><div class="boosted-elements-full-screen-icon"><?php \Elementor\Icons_Manager::render_icon( $settings['mobile_closing_icon'], [ 'aria-hidden' => 'true', 'class' => 'fa-fw boosted-elements-mobile-default-icon'] ); ?></div></div></div>
            
            <div class="boosted-elements-full-screen-table">
			<div class="boosted-elements-full-screen-align">
                
                
                    <?php if ( $settings['custom_mobile_template'] != 'yes' ) : ?>
                    <div class="boosted-elements-full-container-main-bg">
                    <?php 
                    wp_nav_menu( array(
                        'menu' => $settings['mobile_menu_select'], 
                        'menu_class' => 'boosted-elements-mobile-menu-list', 
                        'before' => '<div class="mobile-item-nav-boosted">', 
                        'link_before' => '<div class="item-underline-nav-boosted"><span class="boosted-elements-sub-menu-padding">', 
                        'link_after' => '</span></div>', 
                        'after' => '<span class="mobile-drop-down-icon-boosted"><i class="fas fa-angle-down"></i></span></div>', 
                        'fallback_cb' => false,
                        'walker'  => new \Boosted_Elements_Mega_Walker
                    )); 
                    ?>
                    </div><!-- close .boosted-elements-full-container-main-bg -->
                    <?php else: ?>
        			<?php
			
        			if ( !empty($settings['template_choice']) ) {
        	            $frontend = new \Elementor\Frontend;
        	            echo $frontend->get_builder_content_for_display($settings['template_choice'], true);
        	        }else {
                    echo "<h5>" . esc_attr('Please choose a template', 'boosted-elements-progression') ."</h5>";
                    }
            
        			?>
                    <?php endif; ?>
        			<div class="clearfix-boosted-element"></div>
                
			</div><!-- close .boosted-elements-full-screen-align -->
            </div><!-- close .boosted-elements-full-screen-table -->
            
        </div><!-- close .boosted-elements-full-nav-container -->
        
    </div><!-- close #boosted-elements-mobile-menu-<?php echo esc_attr($this->get_id()); ?> -->

    	<script type="text/javascript"> 
    	jQuery(document).ready(function($) {
    		'use strict';
          
         	$('#boosted-elements-mobile-menu-<?php echo esc_attr($this->get_id()); ?> .boosted-elements-full-screen-icon').on('click', function(e){
         		e.preventDefault();
         		$('#boosted-elements-mobile-menu-<?php echo esc_attr($this->get_id()); ?> .boosted-elements-full-nav-container').fadeToggle(350);
         	});
            
         	$('#boosted-elements-mobile-menu-<?php echo esc_attr($this->get_id()); ?> .boosted-elements-mobile-menu-list .menu-item-has-children .mobile-drop-down-icon-boosted').on('click', function(e){
         		e.preventDefault();
                $(this).toggleClass('boosted-elements-show-sub-menu');
                $(this).parent().closest('.menu-item-has-children').find('.sub-menu:first').slideToggle(350);
         	});
            
    	});
    	</script>
    
    
	
	<?php
	
	}

	protected function content_template(){}

}


Plugin::instance()->widgets_manager->register( new Widget_BoostedElementsfullscreenNav() );