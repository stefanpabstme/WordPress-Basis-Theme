<div class="clear"></div>
</div>
<footer id="footer" role="contentinfo">
<div class="container">
  <div id="copyright">
    <?php echo sprintf( __( '%1$s %2$s %3$s. All Rights Reserved.', 'annabaus' ), '&copy;', date( 'Y' ), esc_html( get_bloginfo( 'name' ) ) ); ?>
    <a href="<?php echo site_url(); ?>/impressum">Impressum</a>
    <a href="<?php echo site_url(); ?>/datenschutz">Datenschutz</a>
  </div>
</div>
</footer>
</div>
<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri() ?>/functions.js" defer></script>
</body>
</html>
