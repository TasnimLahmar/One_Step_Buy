

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact Form</title>
    <link rel="stylesheet" type="text/css" href="contactus.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
  </head>
  <body>
    <div class="container">
      <span class="big-circle"></span>
      <img src="img/shape.png" class="square" alt="" />
      <div class="form">
        <div class="contact-info">
          <h3 class="title">Let's get in touch</h3>
          <p class="text">
            We will make sure to respond to your message in less than an hour!
            Our staff is always there to help you have a fluent,confortable and 
            amazing shopping experience .
          </p>

          <div class="info">
            <div class="information">
              <img src="img/location.png" class="icon" alt="" />
              <p> BP 264 Sousse Erriadh 4023</p>
            </div>
            <div class="information">
              <img src="img/email.png" class="icon" alt="" />
              <p>tasnim.lahmer11@gmail.com</p>
            </div>
            <div class="information">
              <img src="img/phone.png" class="icon" alt="" />
              <p>+216 96 321 215</p>
            </div>
          </div>

          <div class="social-media">
            <p>Connect with us :</p>
            <div class="social-icons">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
              <a href="#">
                <i class="fab fa-instagram"></i>
              </a>
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </div>
          </div>
        </div>

        <div class="contact-form">
          <span class="circle one"></span>
          <span class="circle two"></span>

          <form action="send.php" method="POST">
            <h3 class="title">Contact us</h3>
            <div class="input-container">
              <input type="text" name="name" class="input" placeholder="Username"/>
              
              
            </div>
            <div class="input-container">
              <input type="email" name="email" class="input" placeholder=" E_mail"/>
              
             
            </div>
            <div class="input-container">
              <input type="tel" name="phone" class="input" placeholder=" Phone Number" />
             
             
            </div>
            <div class="input-container textarea">
              <textarea name="message" class="input" placeholder=" Message"></textarea>
            
              
            </div>
            <input type="submit" name="submit" value="Send" class="btn" />
          </form>
        </div>
      </div>
    </div>

    <script src="app.js"></script>
  </body>
</html>
