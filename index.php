<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Demo Banking || CMS</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        * {
            box-sizing: border-box
        }

        body {
            background-color: yellow;
            font-family: Verdana, sans-serif;
            margin: 0
        }

        .mySlides {
            display: none
        }

        img {
            vertical-align: middle;
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color:beige;
        }

        /* Caption text */
        .text {
            color: cadetblue;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: indigo;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: violet;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: chartreuse;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {

            .prev,
            .next,
            .text {
                font-size: 11px
            }
        }
    .bg-4 {
    background-color: red;
    color: orange;
    padding-top: 40px;
    padding-bottom: 40px;
  }
  .im{
      width: auto;
      max-width: 100% ;
      height: auto;
  }
    </style>
</head>

<body class="indexPage">
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="./index.php">DEMO Banking || CMS</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active"><a href="./index.php">Home</a></li>
                <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"> Services <span
                            class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="./viewusers.php"> Customer Details </a></li>
                        <li><a href="./transactionDetails.php"> Credit History </a></li>
                    </ul>
                </li>
                <li><a href="./aboutus.html">About Us</a></li>

            </ul>
        </div>
    </nav>
    <div class="container">
        <div class="slideshow-container">

            <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                <img src="bank.jpg" width="1000px" height="500px" class="im">
                <div class="text">DEMO Banking</div>
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="include.jpeg" width="1000px" height="500px" class="im">
                <div class="text">DEMO Banking</div>
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                <img src="mad_blog_5d661148a00861566970184.png" width="1000px" height="500px" class="im">
                <div class="text">DEMO Banking</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <script>
            var slideIndex = 1;
            showSlides(slideIndex);

            function plusSlides(n) {
                showSlides(slideIndex += n);
            }

            function currentSlide(n) {
                showSlides(slideIndex = n);
            }

            function showSlides(n) {
                var i;
                var slides = document.getElementsByClassName("mySlides");
                var dots = document.getElementsByClassName("dot");
                if (n > slides.length) { slideIndex = 1 }
                if (n < 1) { slideIndex = slides.length }
                for (i = 0; i < slides.length; i++) {
                    slides[i].style.display = "none";
                }
                for (i = 0; i < dots.length; i++) {
                    dots[i].className = dots[i].className.replace(" active", "");
                }
                slides[slideIndex - 1].style.display = "block";
                dots[slideIndex - 1].className += " active";
            }
        </script>
    </div>
    <div class="main">
    <h1 style="animation-delay: 1s">STAY SAFE! <span>CREDIT SAFE! </span></h1>
    <div class="row">
        <div class="col-sm-4" style="background-color:green;">
        <a href="./viewusers.php" class="btn btn-primary" role="button">View Customer</a>
        </div>
        <div class="col-sm-4" style="background-color:purple;">
        <a href="./viewusers.php" class="btn btn-success" role="button">Transfer Credits</a>
        </div>
        <div class="col-sm-4" style="background-color:yellow;">
        <a href="./transactionDetails.php" class="btn btn-info" role="button">Credit Details</a>
        </div>
  </div>
</div>
  <footer class="container-fluid bg-4 text-center">
    <p> Copyright © 2021 DEMO Banking</p>
    <p>Demo Credit  Management System Created by Shrey Thakkar</p>

   <p>Demo Credit Management System Powered by The Sparks Foundation</p>
  </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>

</html>
