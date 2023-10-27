<!DOCTYPE html>
<html lang="nl-NL">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="icon" type="image/PNG" href="media/post/post1.png">

    <script src="https://kit.fontawesome.com/d02b5e525a.js" crossorigin="anonymous"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500&family=Nunito+Sans:opsz,wght@6..12,300&family=Work+Sans:wght@100;200;300;400&display=swap" rel="stylesheet">
    
    <link rel="stylesheet" type="text/css" href="index.css" />


    <title>Stamps Treasures</title>
</head>

<body>
<header>

    <ul class="nav-bar">
        <a href="index.php" target="_blank"><img src="media/logo2.png" class="logo"></a>
        <li><a href="index.php" target="_blank">Home</a></li>
        <li><a href="collection.php" target="_blank">Collection</a></li>
        <li><a href="#C3" >Contact</a></li>
        <li><a href="login.html" target="_blank">Add</a></li>
        <li><a href="login.php" target="_blank">Login</a></li>
    </ul>

</header>


   <div class="banner"><br><br><br><br>
       <div class="intro">
       <h4 style="text-shadow: -1px 0 whitesmoke, 0 1px whitesmoke, 1px 0 whitesmoke, 0 -1px whitesmoke;">Stamps Treasures Collection</h4>
       <p style="text-shadow: -1px 0 whitesmoke, 0 1px whitesmoke, 1px 0 whitesmoke, 0 -1px whitesmoke;">Welcome to our stamp collection! Explore a world of tiny treasures with big stories. Discover and purchase stamps ranging from common to Super rare. Start your journey into stamp collecting today!</p>
       </div>
       <h3>Last Added</h3>
       <div class="lastAdded">
       <a href="collection.php" target="_blank"><img src="media/post15.png" class="product-mainn1"></a>
       <p>Christmas Island</p>
       <p>1pc</p>
       <p><i class="fa-solid fa-star"></i>Super Rare </p>
       <p> <i class="fa-solid fa-euro-sign"></i> 1.10</p>
       </div>
   </div>


<div  class="mid-background">
    <div class="mid-container">
    <p class="mid-tekst">
        <h14>Why collect stamps?</h14><br><br>Stamp collecting is a fun and addictive hobby that explores history, geography, art and politics. It can be a therapeutic activity or an opportunity <br>to meet likeminded people and join clubs and societies.</p>
<br>
    <div class="slideshow-container">

        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="media/slide/three.jpeg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="media/slide/background2.jpeg" style="width:100%">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="media/slide/one.jpg" style="width:90%">
        </div>

    </div>
    <div style="text-align:center">
        <span class="dot"></span>
        <span class="dot"></span>
        <span class="dot"></span>
    </div>
    </div>
</div>



<script>
    let slideIndex = 0;
    showSlides();

    function showSlides() {
        let i;
        let slides = document.getElementsByClassName("mySlides");
        let dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {slideIndex = 1}
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active";
        setTimeout(showSlides, 2000);
    }
</script>


   <h1>Popular Picks</h1>
    <div class="grid-container-product">


        <div id="tooltip" class="item1"><span id="tooltiptext">Shop Now</span><a href="collection.php" target="_blank"><img src="media/post/post1.png" class="product-mainn" ></a>
        <b><p>King 6153</p></b><P>1PC</P> <p><i class="fa-solid fa-star"></i>Rare </p><p><i class="fa-solid fa-euro-sign"></i> 1.80</p> </div>


        <div class="item2"> <a href="collection.php" target="_blank"><img src="media/post/post10.png" class="product-main1" ></a> <b><p>CT Vincent & Adines</p></b><P>1PC</P>
            <p><i class="fa-solid fa-star"></i>Super Rare </p> <p><i class="fa-solid fa-euro-sign"></i> 1.40</p> </div>

        <div class="item3"> <a href="collection.php" target="_blank"><img src="media/post/post7.png" class="product-main2"> </a>
        <b><p>Ficus Carical</p></b><P>1PC</P> <p><i class="fa-solid fa-star"></i>Super Rare </p> <p><i class="fa-solid fa-euro-sign"></i> 1.99</p></div>

        <div class="item4"><a href="collection.php" target="_blank"><img src="media/post/post2.png" class="product-main2">  </a><b><p>Cuba Correos</p></b><P>1PC</P><p><i class="fa-solid fa-star"></i>Rare </p><p><i class="fa-solid fa-euro-sign"></i> 1.60</p> </div>

        <div class="item5"> <a class="cart-items-btn" href="collection.php" target="_blank"><img src="media/post/post6.png" class="product-main1"> </a> <b><p>Bermuda</p></b><P>1PC</P><p><i class="fa-solid fa-star"></i>Common</p><p><i class="fa-solid fa-euro-sign"></i> 1.99</p> </div>
    </div>


<script>
    function validateForm() {
        var emailInput = document.getElementById("email");
        var email = emailInput.value.trim();

        // Check for either ".com" or ".nl"
        if (!(email.endsWith(".com") || email.endsWith(".nl"))) {
            alert("Email should end with '.com' or '.nl'");
            emailInput.focus();
            return false;
        }

        if (!emailInput.checkValidity()) {
            alert("Please enter a valid email address");
            emailInput.focus();
            return false;
        }

        alert("Thank you for your message. I will get back to you soon.");

        return true;

    }

</script>


<h1 id="C3" style="color: white">a</h1>
<div class="bg-img">

        <form action="php/form_email.php" method="post" class="container" onsubmit="return validateForm()">

        <br><h2>Contact</h2><br>
        <label ><b>Name</b></label>
        <input type="text" placeholder="Name" name="name" required>

        <label ><b>Email</b></label>
        <input type="text" name="email" id="email" placeholder="Email"  pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.(com|nl)$" required>

        <label ><b>Remark/Question:</b></label>
        <textarea name="message" placeholder="..." style="height:5vw" minlength="10" maxlength="250" required=""></textarea>
       
        <button type="submit" class="btn-contact">Send</button>
    </form>
</div>



</div>
<footer id="footer">
    <br>
    <hr>
    <div class="flex-containerfooter">
        <div class="flex-itemfooter"><i class="fa-regular fa-envelope"></i>: stamp-treasures@info.nl</div>
        <div class="flex-itemfooter"><i class="fa-solid fa-phone"></i>: 0612345678</div>
        <div class="flex-itemfooter"><i class="fa-brands fa-facebook"></i>: stamp-treasures.facebook</div>
        <div class="flex-itemfooter"><i class="fa-brands fa-instagram"></i>: stamp-treasures.instagram</div>


    </div>


    <p class="rechten">© Mariam Chamseddin-2023 All rights reserved</p>
    <br>
</footer>


</body>

</html>