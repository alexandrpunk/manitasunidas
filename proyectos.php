<?php require_once( 'cms/cms.php' ); ?>
<cms:template title='Proyectos' clonable='1' order='1' dynamic_folders='1'>
    <cms:editable name="importante"
                  label="Nota importante"
                  desc="Marcar como nota importante y mostrarlo en el carrusel de inicio"
                  opt_values='Mostrar'
                  order='0'
                  type='checkbox'
    />
    <cms:editable name='contenido'
                  type='richtext'
                  toolbar='full'
                  order='1'
    />
    <cms:editable name='proyecto_image'
                  label='Imagen del proyecto'
                  desc='imagen para la pubicacion del proyecto'
                  show_preview='1'
                  preview_height='200'
                  type='image'
                  order='2'
    />
    <cms:editable name='proyecto_thumb'
                  label='Miniatura de la imagen'
                  desc='Vista previa de la miniatura de la imagen el proyecto'
                  width='200'
                  heigth='200'
                  show_preview='1'
                  assoc_field='proyecto_image'
                  type='thumbnail'
                  order='3'
    />
</cms:template>

<?php require_once 'mod/head.php';?>
<cms:if k_is_page>
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.css" />
<link type="text/css" rel="stylesheet" href="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials-theme-classic.css" />
<link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">

  
<meta property="og:url"                content="<cms:show k_page_link />" />
<meta property="og:type"               content="article" />
<meta property="og:image"              content="<cms:show proyecto_image />" />
<meta property="og:description"        content="<cms:excerpt count='450'  truncate_chars='1'><cms:do_shortcodes><cms:show contenido /></cms:do_shortcodes></cms:excerpt>" />
<meta property="fb:app_id"             content="1632168933701186" />
</cms:if>
</head>

<body>
    <?php require_once 'mod/fb-script.php';?>
    <?php require_once 'mod/menu.php';?>
    <div class="container">
        <cms:if k_is_page>
            <div class="publicacion row">
                <div class="cabezera">
                        <img src="<cms:show proyecto_image />">
                        <div class="titulo">
                            <h1><cms:show k_page_title /></h1>
<!--                            <h4>Publicado el <cms:date k_page_date format='j-m-Y'/></h4>-->
                        </div>
                    
                </div>
                <hr>
                <cms:do_shortcodes>
                    <cms:show contenido />
                </cms:do_shortcodes>
                <hr>
                <div id="share"></div>
                <h3>Comentarios</h3>
                <div class="fb-comments" data-href="<cms:show k_page_link />" data-width="100%" data-numposts="3"></div>
            </div>
        <cms:else />
            <cms:if k_is_folder>
                    <h1 class="titulo decor"><span>Publicaciones del proyecto: <cms:show k_folder_title /></span></h1>
                    <cms:pages folder=k_folder_name limit='5' paginate='1'>
                    <div class="row noticia">
                        <div class="col-md-2">
                            <a href="<cms:show k_page_link />"><img src="<cms:show proyecto_image />"></a>
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
                    <cms:if k_paginated_bottom>
                        <cms:if k_paginate_link_prev>
                            <a class="btn btn-md btn-mark pull-left" href="<cms:show k_paginate_link_prev />">Noticias recientes</a>
                        </cms:if>
                        <cms:if k_paginate_link_next>
                            <a class="btn btn-md btn-mark strong pull-right" href="<cms:show k_paginate_link_next />">Noticias anteriores</a>
                        </cms:if>
                    </cms:if>
                    </cms:pages>
            <cms:else />    
                <h1 class="titulo decor"><span>Nuestros Proyectos</span></h1>
                <div  class="row">
                    <div class="carousel-proyectos" data-flickity>
                            <cms:folders masterpage='proyectos.php'>
                                <div class="proyecto-cell col-md-4 col-sm-4 col-xs-12">
                                    <a class="gal-folder" href="<cms:show k_folder_link />" >
                                        <img class="center-block img-responsive" src="<cms:show k_folder_image />">
                                        <h4><cms:show k_folder_title /></h4>
                                    </a>
                                </div>
                            </cms:folders>
                    </div>
                </div>
                <h1 class="titulo decor"><span>Ultimas publicaciones</span></h1>
                    <cms:pages masterpage='proyectos.php' limit='5' paginate='1'>
                    <div class="row noticia">
                        <div class="col-md-2">
                            <a href="<cms:show k_page_link />"><img src="<cms:show proyecto_image />"></a>
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
                    <cms:if k_paginated_bottom>
                        <cms:if k_paginate_link_prev>
                            <a class="btn btn-md btn-mark pull-left" href="<cms:show k_paginate_link_prev />">Noticias recientes</a>
                        </cms:if>
                        <cms:if k_paginate_link_next>
                            <a class="btn btn-md btn-mark strong pull-right" href="<cms:show k_paginate_link_next />">Noticias anteriores</a>
                        </cms:if>
                    </cms:if>
                </cms:pages>
            </cms:if>
        </cms:if>
    </div>
     <?php require_once 'mod/footer.php';?>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/jquery.jssocials/1.4.0/jssocials.min.js"></script>
    <script>
    $('.carousel-proyectos').flickity({
        // options
        cellAlign: 'left',
        wrapAround: true,
        freeScroll: true,
        prevNextButtons: true,
        pageDots: false
    });
    
    $("#share").jsSocials({
        shares: ["email", "twitter", "facebook", "googleplus", "whatsapp"]
    });
    </script>    
</body>

</html>
<?php COUCH::invoke(); ?>