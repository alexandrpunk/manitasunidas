<!--menu-->
<div class="row vertical-align">
    <div class="col-md-3 col-sm-3">
        <a href="index" class="logo"><img src="img/manitas_wt.svg"></a>
    </div>
    <div class="vcenter col-md-9 col-sm-9 menu">
        <ul>
            <a class="<cms:if k_template_name=='index.php'>current</cms:if>" href="index"><li>inicio</li></a>
            <a class="borde-magenta <cms:if k_template_name=='nosotros.php'>current</cms:if>" href="nosotros"><li>nosotros</li></a>
            <a class="<cms:if (k_template_name=='noticias.php')>current</cms:if>" href="noticias"><li>noticias</li></a>
            <a class="borde-magenta <cms:if k_template_name=='como_ayudar.php'>current</cms:if>" href="como_ayudar"><li>como ayudar</li></a>
            <a class="<cms:if (k_template_name=='multimedia.php')||(k_template_name=='galeria.php')||(k_template_name=='videos.php')>current</cms:if>" href="multimedia"><li>multimedia</li></a>
            <a class="borde-magenta <cms:if k_template_name=='contacto.php'>current</cms:if>" href="contacto"><li>contacto</li></a>
        </ul>
    </div>
</div>
