<?php include 'setting/system.php'; ?>
<?php include 'theme/head.php'; ?>
<!--This part of the code is where the formation of the form will commence and ofcourse it is devided into section 
constituting of the login username and password area-->
<div class="container" >
	<div class="row" style="margin-top: 10%">
            <h1 class="text-center"><?php echo NAME_X; ?></h1><br>
   <div class="col-md-2 col-md-offset-2">
   </div>
		<div class="col-md-4">
			<form method="post" autocomplete="off">
				<div class="form-group">
				   <label class="control-label">Username</label>
				   <input type="text" name="username" class="form-control input-sm" required>
			    </div>

			    <div class="form-group">
				   <label class="control-label">Password</label>
				   <input type="password" name="password" class="form-control input-sm" required>
			    </div>
                
			    <button name="submit" type="submit" class="btn btn-md btn-dark">Log-in</button>
                            <button name="SUp" type="submit" class="btn btn-md btn-dark">Sign-Up</button>
			</form>
                    <div ><h3>About:</h3>
                    <p>Agro-Mortal is a farm management application that will help in keeping track of crops and cattle as well as managing them.</p>
                    <p>Agro-Mortal will give you the best of the blogs in one place so that you will get an updated feed of breaking news pertaining to the farming and agricultural industry in an easy-to-access place. - Additionally, the application will have an integrated API that displays the weather conditions so farmers can determine when they should go farming…</p>
                    <p>“Our success is not only due to the quality of our work, it’s down to attitude, our approach and the way we treat and help our clients and farmers”</p>
                    </div>
			<?php
                        /*Here php lines of code have been incorporated to connect to the database in combination with SQL
                        to fetch the username and the password from the database using SQL commands incorporated into php*/
                        //N.B DEFAULT USERNAME: admnin PASSWORD: password
              if (isset($_POST['submit'])) {
              	$username = trim($_POST['username']);
              	$password = $_POST['password'];

              	$hash = sha1($password);
                
                $q = $db->query("SELECT * FROM admin WHERE username = '$username' AND password = '$hash' LIMIT 1 ");

                $count = $q->rowCount();
                $rows = $q->fetchAll(PDO::FETCH_OBJ);

                if($count > 0){
                   foreach($rows as $row){
                     $user_id = $row->id;
                     $user = $row->username;

                     $_SESSION['id'] = $user_id;
                     $_SESSION['user'] = $user;

                     header('location: dashboard.php');
                   }
                }else{
                	$error = 'incorrect login details';
                }

              }
           //This is the sign up insertion statement when the user creates a new account
           if (isset($_POST['SUp'])) {
              	$username = trim($_POST['username']);
              	$password = $_POST['password'];

              	$hash = sha1($password);
                
                $insert = $db->query("INSERT INTO admin(username,password) VALUES('$username','$hash') ");
                $Scs='Successfully registered new account!';
                if($count < 0){
    
                }else{ ?>
                    <!-- Message pop-up to confirm new sign up-->
                	<div class="alert alert-success alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong><?php echo $Scs; ?>.</strong>
              </div>
                  <?php      
                }
              }
           //Sign up ends here

            if(isset($error)){ ?>
            <br><br>
               <div class="alert alert-danger alert-dismissable">
                  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                  <strong><?php echo $error; ?>.</strong>
              </div>
            <?php }
			?>
           
		</div>
	</div>
</div>

<!--This is the default footer attatched below-->
<?php include 'theme/foot.php'; ?>
