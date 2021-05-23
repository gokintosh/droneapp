<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to NDS</title>

    <!-- bootstrapp cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <!-- owl carousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">

    <!-- custom css file -->
    <link rel="stylesheet" href="style.css">


</head>
<body>


    <!-- strat header -->
    <!-- navigation starts here -->
    <nav class="navbar navbar-expand-lg navbar-dark color-second-bg px-4">
        <div class="container-fluid">
            <a class="navbar-brand font-orbitron" href="#"> <img src="./assets/Logo.png"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav m-auto font-rubik">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="client.php">Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="send.php">Send Package</a>
                    </li>



                </ul>
            </div>
            
              <div class="popup" id="popup-1">
                    <div class="overlay"></div>
                    <div class="content">
                        <div class="close-btn" onclick="togglePopup()">&times;</div>
                        <h1>LOGIN PANEL</h1>
                        <form>
                            <input type="text" id="login" name="login" placeholder="Login" /> <br /> <br />
                            <input type="password" id="password" placeholder="Password" /> <br /> <br />
                            <button type="submit">Login</button><br /><br />
                            <p><u>Have problems while logging? Click <a href="index.php"><b>here</b></a> to reset password.</u></p> </a> 
                 

                            <a class="navbar-brand font-orbitron" href="#"> <img src="./assets/Logo.png"></a>


                        </form>
                        
                        </div>
                </div>
                <button onclick="togglePopup()">Log in</button>
        </div>
    </nav>


    <!-- start main site -->
    <main id="site-main">

        <!-- carousel -->
        <section id="banner-area">
            <div class="owl-carousel owl-theme">
                <div class="item">
                    <img src="./assets/banner.png" class="banner-image" alt="banner1">
                </div>
                <!--
                <div class="item">
                    <img src="./assets/1.jpg" class="banner-image" alt="banner1">
                </div>
                <div class="item">
                    <img src="./assets/wallpapertip_skyfall-wallpaper_1638051.jpg" class="banner-image" alt="banner1">
                </div>
                <div class="item">
                    <img src="./assets/iStock-659677484.jpg" class="banner-image" alt="banner1">
                </div>
                -->

            </div>
        </section>

        <section id="top-sale">
            <div class="container py5">
                <h4 class="font-orbitron font-size-20">Customers Feedback</h4>
                <hr>
                <!-- owl crasoul -->
                <div class="owl-carousel owl-theme">
                    <div class="item py-2">
                        <div class="product font-rale">
                            <p> John Anderson</p>
                            <a href="#"><img src="m1.png" alt="John Anderson" class="img-fluid"></a>
                            <div class="text-center">
                                <p></p>
                                <h6>Great company! I had my package delivered in less than 24 hours!</h6>

                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>


                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <p>Kate Kowalski</p>
                            <a href="#"><img src="w1.PNG" alt="Kate Kowalski" class="img-fluid"></a>
                            <div class="text-center">
                                <p></p>
                                <h6>Super fast service, will use again!</h6>

                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <p>Aiman Pietrowski</p>
                            <a href="#"><img src="m2.PNG" alt="Aiman Petrovski" class="img-fluid"></a>
                            <div class="text-center">
                                <p></p>
                                <h6>Safe delivery of my package. Will use again.</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <p>Franciszka Wojewodka</p>
                            <a href="#"><img src="w4.PNG" alt="Franciszka Wojewódka" class="img-fluid"></a>
                            <div class="text-center">
                                <p></p>
                                <h6>Lovely contact with company and easiest posting procedure of my life.</h6>

                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <p>Sofie Resnik</p>
                            <a href="#"><img src="w3.PNG" alt="Sofie Resnik" class="img-fluid"></a>
                            <div class="text-center">
                                <p></p>
                                <h6>Service was good and will be using them again once I will ship my next package.</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <div class="item py-2">
                        <div class="product font-rale">
                            <p>Martim Porsche</p>
                            <a href="#"><img src="m3.PNG" alt="Martim Porsche" class="img-fluid"></a>
                            <div class="text-center">
                                <p></p>
                                <h6>Satisfying service.</h6>
                                <div class="rating text-warning font-size-12">
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="fas fa-star"></i></span>
                                    <span><i class="far fa-star"></i></span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    
        
    </main>


    <!--start footer -->
    <footer id="footer" class="bg-dark text-white py-1">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12 topmargin">
                    <h4 class="font-rubik font-size-20 font-orbitron"> Dron Post Service</h4>
                    <p class="font-size-14 font-rale text-white-50">Stop worrying about Your package!!! <br />Choose Dron Post Service!!! Check capabilities of delivery drons. Test its speed. Trust its safety.</p>
                </div>
                <div class="col-lg-2 col-12 topmargin">
                    <ul class="subpages">
                        <li class="font-size-14 font-rale text-white-50"><a class="linksubpages" href="index.php">Home</a></li>
                        <li class="font-size-14 font-rale text-white-50"><a class="linksubpages" href="aboutus.php">About us</a></li>
                        <li class="font-size-14 font-rale text-white-50"><a class="linksubpages" href="client.php">Form</a></li>
                        <li class="font-size-14 font-rale text-white-50"><a class="linksubpages" href="send.php">Send Package</a></li>
                    </ul>
                </div>
                <div class="col-lg-2 col-12 topmargin">
                    <img class="pictalign" src="./assets/footer.png" alt="Logo" />
                </div>
                <div class="col-lg-2 col-12 topmargin">
                    <p class="font-rubik font-size-16 font-orbitron contactinfo">CONTACT US:</p>
                    <ul class="contactinfo">
                        <li class="font-size-14 font-rale text-white-50">Phone: 123456789</li>
                        <li class="font-size-14 font-rale text-white-50">E-mail: DronPostContact@email.com</li>
                    </ul>
                </div>
                <div class="col-lg-2 col-12 topmargin">
                    <p class="font-rubik font-size-16 font-orbitron contactinfo">VISIT US: </p>
                    <ul class="contactinfo">
                        <li class="font-size-14 font-rale text-white-50 adresslist">ul. Luboszycka 1A</li>
                        <li class="font-size-14 font-rale text-white-50 adresslist">45-710 Opole</li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright text-center bg-dark text-white py-1">
        <p>&copy: Copyright 2021 , all rights reserved</p>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.slim.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>


    <!-- owl carasoul -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- custom js -->
    <script src="./index.js"></script>
    <script src="./popup.js"></script>


</body>
</html>