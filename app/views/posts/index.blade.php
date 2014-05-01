<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> | The Blog </title>
    <!-- Bootstrap -->
    <link href="/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="/assets/js/jquery.js"></script>

    <!-- CSS Font Icon and Plugins -->
    <link href="/assets/font/fa/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/font/tello/css/fontello.css" rel="stylesheet">
    <link href="/assets/css/magnific-popup.css" rel="stylesheet">
    <link href="/assets/css/animation.css" rel="stylesheet">

    <!-- Theme of Design -->
    <link href="/assets/css/style.css" rel="stylesheet">   
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="shortcut icon" href="assets/images/faicon.png">
    <link rel="apple-touch-icon" sizes="129x129" href="assets/images/icon.png"> 
    
    <link href="/assets/css/yourcss.css" rel="stylesheet"> 
  </head>
  <body>
    <!-- =========
    Start Wrapper Page
    ===================================-->
    <div id="wrapper">
      <div class="container" >
        <div class="row">
          <div class="col-lg-10 col-lg-offset-1">

            <!-- =========
            Start portrait section
            ===================================-->
            <header class="portrait">
              <div class="bg-line"></div>
              <div class="body-portrait">

                <!-- =========
                Start Note Slider
                ===================================-->
                <div class="box-note">
                  <div id="slider-note" class="carousel slide" data-ride="carousel" data-interval="10000">
                    <div class="carousel-inner">
                      <div class="item active">
                        No matter how slowly you go don't stop.<br> -Confucious
                      </div>
                      <div class="item">
                        Iam available for freelance, if you need my services please
                        send me an email :)
                      </div>
                    </div>
                  </div>
                </div>
                <!-- =========
                End Note Slider
                ===================================-->

                <!-- =========
                Start portrait image Section
                ===================================-->
                <div class="portrait-img-area">
                  <img src="/assets/images/Grace.jpg" alt="avatar" class="avatar img-circle"/>
                  <div class="profile-links">
                    <a href="" class="facebook"  data-toggle="tooltip" data-placement="left" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="" class="twitter"  data-toggle="tooltip" data-placement="right" title="Twitter"><i class="fa fa-twitter"></i></a>
                  </div>
                </div>
                <!-- =========
                End  portrait image Section
                ===================================-->

                <!-- =========
                Show Yor Name Section
                ===================================-->

                <h1 class="name"> Grace Faubion <small>Web Developer</small></h1>

                <!-- =========
                Special Nav for BLog page
                ===================================-->
                <nav class="nav-blog">
                  <a href="{{{action('HomeController@showHome')}}}" class="btn btn-left" data-toggle="tooltip" data-placement="left" title="" data-original-title="Home"> <i class="fa fa-home"></i></a>
                  <p class="btn btn-big-blog">Blog</p>
                  <a href="#" class="btn btn-right" data-toggle="tooltip" data-placement="right" title="" data-original-title="Reload Page"> <i class="fa fa-refresh"></i></a>
                </nav>

                <!-- =========
                Start Show Yor Name Section
                ===================================-->

              </div>
            </header>
            <!-- =========
            End portrait section
            ===================================-->

            <!-- =========
            Start Content section
            ===================================-->
            <section class="content open" id="main-content">
            <!-- Success and Error messages when submiting forms -->
                 @if (Session::has('successMessage'))
                  <div class="alert alert-success" style="text-align:center">{{{ Session::get('successMessage') }}}</div>
                 @endif
                 @if (Session::has('errorMessage'))
                  <div class="alert alert-danger" style="text-align:center">{{{ Session::get('errorMessage') }}}</div>
                 @endif
              <div class="body-content" id="blog">

                <div class="row">
                  <div class="col-md-10 col-md-offset-1">
                    <div class="blog-posts">
                    @foreach ($posts as $post)
                      <div class="blog-post">
                        <div class="row">
                          <div class="col-md-8">
                            <h3 class="title-post"><a href="blog_single.html"><i class="fa fa-bullhorn"></i>{{{$post->title}}}</a></h3>
                          </div>
                          <div class="col-md-4">
                            <div class="blog-date">
                             {{{ $post->created_at->format('l, F jS') }}}
                            </div>
                          </div>
                        </div>
                        <div class="body-post">
                          <p>{{{ Str::words($post->body, 10)}}}</p>
                          <p>
                            <a href="{{{action('PostsController@show', $post->id)}}}" class="btn btn-flat style2">Continue Reading...</a>
                          </p>
                          <div class="love-post-btn">
                            <a href="#"><span><i class="fa fa-heart"></i>0</span></a>
                          </div>
                        </div>
                      </div>
                      @endforeach
               </div>
                    <!-- =========
                    Start Pagination section
                    ===================================-->
                    <div class="flat-pagination text-center">
                      <ul class="pagination">
                        <li>{{$posts->links()}}</li>
                      </ul> 
                    </div>
                    <!-- =========
                    End Pagination section
                    ===================================-->

                  </div>
                </div>
              </div>

              <a id="backtotop" href="#"><i class="fa fa-arrow-up"></i></a>
              <div class="bg-line"></div>
            </section>

            <!-- =========
            End Content section
            ===================================-->


            <!-- =========
            Start Footer section
            ===================================-->
            <footer class="footer">
              Grace Faubion's Blog
            </footer>
            <!-- =========
            End Footer section
            ===================================-->
          </div>
        </div>
      </div>
    </div>
    <!-- =========
    End Wrapper Page
    ===================================-->

    <!-- =========
    Text Showup Wait Document Ready
    ===================================-->
    <div id="wait-page" class="text-center">Loading...</div>
    
    <!-- =========
    Link Config Custom styles
    ===================================-->
    
    <a href="modal_configuration.html" class="configuration ajax_link"><i class="fa fa-cog"></i> Configuration</a>
    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modal" aria-hidden="true"> </div>


    <!-- =========
    Javascript load 
    ===================================-->
   <!-- Fade out error or success messages after forms are submitted -->
    <script type="text/javascript">
        $('.alert-success').fadeOut(3000);
        $('.alert-danger').fadeOut(3000);
    </script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- JS maps for gmap3 JavaScript plugins) -->
    <script src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>

    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.js"></script>
    <script src="assets/js/jquery.autofix_anything.js"></script>
    <script src="assets/js/jquery.mixitup.min.js"></script>
    <script src='assets/js/gmap3.min.js'></script>
    <script src='assets/js/pace.min.js'></script>
    <script src='assets/js/jquery.magnific-popup.min.js'></script>

    <!-- Configuration app js -->
    <script src="assets/js/app.js"></script>

  </body>
</html>