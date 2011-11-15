<?php print $page_header;?>
<div class="content">
  <h2>¿Qué es Drupal Summit Latino?</h2>
  <p>El Drupal Summit Latino – Guadalajara 2012 es el mayor evento Latinoamericano de Drupal, que por segunda vez reunirá más de 400 Programadores y Diseñadores de toda América Latina en Gualajara, México. Desde el 19 hasta el 21 de enero 2011, el Drupal Summit Latino será un excelente lugar para aprender, intercambiar ideas y experiencias, como también conocer a empresas y desarrolladores Drupal de todo el continente.</p>
  <p>Durante este tiempo habrá una serie de conferencias, talleres y actividades para fomentar la convivencia de la comunidad de Drupal a nivel de América Latina. Será una gran oportunidad para aprender e informarse con conferencias dictadas en <stron>castellano</strong>, por profesionales experimentados provenientes de varios países Latinoamericanos, Estados Unidos y Europa.</p>
  <p>El Drupal Summit Latino – Guadalajara 2012 será sin duda alguna, a nivel continental, la mayor concentración jamás vista de experiencia y conocimiento sobre el software de publicación de sitios Web más exitoso del momento: Drupal por supuesto!</p>
  <?php $path = drupal_get_path('theme','gdl2012');?>
  <div class="div-pict">
    <?php print theme('image',$path.'/images/summit-lima1.jpg', 'Lima', 'Lima', array('class' => 'pict'));?>
  </div>
  <div class="div-pict">
    <?php print theme('image',$path.'/images/summit-lima.jpg','Lima', 'Lima', array('class' => 'pict'));?>
  </div>  
</div>
<?php print $page_footer;
