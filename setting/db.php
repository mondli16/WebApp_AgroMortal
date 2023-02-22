<!--This is the main backbone of the database and this page of the application
will be entirely focused on connecting the database to the web application
and allow it connect and extract all the data stored on the database-->
<?php
try {
	$db = new PDO('mysql:host=localhost;dbname=pig','root','Storyline17');
	$db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	die('<h4 style="color:red">Incorrect Connection Details</h4>');
}