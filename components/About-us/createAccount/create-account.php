<!---- stripe ---->


          <?php 
          $about1 = get_field('about1');
          $about2 = get_field('about2');
          $about3 = get_field('about3');
          $about4 = get_field('about4');
          $button = get_field('button');
          $image = get_field('image');
          $picture = $image['sizes']['large'];
          ?>





   <!---- first section ----->
<div class="all-sections w-full flex flex-col justify-center">
    <div class="first-section mx-auto ">
            <?php if($about1): ?>
            <h4 class="text-green-700 text-lg text-center"><?php echo $about1;?></h4>
            <?php endif;?>
            
                    <div class="font-sans text-3xl font-medium text-center">

                        <?php if($about2): ?>

                            <h1><?php echo nl2br($about2);?></h1>

                        <?php endif;?>
                    </div>
    </div>

    <!------ second section ---->
    <div class="second-section flex items-center mt-20 ">

        <div class="  flex md:flex-col w-full justify-center xl:gap-0 gap-44">
            <div class="left-side  flex  flex-col  my-auto">
                <div class="text-2xl text-center  text-gray-800 font-bold">
                
                    <?php if($about3): ?>
                    <h1><?php echo nl2br($about3);?></h1>
                    <?php endif;?>
                    
                </div>


                <div class="text-lg text-gray-500 my-9">
                    
                    <?php if($about4): ?>
                    <p><?php echo nl2br($about4);?></p>
                    <?php endif;?>
                </div>

                    <?php if($button): ?>
                    <a >
                        <button class="border rounded-lg px-9 py-1.5 text-center bg-green-500 text-white sm:mb-12" onclick="myFunction()"><?php echo $button;?></button>
                    </a>
                    <?php endif;?>
            </div>

            <div class=" img lg:ml-0 ml-32 md:mx-auto">

                <img class="object-scale-down md:h-72 md:w-72 lg:w-80 lg:h-80 " src="<?php echo $picture;?>">
            
            </div>
        </div> 
    </div>
</div>