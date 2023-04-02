<!-- 
    Template Name: About us Template
 -->
<?php get_header();?>
<section class="page-header" style="background-image:url('<?php the_field('about_bg');?>')">
    <div class="container">
        <div class="content">
            <h2><?php the_title();?></h2>
                <!-- <?php the_post();?> -->
<!--             <p><?php the_content();?></p> -->
        </div>
    </div>
    <!-- <svg class="nectar-shape-divider" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">  
        <path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path>   <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>  
        <path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>  
        <path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>  
        <path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path>
    </svg> -->
</section>
<section class="about_section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 p-0 left">
                <img src="<?php the_field('about_img');?>" alt="">
            <div class="overlay"></div>
            <div class="square"></div>
            </div>
            <div class="col-lg-6 right">
            <div class="wrapp">
        
            <div class="single-post">
                <?php the_content();?>
                <!-- <h2><?php the_title();?></h2> -->
            </div>
            </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="partners">
            <div class="swiper-container-partner swiper-container">
                <div class="swiper-wrapper">
                    <?php
                    $args = array(
                    'post_type' => 'partners',
                    'posts_per_page' => '4',
                    'order' => 'DESC',
                    );
                    $loop = new WP_Query($args);
                    while ($loop->have_posts()) :
                    $loop->the_post();
                    ?>
                    <div class="swiper-slide">
                        <div class="single-partner" data-aos="fade-up" data-aos-duration="500">
                            <a href="https://<?php the_title();?>" target="_blank">
                                <?php the_post_thumbnail();?>
                            </a>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    wp_reset_postdata();
                    ?>
                </div>
            </div>
</section> -->
<section class="mision-vision">
<div class="mision">
    <div class="container">
        <div class="positionmis">
        <h1 class=""><?php the_field('title_mision');?></h1>
        <h2 class=""><?php the_field('description_mision');?></h2>
        </div>
    </div>
</div>
	
	<section class="company-stats">
<svg class="nectar-shape-divider nectar-shape-divider-between-top" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">  
            <path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path>   <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>  
            <path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>  
            <path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>  
            <path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path> 
        </svg>    
    <div class="container">
    <div class="row" id="data-row">
    <div class="inside-percentage">
            <?php
            $args = array(
            'post_type' => 'percentage',
            'posts_per_page' => '4',
            'order' => 'DESC', 
            );
            $loop = new WP_Query($args);
            while ($loop->have_posts()) :
            $loop->the_post();
            ?>            
            <div class="col-lg-3 reversee" id="single">
                <div class="svg">
                    <?php the_field('svgarea');?>
                </div>
                <h2><?php the_title();?></h2>
                <h3 class="number"><?php the_content();?></h3>
            </div>
        <?php
        endwhile;
        wp_reset_postdata();
        ?>
        </div>
        </div>
    </div>
<svg class="nectar-shape-divider nectar-shape-divider-between-bottom" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">  
            <path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path>   <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>  
            <path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>  
            <path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>  
            <path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path> 
        </svg>    
</section>
	
<div class="vision">
    <div class="container">
            <div class="positionvis">
            <h1 class=""><?php the_field('title_vision');?></h1>
            <h2 class=""><?php the_field('description_vision');?></h2>
            </div>
    </div>
</div>
</section>

<?php if ( get_field( 'disablesectionn' ) ): ?>
<?php else: ?>
<section class="happy-clients happy-clients-about">
    <section class="spacer onlyabout">
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