<?php require_once 'cms/cms.php'; ?>
<cms:template title='Nosotros' />
<?php require_once 'mod/head.php'; ?>
</head>
<body>
    <div class="container">
        <?php require_once 'mod/menu.php';?>
        <h1 class="titulo decor"><span>Nosotros</span></h1>
        <div class="row vertical-align">
            <div class="vcenter col-md-7 col-sm-12">
                <p class="parrafo">
                     <cms:editable name='nosotros' label='Editar la historia de nostros' type='nicedit'>
                        A lo largo de nuestra historia se han sumado un gran número de personas a nuestros propósitos, desde aquellas que lideran grandes empresas hasta quienes poseen un alto nivel de conocimientos en materias de salud y tecnología, sin olvidarnos del diverso cuerpo de trabajadores voluntarios que, sumando esfuerzos, hacen posible que nos encontremos cerca de la conclusión del desarrollo de dispositivos, volviéndonos capaces de entregarlos a la comunidad de personas con capacidades diferentes, necesitada de atención y tecnología adaptable a sus circunstancias, lo antes posible.
                    </cms:editable>
                </p>
            </div>
            <div class="vcenter col-md-5 col-sm-12">
                <img class="img-responsive img-thumbnail center-block" src="<cms:editable name='imagen_nosotros' label='Imagen que va junto al texto de nosotros' type='image'></cms:editable>">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <h1 class="titulo decor"><span>Mision</span></h1>
                <p class="parrafo text-center">
                    <cms:editable name='mision' label='Editar la mision' type='nicedit'>
                        Incorporar a personas con discapacidad física, a una vida digna y respeto social, mediante la donación de dispositivos medico tecnológicos que aumentan su calidad de vida.
                    </cms:editable>
                </p>

                <h1 class="titulo decor"><span>Vision</span></h1>
                <p class="parrafo text-center">
                    <cms:editable name='vision' label='Editar la vision' type='nicedit'>
                        Ser una fundación líder en donación de dispositivos electrónicos de alta calidad y funcionalidad, producidos con materiales y tecnologías de última generación que den soluciones a personas con alguna discapacidad.
                    </cms:editable>
                </p>
            </div>
            <div class="col-md-6">
                <h1 class="titulo decor"><span>Valores</span></h1>
                <div class="contenedor-flex">
                    <div class="valores">
                        <img class="child img-responsive center-block" src="img/liderazgo.svg">
                        <p>Liderazgo</p>
                    </div>
                    <div class="valores">
                        <img class="img-responsive center-block" src="img/familia.svg">
                        <p>Familia</p>
                    </div>
                    <div class="valores">
                        <img class="child img-responsive center-block" src="img/calidad.svg">
                        <p>Calidad</p>
                    </div>
                    <div class="valores" style="margin-left:70px;">
                        <img class="child img-responsive center-block" src="img/solidaridad.svg">
                        <p>Solidaridad</p>
                    </div>
                    <div class="valores" style="margin-right:70px;">
                        <img class="child img-responsive center-block" src="img/fidelizacion.svg">
                        <p>Fidelización</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'mod/footer.php';?>
</body>
</html>
<?php COUCH::invoke(); ?>
