<?php require_once 'cms/cms.php'; ?>
<cms:template title='Inicio' />
<?php require_once 'mod/head.php'; ?>
</head>
<body>
    <div class="container">
        <?php require_once 'mod/menu.php';?>
            <!--carrusel-->
            <div class="carousel row" data-flickity>
                <div class="carousel-cell">
                    <img src="img/portada.jpg">
                </div>
                <div class="carousel-cell">
                    <img src="img/img1.jpg">
                </div>
                <div class="carousel-cell">
                    <img src="img/img2.jpg">
                </div>
            </div>
            <h1 class="titulo decor"><span>Manitas Unidas I.A.P.</span></h1>
            <div class="row parent">
                <div class="col-md-7 col-sm-12 child">
                    <p class="parrafo" >
                        <cms:editable name='descripcion' label='Descripcion corta de manitas unidas' type='nicedit'>
                            Surge de la iniciativa de nuestro presidente el Lic. Manuel Gallardo Inzunza, quien al contar con el padecimiento de Glaucoma, cuenta con la sensibilidad y conocimiento de las grandes necesidades que presentan las personas con capacidades diferentes, y toma el reto de realizar un esfuerzo colectivo con la finalidad de disminuirlas o aliviarlas.
                        </cms:editable>
                    </p>
                </div>

                <div class="col-md-5 col-sm-12 child">
                    <img class="img-responsive img-thumbnail center-block" src="<cms:editable name='imagen_descripcion' label='Imagen que va junto a la descripcion' type='image'></cms:editable>">
                </div>
            </div>
    </div>
    <?php require_once 'mod/footer.php';?>
    <script src="js/carrusel.js"></script>
</body>

</html>
<?php COUCH::invoke(); ?>
