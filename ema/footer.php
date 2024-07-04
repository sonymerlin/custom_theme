<div class="overlaydiv">
    <div class="businessinfo">
        <h5>For your business transformation <br/>Let’s start a conversation</h5>
        <div class="getintouch">
        <div class="gbtn">
        <p><a href="<?php bloginfo('url'); ?>/contact/">Get in Touch</a></p>
</div>
        <p style="padding-top: 30px;"><a href="mailto:info@xxx.com" style="
        border: none; padding-left: 0;">info@xxx.com</a><br/><br/><a href="tel:00" target="_blank" style="border: none; padding-left: 0;" rel="noopener">(08) 8203 1700</a></p>
        </div>
        
    </div>
</div>
<div class="footersec">
    <div class="container">
        <div class="footermenu">
       <?php wp_nav_menu( array(
   'theme_location' => 'footer_menu_1',
));?>
        </div>
        <div class="footermenutwo">
        <?php wp_nav_menu( array(
   'theme_location' => 'footer_menu_2',
));?>
        </div>
        <div class="footerlogo">
        <div class="clsLogo"><a href="<?php bloginfo('url'); ?>"><img alt="logo" src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/logo-2023-w-mono.png"></a></div>
        <div class="socialmedia">
        <ul> 
            <li>
                <a href="#" target="_blank" rel="noopener">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icons-website-linkedIn.png">
                </a>
            </li> 
            <li>
                <a href="#" target="_blank" rel="noopener">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icons-website-email.png">
                </a>
            </li> 
            <li>
                <a href="#" target="_blank" rel="noopener">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/images/social-icons-website-phone.png">
                </a>
            </li> 
        </ul>
        </div>
        <div class="address">
            <p>(01) 1203 1100</p>
            <p><a href="#">xxx@xx.com</a></p>
            <p>Level 1, 89 xxx, US SA 5000</p>
           
        </div>
        </div>
        <div class="clearfix"></div>
        <div class="copyright"><a href="<?php bloginfo('url'); ?>/privacy-policy/">Privacy policy</a> | <a href="<?php bloginfo('url'); ?>/terms-and-conditions/">Terms and conditions</a> | Copyright © <?php echo date("Y"); ?> XXX</div>
        <a href="#" class="topbutton"></a>
    </div>
</div>

<?php

   wp_footer(); ?>
   
   <script>

      (function($) {

$.fn.menumaker = function(options) {

 var cssmenu = $(this), settings = $.extend({

   format: "dropdown",

   sticky: false

 }, options);

 return this.each(function() {

   $(this).find(".button").on('click', function(){

     $(this).toggleClass('menu-opened');

     var mainmenu = $(this ).parent().find('#menu-top-menu');

     if (mainmenu.hasClass('open')) {

       mainmenu.slideToggle().removeClass('open');

     }

     else {

       mainmenu.  addClass('open');

       if (settings.format === "dropdown") {

         mainmenu.find('ul').show();

       }

     }

   });

   cssmenu.find('li ul').parent().addClass('has-sub');

   multiTg = function() {

     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');

     cssmenu.find('.submenu-button').on('click', function() {

       $(this).toggleClass('submenu-opened');

       if ($(this).siblings('ul').hasClass('open')) {

         $(this).siblings('ul').removeClass('open');

       }

       else {

         $(this).siblings('ul').addClass('open');

       }

     });

   };

   if (settings.format === 'multitoggle') multiTg();

   else cssmenu.addClass('dropdown');

   if (settings.sticky === true) cssmenu.css('position', 'fixed');

resizeFix = function() {

  var mediasize = 1000;

     if ($( window ).width() > mediasize) {

       cssmenu.find('ul').show();

     }

     if ($(window).width() <= mediasize) {

       cssmenu.find('ul').hide().removeClass('open');

     }

   };

   resizeFix();

   return $(window).on('resize', resizeFix);

 });

  };

})(jQuery);



(function($){

$(document).ready(function(){

$("#cssmenu").menumaker({

   format: "multitoggle"

});

});

})(jQuery);





   </script>

</body>

</html>