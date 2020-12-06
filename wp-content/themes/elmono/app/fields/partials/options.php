<?php 

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$options = new FieldsBuilder('options');

$options 
  ->addGroup('options')
    ->addSelect('background', ['choices'=> [
      'bg-light' => 'Light',
      'bg-primary' => 'Primary',
      'bg-secondary' => 'Secondary',
      'bg-dark' => 'Dark',
    ]])
    ->addTrueFalse('offset')
    ->addSelect('direction', ['choices'=> [
      'flex-row' => 'Left',
      'flex-md-row-reverse' => 'Right',
    ], 'location' => 'acf/two-columns'])
    ;

return $options;