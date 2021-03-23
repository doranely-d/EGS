<div id="back-count" class="hide-for-small-only">
    <div class="row">
        <div class="large-3 medium-3 small-4 columns large-collapse medium-collapse small-collapse">
            <div class="large-6 medium-6 small-4 columns">
                <div class="digit dia-1">9</div>
            </div>
            <div class="large-6 medium-6 small-4 columns">
                <div class="digit dia-2">9</div>
            </div>
            <!--<div class="large-4 medium-4 small-4 columns">
                <div class="digit dia-3">6</div>
            </div>-->
            <h6>Dias</h6>
        </div>
        <div class="large-3 medium-3 small-4 columns large-collapse medium-collapse small-collapse">
            <div class="large-6 medium-6 small-6 columns">
                <div class="digit hora-1">1</div>
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <div class="digit hora-2">3</div>
            </div>
            <h6>Horas</h6>
        </div>
        <div class="large-3 medium-3 small-4 columns large-collapse medium-collapse small-collapse">
            <div class="large-6 medium-6 small-6 columns">
                <div class="digit min-1">3</div>
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <div class="digit min-2">4</div>
            </div>
            <h6>Minutos</h6>
        </div>
        <div class="large-3 medium-3 hide-for-small-only columns large-collapse medium-collapse small-collapse">
            <div class="large-6 medium-6 small-6 columns">
                <div class="digit sec-1">5</div>
            </div>
            <div class="large-6 medium-6 small-6 columns">
                <div class="digit sec-2">2</div>
            </div>
            <h6>Segundos</h6>
        </div>
    </div>
</div>

<script>
function time() {
    var futuro = new Date(2016, 08, 30, 14, 00);
    var actualiza = 1000;
    var ahora = new Date();
    var faltan = futuro - ahora;
    if (faltan > 0) {
        var segundos = Math.round(faltan / 1000);
        var minutos = Math.floor(segundos / 60);
        var segundos_s = segundos % 60;
        var horas = Math.floor(minutos / 60);
        var minutos_s = minutos % 60;
        var dias = Math.floor(horas / 24);
        var horas_s = horas % 24;

        (segundos_s < 10) ? segundos_s = "0" + segundos_s : segundos_s = segundos_s;
        (minutos_s < 10) ? minutos_s = "0" + minutos_s : minutos_s = minutos_s;
        (horas_s < 10) ? horas_s = "0" + horas_s : horas_s = horas_s;
        (dias < 10) ? dias = "0" + dias : dias = dias;

        // console.log("" + dias + horas_s + minutos_s + segundos_s);

        segundos_s = "" +  segundos_s;
        minutos_s = "" +  minutos_s;
        horas_s = "" +  horas_s;
        dias = "" +  dias;

        var d1 = dias.substring(0,1);
        var d2 = dias.substring(1,2);
        var d3 = dias.substring(2,3);
        var h1 = horas_s.substring(0,1);
        var h2 = horas_s.substring(1,2);
        var m1 = minutos_s.substring(0,1);
        var m2 = minutos_s.substring(1,2);
        var s1 = segundos_s.substring(0,1);
        var s2 = segundos_s.substring(1,2);

        $('.digit.dia-1').html(d1);
        $('.digit.dia-2').html(d2);
        $('.digit.dia-3').html(d3);
        $('.digit.hora-1').html(h1);
        $('.digit.hora-2').html(h2);
        $('.digit.min-1').html(m1);
        $('.digit.min-2').html(m2);
        $('.digit.sec-1').html(s1);
        $('.digit.sec-2').html(s2);

        setTimeout("time()", actualiza);
    }
    // estamos en el futuro
    else {
        $('.digit').html('0');
    }
}

time();
</script>