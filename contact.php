<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
 
    <title>FOOD DELIVERY</title>
    <style>
         body{
            
            color: rgb(3, 3, 3);
      font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }
         nav{
            display: flex;
            justify-content: space-around;
            align-items:center ;
            height: 80px;
      
        }
        nav ul{
            display: flex;
            justify-content: center;

        }
        nav ul li{
            list-style: none;
            margin: 0 23px;
        }
        nav ul li a {
            text-decoration: none;
            color: rgb(18, 17, 17);
        }
        nav ul li a:hover{
          color: rgb(156, 153, 226);
        }
        .left{
            color: rgb(11, 11, 11);
        }
        section{
            margin-left: 30px;
        }

        @media screen and (max-width:509px) {
           .right, ul li a{
              font-size:10px;
            }
            .left{
                font-size: 10px;
            }
        }
        @media screen and (max-width:409px) {
           .right, ul li a{
              font: size 7px;
            }
            .left{
                font-size: 7px;
                margin-left: 10px;
            }
        }
        @media screen and (max-width:388px) {
           .right, ul li a{
              font-size:  9px;
            }
            .left{
                font-size: 6px;
                margin-left: 18px;
            }
        }
    </style>
    
</head>
<body>



    <header>
        <nav>
            <div class="left">FOOD HUB</div>
            <div class="right">
                <ul>
                    <li><a href="index.html">HOME</a></li>
                    <li><a href="contact.html">CONTACT</a></li>
                    <li><a href="food items.html">SERVICES</a></li>
                    <li><a href="About us.html">ABOUT US</a></li>

                </ul>
            </div>
        </nav>
    </header>
    <!--Section: Contact v.2-->
<section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive font-weight-bold text-center my-4">Contact us</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Rewari, 123106, India</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>86077******</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>workwithvivekindia@gmail.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>
<!--Section: Contact v.2-->
<footer>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05); color: black;">
        Made By Vivek and Himesh: © 2025 Copyright:
        <a class="text-body" href="https://techyvivek.in/">techyvivek.in</a>
      </div>
      <!-- Copyright -->
    </footer>
</body> 

</html>