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

  <link rel="stylesheet" type="text/css" href="collection.css" />


  <title>Stamps Treasures</title>
</head>

<body>
<header>

  <ul class="nav-bar">
    <a href="index.php" target="_blank"><img src="media/logo2.png" class="logo"></a>
    <li><a href="index.php" target="_blank">Home</a></li>
    <li><a href="collection.html" target="_blank">Collection</a></li>
    <li><a href="index.php#C3" >Contact</a></li>
    <li><a href="login.html" target="_blank">Add</a></li>
  </ul>

</header>

<div class="banner">

</div>
  <div class="main">

    <h1>Our Collection</h1>
    <h2> Filter, Vieuw, Buy, Review, Comment on our stamps</h2><br>
    <hr>

    <div id="myBtnContainer">
      <button class="btn active" onclick="filterSelection('all')"> Show all</button>
      <button class="btn" onclick="filterSelection('nature')"> Nature</button>
      <button class="btn" onclick="filterSelection('animals')"> animals</button>
      <button class="btn" onclick="filterSelection('other')"> Other</button>
       <a class="btn" href="cart2.php" style="text-decoration: none; font-size: 14px; font-weight: bold; font-family: 'Work Sans', sans-serif; background-color:#881111; color: white"> <i class="fa-solid fa-cart-shopping"></i>  View Cart</a>

    </div>



    <script>
      function showMessage() {
        document.getElementById("hoverMessage").style.display = "block";
      }

      function hideMessage() {
        document.getElementById("hoverMessage").style.display = "none";
      }
    </script>

    <div class="row">
      <div class="column nature">
        <div class="content">
        <div onmouseover="showMessage()" onmouseout="hideMessage()">
          <div id="hoverMessage" class="hover-message">Click on the image to comment!</div>
          <a href="flower.html"> <img src="media/post/post1.png" alt="post" class="item" id="img1" style="width:14vw"></a>
        </div>
          <h4 >King 6153</h4>
          <p>1 pc</p>
          <p>Made on:6-1-2008</p>
          <p><i class="fa-solid fa-star"></i>Rare </p>
          <button class="bestelbtn" onclick="addItem('media/post/post1.png','King 6153', 1.80)";>Add to Cart</button>
          <p class="prijs"> 1.80 </p>
        </div>

      </div>

      <div class="column nature">
        <div class="content">
          <img src="media/post/post11.png" alt="post" class="item" id="img2" style="width:13vw">
          <h4>San Marino</h4>
          <p>1 pc</p>
          <p>Made on:23-8-1960</p>
          <p><i class="fa-solid fa-star"></i>Common </p>
          <button class="bestelbtn" onclick="addItem('media/post/post11.png','San Marino', 0.70)";>Add to Cart</button>
          <p class="prijs"> 0.70 </p>
        </div>
      </div>
      <div class="column nature">
        <div class="content">
          <img src="media/post/post13.png" alt="post" class="item" id="img2" style="width:13vw">
          <h4>Espana Acebion</h4>
          <p>1 pc</p>
          <p>Made on:21-7-1989</p>
          <p><i class="fa-solid fa-star"></i>Super Rare </p>
          <button class="bestelbtn" onclick="addItem('media/post/post13.png','Espana Acebion', 1.60)";>Add to Cart</button>
          <p class="prijs">  1.60 </p>
        </div>
      </div>


        <div class="column animals">
          <div class="content">
            <img src="media/post/post18.png" alt="post" class="item" id="img2" style="width:13vw">
            <h4>Espana Correos</h4>
            <p>1 pc</p>
            <p>Made on:12-5-1999</p>
            <p><i class="fa-solid fa-star"></i> Rare </p>
            <button type="button" class="bestelbtn" onclick="addItem('media/post/post18.png','Espana Correos', 1.20)">Add to Cart</button>
            <p class="prijs">  1.20 </p>
          </div>
        </div>
        <div class="column animals">
          <div class="content">
            <img src="media/post/post19.png" alt="post" class="item" id="img1" style="width:14vw">
            <h4>China monkey</h4>
            <p>1 pc</p>
            <p>Made on:27-8-2002</p>
            <p><i class="fa-solid fa-star"></i>Rare </p>
            <button type="button" class="bestelbtn" onclick="addItem('media/post/post19.png', 'China monkey', 1.40)">Add to Cart</button>
            <p class="prijs">  1.40 </p>
          </div>
        </div>
        <div class="column animals">
          <div class="content">
            <img src="media/post/post16.png" alt="post" class="item"  id="img2" style="width:13vw">
            <h4>Bird 126</h4>
            <p>1 pc</p>
            <p>Made on:6-2-2012</p>
            <p><i class="fa-solid fa-star"></i>Common </p>
            <button type="button" class="bestelbtn" onclick="addItem('media/post/post16.png','Bird 126', 0.80)">Add to Cart</button>
            <p class="prijs"> 0.80 </p>
          </div>
        </div>

      <div class="column other">
        <div class="content">
          <img src="media/post/post23.png" alt="post" class="item" id="img2" style="width:12vw">
          <h4>Nouvelle Caledone</h4>
          <p>1 pc</p>
          <p>Made on:22-9-2017</p>
          <p><i class="fa-solid fa-star"></i>Common </p>
          <button type="button" class="bestelbtn" onclick="addItem('media/post/post23.png','Nouvelle Caledone', 0.60)">Add to Cart</button>
          <p class="prijs"> 0.60 </p>
        </div>
      </div>
      <div class="column other">
        <div class="content">
          <img src="media/post/post22.png" alt="post" class="item" id="img1" style="width:14vw">
          <h4>KGL Danmark 25</h4>
          <p>1 pc</p>
          <p>Made on:12-4-1951</p>
          <p><i class="fa-solid fa-star"></i>Super Rare </p>
          <button type="button" class="bestelbtn" onclick="addItem('media/post/post22.png','KGL Danmark 25', 3.90)">Add to Cart</button>
          <p class="prijs">  3.90 </p>
        </div>
      </div>
      <div class="column other">
        <div class="content">
          <img src="media/post/post21.png" alt="post" class="item" id="img2" style="width:12vw">
          <h4>Cuba</h4>
          <p>1 pc</p>
          <p>Made on:9-11-2003</p>
          <p><i class="fa-solid fa-star"></i>Rare </p>
          <button type="button" class="bestelbtn" onclick="addItem('media/post/post21.png','Cuba', 2.40)">Add to Cart</button>
          <p class="prijs"> 2.40 </p>
        </div>
      </div>

      <h2>Last added</h2>

          <?php
          error_reporting(E_ALL);
          ini_set('display_errors', 1);
          include 'php/config.php';

          $sql = "SELECT * FROM verzamelaar";

          $result = $conn->query($sql);

          if ($result->num_rows > 0) {
              echo '<div class="row" >';

              while ($row = $result->fetch_assoc()) {

                  echo '<div class="contentt">';
                  echo "<img class='php-img' style='max-width: 80%; border-radius: 5px;  box-shadow: 0 10px 30px 5px rgba(0, 0, 0, 0.2);' src='media/{$row['image']}' alt='Project Image' />";
                  echo "<h4>{$row['naam']}</h4>";
                  echo "<p>{$row['pc']}</p>";
                  echo "<p> Made on:{$row['datum']}</p>";
                  echo "<p>{$row['rare']}</p>";
                  echo "<button class='bestelbtn'> Add to Cart </button>";
                  echo "<p class='prijs'>{$row['prijs']}</p>";
                  echo '</div>';

              }

              echo '</div>';
          } else {
              echo 'No data found.';
          }

          $conn->close();

          ?>

    </div>
        <script>
            function addItem( imageUrl, name, price) {
                // Retrieve the cart data from local storage or a server
                let cart = JSON.parse(localStorage.getItem('cart')) || [];

                // Add the new item to the cart
                cart.push({  imageUrl, name, price});

                // Store the updated cart data
                localStorage.setItem('cart', JSON.stringify(cart));
            }

        </script>

  </div>

  <script>
    filterSelection("all")
    function filterSelection(c) {
      var x, i;
      x = document.getElementsByClassName("column");
      if (c == "all") c = "";
      for (i = 0; i < x.length; i++) {
        w3RemoveClass(x[i], "show");
        if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
      }
    }

    function w3AddClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        if (arr1.indexOf(arr2[i]) == -1) {element.className += " " + arr2[i];}
      }
    }

    function w3RemoveClass(element, name) {
      var i, arr1, arr2;
      arr1 = element.className.split(" ");
      arr2 = name.split(" ");
      for (i = 0; i < arr2.length; i++) {
        while (arr1.indexOf(arr2[i]) > -1) {
          arr1.splice(arr1.indexOf(arr2[i]), 1);
        }
      }
      element.className = arr1.join(" ");
    }



    var btnContainer = document.getElementById("myBtnContainer");
    var btns = btnContainer.getElementsByClassName("btn");
    for (var i = 0; i < btns.length; i++) {
      btns[i].addEventListener("click", function(){
        var current = document.getElementsByClassName("active");
        current[0].className = current[0].className.replace(" active", "");
        this.className += " active";
      });
    }
  </script>


    <script>
      function openModal(imageSrc) {
        var modal = document.getElementById("myModal");
        var modalImage = document.getElementById("modal-image");

        modal.style.display = "block";
        modalImage.src = imageSrc;
      }

      function closeModal() {
        var modal = document.getElementById("myModal");
        modal.style.display = "none";
      }
    </script>


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