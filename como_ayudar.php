<?php require_once 'cms/cms.php'; ?>
<cms:template title='Como ayudar' />
<?php require_once 'mod/head.php'; ?>
</head>
<body>
    <div class="container">
        <?php require_once 'mod/menu.php';?>
        <div class="row">
            <h1 class="titulo decor"><span>Como ayudar</span></h1>
            <div class="col-md-4  donativo">
                <div class="circle magenta parent">
                    <div class="child"><img class="img-responsive center-block" src="img/especie.svg"></div>
                </div>
                <h2>Donativo en especie</h2>
            </div>
            <div class="col-md-4 col-sm-4 donativo">
                <div class="circle parent">
                    <div class="child"><img class="img-responsive center-block" src="img/efectivo.svg"></div>
                </div>
                <h2 style="color:#E92A6F;">Donativo en efectivo</h2>
            </div>
            <div class="col-md-4 col-sm-4 donativo">
                <div class="circle magenta parent">
                    <div class="child"><img class="img-responsive center-block" src="img/voluntarios.svg"></div>
                </div>
                <h2>Programa de voluntarios</h2>
            </div>
        </div>

    </div>
     <?php require_once 'mod/footer.php';?>
</body>

</html>
<?php COUCH::invoke(); ?>