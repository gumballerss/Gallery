<?php
if(function_exists("register_field_group"))
{
  register_field_group(array (
    'id' => 'acf_gallerie',
    'title' => 'Gallerie',
    'fields' => array (
      array (
        'key' => 'field_532b229f89457',
        'label' => 'Photo',
        'name' => 'photos',
        'type' => 'repeater',
        'sub_fields' => array (
          array (
            'key' => 'field_532b237af6e3d',
            'label' => 'Ajouter une photo',
            'name' => 'ajouter_une_photo',
            'type' => 'image',
            'instructions' => 'Ajout de la photo',
            'column_width' => '',
            'save_format' => 'object',
            'preview_size' => 'thumbnail',
            'library' => 'all',
          ),
          array (
            'key' => 'field_532b22c389458',
            'label' => 'Titre',
            'name' => 'titre',
            'type' => 'textarea',
            'instructions' => 'Titre de l\'image',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'formatting' => 'br',
          ),
          array (
            'key' => 'field_532b231789459',
            'label' => 'Description de la photo',
            'name' => 'description_de_la_photo',
            'type' => 'textarea',
            'instructions' => 'Ajouter une description à la photo',
            'column_width' => '',
            'default_value' => '',
            'placeholder' => '',
            'maxlength' => '',
            'rows' => '',
            'formatting' => 'br',
          ),
        ),
        'row_min' => '',
        'row_limit' => '',
        'layout' => 'table',
        'button_label' => 'Add Row',
      ),
    ),
    'location' => array (
      array (
        array (
          'param' => 'post_type',
          'operator' => '==',
          'value' => 'gallery',
          'order_no' => 0,
          'group_no' => 0,
        ),
      ),
    ),
    'options' => array (
      'position' => 'normal',
      'layout' => 'no_box',
      'hide_on_screen' => array (
      ),
    ),
    'menu_order' => 0,
  ));
}
