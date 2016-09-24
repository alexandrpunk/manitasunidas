<?php
$titulo="Multimedia";
require_once 'cms/cms.php';
require_once 'mod/head.php';
?>
</head>
<body>
    <div class="container">
        <?php require_once 'mod/menu.php';?>
        <div class="row">
            <h1 class="titulo decor"><span>Galeria</span></h1>
            <div class="row">
            <cms:folders masterpage='galeria.php' limit='4'>
                <a class="col-md-3 col-sm-3 folder-g" href="<cms:show k_folder_link />">
                    <img src="<cms:show k_folder_image />">
                    <h2><cms:show k_folder_title /></h2>
                </a>                               
            </cms:folders>
            </div>
            <div class="text-center"><a class="gal-link" href="galeria">Ver el resto de las fotografias</a></div>
        </div>
        <div class="row">
            <h1 class="titulo decor"><span>Videos</span></h1>
            <div class="col-md-3 folder-g">
                <img src="http://placehold.it/200/E92A6F/ffffff" class="img-responsive">
                <h2 class="color-cyan">Video 1</h2>
            </div>
        </div>
    </div>
    <?php require_once 'mod/footer.php';?>
</body>

</html>
<?php COUCH::invoke(); ?>