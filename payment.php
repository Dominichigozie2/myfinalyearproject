<?php
ini_set('session.cache_limiter', 'public');
session_cache_limiter(false);
session_start();
include("config.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/payment.css">
  <!-- css link -->
  <!-- preloader css -->
  <link rel="stylesheet" href="./css/loader.css">
  <title>Document</title>
</head>

<body>


  <!-- preloader -->
  <div class="loader"></div>
  <!-- preloader -->
  <div class="payment-container">
    <form id="paymentForm">
      <h1>Secure Checkout</h1>
      <div class="form-group">
        <label for="email">Email Address</label>
        <input type="email" id="email-address" required />
      </div>
      <div class="form-group">
        <label for="amount">Amount</label>
        <input type="tel" id="amount" required />
      </div>
      <div class="form-group">
        <label for="first-name">First Name</label>
        <input type="text" id="first-name" />
      </div>
      <div class="form-group">
        <label for="last-name">Last Name</label>
        <input type="text" id="last-name" />
      </div>
      <div class="form-submit">
        <button type="submit" onclick="payWithPaystack()"> Pay </button>
      </div>
    </form>
    <div class="show">
      <div class="bg-cloth">
        <div class="header">
          <h1>JOBITECH</h1>
          <a href="index.php">Home</a>
        </div>
        <ul class="Totals">
          <li>Fees: <span>N 200</span></li>
          <li>Rental Fees: <span>N 200000</span></li>
          <li>Total Price: <span>N 200200</span></li>
        </ul>
        <div class="contact">
          <h1>contact</h1>
          <div class="phone">07046586037</div>
          <div class="phone">09014095007</div>
        </div>
        <marquee behavior="scroll">Thanks for choosing our school</marquee>
        <p class="support">For more info visit <a href="contact.php">support</a> team</p>
      </div>
    </div>
  </div>
  <script src="https://js.paystack.co/v1/inline.js"></script>
  <script src="./js/payment.js"></script>
  <script src="./js/loader.js"></script>
</body>

</html>