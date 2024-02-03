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
      echo "<p class='text-center italic font-extrabold text-lg text-black-600 w-full p-6 m-auto bg-red-800 border-t-4 border-red-500 border-b-4 border-red-500 rounded-md shadow-md border-top lg:max-w-md'>Username ose Password jane gabim!
       </p>";
    }
  }

       
        ?>




        <form method="post" id="form" name="form">
        <section id="login" class="h-auto bg-white rounded-xl ">
    <div class="login border border-black rounded-xl flex">
        <div class="left-side w-2/4 p-36">
            <div class="top pb-20">
                <h1 class="text-3xl font-semibold ">Login</h1>
                <h1 class="pt-4">How do i get started lorem ispum dolor at?</h1>
            </div>
            <div class="mid">
                <form action="#" class="flex flex-col">
                    <label for="email">Email</label>
                    <input type="text" id="username" name="username" placeholder="example@example.com " class="rounded-3xl py-2 px-2 border border-black">
                    <br>
                    <label for="password" class="font-bold">Password</label>
                    <input type="password" id="password" name="password" placeholder="********"  class="rounded-3xl py-2 px-2 border border-black">
                    <small class="text-customGreen text-center">
                        <a href="#">Forgot Password?</a>
                    </small>
                </form>
            </div>

            <div class="bottom flex flex-col pt-20">
            <button type="submit" name="submit" id="submit"class="bg-customGreen rounded-3xl py-3 px-2 text-white text-sm">Login</button>
                    <small class="text-xsm pt-4">&copy 2022 EndGame All Right Reserved</small>
            </div>
        </div>
        <div class="right-side bg-customGreen w-2/4 p-36 rounded-r-xl">
            <div class="right-side-icon bg-gradient-to-b from-[#e6e6e6]  shadow shadow-black h-full w-full rounded-xl p-14 relative">
                <div class="right-side-top">
                    <h1 class="text-3xl text-white font-semibold">Very Good works are waiting for you Login Now</h1>
                </div>   
                <div class="business">
                    <img src="<?php echo get_template_directory_uri(); ?>./components/icons/businessman.png" alt="">
                </div>
                <div class="100 absolute top-32 -right-8 bg-white rounded-full">
                    <img class="object-scale-down h-16" src="<?php echo get_template_directory_uri(); ?>./components/icons/100-emoji.png" alt="">
                </div>
                <div class="handshake absolute -left-8 bottom-24">
                    <img class="h-16 rounded-full bg-white " src="<?php echo get_template_directory_uri(); ?>./components/icons/hand-emoji.png" alt="">
                </div>
            
            </div>
           
        </div>

    </div>
</section>
</form>
   