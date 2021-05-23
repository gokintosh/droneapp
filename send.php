
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



        <!-- navigation starts here -->
        <nav class="navbar navbar-expand-lg navbar-dark color-second-bg px-4">
            <div class="container-fluid">
                <a class="navbar-brand font-orbitron" href="index.php"> <img src="./assets/Logo.png"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav m-auto font-rubik">
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

                    </a>
                    </form>
                </div>
            </div>
        </nav>


    <!-- start main site -->
        <main id="site-main">
            <div class="send-container">
                <div class="form-description">
                    <h2>Experience the fastest package delivery service in the world</h2>
                    <p>
                        Send your package and have it delivered the same day!
                    </p>
                </div>
                <!-- form-->
                <div class="sender-form">
                    <p>Insert sender information</p>

                    <form>
                        <label>Name <span class="required"></span></label><input type="text" name="field1" class="field-divided" placeholder="First" /> <input type="text" name="field2" class="field-divided" placeholder="Last" />
                        <label>Email <span class="required" placeholder="Email"></span></label>
                        <input type="email" name="field3" class="field-long" placeholder="Your email" />
                        <label>Phone <span class="required"></span></label>
                        <input type="phone" name="field4" class="field-long" placeholder="Phone Number" />
                        <label>City <span class="required" placeholder="Email"></span></label>
                        <input type="city" name="field5" class="field-long" placeholder="Your City" />
                        <label><input type="submit" value="Submit" /></label>
                    </form>

                </div>
                <div class="sender-form-2">
                    <p>Insert adressee information</p>

                    <form>
                        <label>Name <span class="required"></span></label><input type="text" name="field1" class="field-divided" placeholder="First Name" /> <input type="text" name="field2" class="field-divided" placeholder="Last Name" />
                        <label>Phone <span class="required"></span></label><input type="phone" name="field4" class="field-long" placeholder="Phone Number" />
                        <label>City <span class="required" placeholder="Email"></span></label>
                        <input type="city" name="field5" class="field-long" placeholder="Your City" />
                        <label>Address <span class="required"></span></label><input type="address" name="field4" class="field-long" placeholder="Address" />
                        <label>House number <span class="required"></span></label><input type="h_nr" name="field4" class="field-long" placeholder="House number" />
                        <label><input type="submit" value="Submit" /></label>
                    </form>

                </div>
            </div>





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
                                <li class="font-size-14 font-rale text-white-50"><a class="linksubpages" href="form.php">Form</a></li>
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
                                <li class="font-size-14 font-rale text-white-50 adresslist">46-020 Opole</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>
            <div class="copyright text-center bg-dark text-white py-1">
                <p>&copy: Copyright 2021 , all rights reserved</p>
            </div>

</body>
</html>