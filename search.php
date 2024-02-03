<?php get_header();?>

    <?php

        $term = $_GET['s'];

        $expTerm = explode(" ", $term);

        $search = "(";
        foreach( $expTerm as $ek=>$ev ){

            if($ek == 0){
                $search .= " post_title LIKE '%".$ev."%' ";
            }
            else{
                $search .= " OR post_title LIKE '%".$ev."%' ";
            }

        };
        $search .= ")";

        $query = $wpdb->get_results(" SELECT * FROM ".$wpdb->prefix."posts WHERE post_status='publish' AND $search");


        /* builded a position array for the term */
        $position = 101;
        $rate = [];

        for( $i=0; $i<=100; $i++){
            
            $position = $position -1; //first run will start from 100
            $rate[$i] = $position;
        }
        /*build the array based on type and position */
        /* loop through the query */
        $newArray = [];
        foreach($query as $k => $v){
            
            /* loop through each term*/

            $title = $v->post_title;
            if($title == false){
                
                $a = true;
                break;
            }
            

            $calculate =0;
            if($a==true){
                break;
            foreach($expTerm as $tk=>$tv)
			{
                
               
				if(strpos(strtolower($title), strtolower($tv)) !== false)
				{
					$calculate = $calculate + strlen($tv);

					$pos = strpos(strtolower($title), strtolower($tv));
					$calculate = $calculate + $rate[$pos];

				} 
			} 
        }
            $newKey = $calculate.'.'.$v->ID;

            $newArray[$newKey] = $v;

            //print $newKey.'<br />';
        }

        /* Sort in reverse DESC*/
        krsort($newArray);?>

        <div class="container bg-bg p-20">
            <section id="search-results">
                <h1 class="text-3xl pb-10">Search Results</h1>
                <?php 
                    if(have_posts()){
                ?>
                <?php while(have_posts()){
                    the_post();?>

                    <?php } ?>
                <div class="users  grid grid-cols-4 lg:grid-cols-3  md:grid-cols-2 sm:grid-cols-1 gap-8">

                    <?php foreach($newArray as $qk=>$qv){
                        if($a==true){ ?>
                            <h1>No results for this search!</h1>
                            <?php
                            break;
                        }


                        $link = get_permalink  ($qv->ID);
                        ?>
                        <div class="user-card bg-white rounded-3xl">
                            <div class="user-thumbnail">
                            <?php the_post_thumbnail('large'); ?>
                            </div>
                            <?php  if(have_rows('profile')):?>
                                <?php while( have_rows('profile')): the_row(); 
                                    $image = get_sub_field('image');
                                    ?>

                                <?php endwhile;?>
                            <?php endif;?>
                            <div class="user p-2">
                                <div class="user-info flex mb-2">
                                    <div class="img pr-5">
                                        <img src="<?php echo $image['url'];?>" class="2xl:w-14 2xl:h-14 w-10 h-10 rounded-full" />
                                    </div>
                                    <div class="user-name text-basic font-semibold">
                                        <?php print $qv->post_title; ?>
                                    </div>
                                </div>
                                <div class="user-content text-basic mb-5">
                                    <?php print wp_trim_words($qv->post_content,5,'... '); ?>
                                </div>
                                <?php  if(have_rows('rating')):?>

                                    <?php while( have_rows('rating')): the_row(); ?>

                                    
                                    <div class="rating flex items-center mb-5 text-sm font-semibold">
                                    <img class="h-5 w-5 mr-2" src="<?php echo get_template_directory_uri(); ?>/assets/img/UserImages/Star.png" />
                                    <p class="text-sm font-semibold"><?php the_sub_field('number'); ?></p>
                                    </div>

                                    <?php endwhile;?>
                                <?php endif;?>
                                
                                <button type="button" class="flex w-full text-white text-xs justify-end p-1">
                                    <?php $link = get_permalink();  ?>
                                    <p class="bg-green-700 hover:bg-green-800  rounded-full px-4 py-2 text-center"><?php print '<a href="'.$link.'">More Info ...</a>' ?></p>  
                                </button>
                            </div>
                        </div>
                        <?php
                    } ?>
                </div>
                <?php } else{
                ?>
                    <h1>No results for this search!</h1>
                <?php } ?>
            </section>
        </div>
   <?php ?>

<?php get_footer();?>