<!-- These are the other sections of the web application that are linked to the blogs
view web page such are the theme,side bar and footer-->
<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<?php include 'theme/sidebar.php'; ?>
<?php include 'session.php'; ?>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<!--Page interface code -->
<div class="w3-main w3-white" style="font-family:Arial;font-size:15pt;margin-left:300px;margin-top:43px;">

  
  <header class="w3-container" style="padding-top:22px">
    <h3><b><i class="fa fa-newspaper-o"></i> Blog</b></h3> <!-- Update all page headings to <h3> -->
  </header>
 <?php
 if(!$_GET['id']){
     header('location: BlogsView.php');
 } else{
     $id = $_GET['id'];
     $query = $db->query("SELECT * FROM blogdata WHERE blID = '$id'");
     $blogs = $query->fetch(PDO::FETCH_OBJ);
     $blog = $blogs->blText;
     $title = $blogs->blTitle;
 }
 ?>
 
 <div class="w3-container" style="padding-top:22px">
 <div class="w3-row">
 <div align="right"><form>
 <input type="button" class="btn btn-danger btn-lg "value="Back" onclick="history.back()">
</form></div>
 	<h2><strong><?php echo $title; ?></strong> </h2>   
   <hr>
 <div class="container">
 <?php echo $blog; ?>
 </div>
 </div>
</div>


</div>


<?php include 'theme/foot.php'; ?>