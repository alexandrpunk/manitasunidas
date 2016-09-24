<?php require_once( 'cms/cms.php' ); ?>

<cms:template title='Galeria' gallery='1' order='3' dynamic_folders='1'>
    
    <cms:editable   name="gg_image"
                    label="Imagen"
                    desc="Indica la imagen que quieres subir aqui"
                    show_preview='1'
                    preview_height='200'
                    type="image"
    />

    <cms:editable
                    name="gg_thumb"
                    assoc_field="gg_image"
                    label="Miniatura de la imagen"
                    desc="Miniatura de la imagen"
                    width='250'
                    height='250'
                    crop='1'
                    type="thumbnail"
    />
</cms:template>
<?php require 'mod/head.php';?>
<link href="css/lightbox.min.css" rel="stylesheet">

</head>
<body>
    <div class="container">
        <?php require_once 'mod/menu.php';?>
        <div class="row">
            <cms:if k_is_folder>
                <h1 class="titulo decor"><span>Galeria: <cms:show k_folder_title /></span></h1>
                <cms:pages folder=k_folder_name>
                    <a href="<cms:show gg_image />" class="col-md-3 col-sm-3 gal"  data-title="<cms:show k_page_title />" data-lightbox="image-1" >
                        <img src="<cms:show gg_thumb />">
                    </a>
                </cms:pages>
            <cms:else />   
                <h1 class="titulo decor"><span>Galeria</span></h1>
                <cms:folders hierarchical = '1' paginate = '1' limit='3'>
                    <cms:if k_paginated_top >
                    <div class="row">
                    </cms:if>
                    <a class="col-md-3 col-sm-3 folder-g" href="<cms:show k_folder_link />">
                        <img src="<cms:show k_folder_image />">
                        <h2><cms:show k_folder_title /></h2>
                    </a>                                     
                <cms:if k_paginated_bottom >
                    </div>
                    <hr/>                                       
                        <cms:if k_paginate_link_prev >
                            <a class="btn btn-info btn-gal pull-left" href="<cms:show k_paginate_link_prev />">Fotografias recientes</a>
                        </cms:if>
                        <cms:if k_paginate_link_next >
                            <a class="btn btn-info btn-gal pull-right" href="<cms:show k_paginate_link_next />">Fotografias anteriores</a>
                        </cms:if>
                </cms:if>
                </cms:folders>
            </cms:if>
        </div>
    </div>
    <?php require_once 'mod/footer.php';?>
    <script src="js/lightbox.min.js"></script>
</body>

</html>
<?php COUCH::invoke(); ?>