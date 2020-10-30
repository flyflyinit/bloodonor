
<?php 

	session_start();

	if (isset($_SESSION['username'])) {
		echo "logged in";
		header("Location:admin.php");
	}



		if (isset($_POST["submit"])) {

		$DSN='mysql:host=localhost;dbname=base';
		$conn=new PDO($DSN,'root','');

		$sql = "select username,password from admins ; " ;
		$prDataBase=$conn->query($sql);


		while($dataRows=$prDataBase->fetch() ){
			$found = false ;
			$uname=$dataRows["username"]; 
			$pwd=$dataRows["password"];
			if ($uname == $_POST["username"] && $pwd == $_POST["password"] ) {
				$_SESSION["username"] = $uname;
				ob_start();
			    header('Location:'."admin.php");
			    ob_end_flush();
			    die();
			    $found = true ;
			}
				
			
		}
		if ($found == false) {
			echo "<div class='alert alert-danger' role='alert'>username or password are incorrect</div>";
		}

		}





?>


<!DOCTYPE html>
<html>
<head>
	<title></title>

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
	<style type="text/css">
		body
{
 width:40%;
 margin:0 auto;
 padding:50px;
 background-image: url('background.png');
 background-repeat: no-repeat;
  background-size: cover;
font-family: "Arial";
font-size: 18px ;
;

}
</style>

</head>

<body>





<form action="main.php" method="post">
<br>
<br>
<br>
<div class="container">
  <div class="form-group">
    <label for="exampleInputEmail1"><b>Username</b></label>
    <input type="text" class="form-control" placeholder="Enter Username" id="username" name="username" required>
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    <br>
    <label for="exampleInputPassword1"><b>Password</b></label>
    <input type="password" class="form-control" placeholder="Enter Password" id="password" name="password" required>
    <br>
    <button type="submit" class="btn btn-success btn-block" name="submit" >Login</button>
  </div>
</form>
<form   action='index.html' > 
	<button  type="submit" class="btn btn-outline-danger" >Back</button> 
</form>
</div>

</body>
</html>