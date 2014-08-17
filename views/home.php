<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="shortcut icon" href="assets/ico/favicon.ico">

  <title>Vote Yes On Amendment 2</title>

  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/js/fancybox/jquery.fancybox.css" rel="stylesheet" />

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->

  <!-- Bootstrap core JavaScript
  ================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <script type="text/javascript"src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>
  <script src="assets/js/classie.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
  <script src="assets/js/smoothscroll.js"></script>
  <script src="assets/js/jquery.stellar.min.js"></script>
  <script src="assets/js/fancybox/jquery.fancybox.js"></script>
  <script src="assets/js/app.js"></script>
  <script>
  $(function(){
    $.stellar({
      horizontalScrolling: false,
      verticalOffset: 40
    });
  });
  </script>

  <script type="text/javascript">
  $(function() {
    //    fancybox
    jQuery(".fancybox").fancybox();
  });
  </script>

</head>

<body data-spy="scroll" data-offset="0" data-target="#theMenu">

  <!-- Menu -->
  <nav class="menu" id="theMenu">
    <div class="menu-wrap">
      <h1 class="logo"><a href="index.html#home">Vote On 2</a></h1>
      <i class="fa fa-times menu-close"></i>
      <a href="#home" class="smoothScroll">Reminder</a>
      <a href="#about" class="smoothScroll">Location</a>
      <a href="#portfolio" class="smoothScroll">Information</a>
      <a href="#services" class="smoothScroll">Services</a>
      <a href="#contact" class="smoothScroll">Contact</a>
      <a href="#"><i class="fa fa-facebook"></i></a>
      <a href="#"><i class="fa fa-twitter"></i></a>
      <a href="#"><i class="fa fa-dribbble"></i></a>
      <a href="#"><i class="fa fa-envelope"></i></a>
    </div>

    <!-- Menu button -->
    <div id="menuToggle"><i class="fa fa-bars"></i></div>
  </nav>

  <section id="home" name="home"></section>
  <div id="headerwrap">
    <div class="container">
      <div class="row">
        <div class="col-md-10 center-block">
          <h1>Get Reminded To Vote On Amendment 2</h1>
        </div>

        <div class="col-md-6 col-sm-6 center-block subscribe">

          <p style="color: #ffffff; text-shadow: 2px 2px 2px #000; font-size: 20px; margin: 35px 0px 14px 0px;">
            Enter your phone number to get reminded when to vote.
          </p>

          <form class="form-horizontal" role="form" action="subscribe.php" id="subscribeForm" method="POST">
            <div class="form-group">
              <div class="col-md-7 col-sm-6 col-sm-offset-1 col-md-offset-0">
                <input class="form-control input-lg" name="phone" type="phone" id="address" placeholder="Enter your phone number" required="required">
              </div>
              <div class="col-md-3 col-sm-3">
                <button type="submit" class="btn btn-success btn-lg">REMIND ME</button>
              </div>
            </div>
          </form>
          <span id="result" class="alertMsg"></span>
        </div>

      </div>
    </div>
  </div>

  <section id="about" name="about"></section>
  <div id="aboutwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8-offset-2 centered" style="margin-bottom: 46px;">
          <h1>EARLY VOTING LOCATIONS</h1>
          <p>Early Voting will be open from Aug. 11-24 for the Aug. 26 Primary Election.</p>
          <h3 style="margin-top: 10px;">Why wait? Vote early!</h3>
        </div>

        <div class="col-lg-3 name">
          <ul id="marker_list"></ul>
        </div>

        <div class="col-lg-9 name-desc">
          <div id="map_canvas"></div>
        </div>

      </div><!-- /row -->
    </div><!-- /container -->
  </div><!-- /aboutwrap -->

  <! -- ABOUT SEPARATOR -->
  <div class="sep about" data-stellar-background-ratio="0.5"></div>

  <! -- PORTFOLIO SECTION -->
  <section id="portfolio" name="portfolio"></section>
  <div id="portfoliowrap">
    <div class="container">
      <div class="row">
        <h1>SOME OF MY LATEST WORKS</h1>
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
          <div class="project-wrapper">
            <div class="project">
              <div class="photo-wrapper">
                <div class="photo">
                  <a class="fancybox" href="assets/img/portfolio/port04.jpg"><img class="img-responsive" src="assets/img/portfolio/port04.jpg" alt=""></a>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div><!-- col-lg-4 -->

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
          <div class="project-wrapper">
            <div class="project">
              <div class="photo-wrapper">
                <div class="photo">
                  <a class="fancybox" href="assets/img/portfolio/port05.jpg"><img class="img-responsive" src="assets/img/portfolio/port05.jpg" alt=""></a>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div><!-- col-lg-4 -->

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
          <div class="project-wrapper">
            <div class="project">
              <div class="photo-wrapper">
                <div class="photo">
                  <a class="fancybox" href="assets/img/portfolio/port06.jpg"><img class="img-responsive" src="assets/img/portfolio/port06.jpg" alt=""></a>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div><!-- col-lg-4 -->
      </div><!-- /row -->

      <div class="row mt">
        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
          <div class="project-wrapper">
            <div class="project">
              <div class="photo-wrapper">
                <div class="photo">
                  <a class="fancybox" href="assets/img/portfolio/port01.jpg"><img class="img-responsive" src="assets/img/portfolio/port01.jpg" alt=""></a>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div><!-- col-lg-4 -->

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
          <div class="project-wrapper">
            <div class="project">
              <div class="photo-wrapper">
                <div class="photo">
                  <a class="fancybox" href="assets/img/portfolio/port02.jpg"><img class="img-responsive" src="assets/img/portfolio/port02.jpg" alt=""></a>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div><!-- col-lg-4 -->

        <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 desc">
          <div class="project-wrapper">
            <div class="project">
              <div class="photo-wrapper">
                <div class="photo">
                  <a class="fancybox" href="assets/img/portfolio/port03.jpg"><img class="img-responsive" src="assets/img/portfolio/port03.jpg" alt=""></a>
                </div>
                <div class="overlay"></div>
              </div>
            </div>
          </div>
        </div><!-- col-lg-4 -->
      </div><!-- /row -->
    </div><! --/container -->
    <div class="container">
      <div class="row mt centered">
        <h1>MY DESIGN PROCESS</h1>
        <div class="col-lg-4 proc">
          <i class="fa fa-coffee"></i>
          <h3>The Meeting</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        </div>
        <div class="col-lg-4 proc">
          <i class="fa fa-cogs"></i>
          <h3>The Ideas</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        </div>
        <div class="col-lg-4 proc">
          <i class="fa fa-heart"></i>
          <h3>The Product</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever.</p>
        </div>

      </div><! --/row -->
    </div><! --/container -->
  </div><! --/Portfoliowrap -->

  <! -- PORTFOLIO SEPARATOR -->
  <div class="sep portfolio" data-stellar-background-ratio="0.5"></div>


  <! -- SERVICE SECTION -->
  <section id="services" name="services"></section>
  <div id="servicewrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-8-offset-2 centered">
          <h1>AN OVERVIEW OF MY SERVICES</h1>
          <h3>I'll do all the work for you</h3>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div><!-- /col-lg-8 -->
      </div><! --/row -->

      <div class="row mt">
        <div class="col-lg-3 service">
          <i class="fa fa-star"></i><p>PREMIUM QUALITY<br/><small>LOREM IPSUM DOLOR</small></p>
          <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
        </div>
        <div class="col-lg-3 service">
          <i class="fa fa-cloud"></i><p>CLOUD SERVICES<br/><small>LOREM IPSUM DOLOR</small></p>
          <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
        </div>
        <div class="col-lg-3 service">
          <i class="fa fa-shield"></i><p>SECURED ACCOUNTS<br/><small>LOREM IPSUM DOLOR</small></p>
          <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
        </div>
        <div class="col-lg-3 service">
          <i class="fa fa-heart"></i><p>100% SATISFACTION<br/><small>LOREM IPSUM DOLOR</small></p>
          <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
        </div>
      </div><! --/row -->
      <div class="row mt">
        <div class="col-lg-3 service">
          <i class="fa fa-trophy"></i><p>PREMIUM QUALITY<br/><small>LOREM IPSUM DOLOR</small></p>
          <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
        </div>
        <div class="col-lg-3 service">
          <i class="fa fa-globe"></i><p>CLOUD SERVICES<br/><small>LOREM IPSUM DOLOR</small></p>
          <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
        </div>
        <div class="col-lg-3 service">
          <i class="fa fa-lock"></i><p>SECURED ACCOUNTS<br/><small>LOREM IPSUM DOLOR</small></p>
          <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
        </div>
        <div class="col-lg-3 service">
          <i class="fa fa-thumbs-up"></i><p>100% SATISFACTION<br/><small>LOREM IPSUM DOLOR</small></p>
          <p class="text">Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
        </div>
      </div><! --/row -->

    </div><! --/container -->
  </div><! --/servicewrap -->

  <div id="testimonials">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-lg-offset-2 mt">

          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active mb centered">
                <h3>MARK WEBBER</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p><img class="img-circle" src="assets/img/pic-t1.jpg" width="80"></p>
              </div>

              <div class="item mb centered">
                <h3>PAUL LEVINGSTON</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p><img class="img-circle" src="assets/img/pic-t2.jpg" width="80"></p>
              </div>

              <div class="item mb centered">
                <h3>LUCY LENNIN</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p><img class="img-circle" src="assets/img/pic-t3.jpg" width="80"></p>
              </div>

            </div>
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
              <li data-target="#carousel-example-generic" data-slide-to="1"></li>
              <li data-target="#carousel-example-generic" data-slide-to="2"></li>
            </ol>
          </div>

        </div><! --/col-lg-8 -->
      </div><! --/row -->
    </div><! --/container -->
  </div><! --/testimonials -->

  <! -- SERVICE SECTION -->
  <section id="contact" name="contact"></section>
  <! -- CONTACT SEPARATOR -->
  <div class="sep contact" data-stellar-background-ratio="0.5"></div>

  <div id="contactwrap">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <p>CONTACT ME RIGHT NOW!</p>
          <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          <p>
            <small>5th Avenue, 987<br/>
              38399, New York,<br/>
              USA.</small>
            </p>
            <p>
              <small>Tel. 9888-4394<br/>
                Mail. Hello@coolfolks.com<br/>
                Skype. NYCDesign
              </p>

            </div>

            <div class="col-lg-6">
              <form role="form">
                <div class="form-group">
                  <label for="exampleInputName1">Your Name</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter name">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                  <label for="exampleInputText1">Message</label>
                  <textarea class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Submit</button>
              </form>
            </div>

          </div><! --/row -->
        </div><!-- /container -->
      </div>


    </body>
    </html>