<?php get_header(); ?>

<script src="<?php bloginfo('template_url'); ?>/js/sexy-accordion.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sexy-accordion.css">

<?php get_sidebar('down'); ?>

<!-- SECTION DIVIDER -->

<?php get_sidebar('section-banner'); ?>

<!-- SECTION DIVIDER -->
<style type="text/css">
.under-section-banner {
    height: 64px;
}
.registroForm {
	display: none;
}

.title-registro {
	font-family: 'Branding';
    font-weight: 900;
    text-transform: uppercase;
    color: #F17822;
    text-align: center;
}

.registroText {
    padding: 36px;
    margin-top: -39px;
}

.registroText2 {
    padding: 36px;
    margin-top: -39px;
}

.registroText p {
    font-family: 'Branding';
    font-weight: 300;
    color: #333;
    margin: 20px auto;
}
.registroText2 p {
    font-family: 'Branding';
    font-weight: 300;
    color: #333;
    margin: 20px auto;
}
.registroText ul {
    font-family: 'Branding';
    font-weight: 300;
    color: #333;
    margin: 20px auto;
}

.registroText li {
    font-family: 'Branding';
    font-weight: 300;
    color: #333;
    margin: 2px auto;
    margin-left: 50px;
}
.registroLink span {
    font-family: 'Branding';
    font-weight: 900;
    color: #6D6E71;
}
.registroLink {
	font-family: 'Branding';
	font-weight: 300;
	color: #333;
	margin: 20px auto;
}

.inputs-forms {
	padding: 200px;
    margin-top: -229px;
}
</style>
<div class="under-section-banner">
	<img src="<?php bloginfo('template_url'); ?>/img/donde.png">
</div>

<div class="section-div">
<?php 
if(have_rows('parent')) :
	while(have_rows('parent')) :the_row()
?>
<div class="activity-area-template pad-und-md">
	<div class="row">
		<div class="large-12 medium-12 small-12 columns">
			<div class="large-8 medium-10 small-12 large-centered medium-centered columns">
				<div class="large-3 medium-3 hide-for-small-only columns">
					<img src="<?php echo get_sub_field('icon-i'); ?>">
				</div>
				<div class="large-6 medium-6 hide-for-small-only columns">
					<img src="<?php echo get_sub_field('title'); ?>" style="margin-bottom: 15px;">
				</div>
				<div class="large-3 medium-3 hide-for-small-only columns">
					<img src="<?php echo get_sub_field('icon-d'); ?>">
				</div>
				<hr>
			</div>
		</div>
	</div>
	<div class="row">
		<?php 
		$images = get_sub_field('gallery');
		$name = get_sub_field('name');
		?>

		<div class="large-12 medium-12 small-12 columns">
			<div id="swiper-<?php echo $name; ?>" class="swiper-container">
				<div class="swiper-wrapper">
			<?php foreach ($images as $image): ?>
			<div class="test" style="display:none;">
				<?php print_r($image); ?>
			</div>
				<div class="swiper-slide gallery-pic"  style="background: url(<?php echo $image['sizes']['large']; ?>) 50% 50% / cover no-repeat;"></div>
			<?php endforeach; ?>
				</div>
				<div class="swiper-pagination"></div>
			</div>
			<a data-open="registroText" class="button rounded-orange-btn" style="width: 197px;">Regístrate <i class="fa fa-angle-right fa-lg"></i></a>
		</div>
		<div class="large-12 medium-12 small-12 columns" style="margin-bottom: 15px;">
			<h5 class="text-center" style="margin-top:15px;"><?php echo get_field('leyenda'); ?></h5>
		</div>
	</div>
</div>

