<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>AUN Restaurant</title>
    <meta name="description" content="Resto">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- External CSS -->
    <link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
    <link rel="stylesheet" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" href="vendor/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/css/tempusdominus-bootstrap-4.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/brands.css">

    <!-- Fonts -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Josefin+Sans:300,400,700">
    <link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- CSS -->
    <link rel="stylesheet" href="css/style.min.css">

    <!-- Modernizr JS for IE8 support of HTML5 elements and media queries -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
</head>

<body data-spy="scroll" data-target="#navbar" class="static-layout">
    <div id="canvas-overlay"></div>
    <div class="boxed-page">
        <nav id="navbar-header" class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand navbar-brand-center d-flex align-items-center p-0 only-mobile" href="/">
                    <img src="img/logo.jpg" alt="">
                </a>

                <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                    <ul class="navbar-nav d-flex justify-content-center">

                        <div class="d-flex flex-lg-row flex-column">
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Menu
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="fos/index.php?page=home">Jabbama</a>
                                    <a class="dropdown-item" href="fos/index.php?page=home">Clubhouse</a>
                                </div>
                            </li>
                        </div>
                    </ul>

                    <a class="navbar-brand navbar-brand-center d-flex align-items-center only-desktop" href="#">
                        <img src="img/logo.jpg" alt="">
                    </a>
                    <ul class="navbar-nav d-flex justify-content-between">
                        <div class="d-flex flex-lg-row flex-column">
                            <li class="nav-item dropdown">
                                <a class="nav-link" href="#reservation">Reservation</a>
                            </li>
                        </div>
                        <li class="nav-item"><a class="nav-link js-scroll-trigger" href="index.php?page=cart_list"><span>  <i class="lnr lnr-cart"></i> </span>Cart</a>
                        </li>
                        <li class="nav-item">
                            <a id="side-search-open" class="nav-link" href="../fos/admin/login.php">
                                <span class="lnr lnr-user"></span>Login
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="hero">
            <div class="container">
                <div class="row d-flex align-items-center">
                    <div class="col-lg-6 hero-left">
                        <h1 class="display-4 mb-5">Welcome to AUN Restaurant</h1>
                        <h4>Home of <br>Delicious Food!</h4>
                        <ul class="hero-info list-unstyled d-flex text-center mb-0">
                            <li class="border-right">
                                <span class="lnr lnr-rocket"></span>
                                <h5>
                                    Fast Delivery
                                </h5>
                            </li>
                            <li class="border-right">
                                <span class="lnr lnr-leaf"></span>
                                <h5>
                                    Fresh Food
                                </h5>
                            </li>
                            <li class="">
                                <span class="lnr lnr-tablet"></span>
                                <h5>
                                    24/7 Reservation
                                </h5>
                            </li>
                        </ul>

                    </div>
                    <div class="col-lg-6 hero-right">
                        <div class="owl-carousel owl-theme hero-carousel">
                            <div class="item">
                                <img class="img-fluid" src="img/hero-1.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="img/hero-2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img class="img-fluid" src="img/hero-3.jpg" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- Welcome Section -->
        <section id="gtco-welcome" class="bg-white section-padding">
            <div class="container" id="about">
                <div class="section-content">
                    <div class="row">
                        <div class="col-sm-5 img-bg d-flex shadow align-items-center justify-content-center justify-content-md-end img-2"
                            style="background-image: url(img/hero-4.jpg);">

                        </div>
                        <div class="col-sm-7 py-5 pl-md-0 pl-4">
                            <div class="heading-section pl-lg-5 ml-md-5">
                                <span class="subheading">
                                    About
                                </span>
                                <h2>
                                    Welcome to AUN Restaurant
                                </h2>
                            </div>
                            <div class="pl-lg-5 ml-md-5">
                                <p>Our club house restaurant is committed to providing outstanding breakfast and lunch
                                    meals with fresh, quality ingredients in a consistent manner that is uncommon to
                                    find in a casual breakfast and lunch restaurant. An outstanding breakfast experience
                                    is not measured by food alone but also, by a friendly atmosphere and clean
                                    environment. Overall guest satisfaction has made our guest retention and dining
                                    frequency one of the keys to our success.</p>
                                <hr>
                                <hr>
                                <p>Jabbama is a very classy and Luxurious 4 star dining Restaurant of the American
                                    University Of Nigeria (AUN) Hotel in Adamawa state, Nigeria. Our standard food
                                    quality is what makes us stand out among our peers. We have good tables, comfortable
                                    lighting , and Great entertainment. Good Service, Conducive Atmosphere, Reasonable
                                    Cost, at a Convenient Location is our pride</p>
                                <h3 class="mt-5">Best Selling Dishes</h3>
                                <div class="row">
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="img/jollof-chicken.jpg" />
                                            <h6>Jollof Rice with Chicken</h6>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="img/burger-fries.jpg" />
                                            <h6>Grilled Beef Burger with Fries</h6>
                                        </a>
                                    </div>
                                    <div class="col-4">
                                        <a href="#" class="thumb-menu">
                                            <img class="img-fluid img-cover" src="img/pounded-yam-egusi.jpg" />
                                            <h6>Pounded Yam and Egusi Soup</h6>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Welcome Section -->
        <!-- Special Dishes Section -->
        <section id="gtco-special-dishes" class="bg-grey section-padding">
            <div class="container">
                <div class="section-content">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Specialties
                        </span>
                        <h2>
                            Special Dishes
                        </h2>
                    </div>
                    <div class="row mt-5" id="pizza">
                        <div class="col-lg-5 col-md-6 align-self-center py-5">
                            <h2 class="special-number">01.</h2>
                            <div class="dishes-text">
                                <h3><span>BBQ</span><br>Chicken Pizza</h3>
                                <p class="pt-3">To create our renowned BBQ Chicken pizza, we use only premium grilled
                                    chicken, crunchy fresh onions, and not one, not
                                    two, but three cheeses: mozzarella, provolone and cheddar on our hand-tossed crust.
                                    The result is a traditional summer
                                    cookout treat in one perfect pizza.</p>
                                <h3 class="special-dishes-price">N3,500.00</h3>
                                <a href="../fos/index.php" class="btn-primary mt-3">Order</a>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center mt-4 mt-md-0">
                            <img src="img/pizza.jpg" alt="" class="img-fluid shadow w-100">
                        </div>
                    </div>
                    <div class="row mt-5" id="lamb-cutlets">
                        <div class="col-lg-5 col-md-6 align-self-center order-2 order-md-1 mt-4 mt-md-0">
                            <img src="img/lamb-cutlets.jpeg" alt="" class="img-fluid shadow w-100">
                        </div>
                        <div class="col-lg-5 offset-lg-2 col-md-6 align-self-center order-1 order-md-2 py-5">
                            <h2 class="special-number">02.</h2>
                            <div class="dishes-text">
                                <h3><span>Lamb</span><br> Cutlets</h3>
                                <p class="pt-3">Our Succulent lamb cutlets with a spicy marinade make for a
                                    mouth-watering
                                    main course best served straight from the
                                    barbecue and with a side salad.</p>
                                <h3 class="special-dishes-price">N4,200</h3>
                                <a href="../fos/index.php" class="btn-primary mt-3">Order<span><i
                                            class="fa fa-long-arrow-right"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Special Dishes Section -->
        <!-- Menu Section -->
        <section id="gtco-menu" class="section-padding">
            <div class="container" id="menu">
                <div class="section-content">
                    <div class="row mb-5">
                        <div class="col-md-12">
                            <div class="heading-section text-center">
                                <span class="subheading">
                                    Specialties
                                </span>
                                <h2>
                                    Our Menu
                                </h2>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 menu-wrap">
                            <div class="heading-menu">
                                <h3 class="text-center mb-5">Appetizers</h3>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/samosas.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Samosas</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">N1,700</h4>
                                        </div>
                                    </div>
                                    <p>Minced Beef | Chicken</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/spring rolls.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Spring Rolls</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">N1,300</h4>
                                        </div>
                                    </div>
                                    <p>Julienne vegetables, minced chicken and sweet chilli sauce on deep fried glass
                                        noodles</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/chicken-kebab.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Kebabs</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">1,500</h4>
                                        </div>
                                    </div>
                                    <p>Grilled and skewered minced beef with teriyaki sauce and yoghurt cucumber dip</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 menu-wrap">
                            <div class="heading-menu">
                                <h3 class="text-center mb-5">Salads</h3>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/grille-chicken-ceaser-salad.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Grilled Chicken Ceaser Salad</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">N1,800</h4>
                                        </div>
                                    </div>
                                    <p>Our Grilled Chicken Caeser is far lighter and just as good, as the popular
                                        full-fat version</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/jabbama-salad.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Jabbama Salad</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">N2,100</h4>
                                        </div>
                                    </div>
                                    <p>Fresh minced greens, coconut shavings, oven dried tomatoes, feta cheese, dates,
                                        infused with strawberry dressing</p>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/chilled-shrimp-salad.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Chilled Shrimp Salad</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">N2,300</h4>
                                        </div>
                                    </div>
                                    <p>Chilled shrimps, avocado, mango, tomatoes and mint leaves in homemade sweet
                                        chilli dressing</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 menu-wrap">
                            <div class="heading-menu">
                                <h3 class="text-center mb-5">Main Course</h3>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/beef-tenderloin.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Beef Tenderloins</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">N4,000</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/oven-grilled-tilapia.png" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Oven-Grilled Whole Tilapia </h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">N3,050</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="menus d-flex align-items-center">
                                <div class="menu-img rounded-circle">
                                    <img class="img-fluid" src="img/chicken-wings.jpg" alt="">
                                </div>
                                <div class="text-wrap">
                                    <div class="row align-items-start">
                                        <div class="col-8">
                                            <h4>Chicken Wings with Fries</h4>
                                        </div>
                                        <div class="col-4">
                                            <h4 class="text-muted menu-price">N3,600</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of menu Section -->
        <!-- Testimonial Section-->
        <section id="gtco-testimonial" class="overlay bg-fixed section-padding"
            style="background-image: url(img/testi-bg.jpg);">
            <div class="container">
                <div class="section-content">
                    <div class="heading-section text-center">
                        <span class="subheading">
                            Testimony
                        </span>
                        <h2>
                            Happy Customer
                        </h2>
                    </div>
                    <div class="row">
                        <!-- Testimonial -->
                        <div class="testi-content testi-carousel owl-carousel">
                            <div class="testi-item">
                                <i class="testi-icon fa fa-3x fa-quote-left"></i>
                                <p class="testi-text">This cozy restaurant has left the best impressions! Hospitable
                                    hosts, delicious dishes, beautiful presentation, wide
                                    wine list and wonderful dessert. I recommend to everyone! I would like to come back
                                    here again and again.</p>
                                <p class="testi-author">Ilham Sanusi</p>
                                <p class="testi-desc">Yola Resident</p>
                            </div>
                            <div class="testi-item">
                                <i class="testi-icon fa fa-3x fa-quote-left"></i>
                                <p class="testi-text">This place is great! Atmosphere is chill and cool but the staff is
                                    also really friendly. They know what they’re doing
                                    and what they’re talking about, and you can tell making the customers happy is their
                                    main priority. Food is pretty good,
                                    some classics and some twists, and for their prices it’s 100% worth it.
                                </p>
                                <p class="testi-author">Nurudeen Yahya</p>
                                <p class="testi-desc">Self-Proclaimed Food Critic</p>
                            </div>
                        </div>
                        <!-- End of Testimonial -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Testimonial Section-->

        <!-- Reservation Section -->
        <section id="gtco-reservation" class="bg-fixed bg-white section-padding overlay"
            style="background-image: url(img/reservation-bg.jpg); background-repeat: no-repeat; background-size: cover;">
            <div class="container" id="reservation">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="section-content bg-white p-5 shadow">
                            <div class="heading-section text-center">
                                <span class="subheading">
                                    Reservation
                                </span>
                                <h2>
                                    Book Now
                                </h2>
                            </div>
                            <form method="post" name="contact-us" action="">
                                <div class="row">
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="name" name="name"
                                            placeholder="Name">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="text" class="form-control" id="email" name="email"
                                            placeholder="Email">
                                    </div>
                                    <div class="col-md-12 form-group">
                                        <input type="number" class="form-control" id="phoneNumber" name="phoneNumber"
                                            placeholder="Phone">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <div class="input-group date" id="datetimepicker4" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                data-target="#datetimepicker4" placeholder="Date" />
                                            <div class="input-group-append" data-target="#datetimepicker4"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text">
                                                    <span class="lnr lnr-calendar-full"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6 form-group">
                                        <div class="input-group date" id="datetimepicker3" data-target-input="nearest">
                                            <input type="text" class="form-control datetimepicker-input"
                                                data-target="#datetimepicker3" placeholder="Time" />
                                            <div class="input-group-append" data-target="#datetimepicker3"
                                                data-toggle="datetimepicker">
                                                <div class="input-group-text">
                                                    <span class="lnr lnr-clock"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <select class="form-control" id="selectPerson">
                                            <option></option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                        </select>
                                    </div>

                                    <div class="col-md-12 form-group">
                                        <textarea class="form-control" id="message" name="message" rows="6"
                                            placeholder="Your Message ..."></textarea>
                                    </div>
                                    <div class="col-md-12 text-center">
                                        <button class="btn btn-primary btn-shadow btn-lg" type="submit"
                                            name="submit">Complete Reservation</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- End of Reservation Section -->
        <footer class="mastfoot pb-5 bg-white section-padding pb-0">
            <div class="inner container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="footer-widget pr-lg-5 pr-0">
                            <img src="img/logo.jpg" class="img-fluid footer-logo mb-3" alt="">
                            <p>Our Club House Restaurant is committed to providing outstanding breakfast and lunch
                                meals with fresh, quality
                                ingredients in a consistent manner that is uncommon to find in a casual breakfast and
                                lunch restaurant. An outstanding
                                breakfast experience is not measured by food alone but also, by a friendly atmosphere
                                and clean environment. Overall
                                guest satisfaction has made our guest retention and dining frequency one of the keys to
                                our success. </p>
                            <nav class="nav nav-mastfoot justify-content-start">
                                <a class="nav-link" href="#">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a class="nav-link" href="#">
                                    <i class="fab fa-twitter"></i>
                                </a>
                                <a class="nav-link" href="#">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </nav>
                        </div>

                    </div>
                    <div class="col-lg-4">
                        <div class="footer-widget px-lg-5 px-0">
                            <h4>Open Hours</h4>
                            <ul class="list-unstyled open-hours">
                                <li class="d-flex justify-content-between"><span>Monday</span><span>9:00 - 24:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><span>Tuesday</span><span>9:00 - 24:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><span>Wednesday</span><span>9:00 -
                                        24:00</span></li>
                                <li class="d-flex justify-content-between"><span>Thursday</span><span>9:00 -
                                        24:00</span></li>
                                <li class="d-flex justify-content-between"><span>Friday</span><span>9:00 - 02:00</span>
                                </li>
                                <li class="d-flex justify-content-between"><span>Saturday</span><span>9:00 -
                                        02:00</span></li>
                                <li class="d-flex justify-content-between"><span>Sunday</span><span> Closed</span></li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-4">
                        <div class="footer-widget pl-lg-5 pl-0">
                            <h4>Feedback</h4>
                            <p>Please let us know what we can do to improve how we serve you.</p>
                            <form id="newsletter">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="emailNewsletter"
                                        aria-describedby="emailNewsletter" placeholder="Enter email">
                                    <textarea class="form-control" id="message" name="message" rows="6"
                                        placeholder="Your Feedback ..."></textarea>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Submit</button>
                            </form>
                        </div>

                    </div>
                    <div class="col-md-12 d-flex align-items-center">
                        <p class="mx-auto text-center mb-0">Copyright 2022. All Right Reserved</p>
                    </div>

                </div>
            </div>
        </footer>
    </div>
    </div>
    <!-- External JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.min.js"></script>
    <script src="vendor/bootstrap/popper.min.js"></script>
    <script src="vendor/bootstrap/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js "></script>
    <script src="vendor/owlcarousel/owl.carousel.min.js"></script>
    <script src="https://cdn.rawgit.com/noelboss/featherlight/1.7.13/release/featherlight.min.js"></script>
    <script src="vendor/stellar/jquery.stellar.js" type="text/javascript" charset="utf-8"></script>
    <script
        src="https://cdnjs.cloudflare.com/ajax/libs/tempusdominus-bootstrap-4/5.0.1/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Main JS -->
    <script src="js/app.min.js "></script>
</body>

</html>