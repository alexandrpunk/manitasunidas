<?php
$titulo="Contacto";
require_once 'cms/cms.php';
require_once 'mod/head.php';
?>
</head>
<body>
    <div class="container">
        <?php require_once 'mod/menu.php';?>
        <div class="row">
            <h1 class="titulo raleway decor"><span>Contactanos</span></h1>
            <div class="col-md-6">
                <form>
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" placeholder="Nombre">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <label for="comentario">Comentario</label>
                        <textarea id="comentario" class="form-control" rows="8"></textarea>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-lg btn-primary">Enviar</button></div>
                </form>
            </div>
            <div class="col-md-6">
                <div class="google-maps">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1810.4659275770932!2d-107.40239774193466!3d24.83200393023847!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcda16b63ca53f%3A0x1fc009d85fd0ca39!2sFrida+Khalo+2411%2C+Desarrollo+Urbano+Tres+R%C3%ADos%2C+80020+Culiac%C3%A1n+Rosales%2C+Sin.%2C+M%C3%A9xico!5e0!3m2!1ses-419!2sus!4v1472318242055" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php require_once 'mod/footer.php';?>
</body>

</html>
<?php COUCH::invoke(); ?>