<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>One step buy</title>
    <!--link to CSS-->
    <link rel="stylesheet" href="home.css" />
    <!--box icons-->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css"
    />
  </head>
  <body>
    <!--navbar-->
    <header>
      <a href="#" class="logo"> One Step Buy</a>

      <ul class="navbar">
        <li><a href="#new">New Arrival</a></li>
        <li><a href="homme.php">Men Products</a></li>
        <li><a href="femme.php">Women Products</a></li>
        <li><a href="enfant.php">Kid Products</a></li>
        <li><a href="about us.php">About Us</a></li>
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
        <a href="login system/login_form.php"><i class="bx bx-user" id="user-icon" title="Login|Sign Up"></i></a>
        <!--search Box-->
        <div class="search-box">
          <input type="search" name="" id="" placeholder="Search Here..." />
        </div>
      </div>
    </header>
    <!--Home-->
    <section class="home" id="home">
      <div class="home-text">
        <span>Shop Now</span>
        <h1>
          New Arrival of <br/>
          Fresh Products
        </h1>
        <a href="#" class="btn">Shop Now</a>
      </div>
    </section>
    <!--New Arrivals-->

    <!--Shop-->
    <section class="shop products">
      <div class="heading">
        <h1>New <span>Arrival</span></h1>
      </div>

      <!--content -->
      <div class="shop-content">
        <!--Box 1-->
        <div class="product-box">
          <img src="image/product-1.jpg" alt="" class="product-img" />
          <h2 class="product-title">PUMA Red T-shirt</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>

          <span class="price">$25</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 2-->
        <div class="product-box">
          <img src="image/product-2.jpg" alt="" class="product-img" />
          <h2 class="product-title">HRX Shoes</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$100</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 3-->
        <div class="product-box">
          <img src="image/product-3.jpg" alt="" class="product-img" />
          <h2 class="product-title">Sport trousers</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$45</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 4-->
        <div class="product-box">
          <img src="image/product-4.jpg" alt="" class="product-img" />
          <h2 class="product-title">PUMA Blue T-Shirt</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$24.04</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
      </div>

      <div class="heading">
        <a href="homme.php"
          ><h1>Men<span>Products</span></h1></a
        >
      </div>
      <!--content -->
      <div class="shop-content">
        <!--Box 1-->
        <div class="product-box">
          <img src="image/product-1.jpg" alt="" class="product-img" />
          <h2 class="product-title">PUMA Red T-shirt</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$25</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 2-->
        <div class="product-box">
          <img src="image/product-2.jpg" alt="" class="product-img" />
          <h2 class="product-title">HRX Shoes</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$100</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 3-->
        <div class="product-box">
          <img src="image/product-3.jpg" alt="" class="product-img" />
          <h2 class="product-title">Sport trousers</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$45</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 4-->
        <div class="product-box">
          <img src="image/product-4.jpg" alt="" class="product-img" />
          <h2 class="product-title">PUMA Blue T-Shirt</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$24.04</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
      </div>
      <div class="heading">
        <a href="femme.php"
          ><h1>Women<span>Products</span></h1></a>
      </div>
      <!--content -->
      <div class="shop-content">
        <!--Box 1-->
        <div class="product-box">
          <img src="image/product-1.jpg" alt="" class="product-img" />
          <h2 class="product-title">PUMA Red T-shirt</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$25</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 2-->
        <div class="product-box">
          <img src="image/product-2.jpg" alt="" class="product-img" />
          <h2 class="product-title">HRX Shoes</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$100</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 3-->
        <div class="product-box">
          <img src="image/product-3.jpg" alt="" class="product-img" />
          <h2 class="product-title">Sport trousers</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$45</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 4-->
        <div class="product-box">
          <img src="image/product-4.jpg" alt="" class="product-img" />
          <h2 class="product-title">PUMA Blue T-Shirt</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$24.04</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
      </div>
      <div class="heading">
        <a href="enfant.php">
          <h1>Kid<span>Products</span></h1></a
        >
      </div>
      <!--content -->
      <div class="shop-content">
        <!--Box 1-->
        <div class="product-box">
          <img src="image/product-1.jpg" alt="" class="product-img" />
          <h2 class="product-title">PUMA Red T-shirt</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$25</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 2-->
        <div class="product-box">
          <img src="image/product-2.jpg" alt="" class="product-img" />
          <h2 class="product-title">HRX Shoes</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$100</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 3-->
        <div class="product-box">
          <img src="image/product-3.jpg" alt="" class="product-img" />
          <h2 class="product-title">Sport trousers</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$45</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
        <!--Box 4-->
        <div class="product-box">
          <img src="image/product-4.jpg" alt="" class="product-img" />
          <h2 class="product-title">PUMA Blue T-Shirt</h2>
          <div class="star">
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star"></i>
            <i class="bx bxs-star-half"></i>
          </div>
          <span class="price">$24.04</span>
          <i class="bx bx-shopping-bag add-cart"></i>
        </div>
      </div>
    </section>
    <!--Reviews-->
    <section class="reviews" id="reviews">
        <div class="heading">
            <h1>Our <span>Customer's</span> </h1>
        </div>
        <div class="reviews-container">
            <div class="box">
                <img src="image/r1.jpg" alt="">
                <div class="star">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                  </div>
                  <p>this website is Awesome </p>
                  <h2>Will Smith</h2>

            </div>
            <div class="box">
                <img src="image/r2.webp" alt="">
                <div class="star">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                  </div>
                  <p>this is the best website I have ever used !</p>
                  <h2>Alaia Mcbroom</h2>
                  
            </div>
            <div class="box">
                <img src="image/r3.webp" alt="">
                <div class="star">
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star"></i>
                    <i class="bx bxs-star-half"></i>
                  </div>
                  <p>this website is My favorite! </p>
                  <h2>Adam Miller</h2>
                  
            </div>
        </div>
    </section>
    <!--Footer-->
    <section class="footer">
      <div class="footer-box">
        <h2>One Step Buy</h2>
        <p>You are in the right place</p>
        <div class="social">
          <a href="#"><i class='bx bxl-facebook'></i></a>
          <a href="#"><i class='bx bxl-twitter'></i></a>
          <a href="#"><i class='bx bxl-instagram'></i></a>
          <a href="#"><i class='bx bxl-tiktok'></i></a>

        </div>
      </div>
      <div class="footer-box">
        <h3>Support</h3>
        <li><a href="#">Product</a></li>
        <li><a href="#">Help & Support</a></li>
        <li><a href="#">Return Policy</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">FAQ</a></li>
      </div>
      <div class="footer-box">
        <h3>Our Branches</h3>
        <li><a href="#">Tunisia</a></li>
        <li><a href="#">Algeria</a></li>
        <li><a href="#">Egypt</a></li>
        <li><a href="#">France</a></li>
        <li><a href="#">Marocco</a></li>
      </div>
      <div class="footer-box">
        <h3>Payment Methods</h3>
        <div class="payment">
          <img src="image/visa.jpg" alt="">
          <img src="image/mastercard.png" alt="">
          <img src="image/d17.png" alt="">
          <img src="image/paypal.png" alt="">
        </div>
      </div>
    </section>

    <!--link to js-->

    <script src="home.js"></script>
  </body>
</html>
