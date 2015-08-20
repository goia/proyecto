<a href="#" class="scrollup">Scroll</a>
    <script type="text/javascript">
        $(window).scroll(function(){
           if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
           } else {
                $('.scrollup').fadeOut();
           }
        });
        
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
                });
    </script>