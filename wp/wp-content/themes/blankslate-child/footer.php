    <footer id="footer">
      <ul id="social-media">
        <li>
          <a href='#' title='View my Instagram page' target='_blank'>
            <img src='/wp-content/themes/blankslate-child/assets/icons/instagram-logo.png' alt='Instagram Logo' />
          </a>
        </li>
        <li>
          <a href='#' title='View my Twitter page' target='_blank'>
            <img src='/wp-content/themes/blankslate-child/assets/icons/twitter-logo.png' alt='Twitter Logo' />
          </a>
        </li>
        <li>
          <a href='#' title='View my Facebook page' target='_blank'>
            <img src='/wp-content/themes/blankslate-child/assets/icons/facebook-logo.png' alt='Facebook Logo' />
          </a>
        </li>
      </ul>
      <div id='copyright'>
        <p>Built by <a href='#'>jetchy</a></p>
        <p>&copy; <?php echo esc_html( date_i18n( __( 'Y', 'blankslate' ) ) ); ?> <?php echo esc_html( get_bloginfo( 'name' ) ); ?></p>
      </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>