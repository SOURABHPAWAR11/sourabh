<?php 
//session_start();
if(isset($_SESSION['email'])){?>
<header>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;Mobile Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
	    <li class="nav-item">
          <a class="nav-link " href="contactus.php"><i class="fas fa-phone-square-alt mr-2"></i>Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php"><i class="fas fa-mobile-alt mr-2"></i>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="logout.php"><i class="fas fa-sign-in-alt mr-2"></i>logout</a>
        </li>
		
      </ul>
    </div>
  </nav>
  </header>
  
  <?php }else{?>
  
  <header>
  <nav class="navbar navbar-expand-md bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php"><i class="fas fa-mobile-alt"></i>&nbsp;&nbsp;Mobile Store</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav ml-auto">
	    <li class="nav-item">
          <a class="nav-link " href="contactus.php"><i class="fas fa-phone-square-alt mr-2"></i>Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="index.php"><i class="fas fa-mobile-alt mr-2"></i>Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#"><i class="fas fa-th-list mr-2"></i>Categories</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="checkout.php"><i class="fas fa-money-check-alt mr-2"></i>Checkout</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cart.php"><i class="fas fa-shopping-cart"></i> <span id="cart-item" class="badge badge-danger"></span></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="login.php"><i class="fas fa-sign-in-alt mr-2"></i>login</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="register.php"><i class="fas fa-sign-out-alt mr-2">Register</i></a>
        </li>
      </ul>
    </div>
  </nav>
  </header>
  
  <?php }?>
	
	
			<div class="divider">
		</div>
	