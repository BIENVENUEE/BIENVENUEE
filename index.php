<!DOCTYPE html>
<html lang="en">
<?php include('head.php');?>

<body>

    <!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->


    <?php include('header.php');?>

    <!-- search area -->
    <div class="search-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <span class="close-btn"><i class="fas fa-window-close"></i></span>
                    <div class="search-bar">
                        <div class="search-bar-tablecell">
                            <h3>Search For:</h3>
                            <input type="text" placeholder="Keywords">
                            <button type="submit">Search <i class="fas fa-search"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end search area -->

    <!-- home page slider -->
    <div class="homepage-slider">
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-7 offset-lg-1 offset-xl-0">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">DAB Market</p>
                                <h1>La qualité a bon prix </h1>
                                <div class="hero-btns">
                                    <a href="services.php" class="boxed-btn">Visite</a>
                                    <a href="contact.php" class="bordered-btn">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-2">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-center">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">DAB Market</p>
                                <h1>Votre boutique en ligne </h1>
                                <div class="hero-btns">
                                    <a href="services.php" class="boxed-btn">Visite</a>
                                    <a href="contact.php" class="bordered-btn">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- single home slider -->
        <div class="single-homepage-slider homepage-bg-3">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 offset-lg-1 text-right">
                        <div class="hero-text">
                            <div class="hero-text-tablecell">
                                <p class="subtitle">DAB Market</p>
                                <h1>100 % qualité</h1>
                                <div class="hero-btns">
                                    <a href="services.php" class="boxed-btn">Visite</a>
                                    <a href="contact.php" class="bordered-btn">Contact</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end home page slider -->

    <!-- features list section -->
    <div class="list-section pt-80 pb-80">
        <div class="container">

            <div class="row">
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-shipping-fast"></i>
                        </div>
                        <div class="content">
                            <h3>Service de livraison </h3>
                            <p>A partir de 1000Fr (pour les clients locaux )</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                    <div class="list-box d-flex align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-phone-volume"></i>
                        </div>
                        <div class="content">
                            <h3>24/7 Support</h3>
                            <p>Support disponible tous les jours</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="list-box d-flex justify-content-start align-items-center">
                        <div class="list-icon">
                            <i class="fas fa-sync"></i>
                        </div>
                        <div class="content">
                            <h3>Traitement</h3>
                            <p>Traitement rapide de++s commandes !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end features list section -->

    <!-- product section -->
    <div class="product-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Nos </span> Produits </h3>
                        <p>Découvrez la liste de nos produits.</p>
                    </div>
                </div>
            </div>

            <div class="row d-flex flex-wrap justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html">
                                <img src="assets/img/products/v&t.jpg" alt="Image of clothing and accessories"
                                    class="uniform-image">
                            </a>
                        </div>

                        <h3>Vêtements et accessoires</h3>

                        <a href="cart.html" class="cart-btn"><i class="fas fa-info"></i> voir plus </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html">
                                <img src="assets/img/products/el.jpg" alt="Électroménagers" class="uniform-image">
                            </a>
                        </div>
                        <h3>Électroménagers</h3>

                        <a href="cart.html" class="cart-btn"><i class="fas fa-info"></i> voir plus </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html">
                                <img src="assets/img/products/elect.jpg" alt="Électroniques" class="uniform-image">
                            </a>
                        </div>
                        <h3>Électroniques</h3>

                        <a href="cart.html" class="cart-btn"><i class="fas fa-info"></i> voir plus </a>
                    </div>
                </div>
            </div>



            <div class="row d-flex flex-wrap justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html">
                                <img src="assets/img/products/sport.jpg" alt="Image de sport" class="uniform-image">
                            </a>
                        </div>

                        <h3>Equipements Sportifs</h3>

                        <a href="cart.html" class="cart-btn"><i class="fas fa-info"></i> voir plus </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html">
                                <img src="assets/img/products/pb.jpg" alt="Produits bios " class="uniform-image">
                            </a>
                        </div>
                        <h3>Produits bios</h3>

                        <a href="cart.html" class="cart-btn"><i class="fas fa-info"></i> voir plus </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html">
                                <img src="assets/img/products/par.jpg" alt="Beauté et bien être" class="uniform-image">
                            </a>
                        </div>
                        <h3>Beauté et bien être </h3>

                        <a href="cart.html" class="cart-btn"><i class="fas fa-info"></i> voir plus </a>
                    </div>
                </div>
            </div>



            <div class="row d-flex flex-wrap justify-content-center">
                <div class="col-lg-4 col-md-4 col-sm-6 text-center">

                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                    <div class="single-product-item">
                        <div class="product-image">
                            <a href="single-product.html">
                                <img src="assets/img/products/bib.jpg" alt="bibliothèque " class="uniform-image">
                            </a>
                        </div>
                        <h3>bibliothèque</h3>

                        <a href="cart.html" class="cart-btn"><i class="fas fa-info"></i> voir plus </a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-4 col-sm-6 text-center">

                </div>
            </div>


        </div>
    </div>
    <style>
    /* Uniformiser la taille des images */
    .uniform-image {
        width: 300px;
        /* Largeur définie */
        height: 300px;
        /* Hauteur définie */
        object-fit: cover;
        /* Coupe l'image pour remplir le conteneur */
    }

    /* Hover effect */
    .single-product-item {
        transition: transform 0.3s ease;
    }

    .single-product-item:hover {
        transform: scale(1.05);
    }
    </style>
    <!-- end product section -->




    <!-- cart banner section -->
    <!-- <section class="cart-banner pt-100 pb-100">
        <div class="container">
            <div class="row clearfix">
               
                <div class="image-column col-lg-6">
                    <div class="image">
                        <div class="price-box">
                            <div class="inner-price">
                                <span class="price">
                                    <strong>30%</strong> <br> off per kg
                                </span>
                            </div>
                        </div>
                        <img src="assets/img/a.jpg" alt="">
                    </div>
                </div>
               
                <div class="content-column col-lg-6">
                    <h3><span class="orange-text">Deal</span> of the month</h3>
                    <h4>Hikan Strwaberry</h4>
                    <div class="text">Quisquam minus maiores repudiandae nobis, minima saepe id, fugit ullam similique!
                        Beatae, minima quisquam molestias facere ea. Perspiciatis unde omnis iste natus error sit
                        voluptatem accusant</div>
                 
                    <div class="time-counter">
                        <div class="time-countdown clearfix" data-countdown="2020/2/01">
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span>Days</div>
                            </div>
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span>Hours</div>
                            </div>
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span>Mins</div>
                            </div>
                            <div class="counter-column">
                                <div class="inner"><span class="count">00</span>Secs</div>
                            </div>
                        </div>
                    </div>
                    <a href="cart.html" class="cart-btn mt-3"><i class="fas fa-info"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- end cart banner section -->

    <!-- testimonail-section -->
    <!-- <div class="testimonail-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 offset-lg-1 text-center">
                    <div class="testimonial-sliders">
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar1.png" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Saira Hakim <span>Local shop owner</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                    beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar2.png" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>David Niph <span>Local shop owner</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                    beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                        <div class="single-testimonial-slider">
                            <div class="client-avater">
                                <img src="assets/img/avaters/avatar3.png" alt="">
                            </div>
                            <div class="client-meta">
                                <h3>Jacob Sikim <span>Local shop owner</span></h3>
                                <p class="testimonial-body">
                                    " Sed ut perspiciatis unde omnis iste natus error veritatis et quasi architecto
                                    beatae vitae dict eaque ipsa quae ab illo inventore Sed ut perspiciatis unde omnis
                                    iste natus error sit voluptatem accusantium "
                                </p>
                                <div class="last-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end testimonail-section -->

    <!-- advertisement section -->
    <div class="abt-section mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="abt-bg">
                        <a href="#" class="video-play-btn popup-youtube"><i class="fas fa-play"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="abt-text">
                        <p class="top-sub">Parlons de nous </p>
                        <h2>Qu'est ce que <span class="orange-text">DAB MARKET ?</span></h2>
                        <p>Nous sommes une entreprise e-commerce dédiée à offrir une expérience d'achat unique et
                            optimisée à nos clients. Notre mission est de fournir des produits de qualité, en mettant en
                            avant des valeurs telles que l'innovation, la durabilité, et la satisfaction client. Notre
                            équipe est structurée autour de services essentiels : marketing, IT, ventes et logistique,
                            chacun jouant un rôle clé pour garantir un fonctionnement fluide et une croissance continue.
                            Nous proposons une gamme variée de produits soigneusement sélectionnés, avec des politiques
                            de prix et de promotions attractives.  Nous assurons une logistique rigoureuse, des options de
                            livraison adaptées et un suivi des commandes en temps réel pour offrir un service client
                            impeccable, incluant des retours simplifiés et un support accessible. Nous analysons
                            régulièrement nos performances avec des indicateurs clés (KPI) pour améliorer notre service
                            et fidéliser notre clientèle. Avec des perspectives de croissance ambitieuses, nous
                            continuons d’innover pour étendre notre offre, atteindre de nouveaux marchés, et
                            perfectionner l’expérience utilisateur.</p>

                        <!-- <a href="cart.html" class="cart-btn"><i class="fas fa-info"></i> voir plus </a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end advertisement section -->

    <!-- shop banner -->
    <section class="shop-banner">
        <div class="container">
            <h3>December sale is on! <br> with big <span class="orange-text">Discount...</span></h3>
            <div class="sale-percent"><span>Sale! <br> Upto</span>50% <span>off</span></div>
            <a href="services.php" class="cart-btn btn-lg">Shop Now</a>
        </div>
    </section>
    <!-- end shop banner -->

    <!-- latest news -->
    <!-- <div class="latest-news pt-150 pb-150">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="section-title">
                        <h3><span class="orange-text">Our</span> News</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid, fuga quas itaque eveniet
                            beatae optio.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="single-news.html">
                            <div class="latest-news-bg news-bg-1"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">You will vainly look for fruit on it in autumn.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="single-news.html" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-latest-news">
                        <a href="single-news.html">
                            <div class="latest-news-bg news-bg-2"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">A man's worth has its season, like tomato.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="single-news.html" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0">
                    <div class="single-latest-news">
                        <a href="single-news.html">
                            <div class="latest-news-bg news-bg-3"></div>
                        </a>
                        <div class="news-text-box">
                            <h3><a href="single-news.html">Good thoughts bear good fresh juicy fruit.</a></h3>
                            <p class="blog-meta">
                                <span class="author"><i class="fas fa-user"></i> Admin</span>
                                <span class="date"><i class="fas fa-calendar"></i> 27 December, 2019</span>
                            </p>
                            <p class="excerpt">Vivamus lacus enim, pulvinar vel nulla sed, scelerisque rhoncus nisi.
                                Praesent vitae mattis nunc, egestas viverra eros.</p>
                            <a href="single-news.html" class="read-more-btn">read more <i
                                    class="fas fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 text-center">
                    <a href="news.html" class="boxed-btn">More News</a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- end latest news -->

    <!-- logo carousel -->
    <div class="logo-carousel-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="logo-carousel-inner">
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/1.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/2.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/3.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/4.png" alt="">
                        </div>
                        <div class="single-logo-item">
                            <img src="assets/img/company-logos/5.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end logo carousel -->

    <?php include('footer.php');?>



    <?php include('script.php');?>

</body>

</html>