<?php

/*

    Template Name: الرئيسية

*/


?>

<?php get_header(); ?>

<!--Slider-->
<section class="sliders">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory')?>/images\slider\img1.jpg" alt="First slide" height="500px">
          <div class="carousel-caption des">
            <h1>مطابخ هوم ديزاين</h1>
            <p>اجعل مطبخك مصدراً للراحة وللسعادة
              بالبيت عن طريق تحقيق المعادلة الصعبة
              لمطبخ عملي بشكل جذاب</p>

            <a href="#">
              <button type="button" class="btn">المزيد ...
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </button>

            </a>

          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory')?>/images\slider\img2.jpg" alt="Second slide" height="500px">
          <div class="carousel-caption des">
          <h1>مطابخ هوم ديزاين</h1>
            <p>اجعل مطبخك مصدراً للراحة وللسعادة
              بالبيت عن طريق تحقيق المعادلة الصعبة
              لمطبخ عملي بشكل جذاب</p>


            <a href="#">
              <button type="button" class="btn">المزيد ...
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </button>

            </a>

          </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="<?php bloginfo('stylesheet_directory')?>/images\slider\img3.jpg" alt="Third slide" height="500px">
          <div class="carousel-caption des">
          <h1>مطابخ هوم ديزاين</h1>
            <p>اجعل مطبخك مصدراً للراحة وللسعادة
              بالبيت عن طريق تحقيق المعادلة الصعبة
              لمطبخ عملي بشكل جذاب</p>


            <a href="#">
              <button type="button" class="btn">المزيد ...
                <span></span>
                <span></span>
                <span></span>
                <span></span>
              </button>

            </a>

          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
  </section>
  <!--Start portfolio-->
    <section class="portfolio">
      <div class="container">
        <div class="row">
        <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <h2 class="gallery-title wow swing" data-wow-duration="1s" data-wow-iteration="5" data-wow-offset="100" data-wow-delay="1s" style="visibility: visible; animation-duration: 1s; animation-delay: 1s; animation-iteration-count: 3; animation-name: swing;">المنتـــجات</h2>
        </div>

        <div class="Product col-lg-12 col-md-12 col-sm-12 col-xs-12 wow fadeIn" data-wow-delay="1.4s">
            <button class="btn btn-default filter-button" data-filter="all">كل المطابخ</button>
            <button class="btn btn-default filter-button" data-filter="Aluminum">مطابخ ألمنيـــوم</button>
            <button class="btn btn-default filter-button" data-filter="Wood">مطابخ خشبية</button>
            <button class="btn btn-default filter-button" data-filter="Aluwood">مطابخ خشب و ألمنيـــوم</button>
        </div>
        <br>
        
              <div class="gallery_product col-lg-4 col-md-6 col-sm-12 col-xs-12 filter Aluminum wow slideInLeft" style="visibility: visible; animation-duration: 2s; animation-name: slideInLeft;" data-wow-delay="1.6s">
                  <a href="مطابخ-ألومنيوم"><img src="<?php bloginfo('stylesheet_directory')?>/images\aluminium\img1.jpg" class="img-responsive" alt="مطابخ الومنيوم بشركة هوم ديزاين"></a>
              </div>

              <div class="gallery_product col-lg-4 col-md-6 col-sm-12 col-xs-12 filter Aluminum wow slideInLeft" style="visibility: visible; animation-duration: 2s; animation-name: slideInLeft;" data-wow-delay="1.6s">
                <a href="مطابخ-ألومنيوم"><img src="<?php bloginfo('stylesheet_directory')?>/images\aluminium\img2.jpg" class="img-responsive"  alt="مطابخ الومنيوم بشركة هوم ديزاين"></a>
             </div>

              <div class="gallery_product col-lg-4 col-md-6 col-sm-12 col-xs-12 filter Aluminum wow slideInLeft" style="visibility: visible; animation-duration: 2s; animation-name: slideInLeft;" data-wow-delay="1.6s">
              <a href="مطابخ-ألومنيوم"><img src="<?php bloginfo('stylesheet_directory')?>/images\aluminium\img3.jpg" class="img-responsive"  alt="مطابخ الومنيوم بشركة هوم ديزاين"></a>
              </div>

             <div class="gallery_product col-lg-4 col-md-6 col-sm-12 col-xs-12 filter Aluminum wow slideInLeft" style="visibility: visible; animation-duration: 2s; animation-name: slideInLeft;" data-wow-delay="1.6s">
            <a href="مطابخ-ألومنيوم"><img src="<?php bloginfo('stylesheet_directory')?>/images\aluminium\img4.jpg" class="img-responsive"  alt="مطابخ الومنيوم بشركة هوم ديزاين"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-6 col-sm-12 col-xs-12 filter Wood wow slideInUp" style="visibility: visible; animation-duration: 2s; animation-name: slideInUp;" data-wow-delay="1.8s">
                <a href="مطابخ-خشبية"><img src="<?php bloginfo('stylesheet_directory')?>/images\wood\img1.jpg" class="img-responsive"  alt="مطابخ خشبية بشركة هوم ديزاين"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-6 col-sm-12 col-xs-12 filter Wood wow slideInUp" style="visibility: visible; animation-duration: 2s; animation-name: slideInUp;" data-wow-delay="1.8s">
              <a href="مطابخ-خشبية"><img src="<?php bloginfo('stylesheet_directory')?>/images\wood\img2.jpg" class="img-responsive" alt="مطابخ خشبية بشركة هوم ديزاين"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-6 col-sm-12 col-xs-12 filter Wood wow slideInUp" style="visibility: visible; animation-duration: 2s; animation-name: slideInUp;" data-wow-delay="1.8s">
              <a href="مطابخ-خشبية"><img src="<?php bloginfo('stylesheet_directory')?>/images\wood\img3.jpg" class="img-responsive" alt="مطابخ خشبية بشركة هوم ديزاين"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-6 col-sm-12 col-xs-12 filter Wood wow slideInUp" style="visibility: visible; animation-duration: 2s; animation-name: slideInUp;" data-wow-delay="1.8s">
              <a href="مطابخ-خشبية"><img src="<?php bloginfo('stylesheet_directory')?>/images\wood\img4.jpg" class="img-responsive" alt="مطابخ خشبية بشركة هوم ديزاين"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-6 col-sm-12 col-xs-12 filter Aluwood wow slideInDown" style="visibility: visible; animation-duration: 2s; animation-name: slideInDown;" data-wow-delay="2s">
                <a href="مطابخ-خشبنيوم"><img src="<?php bloginfo('stylesheet_directory')?>/images\Aluwood\img1.jpg" class="img-responsive" alt="مطابخ خشبنيوم بشركة هوم ديزاين"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-6 col-sm-12 col-xs-12 filter Aluwood wow slideInDown" style="visibility: visible; animation-duration: 2s; animation-name: slideInDown;" data-wow-delay="2s">
              <a href="مطابخ-خشبنيوم"><img src="<?php bloginfo('stylesheet_directory')?>/images\Aluwood\img2.jpg" class="img-responsive" alt="مطابخ خشبنيوم بشركة هوم ديزاين"></a>
            </div>

            <div class="gallery_product col-lg-4 col-md-6 col-sm-12 col-xs-12 filter Aluwood wow slideInDown" style="visibility: visible; animation-duration: 2s; animation-name: slideInDown;" data-wow-delay="2s">
              <a href="مطابخ-خشبنيوم"><img src="<?php bloginfo('stylesheet_directory')?>/images\Aluwood\img3.jpg" class="img-responsive" alt="مطابخ خشبنيوم بشركة هوم ديزاين"></a>
            </div>


        
        </div>
    </div>
    </section>



<?php get_footer(); ?>
