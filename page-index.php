<?php get_header(); ?>
<style>
footer {
    margin-top: -200px;
}
#marcas {
    margin-top: 50px;
}

.invita {
    max-width: 80%;
    margin: 0 auto;
    display: block;
}
</style>
<?php get_sidebar('down'); ?>
<div id="banner-home" class="section-div" style="background: url(<?php bloginfo('template_url'); ?>/img/bg.png) 50% 50% / cover no-repeat;">
    <div class="scene">
        <div data-offset="100" class="tetris parallax" style="background: url(<?php bloginfo('template_url'); ?>/img/tetris.png) 50% 50% / cover no-repeat;"></div>
        <div data-offset="60" class="characters parallax" style="background: url(<?php bloginfo('template_url'); ?>/img/characters.png) 50% 50% / cover no-repeat;"></div>
        <img src="<?php bloginfo('template_url'); ?>/img/char1.png" class="character-main hide-for-small-only">
    </div>
    <div class="row">
        <div class="large-12 medium-12 small-12 columns">
            <img id="logo-banner" src="<?php bloginfo('template_url'); ?>/img/logo_main.png">
            <h4>30 de septiembre<br>1 y 2 de octubre</h4>
            <a href="<?php echo get_field('link_compra'); ?>" class="button" target="blank"><?php echo get_field('btn_comprar'); ?> <i class="fa fa-angle-right fa-lg"></i></a>
        </div>
    </div>
</div>

<!-- SECTION DIV -->

<div id="access-types" class="section-div pad-und-sm" style="background: url(<?php bloginfo('template_url'); ?>/img/pattern.png) 50% 50% / 600px repeat, linear-gradient(180deg, white 80% , #F17822 79%)">
    <?php separadorTexto('', 'Preventa'); ?>
    <div class="row">
        <h5 class="text-center"><?php echo get_field('leyenda_en_preventa') ?></h5>
    <?php 
    if(have_rows('packs')):
        while(have_rows('packs')): the_row();
        $title = get_sub_field('title');
        $description = get_sub_field('description');
        $link = get_sub_field('link');
        $icon = get_sub_field('icon');
        $leyenda = get_sub_field('leyenda');
     ?>
        <div class="large-4 medium-4 small-12 columns large-centered medium-centered">
            <div class="access-container">
                <div class="access-type">
                    <div class="title">
                        <h3><?php echo $title; ?></h3>
                    </div>
                    <div class="small-line"></div>
                    <div class="content">
                        <h5><?php echo $description; ?></h5>
                        <a href="<?php echo $link; ?>" class="button rounded-orange-btn" target="blank">Compra <i class="fa fa-angle-right fa-lg"></i></a>
                    </div>
                    <div>
                        <div class="tooltip-container">
                        <label><?php echo $leyenda; ?></label>
                            <img src="<?php bloginfo('template_url'); ?>/img/globo_bk.png" class="globo_tt hide-for-small-only">
                            <img src="<?php bloginfo('template_url'); ?>/img/globo_bks.png" class="globo_tt show-for-small-only">
                        </div>
                        <img src="<?php echo $icon; ?>" onclick="$('.tooltip-container').toggleClass('hide');" class="small-character animated">

                    </div>
                </div>
            </div>
        </div>
        <?php 
        endwhile;
    endif;
         ?>
        <div id="brands" class="large-12 medium-12 small-12 columns">
            <h6>*<?php echo get_field('condiciones_venta'); ?></h6>
        </div>
    </div>
</div>

<!-- SECTION DIV -->

<?php //separadorTexto('', 'Marcas participantes'); ?>
<div id="marcas" class="section-div">
    <div class="row">
        <div class="large-4 medium-4 hide-for-small-only columns">
            <img src="<?php bloginfo('template_url'); ?>/img/char2.png">
        </div>
        <?php 
        $presenta = get_field('presenta');
        $invita = get_field('invita');

         ?>
        <div class="large-4 medium-4 small-12 columns">
            <a target="_blank" href="<?php echo $presenta[0]['link']; ?>"><img src="<?php echo $presenta[0]['image']; ?>"></a>
            <h5>Presenta</h5>
            <a target="_blank" href="<?php echo $invita[0]['link']; ?>"><img class="invita" src="<?php echo $invita[0]['image']; ?>"></a>
            <h5>Invita</h5>
        </div>
        <div class="large-4 medium-4 hide-for-small-only columns">
            <img src="<?php bloginfo('template_url'); ?>/img/char3.png">
        </div>
         <div class="large-12 medium-12 small-12 columns expanded <?php if(!have_rows('marcas')) echo 'display-none'; ?>">
            <div id="swiper-brands" class="swiper-container">
                <div class="swiper-wrapper">
                <?php 
                if(have_rows('marcas')):
                    while(have_rows('marcas')): the_row();
                    $image = get_sub_field('image');
                    $link = get_sub_field('link');
                 ?>
                    <div class="swiper-slide">
                        <a target="_blank" href="<?php echo $link; ?>">
                            <img src="<?php echo $image; ?>">
                        </a>
                    </div>
                <?php 
                    endwhile;
                endif;
                 ?>
                </div>
                <div class="swiper-button-next swiper-button-black"></div>
                <div class="swiper-button-prev swiper-button-black"></div>   
            </div>
        </div>
    </div>
