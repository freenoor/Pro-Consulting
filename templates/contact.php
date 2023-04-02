<!-- 
    Template Name: Contact Template
 -->
<?php get_header();?>
<section class="page-header" style="background-image:url('<?php the_field('contact_bg');?>')">
    <div class="container">
        <div class="content">
            <h2><?php the_title();?></h2>
                <!-- <?php the_post();?> -->
            <p><?php the_content();?></p>
        </div>
    </div>
    <!-- <svg class="nectar-shape-divider nectar-shape-divider-otherpage" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 300" preserveAspectRatio="none">  
        <path d="M 1014 264 v 122 h -808 l -172 -86 s 310.42 -22.84 402 -79 c 106 -65 154 -61 268 -12 c 107 46 195.11 5.94 275 137 z"></path>   <path d="M -302 55 s 235.27 208.25 352 159 c 128 -54 233 -98 303 -73 c 92.68 33.1 181.28 115.19 235 108 c 104.9 -14 176.52 -173.06 267 -118 c 85.61 52.09 145 123 145 123 v 74 l -1306 10 z"></path>  
        <path d="M -286 255 s 214 -103 338 -129 s 203 29 384 101 c 145.57 57.91 178.7 50.79 272 0 c 79 -43 301 -224 385 -63 c 53 101.63 -62 129 -62 129 l -107 84 l -1212 12 z"></path>  
        <path d="M -24 69 s 299.68 301.66 413 245 c 8 -4 233 2 284 42 c 17.47 13.7 172 -132 217 -174 c 54.8 -51.15 128 -90 188 -39 c 76.12 64.7 118 99 118 99 l -12 132 l -1212 12 z"></path>  
        <path d="M -12 201 s 70 83 194 57 s 160.29 -36.77 274 6 c 109 41 184.82 24.36 265 -15 c 55 -27 116.5 -57.69 214 4 c 49 31 95 26 95 26 l -6 151 l -1036 10 z"></path>
    </svg> -->
</section>

<section class="contact-widgets">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="box text-center" >
                <i class="fas fa-phone-alt"></i>
                    <hr>
                    <?php dynamic_sidebar('widget-2');?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6 col-12">
                <div class="box text-center">
                <i class="fas fa-mail-bulk"></i>
                <hr>
            <?php dynamic_sidebar('widget-3');?>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-12">
              <div class="box text-center">
              <i class="fas fa-map-marker-alt"></i>
              <hr>
            <?php dynamic_sidebar('widget-4');?>
              </div>

            </div>
        </div>
    </div>
</section>
<div id="map" ></div>
        </div>
        <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCVu3FMyk485eNAMGE6uc5ttRxS1PYDFJE"></script>
        <script type="text/javascript">
            google.maps.event.addDomListener(window, 'load', init);
            function init() {
                var mapOptions = {
                    zoom: 15,
                    center: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
                    styles: [{"featureType": 'water',"elementType": 'labels.text.fill',"stylers": 
                    [{"color": '#686868'}]},{"featureType":"water","elementType":"geometry.fill","stylers":[{"color":"#d3d3d3"}]},
                    {"featureType":"transit","stylers":[{"color":"#808080"},{"visibility":"off"}]},
                    {"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#b3b3b3"}]},
                    {"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},
                    {"featureType":"road.local","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ffffff"},
                    {"weight":1.8}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"color":"#d7d7d7"}]},
                    {"featureType":"poi","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#ebebeb"}]},
                    {"featureType":"administrative","elementType":"geometry","stylers":[{"color":"#000000"}]},
                    {"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},
                    {"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"color":"#ffffff"}]},
                    {"featureType":"landscape","elementType":"geometry.fill","stylers":[{"visibility":"on"},{"color":"#efefef"}]},
                    {"featureType":"road","elementType":"labels.text.fill","stylers":[{"color":"#696969"}]},
                    {"featureType":"administrative","elementType":"labels.text.fill","stylers":[{"visibility":"on"},
                    {"color":"#737373"}]},{"featureType":"poi","elementType":"labels.icon","stylers":[{"visibility":"off"}]},
                    {"featureType":"poi","elementType":"labels","stylers":[{"visibility":"off"}]},
                    {"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"color":"#d6d6d6"}]},
                    {"featureType":"road","elementType":"labels.icon","stylers":[{"visibility":"off"}]},{},
                    {"featureType":"poi","elementType":"geometry.fill","stylers":[{"color":"#dadada"}]}]
                };
                var mapElement = document.getElementById('map');
                var map = new google.maps.Map(mapElement, mapOptions);
                var marker = new google.maps.Marker({
                    position: new google.maps.LatLng(<?php the_field('latitude');?>, <?php the_field('longitude');?>),
                    map: map,
                });            }
        </script>
        <div class="directionss">
			<div class="container">
				<?php dynamic_sidebar('directions_map');?>
			</div>
			</div>
<!-- End of Map -->

<section class="contact-forma contactpage">
    <div class="container">
    <?php dynamic_sidebar('contactform');?>
    </div>
</section>
<?php get_footer();?>