<div class="reveal large" id="registroText" data-reveal>
	<h2 class="title-registro">Convocatoria Cosplay</h2>
	<div class="registroText">
		<?php echo the_field('registro') ?>
		<a class="registroLink">Registro individual <span>aquí</span></a>
	</div>
	<div class="registroForm">
		<div class="registroText2 text-center">
			<p>
				Por favor llena el siguiente formulario de manera correcta. De lo contrario tu aplicación <b>no será tomada en cuenta</b>:
			</p>
		</div>
		<div class="inputs-forms">
			<input type="text" id="nombre" placeholder="Nombre (s)">
			<input type="text" id="apellidos" placeholder="Apellidos">
			<input type="text" id="pais" placeholder="País">
			<input type="text" id="estado" placeholder="Estado">
			<input type="text" id="edad" placeholder="Edad">
			<input type="text" id="celular" placeholder="Celular">
			<input type="text" id="correo" placeholder="Correo electrónico">
			<input type="text" id="confirmar" placeholder="Confirmar correo electrónico">
			<input type="text" id="nombrePersonaje" placeholder="Nombre de tu personaje">
			<textarea id="descripcion" placeholder="En 100 palabras describe tu personaje y vestuario:"></textarea>
			<input type="text" id="links" placeholder="Links a tus fotos de tu cosplay">
			<a id="sendRegistro" class="button rounded-orange-btn">Enviar <i class="fa fa-angle-right fa-lg"></i></a>
		</div>
	</div>
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

 <script>
	$(document).foundation();
		$(".registroLink").click(function(){
		$(".registroText").hide("slow");
		$(".registroForm").show("slow");
		$('#registroText').scrollTop(0);
	});
	$(window).on(
		'closed.zf.reveal', function () {
		    $(".registroText").show("slow");
				$(".registroForm").hide("slow")
		}
	);

	var nombreV = new LiveValidation('nombre');
	nombreV.add( Validate.Presence );
	var apellidosV = new LiveValidation('apellidos');
	apellidosV.add( Validate.Presence );
	var paisV = new LiveValidation('pais');
	paisV.add( Validate.Presence );
	var estadoV = new LiveValidation('estado');
	estadoV.add( Validate.Presence );
	var edadV = new LiveValidation('edad');
	edadV.add( Validate.Presence );
	var celularV = new LiveValidation('celular');
	celularV.add( Validate.Presence );
	var correoV = new LiveValidation('correo');
	correoV.add( Validate.Presence );
	correoV.add( Validate.Email );
	var confirmarV = new LiveValidation('confirmar');
	confirmarV.add( Validate.Presence );
	var nombrepV = new LiveValidation('nombrePersonaje');
	nombrepV.add( Validate.Presence );
	var descripcionV = new LiveValidation('descripcion');
	descripcionV.add( Validate.Presence );
	var linksV = new LiveValidation('links');
	linksV.add( Validate.Presence );

	$("#sendRegistro").click(function() {
		var areAllValid = LiveValidation.massValidate( [nombreV,apellidosV,paisV,estadoV,edadV,celularV,correoV,confirmarV,nombrepV,descripcionV,linksV] );
		if(areAllValid!=false){
			var nombre = $("#nombre").val();
			var apellidos = $("#apellidos").val();
			var pais = $("#pais").val();
			var estado = $("#estado").val();
			var edad= $("#edad").val();
			var celular= $("#celular").val();
			var correo = $("#correo").val();
			var nombrep = $("#nombrePersonaje").val();
			var descripcion = $("#descripcion").val();
			var links = $("#links").val();

            var data=('nombre='+nombre+'&apellidos='+apellidos+'&pais='+pais+'&estado='+estado+'&edad='+edad+'&celular='+celular+'&correo='+correo+'&nombrePersonaje='+nombrep+'&descripcion='+descripcion+'&links='+links);

	
	$.ajax({
      type:'POST',
      url:'/egs2016/registroa',
      data: data,
      beforeSend:function(){
        console.log('enviando datos');
      },
      success:function(resp){
        console.log('resp');
        if (resp!="") {
          /*$('#resultados').html(resp);*/
        
        }
        swal("Mensaje enviado", "Espera nuestra respuesta", "success");
      }
    });
    var message = "Nombre: "+name+"\r\nApellidos: "+apellidos+"\r\nPaís: "+pais+"\r\nEstado: "+estado+"\r\nEstado: "+estado+"\r\nEdad: "+edad+"\r\nCelular: "+celular+"\r\nCorreo: "+correo+"\r\nNombre Personaje: "+nombrep+"\r\nDescripción: "+descripcion+"\r\nLinks: "+links
	var m = new mandrill.Mandrill('lFwDXkU9JM-pHtBjKKUV9g');
	
	var params = {
        "message": {
            "from_email":"no-reply@electronicgameshow.com",
            "to":[{"email":"contacto@electronicgameshow.com"}],
            "subject": "Registro de cosplay: "+name+" "+aPaterno+" "+aMaterno,
            "text": message
        }
      };
      m.messages.send(params, function(res) {
		console.log(res);
		$("#nombre").val("");
		$("#apellidos").val("");
		$("#pais").val("");
		$("#estado").val("");
		$("#edad").val("");
		$("#celular").val("");
		$("#correo").val("");
		$("#nombrePersonaje").val("");
		$("#descripcion").val("");
		$("#links").val("");
		}, function(err) {
		  console.log(err);
		});

	}
	});

	var swiper = new Swiper('#swiper-<?php echo $name; ?>', {
    pagination: '.swiper-pagination',
    paginationClickable: true,
    slidesPerView: 5,
    autoplay: 1500,
    autoplayDisableOnInteraction: false,
    spaceBetween: 10,
    breakpoints: {
	    1024: {
	        slidesPerView: 4,
	        spaceBetween: 40
	    },
	    768: {
	        slidesPerView: 3,
	        spaceBetween: 30
	    },
	    640: {
	        slidesPerView: 2,
	        spaceBetween: 20
	    },
	    320: {
	        slidesPerView: 1,
	        spaceBetween: 10
	    }
	}
});
</script>
<?php 
	endwhile;
endif;
?>
</div>

<!-- SECTION DIVIDER -->

<?php get_footer(); ?>