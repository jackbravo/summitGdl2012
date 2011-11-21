<?php print $page_header;?>
<div class="container_12">
  <div class="bg <?php print (!$is_front) ? " interiores-bg" : "";?>">
    <div class="content<?php print (!$is_front) ? " interiores grid_8" : "";?>">
      <?php print $tabs;?>
      <?php print $messages;?>
      <?php print $content;?>
    </div> 
    <?php if(!$is_front && !empty($sidebar)):?>
      <div class="sidebar grid_4">
        <?php print $sidebar;?>
      </div>
    <?php endif;?>
    <div class="clear"></div>
  </div>
</div>
<?php print $page_footer;
