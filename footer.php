
<!-- ////////////// CONTAINER-END ////////////// -->

<!-- ////////////// CONTAINER-END ////////////// -->

  <footer class=" bg-black">
        <div class="footer container p-20  w-full grid lg:grid-col items-center grid-cols-4 lg:gap-24 xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 sm:grid-cols-1">
            <div class="footer-icon four-columns w-full flex 2xl:ml-20 xl:ml-16 lg:ml-8 sm:ml-0 sm:justify-center">
                <?php
                    if ( function_exists( 'the_custom_logo' ) ) {
                    the_custom_logo();
                    }
                ?>            
            </div>
                <div class="four columns text-white w-full text-center">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-left-center-widget') ) ?>
                </div>
                <div class="four columns w-full flex items-center flex-col">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-center-widget') ) ?>
                </div>
                <div class="four columns w-full flex justify-center">
                    <?php if ( !function_exists( 'dynamic_sidebar' ) || !dynamic_sidebar('footer-right-widget') ) ?>
                </div>
        </div>
    </footer>
<?php wp_footer(); ?>
</body>

</html>