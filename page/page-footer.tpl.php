     <div class="footer">
        <div id="links">
          <div id="site-map">
            <?php 
              print i18nmenu_translated_tree('menu-site-map');
            ?>
          </div>
          <div id="links">
            <?php  print i18nmenu_translated_tree('menu-links');?>
          </div>
          <div id="contact">
          </div>
        </div>
        <span>DrupalSummitLatino copyright 2011</span>
    </div>
    <?php print $closure;?>
    </body>
</html>
