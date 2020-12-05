<?php

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$testimonial = new FieldsBuilder('testimonial');

$testimonial
    ->setLocation('block', '==', 'acf/testimonial');
  
$testimonial
    ->addText('testimonial')
    ->addText('author');

return $testimonial;