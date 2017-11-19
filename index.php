<?php $thisPage="homepage"; ?>
<!doctype html>
<html class="no-js" lang="">
  <head>
    <?php @include "partials/head.php" ?>
  </head>
  <body class="<?php echo $thisPage ?>">
    <?php include "partials/oldbrowser.php" ?>
    <?php include "partials/header.php" ?>
    <!-- carousel -->
    <div class="carousel">
      <p class="banner-txt">
        PRODUCTIVITY. ACCURACY. REPEATABILITY.
      </p>
      <ul class="bxslider homepageslider">
        <li class="banner1">dfg</li>
        <li class="banner2">fgf</li>
        <li class="banner3">dfgsdfgsdfg</li>
      </ul>
    </div>
    <!-- services -->
    <section class="services">
      <div class="container">
        <div class="row">
          <div class="col-sm-4">
            <div class="thumbnail">
              <img src="assets/images/homepage/icons_one.svg" alt="">
              <h4>PRODUCT TRAINING /
                <span>SERVICE</h4>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail">
                <img src="assets/images/homepage/icons_two.svg" alt="">
                <h4>COMPLETE COLOR SUPPORT /
                  <span>LAB SERVICES</span></h4>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="thumbnail last">
                <img src="assets/images/homepage/icons_three.svg" alt="">
                <h4>TRAINING SCHOOL</h4>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="clients">
        <div class="container">
          <ul class="imglist">
            <li><img src="assets/images/homepage/11.png" alt=""></li>
            <li><img src="assets/images/homepage/22.png" alt=""></li>
            <li><img src="assets/images/homepage/33.png" alt=""></li>
            <li><img src="assets/images/homepage/44.png" alt=""></li>
            <li><img src="assets/images/homepage/55.png" alt=""></li>
          </ul>

        </div>

      </section>

      <section class="aboutus">
        <div class="container">
          <h3 class="section-heading">ABOUT US</h3>
          <div class="row">
            <div class="col-sm-6">
              <p class="about-quote">
                Advanced equipment & maintenence company limited belives in trues, innovation,quality and synergy and strives for sustainable growth by promoting and providing solutions that enhance productivity, accuracy & repeatability and aims to be the leading
                company in the Middle East in developing, importing, distributing and servicing products that save time, effort & energy
              </p>

            </div>
            <div class="col-sm-6">
              <form action="">

                <div class="form-group">
                  <input class="form-control" type="text" id="example-text-input" placeholder="Name">
                </div>
                <div class="form-group">
                  <input class="form-control" type="search" id="example-search-input" placeholder="Email">
                </div>
                <div class="form-group">
                  <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-signin">Sign in</button>
                </div>
              </form>

            </div>
          </div>
        </div>

      </section>
      <?php include "partials/footer.php" ?>
    </body>
  </html>
