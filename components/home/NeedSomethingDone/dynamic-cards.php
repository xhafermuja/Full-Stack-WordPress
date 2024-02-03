    <div class="container h-full">
        <div class="image-background flex">
            <img class="w-full" src="<?php echo get_template_directory_uri(); ?>./components/home/NeedSomethingDone/img/group-26.png" alt="">
        </div>
        <div class=" 2xl:-mt-64 xl:-mt-52 lg:-mt-36 md:-mt-28 sm:-mt-20 2xl:mb-64 xl:mb-56 lg:mb-36 md:mb-28 sm:mb-16  w-full">
            <h1 class="sticky w-full text-center font-courgette 2xl:text-4xl lg:text-2xl md:text-xl text-white drop-shadow-2lg">Need something done ?</h1>
        </div>
    </div>
    <div class="container p-20 w-full">
        <?php if(have_rows('cards')):?>
            <div class="grid w-full 2xl:grid-cols-4 xl:grid-cols-4 lg:grid-cols-2 md:grid-cols-1 2xl:gap-10 xl:gap-0 md:gap-16">
                <?php while(have_rows('cards')):the_row();
                    $image=get_sub_field('icons');
                    $picture=$image['sizes']['thumbnail'];
                ?>
                <div class="card border-solid w-10/12">
                <div class="flex justify-around w-full">
                <img class="object-scale-down" src="<?php echo $picture;?>">
                    <h5 class="mt-3 text-2xl font-semibold tracking-tight 2xl:text-xl xl:text-lg lg:text-md md:text-lg "><?php the_sub_field('title');?></h5>
                </div>    
                    <p class="text-center mt-4"><?php the_sub_field('content');?></p>
                </div> 
                <?php endwhile;?>
            </div>
        <?php endif;?>
    </div>