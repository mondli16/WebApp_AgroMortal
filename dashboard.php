<!--Bellow are the web pages connected to the dashboard page of the web application -->
<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<!--The user interface content of the web application will commence here
including the design and sub divisions that can be visiaully observed by the user-->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- This section contains the header section code of the  -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>
 
 <?php include 'inc/data.php'; ?>
 <!--The display of the dashboard is contained here especially with regards to the setting of the way the
dashboard is set up -->
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>Recent Stock</h2>
 <div class="table-responsive">
 	<table class="table table-hover" id="table">
 		<thead>
 			<tr>
 				<!--This table will display everything currently stored on the database with regards
                                to the stock that is currently available on the farm-->
                                <th>Stock</th>
        
 			</tr>
 		</thead>
 		<tbody style="font-family:Calibri;font-size:18pt;">
 			<?php
                        /*Ths php code will generate all the information from within the database
                          that will display all the data related to the stock of the farm */
               $qpi = $db->query("SELECT * FROM pigs ORDER BY arrived");
               $result = $qpi->fetchAll(PDO::FETCH_OBJ);
               $c = $qpi->rowCount();

               foreach ($result as $j) {
                 $pic = $j->img;
               	 $pigname = $j->pigno;
               	 $br = $j->Breed;
               	 $weight = $j->weight;
               	 $gender = $j->gender;
                 $arr = $j->arrived;
                 $remark = $j->remark;
                 $Prcc=$j->Price;
               	 
               	 ?>
                  <tr>
                  	<td>
                       <div class="card mb-3" width="100" >
  <div class="row g-0">
    <div class="col-md-4">
      <img src="<?php echo $pic; ?>" style="max-width: 280px;max-height:346px;" class="img-fluid thumbnail rounded-start" alt="...">
    </div>
    <div class="col-md-8">
      <div class="card-body">
          <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

        <h5 class="card-title"><?php echo $pigname; ?></h5>
        <p class="card-text"><?php echo $remark; ?></p> 
        <p class="card-text"style="position:absolute; bottom:0; right:0; font-size:15pt; color:#009900;"><strong><?php echo $Prcc;?></strong></p>
      </div>
    </div>
  </div>
</div>
                      </td>
                  </tr>
               	 <?php
                 }
              
 			?>
 		</tbody>
 	</table>
 </div>
 </div>
</div>


</div>


<?php include 'theme/foot.php'; ?>