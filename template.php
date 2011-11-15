<?php
/**
 * Implementation of hook_theme
 */
function gdl2012_theme() {
  return array(
    'page_header' => array(
      'arguments' => array('page_vars' => NULL),
      'template' => 'page/page-header'
    ),
    'page_footer' => array(
      'arguments' => array('page_vars' => NULL),
      'template' => 'page/page-footer'
    )
  );
}

/**
 * Preprocess Page
 */
function gdl2012_preprocess_page(&$vars) {
  
  $pagevars = $vars;

  $vars['page_header'] = theme('page_header', $pagevars);
  $vars['page_footer'] = theme('page_footer', $pagevars); 
}


/**
 * Implementation of hook_preprocess.
 */
function gdl2012_preprocess(&$vars, $hook) {    
  gdl2012_suggest_preprocessor($vars, $hook);
}

/**
 *  Como creamos dos themes nuevos para el header y el footer, 
 *  buscamos que estos themes tengan también disponibles las 
 *  variables que tiene page.tpl.php (para imprimir scripts, styles y closure por 
 *  ejemplo) asi que cuando estos dos themes son invocados
 *  generamos $vars
 *
 *  También quitamos un par de variables que no vamos a necesitar
 */
function gdl2012_suggest_preprocessor(&$vars, $hook) {
  if ($hook == 'page_header' || $hook == 'page_footer') {
    unset($vars['page_vars']['template_files']);    
    if (is_array($vars['page_vars'])) {
      foreach ($vars['page_vars'] as $var_key => $var_value) {
        $vars[$var_key] = $var_value;
      }
    }
  return;    
  }
}
