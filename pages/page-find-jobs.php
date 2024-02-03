<?php
/*
    Template Name: Find Jobs
*/

get_header();?>
<div class="container bg-bg p-20">

    <section id="Front End Development" class="py-10">

        <h1 class="text-3xl py-5">Front End Development</h1>
        
            <?php

                $args8 = array(
                    'post_type' => 'company',
                    'post_status' => 'publish',
                    'categories' => 'Front End Development',
                    'posts_per_page' => 4,
                );

                $the_query8 = new WP_Query($args8);?>
                <div class="company-posts grid 2xl:grid-cols-4 xl:grid-cols-3  lg:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query8->found_posts/2); ?>" data-label="Front End Development" >
                <?php
                if( $the_query8->have_posts()):

                    while( $the_query8->have_posts() ): $the_query8->the_post(); ?>

                        <?php get_template_part('/components/find-jobs/jobs-card/front','development');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;

            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>

    </section>
    
    <section id="Back End Development" class="py-10">

        <h1 class="text-3xl py-5">Back End Development</h1>
        
            <?php

                $args9 = array(
                    'post_type' => 'company',
                    'post_status' => 'publish',
                    'categories' => 'Back End Development',
                    'posts_per_page' => 4,
                );

                $the_query9 = new WP_Query($args9);?>
                <div class="company-posts grid 2xl:grid-cols-4 xl:grid-cols-3  lg:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query9->found_posts/2); ?>" data-label="Back End Development"><?php
                if( $the_query9->have_posts()):

                    while( $the_query9->have_posts() ): $the_query9->the_post(); ?>

                        <?php get_template_part('/components/find-jobs/jobs-card/back','development');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;

            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>

    </section>

    <section id="Full Stack Development" class="py-10">

        <h1 class="text-3xl py-5">Full Stack Development</h1>
        
            <?php

                $args10 = array(
                    'post_type' => 'company',
                    'post_status' => 'publish',
                    'categories' => 'Full Stack Development',
                    'posts_per_page' => 4,
                );

                $the_query10 = new WP_Query($args10);?>
                <div class="company-posts grid 2xl:grid-cols-4 xl:grid-cols-3  lg:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query10->found_posts/2); ?>" data-label="Full Stack Development"><?php
                if( $the_query10->have_posts()):

                    while( $the_query10->have_posts() ): $the_query10->the_post(); ?>

                        <?php get_template_part('/components/find-jobs/jobs-card/full','development');?>
                        
                    <?php endwhile;

                    wp_reset_postdata();

                endif;

            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>

    </section>

</div>

<?php get_footer();?>