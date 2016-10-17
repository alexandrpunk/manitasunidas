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
            <hr>
            <div class="text-center"><a class="gal-link" href="galeria">Ver el resto de las fotografias</a></div>
            <h1 class="titulo decor"><span>Videos</span></h1>
            <div class="row">
        <cms:pages masterpage="videos.php" limit='4'>
                <div class="col-md-3">
                    <div class="embed-responsive embed-responsive-4by3">
                    <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<cms:show video />" frameborder="0" allowfullscreen></iframe>
                    </div>
                </div>
        </cms:pages> 
        </div>
        <hr>
         <div class="text-center"><a class="gal-link" href="videos">Ver el resto de los videos</a></div>
    </div>
        </div>
    <?php require_once 'mod/footer.php';?>
</body>

</html>
<?php COUCH::invoke(); ?>