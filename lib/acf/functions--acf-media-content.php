<?php
if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_604b338a7196e',
        'title' => 'Media Posts',
        'fields' => array(
            array(
                'key' => 'field_604b3399223a3',
                'label' => 'Rich Excerpt',
                'name' => 'rich_excerpt',
                'type' => 'wysiwyg',
                'instructions' => 'This text will show on the post in the list view. It will default to the excerpt and the the content.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '100',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'tabs' => 'all',
                'toolbar' => 'full',
                'media_upload' => 0,
                'delay' => 1,
            ),
            array(
                'key' => 'field_604b36c0439c1',
                'label' => 'Media Link URL',
                'name' => 'media_link_url',
                'type' => 'url',
                'instructions' => 'Add a url to a webpage',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => 'http://ambercouch.co.uk',
            ),
            array(
                'key' => 'field_604f5d80edcf5',
                'label' => 'Media Link Url Button Label',
                'name' => 'media_link_url_button_label',
                'type' => 'text',
                'instructions' => 'Text that appears on the button.',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_604b36c0439c1',
                            'operator' => '!=empty',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Visit Site',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 30,
            ),
            array(
                'key' => 'field_604f5df4edcf6',
                'label' => 'Media Audio Url',
                'name' => 'media_audio_url',
                'type' => 'url',
                'instructions' => 'Link to an audio file',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_604f5e3fedcf7',
                'label' => 'Media Audio Url Button Label',
                'name' => 'media_audio_url_button_label',
                'type' => 'text',
                'instructions' => 'Text that appears on the button.',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_604f5df4edcf6',
                            'operator' => '!=empty',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Listen Now',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_604f5ee1edcf8',
                'label' => 'Media Youtube Url',
                'name' => 'media_youtube_url',
                'type' => 'url',
                'instructions' => 'Text that appears on the button.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
            ),
            array(
                'key' => 'field_604f5f19edcf9',
                'label' => 'Media Youtube Url Button Label',
                'name' => 'media_youtube_url_button_label',
                'type' => 'text',
                'instructions' => 'Text that appears on the button.',
                'required' => 0,
                'conditional_logic' => array(
                    array(
                        array(
                            'field' => 'field_604f5ee1edcf8',
                            'operator' => '!=empty',
                        ),
                    ),
                ),
                'wrapper' => array(
                    'width' => '50',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Watch Now',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'media',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

endif;
