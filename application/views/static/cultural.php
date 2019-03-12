<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />

  <link rel="icon" type="image/png" href="<?=base_url();?>assets/front/img/hestia-icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta name="theme-color" content="#1a3840">


  <title>
    Hestia19
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link href="<?=base_url();?>assets/front/fonts/Hestia.css?family=Hestia-Regular" rel="stylesheet">
  <link href="<?=base_url();?>assets/front/fonts/Galgo.css?family=Galgo" rel="stylesheet">
  <link rel="stylesheet" href="<?=base_url();?>assets/front/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link href="<?=base_url();?>assets/front/css/material-kit.css?v=2.0.5" rel="stylesheet" />

  <link rel="stylesheet" href="<?=base_url();?>assets/front/carousel/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/front/carousel/assets/owl.theme.default.min.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/front/css/custom.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/front/css/main_style.css">
  <link rel="stylesheet" href="<?=base_url();?>assets/front/loader/loader.css">
  <script src="<?=base_url();?>assets/front/js/core/jquery.min.js" type="text/javascript"></script>
  <style>
  .navbar .navbar-nav .nav-item .nav-link{
    font-size: 1.5rem;
  }

  *{
    font-family: 'Hestia-Regular', sans-serif;
  }
  .listing1{
      word-wrap:break-word;
      word-break: break-all;
      background-size: cover;
      border-bottom: 0.5px solid gray;
      padding-top:25px;
      margin-bottom: 5vh;
      font-family: 'Hestia-Regular', sans-serif;
  }


  .listing1 .event-name-text{

      font-size: 2rem;
      line-height:2rem;
      font-family: 'Hestia-Regular', sans-serif !important;
      color:white;

  }
  .event-desc{
      font-size: 1rem;
      color: white;
      margin-top: 3vh;
      margin-bottom: 4vh;


  }
  .details{

      color: black;
      background-color: azure;
      text-decoration: none;
      padding-left: 20px;
      padding-right: 20px;
      padding-top: 10px;
      padding-bottom: 10px;
      border-radius: 2px;
      margin-bottom: 4vh;

  }
  .details:hover{
      color:gray;;
  }
  .event_listing_div{
margin-left:5vh;
margin-right:5vh;
margin-top:20px;
}
  @media (min-width: 786px) {
.event_listing_div{
  padding-left:10vh;
padding-right:10vh;
  margin-top:100px;

}
  }
</style>
</head>

<body class="profile-page sidebar-collapse page-header" data-parallax="true" style="background: url('<?=base_url();?>assets/front/img/event_list_bg.jpg') no-repeat center center fixed; -webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;height: 100%;min-height:100vh;overflow: scroll;">
  <div style="z-index:3;">
    <nav class="navbar navbar-transparent navbar-color-on-scroll fixed-top navbar-expand-lg" color-on-scroll="100" id="sectionsNav">
      <div class="container-fluid">
        <div class="navbar-translate">
<a href="<?=base_url();?>">
            <img style="max-height:40px;" class="mobile-show" src="<?=base_url();?>assets/front/img/logo-inline-with-text.png">
</a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="sr-only" style="color: black;">Toggle navigation</span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse">
          
          <ul class="navbar-nav mx-auto">
            <li class="nav-item fade-in">
              <a href="#" class="nav-link event-click " id="events">
                EVENTS
              </a>
            </li>
            <li class="nav-item fade-in">
              <a href="#" class="nav-link">
                SPONSORS
              </a>
            </li>
            <li class="nav-item d-none d-lg-block">
              <a class="navbar-brand my-auto" href="<?=base_url();?>">
                <img class="fade-in-top" style="max-height: 75px;margin-top: -20px;" src="<?=base_url();?>assets/front/img/logo.png" /></a>
            </li>
            <li class="nav-item fade-in">
              <a href="<?=base_url()?>about" class="nav-link">
                ABOUT
              </a>
            </li>
            <li class="nav-item fade-in">
              <a href="<?=base_url()?>contact" class="nav-link">
                CONTACT
              </a>
            </li>
          </ul>

         
        </div>
      </div>
    </nav>
    <div class="container" style="z-index:10;position:absolute;top:0px;">
    <div class="row event_listing_div"  style="text-align:left;padding-top: 10vh;">
    <div class="col-12 listing1" style="padding-bottom: 20px;">
              <p class="event-name-text text-light" style="letter-spacing: 3px;color:white;text-align: left;">DANCE</p>
              <p class="event-desc">Dance Description</p>
              <a href="#" class="details">MORE&nbsp;DETAILS</a>
            </div>
    <div class="col-12 listing1" style="padding-bottom: 20px;">
      <p class="event-name-text text-light" style="letter-spacing: 3px;text-align: left;">FILM & DRAMA</p>
      <p class="event-desc">Film & Drama Description</p>
      <a href="#" class="details">MORE&nbsp;DETAILS</a>
    </div>
    <div class="col-12 listing1" style="padding-bottom: 20px;">
      <p class="event-name-text text-light" style="letter-spacing: 3px;color:white;text-align: left;">MUSIC</p>
      <p class="event-desc">Music Description</p>
      <a href="#" class="details">MORE&nbsp;DETAILS</a>
    </div>
