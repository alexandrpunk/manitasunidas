<?php
require_once 'cms/cms.php';
require_once 'inc/comentar.php';
$titulo="Contacto";
require_once 'mod/head.php';
?>
</head>
<body>
    <div class="container">
        <?php require_once 'mod/menu.php'; ?>
        <div class="row">
            <h1 class="titulo decor"><span>Contactanos</span></h1>
            <div class="col-md-6">
            <?php
                if(!empty($_SESSION ['errors'])){
                    echo '
                    <div class="alert alert-danger alert-dismissible fade in" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    <strong>'.nl2br($_SESSION ['errors']).'</strong>
                    </div>';
                }
            ?>
                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>"  method="POST" class="form-manitas" data-toggle="validator" role="form">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input name="nombre" type="text" class="form-control" id="nombre" placeholder="Nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input name="email" type="email" class="form-control" id="email" placeholder="Email" required>
                    </div>
                    <div class="form-group">
                        <label for="comentario">Comentario</label>
                        <textarea name="comentario" id="comentario" class="form-control" rows="8" required></textarea>
                    </div>
                    <div class="form-group">
                        <label for="captcha" data-toggle="tooltip" data-placement="right" title="Introdusca el codigo de seguridad de letras y numeros que aparecen en la siguiente imagen">Introduzca el código de verificación:</label>
                        <p><img src="inc/captcha_code_file.php?rand=<?php echo rand(); ?>"
                        id="captchaimg" ></p>
                        <input class="form-control" id="captcha" name="captcha" type="text" style="width:200px;" required autocomplete="off">
                        <small>¿No puedes leer la imagen? Haz click <a href='javascript: refreshCaptcha();'>aquí</a> para refrescarla</small> <hr/>
                    </div>
                    <div class="text-center"><button type="submit" class="btn btn-lg btn-info btn-gal">Enviar</button></div>
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
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.5/validator.min.js"></script>
    <script>
        function refreshCaptcha() {
            var img = document.images['captchaimg'];
            img.src = img.src.substring(0,img.src.lastIndexOf("?"))+"?rand="+Math.random()*1000;
        }
    </script>
</body>
</html>
<?php COUCH::invoke(); ?>