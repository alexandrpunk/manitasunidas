<?php
require_once 'cms/cms.php';
require_once 'inc/comentar.php';
$titulo="Contacto";
require_once 'mod/head.php';
?>
</head>
<body>
    <?php require_once 'mod/menu.php'; ?>
    <div class="container">
        <div class="row">
            <div class="text-center"><h1 class="titulo decor"><span>Contactanos</span></h1></div>
            <div class="col-md-8">
                <div class="google-maps">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d905.2475233495576!2d-107.39998047083841!3d24.830012399004254!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x86bcd7591edf4173%3A0x9723ba289b2c2d10!2sGALLBO+-+Especialistas+en+Reclamaci%C3%B3n+de+Seguros!5e0!3m2!1ses-419!2smx!4v1483823587611" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <address class="adress-style">
                            <strong>3D Hatch, Inc.</strong><br>
                            Blvd. Enrique Sánchez Alonso #2249-2<br>
                            Col. Parque Alameda, Culiacán, Sin., México.<br>
                            C.P. 80030
                        </address>
                    </div>
                    <div class="col-md-6">
                        <address class="adress-style">
                            <strong>Telefonos:</strong><br>
                            (667) 715-2166 / 715-1714<br>
                            <strong>Lada sin costo:</strong> 01 800 509 1985<br>
                            <strong>Email:</strong> info@3dsolutions.mx
                        </address>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
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
                    <div class="text-center"><button type="submit" class="btn btn-lg btn-danger btn-gal">Enviar</button></div>
                </form>
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