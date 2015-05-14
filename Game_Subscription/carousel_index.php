<!-- -->
<link href="css/bootstrap.css" rel="stylesheet" />

<!-- Carousel -->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner">
        <div class="item active">
            <img src="images/carousel_1.jpg" alt="Image Error">
        </div>
        <div class="item">
            <img src="images/carousel_2.jpg" alt="Image Error">

        </div>
        <div class="item">
            <img src="images/carousel_3.jpg" alt="Image Error">
        </div>
    </div>
</div>

<!--This portion of the code allows the carousel slide to change slide when the glyphicon was pressed-->
<a class="left carousel-control"  data-slide="prev" onclick="$('#myCarousel').carousel('prev')">
    <span class="glyphicon glyphicon-chevron-left"></span></a>
<a class="right carousel-control"  data-slide="next" onclick="$('#myCarousel').carousel('next')">
    <span class="glyphicon glyphicon-chevron-right"></span></a>
<!--This script will allow the carousel slide to make automatic next of carousel slide-->
<script>
    $('a[data-slide="prev"]').click(function () {
        $('#myCarousel').carousel('prev');
    });

    $('a[data-slide="next"]').click(function () {
        $('#myCarousel').carousel('next');
    });
</script>
</div><!-- /.carousel -->