<?php if( have_rows('build_profile') ): ?>
        
        <?php while( have_rows('build_profile') ): the_row(); 
            // Get sub field values.
            $image = get_sub_field('profile_svg');
        ?>
        <div class="build-profile  flex w-full mx-auto justify-center h-auto gap-44 xl:gap-8 lg:gap-0 md:flex-col md:items-center">
        <div class="profile-svg md:mb-20 2xl:w-4/12 lg:w-5/12 md:w-8/12 lg:mb-20 flex justify-center">
            <img class="md:w-96 sm:w-auto"src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" />
        </div>
        <div class="build-profile-paragraph flex flex-col md:items-center  2xl:w-5/12 xl:w-6/12 lg:w-6/12 md:w-full">
            <h1 class="ml-32 md:ml-0 build-profile-title  text-3xl tracking-wider font-bold  lg:text-2xl mb-3  md:text-center"><?php the_sub_field('build_profile_title');?></h1>
            <span class="ml-32 md:ml-0 undertitle tracking-widest md:text-center w-full sm:tracking-wider"><?php the_sub_field('undertitle');?></span>
            <p class="ml-32 md:ml-0 paragraph xl:text-base w-2/3 md:w-full md:text-center 2xl:h-60 xl:72 mt-4"><?php the_sub_field('profile_paragraph');?></p>
        </div>
    </div>
    <?php endwhile; ?>
<?php endif; ?>