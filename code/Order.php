<!DOCTYPE html>
<html>
  <head>

<link rel="stylesheet" type="text/css" href="styles.css" />

<script type="text/javascript" src="java.js"></script>

  </head>
  <body>

    <h1 class="text1" id="text1">Grodel</h1>

    <button onclick="togglePopup()" id="B8" class="B8">≡</button>

    <div class="popup" id="popup-1">
     <div class="overlay"></div>
     <div class="content">
       <div class="close-btn" onclick="togglePopup()">×</div>

       <h1 id="h1_"><a href="index.php">Home</a></h1>
       <h1 id="h1_"><a href="Order.php">Order</a></h1>
     </div>
    </div>

<h2 class="h2" id="h2">Order</h2>

    <hr class="my-hr-line">

    <div class="container">

    </div>

<p class="p1"   id="p1">Your Order</p>
<form class="contact-form" action="contactform.php" method="post">

  <input type="text" name="name" placeholder="name" class="tag" id="tag">
  <br>
  <br>
  <input type="text" name="address" placeholder="address" class="tag" id="tag">
  <br>
  <br>
  <input type="text" name="e-mail" placeholder="e-mail" class="tag" id="tag">
  <br>
  <br>
  <textarea name="order" placeholder="order" class="tag" id="tag"></textarea>
  <br>
  <br>
  <br>
  <button type="submit" name="submit" class="b9" id="b9">Send Order</button>
</form>

  </body>
</html>
