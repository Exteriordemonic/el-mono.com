<?php 

namespace App;

use StoutLogic\AcfBuilder\FieldsBuilder;

$section_header = new FieldsBuilder('section-header');

$section_header 
  ->addTextarea('title', ['rows'=>'2', 'new_lines'=>'br'])
  ->addTextarea('content', ['rows'=>'4', 'new_lines'=>'br'])
  ->addTextarea('subtitle', ['rows'=>'2', 'new_lines'=>'br']);

return $section_header;