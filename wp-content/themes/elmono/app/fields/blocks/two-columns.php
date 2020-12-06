<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$two_columns = new FieldsBuilder('two_columns');

$two_columns
    ->setLocation('block', '==', 'acf/two-columns');
  
$two_columns
    ->addGroup('content', ['wrapper'=>['width'=>'50%']])
        ->addWysiwyg('content')
        ->addLink('link')
    ->endGroup()
    ->addImage('image', ['wrapper'=>['width'=>'50%'], 'return_format'=>'id'])
    ->addFields(get_field_partial('partials.options'));

return $two_columns;