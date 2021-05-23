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
                        <a class="nav-link" href="index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="aboutus.php">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="client.php">Form</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="send.php">Parcel</a>
                    </li>




                    </ul>

                    </a>
                </form>
                </div>
            </div>
          </nav>

    </header>

    <!-- start main site -->
    <main id="site-main">
        <div class="form-description">
            <h2>Join our community today</h2>
            <p>
                Try your first in-city package transportation for free!
            </p>
        </div>
        <!-- form-->
        <div class="container-form">
            <div class="form">
                <p>
                    Insert your information to join our program!
                </p>

                <form action="database.php" method="POST" id="client_form">
                    <ul class="form-style-1">
                       
                        <li><label class="labels">Name <span class="required">*</span></label>
                            <input type="text" name="field1" class="field-divided fields" placeholder="FirstName" /> 
                            <input type="text" name="field2" class="field-divided fields" placeholder="LastName" />
                        </li>
                        <li>
                            <label id="phoneLabel" class="label">Phone <span class="required">*</span></label>
                            <input type="phone" name="field3" id="phone" class="field-long fields" placeholder="Phone Number" />
                        </li>
                        <li>
                            <label>City <span class="required" placeholder="city">*</span></label>
                            <input type="text" name="field4" id="city" class="field-long fields" placeholder="City" />
                        </li>
                        <li>
                            <label id="streetLabel" class="label" for="field3">Street <span class="required" placeholder="street">*</span></label>
                            <input type="text" name="field5" id="street" class="field-long fields" placeholder="please enter street"/>
                        </li>
                        <li>
                            <label id="houseLabel" class="label" for="field3">house Number <span class="required" placeholder="house number">*</span></label>
                            <input type="text" name="field6" id="house" class="field-long fields" placeholder="house number"/>
                        </li>
                        <li><label for="login" class="labels">Login <span class="required">*</span></label>
                            <input type="text" id="login" name="login" class="field-divided fields" placeholder="login" /> 
                        </li>
                        <li>
                            <label id="emailLabel" class="label" for="email">Email <span class="required" placeholder="Email">*</span></label>
                            <input type="email" name="email" id="email" class="field-long fields" placeholder="Your email" size="30"/>
                        </li>
                        <li>
                            <label for="phone" id="passwordLabel" class="label">Password <span class="required">*</span></label>
                            <input type="password" name="password" id="password" class="field-long fields" placeholder="Enter password" />
                        </li>

                        <li>
                            <input id="submit_button" type="submit" value="Submit" />
                        </li>
                    </ul>
                </form>
                
            </div>
            
        </div>
        <div class="picture">
                <img src="./assets/thumbsup.jpg" style= "object-fit:cover; width:50%; height:50%;"/>
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
                                <li class="font-size-14 font-rale text-white-50"><a class="linksubpages" href="index.html">Home</a></li>
                                <li class="font-size-14 font-rale text-white-50"><a class="linksubpages" href="aboutus.html">About us</a></li>
                                <li class="font-size-14 font-rale text-white-50"><a class="linksubpages" href="form.html">Form</a></li>
                                <li class="font-size-14 font-rale text-white-50"><a class="linksubpages" href="send.html">Send Package</a></li>
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

    <script type="text/javascript" src="client.js"></script>

</body>


</html>