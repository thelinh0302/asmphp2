<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Warehouse &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <base href="/phpTrainning/">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,900|Oswald:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="./public/css/bootstrap.min.css">
    <link rel="stylesheet" href="./public/css/jquery-ui.css">
    <link rel="stylesheet" href="./public/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./public/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./public/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="./public/css/jquery.fancybox.min.css">

    <link rel="stylesheet" href="./public/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="./public/fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="./public/css/aos.css">

    <link rel="stylesheet" href="./public/css/style.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    
  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
  <?php
    
  ?>
  <div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>
   
    
    <header class="site-navbar py-4 js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center">
          
          <div class="col-6 col-xl-2">
            <h1 class="mb-0 site-logo m-0 p-0"><a href="index.html" class="mb-0">Warehouse</a></h1>
          </div>

          <div class="col-12 col-md-10 d-none d-xl-block">
            <nav class="site-navigation position-relative text-right" role="navigation">

              <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
                <li><a href="index.html#home-section" class="nav-link">Home</a></li>
                <?php foreach($data['showCatagory'] as $item){?>
                    <?php echo '<li><a href="./product/product_catagory/'.$item['id'].'" class="nav-link">'.$item['name_catagories'].'</a></li>'  ?>
                <?php } ?> 
                <li><a href="index.html#properties-section" class="nav-link active">Properties</a></li>
                <li><a href="index.html#agents-section" class="nav-link">Agents</a></li>
                <li><a href="index.html#about-section" class="nav-link">About</a></li>
                <li><a href="index.html#contact-section" class="nav-link">Contact</a></li>
              </ul>
            </nav>
          </div>


          <div class="col-6 d-inline-block d-xl-none ml-md-0 py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white float-right"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>
      
    </header>

    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(./public/images/hero_1.jpg);" data-aos="fade">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-5 mx-auto mt-lg-5 text-center">
          <h1> 
            Catagory
          </h1>
          </div>
        </div>
      </div>

      <a href="#property-details" class="smoothscroll arrow-down"><span class="icon-arrow_downward"></span></a>
    </div>
    <div class="site-section" id="properties-section">
      <div class="container">
      <div class="row mb-5">
          <div class="col-md-7 text-left">
           
            <a href="./product/product"><h2 class="section-title mb-3">  <?php foreach($data['id'] as $itemID){ echo $itemID['name_catagories']; } ?></h2></a>  
          </div>
        </div>
        
        <div class="row large-gutters">
        <?php foreach($data['show']->fetchAll() as $item  ) {
          echo 
          '
            <div class="col-md-6 col-lg-4 mb-5 mb-lg-5 ">
            <div class="ftco-media-1">
              <div class="ftco-media-1-inner">
                <a href="./product/product_detail/'.$item['id'].'" class="d-inline-block mb-4"><img src="./public/images/imagesProduct/'.$item['images'].'" alt="FImageo" class="img-fluid"></a>
                <div class="ftco-media-details">
                  <h3>'.$item['nameProduct'].'</h3>
                  <p>'.$item['address1'].'</p>
                  <strong>$'.$item['price'].'.USD</strong>
                </div>
              </div> 
            </div>
          </div> 
          ';

        }?>
        </div>
      </div>
    </div>

    
    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <div class="row">
              <div class="col-md-5">
                <h2 class="footer-heading mb-4">About Us</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Neque facere laudantium magnam voluptatum autem. Amet aliquid nesciunt veritatis aliquam.</p>
              </div>
              <div class="col-md-3 mx-auto">
                <h2 class="footer-heading mb-4">Quick Links</h2>
                <ul class="list-unstyled">
                  <li><a href="#">About Us</a></li>
                  <li><a href="#">Services</a></li>
                  <li><a href="#">Testimonials</a></li>
                  <li><a href="#">Contact Us</a></li>
                </ul>
              </div>
              
            </div>
          </div>
          <div class="col-md-4">
            <div class="mb-4">
              <h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
            <form action="#" method="post" class="footer-subscribe">
              <div class="input-group mb-3">
                <input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
                <div class="input-group-append">
                  <button class="btn btn-primary text-black" type="button" id="button-addon2">Send</button>
                </div>
              </div>
            </form>  
            </div>
            
            <div class="">
              <h2 class="footer-heading mb-4">Follow Us</h2>
                <a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                <a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
            </div>


          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
            <p class="copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>
          
        </div>
      </div>
    </footer>

  </div> <!-- .site-wrap -->

  <a href="#top" class="gototop"><span class="icon-angle-double-up"></span></a> 

  <script src="./public/js/jquery-3.3.1.min.js"></script>
  <script src="./public/js/jquery-ui.js"></script>
  <script src="./public/js/popper.min.js"></script>
  <script src="./public/js/bootstrap.min.js"></script>
  <script src="./public/js/owl.carousel.min.js"></script>
  <script src="./public/js/jquery.countdown.min.js"></script>
  <script src="./public/js/bootstrap-datepicker.min.js"></script>
  <script src="./public/js/jquery.easing.1.3.js"></script>
  <script src="./public/js/aos.js"></script>
  <script src="./public/js/jquery.fancybox.min.js"></script>
  <script src="./public/js/jquery.sticky.js"></script>

  
  <script src="./public/js/main.js"></script>
    
  </body>
</html>