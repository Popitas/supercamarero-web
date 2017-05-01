<!-- Contact -->
<div id="contact" class="content-section-a">
    <div class="container">
        <div class="row">

        <div class="col-md-6 col-md-offset-3 text-center wrap_title">
            <h2>Contacta con nosotros</h2>
            <p class="lead" style="margin-top:0">No mordemos</p>
        </div>

        <form action="contact.php" method="post">
            <div class="col-md-6">
                <div class="form-group">
                    <label for="InputName">Nombre</label>
                    <div class="input-group">
                        <input type="text" class="form-control" name="InputName" id="InputName" placeholder="Introduzca su nombre" required>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputEmail">Correo electrónico</label>
                    <div class="input-group">
                        <input type="email" class="form-control" id="InputEmail" name="InputEmail" placeholder="Introduzca su email" required  >
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                    </div>
                </div>

                <div class="form-group">
                    <label for="InputMessage">Mensaje</label>
                    <div class="input-group">
                        <textarea name="InputMessage" id="InputMessage" class="form-control" rows="5" required></textarea>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-ok form-control-feedback"></i></span>
                    </div>
                </div>

                <input type="submit" name="submit" id="submit" value="Enviar" class="btn wow tada btn-embossed btn-primary pull-right">
            </div>
        </form>

        <hr class="featurette-divider hidden-lg">
            <div class="col-md-5 col-md-push-1 address">
                <h3>¿Dónde estamos?</h3>
                <p class="lead">
                    <a href="https://goo.gl/maps/UViQAdGLqeq" target="_blank">
                        Calle de Pérez del Toro, 66<br>
                        35004 Las Palmas de Gran Canaria<br>
                        Islas Canarias, España
                    </a><br>
                    Teléfono: 611 111 111<br>
                    Fax: 928 111 111
                </p>

                <h3>Social</h3>
                <div class="social">
                    <a href="#"><i class="fa fa-facebook-square fa-size"> </i></a>
                    <a href="#"><i class="fa fa-twitter-square fa-size"> </i> </a>
                    <a href="#"><i class="fa fa-google-plus-square fa-size"> </i></a>
                    <a href="#"><i class="fa fa-flickr fa-size"> </i> </a>
                </div>
            </div>
        </div>
    </div>
</div>
