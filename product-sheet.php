<?php
require 'app/Productos.php';

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_STRING);

if (!$id) {
    header('location: ' . $_SERVER['HTTP_REFERER']);
    exit();
}
$cn = new Productos();

$product = $cn->consultar('SELECT nombre, descripcion, imagen, grupo, subtitle FROM productos WHERE id = ?', [$id], true);
// print_r($product);
include 'tpl/header.tpl.html';
?>
            <div class="container">
                <div class="row">
                    <section id="product-sheet" class="clearfix">
                        <div class="col-sm-4 col-sm-offset-1-">
                            <a href="images/products/<?php echo $product['grupo'] . '/' .$product['imagen'] ?>" class="img-product swipebox">
                                <img class="img-responsive" src="images/products/<?php echo $product['grupo'] . '/' . $product['imagen'] ?>" alt="chateau" width="250" height="600">
                            </a>
                        </div>
                        <div class="col-sm-8">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Inicio</a></li>
                                <li><a href="products.php">Productos</a></li>
                                <li class="active"><?php echo $product['grupo'] ?></li>
                            </ol>
                            <h1><?php echo $product['nombre'] ?></h1>
                            <h5><?php echo $product['subtitle'] ?></h5>
                            <div class="col-sm-9">
                                <div class="row">
                                    <?php echo $product['descripcion'] ?><a href="images/products/<?php echo $product['grupo'] . '/' . $product['imagen'] ?>"><br><i class="fa fa-picture"></i> Foto</a>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        <?php include 'tpl/footer.tpl.php' ?>
        </div>
    </div>
    <script type="text/javascript" src="src/js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="src/js/jquery.swipebox.min.js"></script>
    <script type="text/javascript">
    ;( function( $ ) {
        $( '.swipebox' ).swipebox();
    } )( jQuery );
    </script>
</body>
</html>