<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head; ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php print $head_title; ?></title>
    <?php print $styles; ?>
    <?php print $scripts; ?>
    <link href='http://fonts.googleapis.com/css?family=Bevan' rel='stylesheet' type='text/css'>
  </head>
  <body  class="<?php print $body_classes;?>">
    <div id="header-bar">
      <!-- la barra blanca que corre por toda la pagina y esta fuera de los 960 del tema -->
    </div>
    <div class="encabezado container_12">
      <div id="main-menu" class='grid_9 prefix_3'>
        <?php print $header; ?>
      </div>
      <div id="logo">
      </div>
    </div>
