<?php require_once'cms/cms.php'; ?>

<cms:template title='Videos' clonable='1'  order='4'>
    <cms:editable   name='descripcion'
                    desc='descripcion del video'
                    type='richtext'
    />
    <cms:editable   name='video'
                    desc='colocar el codigo del video del testimonio'
                    type='text'
    />
</cms:template>
<?php require 'mod/head.php';?>
</head>
<body>
    <div class="container">
        <?php require_once 'mod/menu.php';?>
        <div class="row zero">
            <h1 class="titulo decor"><span>Videos</span></h1>
            <cms:pages masterpage="videos.php" limit='5' paginate='1'>
                <div class="row noticia" >
                    <div class="col-md-3 col-sm-3">
                        <div class="embed-responsive embed-responsive-4by3">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<cms:show video />" frameborder="0" allowfullscreen></iframe>
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-9">
                        <h2 class="titulo"><cms:show k_page_title /></h2>
                        <cms:show descripcion />
                    </div>   
                </div>
                <hr>
                <cms:if k_paginated_bottom >
                    <cms:if k_paginate_link_prev >
                        <a class="btn btn-gal btn-info pull-left" href="<cms:show k_paginate_link_prev />">videos recientes</a>
                    </cms:if>
                    <cms:if k_paginate_link_next >
                        <a class="btn btn-gal btn-info strong pull-right" href="<cms:show k_paginate_link_next />">videos anteriores</a>
                    </cms:if>
                </cms:if>
            </cms:pages>
        </div>
    </div>
    <?php require_once 'mod/footer.php';?>
</body>

</html>
<?php COUCH::invoke(); ?>