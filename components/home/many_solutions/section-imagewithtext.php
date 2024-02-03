<?php 
$image = get_sub_field('image');
$text = get_sub_field('text');
$picture = $image['sizes']['large'];
$jobs = get_sub_field('jobs');
?>

<button class="2xl:py-12 bg-white xl:py-8 lg:py-8 md:py-8 sm:py-8 rounded-lg hover:bg-customGreen hover:text-white shadow shadow-black-900 transition duration-300 ">
    <div id="services-card" class="flex text-left ">
        <div id="services-card-img " class="mx-5 ">                      
            <img class="object-scale-down h-14 pr-2" src="<?php echo $picture;?>">
         </div>
         <div class="services-card-solution ">
            <div class="txt ">
                <?php echo $text;?>
            </div>
            <div class="avaliable pt-2 text-sm">
                <small class=""><?php echo $jobs;?> Jobs Avaiable</small>
            </div>
        </div>
    </div>
</button>