<div class="col-12 listing1" style="padding-bottom: 20px;">
<p class="event-name-text text-light" style="letter-spacing: 3px;text-align: left;">FINE ARTS</p>
<p class="event-desc">Fine Arts Description</p>
<a href="#" class="details">MORE&nbsp;DETAILS</a>
</div>
<div class="col-12 listing1" style="padding-bottom: 20px;">
<p class="event-name-text text-light" style="letter-spacing: 3px;text-align: left;">SPORTS</p>
<p class="event-desc">Sports Description</p>
<a href="#" class="details">MORE&nbsp;DETAILS</a>
</div>
<div class="col-12 listing1" style="padding-bottom: 20px;">
<p class="event-name-text text-light" style="letter-spacing: 3px;text-align: left;">LITERARY</p>
<p class="event-desc">Literary Description</p>
<a href="#" class="details">MORE&nbsp;DETAILS</a>
</div>
</div>
</div>


  </div>

  
  <div class="container hider" style="padding-top: 115px;" id="overlay">
    <div class="overlay" id="darkbg"></div>
    <div class="owl-carousel owl-theme slide-in-bottom" id="carousel">
      <a href="<?=base_url("technical")?>">
      <div class="item auto-height" style="max-height:50vh;background-image: url('<?=base_url();?>assets/front/img/technical_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
        data-hash="technical">
        <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
        <h1 class="title  event-name" style="">Technical</h1>
        </div>
      </div>
      </a>
        <a href="<?=base_url("cultural")?>">
      <div class="item auto-height" style="max-height:50vh;background-image: url('<?=base_url();?>assets/front/img/cultural_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
        data-hash="cultural">
        <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
          <h1 class="title  event-name" style="">Cultural</h1>
        </div>
      </div>
      </a>
        <a href="<?=base_url("cultural")?>">
            <div class="item auto-height" style="max-height:50vh;background-image: url('<?=base_url();?>assets/front/img/cultural_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
                 data-hash="cultural">
                <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
                    <h1 class="title  event-name" style="">Cultural</h1>
                </div>
            </div>
        </a>
        <a href="<?=base_url("events/workshops")?>">
            <div class="item auto-height" style="max-height:50vh;background-image: url('<?=base_url();?>assets/front/img/workshop_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
                 data-hash="workshops">
                <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
                    <h1 class="title  event-name " style="">Workshops</h1>
                </div>
            </div>
        </a>
        <a href="<?=base_url("events/online")?>">
            <div class="item auto-height" style="max-height:50vh;background-image: url('<?=base_url();?>assets/front/img/online_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
                 data-hash="online">
                <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
                    <h1 class="title  event-name" style="">Online</h1>
                </div>
            </div>
        </a>
        <a href="<?=base_url("events/general")?>">
            <div class="item auto-height" style="max-height:50vh;background-image: url('<?=base_url();?>assets/front/img/general_bg.jpg'); background-size: cover; background-position: top;box-shadow:inset 0 0 0 2000px rgba(0,0,0,0.5);"
                 data-hash="general">
                <div class="container" style="padding: 10px;position: absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
                    <h1 class="title  event-name" style="">General</h1>
                </div>
            </div>
        </a>


    </div>
  </div>
 


  <!--   Core JS Files   -->

  <script src="<?=base_url();?>assets/front/carousel/owl.carousel.min.js"></script>
  <script src="<?=base_url();?>assets/front/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>assets/front/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?=base_url();?>assets/front/js/plugins/moment.min.js"></script>
  <!--  Plugin for the Datepicker, full documentation here: https://github.com/Eonasdan/bootstrap-datetimepicker -->
  <script src="<?=base_url();?>assets/front/js/plugins/bootstrap-datetimepicker.js" type="text/javascript"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="<?=base_url();?>assets/front/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
  <script src="<?=base_url();?>assets/front/js/material-kit.js?v=2.0.5" type="text/javascript"></script>
  <script type="text/javascript">
    if($(window).width() < 960){
      $(".pcmask").attr("src", "<?=base_url();?>assets/front/img/mobile_phone_front_end.png");
    }
   </script>

  <script>
    $('.owl-carousel').owlCarousel({
      centre: true,
      items: 1,
      stagePadding: 150,
      loop: true,
      margin: 0,
      URLhashListener:true,
      autoplayHoverPause:true,
      startPosition: 'events',
      nav: true,
      navText : ['<span class="carousel-control-prev-icon" aria-hidden="true"></span>', '<span class="carousel-control-next-icon" aria-hidden="true"></span>'],
      responsiveClass:true,
      responsive:{
        0:{
          items:1,
          stagePadding: 25,
        },
        600:{
          items:1,
          stagePadding: 100,
        },
        1000:{
          items:1,
          loop:true
        }
      }
    })
  </script>

  <script>
    $(document).ready(
      function(){
        $("#events").click("slow", function () {
          $("#overlay").fadeToggle(function(){
            $("#carousel").slideDown();
            $('.navbar-toggler').click();

          });
      });
    });

    $(document).ready(
      function(){
        $("#darkbg").click("slow", function () {
          $("#overlay").fadeToggle(function(){
            $("#carousel").toggle();
          });
      });
    });
  </script>



</body>

</html>
