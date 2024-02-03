<?php
// Enqueuing Template css,js,jquery
function dynamic_menu_enqueue()
{
    wp_enqueue_script( 'customjs', get_template_directory_uri() . '/components/home/assets/home.js', array(), '1.0.0', true);
    wp_enqueue_script( 'endGamejs', get_template_directory_uri() . '/assets/js/end-game.js', array(), '1.0.0', true);
    wp_enqueue_script( 'customScript', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js');
    wp_enqueue_script( 'endGamejs', get_template_directory_uri() . '/assets/js/responsive-header.js', array(), '1.0.0', true);
    wp_enqueue_script( 'aboutjs', get_template_directory_uri() . '/components/About-us/assets/about.js', array(), '1.0.0', true);
    wp_enqueue_style('menustyle', get_template_directory_uri() . '/assets/css/menu.css', array(), '1.0.0', 'all');
    wp_enqueue_style('comment style ', get_template_directory_uri() . '/assets/css/comment-style.css', array(), '1.0.0', 'all');
    wp_enqueue_style('custom style ', get_template_directory_uri() . '/assets/css/custom.css', array(), '1.0.0', 'all');
}

add_action('wp_enqueue_scripts', 'dynamic_menu_enqueue');

    

//Theme Support
add_theme_support('post-thumbnails');


//Custom Menus
function menu_setup(){
    add_theme_support('menus');
    register_nav_menu('primary', 'Primary Header Navigation');
    register_nav_menu('secondary', 'Footer Navigation');
    register_nav_menu('social media','Social Media Menu');
    
}
add_action('init', 'menu_setup');

function font_awesome_cdn(){
    wp_register_style('fontawesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css');
    wp_enqueue_style('fontawesome');
}

add_action('wp_print_styles', 'font_awesome_cdn');
function themename_custom_logo_setup() {
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array( 'site-title', 'site-description' ),
        'link-homepage-logo' => true, 
    );
    add_theme_support( 'custom-logo', $defaults );
}
add_action( 'after_setup_theme', 'themename_custom_logo_setup' );



//Tailwind CSS
add_action( 'wp_enqueue_scripts', 'enqueue_function', 10 );
function enqueue_function() {
	$version = ( wp_get_environment_type() === 'development' ) ? time() : define( 'BIIIRD_THEME_VERSION', '1.0.2' );
	wp_enqueue_style( 'tailwind', get_template_directory_uri() . '/assets/css/main.css', $version, true );
}




//Load More Function
function my_action_javascript() { ?>

    <script type="text/javascript" >
        jQuery(document).ready(function($){
            
            var page  = 2;
            var page1 = 2;
            var page2 = 2;
            var page3 = 2;
            var page4 = 2;
            var page5 = 2; 
            var page6 = 2;
            var page7 = 2;
            var page8 = 2;
            var page9 = 2;
            var page10 = 2;
            var page11 = 2;


            var ajaxurl ="<?php echo admin_url('admin-ajax.php'); ?>";
            
            var btns = document.querySelectorAll(".findMore");

            btns.forEach(btn => {
                btn.addEventListener('click', () => {
                var sibling = btn.previousElementSibling; 

                var count = sibling.dataset.count;

                var category = sibling.dataset.label;
                
                if(category=='Java Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page1,
                    };
                }else if(category=='It Technichian'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page2,
                    };

                }else if(category=='Software Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page3,
                    };

                }else if(category=='PHP developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page4,
                    };

                }else if(category=='Front End Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page5,
                    };
                }else if(category=='Python Developer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page6,
                    };
                }else if(category=='Graphic Designer'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page7,
                    };
                }else if(category=='Front End Development'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page8,
                    };
                }else if(category=='Back End Development'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page9,
                    };
                }else if(category=='Full Stack Development'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page10,
                    };
                }else if(category=='Company'){
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page11,
                    };
                }else{
                    var data = {
                        'action': 'my_action',
                        'cat': category,
                        'page': page,
                    };
                }
                
                

                jQuery.post(ajaxurl , data , function(response) {
                    jQuery(sibling).append(response);

                    if(category =='Java Developer'){
                        page1++;
                        if(count == page1){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };
                        
                    }else if(category == 'It Technichian'){
                        page2++;
                        if(count == page2){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };

                    }else if(category == 'Software Developer'){
                        page3++;
                        if(count == page3){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };

                    }else if(category == 'PHP developer'){
                        page4++;
                        if(count == page4){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };

                    }else if(category == 'Front End Developer'){
                        page5++;
                        if(count == page5){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };

                    }else if(category == 'Python Developer'){
                        page6++;
                        if(count == page6){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };

                    }else if(category == 'Graphic Designer'){
                        page7++;
                        if(count == page7){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };
                    }else if(category == 'Graphic Designer'){
                        page7++;
                        if(count == page7){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };
                    }else if(category == 'Front End Development'){
                        page8++;
                        if(count == page8){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };
                    }else if(category == 'Back End Development'){
                        page9++;
                        if(count == page9){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };
                    }else if(category == 'Full Stack Development'){
                        page10++;
                        if(count == page10){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };
                    }else if(category == 'Company'){
                        page11++;
                        if(count == page11){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };
                    }
                    else {
                        if(count == page){
                            $(btn).text("No more data");
                            $(btn).removeClass("border-customGreen");
                            $(btn).addClass("border-red-600");
                        };
                        page++;
                    }
                    
                }); 
                });
            });

        });

    </script><?php
}
add_action('wp_footer', 'my_action_javascript');


