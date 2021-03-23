<?php get_header(); ?>

<script src="<?php bloginfo('template_url'); ?>/js/sexy-accordion.js"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/sexy-accordion.css">
<style type="text/css">

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
<?php get_sidebar('down'); ?>

<!-- SECTION DIVIDER -->

<?php get_sidebar('section-banner'); ?>

<!-- SECTION DIVIDER -->

<div class="under-section-banner">
	<img src="<?php bloginfo('template_url'); ?>/img/invitados.png">
</div>

<!-- SECTION DIVIDER -->
<?php $via = get_field('via'); ?>

<div id="contact-forms" class="section-div pad-und-sm">
	<div class="row">
		<div id="prensa-form" class="large-4 medium-4 small-12 columns">
			<img src="<?php echo $via[0]['imagen'] ?>" class="small-character">
			<div class="title"><h1><?php echo $via[0]['title'] ?></h1></div>
			<div class="content"><h5><?php echo $via[0]['text'] ?></h5></div>
			<a data-open="registroText" class="button rounded-orange-btn" style="width: 197px;">Regístrate <i class="fa fa-angle-right fa-lg"></i></a>
		</div>
		<div id="ventas-form" class="large-4 medium-4 small-12 columns">
			<img src="<?php echo $via[1]['imagen'] ?>" class="small-character">
			<div class="title"><h1><?php echo $via[1]['title'] ?></h1></div>
			<div class="content"><h5 style="margin-bottom: 24px;"><?php echo $via[1]['text'] ?></h5></div>
			<input type="text" placeholder="Nombre" class="name-field">
			<input type="text" placeholder="E-Mail" class="mail-field">
			<textarea name="msg-field" cols="30" rows="10" placeholder="Mensaje..."></textarea>
			<a href="#" class="button rounded-orange-btn">Enviar <i class="fa fa-angle-right fa-lg"></i></a>
		</div>
		<div id="dudas-form" class="large-4 medium-4 small-12 columns">
			<img src="<?php echo $via[2]['imagen'] ?>" class="small-character">
			<div class="title"><h1><?php echo $via[2]['title'] ?></h1></div>
			<div class="content"><h5><?php echo $via[2]['text'] ?></h5></div>
			<input type="text" placeholder="Nombre" class="name-field">
			<input type="text" placeholder="E-Mail" class="mail-field">
			<textarea name="msg-field" cols="30" rows="10" placeholder="Mensaje..."></textarea>
			<a href="#" class="button rounded-orange-btn">Enviar <i class="fa fa-angle-right fa-lg"></i></a>
		</div>
	</div>
</div>
<div class="reveal large" id="registroText" data-reveal>
	<h2 class="title-registro">Registro de Prensa</h2>
	<div class="registroText">
		<?php echo the_field('registro') ?>
		<a class="registroLink">Registro individual <span>aquí</span></a>
	</div>
	<div class="registroForm">
		<div class="registroText2">
			<p>
				Medios de comunicación interesados en asistir, deberán llenar todos los campos de manera <b>obligatoria y sin excepción alguna</b>. De lo contrario la solicitud no será tomada en cuenta.
			</p>
		</div>
		<div class="inputs-forms">
			<input type="text" id="nombre" placeholder="Nombre periodista:">
			<input type="text" id="aPaterno" placeholder="Apellido Paterno">
			<input type="text" id="aMaterno" placeholder="Apellido Materno">
			<input type="text" id="medio" placeholder="Nombre del medio">
			<input type="text" id="mail" placeholder="Mail del medio al que representas">
			<input type="text" id="puesto" placeholder="Puesto">
			<input type="text" id="twitter" placeholder="Twitter">
			<input type="text" id="facebook" placeholder="Facebook">
			<input type="text" id="sitio" placeholder="Sitio web del medio al que representas">
			<a id="sendPrensa" class="button rounded-orange-btn">Enviar <i class="fa fa-angle-right fa-lg"></i></a>
		</div>
	</div>
	<button class="close-button" data-close aria-label="Close modal" type="button">
		<span aria-hidden="true">&times;</span>
	</button>
</div>

<!-- SECTION DIVIDER -->
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
	var aPaternoV = new LiveValidation('aPaterno');
	aPaternoV.add( Validate.Presence );
	var aMaternoV = new LiveValidation('aMaterno');
	aMaternoV.add( Validate.Presence );
	var medioV = new LiveValidation('medio');
	medioV.add( Validate.Presence );
	var mailV = new LiveValidation('mail');
	mailV.add( Validate.Presence );
	var puestoV = new LiveValidation('puesto');
	puestoV.add( Validate.Presence );
	var twitterV = new LiveValidation('twitter');
	twitterV.add( Validate.Presence );
	var facebookV = new LiveValidation('facebook');
	facebookV.add( Validate.Presence );
	var sitioV = new LiveValidation('sitio');
	sitioV.add( Validate.Presence );

</script>
<?php get_footer(); ?>