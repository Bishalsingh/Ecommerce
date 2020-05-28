<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Fashion</title>

    <!--Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat|Roboto:300,400,700">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--Styles -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/responsive.css')}}">

</head>
<body>
<header>
    <div class="top-nav container">
        <div class="logo">DOKO</div>
        <ul>
            <li><a href="#">Shop</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Blog</a></li>
            <li><a href="#">Cart</a></li>
        </ul>
    </div> <!--  end top nav  -->

    <div class="hero container">
        <div class="hero-copy">
            <h1>Ecommerce Example</h1>
            <p>lorem ipsum for now!!</p>
            <div class="hero buttons">
                <a href="#" class="button button-white">Button 1</a>
                <a href="#" class="button button-white">Button 2</a>
            </div>
        </div><!-- end hero copy -->

        <div class="hero-image">
            <img src="img/back.svg" alt="hero image" >
        </div>
    </div>  <!-- end herp -->
</header>  <!-- end header -->

<div class="featured-section">
    <div class="container">
        <h1 class="text-ccenter">ABC</h1>
        <p class="section-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Amet purus gravida
            quis blandit turpis cursus in hac habitasse. Convallis aenean et tortor
            at risus viverra adipiscing at in. Quis varius quam quisque id diam vel quam.
        </p>

        <div class="text-center button-container">
            <a href="#" class="button">Feature</a>
            <a href="#" class="button">On Sale</a>
        </div>
    </div>

    <div class="products text-center">
        <div class="product">
            <a href="#"><img src="img/image2.jpg" alt="product"> </a>
            <a href="#"><span class="product-name">Lehenga</span></a>
        </div>
        <div class="product">
            <a href="#"><img src="img/image2.jpg" alt="product"> </a>
            <a href="#"><span class="product-name">Lehenga</span></a>
        </div>
        <div class="product">
            <a href="#"><img src="img/image2.jpg" alt="product"> </a>
            <a href="#"><span class="product-name">Lehenga</span></a>
        </div>
        <div class="product">
            <a href="#"><img src="img/image2.jpg" alt="product"> </a>
            <a href="#"><span class="product-name">Lehenga</span></a>
        </div>
        <div class="product">
            <a href="#"><img src="img/image2.jpg" alt="product"> </a>
            <a href="#"><span class="product-name">Lehenga</span></a>
        </div>
        <div class="product">
            <a href="#"><img src="img/image2.jpg" alt="product"> </a>
            <a href="#"><span class="product-name">Lehenga</span></a>
        </div>
        <div class="product">
            <a href="#"><img src="img/image2.jpg" alt="product"> </a>
            <a href="#"><span class="product-name">Lehenga</span></a>
        </div>
        <div class="product">
            <a href="#"><img src="img/image2.jpg" alt="product"> </a>
            <a href="#"><span class="product-name">Lehenga</span></a>
        </div>

    </div>   <!--end products -->

    <div class="text-center button-container">
        <a href="#" class="button">View More Products</a>
    </div>
</div> <!-- end feature -->

<div class="blog-section">
    <div class="container">
        <h1 class="text-center">From Our Blog</h1>
        <p class="section-description">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Amet purus gravida
            quis blandit turpis cursus in hac habitasse. Convallis aenean et tortor
            at risus viverra adipiscing at in. Quis varius quam quisque id diam vel quam.
        </p>
        <div class="blog-posts" id="blog1">
            <div class="blog-post">
                <a href="#"><img src="/img/blog1.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 1</h2> </a>
                <div class="blog-desciption">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Amet purus gravida
                    quis blandit turpis cursus in hac habitasse. Convallis aenean et tortor
                    at risus viverra adipiscing at in. Quis varius quam quisque id diam vel quam.
                </div>
            </div>
            <div class="blog-post" id="blog2">
                <a href="#"><img src="img/blog2.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 2</h2> </a>
                <div class="blog-desciption">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Amet purus gravida
                    quis blandit turpis cursus in hac habitasse. Convallis aenean et tortor
                    at risus viverra adipiscing at in. Quis varius quam quisque id diam vel quam.
                </div>
            </div>
            <div class="blog-post" id="blog3">
                <a href="#"><img src="img/blog3.png" alt="blog image"></a>
                <a href="#"><h2 class="blog-title">Blog Post Title 3</h2> </a>
                <div class="blog-desciption">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Amet purus gravida
                    quis blandit turpis cursus in hac habitasse. Convallis aenean et tortor
                    at risus viverra adipiscing at in. Quis varius quam quisque id diam vel quam.
                </div>
            </div>

        </div>  <!-- end blog posts -->
    </div>  <!--end container -->
</div> <!-- blog section-->

<footer>
    <div class="footer-content container">
        <div class="made-with">Made with <i class="fa fa-heart"></i>  by Bishal Singh </div>
        <ul>
            <li>Follow Me:</li>
            <li><a href="#"><i class="fa fa-globe"></i> </a> </li>
            <li><a href="#"><i class="fa fa-github"></i> </a> </li>
            <li><a href="#"><i class="fa fa-youtube"></i> </a> </li>
            <li><a href="#"><i class="fa fa-facebook"></i> </a> </li>
        </ul>
    </div>   <!-- end footer content  -->
</footer>

</body>
</html>
