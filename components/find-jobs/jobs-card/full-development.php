<div class="cards-company w-full rounded-3xl">
    <div class="company w-full rounded-3xl">
        <?php if( have_rows('jobs') ): ?>
            <?php while ( have_rows('jobs') ) : the_row(); 
                $image = get_sub_field('company_logo');
        ?>
        <div class="company-card  rounded-3xl shadow-3xl">
            <div class="side front bg-white rounded-3xl p-6 pb-2">
                <div class="header-card w-full flex justify-between  items-center gap-4 md:gap-2 h-14">
                    <div class="contract border-solid border-lime-800 rounded-lg border-2 p-1 px-4 xl:px-2 text-center text-white bg-lime-800"><?php the_sub_field('contract_hour'); ?></div>
                    <div class="price border-solid border-zinc-300 rounded-lg border-2 p-1 px-4 xl:px-2 text-center bg-zinc-300 font-bold"><?php the_sub_field('price_per_hour'); ?></div>
                </div>
                <div class="company-hiring w-full pt-16 flex flex-col items-center">
                    <h1 class="company-name flex w-auto justify-center text-xl items-center lg:text-base"><img class="w-2/12 h-2/6"src="<?php echo $image['url'];?>" class="" />&nbsp;<?php the_sub_field('company_name'); ?></h1>
                    <h1 class="job-positions-name font-bold text-2xl pt-3 xl:text-xl lg:text-base sm:text-lg"><?php the_sub_field('job_positions_name'); ?></h1>
                </div>
                <div class="skill-required flex justify-center gap-1 flex-wrap pt-6 h-12">
                    <?php
                        if( have_rows('skills_required') ):?>
                            <?php while ( have_rows('skills_required') ) : the_row();
                                $sub_value = get_sub_field('name_of_the_skill');
                            ?>
                                <p class="skill  border-solid border-sky-700 rounded-xl border-2 text-center w-24 h-7 hover:bg-sky-700 hover:text-white"><?php echo $sub_value;?></p>
                            <?php endwhile; ?>
                        <?php endif; ?>
                </div>    
            </div>
            <div class="side back bg-white rounded-3xl p-6 pb-2 flex justify-around flex-col">
                <div class="job-info w-full py-8">
                <p class="information text-center "><?php echo wp_trim_words( get_the_content(), 50); ?></p>
                </div>
                <?php endwhile; ?>
            <?php endif; ?>
                    <div class="hr-border w-full flex flex-col justify-center items-center">
                        <hr class="hr-company-card w-4/12 text-center">
                        <button type="button" class="w-full text-md p-1 pt-1 ">
                            <?php $link = get_permalink();  ?>
                            <p class="rounded-full px-4 py-2 text-center"><?php print '<a href="'.$link.'">View Job</a>' ?></p>  
                        </button>
                    </div>
                </div>
        </div>
    </div>
</div>