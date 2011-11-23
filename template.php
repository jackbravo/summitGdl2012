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

  //determinando el banner por sección
  $path = drupal_get_path('theme','gdl2012');

  //esta variable debe de cambiar en función de la seccióm
  $vars['banner'] = "home-page-banner"; 
  if( arg(0) == "home" && is_null(arg(1))){
    $vars['banner'] = "home-page-banner";
  }else if( arg(0) == "node" && arg(1) == "29"){
    $vars['banner'] = "lugar-page-banner";
  }

  
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

/**
 */
function gdl2012_menu_item_link($link) {
  
  if (empty($link['localized_options'])) {
    $link['localized_options'] = array();
  }

  //El menu-involved  debe de tener alguna clase para
  //hacer referencia a sus iconos
  if($link['menu_name'] == "menu-involved") {
    $class = strtolower(preg_replace('/[^a-z0-9]/i','',$link['link_title']));
    $link['localized_options'] = array(
      'attributes' => array(
        'class'   =>  'btn-participa participa-'.$class
      )
    );
  }
  return l($link['title'], $link['href'], $link['localized_options']);
}
