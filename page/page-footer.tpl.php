    <div class="footer_content">
       <div class="footer container_12">
          <?php print $footer; ?>
          <div id="links">
            <div id="site-map" class="grid_4">
              <h3><?php print t('Site Map');?></h3>
              <?php print i18nmenu_translated_tree('menu-site-map'); ?>
            </div>
            <div id="links" class="grid_4">
              <h3><?php print t('Links');?></h3>
              <?php  print i18nmenu_translated_tree('menu-links');?>
            </div>
            <div id="contact" class="grid_4">
              <h3><?php print t('Contact');?></h3>
            </div>
          </div>
          <div class="clear"></div>
          <div id="copyright">
            <span>DrupalSummitLatino copyright 2011</span>
          </div>
      </div>
    </div> 
    <?php print $closure;?>
    </body>
</html>
