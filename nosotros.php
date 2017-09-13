<?php require_once 'cms/cms.php'; ?>
<cms:template title='Nosotros' />

<cms:repeatable name='equipo' order='5'>
    <cms:editable type='image'
                  name='foto_miembro'
                  label='fotografia'
                  desc='Fotografia del miembro del equipo'
                  show_preview='1'
                  preview_height='200'
    />
    <cms:editable type='text'
                  name='Nombre'
                  label='Nombre'
                  desc='Nombre del miembro del equipo'
    />
    <cms:editable type='text'
                  name='Titulo'
                  label='Titulo'
                  desc='Titulo del miembro del equipo'
    />
    <cms:editable type='text'
                  name='Puesto'
                  label='Puesto'
                  desc='Puesto del miembro del equipo'
    />
</cms:repeatable>

<cms:repeatable name='servicios' order='6'>
    <cms:editable type='image'
                  name='imagen_servicio'
                  label='imagen'
                  desc='Imagen descriptiva del servicio'
                  show_preview='1'
                  preview_height='200'
    />
    <cms:editable type='text'
                  name='nombre'
                  label='Nombre del servicio'
                  desc='Nombre del servicio'
    />
    <cms:editable type='text'
                  name='descripcion'
                  label='Descripcion del servicio'
                  desc='Descripcion del servicio'
    />
    />
</cms:repeatable>

<?php require_once 'mod/head.php'; ?>
</head>
<body>
    <?php require_once 'mod/menu.php';?>
    <div class="container">
        <h1 class="titulo decor"><span>Nosotros</span></h1>
        <div class="row vertical-align">
            <div class="vcenter col-md-7 col-sm-12">
                <p class="parrafo">
                     <cms:editable name='nosotros' label='Editar la historia de nostros' type='textarea' order='1' />
                </p>
            </div>
            <div class="vcenter col-md-5 col-sm-12">
                <img class="img-responsive img-thumbnail center-block" src="<cms:editable name='imagen_nosotros' label='Imagen que va junto al texto de nosotros' type='image' />">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <h1 class="titulo"><span>Mision</span></h1>
                <p class="parrafo text-center">
                    <cms:editable name='mision' label='Editar la mision' type='textarea' order='2' />
                </p>
            </div>
            <div class="col-md-4">
                <h1 class="titulo"><span>Vision</span></h1>
                <p class="parrafo text-center">
                    <cms:editable name='vision' label='Editar la vision' type='textarea' order='3' />
                </p>
            </div>
            <div class="col-md-4">
                <h1 class="titulo"><span>Valores</span></h1>
                <p class="parrafo text-center">
                    <cms:editable name='valores' label='Editar los valores' type='textarea' order='4' />
                </p>
            </div>
        </div>
        
        <h1 class="titulo">Nuestro equipo de trabajo</h1>
        <div class="row">
            <cms:show_repeatable 'equipo' >
                <div class="col-md-4 col-sm-4 miembro">
                    <div class="foto" style="background-image:url(<cms:show foto_miembro />);"></div>
                    <h5><cms:show Nombre /></h5>
                    <p><cms:show Titulo /></p>
                    <p><small><cms:show Puesto /></small></p>
                </div>
            </cms:show_repeatable>
        </div>
        
        <h1 class="titulo">Nuestros servicios</h1>
        <div class="row">
            <cms:show_repeatable 'servicios' >
                <div class="col-md-4">
                <div class="tablon ">
                    <img src="<cms:show imagen_servicio />">
                    <h3><cms:show nombre /></h3>
                    <p><cms:show descripcion /></p>
                </div>
            </div>
            </cms:show_repeatable>
        </div>
        
    </div>
    <?php require_once 'mod/footer.php';?>
</body>
</html>
<?php COUCH::invoke(); ?>