<div class="panel-display panel-gdl2012-home clear-block" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="panel-panel panel-sidebar-left grid_8">
    <div class="inside"><?php print $content['left']; ?><div class="clear">&nbsp;</div></div>
  </div>

  <div class="panel-panel panel-sidebar-right grid_4">
    <div class="inside"><?php print $content['right']; ?></div>
  </div>
  <div class="clear">&nbsp;</div>

  <div class="panel-sponsors grid_12">
    <div class="inside"><?php print $content['sponsors'];?></div>
  </div>
</div>
