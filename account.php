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

                <form action="account.php" method="POST" id="registration_form">
                    <ul class="form-style-1">
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
            <div class="picture">
                <img src="./assets/thumbsup.jpg" style= "object-fit:cover; width:50%; height:50%;"/>
            </div>
        </div>

    <!--start footer -->
    <footer id="footer" class="bg-dark text-white py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-12">
                    <h4 class="font-rubik font-size-20 font-orbitron">NightCity Drone Service</h4>
                    <p class="font-size-14 font-rale text-white-50">Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat ea reprehenderit deserunt ab consequatur omnis quae labore rem, consequuntur quaerat?</p>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright text-center bg-dark text-white py-2">
        <p>&copy: Copyright 2073 , all rights reserved @<a href="#" class="color-second">NDS</a></p>
    </div>

    <script type="text/javascript" src="account.js"></script>

</body>


</html>