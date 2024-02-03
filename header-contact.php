<?php ob_start();?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head >

<body <?php body_class(array('container')); ?>>
<header class="header">
    <div class="container">
        <nav class="topnav" id="topnav">
            <div class="header-logo">
            <?php
                if ( function_exists( 'the_custom_logo' ) ) {
                the_custom_logo();
                }
            ?>
            </div>
            <div class="menu-container">
                <?php wp_nav_menu(array('theme_location'=>'primary')); ?>  
                <div class="register-login-btn">
                    <button class="loginBtn" id="login-btn"><a  class="login">Log In</a></button>
                    <button class="registerBtn" id="register-btn"> <a  class="register">Register</a></button>
                </div>
            </div>
            <div class="navbar-toggler">
                <button class="icon" onclick="toggle()"><i class="fa fa-bars"></i></button>
            </div>
        </nav>
        <div class="banner">
            <!-- <div class="search-talents">
                <h2 class="search-title">Search for best <i class="font-courgette">services</i></h2>
                <form class="search-box"  method="get" action="http://localhost/wordpress">
                    <input type="text" class="input-search" placeholder="Search for new talents..." name="s" value="">
                    
                    <button class="searchBtn" type="submit" value="Search Our Site...">Search</button>
                </form>
            </div>
            <div class="img-banner">
                <img class="bannerImg" src="<?php echo get_template_directory_uri(); ?>./assets/img/HeaderImages/Group 11.png">
            </div> -->
            <h1 class="text-7xl text-white mx-auto my-20">Contact Us</h1>
        </div>
    </div>
</header>

    <!--LOGIN MODAL  -->
    <?php 


if(isset($_POST['submit'])) {

    $redirect_to = ! empty ($_POST['redirect_to']) ? $_POST['redirect_go'] : '/';
    $user_login = sanitize_user($_POST['username']);
    $user_password = sanitize_text_field($_POST['password']);


    $user = wp_authenticate( $user_login, $user_password );

    if (!is_wp_error($user)) {
      wp_set_auth_cookie($user->data->ID);
      wp_safe_redirect(site_url());
      exit();
    } else {
    }
  }

  ?>


<div class="font-sans bg-black bg-opacity-50 fixed inset-0 hidden p-20" id="overlay-login">

    <div class="md:flex-col-reverse login-modal bg-white rounded-xl shadow-black shadow-lg  w-full flex flex-row">

        <div class="left-side sm:p-5  md:h-2/4 md:p-10 h-full w-full p-32 px-42 xl:px-20">
            <div class="left-side-top ">
                    <h1 class="font-semibold md:text-xl text-4xl">Login</h1>
                    <h1 class="pt-4 md:hidden text-lg ">How do i get started lorem ispum dolor at?</h1>
            </div>
            <div class="mid s md:mt-2 2xl:mt-16 ">
                <form method="POST" class="flex flex-col ">
                    <label for="email " class=" ">Email</label>
                    <input type="text" id="username" name="username" placeholder="example@example.com " class="sm:py-1 sm:px-1 rounded-3xl py-2 px-2 border border-black ">
                    <label for="password" class="sm:mt-0 xl:mt-5">Password</label>
                    <input type="password" id="password" name="password" placeholder="********"  class="sm:py-1 sm:px-1 rounded-3xl py-2 px-2 border border-black">
                    <small class="text-customGreen text-center mt-4">
                        <a href="#">Forgot Password?</a>
                    </small>
                    <button type="submit" name="submit" id="submit" class="sm:py-1 sm:px-1 md:mt-2 2xl:mt-16 bg-customGreen rounded-3xl py-3 px-2 text-white ">Login</button>
                </form>
            </div>

            <div class="bottom flex flex-col ">
                <small class="text-xsm pt-4">&copy 2022 EndGame All Right Reserved</small>
            </div>  
            
        </div>

        <div class="right-side bg-customGreen  md:h-2/4 md:p-10 lg:rounded-r-xl sm:rounded-t-xl md:rounded-t-xl xl:rounded-r-xl 2xl:rounded-r-xl   relative h-full w-full p-32 xl:px-20">
            <div class="right-side-icon bg-gradient-to-b from-[#e6e6e6]  shadow shadow-black rounded-xl relative h-full ">
                <div class="right-side-top p-5">
                    <h1 class="text-white font-semibold text-4xl sm:text-base md:text-xl lg:text-3xl">Very Good works are waiting for you Login Now</h1>
                 </div>   
                <div class="business ">
                    <img class="object-scale-down sm:h-32 md:h-52 xl:h-80 w-full h-96  "src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/businessman.png" alt="">
                </div>
                 <div class="100 absolute sm:-right-4 top-4 -right-6 ">
                    <img class="sm:h-10 sm:w-10 h-16 w-16 rounded-full bg-white " src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/100-emoji.png" alt="">
                </div>
                <div class="handshake absolute sm:-left-4 -left-8 bottom-24">
                    <img class="sm:h-10 sm:w-10 h-16 w-16 rounded-full bg-white" src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/hand-emoji.png" alt="">
                </div>
                
            </div>

            <button   class="close-btn absolute -right-1 -top-1 bg-white rounded-xl " id="close-lglogin">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7" viewBox="0 0 20 20" fill="currentColor">
                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                </svg> 
            </button>

        </div>
    </div>
