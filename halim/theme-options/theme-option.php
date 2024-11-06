<?php 
    if(class_exists('CSF')){
        $prefix = 'halim_option';

        // create option
        CSF::createOptions($prefix, array(
            'menu_title' => esc_html__('Theme Option', 'halim'),
            'menu_slug' => ('theme-option'),
            'framework_title' => esc_html__('Halim Theme Option', 'halim')
        ));

        // create header top section
        CSF::createSection($prefix, array(
            'title' => esc_html__('Header Topbar', 'halim'),
            'id' => 'header-topbar',
            'icon' => 'fas fa-list'
        ));

        // header left content
        CSF::createSection($prefix, array(
            'parent' => 'header-topbar',
            'title' => esc_html__('Left content', 'halim'),
            'fields' => array(
                array(
                    'title' => esc_html__('Switch', 'halim'),
                    'type' => 'switcher',
                    'id' => 'header_top_o_f',
                    'default' => true
                ),
                array(
                    'title' => esc_html__('Email', 'halim'),
                    'id' => 'header_top_email',
                    'type' => 'text',
                    'default' => 'info@halim.com',
                    'dependency' => array( 'header_top_o_f', '==', 'true' ),
                ),
                array(
                    'title' => esc_html__('Number', 'halim'),
                    'id' => 'header_top_number',
                    'type' => 'text',
                    'default' => '23457689',
                    'dependency' => array( 'header_top_o_f', '==', 'true' ),
                )
            )
        ));

        // header right content
        CSF::createSection($prefix, array(
            'title' => esc_html__('Right content', 'halim'),
            'parent' => 'header-topbar',
            'fields' => array(
                array(
                    'title' => esc_html__('Social icon items', 'halim'),
                    'id' => 'right_icon_lists',
                    'type' => 'group',
                    'button_title' => esc_html__('Add new social icons', 'halim'),
                    'fields' => array(
                        array(
                            'title' => esc_html__('Icon name', 'halim'),
                            'id' => 'header_icon_name',
                            'type' => 'text'
                        ),
                        array(
                            'title' => esc_html__('Icon', 'halim'),
                            'type' => 'icon',
                            'id' => 'header_top_icon'
                        ),
                        array(
                            'title' => esc_html__('Icon Link', 'halim'),
                            'type' => 'text',
                            'id' => 'header_top_icon_link'
                        )
                    )
                )
            )
        ));

        // logo
        CSF::createSection($prefix, array(
            'parent' => 'header-topbar',
            'title' => esc_html__('Logo', 'halim'),
            'fields' => array(
                array(
                    'id' => 'header_logo',
                    'title' => esc_html__('Header Logo', 'halim'),
                    'type' => 'text',
                    'default' => 'halim'
                )
            )
        ));

        // about section header
        CSF::createSection($prefix, array(
            'title' => esc_html__('About Section', 'halim'),
            'id' => 'about_section',
            'icon' => 'fas fa-biohazard'
        ));

        // section header
        CSF::createSection($prefix, array(
            'parent' => 'about_section',
            'title' => esc_html__('Header', 'halim'),
            'fields' => array(
                array(
                    'title' => esc_html__('Sub Title', 'halim'),
                    'type' => 'text',
                    'id' => 'about_head_sub_title',
                    'default' => 'who we are?'
                ),
                array(
                    'title' => esc_html__('Title', 'halim'),
                    'type' => 'text',
                    'id' => 'about_head_title',
                    'default' => 'about us'
                ),
                array(
                    'title' => esc_html__('Description', 'halim'),
                    'type' => 'textarea',
                    'id' => 'about_head_description',
                    'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d'
                )
            )
        ));

        // about left content area
        CSF::createSection($prefix, array(
            'title' => esc_html__('Left content', 'halim'),
            'parent' => 'about_section',
            'fields' => array(
                array(
                    'id' => 'about_left_con_title',
                    'title' => esc_html__('Title', 'halim'),
                    'type' => 'text',
                    'default' => 'welcome to halim'
                ),
                array(
                    'id' => 'about_left_content',
                    'title' => esc_html__('Content', 'halim'),
                    'type' => 'textarea',
                    'default' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda distinctio maxime laborum delectus aliquam ipsum itaque voluptatem non reiciendis aliquid totam facere, tempora iure iusto adipisci doloremque in, amet, alias nostrum. Explicabo reprehenderit.'
                ),
                array(
                    'id' => 'about_left_btn_text',
                    'title' => esc_html__('Button Text', 'halim'),
                    'type' => 'text',
                    'default' => 'read more'
                ),
                array(
                    'id' => 'about_left_btn_link',
                    'title' => esc_html__('Button Link', 'halim'),
                    'type' => 'text',
                    'default' => '#'
                ),
            )
        ));

        // about right content area
        CSF::createSection($prefix, array(
            'title' => esc_html__('Right content', 'halim'),
            'parent' => 'about_section',
            'fields' => array(
                array(
                    'id' => 'about_right_con',
                    'title' => esc_html__('Right Items', 'halim'),
                    'type' => 'group',
                    'button_title' => esc_html__('Right items', 'halim'),
                    'fields' => array(
                        array(
                            'id' => 'about_right_title',
                            'title' => esc_html__('Title', 'halim'),
                            'type' => 'text'
                        ),
                        array(
                            'id' => 'about_right_icon',
                            'title' => esc_html__('Icon', 'halim'),
                            'type' => 'icon'
                        ),
                        array(
                            'id' => 'about_right_des',
                            'title' => esc_html__('Description', 'halim'),
                            'type' => 'textarea'
                        )
                    )
                ),
            )
        ));

        // faq create section
        CSF::createSection($prefix, array(
            'title' => esc_html__('Faq Area', 'halim'),
            'parent' => 'about_section',
            'fields' => array(
                array(
                    'title' => esc_html__('Faq content', 'halim'),
                    'id' => 'faq_content',
                    'type' => 'group',
                    'button_title' => esc_html__('Faq items', 'halim'),
                    'fields' => array(
                        array(
                            'id' => 'faq_title',
                            'title' => esc_html__('Title', 'halim'),
                            'type' => 'text'
                        ),
                        array(
                            'id' => 'faq_des',
                            'title' => esc_html__('Description', 'halim'),
                            'type' => 'textarea'
                        )
                    )
                )
            )
        ));

        // slkil create section
        CSF::createSection($prefix, array(
            'title' => esc_html__('Skill Area', 'halim'),
            'parent' => 'about_section',
            'fields' => array(
                array(
                    'title' => esc_html__('Skill content', 'halim'),
                    'id' => 'skill_content',
                    'type' => 'group',
                    'button_title' => esc_html__('Skill items', 'halim'),
                    'fields' => array(
                        array(
                            'id' => 'skill_title',
                            'title' => esc_html__('Title', 'halim'),
                            'type' => 'text'
                        ),
                        array(
                            'id' => 'skill_percent',
                            'title' => esc_html__('Percengate', 'halim'),
                            'type' => 'text'
                        )
                    )
                )
            )
        ));

        // create seervice section
        CSF::createSection($prefix, array(
            'title' => esc_html__('Service Section', 'halim'),
            'id' => 'service_area',
            'icon' => 'fab fa-servicestack'
        ));

        // create service header
        CSF::createSection($prefix, array(
            'parent' => 'service_area',
            'title' => esc_html__('Service Header', 'halim'),
            'fields' => array(
                array(
                    'id' => 's_sub_title',
                    'title' => esc_html__('SubTitle', 'halim'),
                    'type' => 'text',
                    'default' => 'who we are?'
                ),
                array(
                    'id' => 's_title',
                    'title' => esc_html__('Title', 'halim'),
                    'type' => 'text',
                    'default' => 'our services'
                ),
                array(
                    'id' => 's_des',
                    'title' => esc_html__('Description', 'halim'),
                    'type' => 'textarea',
                    'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d' 
                )
            )
        ));

        // create team section
        CSF::createSection($prefix, array(
            'title' => esc_html__('Team Section', 'halim'),
            'id' => 'team_section',
            'icon' => 'fas fa-users'
        ));

        // create team header
        CSF::createSection($prefix, array(
            'parent' => 'team_section',
            'title' => esc_html__('Team Header', 'halim'),
            'fields' => array(
                array(
                    'id' => 't_sub_title',
                    'title' => esc_html__('Sub Title', 'halim'),
                    'type' => 'text',
                    'default' => 'who we are?'
                ),
                array(
                    'id' => 't_title',
                    'title' => esc_html__('Title', 'halim'),
                    'type' => 'text',
                    'default' => 'creative team'
                ),
                array(
                    'id' => 't_des',
                    'title' => esc_html__('Description', 'halim'),
                    'type' => 'textarea',
                    'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d'
                )
            )
        ));

        // create testimonial section
        CSF::createSection($prefix, array(
            'title' => esc_html__('Testimonial Section', 'halim'),
            'id' => 'testimonial_section',
            'icon' => 'fas fa-comment-alt'
        ));

        // create testimonial header
        CSF::createSection($prefix, array(
            'parent' => 'testimonial_section',
            'title' => esc_html__('Testimonial Header', 'halim'),
            'fields' => array(
                array(
                    'id' => 'test_sub_title',
                    'title' => esc_html__('Sub Title', 'halim'),
                    'type' => 'text',
                    'default' => 'who we are?'
                ),
                array(
                    'id' => 'test_title',
                    'title' => esc_html__('Title', 'halim'),
                    'type' => 'text',
                    'default' => 'testimonial team'
                ),
                array(
                    'id' => 'test_des',
                    'title' => esc_html__('Description', 'halim'),
                    'type' => 'textarea',
                    'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d'
                )
            )
        ));

        // create news section
        CSF::createSection($prefix, array(
            'title' => esc_html__('News Section', 'halim'),
            'id' => 'news_section',
            'icon' => 'fas fa-newspaper'
        ));

        // create news header
        CSF::createSection($prefix, array(
            'parent' => 'news_section',
            'title' => esc_html__('News Header', 'halim'),
            'fields' => array(
                array(
                    'id' => 'news_sub_title',
                    'title' => esc_html__('Sub Title', 'halim'),
                    'type' => 'text',
                    'default' => 'who we are?'
                ),
                array(
                    'id' => 'news_title',
                    'title' => esc_html__('Title', 'halim'),
                    'type' => 'text',
                    'default' => 'news team'
                ),
                array(
                    'id' => 'news_des',
                    'title' => esc_html__('Description', 'halim'),
                    'type' => 'textarea',
                    'default' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry typesetting industry.d'
                )
            )
        ));

        // contact page
        CSF::createSection($prefix, array(
            'title' => esc_html__('Contact Page', 'halim'),
            'id' => 'contact_section',
            'icon' => 'fas fa-microphone-alt'
        ));

        // contact content
        CSF::createSection($prefix, array(
            'parent' => 'contact_section',
            'title' => esc_html__('Content List', 'halim'),
            'fields' => array(
                array(
                    'title' => esc_html__('Content List', 'halim'),
                    'type' => 'group',
                    'id' => 'content_lists',
                    'button_title' => esc_html__('Add contact info', 'halim'),
                    'fields' => array(
                        array(
                            'id' => 'contact_title',
                            'title' => esc_html__('Title', 'halim'),
                            'type' => 'text'
                        ),
                        array(
                            'id' => 'contact_icon',
                            'title' => esc_html__('Icon', 'halim'),
                            'type' => 'icon'
                        ),
                        array(
                            'id' => 'contact_sub_title',
                            'title' => esc_html__('Sub Title', 'halim'),
                            'type' => 'text'
                        )
                    )
                ),
                array(
                    'id' => 'contact_map',
                    'title' => esc_html__('Contact Map', 'halim'),
                    'type' => 'map'
                )
            )
        ));

        // create cta area
        CSF::createSection($prefix, array(
            'title' => esc_html__('Footer', 'halim'),
            'id' => 'footer_section',
            'icon' => 'fas fa-list'
        ));
        // create cta area
        CSF::createSection($prefix, array(
            'parent' => 'footer_section',
            'title' => esc_html__('Cta content', 'halim'),
            'fields' => array(
                array(
                    'id' => 'cta_title',
                    'title' => esc_html__('Title', 'halim'),
                    'type' => 'text',
                    'default' => 'best solution for your business'
                ),
                array(
                    'id' => 'news_sub_title',
                    'title' => esc_html__('Sub Title', 'halim'),
                    'type' => 'text',
                    'default' => 'the can be used on larger scale projectss as well as small scale projectss'
                ),
                array(
                    'id' => 'cta_btn_text',
                    'title' => esc_html__('Cta btn text', 'halim'),
                    'type' => 'text',
                    'default' => 'contact us'
                ),
                array(
                    'id' => 'cta_btn_link',
                    'title' => esc_html__('Cta btn link', 'halim'),
                    'type' => 'text',
                    'default' => '#'
                )
            )
        ));

        // footer frist widget
        CSF::createSection($prefix, array(
            'parent' => 'footer_section',
            'title' => esc_html__('First widget', 'halim'),
            'fields' => array(
                array(
                    'id' => 'footer_logo',
                    'title' => esc_html__('Logo', 'halim'),
                    'type' => 'text',
                    'default' => 'halim'
                ),
                array(
                    'id' => 'footer_logo_des',
                    'title' => esc_html__('Description', 'halim'),
                    'type' => 'textarea',
                    'default' => 'Lorem ipsum dolor adipisicing amet, consectetur sit elit. Aspernatur incidihil quo officia.'
                )
            )
        ));

        // footer four widget
        CSF::createSection($prefix, array(
            'parent' => 'footer_section',
            'title' => esc_html__('Four widget', 'halim'),
            'fields' => array(
                array(
                    'id' => '4_widget_title',
                    'title' => esc_html__('Title', 'halim'),
                    'type' => 'text',
                    'default' => 'Contact Us'
                ),
                array(
                    'id' => '4_widget_details',
                    'type' => 'group',
                    'button_title' => esc_html__('Add contact', 'halim'),
                    'fields' => array(
                        array(
                            'id' => '4_widget_location_text',
                            'type' => 'text',
                            'title' => esc_html__('Details', 'halim')
                        ),
                        array(
                            'id' => '4_widget_icon',
                            'type' => 'icon',
                            'title' => esc_html__('Icon', 'halim')
                        )
                    )
                )
            )
        ));

        // footer bottom
        CSF::createSection($prefix, array(
            'parent' => 'footer_section',
            'title' => esc_html__('Footer bottom', 'halim'),
            'fields' => array(
                array(
                    'id' => 'copy_right',
                    'title' => esc_html__('Copy', 'halim'),
                    'type' => 'text',
                    'default' => '© All Rights Reserved 2020'
                ),
                array(
                    'id' => 'footer_socials',
                    'type' => 'group',
                    'button_title' => esc_html__('Add social', 'halim'),
                    'fields' => array(
                        array(
                            'id' => 'footer_social_link',
                            'type' => 'text',
                            'title' => esc_html__('Link', 'halim')
                        ),
                        array(
                            'id' => 'footer_social_icon',
                            'type' => 'icon',
                            'title' => esc_html__('Icon', 'halim')
                        )
                    )
                )
            )
        ));

        // framework enxport option
        CSF::createSection( $prefix, array(
            'title'  => esc_html__('Import/Export', 'halim'),
            'icon' => 'fas fa-biohazard',
            'fields' => array(
                array(
                    'type' => 'backup',
                ),
            ),
        ) );
    }

?>