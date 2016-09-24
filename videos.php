<?php require_once'cms/cms.php'; ?>

<cms:template title='Videos' clonable='1'  order='4'>
    <cms:editable   name='descripcion'
                    desc='descripcion del video'
                    type='richtext'
    />
    <cms:editable   name='video'
                    desc='colocar el codigo del video del testimonio'
                    type='text'
    />
</cms:template>
<?php require 'mod/head.php';?>
</head>
<body>
    <div class="container">
        <?php require_once 'mod/menu.php';?>
        <div class="row zero">
            <h1 class="titulo decor"><span>Videos</span></h1>
            <cms:pages masterpage="videos.php" limit='1' paginate='1'>
                <div class="row zero" >
                    <div class="col-md-4 col-sm-4">
                        <iframe src="https://www.youtube.com/embed/pgo71qR8nN8" frameborder="0" allowfullscreen></iframe>
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h3 class=""><cms:show k_page_title /></h3>
                        <cms:show descripcion />
                    </div>   
                    <hr>
                </div>
                <cms:if k_paginated_bottom >
                    <cms:if k_paginate_link_prev >
                        <a class="btn btn-md btn-default pull-right" href="<cms:show k_paginate_link_prev />">videos recientes</a>
                    </cms:if>
                    <cms:if k_paginate_link_next >
                        <a class="btn btn-md btn-default strong pull-left" href="<cms:show k_paginate_link_next />">videos anteriores</a>
                    </cms:if>
                </cms:if>
            </cms:pages>
        </div>
    </div>
    <?php require_once 'mod/footer.php';?>
    <script>
function _debounce(func, wait, immediate) {  
  var timeout;
  return function() {
    var context = this, args = arguments;
    var later = function() {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    var callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

function resizeVideos() {  
  var ASPECT_RATIO = 9/16; // 16:9
  var isVideo = /(youtube)|(vimeo)/i;

  $("iframe").filter(function() {
    return isVideo.test($(this).attr('src'));
  }).each(function() {
    var newWidth     = $(this).parent().width();
    var newHeight    = (ASPECT_RATIO * newWidth);

    $(this).attr('width', newWidth.toString());
    $(this).attr('height', newHeight.toString());
  });
}

$(document).ready(function() {
  resizeVideos();

  $(window).resize(_debounce(resizeVideos, 70));
});
    </script>
</body>

</html>
<?php COUCH::invoke(); ?>