<?php
//Template Name: Services Template
get_header();
?>
<section class="page-header" style="background-image:url('<?php the_field('services_bg');?>')">
    <div class="container">
        <div class="content">
            <h2><?php the_title();?></h2>
                <!-- <?php the_post();?> -->
            <p><?php the_content();?></p>
        </div>
    </div>
    <!-- <svg class="nectar-shape-divider onlyservicesvg" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">  
        <path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path>   <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>  
        <path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>  
        <path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>  
        <path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path>
    </svg> -->
</section>


<section class="services-section services-section-servpage">
    <?php
        $args = array(
        'post_type' => 'services',
        'posts_per_page' => '-1',
        'orderby' => 'menu_order',
        'order' => 'DESC',
        );
        $the_query = new WP_Query( $args );
        $count = 1;
        if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post(); 
    ?> 
    <div class="after-intro-post">
        <div class="col-lg-6 p-0 simple_back <?php if($count % 2 == 0){echo 'order-lg-12 order-sm-1';}?>" style="background-image: url('<?php echo the_post_thumbnail_url();?>');">
            <div class="layerimg"></div>
            <div class="svg">
                <?php the_field('svg');?>
            </div>
        </div>
        <div class="col-lg-6 textservice <?php if($count % 2 == 0){echo 'order-lg-1 order-sm-12';} else{echo 'bg-grey';}?>">
            <a href="<?php the_permalink();?>">
            <div class="single-post text-center">
                <div class="entry-summary">
                    <h2><?php the_title();?></h2>
                    <?php the_content();?>
                    <?php the_field('extra_service_content');?>
                </div>
                
            </div>
            </a>
        </div> 
    </div>
    <?php
        $count++;
        endwhile;
        endif;
        wp_reset_postdata();
    ?>
</section>
            
<?php
get_footer();
?>