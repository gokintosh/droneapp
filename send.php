
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

    <style>

            p,
            label {
                font: 1rem 'Fira Sans', sans-serif;
            }

            input {
                margin: .4rem;
            }

    </style>

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
                <div class="sender-form" style="width:700px; margin-right:100px; margin: left 400px; border:1px solid #000;">
                
                    <p>Insert sender information</p>


                    <form>
                        <label>Destination City <span class="required"></span></label>
                        <input type="text" name="destcity" class="field-divided" placeholder="Destination city" /> 
                        <label>Destination Street <span class="required"></span></label>
                        <input type="text" name="deststreet" class="field-divided" placeholder="Destination street" /> 
                        <label>Destination House Number<span class="required"></span></label>
                        <input type="text" name="desthsno" class="field-long" placeholder="destination house number" />
                        <label>Package Size <span class="required"></span></label>
                        <input type="radio" id="small" name="drone" value="1-3kg">
                        <label for="small">Small</label><br>
                        <input type="radio" id="medium" name="drone" value="4-7kg">
                        <label for="medium">Medium</label><br>
                        <input type="radio" id="large" name="drone" value="8-15kg">
                        <label for="small">Large</label><br>
                        <input type="radio" id="xlarge" name="drone" value="16-23kg">
                        <label for="small">Extra Large</label><br>
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