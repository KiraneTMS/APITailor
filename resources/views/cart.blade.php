>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>S-Tailor</title>
    <link rel="icon" href="{{ URL::to('/') }}/images/logo.png">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ URL::asset('css/careo/bootstrap.min.css') }}">
    <!-- style css -->
    <link rel="stylesheet" href="{{ URL::asset('css/careo/style.css') }}">
    <!-- Responsive -->
    <link rel="stylesheet" href="{{ URL::asset('css/careo/responsive.css') }}">
    <!-- table -->
    <link rel="stylesheet" href="{{ URL::asset('css/cart.css') }}">
    <!-- fevicon -->
    <link rel="icon" href="images/fevicon.png" type="image/gif" />
    <!-- font awesome -->
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="{{ URL::asset('css/careo/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="header">
           <div class="container">
              <div class="row">
                 <div class="col-xl-5 col-lg-5 col-md-9 col-sm-9">
                    <nav class="navigation navbar navbar-expand-md navbar-dark ">
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                       <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarsExample04">
                          <ul class="navbar-nav mr-auto">
                             <li class="nav-item">
                                <a class="nav-link" href="index.html"> Home  </a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#service">Service</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#history">History</a>
                             </li>
                             <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact Us</a>
                             </li>
                          </ul>
                       </div>
                    </nav>
                 </div>
                 <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col logo_section">
                    <div class="full">
                       <div class="center-desk">
                          <div class="logo">
                             <a href="index.html"><img src="{{ URL::to('/') }}/images/logo.png" alt="#" /></a>
                          </div>
                       </div>
                    </div>
                 </div>
                 <div class="col-xl-5 col-lg-5 col-md-5 col-sm-5">
                    <ul class="email">
                       <li><a href="#">Call: (+71) 1234567890</a></li>
                       <li><a href="#">Email: demo@gmail.com</a></li>
                       <li><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></li>
                    </ul>
                 </div>
              </div>
           </div>
        </div>
     </header>
     <!-- end header inner -->
     <!-- end header -->
    <div class="grid_12 header2">
        <div class="login">
          <a href="#">Login</a>
        </div>
        <div class="logo">
           <img src="https://www.cookfood.net/Content/images/Logo-full-black.png" />
        </div>
        <div class="basket">
          <a href="#"><img src="https://www.cookfood.net/Content/images/basket2.png" /></a>
        </div>
      </div>
      <div class="cart">
        <div class="container">
          <div class="grid_12">
            <h1>Your Cart</h1>
          </div>
          <ul class="items">
            <li class="grid_4 item">
              <a href="#" class="btn-remove">
                <i class="far fa-trash-alt"></i>
              </a>
              <div class="preview">
                <img src="{{ URL::to('/') }}/images/products/jeans.jpg" />
              </div>
              <div class="details" data-price="15.50">
                <h3>
                  Jeans for woman
                </h3>
                <p>Serves 4 (1480g)</p>

              </div>
              <div class="inner_container">

                <div class="col_1of2 align-center picker">
                  <p>
                    <a href="#" class="btn-quantity plus">
                      <i class="fa fa-plus" aria-hidden="true"></i>
                    </a>
                  <div class="col_1of2 quantity-text">
                    <p><span class="current_quantity">1</span> @ £15.50</p>
                  </div>
                  <a href="#" class="btn-quantity minus">
                    <i class="fa fa-minus" aria-hidden="true"></i>
                  </a>
                  </p>
                  <input type="hidden" class="quantity_field" name="quantity" data-price="15.50" value="1" />
                </div>
              </div>

            </li>
            <li class="grid_4 item">
              <a href="#" class="btn-remove">
                <i class="far fa-trash-alt"></i>
              </a>
              <div class="preview">
                <img src="{{ URL::to('/') }}/images/products/dress.jpg" />
              </div>
              <div class="details" data-price="2.49">
                <h3>
                  Red Dress
                </h3>
                <p>Serves 4</p>

              </div>
              <div class="inner_container">

                <div class="col_1of2 align-center picker">
                  <p>
                    <a href="#" class="btn-quantity plus">
                      <i class="fa fa-plus"></i>
                    </a>
                  <div class="col_1of2 quantity-text">
                    <p><span class="current_quantity">1</span> @ £2.49</p>
                  </div>
                  <a href="#" class="btn-quantity minus">
                    <i class="fa fa-minus"></i>
                  </a>
                  </p>
                  <input type="hidden" class="quantity_field" name="quantity" data-price="2.49" value="1" />
                </div>
              </div>

            </li>
            <li class="grid_4 item">
              <a href="#" class="btn-remove">
                <i class="far fa-trash-alt"></i>
              </a>
              <div class="preview">
                <img src="{{ URL::to('/') }}/images/products/shirt.jpg" />
              </div>
              <div class="details" data-price="8.50">
                <h3>
                  T-Shirt
                </h3>
                <p>Serves 6 (550g)</p>

              </div>
              <div class="inner_container">

                <div class="col_1of2 align-center picker">
                  <p>
                    <a href="#" class="btn-quantity plus">
                      <i class="fa fa-plus"></i>
                    </a>
                  <div class="col_1of2 quantity-text">
                    <p><span class="current_quantity">1</span> @ £8.50</p>
                  </div>
                  <a href="#" class="btn-quantity minus">
                    <i class="fa fa-minus"></i>
                  </a>
                  </p>
                  <input type="hidden" class="quantity_field" name="quantity" data-price="8.50" value="1" />
                </div>
              </div>

            </li>
          </ul>
          <div class="grid_12 delivery-payment">
            <div class="grid_6 delivery-address">
              <h3>Delivery Address</h3>
              <p>46 Vale Road<br>
                Ramsgate</p>
            </div>
            <div class="grid_6 payment-details">
              <h3>Payment Card</h3>
              <p> **** **** **** 8678</p>
            </div>
          </div>

          <div class="grid_12 summary">
            <div class="inner_container">
              <div class="summary-content">
              <div class="col_1of2 meta-data">
                <div class="sub-total">
                  <em>Sub Total: </em><span class="amount"></span>
                </div>
                <div class="taxes">
                  <em>Plus VAT: </em><span class="amount">@ 20%</span>
                </div>

              </div>
              <div class="col_1of2">
                <div class="total">
                  <span class="amount"></span>
                </div>
              </div>
              </div>
              <div class="btn-summary">

                <a href="#" class="btn-checkout btn-reverse">Continue Shopping</a>

                <a href="#" class="btn-checkout">Checkout</a>

              </div>
            </div>
          </div>
        </div>
      </div>
        <script src="{{ URL::asset('js/careo/jquery.min.js') }}"></script>
        <script src="{{ URL::asset('js/careo/popper.min.js') }}"></script>
        <script src="{{ URL::asset('js/careo/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ URL::asset('js/careo/jquery-3.0.0.min.js') }}"></script>
        <!-- sidebar -->
        <script src="{{ URL::asset('js/careo/jquery.mCustomScrollbar.concat.min.js') }}"></script>
        <script src="{{ URL::asset('js/careo/custom.js') }}"></script>
        <script src="{{ URL::asset('js/cart.js') }}"></script>
        <script>
            $('a[href^="#"]').on('click', function(event) {

            var target = $(this.getAttribute('href'));

            if( target.length ) {
                event.preventDefault();
                $('html, body').stop().animate({
                    scrollTop: target.offset().top
                }, 2000);
            }

            });
        </script>
</body>
</html>
