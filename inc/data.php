<!--This is the main backbone of the database here a header will keep count of how individual items 
are currently in stock,sold,the number of different breeds and the number of active
users-->
<?php
 $pCount = $uCount = $bCount = $qCount = '';

 $query = $db->query("SELECT * FROM pigs");
 $pCount = $query->rowCount();

 $quer = $db->query("SELECT * FROM breed");
 $bCount = $quer->rowCount();

 $que = $db->query("SELECT * FROM quarantine");
 $qCount = $que->rowCount();

 $qu = $db->query("SELECT * FROM admin");
 $uCount = $qu->rowCount();

?>

<!--Below is the interface set up for the actual data counter of everything currently stored on the 
database-->
<div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-yellow w3-padding-16">
        <div class="w3-left"><i class="fa fa-list w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $pCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Available Stock</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-padding-16">
        <div class="w3-left"><i class="fa fa-money w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $qCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Sold stock</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-yellow w3-padding-16">
        <div class="w3-left"><i class="fa fa-list w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $bCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Cattle Breeds In Stock
        </h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-green w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $uCount;  ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Active Users</h4>
      </div>
    </div>
  </div>