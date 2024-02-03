<?php
get_header();?>

    <!-- ////////////// CONTAINER-START ////////////// -->
<div class="container bg-bg p-20">

<div class="company-single">
<?php if( have_rows('jobs') ): ?>
    <?php while ( have_rows('jobs') ) : the_row(); 
        $image = get_sub_field('company_logo');
        ?>
        <div class="w-full pb-2 ">
            <div class="company-header w-full h-auto flex justify-between pt-6 lg:flex-col lg:flex-col-reverse lg:justify-center lg:pt-0 lg:gap-8">
                <div class="company-info w-8/12 lg:w-full  lg:justify-center">
                    <h1 class="company-name flex text-3xl font-bold"><?php the_sub_field('company_name'); ?></h1>
                    <p class="about-company flex items-center pt-6 w-full justify-center"><?php the_sub_field('about_company'); ?></p>
                </div>
                <div class="company-logo flex justify-center w-4/12 lg:w-full  lg:justify-center">
                    <img class="object-scale-down" src="<?php echo $image['url'];?>" class=""/>
                </div>                
            </div>
            <div class="company-social-media">
                <?php if(have_rows('company_social_media')):?>
                <div class="social-media-button grid w-7/12 2xl:grid-cols-6 xl:grid-cols-4 lg:grid-cols-2 sm:grid-cols-1 gap-4 xl:pt-10">
                    <?php while(have_rows('company_social_media')):the_row();
                        $socialMediaIcon=get_sub_field('social_media_icon');
                        $theirlink = get_sub_field('their_link');
                    ?>
                    <button class="flex justify-evenly items-center rounded-lg border-solid bg-stone-900 p-2 w-36 hover:bg-stone-400">
                    <img class="object-scale-down" src="<?php echo $socialMediaIcon['url'];?>">
                    <a href="<?php echo $theirlink['url']; ?>"><h5 class="text-white"><?php the_sub_field('social_media_buttons');?></h5></a>
                    </button> 
                    <?php endwhile;?>
                </div>
                <?php endif;?>
            </div>

            <!-- <div class="programming-languages pt-10">
            <?php if(have_rows('programming_languages')):?>
                <div class="languages flex justify-evenly w-full overflow-x-scroll">
                    <?php while(have_rows('programming_languages')):the_row();
                        $languageIcon=get_sub_field('language_icon');
                    ?>
                    <div class="flex justify-evenly items-center rounded-lg border-solid bg-gray-300 p-2 w-40">
                    <img class="object-scale-down w-5/12" src="<?php echo $languageIcon['url'];?>">
                    </div> 
                    <?php endwhile;?>
                </div>
                <?php endif;?>
            </div> -->

            <div class="programming-languages pt-10">
            <?php if(have_rows('programming_languages')):?>

                    <?php while(have_rows('programming_languages')):the_row();
                        $languageIcon=get_sub_field('language_icon');
                    ?>
                    <div class="language">
                        <div class="language-wrapper">
                                <img class="object-scale-down w-5/12 h-full" src="<?php echo $languageIcon['url'];?>">
                        </div> 
                    </div>
                    <?php endwhile;?>
                <?php endif;?>
            </div>

            <div class="open-job-positions w-full h-auto flex justify-between gap-4 lg:flex-col py-10 pt-20">
                <div class="about-job-postions w-7/12  lg:w-full ">
                    <h1 class="job-positions-name text-2xl"><?php the_sub_field('company_name'); ?> is looking for <span class="font-bold"><?php the_sub_field('job_positions_name'); ?></span></h1>
                    <p class="information w-full  text-center pt-4"><?php the_content();?></p>

                </div>
                <div class="header-card w-4/12 flex justify-center items-center gap-8 lg:w-full lg:justify-start">
                    <div class="contract border-solid border-lime-800 rounded-lg border-2 px-6 xl:px-4 text-center text-white bg-lime-800"><?php the_sub_field('contract_hour'); ?></div>
                    <div class="price border-solid border-zinc-300 rounded-lg border-2 px-6 xl:px-4 text-center bg-zinc-300 font-bold"><?php the_sub_field('price_per_hour'); ?></div>
                </div>
            </div>
            <hr class="w-full text-black">
            

            <div class="job-info py-10">
                <h1 class="responsible pb-4 text-xl">For this job, knowledge of the following are required:</h1>
                <div class="responsibilities flex  flex-wrap w-full justify-between pt-6 md:flex-col">
                    <?php
                    if( have_rows('employees_info') ):?>
                        <?php while ( have_rows('employees_info') ) : the_row();
                            $employee = get_sub_field('about_the_employee');
                            ?>
                            <li class="list-none flex leading-10 items-center w-6/12 xl:w-5/12 xl:leading-6 xl:items-start  md:w-full gap-4">
                                <svg class="flex-shrink-0 w-5 h-5 text-purple-500 dark:text-purple-400  xl:mt-2" fill="#c084fc" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path></svg>
                                &nbsp;<p class="employee-info leading-10"><?php echo $employee;?></p>
                            </li>
                        <?php endwhile; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="company-hiring w-full py-10">
                <div class="about-job-cards grid justify-items-center w-full 2xl:grid-cols-3 xl:grid-cols-3 lg:grid-cols-2 sm:grid-cols-1 gap-4">
                    <?php
                        if( have_rows('about_the_job') ):?>
                            <?php while ( have_rows('about_the_job') ) : the_row();
                                $svg = get_sub_field('svg');
                                $about = get_sub_field('info');
                                ?>
                                <div class="info flex w-6/12 lg:w-8/12 md:w-full justify-evenly p-6 bg-gray-300 items-center  border-solid rounded-xl">
                                    <img class="flex-shrink-0 w-5 h-5" src="<?php echo $svg['url'];?>">
                                    <h3 class="about"><?php echo $about;?></h3>
                                </div>
                            <?php endwhile; ?>
                        <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="comments-files w-full flex justify-between xl:gap-10 lg:flex-col pt-10">
            <div id="company-comments-section" class="w-5/12 xl:w-6/12 lg:w-full ">
                <?php comments_template( '/comments-company.php' ); ?> 
                    <div class="card-comments w-full">
                    <h1 class="comments-title">Comments</h1>
                    <ul class="commentlist">
                    <?php wp_list_comments( 'type=comment&callback=mytheme_comment' ); ?>
                    </ul>
                </div>
        </div>
        <div class="file-attachment w-5/12  lg:w-full h-1/2">
            <h1 class="email font-semibold text-base w-full text-center pb-4">Send Your CV in : <?php the_sub_field('company_email');?></h1> 
            <h1 class="apply-job w-full text-center text-2xl font-bold">Apply for this Job</h1>
            <?php echo do_shortcode('[contact-form-7 id="712" title="File Attachments"]'); ?>
            <!-- <p class="attach files pt-4 "><?php the_content(); ?></p> -->
        </div>
        </div>

        <?php endwhile; ?>
<?php endif; ?>
    </div>
    


</div>
<?php get_footer();?>