<?php require_once 'cms/cms.php'; ?>
<cms:template title='Inicio' />
<cms:repeatable name='secciones'>
    <cms:editable type='image'
                  name='img_seccion'
                  label='Imagen para seccion'
                  show_preview='1'
                  preview_height='200'
    />
    <cms:editable type='text'
                  name='titulo'
                  label='Titulo de la seccion'
    />
    <cms:editable type='textarea'
                  name='descripcion'
                  label='Descripcion de la seccion'
    />
    <cms:editable type='text'
                  name='boton'
                  label='Texto para el boton'
    />
    <cms:editable type='text'
                  name='enlace'
                  label='Enlace para el boton'
    />
</cms:repeatable>
<?php require_once 'mod/head.php'; ?>
</head>
<body>
    <?php require_once 'mod/menu.php';?>
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-5">
                <h4 class="text-center">video institucional</h4>
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe width="560" height="200" src="https://www.youtube.com/embed/<cms:editable name='codigo_video' label='Codigo del video institucional' type='text'></cms:editable>" frameborder="0" allowfullscreen></iframe>
                </div>
            </div>
            <div class="col-md-7 col-sm-7">
                        <!--carrusel-->
                <div class="carousel" data-flickity>
                    <cms:pages masterpage='proyectos.php' custom_field='importante==mostrar'  startcount='1' limit='5'>
                        <div class="carousel-cell">
                            <a href="<cms:show k_page_link />">
                                <img src="<cms:show proyecto_image />">
                                <h4><cms:show k_page_title /></h4>
                            </a>
                        </div>
                    </cms:pages>
                </div>
            </div>
        </div>
        <h1 class="titulo">Conoce nuestro trabajo</h1>
        <div class="row">
            <cms:show_repeatable 'secciones' >
                <div class="col-md-4 col-sm-4">
                <div class="tablon">
                    <img src="<cms:show img_seccion />">
                    <h3><cms:show titulo /></h3>
                    <p><cms:show descripcion /></p>
                    <a href="<cms:show enlace />"><cms:show boton /></a>
                </div>
                </div>
            </cms:show_repeatable>
        </div>
        <div class="text-center"><h1 class="titulo">Nuestras ultimas publicaciones</h1></div>
        <div class="row">
            <div class="col-md-9">
                <cms:pages masterpage='proyectos.php' limit='5'>
                    <div class="row noticia">
                        <div class="col-md-2">
                            <a href="<cms:show k_page_link />"><img class="img-responsive" src="<cms:show proyecto_image />"></a>
                        </div>
                        <div class="col-md-10">
                            <h2><a href="<cms:show k_page_link />"><cms:show k_page_title /></a> <small><a href="<cms:show k_page_folderlink />">| <cms:show k_page_foldertitle /></a></small></h2>
                            <p>
                                <cms:excerpt count='450' truncate_chars='1' trail="&nbsp;<a class='more' href='<cms:show k_page_link />'>leer mas»</a>">
                                    <cms:do_shortcodes><cms:show contenido /></cms:do_shortcodes>
                                </cms:excerpt>
                            </p>
                        </div>
                    </div>
                    <hr>
                </cms:pages>
                <a href="proyectos" class="btn btn-danger btn-block">Ver todas las publicaciones</a>
            </div>
            <div class="col-md-3">
                <h4 class="text-center">Redes sociales</h4>
                <img class="center-block img-responsive" src="http://placehold.it/200x350">
            </div>
        </div>

        
    </div>
    <?php require_once 'mod/footer.php';?>
    <script src="js/carrusel.js"></script>
</body>

</html>
<?php COUCH::invoke(); ?>
