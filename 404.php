<?php get_header('404'); ?>

    <div class="container bg-bg p-20">
        <section id="not found">
            <div class="title">
                <h1 class="text-5xl">Sorry, page not found!</h1>
            </div>
            <div class="section-container">
                <div class="img ">
                <img class="mx-auto object-scale-down h-2/4 w-2/4" src="<?php echo get_template_directory_uri(); ?>/assets/img/NotFoundImages/nf.png" />
                </div>
            </div>
            <button class="flex bg-black text-white rounded-xl px-10 py-5 mx-auto">
                <a href="http://localhost/wordpress">Home</a>
            </button>
        </section>
    </div>

<?php get_footer(); ?>