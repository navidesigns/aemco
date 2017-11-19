<header class="main-header">
  <div class="container">
    <div class="row">
      <div class="col-md-3">
        <a href="index.php" class="logo">
          <i data-icon="&#xe000;"></i>
        </a>
        <button class="nav-toggle">
          <span></span></button>
      </div>
      <div class="col-md-9">
        <div class="nav-items">
          <div class="lan">
            <button class="en active">English</button>
            <button class="ar">Arabic</button>
          </div>
          <nav class="main-nav">
            <ul class="nav">
              <li>
              <?php
                if ($thisPage=='homepage')
                {echo '<span class="static">Home</span>';}
                else
                {echo '<a href="index.php">Home</a>';}?>
              </li>
              <li>
              <?php
                if ($thisPage=='aboutus')
                {echo '<span class="static">About Us</span>';}
                else
                {echo '<a href="aboutus.php">About us</a>';}?>
              </li>
              <li class="products_page">
                <a href="products.php">Products</a>
              </li>
              <li class="services_page">
                <a href="services.php">Serviecs</a>
              </li>
              <li class="careers_page">
                <a href="careers.php">Careers</a>
              </li>
              <li class="contact_page">
                <a href="contact.php">Contact</a>
              </li>
            </ul>
          </nav>
        </div>
      </div>
    </div>
  </div>
</header>
