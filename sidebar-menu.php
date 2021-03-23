<nav id="menu-mobile" class="cerrado">
	<i onclick="cierraMenu()" class="fa fa-times btn-mobile"></i>
	<div class="row">
		<a href="<?php bloginfo('url'); ?>">
			<div class="small-12 columns">
				<img src="<?php bloginfo('template_url'); ?>/img/logo_footer.png">
			</div>
		</a>
		<hr>
		<a href="<?php bloginfo('url'); ?>">
			<div class="small-6 columns">Home</div>
		</a>
		<a href="<?php bloginfo('url'); ?>/agenda">
			<div class="small-6 columns">Agenda</div>
		</a>
		<a href="<?php bloginfo('url'); ?>/invitados">
			<div class="small-6 columns">Invitados</div>
		</a>
		<a href="<?php bloginfo('url'); ?>/areas">
			<div class="small-6 columns">Áreas</div>
		</a>
		<a href="<?php bloginfo('url'); ?>/actividades">
			<div class="small-6 columns">Actividades</div>
		</a>
		<a href="<?php bloginfo('url'); ?>/#brands">
			<div class="small-6 columns">Marcas</div>
		</a>
		<a href="<?php bloginfo('url'); ?>/#feed">
			<div class="small-6 columns">Blog</div>
		</a>
		<a href="<?php bloginfo('url'); ?>/donde">
			<div class="small-6 columns">Dónde</div>
		</a>
		<a href="<?php bloginfo('url'); ?>/faq">
			<div class="small-6 columns">FAQ</div>
		</a>
		<a href="<?php bloginfo('url'); ?>/contacto">
			<div class="small-6 columns">Contacto</div>
		</a>
	</div>
</nav>

<style>
#menu-mobile {
	position: fixed;
	width: 100%;
	height: 100%;
	top: 0;
	left: 0;
	background-color: #424143;
	z-index: 100;
}

#menu-mobile i.fa-times {
	color: white;
	position: absolute;
	left: calc(100% - 50px);
	top: 5px;
}

#menu-mobile img {
	max-width: 50%;
}

#menu-mobile a div {
	text-align: center;
	color: white;
	font-family: 'Branding';
	font-weight: 600;
	font-size: 28px;
	margin: 12px auto;
}

.cerrado {
	left: -100% !important;
	transition: 0.3s ease-in-out;
}

.abierto {
	left: 0 !important;
	transition: 0.3s ease-in-out;
}
</style>

<script>

function abreMenu() {
  $('#menu-mobile').addClass("abierto");
  $('#menu-mobile').removeClass("cerrado");
}

function cierraMenu() {
  $('#menu-mobile').addClass("cerrado");
  $('#menu-mobile').removeClass("abierto");
}

$('#menu-mobile .small-6').click(function() {
	console.log("cerrando");
	cierraMenu();
});
</script>