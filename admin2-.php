<?php  

	session_start();
	if ($_SESSION['username']) {
		echo "<div id=text> Welcome, "; echo $_SESSION['username'] ; echo ", Click here to <a href='logout.php'>Logout</a></div>";

	}else{
		header("Location:main.php");
	}



		$DSN='mysql:host=localhost;dbname=base';
		$conn=new PDO($DSN,'root','');
		
		$sql = "SELECT iddonneur FROM `donneurs`;" ;
		$prDataBase=$conn->query($sql);




	echo "<br><br><br>
  <div class='container'>
  <div class='form-group'>
	<form  action='admin33.php'  method='post' enctype='multipart/form-data'>
	<br>
	<label><b>Select a donnor ID </b></label>
	<br>
	
	<select class='form-control' name='nm'> ";
	#<input class="form-control" placeholder="Enter the id" type="text" name="nm">
     while($dataRows=$prDataBase->fetch() ){
     	$iddonneur =$dataRows["iddonneur"];
     	echo "<option value ='"; 
     	echo $iddonneur ;
     	echo "'>";
     	echo $iddonneur;

     	echo "</option> ";
	}

	echo "</select><br>
	<button class='btn btn-success btn-block' type='submit' name='submitt'>Search</button>
	</form>
		<form   action='admin.php' > 
			<button  type='submit' class='btn btn-outline-danger' >Back</button> 
		</form>
 	 </div>
	</div>  ";

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
 width:30%;
 margin:0 auto;
 background-image: url('background.png');
 background-repeat: no-repeat;
  background-size: cover;
font-family: "Arial";
font-size: 18px ;
;

}
#text{
	font-size: 15px ;
}
}
</style>

</head>
<body >



</body>
</html>
