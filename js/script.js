  jQuery(document).ready(
    function(){
      
        /*++++Nav++++*/
      
        jQuery('.navbar_menu').affix(
            {
                offset: {
                    top: 169,
                    bottom: function () {
                        return (this.bottom = jQuery('.top-header').addClass('true'));
                    }
                }
            }
        );

        jQuery('#agent-form').submit(ajaxSubmit);

        function ajaxSubmit(){

            var newCustomerForm = jQuery(this).serialize();

            jQuery('#single-property-form-submit-button').hide();
            jQuery('.loading-button').show();

            jQuery.ajax(
                {
                    type:"POST",
                    url: my_ajax_vars.ajaxurl,
                    data: newCustomerForm,
                    success:function(data){
                          jQuery("#feedback").html(data);
                          jQuery('#single-property-form-submit-button').show();
                          jQuery('.loading-button').hide();

                    }
                }
            );

            return false;
        }



        /*++++Nav++++
        jQuery('#my_nav li a,.footerli li a, .logo,.section-link').click(function() {
        var targetID = jQuery(this).attr('href');
        var targetOffset = jQuery(targetID).offset().top;
        jQuery('html, body').animate({scrollTop: targetOffset}, 1000, 'easeInOutExpo');
        return false;
        });*/

        /*Owl Slider*/

        var owl = jQuery("#owl-demo");
        owl.owlCarousel(
            {
                itemsCustom : [
                [0, 1], [768, 2]
                ],
                autoPlay: 3000
            }
        );

        /*++++owl team++++*/
        var owlteam = jQuery("#owl-team");
        owlteam.owlCarousel(
            {
                itemsCustom : [
                [0, 1], [480, 2], [768, 3], [1200, 4]
                ],
                autoPlay: 3000
                //navigation : true
            }
        );
        jQuery(".la").click(function(){owlteam.trigger('owl.prev');});
        jQuery(".ra").click(function(){owlteam.trigger('owl.next');});

        /*++++owl Testimonial++++*/
        var owl = jQuery("#owl-testimonial");
        owl.owlCarousel(
            {
                itemsCustom : [
                [0, 1], [768, 1]
                ],
                autoPlay: 3000
            }
        );
      
        /*++++Properties++++*/    

        var owlpproperties = jQuery("#owl-p-properties");
        owlpproperties.owlCarousel(
            {
                itemsCustom : [
                [0, 1], [768, 2], [1024, 3], [1600, 4]
                ],
                autoPlay: 3000
            }
        );
      
        jQuery(".owl-buttonss .owl-prev").click(function(){owlpproperties.trigger('owl.prev');});
        jQuery(".owl-buttonss .owl-next").click(function(){owlpproperties.trigger('owl.next');});

        /*++++Floor Plan++++*/    

        var owlfloorplan = jQuery("#owl-floor-plan");
        owlfloorplan.owlCarousel(
            {
                itemsCustom : [
                [0, 1], [768, 2], [1024, 3]
                ],
                autoPlay: 3000
            }
        );
        jQuery(".left-arrow").click(function(){owlfloorplan.trigger('owl.prev');});
        jQuery(".right-arrow").click(function(){owlfloorplan.trigger('owl.next');});

        /*++++Floor Plan++++*/    

        var owlLight = jQuery(".owl-demo-3");
        owlLight.owlCarousel(
            {
                itemsCustom : [
                [0, 1]
                ],
                autoPlay: 3000,
                navigation : true,
                slideSpeed    :1000
            }
        );
        jQuery(".custom-galery .owl-nav .fa-chevron-left").click(function(){owlLight.trigger('owl.prev');});
        jQuery(".custom-galery .owl-nav .fa-chevron-right").click(function(){owlLight.trigger('owl.next');});

        /*Owl Slider End*/


        jQuery(".search-sec button").click(
            function(){
                jQuery(".search-sec input").focus();
            }
        );
        jQuery(".search-sec input").focus(
            function(){
                jQuery(".search-sec button").addClass('white');
            }
        );
        jQuery(".search-sec input").blur(
            function(){
                jQuery(".search-sec button").removeClass('white');
            }
        );
        jQuery(".loading i").fadeOut();    
        jQuery(".loading").click(
            function(){
                jQuery(".loading i").fadeIn().delay(3000).fadeOut();
            }
        );
        jQuery(".text-option i").click(
            function(){
                jQuery(".text-option i").fadeOut();
                jQuery(".text-option .dropdown-menu").slideUp();
            }
        );
        jQuery(".text-option input").click(
            function(){
                jQuery(".text-option i").fadeIn();
                jQuery(".text-option .dropdown-menu").slideDown();
            }
        );
        /*++++Custom Galery++++*/    

        jQuery(".custom-galery .overlay label").on(
            'click', function(){
                jQuery(".custom-galery").removeClass('open');
            }
        );
        jQuery(".r-property-image a,.news-img,#owl-floor-plan .item img").on(
            'click', function(){
                jQuery(".custom-galery").addClass('open');
            }
        );
      
        function changeLang() {
            var selectBox = document.getElementById("change_lang");
            var selectedValue = selectBox.options[selectBox.selectedIndex].value;
            window.location.href = 'http://hidein.net?lang='+selectedValue;
        }
        /*--------------------------------------- ANIMATION --------------------------------------------*/
        var wow = new WOW(
            {
                boxClass:     'wow',      // animated element css class (default is wow)
                animateClass: 'animated', // animation css class (default is animated)
                offset:       100,          // distance to the element when triggering the animation (default is 0)
                mobile:       false        // trigger animations on mobile devices (true is default)
            }
        );
        wow.init();
    }
);




