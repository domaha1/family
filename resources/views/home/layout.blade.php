<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
     <link  href="{{URL::asset('css/style.css')}}" rel="stylesheet" />
</head>
<body>
 <section id="header">
      <a href="#"><img class="imgs" src="images/logo.png" alt="" /></a>
      <div>
        <ul id="navbar">
          <li><a class="active" href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li><a href="#">Home</a></li>
          <li id="lg-bag">
            <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
          </li>
          <a href="#" id="close"><i class="fas fa-lock"></i></a>
        </ul>
      </div>
      <div id ="mobile" >

          <a href="#"><i class="fa-solid fa-cart-shopping"></i></a>
           <i id="bar" class="fas fa-outdent"></i>

      </div>
    </section>

@yield('content')


    <footer class="section-p1">
      <div class="col">
        <img class="logo" src="/images/logo.png" alt="" />
        <h4>Contact</h4>
        <p>
          <strong>Address</strong>562 wellington road, street 32 san francisco
        </p>
        <p>
          <strong>Phone</strong>+966 0985747636 /(123)0169376756 </p>
        <p>
          <strong>Hours</strong>20:00- 12:00 sat - friday</p>
        <div class="follow">
          <h4>Follow Us</h4>
          <div class="icon">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-twitter"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-pinterest-p"></i>
            <i class="fab fa-youtube"></i>
          </div>
        </div>
      </div>

      <div class="col">
        <h4>About</h4>
        <a href="#">About us</a>
        <a href="#">Delivery Information</a>
        <a href="#">Privacy Policy</a>
        <a href="#">Terms & Conditions us</a>
        <a href="#">Contact Us us</a>
      </div>

      <div class="col">
        <h4>My Account</h4>
        <a href="#">Sign in</a>
        <a href="#"> View Cart</a>
        <a href="#">My Wishlist</a>
        <a href="#">Track My Order</a>
        <a href="#">Help</a>
      </div>

      <div class="col install">
        <h4>Install App</h4>
        <p>from app store or Google Play</p>
        <div class="row">
          <img src="images/pay/app_store.jpg" alt="" alt="" />
          <img src="images/pay/googleplay.jpg" alt="" />
        </div>
        <p>Secured Payment Gateways</p>
        <img src="/images/pay/pay/pays.png" alt="" />
      </div>

      <div class="copyright">
        <p>@ 2022, domaha ets - HTML css Ecommerce Template</p>
      </div>

    </footer>
    <script src="{{ url::asset('js/script.js') }}"></script>
    <script
      src="https://kit.fontawesome.com/7fb128bf8c.js"
      crossorigin="anonymous"
    ></script>
</body>
</html>
