@extends('layouts.main')
@section('header')
    <!-- Preloader -->
    <div id="preloader">
        <div id="status"></div>
    </div>

    <!-- FullScreen -->
    <div class="intro-header">
        <div class="vh-center">
        <!-- <div class="col-xs-12 text-center abcen1"> -->
            <h1 class="h1_home wow fadeIn" data-wow-delay="0.4s">SuperCamarero</h1>
            <h3 class="h3_home wow fadeIn" data-wow-delay="0.6s">El camarero en tu bolsillo</h3>
            <ul class="list-inline intro-social-buttons">
                <li><a href="login" class="btn btn-lg mybutton_cyano wow fadeIn" data-wow-delay="0.8s">
                    <span class="network-name">Iniciar sesión</span></a>
                </li>
                <li id="download">
                    <a href="#downloadlink" class="btn btn-lg mybutton_standard wow swing wow fadeIn" data-wow-delay="1.2s">
                        <span class="network-name">Descarga gratuita</span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-xs-12 text-center abcen wow fadeIn">
            <div class="button_down">
                <a class="imgcircle wow bounceInUp" data-wow-duration="1.5s"  href="#whatis">
                    <img class="img_scroll" src="img/icon/circle.png" alt="">
                </a>
            </div>
        </div>
    </div>
@stop

@section('content')
    <!-- What is -->
    <div id="whatis" class="content-section-b" style="border-top: 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/example.png" alt="">
                </div>

                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
                    <h3 class="section-heading">¿Qué ofrecemos?</h3>
                    <div class="sub-title lead3">
                        Una aplicación con la que se reducirán los tiempos de espera por parte de los clientes para ser atendidos. <br>
                    </div>
                    <p class="lead">
                        El cliente del establecimiento, usando la app de SuperCamarero, podrá escanear un código QR
                        que le descargará la carta del restaurante, de este modo, podrá realizar su pedido sin necesidad de esperar a un camarero. <br>
                        Además, se podrán hacer modificaciones en los platos siempre que el cliente lo especifique en el momento de hacer su pedido.
                    </p>

                     <!-- <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a>
                     <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p> -->
                </div>
            </div>
        </div>
    </div>

    <!-- Use it -->
    <div id="restaurant" class="content-section-a">
        <div class="container">
            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>Para el restaurante</h2>
                <p class="lead" style="margin-top:0">Lograrás obtener las siguientes ventajas</p>
            </div>

            <div class="row">
                <div class="col-sm-4 wow fadeInDown text-center">
                  <img class="rotate" src="img/icon/rotate.png" alt="Generic placeholder image">
                  <h3>Mayor rotación de clientes</h3>
                  <p class="lead">
                      Al atender más rápido a los clientes, se tardará menos tiempo en liberar las mesas.
                  </p>

                  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-4 wow fadeInDown text-center">
                  <img  class="rotate" src="img/icon/budget.png" alt="Generic placeholder image">
                   <h3>Ahorro de costes</h3>
                   <p class="lead">Con esta aplicación se podrán reducir costes en personal. </p>
                   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-4 wow fadeInDown text-center">
                  <img  class="rotate" src="img/icon/retina.svg" alt="Generic placeholder image">
                   <h3>Mejorar el servicio</h3>
                    <p class="lead">Los empleados del local deberán centrarse única y exclusivamente en hacer que los clientes se sientan cómodos. </p>
                  <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->
        </div>
      </div>

      <div id="clients" class="content-section-b">
            <div class="container">
                <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                    <h2>Para el cliente </h2>
                    <p class="lead" style="margin-top:0">Lograrás obtener las siguientes ventajas</p>
                </div>

                <div class="row">
                    <div class="col-sm-4 wow fadeInDown text-center">
                      <img class="rotate" src="img/icon/tweet.svg" alt="Generic placeholder image">
                      <h3>Menor tiempo de espera</h3>
                      <p class="lead">
                          Evitarás esperar a que tomen tu pedido. Podrás realizarlo desde que lo hayas decidido.
                      </p>

                      <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-sm-4 wow fadeInDown text-center">
                      <img  class="rotate" src="img/icon/picture.svg" alt="Generic placeholder image">
                       <h3>Sugerencias personalizadas</h3>
                       <p class="lead">La aplicación te recomendará platos basados en tus gustos. </p>
                       <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-sm-4 wow fadeInDown text-center">
                      <img  class="rotate" src="img/icon/retina.svg" alt="Generic placeholder image">
                       <h3>Mejorar el servicio ofrecido</h3>
                        <p class="lead">Los empleados del local deberán centrarse única y exclusivamente en hacer que los clientes se sientan cómodos. </p>
                      <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                    </div><!-- /.col-lg-4 -->
                </div><!-- /.row -->
            </div>
        <!-- /.container -->
      </div>
@stop
