<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$list = new FieldsBuilder('list');

$list
    ->setLocation('block', '==', 'acf/list');
  
$list
    ->addFields(get_field_partial('partials.section-header'))
    ->addRepeater('list')
      ->addSelect('color', ['choices'=> [
        '#f87c4e' => 'Primary',
        '#f87b4e50' => 'Light Primary',
        '#597a48' => 'Socondary',
        '#597a484e50' => 'Light Secondary',
        '#000' => 'Dark',
        '#f5f3ee' => 'Light',
      ]])
      ->addText('text')
    ->endRepeater()
    ->addFields(get_field_partial('partials.options'));

return $list;