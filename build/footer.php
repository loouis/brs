    <footer class="footer" role="contentinfo" data-scroll-index="4">
      <div class="wrapper">
        <header class="section-header">
          <div class="section-title">
            <span class="section-title__line"></span> 
            <h4>Let's Talk</h4>
          </div>
        </header>

        <div class="footer__contact-details l-50">
          <div class="footer__contact-details__enquiries l-50">
            <h4>Enquiries</h4>
            <ul class="list-links">
              <li class="list-links__link"><a href="tel:<?php the_field('cd_office-tel', 'option');?>"><?php the_field('cd_office-tel', 'option')?></a></li>
              <li class="list-links__link"><a href="tel:<?php the_field('cd_mobile-tel', 'option');?>"><?php the_field('cd_mobile-tel', 'option')?></a></li>
              <li class="list-links__link"><a href="mailto:<?php the_field('cd_email_address', 'option')?>"><?php the_field('cd_email_address', 'option')?></a></li>
            </ul>
          </div>
          <div class="footer__contact-details__social l-50">
            <ul>
              <li>
                <a href="<?php the_field('', 'option')?>">
                  <i><?php the_field('', 'option')?></i>  
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer__c-time l-50">
          <?php $dt = new DateTime();echo $dt->format('H:i');?>
        </div>
        <div class="footer__small">
          <p class="copyright">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
          </p>
        </div>
      </div>
    </footer>
    
    <?php wp_footer(); ?>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/scripts-min.js"></script>
		<!-- analytics -->
		<script>
      (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
      (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
      l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
      ga('send', 'pageview');
		</script>

	</body>
</html>