function my_action(){
    global $wpdb;
    

        $cat = $_POST['cat'];

        if($cat == 'Java Developer'){
            $args1 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 
            $the_query1 = new WP_Query( $args1); 
            ?>
            <?php if( $the_query1->have_posts() ): ?>

            <?php while ( $the_query1->have_posts() ) : $the_query1->the_post(); ?> 

                <?php get_template_part('/components/find-talents/developers/java','developer');?>


            <?php endwhile; ?>

                <?php wp_reset_postdata(); ?>

            <?php endif;
        }else if($cat == 'It Technichian'){
            $args2 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 
            
            $the_query2 = new WP_Query( $args2); ?>
            
            <?php if( $the_query2->have_posts() ): ?>
    
            <?php while ( $the_query2->have_posts() ) : $the_query2->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/it/it','technician');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Software Developer'){
            $args3 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query3 = new WP_Query( $args3); ?>
            
            <?php if( $the_query3->have_posts() ): ?>
    
            <?php while ( $the_query3->have_posts() ) : $the_query3->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/software-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'PHP developer'){
            $args4 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query4 = new WP_Query( $args4); ?>
            
            <?php if( $the_query4->have_posts() ): ?>
    
            <?php while ( $the_query4->have_posts() ) : $the_query4->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/php-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Front End Developer'){
            $args5 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query5 = new WP_Query( $args5); ?>
            
            <?php if( $the_query5->have_posts() ): ?>
    
            <?php while ( $the_query5->have_posts() ) : $the_query5->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/front-end-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Python Developer'){
            $args6 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query6 = new WP_Query( $args6); ?>
            
            <?php if( $the_query6->have_posts() ): ?>
    
            <?php while ( $the_query6->have_posts() ) : $the_query6->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/developers/python-developer');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Graphic Designer'){
            $args7 =array(
                'post_type' => 'post',
                'category_name' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query7 = new WP_Query( $args7 ); ?>
            
            <?php if( $the_query7->have_posts() ): ?>
    
            <?php while ( $the_query7->have_posts() ) : $the_query7->the_post(); ?> 
    
                <?php get_template_part('./components/find-talents/designers/graphic','designers');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Front End Development'){
            $args8 =array(
                'post_type' => 'company',
                'categories' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query8 = new WP_Query( $args8 ); ?>
            
            <?php if( $the_query8->have_posts() ): ?>
    
            <?php while ( $the_query8->have_posts() ) : $the_query8->the_post(); ?> 
    
                <?php get_template_part('/components/find-jobs/jobs-card/front','development');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Back End Development'){
            $args9 =array(
                'post_type' => 'company',
                'categories' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query9 = new WP_Query( $args9 ); ?>
            
            <?php if( $the_query9->have_posts() ): ?>
    
            <?php while ( $the_query9->have_posts() ) : $the_query9->the_post(); ?> 
    
                <?php get_template_part('/components/find-jobs/jobs-card/back','development');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Full Stack Development'){
            $args10 =array(
                'post_type' => 'company',
                'categories' =>$_POST['cat'],
                'paged' => $_POST['page'],
            ); 

            $the_query10 = new WP_Query( $args10 ); ?>
            
            <?php if( $the_query10->have_posts() ): ?>
    
            <?php while ( $the_query10->have_posts() ) : $the_query10->the_post(); ?> 
    
                <?php get_template_part('/components/find-jobs/jobs-card/full','development');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }else if($cat == 'Company'){
            $args11 =array(
                'post_type' => 'company',
                // 'categories' =>$_POST['cat'],
                'paged' => $_POST['page']+1,
            ); 

            $the_query11 = new WP_Query( $args11 ); ?>
            
            <?php if( $the_query11->have_posts() ): ?>
    
            <?php while ( $the_query11->have_posts() ) : $the_query11->the_post(); ?> 
    
                <?php get_template_part('/components/find-jobs/jobs-card/full','development');?>
                
            <?php endwhile; ?>
    
                <?php wp_reset_postdata(); ?>
    
            <?php endif;
        }
        else{   
                
                $posts = $wpdb->prepare("SELECT *, AVG(rate.rateIndex) AS rate FROM wp_posts
                LEFT JOIN 
                ratingSystem.rate
                ON wp_posts.ID = rate.cardID
                WHERE wp_posts.post_type = 'post'
                AND wp_posts.post_status = 'publish' 
                GROUP BY wp_posts.ID 
                ORDER BY rate DESC
                ");
                $page = $_POST['page']*4;
                if(isset($page)){
                $posting = $wpdb->get_results( $posts . "LIMIT 4 OFFSET {$page}", ARRAY_A);
            }

                
                if( $posting ) :

                    // run the loop
                    foreach( $posting as $post):
                        
                        if(isset($post)){
                        // look into your theme code how the posts are inserted, but you can use your own HTML of course
                        // do you remember? - my example is adapted for Twenty Seventeen theme
                        var_dump($post);
                        get_template_part('/components/home/card_users/user' , 'cards');
                        // for the test purposes comment the line above and uncomment the below one
                        // the_title();

                    }
                    endforeach;
             
                endif;?>
                <?php $wpdb->print_error();?>
                <?php $wpdb->flush();?>
            
            <?php wp_reset_postdata();
            
        }
    wp_die();
}

add_action('wp_ajax_nopriv_my_action', 'my_action');
add_action('wp_ajax_my_action', 'my_action'); 


add_role(
    'freelancer', //  Emri i Rolit
    __( 'Freelancer'  ), 
    array(
        'read'  => true,
        'delete_posts'  => true,
        'delete_published_posts' => true,
        'edit_posts'   => false,
        'publish_posts' => true ,
        'edit_published_posts'   => true,
        'upload_files'  => false,
        'moderate_comments'=> true, // 
    )


);



function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }?>
    <<?php echo $tag; ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ); ?> id="comment-<?php comment_ID() ?>"><?php 
    if ( 'div' != $args['style'] ) { ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body"><?php
    } ?>

        <div class="comment-author vcard"><?php 
            if ( $args['avatar_size'] != 0 ) {
                echo get_avatar( $comment, $args['avatar_size'] ); 
            } 
            printf( __( '<cite class="fn">%s</cite> <span class="says">says:</span>' ), get_comment_author_link() ); ?>
        </div><?php 
        if ( $comment->comment_approved == '0' ) { ?>
            <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em><br/><?php 
        } ?>

        <div class="comment-meta commentmetadata">
            <a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>"><?php
                printf( 
                    __('On %1$s at %2$s'), 
                    get_comment_date(),  
                    get_comment_time() 
                ); ?>
            </a><?php 
            edit_comment_link( __( 'Edit' ), '  ', '' ); ?>
        </div>
        <?php comment_text(); ?>
        <div class="reply">
            <?php comment_reply_link( array_merge($args, array(
    'reply_text' => __('Reply <span>&darr;</span>', 'textdomain'),
    'depth'      => $depth,
    'max_depth'  => $args['max_depth']
    )
)); ?>
        </div><?php 
    if ( 'div' != $args['style'] ) : ?>
        </div><?php 
    endif;
}

if (function_exists('register_sidebar')) {
    register_sidebar(array(
        'name' => 'Footer Left Center',
        'id'   => 'footer-left-center-widget',
        'description'   => 'Left Center Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right Center',
        'id'   => 'footer-center-widget',
        'description'   => 'Centre Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));

    register_sidebar(array(
        'name' => 'Footer Right',
        'id'   => 'footer-right-widget',
        'description'   => 'Right Footer widget position.',
        'before_widget' => '<div id="%1$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>'
    ));


}

function connect_another_db() {

    global $conn;
    $conn = new mysqli('localhost', 'root', '', 'ratingSystem');
}
add_action('init', 'connect_another_db');
//Rating System DB

// function prepare_WPDB() {
//     global $wpdb;
//     $posts = $wpdb->prepare("SELECT *, AVG(rate.rateIndex) AS rate FROM wp_posts
//                 LEFT JOIN 
//                 ratingSystem.rate
//                 ON wp_posts.ID = rate.cardID
//                 WHERE wp_posts.post_type = 'post'
//                 AND wp_posts.post_status = 'publish' 
//                 GROUP BY wp_posts.ID 
//                 ORDER BY rate DESC
//                 ");
//         $posting = $wpdb->get_results( $posts . "LIMIT 4");
//     return $posting;

// }


function categories_custom_taxonomies() {
	
	$labels = array(
		'name' => 'Categories',
		'singular_name' => 'Category',
		'search_items' => 'Search Categories',
		'all_items' => 'All Categories',
		'parent_item' => 'Parent Category',
		'parent_item_colon' => 'Parent Category:',
		'edit_item' => 'Edit Category',
		'update_item' => 'Update Category',
		'add_new_item' => 'Add New Category',
		'new_item_name' => 'New Category Name',
		'menu_name' => 'Categories'
	);
	
	$args = array(
		'hierarchical' => true,
		'labels' => $labels,
		'show_ui' => true,
		'show_admin_column' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => 'categories' ),
        'capability_type'=>'company',
        'capabilities' => array (
            'manage_terms' => 'edit_categories', 
            'edit_terms' => 'edit_categories',
            'delete_terms' => 'edit_categories',
            'assign_terms' => 'edit_companies'  
            )
	);
	
	register_taxonomy('categories', array('company'), $args);
	
	
}

add_action( 'init' , 'categories_custom_taxonomies' );


add_action( 'init', 'register_cpt_company' );

function register_cpt_company() {
$labels = array( 
    'name' => 'Companies',
    'singular_name' => 'Company',
    'add_new' => 'Add New',
    'add_new_item' => 'Add New Company',
    'edit_item' => 'Edit Company',
    'new_item' => 'New Company',
    'view_item' => 'View Company',
    'search_items' => 'Search Companies',
    'not_found' => 'No Companies found',
    'not_found_in_trash' => 'No Companies found in Trash',
    'parent_item_colon' => 'Parent Company:',
    'menu_name' => 'Companies',
);

$args = array( 
    'labels' => $labels,
    'hierarchical' => true,
    'supports' => array('title','editor','comments'),
    'public' => true,
    'show_ui' => true,
    'show_in_menu' => true,
    'menu_icon'=> 'dashicons-building',
    'show_in_nav_menus' => true,
    'publicly_queryable' => true,
    'exclude_from_search' => false,
    'has_archive' => true,
    'query_var' => true,
    'can_export' => true,
    'rewrite' => true,
    'capabilities' => array(
        'edit_post' => 'edit_company',
        'edit_posts' => 'edit_companies',
        'edit_published_posts'  => 'edit_published_companies',
        'edit_others_posts' => 'edit_other_companies',
        'publish_posts' => 'publish_companies',
        'read_post' => 'read_company',
        'read_private_posts' => 'read_private_companies',
        'delete_posts' => 'delete_company',
    ),
    'taxonomies'=>array('post_tag','categories'),
    'map_meta_cap' => true
);

register_post_type( 'company', $args );
}

add_action('init', function() {

    add_role('company', 'Company');

    $company = get_role('company');
    $company->add_cap( 'read' );
    $company->add_cap( 'edit_company' ); 
    $company->add_cap( 'edit_other_companies' ); 
    $company->add_cap( 'edit_published_companies' ); 
    $company->add_cap( 'publish_companies' ); 
    $company->add_cap( 'read_company' ); 
    $company->add_cap( 'read_private_companies' ); 
    $company->add_cap( 'delete_company' ); 

});

function Query(){
    global $wpdb;
        $wpdb->show_errors();
        // Write our custom query. In this query, we're only selecting the post_id field of each row that matches our set of
        // conditions. Note the %s placeholders – these are dynamic and indicate that we'll be injecting strings in their place.
        $posts = $wpdb->prepare("SELECT *, AVG(rate.rateIndex) AS rate FROM wp_posts
                LEFT JOIN 
                ratingSystem.rate
                ON wp_posts.ID = rate.cardID
                WHERE wp_posts.post_type = 'post'
                AND wp_posts.post_status = 'publish' 
                GROUP BY wp_posts.ID 
                ORDER BY rate DESC
                ");
        return $posts;
}