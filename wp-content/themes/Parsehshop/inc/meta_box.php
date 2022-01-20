<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_61e847e75b4cc',
        'title' => 'contact us',
        'fields' => array(
            array(
                'key' => 'field_61e848ff925e5',
                'label' => 'google map',
                'name' => 'google_map',
                'type' => 'text',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_template',
                    'operator' => '==',
                    'value' => 'templates/contact.php',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => array(
            0 => 'excerpt',
            1 => 'discussion',
            2 => 'comments',
            3 => 'revisions',
            4 => 'author',
            5 => 'format',
            6 => 'featured_image',
            7 => 'categories',
            8 => 'tags',
            9 => 'send-trackbacks',
        ),
        'active' => true,
        'description' => 'کد Embeded گوگل مپ خود را وارد نمایید',
        'show_in_rest' => 0,
    ));

endif;