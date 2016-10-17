<?php require_once 'cms/cms.php'; ?>
<cms:template title='Como ayudar' />
<cms:editable name='grupo_especie' label='Modal donativo en especie' desc='Editar el contenido del modal de donativos en especie' type='group' />
<cms:editable name='grupo_efectivo' label='Modal Donativo en efectivo' desc='Editar el contenido del modal de donativos en efectivo' type='group' />
<cms:editable name='grupo_voluntarios' label='Modal de voluntarios' desc='Editar el contenido del modal de voluntarios' type='group' />
<?php require_once 'mod/head.php'; ?>
</head>
<body>
    <div class="container">
        <?php require_once 'mod/menu.php';?>
        <div class="row">
            <h1 class="titulo decor"><span>Como ayudar</span></h1>
                <a class="col-md-4 col-sm-4 donativo"data-toggle="modal" data-target="#especie" href="">
                    <img src="img/especie.svg">
                    <h2>Donativo en especie</h2>
                </a>
                <a class="col-md-4 col-sm-4 donativo" data-toggle="modal" data-target="#efectivo" href="">
                    <img src="img/efectivo.svg">
                    <h2 class="magenta">Donativo en efectivo</h2>
                </a>
                <a class="col-md-4 col-sm-4 donativo" data-toggle="modal" data-target="#voluntarios" href="">
                    <img src="img/voluntarios.svg">
                    <h2>Programa de voluntarios</h2>
                </a>

        </div>

    </div>
     <?php require_once 'mod/footer.php';?>
    
    <!-- Modal -->
    <div class="modal fade" id="especie" tabindex="-1" role="dialog" aria-labelledby="Modal">
        <div class="modal-dialog modal-content" role="document">
            <div class="modal-header help-head">
                <cms:editable name='t_especie' label='Editar titulo del modal de donativo en especie' type='text' order='1' group='grupo_especie'>
                Donativo en especie
                </cms:editable>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body help-body">
                <cms:editable name='especie' label='Editar modal de donativo en especie' type='nicedit' order='2' group='grupo_especie'>
                Ser una fundación líder en donación de dispositivos electrónicos de alta calidad y funcionalidad, producidos con materiales y tecnologías de última generación que den soluciones a personas con alguna discapacidad.
                </cms:editable>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="efectivo" tabindex="-1" role="dialog" aria-labelledby="Modal">
        <div class="modal-dialog modal-content" role="document">
            <div class="modal-header help-head">
                <cms:editable name='t_efectivo' label='Editar titulo del modal de donativo en efectivo' type='text' order='3' group='grupo_efectivo'>
                Donativo en efectivo
                </cms:editable>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body help-body">
                <cms:editable name='efectivo' label='Editar modal de donativo en efectivo' type='nicedit' order='4' group='grupo_efectivo'>
                Ser una fundación líder en donación de dispositivos electrónicos de alta calidad y funcionalidad, producidos con materiales y tecnologías de última generación que den soluciones a personas con alguna discapacidad.
                </cms:editable>
            </div>
        </div>
    </div>
    
    <!-- Modal -->
    <div class="modal fade" id="voluntarios" tabindex="-1" role="dialog" aria-labelledby="Modal">
        <div class="modal-dialog modal-content" role="document">
            <div class="modal-header help-head">
                <cms:editable name='t_voluntarios' group='grupo_voluntarios' label='Editar titulo del modal de voluntarios' type='text' order='5'>
                Programa de voluntarios
                </cms:editable>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body help-body">
                <cms:editable name='voluntarios' group='grupo_voluntarios' label='Editar modal de Programa de voluntarios' type='nicedit' order='6' >
                Ser una fundación líder en donación de dispositivos electrónicos de alta calidad y funcionalidad, producidos con materiales y tecnologías de última generación que den soluciones a personas con alguna discapacidad.
                </cms:editable>
            </div>
        </div>
    </div>
    
</body>

</html>
<?php COUCH::invoke(); ?>