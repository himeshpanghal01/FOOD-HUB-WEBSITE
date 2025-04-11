<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About Us - Food Delivery</title>
  <style>
    body{
color: white;
font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
}
.about {
      
      color: #0c0a0a;
      padding: 10px;
      text-align: center;
    }

    section {
      max-width: 800px;
      margin: 20px auto;
      padding: 20px;
      background-color: #fff;
      border-radius: 8px;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    h2 {
      color: #333;
    }

    p {
      line-height: 1.6;
      color: #333;
    }
    nav{
            display: flex;
            justify-content: space-around;
            align-items:center ;
            height: 50px;
        
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
            color: rgb(18, 1, 1);
        }
        nav ul li a:hover{
          color: rgb(156, 153, 226);
        }
        .left{
            font-size: large;
            color: #0c0a0a;
        }
        .firstsection{
            display: flex;
            justify-content: space-around;
            margin: 80px 0;
            align-items: center;

        }
        .leftsection{
          font-size: 3rem;
        
        }
        .purple{
            color: purple;
        }
        .left{
          color: rgb(24, 4, 4);
        }
        footer{
          text-align: center;
        }
        @media screen and (max-width:639px) {
           .right, ul li a{
              font-size:  14px;
            }
            .left{
                font-size: 14px;
                
            }
          }
          @media screen and (max-width:489px) {
           .right, ul li a{
              font-size:  10px;
            }
            .left{
                font-size: 10px;
                
            }
          }
          @media screen and (max-width:414px) {
           .right, ul li a{
              font-size:  7px;
            }
            .left{
                font-size: 7px;
                
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


  <header class="about">
    <h1>About Us</h1>
    <hr>
  </header>

  <section class="Story">
    <h2>Our Story</h2>
    <p>Welcome to Food Delivery, your go-to platform for delicious meals delivered to your doorstep. Our journey began with a passion for good food and a mission to make dining more convenient for everyone.</p>

    <h2>Our Mission</h2>
    <p>At Food Delivery, we strive to provide a seamless and enjoyable dining experience. We connect you with a variety of local restaurants, offering diverse cuisines to satisfy every palate. Our mission is to deliver not just food but delight to your door.</p>

    <h2>Why Choose Us?</h2>
    <p>• Wide Selection: Explore a diverse menu with options for every taste.<br>
      • Convenience: Order with ease from the comfort of your home or office.<br>
      • Reliable Delivery: Timely and reliable delivery service to ensure your food arrives fresh.<br>
      • Exceptional Quality: We partner with top-rated restaurants to ensure quality meals.<br>
      • Customer Satisfaction: Your satisfaction is our priority, and we continually strive to exceed your expectations.</p>

    <h2>Contact Us</h2>
    <p>Have questions or feedback? We'd love to hear from you! Contact our customer support at workwithvivekindia@gmail.com  and contact number is 86077*****</p>
  </section>

  <footer>
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.05); color: black;">
       Made By Vivek And Himesh © 2023 Copyright:
        <a class="text-body" href="https://techyvivek.in/">techyvivek.in</a>
      </div>
      <!-- Copyright -->
    </footer>
</body>

</html>
