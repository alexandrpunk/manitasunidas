<?php require_once 'cms/cms.php'; ?>
<cms:template title='Vinculacion' />
<cms:repeatable name='vinculaciones' >
    <cms:editable  name='vinculacion'  label='Nombre de vinculacion'  type='text'/>
    <cms:editable  name='vinculacion_doc'  label='Documento de la vinculacion'  desc='Subir el pdf de la vinculacion'  type='file'/>
</cms:repeatable>
<?php require_once 'mod/head.php'; ?>
</head>
<body>
            <?php require_once 'mod/menu.php';?>

    <div class="container">
        <h1 class="titulo decor">Vinculacion</h1>
        <div class="row">
                <p class="parrafo">
                     <cms:editable name='descripcion' label='Texto de presentacion de los convenios' type='richtext'>
                       Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer eget laoreet diam. Cras auctor mi at nibh congue tincidunt. Sed eget sem sit amet ante laoreet faucibus. Ut vitae viverra ligula. Praesent aliquam gravida eleifend. Nulla facilisi. Nunc tempor vulputate erat eu maximus. Praesent ac dui leo. Ut lobortis magna vitae dui tincidunt feugiat. Pellentesque tempor e.0lit nec auctor ultrices. Nam sed sem lorem. Duis consectetur lacinia arcu, eget euismod sapien fringilla ac. Vestibulum hendrerit, felis non rhoncus vehicula, quam augue dignissim augue, ac tincidunt quam ex sed metus. Nulla facilisi. Suspendisse placerat id augue vitae laoreet.
                    </cms:editable>
                </p>
                <hr>
                <h3>Nuestros Convenios</h3>
                <ul class="convenios">
                    <cms:show_repeatable 'vinculaciones' >
                    <li><a href="<cms:show vinculacion_doc />"><cms:show vinculacion />.</a></li>
                    </cms:show_repeatable>
                </ul>
        </div>
    </div>
    <?php require_once 'mod/footer.php';?>
</body>
</html>
<?php COUCH::invoke(); ?>
