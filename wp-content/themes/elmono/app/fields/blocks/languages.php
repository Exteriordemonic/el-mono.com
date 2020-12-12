<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$languages = new FieldsBuilder('languages');

$languages
    ->setLocation('block', '==', 'acf/languages');
  
$languages
    ->addFields(get_field_partial('partials.section-header'))
    ->addRepeater('languages')
      ->addImage('image', ['return_format'=>'id'])
      ->addTextarea('text', ['rows'=>'4', 'new_lines'=>'br'])
      ->addTrueFalse('bold')
    ->endRepeater()
    ->addFields(get_field_partial('partials.options'));

return $languages;