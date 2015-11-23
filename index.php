<?php include 'tpl/header.tpl.html' ?>
            <div class="container-fluid">
                <div class="row">
                    <div id="swiper-1" class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide" id="slide-0">
                                <div class="background"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h3 class="color-light">
                                                <span data-animation="animated bounceInDown">Nuestra imagen cambio.</span>
                                                <br><br>
                                                <span data-animation="animated bounceInLeft">
                                                    Nuestra esencia sigue siendo la misma
                                                </span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" id="slide-1">
                                <div class="background"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <h3 class="color-light">
                                                <span data-animation="animated bounceInDown">El vino más puro preparado</span>
                                                <br>
                                                <span data-animation="animated bounceInLeft">
                                                    con  uvas 100% peruanas y cultivadas en el valle Bendito de Cañete.
                                                </span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" id="slide-2">
                                <div class="background"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-offset-8 col-sm-4">
                                            <h3 class="color-light text-right">
                                                <span data-animation="animated fadeInUpBig" class="">Viña D' Los Campos</span>
                                                <br>
                                                <span data-animation="animated bounceInRight" class="">
                                                    se compromete en brindarle la mejor experiencia para que pueda disfrutar en los momentos más esperados
                                                </span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide" id="slide-3">
                                <div class="background"></div>
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-offset-8 col-sm-4">
                                            <h3 class="color-light text-right">
                                                <span data-animation="animated bounceInDown">Uvas selectas</span>
                                                <br>
                                                <span data-animation="animated bounceInUp">y de aroma perfecto.</span>
                                                <br>
                                                <span data-animation="animated bounceInRight">
                                                    Las mejores uvas para los mejores vinos
                                                </span>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>

                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </div>
                </div>
            </div>
            <section>
                <img src="images/bebidas-alcoho.jpg" alt="Tomar bebidas alcoholicas en exeso es dañino" style="position: absolute;top: 0" class="img-responsive" id="imgAlcoholias">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <h2>Productos Premium</h2>
                            <span class="separator"></span>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6 col-sm-offset-3 os-animation" data-os-animation="fadeInUp" data-os-animation-delay="0s">
                            <a href="contact.php">
                                <figure class="box-1 img-thumbnail mar-v">
                                    <figcaption>RESERVAS</figcaption>
                                    <div class="overlay"></div>
                                    <img alt="Gran Reserva" class="img-appear" src="images/foto_reservas.png">
                                    <img alt="Uvas negras" class="img-responsive" src="images/red-wines.jpg">
                                </figure>
                            </a>
                        </div>
                        <div class="col-sm-8 col-sm-offset-2 text-center">
                            <p style="font-size: 1.2em">Porque nuestras uvas seleccionadas y cosechadas en el buen Valle de Cañete hacen de nuestros vinos y piscos la mejor compañia para cada momento.</p>
                        </div>
                    </div>
                </div>
            </section>
            <?php include 'tpl/footer.tpl.php' ?>
        </div>
    </div>
    <script type="text/javascript" src="src/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="src/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript" src="src/js/jquery.stellar.js"></script>
    <script type="text/javascript" src="src/js/swiper.jquery.min.js"></script>
    <script type="text/javascript" src="src/js/jquery.waypoints.min.js"></script>
    <script type="text/javascript" src="src/js/winemaker-theme.js"></script>
    <script type="text/javascript">
        /* ENABLE PARALAX ON NON TOUCH DEVICES */
        if (!Modernizr.touch) {
            $.stellar({
                horizontalScrolling: false,
                responsive: true,
                verticalOffset: 100
            });
        }
    </script>
</body>
</html>