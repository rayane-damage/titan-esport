        <footer class="footer">
          <div class="footer_main">
            <div class="footer_top">
              <img class="footer_logo" src="assets\imgs\logo.svg" alt="logo du site">
              <h1 class="footer_title">Titan E-sports</h1>
            </div>
            <div class="footer_middle">
              <nav class="footer_main-nav"></nav>
              <nav class="footer_login-nav"></nav>
            </div>
            <span class="line"></span>
            <p class="footer_disclaimer" >
              Titan E-sports est un site non officiel réalisé dans le cadre d’un exercice pédagogique et qui n'est pas affilié à EA ou Respawn entertainement.
            </p>            
          </div>
          <nav class="footer_legal">
            <?php 
              wp_nav_menu ( array (
                'theme_location' => 'legal' 
            ) ); ?>
          </nav>
        </footer>
        <?php wp_footer(); ?>     
  </body>
</html>