</div>



    <!-- REGISTER MODAL -->
    <?php


global $wpdb;

if($_POST)  {
  $username = $wpdb->escape($_POST['username']);
  $email = $wpdb->escape($_POST['email']);
  $password = $wpdb->escape($_POST['password']);
  $user = $wpdb->escape($_POST['company']);
  $confirmpassword = $wpdb->escape($_POST['confirmpassword']);

  $erorr = array();

  if($user=='Company'){

$user_data = array(
'user_pass' => $password,
'user_login' => $username,
'user_email' => $email,
'role' => 'company',
);
$user_id = wp_insert_user( $user_data );
wp_hash_password( $password );
$new_userid = wp_insert_user( $user_id );

$is_success = wp_insert_user( $user_data );;
if( $is_success  ) {
    echo "<script> setTimeout(function(){
        window.location.href = 'http://localhost/wordpress';
     }, 200);
     alert('You are registered successfully as Company');
    </script>";
} else {
   echo 'Error on user creation';
}

  }else{
  // nese username ka hapsir
  if(strpos($username, ' ')!==FALSE) {
    $erorr['username_space'] =  "";
    
  }

   // nese username osht i zbrazt
  if(empty($username)) {
    $erorr['username_empty'] =  "";
  }

     // nese username egziston n databaz
if(username_exists( $username )) {
 
  $erorr['username_exists'] =  "";
 
  

}

    // nese email osht valid
if(!is_email($email)) {

  $erorr['email_valid'] =  "";

  
  
}

// nese egziston email n databaz
if(email_exists( $email )) {

  $erorr['email_exists'] =  "";

 
}

if(strcmp($password, $confirmpassword) !==0) {
  
  $erorr['password'] =  "";
 
  
} 
if(count($erorr) ==0) {
  wp_create_user( $username, $password, $email );
  echo "<script> setTimeout(function(){
    window.location.href = 'http://localhost/wordpress';
 }, 200);
 alert('you are registered successfully as Freelancer');
</script>";
  exit();
}
} 
}
?> 



    <div class="font-sans bg-black bg-opacity-50 fixed inset-0 hidden p-20" id="overlay-register">
        
        <div class="register-modal md:flex-col-reverse   bg-white rounded-xl shadow-black shadow-lg w-full flex flex-row ">

            <div class="left-side md:p-10 md:h-2/4 lg:px-20  h-full w-full p-32 px-32">

                <h1 class="font-semibold md:mt-0 md:text-base text-4xl 2xl:mt-4">Register</h1>
                <form method="POST"  class="flex flex-col md:mt-2 2xl:mt-8">
                    <label class="text-sm "for="name">Name</label>
                    <input type="text" id="username" name="username" placeholder="example " class="md:h-6 rounded-3xl py-2 px-2  border border-black  ">
                    <label class="text-sm "for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@example.com"  class="md:h-6 rounded-3xl py-2 px-2 border border-black ">
                    <label class="text-sm"for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="********" class="md:h-6 rounded-3xl py-2 px-2 border border-black ">
                    <label class="text-sm"for="email">Confirm Password</label>
                    <input type="password" id="confirmpassword" name="confirmpassword" placeholder="********"  class="md:h-6 rounded-3xl py-2 px-2 border border-black ">
                    <div class="class-company flex mt-2">
                        <label class="text-sm" for="company">Register as Company?</label>
                        <input type="checkbox" id="company" name="company" value="Company" class="">
                    </div>
                    <div class="bottom flex flex-col md:mt-4 lg:mt-8 xl:mt-8 2xl:mt-8 ">
                        <button type="submit" name="submit" id="submit" class="md:text-xsm md:h-10 bg-customGreen rounded-3xl py-3 px-2 text-white text-base ">Register</button>
                        <small class="text-xsm pt-4">&copy 2022 EndGame All Right Reserved</small>
                    </div>
                </form>
            </div>
            
            <div class="right-side md:p-10 md:h-2/4 lg:px-20 bg-customGreen sm:rounded-t-xl md:rounded-t-xl lg:rounded-r-xl xl:rounded-r-xl 2xl:rounded-r-xl relative w-full w-full p-32 px-32">
                <div class="right-side-icon bg-gradient-to-b from-[#e6e6e6]  shadow shadow-black h-full w-full rounded-xl p-5 relative ">
                    <div class="right-side-top">
                        <h1 class=" text-white lg:text-3xl font-semibold sm:text-base md:text-2xl text-4xl">Very Good works are waiting for you Register Now</h1>
                    </div>   
                    <div class="business ">
                        <img class="object-scale-down w-full sm:h-40 md:h-52 xl:h-80 h-96" src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/businessman.png" alt="">
                    </div>
                    <div class="100 absolute sm:-right-4 top-4 -right-6 ">
                        <img class="sm:h-10 sm:w-10 md:h-10 md:w-10 h-16 w-16 bg-white rounded-full" src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/100-emoji.png" alt="">
                    </div>
                    <div class="handshake sm:-left-4  absolute -left-8  bottom-24">
                        <img class="sm:h-10 sm:w-10 md:h-10 md:w-10 h-16 w-16 rounded-full bg-white " src="<?php echo get_template_directory_uri(); ?>./assets/img/ModalImages/hand-emoji.png" alt="">
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
<?php ob_flush();?>
