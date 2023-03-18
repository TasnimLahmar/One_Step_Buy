<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>One Step Buy</title>
    <!--link to css-->
    <link rel="stylesheet" href="product.css" />
    <!--Box icons-->
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
  </head>
  <body>
    <!--header-->
    <header>
      <!--Nav-->
     
        <a href="#" class="logo"> One Step Buy</a>
  
        <ul class="navbar">
          <li><a href="home.php">Home</a></li>
          <li><a href="homme.php">Men Products</a></li>
          <li><a href="enfant.php">Kid Products</a></li>
          <li><a href="#review">Reviews</a></li>
          <li><a href="contactus.php">Contact Us</a></li>
        </ul>
        <!--Icons-->
        <div class="header-icons">
          <i class="bx bx-menu" id="menu-icon" title="menu"></i>
          <i class="bx bx-search" id="search-icon" title="search"></i>
          
          <!--cart-Icon-->
          <i class="bx bx-cart-alt" id="cart-icon" title="Your cart"></i>
          <!--cart-->
          <div class="cart">
            <h2 class="cart-title">Your Cart</h2>
          
           <!--Content-->
           <div class="cart-content">
            <div class="cart-box">
              <img src="image/product-1.jpg" alt="" class="cart-img" />
              <div class="detail-box">
                <div class="cart-product-title">PUMA Red T-Shirt</div>
                <div class="cart-price">$25.32</div>
                <input type="number" value="1" class="cart-quantity" />
              </div>
              <!--Remove Cart-->
              <i class="bx bxs-trash cart-remove"></i>
            </div>

           </div>
          
          
        
        
          <!--Total-->
          <div class="total">
            <div class="total-title"><pre>Total </pre></div>
            <div class="total-price">$0</div>
          </div>
          
          <!--Buy Button-->
          <button type="button" class="btn-buy"> <a style="text-decoration: none; color:white;" href="payment.php">Buy Now</a> </button>
          <!--Cart Close-->
          <i class="bx bx-x" id="close-cart"></i>
          </div>
          <!--user-->
          <i class="bx bx-user" id="user-icon" title="Login|Sign Up"></i>
          <!--search Box-->
          <div class="search-box">
            <input type="search" name="" id="" placeholder="Search Here..." />
          </div>
          
      </div>
    </header>

    <!--Shop-->
    <section class="shop container">
      <h2 class="section-title">Women Products</h2>
      <!--content -->
      <div class="shop-content">
        <!--Box 1-->
        <div class="product-box">
          <img src="image/f1.jpg" alt="" class="product-img" />
          <h2 class="product-title">Dream Fashion Dress - Dentelle</h2>
          <span class="price">$250</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 2-->
        <div class="product-box">
          <img src="image/f2.jpg" alt="" class="product-img" />
          <h2 class="product-title">Large Green trousers</h2>
          <span class="price">$20</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 3-->
        <div class="product-box">
          <img src="image/f3.jpg" alt="" class="product-img" />
          <h2 class="product-title"> Black Satin trousers</h2>
          <span class="price">$45</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 4-->
        <div class="product-box">
          <img src="image/f4.jpg" alt="" class="product-img" />
          <h2 class="product-title">Sweat-shirt Be Kind - Molleton - Black </h2>
          <span class="price">$14.04</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 5-->
        <div class="product-box">
          <img src="image/f5.jpg" alt="" class="product-img" />
          <h2 class="product-title">Zoom Fa Sweat-shirt - Sticker - Grey</h2>
          <span class="price">$8.50</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 6-->
        <div class="product-box">
          <img src="image/f6.jpg" alt="" class="product-img" />
          <h2 class="product-title">Daniel Wellington Watch - Classic Bayswater - Blue</h2>
          <span class="price">$230.45</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 7-->
        <div class="product-box">
          <img src="image/f7.jpg" alt="" class="product-img" />
          <h2 class="product-title">Guess Bague - silver DRAGON FLY with strass</h2>
          <span class="price">$80.23</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 8-->
        <div class="product-box">
          <img src="image/f8.jpg" alt="" class="product-img" />
          <h2 class="product-title">Running Sneakers Black - Nubuck</h2>
          <span class="price">$20</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
           <!--Box 9-->
           <div class="product-box">
          <img src="image/f9.jpg" alt="" class="product-img" />
          <h2 class="product-title">Sneakers LC 866 - White</h2>
          <span class="price">$50</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
          <!--Box 10-->
          <div class="product-box">
          <img src="image/f10.jpg" alt="" class="product-img" />
          <h2 class="product-title">LC Waikiki COAT - Pink</h2>
          <span class="price">$43.54</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
         <!--Box 11-->
         <div class="product-box">
          <img src="image/f11.jpg" alt="" class="product-img" />
          <h2 class="product-title">Euphoria Home Sweat-shirt</h2>
          <span class="price">$10</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
         <!--Box 12-->
         <div class="product-box">
          <img src="image/f12.jpg" alt="" class="product-img" />
          <h2 class="product-title">Jeans - Large - Chic</h2>
          <span class="price">$20.99</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
      </div>
    </section>
    <!--link to JS-->
    <script src="home.js"></script>
  </body>
</html>