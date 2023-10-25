<!DOCTYPE html>
<html>
<head>
  <title>Shopping Cart</title>
    <link rel="icon" type="image/PNG" href="media/post/post1.png">
</head>
<body>

<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f0f0f0;
    }

    h1 {
        text-align: center;
        margin-top: 20px;
    }

    #cart-items {
        list-style: none;
        padding: 0;
        margin: 1vw 30vw;
    }

    #cart-items li {
        background-color: #fff;
        margin-bottom: 10px;
        padding: 10px;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    #cart-items img {
        max-width: 80px;
        margin-right: 10px;
    }

    #cart-items span {
        flex-grow: 1;
    }

    #cart-items button {
        background-color: #881111;
        color: #fff;
        border: none;
        padding: 5px 10px;
        font-size: 0.9rem;
        cursor: pointer;
        margin-left: 10px;
    }

    #cart-total {
        font-size: 1.2rem;
        margin-top: 10px;
        text-align: right;
    }

    #clear-cart {
        background-color: #881111;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        cursor: pointer;
        margin: 2vw 20vw;
        float: left;
    }
    #clear-cart:hover {
        background-color: #fff;
        color: #881111;

    }

    a {
        background-color: #881111;
        color: #fff;
        border: none;
        padding: 10px 20px;
        font-size: 1rem;
        cursor: pointer;
        margin: 2vw 20vw;
        float: left;
        text-decoration: none;
    }

    a:hover {
        background-color: #ffffff;
        color: #881111;

    }
</style>




<h1>Shopping Cart</h1>
<ul id="cart-items">
  <!-- Cart items will be displayed here -->
</ul>
<div>
  <h2 style=" float:right; margin: 1vw 30vw;">Total: <span id="cart-total">$0.00</span></h2>
  <button id="clear-cart">Clear Cart</button><br>
</div>
<a href="collection.php">Back to Shopping</a><br><br>

<script>

  let cart = JSON.parse(localStorage.getItem('cart')) || [];


  const cartItemsElement = document.getElementById('cart-items');
  const cartTotalElement = document.getElementById('cart-total');
  const clearCartButton = document.getElementById('clear-cart');

  function updateCartDisplay() {
    cartItemsElement.innerHTML = '';
    let total = 0;

    cart.forEach((item, index) => {
      const listItem = document.createElement('li');


      const image = document.createElement('img');
      image.src = item.imageUrl;
      image.alt = item.name;
      image.style.width = '100px';
      listItem.appendChild(image);


      const itemName = document.createElement('span');
      itemName.textContent = item.name;
      listItem.appendChild(itemName);


      const itemPrice = document.createElement('span');
      itemPrice.textContent = `$${item.price.toFixed(2)}`;
      listItem.appendChild(itemPrice);


      const removeButton = document.createElement('button');
      removeButton.textContent = 'Remove';
      removeButton.addEventListener('click', () => {

        cart.splice(index, 1);

        localStorage.setItem('cart', JSON.stringify(cart));

        updateCartDisplay();
      });

      listItem.appendChild(removeButton);
      cartItemsElement.appendChild(listItem);
      total += item.price;
    });

    cartTotalElement.textContent = `$${total.toFixed(2)}`;
  }


  updateCartDisplay();


  clearCartButton.addEventListener('click', () => {
    cart = [];
    localStorage.setItem('cart', JSON.stringify(cart));
    updateCartDisplay();
  });


////////////////////////// /////////////////////////////////////


  function saveCartToDatabase() {
    const cartData = JSON.stringify(cart);


    const xhr = new XMLHttpRequest();


    const url = 'cart2.php';
    const method = 'POST';


    xhr.open(method, url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');


    xhr.onreadystatechange = function () {
      if (xhr.readyState === 4 && xhr.status === 200) {

        console.log(xhr.responseText);
      }
    };


    xhr.send('cartData=' + encodeURIComponent(cartData));
  }
</script>


</body>
</html>
