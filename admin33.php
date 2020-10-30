<?php  

	session_start();
	if ($_SESSION['username']) {
		echo "<div id=text> Welcome, "; echo $_SESSION['username'] ; echo ", Click here to <a href='logout.php'>Logout</a></div>";

	}else{
		header("Location:main.php");
	}

	

if (isset($_POST["submitt"])) {
			$DSN='mysql:host=localhost;dbname=base';
		$conn=new PDO($DSN,'root','');
		$numm = $_POST["nm"];

		$sql = "SELECT * FROM `donneurs` WHERE iddonneur='$numm' ; " ;
		$prDataBase=$conn->query($sql);

     while($dataRows=$prDataBase->fetch() ){
     	$iddonneur =$dataRows["iddonneur"];
		$nom=$dataRows["nom"];
		$prenom=$dataRows["prenom"];
		$profession=$dataRows["profession"];
		$daten = $dataRows["daten"] ;
		$lieun = $dataRows["lieun"];
		$tlphfixe=$dataRows["tlphfixe"];
		$tlph=$dataRows["tlph"];
		$email=$dataRows["email"];
		$nwilaya = $dataRows["nwilaya"] ;
		$addr = $dataRows["addr"];
		$ville=$dataRows["ville"];
		$groupage=$dataRows["groupage"];
		$existance = $dataRows["existance"];
		$img = $dataRows["img"];


	}



		echo "<br><br><br><form class='container' method='post' enctype='multipart/form-data' >";

		echo "<b>ID</b>";  
		echo "<input class='form-control' type='text' name='iddonneur' value='";
		echo $iddonneur ;
		echo "'> ";

		echo "<b>First name</b>";  
		echo "<input class='form-control' type='text' name='nom' value='";
		echo $nom ;
		echo "'> ";


		echo "<b>Last name</b>";  
		echo " <input class='form-control' type='text' name='prenom' value='";
		echo $prenom ;
		echo "'> " ;

		echo "<b>Profession </b>";  
		echo "<input class='form-control' type='text' name='profession' value='";
		echo $profession ;
		echo "'> ";


		echo "<b>Location of birthday</b>";  
		echo " <input class='form-control' type='text' name='lieun' value='";
		echo $lieun ;
		echo "'> " ;


		echo "<b>Phone number</b>";  
		echo "<input class='form-control' type='text' name='tlphfixe' value='";
		echo $tlphfixe ;
		echo "'> ";


		echo "<b>Phone number2</b>";  
		echo " <input class='form-control' type='text' name='tlph' value='";
		echo $tlph ;
		echo "'> " ;


		echo "<b>Email </b>";  
		echo "<input class='form-control' type='email' name='email' value='";
		echo $email ;
		echo "'> ";

		echo "<b>Address </b>";  
		echo " <input class='form-control' type='text' name='addr' value='";
		echo $addr ;
		echo "'> " ;


		echo "<b>City </b>";  
		echo " <input class='form-control' type='text' name='ville' value='";
		echo $ville ;
		echo "'> " ;

		echo "<b>Your current city </b>";  
		echo " <input class='form-control' type='text' name='existance' value='";
		echo $existance ;
		echo "'> " ;



		echo "<b>Bloud group &nbsp; &nbsp; &nbsp; </b>" ; 
		if ($groupage=="O+") {
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O+' checked >O+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O-'>O- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A+'>A+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A-'>A- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B+'>B+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B-'>B- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB+'>AB+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB-'>AB- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
		}
		if ($groupage=="O-") {
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O+' >O+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O-' checked>O- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A+'>A+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A-'>A- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B+'>B+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B-'>B- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB+'>AB+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB-'>AB- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
		}if ($groupage=="A+") {
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O+'>O+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O-'>O- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A+' checked >A+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A-'>A- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B+'>B+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B-'>B- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB+'>AB+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB-'>AB- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
		}if ($groupage=="A-") {
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O+' >O+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O-'>O- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A+'>A+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A-' checked >A- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B+'>B+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B-'>B- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB+'>AB+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB-'>AB- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
		}if ($groupage=="B+") {
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O+' >O+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O-'>O- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A+'>A+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A-'>A- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B+' checked >B+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B-'>B- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB+'>AB+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB-'>AB- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
		}if ($groupage=="B-") {
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O+' >O+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O-'>O- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A+'>A+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A-'>A- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B+'>B+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B-' checked>B- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB+'>AB+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB-'>AB- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
		}if ($groupage=="AB+") {
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O+' >O+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O-'>O- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A+'>A+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A-'>A- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B+'>B+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B-'>B- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB+' checked >AB+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB-'>AB- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
		}if ($groupage=="AB-") {
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O+'  >O+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='O-'>O- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A+'>A+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='A-'>A- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B+'>B+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='B-'>B- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB+'>AB+ &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
			  echo "<input class='form-check-input' type='radio' name='groupage' value='AB-' checked>AB- &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;" ;
		}


		echo "<br><br><b>State </b>";  
		echo " <input class='form-control' type='text' name='nwilaya' value='";
		echo $nwilaya ;
		echo "'> " ;


		echo "<b>Date of birthday </b>";
		echo "	<input class='form-control' type='date' name='daten' value='";
		echo $daten ; 
		echo "'>";


		echo "<b>Picture </b><br>";  
		echo "<img  id='output_image' src=' ";   
		echo  $img ;
		echo "'> " ;
		echo "		<hr></hr>

		<b>Change picture</b>
		<div id='wrapper'>
		<input  class='form-control-file' id='filetoupload'  src='"; 
		echo $img ;        
		echo "'  name='filetoupload' type='file' accept='image/*' onchange='preview_image(event)'>
		<img id='output_image'/>
		</div> 

		<br>  " ;



		echo "<button class='btn btn-primary' type='submit' name='mod' >Submit changes</button>";
		echo "<button  type='submit' name='suppr' class='btn btn-danger' >Delete donor</button>";

		echo " </form> ";
		echo "<form class='container'  action='admin2-.php' > 	<button  type='submit' class='btn btn-outline-danger' >Back</button> 
 </form>";

}





	if (isset($_POST['mod'])) {


		$DSN='mysql:host=localhost;dbname=base';
		$conn=new PDO($DSN,'root','');

		$iddonneur=$_POST['iddonneur'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$profession=$_POST['profession'];
		$daten = $_POST['daten'] ;
		$lieun = $_POST['lieun'];
		$tlphfixe=$_POST['tlphfixe'];
		$tlph=$_POST['tlph'];
		$email=$_POST['email'];
		$nwilaya = $_POST['nwilaya'] ;
		$addr = $_POST['addr'];
		$ville=$_POST['ville'];
		$groupage=$_POST['groupage'];
		$existance = $_POST['existance'];



	//	$tol = set() ;
	//	echo $tol ;


		if ($_FILES["filetoupload"]["name"] == "") {
			$sqll = "UPDATE donneurs SET nom='$nom' ,prenom='$prenom' , profession='$profession' ,daten='$daten' ,`lieun`='$lieun' , tlphfixe='$tlphfixe', tlph='$tlph', email='$fr',`nwilaya`='$nwilaya' , addr='$addr', ville='$ville', groupage='$groupage' , existance='$existance' WHERE iddonneur='$num'  ;" ;

			$prDataBase=$conn->query($sqll);

			echo " <div class='alert alert-success' role='alert'>
			  Donor with id "; echo $iddonneur ; echo" have been altered sucessfuly!
			</div> ";

		}else{
			$target_dir = "uploads/";
			$target_file = $target_dir . basename($_FILES["filetoupload"]["name"]);
			move_uploaded_file($_FILES["filetoupload"]["tmp_name"], $target_file);

			$sqll = "UPDATE donneurs SET nom='$nom' ,prenom='$prenom' , profession='$profession' ,daten='$daten' ,`lieun`='$lieun' , tlphfixe='$tlphfixe', tlph='$tlph', email='$email',`nwilaya`='$nwilaya' , addr='$addr', ville='$ville', groupage='$groupage' , existance='$existance',img='$target_file' WHERE iddonneur='$iddonneur'  ;" ;

			$prDataBase=$conn->query($sqll);
			echo " <div class='alert alert-success' role='alert'>
			  Donor with id "; echo $iddonneur ; echo" have been altered sucessfuly!
			</div> ";

		}
		echo " </form> ";
		echo "<form id='wrapper'  action='admin2-.php' > <button  type='submit' class='btn btn-outline-danger' >Back</button> </form>";

	}
	if (isset($_POST["suppr"])) {
		$DSN='mysql:host=localhost;dbname=base';
		$connn=new PDO($DSN,'root','');

		$id = $_POST["iddonneur"] ;
		$sqlll= "delete from donneurs where iddonneur='$id'" ;
		$prDataBase=$connn->query($sqlll);

		echo " <div class='alert alert-danger' role='alert'>
		  Donor with id "; echo $id ; echo" have been deleted sucessfuly!
		</div> ";

		echo " </form> ";
		echo "<form id='wrapper'  action='admin2-.php' > <button  type='submit' class='btn btn-outline-danger' >Back</button> </form>";

	}






	

?>
<html>
<head>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

	<script type='text/javascript'>
		function preview_image(event) 
		{
			var reader = new FileReader();
			reader.onload = function()
			{
				var output = document.getElementById('output_image');
				output.src = reader.result;
			}
			reader.readAsDataURL(event.target.files[0]);
		}
	</script>
	<style>

		/* Full-width inputs */
		input[type=text], input[type=password], input[type=mail], input[type=select], input[type=date] {
		  width: 100%;
		  padding: 12px 20px;
		  margin: 8px 0;
		  display: inline-block;
		  border: 1px solid #ccc;
		  box-sizing: border-box;
		}



body
{
 width:60%;
 margin:0 auto;
 background-image: url('background.png');
 background-repeat: no-repeat;
  background-size: cover;
  font-family: "Arial";
font-size: 18px ;

}

#text{
	font-size: 15px ;
}
		#output_image
		{
			max-width:300px;
		}




	</style>


</head>
<body>


</body>
</html>
