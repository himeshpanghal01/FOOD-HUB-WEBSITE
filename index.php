<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

    <title>FOOD DELIVERY</title>
    <style>
        * {
            margin: 0px;
            padding: 0px;
        }

        body {

            color: white;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        }

        nav {
            display: flex;
            justify-content: space-around;
            align-items: center;
            height: 80px;
            background-color: rgb(18, 18, 62);
        }

        nav ul {
            display: flex;
            justify-content: center;

        }

        nav ul li {
            list-style: none;
            margin: 0 23px;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
        }

        nav ul li a:hover {
            color: rgb(156, 153, 226);


        }

        .left {
            font-size: large;
        }

        .firstsection {
            display: flex;
            justify-content: space-around;
            margin: 80px 0;
            align-items: center;

        }

        .leftsection {
            font-size: 3rem;

        }

        .purple {
            color: purple;
        }

        .page {
            background-color: rgb(0, 0, 33);
        }

        .people {
            color: black;
        }
        @media screen and (max-width:1287px) {
           .rightsection {
              width: 40%  ;
            
            }
            
        }
        @media screen and (max-width:994px) {
           .leftsection {
                font-size: 28px;
            }
            
        }
        @media screen and (max-width:897px) {
           .rightsection {
               padding-right: 70px;
               width: auto;
            }
            
        }
        @media screen and (max-width:645px) {
           .leftsection {
                font-size: 20px;
            }
            
        }   
        @media screen and (max-width:584px) {
           .rightsection , img {
           width: 300px;
              
            }
          .right, ul li a {
         font-size: small;
          }  
            
        }
        @media screen and (max-width:509px) {
           .rightsection , img {
           width: 200px;
           height:140px;
              
            }
        }


        @media screen and (max-width:474px) {
           .rightsection , img {
           width: 200px;
              
            }
          .right, ul li a {
         font-size: 10px;
          }
          .left{
            font-size: 10px;
            margin-left: 20px;
          }  
            
        }
        @media screen and (max-width:405px) {
           .leftsection {
                font-size: 10px;
                
            }
            
        } 
        @media screen and (max-width:390px) {
           .leftsection {
                font-size: 8px;
                
                
            }
            .rightsection, img{
                width: 100px;
                height: 100px;
            }
           .page{
             position: relative;
             width: 100%;
           }
           .right, ul li a {
            font-size: 8px;
           }
        } 
        @media screen and (max-width:367px) {
.left{
    font-size: 8px;
}
.right, ul li a {
            font-size: 5px;
           }
        }
    </style>
</head>

<body>
    <!--header section strat from here-->
    <section class="page">
        <header>
            <nav>
                <div class="left">FOOD HUB</div>
                <div class="right">
                    <ul>
                        <li><a href="index.php">HOME</a></li>
                        <li><a href="contact.php">CONTACT</a></li>
                        <li><a href="food items.php">SERVICES</a></li>
                        <li><a href="About us.php">ABOUT US</a></li>

                    </ul>
                </div>
            </nav>
        </header>


        <!--main section start from here-->

        <main>
            <section class="firstsection">
                <div class="leftsection">
                    Hi, This Is Our <span class="purple"> </span>
                    <div> <span class="purple">Food Website</span></div>
                    <div>And Here We Provides</div>

                    <span id="element"></span>


                </div>


                <div class="rightsection">
                    <img src="https://purepng.com/public/uploads/medium/purepng.com-fast-food-burgerburgerfast-foodhammeatfast-food-burgermc-donaldsburger-king-231519340201mh7zr.png "
                        height="350px" alt="">
                </div>

            </section>
        </main>
    </section>
    <script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
    <script>
        var typed = new Typed('#element', {
            strings: ['Pizza', 'Burger', 'Sandwich', 'Samosa', ''],
            typeSpeed: 50,
        });
    </script>


    <!--kjJANWIWCRQ-->
    <section class="people">
        <div>
            <hr>
        </div>
        <div class="row d-flex justify-content-center">
            <div class="col-md-10 col-xl-8 text-center">
                <h3 class="mb-4">People Reviews</h3>
                <p class="mb-4 pb-2 mb-md-5 pb-md-0">
                    I recently had the pleasure of dining at FOOD HUB and I can confidently say it was an
                    unforgettable culinary experience. From the moment I stepped in, the ambiance was warm and inviting,
                    setting the perfect stage for what turned out to be an exceptional meal.


                </p>
            </div>
        </div>

        <div class="row text-center">
            <div class="col-md-4 mb-5 mb-md-0">
                <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(1).webp"
                        class="rounded-circle shadow-1-strong" width="150" height="150" />
                </div>
                <h5 class="mb-3">Maria Smantha</h5>
                <h6 class="text-primary mb-3">Web Developer</h6>
                <p class="px-xl-3">
                    <i class="fas fa-quote-left pe-2"></i>Service at [Restaurant Name] was impeccable. The staff was
                    attentive, knowledgeable, and always ready to offer recommendations
                </p>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star-half-alt fa-sm text-warning"></i>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mb-5 mb-md-0">
                <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(2).webp"
                        class="rounded-circle shadow-1-strong" width="150" height="150" />
                </div>
                <h5 class="mb-3">Lisa Cudrow</h5>
                <h6 class="text-primary mb-3">Graphic Designer</h6>
                <p class="px-xl-3">
                    <i class="fas fa-quote-left pe-2"></i>The ambiance of the restaurant deserves special mention. The
                    decor is tastefully done, creating a cozy and sophisticated atmosphere
                </p>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                </ul>
            </div>
            <div class="col-md-4 mb-0">
                <div class="d-flex justify-content-center mb-4">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(9).webp"
                        class="rounded-circle shadow-1-strong" width="150" height="150" />
                </div>
                <h5 class="mb-3">John Smith</h5>
                <h6 class="text-primary mb-3">Marketing Specialist</h6>
                <p class="px-xl-3">
                    <i class="fas fa-quote-left pe-2"></i>Moving on to the main course, I was delighted by the diverse
                    menu options catering to various palates.
                </p>
                <ul class="list-unstyled d-flex justify-content-center mb-0">
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="fas fa-star fa-sm text-warning"></i>
                    </li>
                    <li>
                        <i class="far fa-star fa-sm text-warning"></i>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05); color: black;">
           Made By Vivek and Hinesh: © 2023 Copyright:
            <a class="text-body" href="https://techyvivek.in/">techyvivek.in</a>
          </div>
          <!-- Copyright -->
        </footer>
</body>

</html>