<!-- These are the other sections of the web application that are linked to the blogs
view web page such are the theme,side bar and footer-->
<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>

<!--Page interface code -->
<div class="w3-main w3-white" style="font-family:Arial;font-size:15pt;margin-left:300px;margin-top:43px;">

  <header class="w3-container" style="padding-top:22px">
    <h3><b><i class="fa fa-newspaper-o"></i> Blog</b></h3> <!-- Update all page headings to <h3> -->
  </header>
 
 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 	<h2>Recent Blogs</h2>   
    
    <div align="right"> <a href="PostBlog.php" align="right" class="btn btn-primary">Create Blog Post <span class="glyphicon glyphicon-plus"></span></a></div>

 <div class="table-responsive" style="max-width:100%;">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
 
 	<table class="table table-hover" id="">
 		<thead>
 			<tr>
 				<th>Blog content:</th>
 				
 				
 			</tr>
 		</thead>
 		<tbody>
 			<?php
                        /*This section of the code will deal with fetching data from the blogdata table
                         * and display all the blogs currently stored there */
               $Bl = $db->query("SELECT * FROM blogdata ORDER BY blDate DESC");
               $result = $Bl->fetchAll(PDO::FETCH_OBJ);
               $c = $Bl->rowCount();
               $date = date('Y-m-d');

               foreach ($result as $j) {
               	 $b = $j->blID;
               	 $bT = $j->blTitle;
               	 $Txt = $j->blText;
               	 ///$Lks = $j->blLink;
                 $user = $j->userId;
                 $date = $j->blDate;
                 $username = "";

                 if(strlen($Txt) >= 150){
                 $Txt = substr($Txt,0,strpos($Txt, ' ',150));
                 }

                 $userQuery = $db->query("SELECT username FROM admin WHERE id = '$user'");
                 $r_user = $userQuery->fetchAll(PDO::FETCH_OBJ);
                 foreach($r_user as $i){
                     $username = $i->username;
                 }
               	

               	 
               	 ?>
                  <tr>
                  <td>
                  <div class="card" style="width: 100%;">
                     <div class="card-body">
                        <h3 class="card-title"><strong><?php echo $bT ?></strong></h3>
                        <h6 class="card-subtitle mb-2 text-muted"><?php echo $date; ?> Posted By: <?php echo $username;?></h6>
                        <p class="card-text"><?php echo $Txt ?></p>
                        <?php
                        if(strlen($Txt)>150){?>
                        <a style="position:absolute;right:0;bottom:0;margin-right:20px;margin-bottom:20px;font-size:10pt;" href="ViewBlog.php?id=<?php echo $b;?>" class="card-link">Read more...</a>
                       <?php }?>
                        <?php echo " "; ?>
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