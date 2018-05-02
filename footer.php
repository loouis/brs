    
    
    <?php if( wp_is_mobile() ){ ?>
      <footer class="footer" role="contentinfo" data-scroll-index="4">
    <?php }else{ ?>
      <footer class="footer bg-cover bg-fixed" role="contentinfo" data-scroll-index="4" style="background-image:url(<?php echo the_field('footer_image', 'option')['sizes']['d_full-screen']?>)">
    <?php } ?>
      <div class="wrapper">
        <header class="section-header">
          <div class="section-header__title l-20 l-first">
            <span class="section-header__title__line"></span> 
            <h4 class="f-white">Let's Talk.</h4>
          </div>
        </header>
        <div class="footer__wrap">
          <div class="footer__wrap__contact-details l-60 l-first">
            <div class="footer__wrap__contact-details__enquiries l-60 l-first">
              <h4>Enquiries</h4>
              <ul class="list-links">
                <li class="btn-list-links__link"><a href="tel:<?php the_field('cd_office-tel', 'option');?>" class="f-white"><?php the_field('cd_office-tel', 'option')?></a></li>
                <li class="btn-list-links__link"><a href="tel:<?php the_field('cd_mobile-tel', 'option');?>" class="f-white"><?php the_field('cd_mobile-tel', 'option')?></a></li>
                <li class="btn-list-links__link"><a href="mailto:<?php the_field('cd_email_address', 'option')?>" class="f-white"><?php the_field('cd_email_address', 'option')?></a></li>
              </ul>
            </div>
            <div class="footer__wrap__contact-details__social l-40 l-last">
              <h4>Follow us</h4>
              <ul>
                <li>
                  <a href="<?php the_field('', 'option')?>">
                    <i><?php the_field('', 'option')?></i>  
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer__wrap__c-time l-40 l-last">
            <span class="footer__wrap__c-time__time f-white"><?php $dt = new DateTime();echo $dt->format('H:i');?></span>
          </div>
        </div>
        <div class="footer__small">
          <p class="copyright f-small">
            &copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>
          </p>
        </div>
      </div>
    </footer>
    
    <?php wp_footer(); ?>
    
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="<?php echo get_template_directory_uri();?>/assets/js/scripts-min.js"></script>
    <!-- Typekit Fonts -->
    <script>
      (function(d) {
        var config = {
          kitId: 'riy8udm',
          scriptTimeout: 3000,
          async: true
        },
        h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
      })(document);
    </script>

		<!-- Google Analytics -->
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
