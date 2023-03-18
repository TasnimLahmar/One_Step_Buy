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
          <li><a href="femme.php">Women Products</a></li>
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
      <h2 class="section-title">Men Products</h2>
      <!--content -->
      <div class="shop-content">
        <!--Box 1-->
        <div class="product-box">
          <img src="image/product-1.jpg" alt="" class="product-img" />
          <h2 class="product-title">PUMA Red T-shirt</h2>
          <span class="price">$25</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 2-->
        <div class="product-box">
          <img src="image/product-2.jpg" alt="" class="product-img" />
          <h2 class="product-title">HRX Shoes</h2>
          <span class="price">$100</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 3-->
        <div class="product-box">
          <img src="image/product-3.jpg" alt="" class="product-img" />
          <h2 class="product-title">Sport trousers</h2>
          <span class="price">$45</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 4-->
        <div class="product-box">
          <img src="image/product-4.jpg" alt="" class="product-img" />
          <h2 class="product-title">PUMA Blue T-Shirt</h2>
          <span class="price">$24.04</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 5-->
        <div class="product-box">
          <img src="image/product-5.jpg" alt="" class="product-img" />
          <h2 class="product-title">Grey JORDANS</h2>
          <span class="price">$160</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 6-->
        <div class="product-box">
          <img src="image/product-6.jpg" alt="" class="product-img" />
          <h2 class="product-title">PUMA Black T-shirt</h2>
          <span class="price">$23.45</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 7-->
        <div class="product-box">
          <img src="image/product-7.jpg" alt="" class="product-img" />
          <h2 class="product-title">HRX Socks</h2>
          <span class="price">$10.23</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 8-->
        <div class="product-box">
          <img src="image/product-8.jpg" alt="" class="product-img" />
          <h2 class="product-title">Fossil Black Watch</h2>
          <span class="price">$620</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
           <!--Box 9-->
           <div class="product-box">
          <img src="image/product-9.jpg" alt="" class="product-img" />
          <h2 class="product-title">Smart Black Watch</h2>
          <span class="price">$920</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
          <!--Box 10-->
          <div class="product-box">
          <img src="image/product-10.jpg" alt="" class="product-img" />
          <h2 class="product-title">HRX Black Shoes</h2>
          <span class="price">$220</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
         <!--Box 11-->
         <div class="product-box">
          <img src="image/product-11.jpg" alt="" class="product-img" />
          <h2 class="product-title">Grey Comfort Shoes</h2>
          <span class="price">$80</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
         <!--Box 12-->
         <div class="product-box">
          <img src="image/product-12.jpg" alt="" class="product-img" />
          <h2 class="product-title">Nike Black Trousers</h2>
          <span class="price">$20.99</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
      </div>
    </section>
    <!--link to JS-->
    <script src="home.js"></script>
  </body>
</html>
