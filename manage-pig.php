<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>


<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> Stock Management</b></h5>
  </header>
 

 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>Manage Stock</h2>
  <a href="add-pig.php" class="btn btn-sm btn-primary pull-right"><i class="fa fa-plus"></i> Add New Stock</a><br><br>
 <div class="table-responsive">
 	<table class="table table-hover table-striped" id="table">
 		<thead>
 			<tr>
 				<th>Photo</th>
 				<th>Product No.</th>
 				<th>Type of Stock</th>
 				<th>Weight of Stock</th>
 				<th>Gender(Animals)</th>
 				<th>Arrived/Harvested</th>
 				<th>Desc.</th>
                                <th>Price</th>
                                <th>Sell some stock?</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
                        /*Here the code to display all the stock available from the database will be generated
                        everything including the pictures of the products*/
       $all_Stk = $db->query("SELECT * FROM pigs ORDER BY Breed DESC");
       $fetch = $all_Stk->fetchAll(PDO::FETCH_OBJ);
       foreach ($fetch as $j) {
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
                   
                  	<td><img src="<?php echo $pic; ?>" width="130" height="120" class="thumbnail img img-responsive"></td>
                  	<td><?php echo $pigname; ?></td>
                  	<td><?php echo $br ; ?></td>
                  	<td><?php echo $weight; ?></td>
                  	<td><?php echo $gender; ?></td>
                        <td><?php echo $arr; ?></td>
                  	<td><?php echo $remark; ?></td>
                        <td><?php echo $Prcc; ?></td>
                        <td>  
               <div class="dropdown">
                  <button class="btn btn-sm btn-default dropdown-toggle" type="button" data-toggle="dropdown"><i class="fa fa-cog"></i> Option
                  <span class="caret"></span></button>
                  <ul class="dropdown-menu">
                    <li><a onclick="return confirm('Continue to delete the livestock?')" href="delete.php?id=<?php echo $j->id ?>"><i class="fa fa-trash"></i> Delete record</a></li>
                    <li><a onclick="return confirm('Continue to sell the livestock ?')" href="quarantine.php?id=<?php echo $j->id; ?>"><i class="fa fa-paper-plane"></i> Sellstock</a></li>
                  </ul>
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