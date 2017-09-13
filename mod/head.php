<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 maximum-scale=1.0, user-scalable=no">
    <meta name="description" content="Manitas unidas I.A.P., brindando ayuda a personas con alguna discapacidad física.">
    <meta name="author" content="Jesus Alejandro Sandoval Lopez">
    <link rel="shortcut icon" href="img/favicon.ico">
    <title>
        3D Solutions -
        <?php
        if(isset($titulo)){
            echo $titulo;
        }else
        echo'   <cms:if k_template_is_clonable>
                    <cms:if k_is_page>
                        <cms:show k_page_title />
                    <cms:else />
                        <cms:if k_is_folder>
                           <cms:show k_template_title />: <cms:show k_folder_title />
                        <cms:else />
                            <cms:show k_template_title />
                        </cms:if>
                    </cms:if>
                <cms:else />
                    <cms:show k_template_title />
                </cms:if>';
        ?>
    </title>
    <?php require_once 'styles.php'; ?>
