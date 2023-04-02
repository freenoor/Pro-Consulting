<!-- 
    Template Name: Home
 -->
<?php get_header(); ?>

<?php if(is_front_page()):?>
    <section class="page-header page-header-home">
        <div class="swiper-container99">
            <div class="swiper-wrapper ">
                <?php
                $custom_query = new WP_Query( array( 
                'post_type' => 'sliderhome',
                'posts_per_page' => '-1', 
                'orderby' => 'menu_order',
                'order' => 'ASC',
                ));
                while($custom_query->have_posts()) : $custom_query->the_post(); 
                ?>
                <div class="swiper-slide">
                    <img src="<?php the_post_thumbnail_url();?>" alt="">
                </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); 
                ?>
            </div>
        </div>
            <div class="container">
                <div class="content">
                    <h2><?php the_field('home_title');?></h2>
                    <?php the_field('home_desc');?>
                    <div class="anchor">
                </div>
                </div>
            </div>
            <!-- <svg class="nectar-shape-divider" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">  
                <path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path>   <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>  
                <path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>  
                <path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>  
                <path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path>
            </svg> -->
    </section>
<?php endif;?>
<section class="home-about">
    <div class="titlediv-wrapp" >
        <div class="container-fluid p-0">
            <section class="title-intro" id="services">
                <div class="title-in">             
                <h1><?php the_field('homeintro1');?></h1>
                <p><?php the_field('home_aboutus_title');?></p>
                </div>
            </section>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
                <div class="col-lg-6 col-md-6 uberimage">
                    <div class="imageuber">
                        <img src="<?php the_field('home_about_image');?>" alt="">
                    </div>
                </div>
            <div class="col-lg-6 col-md-6 right">
                
                <div class="single-post">
                    <p><?php the_field('abouttext');?></p>
                </div>
                
                <div id="buttonanchor" class="justboutus">
                   <a href="<?php the_field('aboutus_more');?>"><?php the_field('readmore');?></a>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="services-section">
    <div class="titlediv-wrapp">
        <div class="container-fluid p-0">
            <section class="title-intro">
                <div class="title-in">             
                <h1><?php the_field('homeintro2');?></h1>
                <p><?php the_field('services_title');?></p>
                </div>
            </section>
        </div>
    </div>
<div class="container-fluid">
    <div class="swiper-container2">
        <div class="swiper-wrapper ">
        <?php
        $custom_query = new WP_Query( array( 
        'post_type' => 'services',
        'posts_per_page' => '-1', 
        'orderby' => 'menu_order',
        'order' => 'DESC',
		));
        while($custom_query->have_posts()) : $custom_query->the_post(); 
        ?>
        <div class="swiper-slide">
                <div class="service-wrap">
                    <a href="<?php the_permalink();?>">
                    <div class="single-post text-center">
                        <div class="entry-summary">
                            <div class="svg">
                                <?php the_field('svg');?>
                            </div>
                                <h2><?php the_title();?></h2>
                                <?php the_content();?>
                        </div>
                    </div>
                    </a>
                </div>
        </div>
        <?php endwhile; ?>
        <?php wp_reset_postdata(); ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
    <div id="buttonanchor" class="jstserv" style="text-align: center; margin-top: 60px">
    <a href="<?php the_field('all_servicesbutton');?>"><?php the_field('seeall');?></a>
    </div>
</div>
</section>
<section class="betweenquote">
        <svg class="nectar-shape-divider nectar-shape-divider-between-top" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">  
            <path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path>   <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>  
            <path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>  
            <path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>  
            <path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path> 
        </svg>
<div class="container-fluid">
    <h1><?php the_field('betweenquote');?></h1>
</div>
        <svg class="nectar-shape-divider nectar-shape-divider-between-bottom" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">  
            <path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path>   <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>  
            <path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>  
            <path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>  
            <path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path> 
        </svg>
</section>
<section class="contact-forma">
    <div class="titlediv-wrapp">
        <div class="container-fluid p-0">
            <section class="title-intro" id="services">
                <div class="title-in">             
                    <h1><?php the_field('homeintro3');?></h1>
                    <p><?php the_field('contact_subtitle');?></p>
                </div>
            </section>
        </div>
    </div>
    <div class="container" data-aos="zoom-in">
        <?php dynamic_sidebar('contactform');?>
    </div>
</section>
<?php if ( get_field( 'disablesection' ) ): ?>
<?php else: ?>
    <section class="happy-clients">
    <div class="titlediv-wrapp noclr">
        <div class="container-fluid p-0">
            <section class="title-intro" id="services">
                <div class="title-in">             
                <h1><?php the_field('homeintro4');?></h1>
                <p><?php the_field('clients_sub');?></p>
                </div>
            </section>
        </div>
    </div>
    <section class="spacer">
        <div class="container">
        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="50px" height="50px" viewBox="0 0 508.044 508.044" style="enable-background:new 0 0 50 50;" xml:space="preserve">
                <path d="M0.108,352.536c0,66.794,54.144,120.938,120.937,120.938c66.794,0,120.938-54.144,120.938-120.938
                s-54.144-120.937-120.938-120.937c-13.727,0-26.867,2.393-39.168,6.61C109.093,82.118,230.814-18.543,117.979,64.303
                C-7.138,156.17-0.026,348.84,0.114,352.371C0.114,352.426,0.108,352.475,0.108,352.536z" />
                <path d="M266.169,352.536c0,66.794,54.144,120.938,120.938,120.938s120.938-54.144,120.938-120.938S453.9,231.599,387.106,231.599
                c-13.728,0-26.867,2.393-39.168,6.61C375.154,82.118,496.875-18.543,384.04,64.303C258.923,156.17,266.034,348.84,266.175,352.371
                C266.175,352.426,266.169,352.475,266.169,352.536z" />
        </svg>
        <div class="testimonial-section">
            <div class="user-saying">
                <div class="swiper-container4">
                    <div class="swiper-wrapper ">
                        <?php
                            $args = array(
                            'post_type' => 'testimonials',
                            'posts_per_page' => '-1',
                            );
                            $loop = new WP_Query($args);
                            while($loop->have_posts()):
                            $loop->the_post();
                        ?>
                        <div class="swiper-slide">
                            <div class="quote">
                                <p><?php the_content(); ?></p>
                                <div class="name"><h5><?php the_title(); ?></h5></div>
                                <div class="designation"><h4><?php the_excerpt(); ?></h4></div>
                            </div>
                        </div>
                        <?php
                            endwhile;
                            wp_reset_postdata();
                        ?>
                    </div>
                    <div class="swiper-pagination swiper-pagination-white"></div>
                </div>
            </div>

            <div class="testi-user-img">
                <div class="swiper-container3">
                    <div class="swiper-wrapper">
                        <?php
                        $args = array(
                        'post_type' => 'testimonials',
                        'posts_per_page' => '-1',
                        );
                        $loop = new WP_Query($args);
                        while($loop->have_posts()):
                        $loop->the_post();
                        ?>
                        <div class="swiper-slide">
                            <div class="operations_item">
                                <?php the_post_thumbnail();?>
                            </div>
                        </div>
                        <?php
                        endwhile;
                        wp_reset_postdata();
                        ?>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
</section>
<?php endif; ?>
<?php get_footer();?>