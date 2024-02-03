<?php
/*
    Template Name: Find Talents
*/

get_header();?>
<div class="container bg-bg p-20">
    
    <section id="Java Developer" class="py-10">

        <h1 class="text-3xl py-5">Java Developer</h1>
        
        <?php
            global $wpdb;

            $java = $wpdb->get_results("SELECT *, AVG(rate.rateIndex) AS rate FROM wp_posts LEFT JOIN ratingSystem.rate ON wp_posts.ID = rate.cardID , wp_terms , wp_term_taxonomy , wp_term_relationships 
            WHERE  wp_posts.ID = wp_term_relationships.object_id AND wp_terms.term_id = wp_term_taxonomy.term_id AND wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
            AND (wp_term_taxonomy.taxonomy = 'category' AND wp_term_taxonomy.term_id = wp_terms.term_id AND wp_terms.name = 'Java Developer') 
            GROUP BY wp_posts.ID
            ORDER BY rate DESC
            ");
        ?>
            <div class="users grid 2xl:grid-cols-4 xl:grid-cols-3  lg:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo $last; ?>" data-label="Java Developer" >
            
            <?php
                foreach($java as $post){
                    get_template_part('/components/home/card_users/user' , 'cards');
                    
                }
                $wpdb->flush();
                wp_reset_postdata();
            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>

    </section>

    
    <section id="It Technichian" class="py-10">
        <h1 class="text-3xl py-5">It Technichian</h1>
        
        <?php

            $java = $wpdb->get_results("SELECT *, AVG(rate.rateIndex) AS rate FROM wp_posts LEFT JOIN ratingSystem.rate ON wp_posts.ID = rate.cardID , wp_terms , wp_term_taxonomy , wp_term_relationships 
            WHERE  wp_posts.ID = wp_term_relationships.object_id AND wp_terms.term_id = wp_term_taxonomy.term_id AND wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
            AND (wp_term_taxonomy.taxonomy = 'category' AND wp_term_taxonomy.term_id = wp_terms.term_id AND wp_terms.name = 'It Technichian') 
            GROUP BY wp_posts.ID
            ORDER BY rate DESC
            ");
        ?>
            <div class="users grid 2xl:grid-cols-4 xl:grid-cols-3  lg:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query8->found_posts/2); ?>" data-label="It Technichian" >
            <?php
                foreach($java as $post){
                    get_template_part('/components/home/card_users/user' , 'cards');
                }
            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>
    </section>

    
    <section id="Software Developer" class="py-10">
        <h1 class="text-3xl py-5">Software Developer</h1>
        
        <?php

            $java = $wpdb->get_results("SELECT *, AVG(rate.rateIndex) AS rate FROM wp_posts LEFT JOIN ratingSystem.rate ON wp_posts.ID = rate.cardID , wp_terms , wp_term_taxonomy , wp_term_relationships 
            WHERE  wp_posts.ID = wp_term_relationships.object_id AND wp_terms.term_id = wp_term_taxonomy.term_id AND wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
            AND (wp_term_taxonomy.taxonomy = 'category' AND wp_term_taxonomy.term_id = wp_terms.term_id AND wp_terms.name = 'Software Developer') 
            GROUP BY wp_posts.ID
            ORDER BY rate DESC
            ");
        ?>
            <div class="users grid 2xl:grid-cols-4 xl:grid-cols-3  lg:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query8->found_posts/2); ?>" data-label="Software Developer" >
            <?php
                foreach($java as $post){
                    get_template_part('/components/home/card_users/user' , 'cards');
                }
            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>
    </section>

    
    <section id="PHP Developer" class="py-10">
    <h1 class="text-3xl py-5">PHP Developer</h1>
        
        <?php

            $java = $wpdb->get_results("SELECT *, AVG(rate.rateIndex) AS rate FROM wp_posts LEFT JOIN ratingSystem.rate ON wp_posts.ID = rate.cardID , wp_terms , wp_term_taxonomy , wp_term_relationships 
            WHERE  wp_posts.ID = wp_term_relationships.object_id AND wp_terms.term_id = wp_term_taxonomy.term_id AND wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
            AND (wp_term_taxonomy.taxonomy = 'category' AND wp_term_taxonomy.term_id = wp_terms.term_id AND wp_terms.name = 'PHP Developer') 
            GROUP BY wp_posts.ID
            ORDER BY rate DESC
            ");
        ?>
            <div class="users grid 2xl:grid-cols-4 xl:grid-cols-3  lg:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query8->found_posts/2); ?>" data-label="PHP Developer" >
            <?php
                foreach($java as $post){
                    get_template_part('/components/home/card_users/user' , 'cards');
                }
            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>
    </section>

    
    <section id="fFront End Developer" class="py-10">
    <h1 class="text-3xl py-5">Front End Developer</h1>
        
        <?php

            $java = $wpdb->get_results("SELECT *, AVG(rate.rateIndex) AS rate FROM wp_posts LEFT JOIN ratingSystem.rate ON wp_posts.ID = rate.cardID , wp_terms , wp_term_taxonomy , wp_term_relationships 
            WHERE  wp_posts.ID = wp_term_relationships.object_id AND wp_terms.term_id = wp_term_taxonomy.term_id AND wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
            AND (wp_term_taxonomy.taxonomy = 'category' AND wp_term_taxonomy.term_id = wp_terms.term_id AND wp_terms.name = 'Front End Developer') 
            GROUP BY wp_posts.ID
            ORDER BY rate DESC
            ");
        ?>
            <div class="users grid 2xl:grid-cols-4 xl:grid-cols-3  lg:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query8->found_posts/2); ?>" data-label="Front End Developer" >
            <?php
                foreach($java as $post){
                    get_template_part('/components/home/card_users/user' , 'cards');
                }
            ?>

        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>
    </section>

    
    <section id="Python Developer" class="py-10">
    <h1 class="text-3xl py-5">Python Developer</h1>
        
        <?php

            $java = $wpdb->get_results("SELECT *, AVG(rate.rateIndex) AS rate FROM wp_posts LEFT JOIN ratingSystem.rate ON wp_posts.ID = rate.cardID , wp_terms , wp_term_taxonomy , wp_term_relationships 
            WHERE  wp_posts.ID = wp_term_relationships.object_id AND wp_terms.term_id = wp_term_taxonomy.term_id AND wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
            AND (wp_term_taxonomy.taxonomy = 'category' AND wp_term_taxonomy.term_id = wp_terms.term_id AND wp_terms.name = 'Python Developer') 
            GROUP BY wp_posts.ID
            ORDER BY rate DESC
            ");
        ?>
            <div class="users grid 2xl:grid-cols-4 xl:grid-cols-3  lg:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query8->found_posts/2); ?>" data-label="Python Developer" >
            <?php
                foreach($java as $post){
                    get_template_part('/components/home/card_users/user' , 'cards');
                }
            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>
    </section>

    
    <section id="Graphic Designer" class="py-10">
    <h1 class="text-3xl py-5" >Graphic Designers</h1>
        <?php

            $java = $wpdb->get_results("SELECT *, AVG(rate.rateIndex) AS rate FROM wp_posts LEFT JOIN ratingSystem.rate ON wp_posts.ID = rate.cardID , wp_terms , wp_term_taxonomy , wp_term_relationships 
            WHERE  wp_posts.ID = wp_term_relationships.object_id AND wp_terms.term_id = wp_term_taxonomy.term_id AND wp_term_relationships.term_taxonomy_id = wp_term_taxonomy.term_taxonomy_id
            AND (wp_term_taxonomy.taxonomy = 'category' AND wp_term_taxonomy.term_id = wp_terms.term_id AND wp_terms.name = 'Graphic Designer') 
            GROUP BY wp_posts.ID
            ORDER BY rate DESC
            ");
        ?>
            <div class="company-posts grid 2xl:grid-cols-4 xl:grid-cols-3  lg:grid-cols-2 sm:grid-cols-1 gap-8" data-count="<?php echo ceil($the_query8->found_posts/2); ?>" data-label="Graphic Designer" >
            <?php
                foreach($java as $post){
                    get_template_part('/components/home/card_users/user' , 'cards');
                }
            ?>
        </div>
        <button class="findMore flex justify-self-center mx-auto  mt-12 border  border-customGreen p-2 px-4 rounded-xl transition duration-300 ">Load More</button>
    </section>
</div>

<?php get_footer();?>