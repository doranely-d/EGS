<?php get_header(); ?>
<script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

<?php get_sidebar('down'); ?>

<!-- SECTION DIVIDER -->

<?php get_sidebar('section-banner'); ?>

<style>
  footer {margin-top: 0 !important;}
</style>

<!-- SECTION DIVIDER -->

<div class="under-section-banner">
	<img src="<?php bloginfo('template_url'); ?>/img/donde.png">
</div>

<!-- SECTION DIVIDER -->

<div id="where" class="section-div">
	<div class="row">
		<div class="large-8 large-centered medium-10 medium-centered small-12 columns">
			<div class="large-4 medium-4 small-4 columns"><a onclick="cambiaSlide(1)" class="rounded-red-btn"><?php echo get_field('title_section_1'); ?></a></div>
			<div class="large-4 medium-4 small-4 columns"><a onclick="cambiaSlide(2)" class="rounded-red-btn"><?php echo get_field('title_section_2'); ?></a></div>
			<div class="large-4 medium-4 small-4 columns"><a onclick="cambiaSlide(3)" class="rounded-red-btn"><?php echo get_field('title_section_3'); ?></a></div>
		</div>
	</div>
  <div class="row expanded large-collapse medium-collapse small-collapse">
    <div id="slide-1" class="slide large-12 medium-12 small-12 columns">
      <?php separadorTexto('', get_field('title_section_1')) ?>
      <div class="row">
        <div id="direccion" class="large-6 medium-6 small-12 large-centered medium-centered">
          <img src="<?php bloginfo('template_url'); ?>/img/gameboy.png">
          <h5><?php echo get_field('address'); ?></h5>
          <h6><?php echo get_field('address_2'); ?></h6>
        </div>
      </div>
      <div id="mapa" class="section-div">
        <div id="map"></div>
      </div>
    </div>
    <div id="slide-2" class="slide large-12 medium-12 small-12 columns display-none">
      <?php separadorTexto('', get_field('title_section_2')) ?>
      <img class="como-llegar" src="<?php bloginfo('template_url'); ?>/img/proximamenteEGS.png">
    </div>
    <div id="slide-3" class="slide large-12 medium-12 small-12 columns display-none">
      <?php separadorTexto('', get_field('title_section_3')) ?>
      <img class="como-llegar" src="<?php echo get_field('como_llegar'); ?>">
    </div>
  </div>


</div>
<?php 
    $mapa = get_field('map');
    $lat = $mapa['lat'];
    $lon = $mapa['lng'];
 ?>
<script>

function cambiaSlide(id) {
  $('.slide').fadeOut();
  setTimeout(function() {
      $('#slide-' + id).fadeIn();
  }, 400);
}

function initialize() {
  var parametrosMapa = {
    center:new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $lon; ?>),
    zoom:15,
    scrollwheel: false,
    styles: [{"featureType":"administrative.locality","elementType":"all","stylers":[{"hue":"#2c2e33"},{"saturation":7},{"lightness":19},{"visibility":"on"}]},{"featureType":"administrative.locality","elementType":"labels.text","stylers":[{"visibility":"on"},{"saturation":"-3"}]},{"featureType":"administrative.locality","elementType":"labels.text.fill","stylers":[{"color":"#f39247"}]},{"featureType":"landscape","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"simplified"}]},{"featureType":"poi","elementType":"all","stylers":[{"hue":"#ffffff"},{"saturation":-100},{"lightness":100},{"visibility":"off"}]},{"featureType":"poi.school","elementType":"geometry.fill","stylers":[{"color":"#f39247"},{"saturation":"0"},{"visibility":"on"}]},{"featureType":"road","elementType":"geometry","stylers":[{"hue":"#ff6f00"},{"saturation":"100"},{"lightness":31},{"visibility":"simplified"}]},{"featureType":"road","elementType":"geometry.stroke","stylers":[{"color":"#f39247"},{"saturation":"0"}]},{"featureType":"road","elementType":"labels","stylers":[{"hue":"#008eff"},{"saturation":-93},{"lightness":31},{"visibility":"on"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"visibility":"on"},{"color":"#f3dbc8"},{"saturation":"0"}]},{"featureType":"road.arterial","elementType":"labels","stylers":[{"hue":"#bbc0c4"},{"saturation":-93},{"lightness":-2},{"visibility":"simplified"}]},{"featureType":"road.arterial","elementType":"labels.text","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"geometry","stylers":[{"hue":"#e9ebed"},{"saturation":-90},{"lightness":-8},{"visibility":"simplified"}]},{"featureType":"transit","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":10},{"lightness":69},{"visibility":"on"}]},{"featureType":"water","elementType":"all","stylers":[{"hue":"#e9ebed"},{"saturation":-78},{"lightness":67},{"visibility":"simplified"}]}]  };
  var map=new google.maps.Map(document.getElementById("map"), parametrosMapa);
  var myLatlng = new google.maps.LatLng(<?php echo $lat; ?>,<?php echo $lon; ?>);
  var icono_site = '<?php bloginfo('template_url'); ?>/img/marker.png';
  var marker = new google.maps.Marker({
      position: myLatlng,
      title:"La Estacion",
      icon: icono_site,
  });
  var popup = new google.maps.InfoWindow({
  content: 'EGS 2016'
  });
  marker.setMap(map);
  google.maps.event.addListener(marker, 'click', function(){
  	popup.open(map, marker);
  });
}
google.maps.event.addDomListener(window, 'load', initialize);

</script>
<!-- SECTION DIVIDER -->

<?php get_footer(); ?>