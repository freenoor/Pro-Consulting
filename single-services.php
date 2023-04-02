<?php
    get_header();
    if ( have_posts() ):
    while( have_posts() ):
    the_post();
?>

<div class="single-servicess">
    <div class="container">
    <div class="service-wrap service-wrapp">
        <div class="single-post text-center">
            <div class="entry-summary">
                <div class="svg">
                    <?php the_field('svg');?>
                </div>
                    <h2><?php the_title();?></h2>
                    <?php the_content();?>
                    <?php the_field('extra_service_content');?>
            </div>
        </div> 
        </a>
    </div>
    </div>

    <div id="buttonanchor" class="widgetbutton" style="text-align: center; margin-top: 60px">
        <?php dynamic_sidebar('all_servicesbutton');?>
    </div>
    <div class="hrr"></div>
</div>
<?php
    endwhile;
    endif;
    get_footer();
?>