</div>
<script>
var swiper = new Swiper('#swiper-brands', {
    nextButton: '.swiper-button-next',
    prevButton: '.swiper-button-prev',
    slidesPerView: 5,
    autoplay: 1500,
    autoplayDisableOnInteraction: false,
    loop: true,
    spaceBetween: 10,
});
</script>

<!-- SECTION DIVIDER -->

<div id="subscribe" class="section-div pad-und-sm">
    <div class="row">
        <div class="large-10 large-centered medium-10 medium-centered small-10 small-centered columns">
            <h2><?php echo get_field('feed_label') ?></h2>
        </div>
    </div>
    <div class="row">
        <div class="large-8 large-centered medium-10 medium-centered small-12 columns">
            <form action="//electronicgameshow.us12.list-manage.com/subscribe/post?u=c7fc9f2f88bb9e0a7b38b4706&amp;id=7c0aebe807" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c7fc9f2f88bb9e0a7b38b4706_7c0aebe807" tabindex="-1" value=""></div>

                <div class="large-8 medium-8 small-12 column">
                    <input type="email" placeholder="E-mail" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                <div class="large-4 medium-4 small-12 column small-centered">
                    <input type="submit" value="Suscríbete" name="subscribe" id="mc-embedded-subscribe" class="suscribe-btn">
                </div>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
            </form>
        </div>
    </div>
    
</div>

<!-- SECTION DIVIDER -->

<div id="feed" class="section-div">
    <div class="next-button"><i class="fa fa-angle-right fa-3x"></i></div>
    <div class="swiper-feed">
        <div class="swiper-wrapper">

            <div id="section-1" class="swiper-slide" style="background-image: url(http://electronicgameshow.com/blog/wp-content/uploads/2016/06/breath2323.jpg);">
                <div class="content wrapper section-div ">
                    <div class="gradient-layer"></div>
                    <div class="row">
                        <div class="large-8 medium-8 small-10 columns">
                            <h3>lorem ipsum dolor sit amet adipsicing consecteur</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deleniti corrupti ea animi amet explicabo, provident tenetur perferendis, aliquid rem minima iste? Temporibus blanditiis aut amet, minima corporis. Commodi, id.</h6>
                        </div>
                        <div class="large-3 medium-3 small-10 end columns">
                            <a href="#" target="blank" class="ver-mas-feed rounded-orange-btn">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="section-2" class="swiper-slide" style="background-image: url(http://electronicgameshow.com/blog/wp-content/uploads/2016/06/breath2323.jpg);">
                <div class="content wrapper section-div ">
                    <div class="gradient-layer"></div>
                    <div class="row">
                        <div class="large-8 medium-8 small-10 columns">
                            <h3>lorem ipsum dolor sit amet adipsicing consecteur</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deleniti corrupti ea animi amet explicabo, provident tenetur perferendis, aliquid rem minima iste? Temporibus blanditiis aut amet, minima corporis. Commodi, id.</h6>
                        </div>
                        <div class="large-3 medium-3 small-10 end columns">
                            <a href="#" target="blank" class="ver-mas-feed rounded-orange-btn">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="section-3" class="swiper-slide" style="background-image: url(http://electronicgameshow.com/blog/wp-content/uploads/2016/06/breath2323.jpg);">
                <div class="content wrapper section-div ">
                    <div class="gradient-layer"></div>
                    <div class="row">
                        <div class="large-8 medium-8 small-10 columns">
                            <h3>lorem ipsum dolor sit amet adipsicing consecteur</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deleniti corrupti ea animi amet explicabo, provident tenetur perferendis, aliquid rem minima iste? Temporibus blanditiis aut amet, minima corporis. Commodi, id.</h6>
                        </div>
                        <div class="large-3 medium-3 small-10 end columns">
                            <a href="#" target="blank" class="ver-mas-feed rounded-orange-btn">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>

            <div id="section-4" class="swiper-slide" style="background-image: url(http://electronicgameshow.com/blog/wp-content/uploads/2016/06/breath2323.jpg);">
                <div class="content wrapper section-div ">
                    <div class="gradient-layer"></div>
                    <div class="row">
                        <div class="large-8 medium-8 small-10 columns">
                            <h3>lorem ipsum dolor sit amet adipsicing consecteur</h3>
                            <h6>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique deleniti corrupti ea animi amet explicabo, provident tenetur perferendis, aliquid rem minima iste? Temporibus blanditiis aut amet, minima corporis. Commodi, id.</h6>
                        </div>
                        <div class="large-3 medium-3 small-10 end columns">
                            <a href="#" target="blank" class="ver-mas-feed rounded-orange-btn">Ver más</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<script>
