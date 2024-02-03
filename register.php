<?php

/* Template Name: Custom Register Page */

get_header(); 
?>
<?

global $wpdb;


if($_POST)  {
  $username = $wpdb->escape($_POST['username']);
  $email = $wpdb->escape($_POST['email']);
  $password = $wpdb->escape($_POST['password']);
  $confirmpassword = $wpdb->escape($_POST['confirmpassword']);

  $erorr = array();

  // nese username ka hapsir
  if(strpos($username, ' ')!==FALSE) {
    $erorr['username_space'] =  "";
    
  }

   // nese username osht i zbrazt
  if(empty($username)) {
    $erorr['username_empty'] =  "";
    echo "<p class='text-center italic font-extrabold text-sm text-black-600 w-full p-2 m-auto bg-red-600 border-t-4 border-red-500  rounded-md shadow-md border-top lg:max-w-md'>Empty space
    </p>";
  
  }

     // nese username egziston n databaz
if(username_exists( $username )) {
 
  $erorr['username_exists'] =  "";
 
  echo "<p class='text-center italic font-extrabold text-sm text-black-600 w-full p-2 m-auto bg-red-600 border-t-4 border-red-500 rounded-md shadow-md border-top lg:max-w-md'>This username exists
  </p>";

}

    // nese email osht valid
if(!is_email($email)) {

  $erorr['email_valid'] =  "";

  echo "<p class='text-center italic font-extrabold text-sm text-black-600 w-full p-2 m-auto bg-red-600 rounded-md shadow-md border-top lg:max-w-md'>Invalid Email
  </p>";
  
}

// nese egziston email n databaz
if(email_exists( $email )) {

  $erorr['email_exists'] =  "";

  echo "<p class='text-center italic font-extrabold text-sm text-black-600 w-full p-2 m-auto bg-red-600 rounded-md shadow-md border-top lg:max-w-md'>This email already exists
  </p>";
}

if(strcmp($password, $confirmpassword) !==0) {
  
  $erorr['password'] =  "";

  echo "<p class='text-center italic font-extrabold text-sm text-black-600 w-full p-2 m-auto bg-red-600 rounded-md shadow-md border-top lg:max-w-md'>Passwords do not match
  </p>";
} 
if(count($erorr) ==0) {
  wp_create_user( $username, $password, $email );
  echo "You have successfully registered.";
  exit();
}
} 
?>

<div class="container bg-bg p-20">

<form method="post">
    <div class="bg-black bg-opacity-50 fixed inset-0 hidden justify-center items-center" id="overlay-register">
        
        <div class="login-modal h-5/6 bg-white w-5/6 rounded-xl flex shadow-black shadow-lg">
            <div class="left-side w-2/4 p-24">
                <h1 class="text-2xl">Register</h1>
                <form action="#" class="flex flex-col pt-2">
                    <label class="text-sm"for="name">Name</label>
                    <input type="text" id="username" name="username" placeholder="example " class="rounded-3xl px-2 py-1  border border-black">
                    <label class="text-sm"for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com"  class="rounded-3xl px-2 py-1 border border-black">
                    <label class="text-sm"for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" class="rounded-3xl px-2 py-1 border border-black">
                    <label class="text-sm"for="email">Confirm Password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="********"  class="rounded-3xl px-2 py-1 border border-black">
                    
                </form>
                
                <div class="bottom flex flex-col pt-8">
                <button type="submit" name="submit" id="submit" class="bg-customGreen rounded-3xl py-3 px-2 text-white text-sm">Register</button>
                        <small class="text-xsm pt-4">&copy 2022 EndGame All Right Reserved</small>
                </div>
                    
            </div>
            <div class="right-side w-2/4 bg-customGreen rounded-r-xl p-24 relative">
                <div class="right-side-icon bg-gradient-to-b from-[#e6e6e6]  shadow shadow-black h-full w-full rounded-xl p-14 relative">
                    <div class="right-side-top">
                        <h1 class="text-3xl text-white font-semibold">Very Good works are waiting for you Register Now</h1>
                    </div>   
                    <div class="business ">
                        <img class="object-scale-down h-52 w-96"src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/businessman.png" alt="">
                    </div>
                    <div class="100 absolute top-32 -right-8 bg-white rounded-full">
                        <img class="object-scale-down h-16" src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/100-emoji.png" alt="">
                    </div>
                    <div class="handshake absolute -left-8 bottom-24">
                        <img class="h-16 rounded-full bg-white " src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/hand-emoji.png" alt="">
                    </div>
                
                </div>

                <button class="close-btn absolute -right-1 -top-1 bg-white rounded-xl " id="close-lgregister">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                    </svg> 
                </button>
            
            </div>

        </div>
      
    </div>
    </div>

<?php get_footer(); ?>