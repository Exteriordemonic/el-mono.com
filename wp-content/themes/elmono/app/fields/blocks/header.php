<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$header = new FieldsBuilder('header');

$header
    ->setLocation('block', '==', 'acf/header');
  
$header
    ->addTextarea('title', ['rows'=>'2', 'new_lines'=>'br'])
    ->addLink('link')
    ->addImage('image', ['return_format'=>'id']);

return $header;