var swiper = new Swiper('.swiper-feed', {
    effect: 'fade',
    simulateTouch: false,
    nextButton: '.next-button',
    autoplay: 2500,
    autoplayDisableOnInteraction: true,
    loop: true,
});
</script>

<!-- SECTION DIVIDER -->

<div id="social-widgets" class="section-div pad-und-md" style="background-image: url(<?php bloginfo('template_url'); ?>/img/pattern.png);">
    <div class="row">
        <div class="large-4 medium-4 small-12 columns text-center">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Felectronicgameshow%2F%3Ffref%3Dts&tabs=timeline&width=340&height=660&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=false&appId" width="340" height="660" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true"></iframe>
        </div>
        <div class="large-4 medium-4 small-12 columns end text-center">
            <div class="row">
                <a class="twitter-timeline" data-lang="es" data-width="340" data-height="400" data-link-color="#F17822" href="https://twitter.com/EGSmexico">Tweets by EGSmexico</a> <script async src="//platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>
            <div class="row">
                <h5><?php echo get_field('youtube_title'); ?></h5>
                <iframe width="340" height="220" src="https://www.youtube.com/embed/<?php echo get_field('youtube_link') ?>" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>
        <div class="large-4 medium-4 small-12 columns">
            <div id="globo-container" class="">
                <img id="globo" src="<?php bloginfo('template_url'); ?>/img/globo.png" class="hide-for-small-only">

                <h1>¡Síguenos!</h1>
                <div class="social-nets">
                    <a target="_blank" href="<?php echo get_field('fb'); ?>"><i class="fa fa-facebook-square fa-3x"></i></a>
                    <a target="_blank" href="<?php echo get_field('tw'); ?>"><i class="fa fa-twitter-square fa-3x"></i></a>
                    <a target="_blank" href="<?php echo get_field('yt'); ?>"><i class="fa fa-youtube-square fa-3x"></i></a>
                    <a target="_blank" href="<?php echo get_field('twch'); ?>"><i class="fa fa-twitch fa-3x"></i></a>
                </div>
            </div>
            <img id="character" src="<?php bloginfo('template_url'); ?>/img/char5.png">

        </div>
    </div>
</div>

<!-- SECTION DIVIDER -->

<script>

$.fn.extend({
    animateCss: function (animationName) {
        var animationEnd = 'webkitAnimationEnd mozAnimationEnd MSAnimationEnd oanimationend animationend';
        $(this).addClass('animated ' + animationName).one(animationEnd, function() {
            $(this).removeClass('animated ' + animationName);
        });
    }
});

$(document).on('scroll', function() {
    var scrollTop     = $(window).scrollTop();
    var elementOffset = $('#globo-container').offset().top;
    var distance      = (elementOffset - scrollTop);
     if (distance < 400) {
        $('#globo').css('top', '-50px');
        $('#globo-container').addClass("animated tada");
    } else {
        $('#globo').css('top', '20px');
        $('#globo-container').removeClass("animated tada");
    }
});


function getPostsFromAnotherBlog() {
    $.ajax({ 
      type: "GET",
      url: "http://electronicgameshow.com/blog/index.php/apiblog/?np=4",             
      success: function(response){    
        var data = $.parseJSON(response);
        console.log(data);
        var count = 1;
        data.forEach(function (note) {
            var extract = (note.excerpt.substring(0, 220)) + "[...]";

            $('.swiper-feed #section-' + count + ' h3').html(note.title);
            $('.swiper-feed #section-' + count ).css("background-image", "url(" + note.image + ")");
            $('.swiper-feed #section-' + count + ' h6').html(extract);
            $('.swiper-feed #section-' + count + ' a.ver-mas-feed').attr('href', note.url);
            count++;
        });
      },
      complete: function() {

            console.log('Mission complete');
      }

    });
}




$(window).on('mousemove', function(e) {
    var w = $(window).width();
    var h = $(window).height();
    var offsetX = 0.5 - e.pageX / w;
    var offsetY = 0.5 - e.pageY / h;

    $(".parallax").each(function(i, el) {
        var offset = parseInt($(el).data('offset'));
        var translate = "translate3d(" + Math.round(offsetX * offset) + "px," + Math.round(offsetY * offset) + "px, 0px)";

        $(el).css({
            '-webkit-transform': translate,
            'transform': translate,
            'moz-transform': translate
        });
    });
});

$(document).ready(function() {
    // $('.small-character.animated').tooltipster({trigger: 'click', maxWidth: 420});
    $('.tooltip-container').removeClass('hide');
    getPostsFromAnotherBlog()
});

setInterval(function() {
    $('#access-types .small-character').animateCss('shake');
}, 3000);

</script>
<?php get_footer(); ?>
