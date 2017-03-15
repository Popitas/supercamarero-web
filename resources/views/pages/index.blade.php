@extends('layouts.main')
@section('content')
    <!-- What is -->
    <div id="whatis" class="content-section-b" style="border-top: 0">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/ipad.png" alt="">
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

            <div class="row tworow">

                <div class="col-sm-4  wow fadeInDown text-center">
                  <img class="rotate" src="img/icon/community.png" alt="Generic placeholder image">
                  <h3>Conocer mejor a los clientes</h3>
                  <p class="lead">Se podrá estudiar qué platos tienen más éxito. También se podrán realizar recomendaciones personalizadas. </p>
                 <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-4 wow fadeInDown text-center">
                  <img  class="rotate" src="img/icon/settings.png" alt="Generic placeholder image">
                   <h3>Mejorar la eficiencia operacional</h3>
                   <p class="lead">Se reducirán el número de pedidos erróneos, al quedar estos registrados en una base de datos. </p>
                   <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div><!-- /.col-lg-4 -->

                <div class="col-sm-4 wow fadeInDown text-center">
                  <img  class="rotate" src="img/icon/job-search.png" alt="Generic placeholder image">
                   <h3>Mejor organización</h3>
                 <p class="lead">Se reducirá el uso del papel al llegar las comandas a una pantalla. </p>
                  <!--  <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                </div> <!--  /.col-lg-4 -->

            </div><!-- /.row -->
        </div>
        <!-- Use it -->
        <div id="clients" class="content-section-a">
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

                <div class="row tworow">

                    <div class="col-sm-4  wow fadeInDown text-center">
                      <img class="rotate" src="img/icon/laptop.svg" alt="Generic placeholder image">
                      <h3>Conocer mejor a los clientes</h3>
                      <p class="lead">Se podrá estudiar qué platos tienen más éxito. También se podrán realizar recomendaciones personalizadas. </p>
                     <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                    </div><!-- /.col-lg-4 -->

                    <div class="col-sm-4 wow fadeInDown text-center">
                      <img  class="rotate" src="img/icon/map.svg" alt="Generic placeholder image">
                       <h3>Mejorar la eficiencia operacional</h3>
                       <p class="lead">Se reducirán el número de pedidos erróneos, al quedar estos registrados en una base de datos. </p>
                       <!-- <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p> -->
                    </div><!-- /.col-lg-4 -->

                    <!--  <div class="col-sm-4 wow fadeInDown text-center">
                      <img  class="rotate" src="img/icon/browser.svg" alt="Generic placeholder image">
                       <h3>Bootstrap</h3>
                     <p class="lead">Epsum factorial non deposit quid pro quo hic escorol. Olypian quarrels et gorilla congolium sic ad nauseum. </p>
                      <p><a class="btn btn-embossed btn-primary view" role="button">View Details</a></p>
                    </div> /.col-lg-4 -->

                </div><!-- /.row -->
            </div>
        <!-- /.container -->
    </div>

    <div class="content-section-b">

        <div class="container">
            <div class="row">
                <div class="col-sm-6 wow fadeInLeftBig">
                     <div id="owl-demo-1" class="owl-carousel">
                        <a href="img/iphone.png" class="image-link">
                            <div class="item">
                                <img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
                            </div>
                        </a>
                        <a href="img/iphone.png" class="image-link">
                            <div class="item">
                                <img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
                            </div>
                        </a>
                        <a href="img/iphone.png" class="image-link">
                            <div class="item">
                                <img  class="img-responsive img-rounded" src="img/iphone.png" alt="">
                            </div>
                        </a>
                    </div>
                </div>

                <div class="col-sm-6 wow fadeInRightBig"  data-animation-delay="200">
                    <h3 class="section-heading">Drag Gallery</h3>
                    <div class="sub-title lead3">Lorem ipsum dolor sit atmet sit dolor greand fdanrh<br> sdfs sit atmet sit dolor greand fdanrh sdfs</div>
                    <p class="lead">
                        In his igitur partibus duabus nihil erat, quod Zeno commuta rest gestiret.
                        Sed virtutem ipsam inchoavit, nihil ampliusuma. Scien tiam pollicentur,
                        uam non erat mirum sapientiae lorem cupido
                        patria esse cariorem. Quae qui non vident, nihilamane umquam magnum ac cognitione.
                    </p>

                     <p><a class="btn btn-embossed btn-primary" href="#" role="button">View Details</a>
                     <a class="btn btn-embossed btn-info" href="#" role="button">Visit Website</a></p>
                </div>
            </div>
        </div>
    </div>

    <div class="content-section-a">

        <div class="container">

             <div class="row">

                <div class="col-sm-6 pull-right wow fadeInRightBig">
                    <img class="img-responsive " src="img/doge.png" alt="">
                </div>

                <div class="col-sm-6 wow fadeInLeftBig"  data-animation-delay="200">
                    <h3 class="section-heading">Font Awesome & Glyphicon</h3>
                    <p class="lead">A special thanks to Death to the Stock Photo for
                    providing the photographs that you see in this template.
                    </p>

                    <ul class="descp lead2">
                        <li><i class="glyphicon glyphicon-signal"></i> Reliable and Secure Platform</li>
                        <li><i class="glyphicon glyphicon-refresh"></i> Everything is perfectly orgainized for future</li>
                        <li><i class="glyphicon glyphicon-headphones"></i> Attach large file easily</li>
                    </ul>
                </div>
            </div>
        </div>

    </div>

    <!-- Screenshot -->
    <div id="clients" class="content-section-b">
        <div class="container">
          <div class="row" >
             <div class="col-md-6 col-md-offset-3 text-center wrap_title ">
                <h2>Screen App</h2>
                <p class="lead" style="margin-top:0">A special thanks to Death.</p>
             </div>
          </div>
            <div class="row wow bounceInUp" >
              <div id="owl-demo" class="owl-carousel">

                <a href="img/slide/1.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/1.png" alt="Owl Image">
                    </div>
                </a>

               <a href="img/slide/2.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/2.png" alt="Owl Image">
                    </div>
                </a>

                <a href="img/slide/3.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/3.png" alt="Owl Image">
                    </div>
                </a>

                <a href="img/slide/1.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/1.png" alt="Owl Image">
                    </div>
                </a>

               <a href="img/slide/2.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/2.png" alt="Owl Image">
                    </div>
                </a>

                <a href="img/slide/3.png" class="image-link">
                    <div class="item">
                        <img  class="img-responsive img-rounded" src="img/slide/3.png" alt="Owl Image">
                    </div>
                </a>
              </div>
          </div>
        </div>


    </div>

    <div  class="content-section-c ">
        <div class="container">
            <div class="row">
            <div class="col-md-6 col-md-offset-3 text-center white">
                <h2>Get Live Updates</h2>
                <p class="lead" style="margin-top:0">A special thanks to Death.</p>
             </div>
            <div class="col-md-6 col-md-offset-3 text-center">
                <div class="mockup-content">
                        <div class="morph-button wow pulse morph-button-inflow morph-button-inflow-1">
                            <button type="button "><span>Subscribe to our Newsletter</span></button>
                            <div class="morph-content">
                                <div>
                                    <div class="content-style-form content-style-form-4 ">
                                        <h2 class="morph-clone">Subscribe to our Newsletter</h2>
                                        <form>
                                            <p><label>Your Email Address</label><input type="text"/></p>
                                            <p><button>Subscribe me</button></p>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                </div>
            </div>
            </div>>
        </div>
    </div>

    <!-- Credits -->
    <div id="benefits" class="content-section-a">
        <div class="container">
            <div class="row">

            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>Credits</h2>
                <p class="lead" style="margin-top:0">A special thanks to Death.</p>
             </div>

                <div class="col-sm-6  block wow bounceIn">
                    <div class="row">
                        <div class="col-md-4 box-icon rotate">
                            <i class="fa fa-desktop fa-4x "> </i>
                        </div>
                        <div class="col-md-8 box-ct">
                            <h3> Bootstrap </h3>
                            <p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
                        </div>
                  </div>
              </div>
              <div class="col-sm-6 block wow bounceIn">
                    <div class="row">
                      <div class="col-md-4 box-icon rotate">
                        <i class="fa fa-picture-o fa-4x "> </i>
                      </div>
                      <div class="col-md-8 box-ct">
                        <h3> Owl-Carousel </h3>
                        <p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p>
                      </div>
                    </div>
              </div>
          </div>

          <div class="row tworow">
                <div class="col-sm-6  block wow bounceIn">
                    <div class="row">
                        <div class="col-md-4 box-icon rotate">
                            <i class="fa fa-magic fa-4x "> </i>
                        </div>
                        <div class="col-md-8 box-ct">
                            <h3> Codrops </h3>
                            <p> Lorem ipsum dolor sit ametconsectetur adipiscing elit. Suspendisse orci quam. </p>
                        </div>
                  </div>
              </div>
              <div class="col-sm-6 block wow bounceIn">
                    <div class="row">
                      <div class="col-md-4 box-icon rotate">
                        <i class="fa fa-heart fa-4x "> </i>
                      </div>
                      <div class="col-md-8 box-ct">
                        <h3> Lorem Ipsum</h3>
                        <p> Nullam mo  arcu ac molestie scelerisqu vulputate, molestie ligula gravida, tempus ipsum.</p>
                      </div>
                    </div>
              </div>
          </div>
        </div>
    </div>

    <!-- Banner Download -->
    <div id="downloadlink" class="banner">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>Download Free</h2>
                <p class="lead" style="margin-top:0">Pay with a Tweet</p>
                <p><a class="btn btn-embossed btn-primary view" role="button">Free Download</a></p>
             </div>
            </div>
        </div>
    </div>

    <!-- Contact -->
    <div id="contact" class="content-section-a">
        <div class="container">
            <div class="row">

            <div class="col-md-6 col-md-offset-3 text-center wrap_title">
                <h2>Contact Us</h2>
                <p class="lead" style="margin-top:0">A special thanks to Death.</p>
            </div>

            <form role="form" action="" method="post" >
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="InputName">Your Name</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Enter Name" required>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputEmail">Your Email</label>
                        <div class="input-group">
                            <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Enter Email" required  >
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="InputMessage">Message</label>
                        <div class="input-group">
                            <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                            <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                        </div>
                    </div>

                    <input type="submit" name="submit" id="submit" value="Submit" class="btn wow tada btn-embossed btn-primary pull-right">
                </div>
            </form>

            <hr class="featurette-divider hidden-lg">
                <div class="col-md-5 col-md-push-1 address">
                    <address>
                    <h3>Office Location</h3>
                    <p class="lead"><a href="https://www.google.com/maps/preview?ie=UTF-8&q=The+Pentagon&fb=1&gl=us&hq=1400+Defense+Pentagon+Washington,+DC+20301-1400&cid=12647181945379443503&ei=qmYfU4H8LoL2oATa0IHIBg&ved=0CKwBEPwSMAo&safe=on">The Pentagon<br>
                    Washington, DC 20301</a><br>
                    Phone: XXX-XXX-XXXX<br>
                    Fax: XXX-XXX-YYYY</p>
                    </address>

                    <h3>Social</h3>
                    <li class="social">
                    <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a>
                    <a href="#"><i class="fa  fa-twitter-square fa-size"> </i> </a>
                    <a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a>
                    <a href="#"><i class="fa fa-flickr fa-size"> </i> </a>
                    </li>
                </div>
            </div>
        </div>
    </div>
@stop
