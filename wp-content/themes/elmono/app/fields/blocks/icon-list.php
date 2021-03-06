<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$icon_list = new FieldsBuilder('icon-list');

$icon_list
    ->setLocation('block', '==', 'acf/icon-list');
  
$icon_list
    ->addFields(get_field_partial('partials.section-header'))
    ->addText('arrow-info')
    ->addRepeater('icon-list')
      ->addImage('image', ['return_format'=>'id'])
      ->addTextarea('text', ['rows'=>'4', 'new_lines'=>'br'])
      ->addTrueFalse('bold')
    ->endRepeater()
    ->addFields(get_field_partial('partials.options'));

return $icon_list;