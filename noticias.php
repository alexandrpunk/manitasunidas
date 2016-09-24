<?php require_once( 'cms/cms.php' ); ?>
<cms:template title='Noticias' clonable='1' order='1' searchable='1'>
    <cms:config_list_view searchable='1' />
    <cms:editable name='contenido' type='richtext' searchable='1' toolbar='full'/>
    <cms:editable name='publicacion_image'
                    label='Imagen de la publicacion'
                    desc='imagen para la pubicacion'
                    show_preview='1'
                    preview_height='200'
                    type='image'
    />
     <cms:folder name="importantes" title="importantes" />
</cms:template>

<?php require_once 'mod/head.php';?>

<link rel="stylesheet" href="css/jssocials.css">
<link rel="stylesheet" href="css/jssocials-theme-classic.css">
<link rel="stylesheet" href="css/flexslider.css">
<link rel="stylesheet" href="https://npmcdn.com/flickity@1.2/dist/flickity.min.css">

  
<meta property="og:url"                content="<cms:show k_page_link />" />
<meta property="og:type"               content="article" />
<meta property="og:image"              content="<cms:show publicacion_image />" />
<meta property="og:description"        content="<cms:excerpt count='450'  truncate_chars='1'><cms:do_shortcodes><cms:show contenido /></cms:do_shortcodes></cms:excerpt>" />
<meta property="fb:app_id"             content="1632168933701186" />
</head>
<body>
     <?php require_once 'mod/fb-script.php';?>
    <div class="container">
        <?php require_once 'mod/menu.php';?>
        <cms:if k_is_page>
            <div class="publicacion row">
                <h1><cms:show k_page_title /></h1>
                <h4>Publicado el <cms:date k_page_date format='j-m-Y'/></h4>
                <img src="<cms:show publicacion_image />" class="img-header center-block">
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
            <h1 class="titulo decor"><span>Noticias</span></h1>
                <cms:pages masterpage='noticias.php' limit='5' paginate='1'>           
                <div class="row noticia">
                    <div class="col-md-2">
                        <a href="<cms:show k_page_link />"><img src="<cms:show publicacion_image />"></a>
                    </div>
                    <div class="col-md-10">
                        <a class="titulo" href="<cms:show k_page_link />"><h2><cms:show k_page_title /></h2></a>
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

    </div>
     <?php require_once 'mod/footer.php';?>
</body>

</html>
<?php COUCH::invoke(); ?>