<?php require_once 'cms/cms.php'; ?>
<cms:template title='Educacion' />
<cms:repeatable name='cursos'>
    <cms:editable type='image'
                  name='imagen_curso'
                  label='imagen'
                  desc='Imagen descriptiva del curso'
                  show_preview='1'
                  preview_height='200'
    />
    <cms:editable type='text'
                  name='nombre'
                  label='Nombre del curso'
                  desc='Nombre del servicio'
    />
    <cms:editable type='file'
                  name='archivo'
                  label='Documento con la informacion del curso'
                  desc='Documento con la informacion del curso'
    />
    />
</cms:repeatable>
<?php require_once 'mod/head.php'; ?>
</head>
<body>
    <?php require_once 'mod/menu.php';?>
    <div class="container">
        <h1 class="titulo">Programas educativos</h1>
        <div class="row">
            <div class="col-md-4">
                <img class="img-responsive" src="<cms:editable name='imagen_educacion' label='Imagen que va junto al texto de educacion' type='image' />">
            </div>
            <div class="col-md-8">
                <p class="parrafo">
                    <cms:editable name='descripcion' label='Texto descriptivo de la pagina de educacion' type='textarea' />
                </p>
            </div>
        </div>
        <h3 class="text-center">Listado de cursos educativos</h3>
        <hr>
        <div class="row">
            <cms:show_repeatable 'cursos'>
                <a class="col-md-3 curso" href="<cms:show archivo />" target="_blank">
                    <img class="img-responsive" src="<cms:show imagen_curso />">
                    <h4><cms:show nombre /></h4>
                </a>
            </cms:show_repeatable>
        </div>
    </div>
    <?php require_once 'mod/footer.php';?>
</body>
</html>
<?php COUCH::invoke(); ?>