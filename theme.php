<?php

class FuzzyWaziTheme extends Theme
{
   function action_template_header($theme) {
      // Add the HTML5 shiv for IE < 9
      Stack::add('template_header_javascript', array('http://cdnjs.cloudflare.com/ajax/libs/html5shiv/r29/html5.js', null, '<!--[if lt IE 9]>%s<![endif]-->'), 'html5_shiv');
      Stack::add('template_stylesheet', $theme->get_url('/stylesheets/screen.css'),    'style');
   }
}

?>
