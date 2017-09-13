<?php require_once( 'cms/cms.php' ); ?>
<cms:template title='Oficina de Trasnferencia de Tecnologia' />
<?php require_once 'mod/head.php';?>
</head>
<body>
    <?php require_once 'mod/menu.php';?>
    <div class="container">
        <h1 class="titulo">Oficina de Transferencia de Tecnologia</h1>
        <div class="row ott">
            <cms:editable name='ott' label='Editar el contenido de la pagina de OTT' type='richtext'>
            <p class="parrafo">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec volutpat velit vitae pulvinar dapibus. Sed varius venenatis dictum. Duis mollis nisi at purus tempor, vel eleifend nisl efficitur. Vestibulum urna neque, porttitor et nunc in, ullamcorper tincidunt justo. Integer vel pharetra mauris. Aliquam sollicitudin elit at odio tincidunt, sit amet dictum turpis pharetra. Aliquam volutpat ut leo ut dapibus. Suspendisse potenti. Sed in vestibulum orci.
                Duis non sapien ut justo congue efficitur. Vestibulum sagittis dolor ut enim accumsan, a consectetur diam pharetra. Aliquam eu dui eget metus cursus dapibus. Duis ut tellus in nisi suscipit ultricies non ac augue. Morbi sed enim vitae eros bibendum vehicula vel quis ex. Duis vulputate odio arcu. Quisque ac convallis urna. Nulla dapibus elit at gravida elementum. Nunc dictum eget orci nec consequat. Aliquam sit amet metus urna. Integer augue risus, consectetur in lorem mollis, ultrices blandit mi. Suspendisse sed sem enim. Nam vehicula augue quis interdum ullamcorper. Phasellus convallis in ipsum eu convallis. Phasellus vitae justo quis felis dictum interdum vel nec nibh. Ut mi leo, dignissim sed posuere id, lobortis eu felis.
            </p>
            </cms:editable>
        </div>
    </div>
     <?php require_once 'mod/footer.php';?>
</body>
</html>
<?php COUCH::invoke(); ?>