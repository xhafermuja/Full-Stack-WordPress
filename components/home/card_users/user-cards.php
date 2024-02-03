<?php
global $conn;


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
};
if (isset($_POST['save'])) {
    $uID = $conn->real_escape_string($_POST['uID']);
    $cardID = $conn->real_escape_string($_POST['cardID']);
    $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
    $ratedIndex++;

    if (!$uID) {
        $conn->query("INSERT INTO rate (cardID,rateIndex) VALUES ('$cardID','$ratedIndex')");
        $sql = $conn->query("SELECT id FROM rate ORDER BY id DESC LIMIT 1");
        $uData = $sql->fetch_assoc();
        $uID = $uData['id'];
    } else
        $conn->query("UPDATE rate SET cardID='$cardID', ratedIndex='$ratedIndex' WHERE id='$uID'");
        // $conn->query("REPLACE INTO rate (uID,cardID,ratedIndex) VALUES('$uId','$cardID','$ratedIndex')"); // Nese e ka te pakten nje vlere te njejte (unique) ME ROW E INSERTUM PARAPRAK SHKON E FSHIN ATA E INSERTON TE RIUN
        // echo "Already Voted!"; //mos me lon me bo update
    exit(json_encode(array('id' => $uID)));
}
// $user = get_current_user_id();
// if ( is_user_logged_in() ) {
//     echo 'User ID: ' . get_current_user_id();
// } else {
//     echo 'Your not logged in!';
// }
$ud = $user->id;

?>
<div class="user-card bg-white rounded-3xl shadow shadow-black-900">
    <div class="user-thumbnail">
        <?php the_post_thumbnail('large'); ?>
    </div>
        <?php  if(have_rows('profile')):?>
            <?php while( have_rows('profile')): the_row(); 
                $image = get_sub_field('image');
                ?>

            <?php endwhile;?>
        <?php endif;?>
    <div class="user p-2 ">
        <div class="user-info flex mb-2 items-center">
            <div class="img pr-5 ">

                <img src="<?php echo $image['url'];?>" class="2xl:w-14 2xl:h-14 w-10 h-10 rounded-full" />

            </div>
            <div class="user-name text-basic font-semibold">
                <?php the_title(); ?>
            </div>
        </div>

        <div class="user-content text-basic mb-5 h-12">
            <?php echo wp_trim_words( get_the_content(), 5); ?>
        </div>

<!-- RATING -->
<?php
$user = wp_get_current_user();

?>    
    
    <div class="rate flex">
        <div style="color:black;" data-index="<?php the_id();?>" data-user="<?php echo $user->id;?>">

            <i class="fa-solid fa-star" id="star" data-index="0"></i>
            <i class="fa-solid fa-star" id="star" data-index="1"></i>
            <i class="fa-solid fa-star" id="star" data-index="2"></i>
            <i class="fa-solid fa-star" id="star" data-index="3"></i>
            <i class="fa-solid fa-star" id="star" data-index="4"></i>
        </div>
           
            <div class="rate font-semibold ml-4">       
                (<?php echo round($post->rate,2); ?>)
            </div>
    </div>

<!-- RATING -->

        <button type="button" class="flex w-full text-white text-xs justify-end p-1">
            <?php $link = get_permalink();  ?>
            <p class="bg-green-700 hover:bg-green-800  rounded-full px-4 py-2 text-center"><?php print '<a href="'.$link.'">More Info ...</a>' ?></p>  
        </button>
                
    </div>
</div>


