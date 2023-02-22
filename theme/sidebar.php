<!--This section of the code will deal with displaying the side bar or rather the side navigation-->

<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><?php echo NAME_X; ?></span>
</div>

<nav class="w3-sidebar w3-collapse w3-yellow w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="theme/default_avatar.jpg" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar" >
      <span>Welcome to AgroMortals, <strong><?php echo ucwords($_SESSION['user']); ?></strong></span><br>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Menu</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="dashboard.php" class="w3-bar-item w3-button w3-padding "><i class="fa fa-users fa-fw"></i>  Dashboard</a>
    <a href="manage-pig.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-eye fa-fw"></i>  Manage Stock</a>
    <a href="manage-breed.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-qq fa-fw"></i>  Cattle Breed Management</a>
    <a href="manage-quarantine.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-money fa-fw"></i>  Sold stock</a>
    <a href="BlogsView.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-newspaper-o fa-fw"></i>  View Blogs</a>
    <a href="WeatherPage.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-filter fa-fw"></i>  Temperatures</a>
    <a href="logout.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-power-off fa-fw"></i>  Log out</a><br><br>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>